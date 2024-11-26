<?php
namespace Opencart\Catalog\Controller\Extension\PSGoogleSitemap\Feed;
/**
 * Class PSGoogleSitemap
 *
 *
 * This class generates an XML sitemap for Google, including products, categories,
 * manufacturers, and information pages. The sitemap is created based on the configuration
 * settings and the active languages in the OpenCart store.
 *
 * @package Opencart\Catalog\Controller\Extension\PSGoogleSitemap\Feed
 */
class PSGoogleSitemap extends \Opencart\System\Engine\Controller
{
    /**
     * Generates and outputs the Google Sitemap XML.
     *
     * This method checks if the sitemap feature is enabled in the configuration.
     * If it is, it initializes the XMLWriter, sets the XML header, and populates
     * the sitemap with URLs for products, categories, manufacturers, and
     * information pages based on the active languages.
     *
     * @return void
     */
    public function index(): void
    {
        if (!$this->config->get('feed_ps_google_sitemap_status')) {
            return;
        }

        $this->load->model('tool/image');
        $this->load->model('localisation/language');

        $languages = $this->model_localisation_language->getLanguages();

        $language = $this->config->get('config_language');

        if (isset($this->request->get['language']) && isset($languages[$this->request->get['language']])) {
            $cur_language = $languages[$this->request->get['language']];

            $language = $cur_language['code'];
        }


        $this->load->model('setting/setting');

        $config = $this->model_setting_setting->getSetting('feed_ps_google_sitemap', $this->config->get('config_store_id'));

        $sitemap_product = isset($config['feed_ps_google_sitemap_product']) ? (bool) $config['feed_ps_google_sitemap_product'] : false;
        $sitemap_product_images = isset($config['feed_ps_google_sitemap_product_images']) ? (bool) $config['feed_ps_google_sitemap_product_images'] : false;
        $sitemap_max_product_images = isset($config['feed_ps_google_sitemap_max_product_images']) ? (int) $config['feed_ps_google_sitemap_max_product_images'] : 1;
        $sitemap_category = isset($config['feed_ps_google_sitemap_category']) ? (bool) $config['feed_ps_google_sitemap_category'] : false;
        $sitemap_category_images = isset($config['feed_ps_google_sitemap_category_images']) ? (bool) $config['feed_ps_google_sitemap_category_images'] : false;
        $sitemap_manufacturer = isset($config['feed_ps_google_sitemap_manufacturer']) ? (bool) $config['feed_ps_google_sitemap_manufacturer'] : false;
        $sitemap_manufacturer_images = isset($config['feed_ps_google_sitemap_manufacturer_images']) ? (bool) $config['feed_ps_google_sitemap_manufacturer_images'] : false;
        $sitemap_information = isset($config['feed_ps_google_sitemap_information']) ? (bool) $config['feed_ps_google_sitemap_information'] : false;

        $separator = version_compare(VERSION, '4.0.2.0', '>=') ? '.' : '|';

        $xml = new \XMLWriter();
        $xml->openMemory();
        $xml->startDocument('1.0', 'UTF-8');

        $xml->startElement('urlset');
        $xml->writeAttribute('xmlns', 'http://www.sitemaps.org/schemas/sitemap/0.9');
        $xml->writeAttribute('xmlns:image', 'http://www.google.com/schemas/sitemap-image/1.1');

        #region Product
        if ($sitemap_product) {
            $this->load->model('catalog/product');

            // Fetch products in chunks to handle large datasets
            $products = $this->model_catalog_product->getProducts();

            foreach ($products as $product) {
                if (0 === (int) $product['status']) {
                    continue;
                }

                $xml->startElement('url');
                $product_url = $this->url->link('product/product', 'language=' . $language . '&product_id=' . $product['product_id']);
                $xml->writeElement('loc', str_replace('&amp;', '&', $product_url));
                $xml->writeElement('lastmod', date('Y-m-d\TH:i:sP', strtotime($product['date_modified'])));

                if ($sitemap_product_images && $sitemap_max_product_images > 0) {
                    if (!empty($product['image'])) {
                        $xml->startElement('image:image');
                        $xml->writeElement('image:loc', $this->model_tool_image->resize(html_entity_decode($product['image'], ENT_QUOTES, 'UTF-8'), $this->config->get('config_image_popup_width'), $this->config->get('config_image_popup_height')));
                        $xml->endElement();
                    }

                    if ($sitemap_max_product_images > 1) {
                        $product_images = $this->model_catalog_product->getImages($product['product_id']);
                        $product_images = array_slice($product_images, 0, $sitemap_max_product_images - 1);

                        foreach ($product_images as $product_image) {
                            if (is_file(DIR_IMAGE . html_entity_decode($product_image['image'], ENT_QUOTES, 'UTF-8'))) {
                                $xml->startElement('image:image');
                                $xml->writeElement('image:loc', $this->model_tool_image->resize(html_entity_decode($product_image['image'], ENT_QUOTES, 'UTF-8'), $this->config->get('config_image_popup_width'), $this->config->get('config_image_popup_height')));
                                $xml->endElement();
                            }
                        }
                    }
                }

                $xml->endElement();
            }
        }
        #endregion


        #region Category
        if ($sitemap_category) {
            $this->load->model('catalog/category');

            $this->getCategories($xml, $sitemap_category_images, $language, 0);
        }
        #endregion

        #region Manufacturer
        if ($sitemap_manufacturer) {
            $this->load->model('catalog/manufacturer');

            $manufacturers = $this->model_catalog_manufacturer->getManufacturers();

            foreach ($manufacturers as $manufacturer) {
                $xml->startElement('url');
                $manufacturer_url = $this->url->link('product/manufacturer' . $separator . 'info', 'language=' . $language . '&manufacturer_id=' . $manufacturer['manufacturer_id']);
                $xml->writeElement('loc', str_replace('&amp;', '&', $manufacturer_url));

                if ($sitemap_manufacturer_images && !empty($manufacturer['image'])) {
                    $xml->startElement('image:image');
                    $xml->writeElement('image:loc', $this->model_tool_image->resize(html_entity_decode($manufacturer['image'], ENT_QUOTES, 'UTF-8'), $this->config->get('config_image_popup_width'), $this->config->get('config_image_popup_height')));
                    $xml->endElement();
                }

                $xml->endElement();
            }
        }
        #endregion

        #region Information
        if ($sitemap_information) {
            $this->load->model('catalog/information');

            $informations = $this->model_catalog_information->getInformations();

            foreach ($informations as $information) {
                if (0 === (int) $information['status']) {
                    continue;
                }

                $xml->startElement('url');
                $information_url = $this->url->link('information/information', 'language=' . $language . '&information_id=' . $information['information_id']);
                $xml->writeElement('loc', str_replace('&amp;', '&', $information_url));
                $xml->endElement();
            }
        }
        #endregion

        $xml->endElement();
        $xml->endDocument();

        $this->response->addHeader('Content-Type: application/xml');
        $this->response->setOutput($xml->outputMemory());

        unset($xml);
    }

    /**
     * Recursively retrieves categories and appends them as XML elements.
     *
     * This method generates XML elements for each category with a status of 'active'
     * and appends them to the given XMLWriter instance. It includes child categories by
     * calling itself recursively.
     *
     * @param \XMLWriter $xml      The XMLWriter instance used to write the XML structure.
     * @param string     $language The language code to use in the URL link for each category.
     * @param int        $parent_id The ID of the parent category, used for retrieving child categories.
     *
     * @return void
     */
    protected function getCategories(\XMLWriter &$xml, bool $sitemap_category_images, string $language, int $parent_id): void
    {
        $categories = $this->model_catalog_category->getCategories($parent_id);

        foreach ($categories as $category) {
            if (0 === (int) $category['status']) {
                continue;
            }

            $xml->startElement('url');
            $category_url = $this->url->link('product/category', 'language=' . $language . '&path=' . $category['category_id']);
            $xml->writeElement('loc', str_replace('&amp;', '&', $category_url));
            $xml->writeElement('lastmod', date('Y-m-d\TH:i:sP', strtotime($category['date_modified'])));

            if ($sitemap_category_images && !empty($category['image'])) {
                $xml->startElement('image:image');
                $xml->writeElement('image:loc', $this->model_tool_image->resize(html_entity_decode($category['image'], ENT_QUOTES, 'UTF-8'), $this->config->get('config_image_popup_width'), $this->config->get('config_image_popup_height')));
                $xml->endElement();
            }

            $xml->endElement();

            $this->getCategories($xml, $sitemap_category_images, $language, $category['category_id']);
        }
    }
}
