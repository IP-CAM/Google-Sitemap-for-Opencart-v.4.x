<?php
namespace Opencart\Catalog\Controller\Extension\PSGoogleSitemap\Feed;

class PSGoogleSitemap extends \Opencart\System\Engine\Controller
{
    private $xml;

    public function index(): void
    {
        if (!$this->config->get('feed_ps_google_sitemap_status')) {
            return;
        }

        $this->load->model('localisation/language');

        $languages = $this->model_localisation_language->getLanguages();

        $this->xml = new \XMLWriter();
        $this->xml->openMemory();
        $this->xml->startDocument('1.0', 'UTF-8');

        // Start <urlset> element
        $this->xml->startElement('urlset');
        $this->xml->writeAttribute('xmlns', 'http://www.sitemaps.org/schemas/sitemap/0.9');
        $this->xml->writeAttribute('xmlns:image', 'http://www.google.com/schemas/sitemap-image/1.1');

        #region Product
        if ($this->config->get('feed_ps_google_sitemap_product')) {
            $this->load->model('catalog/product');
            $this->load->model('tool/image');

            // Fetch products in chunks to handle large datasets
            $products = $this->model_catalog_product->getProducts();

            foreach ($products as $product) {
                $this->xml->startElement('url');
                $this->xml->writeElement('loc', $this->url->link('product/product', 'language=' . $this->config->get('config_language') . '&product_id=' . $product['product_id']));
                $this->xml->writeElement('changefreq', 'weekly');
                $this->xml->writeElement('lastmod', date('Y-m-d\TH:i:sP', strtotime($product['date_modified'])));
                $this->xml->writeElement('priority', '1.0');

                if (!empty($product['image'])) {
                    $this->xml->startElement('image:image');
                    $this->xml->writeElement('image:loc', $this->model_tool_image->resize(html_entity_decode($product['image'], ENT_QUOTES, 'UTF-8'), $this->config->get('config_image_popup_width'), $this->config->get('config_image_popup_height')));
                    $caption = html_entity_decode($product['name'], ENT_QUOTES, 'UTF-8');
                    $this->xml->writeElement('image:caption', $caption);
                    $this->xml->writeElement('image:title', $caption);
                    $this->xml->endElement();
                }

                $this->xml->endElement();
            }
        }
        #endregion


        #region Category
        if ($this->config->get('feed_ps_google_sitemap_category')) {
            $this->load->model('catalog/category');

            $this->getCategories(0);
        }
        #endregion

        #region Manufacturer
        if ($this->config->get('feed_ps_google_sitemap_manufacturer')) {
            $this->load->model('catalog/manufacturer');

            $manufacturers = $this->model_catalog_manufacturer->getManufacturers();

            foreach ($manufacturers as $manufacturer) {
                $this->xml->startElement('url');
                $this->xml->writeElement('loc', $this->url->link('product/manufacturer', 'language=' . $this->config->get('config_language') . '&manufacturer_id=' . $manufacturer['manufacturer_id']));
                $this->xml->writeElement('changefreq', 'weekly');
                $this->xml->writeElement('priority', '0.7');
                $this->xml->endElement();
            }
        }
        #endregion

        #region Information
        if ($this->config->get('feed_ps_google_sitemap_information')) {
            $this->load->model('catalog/information');

            $informations = $this->model_catalog_information->getInformations();

            foreach ($informations as $information) {
                $this->xml->startElement('url');
                $this->xml->writeElement('loc', $this->url->link('information/information', 'language=' . $this->config->get('config_language') . '&information_id=' . $information['information_id']));
                $this->xml->writeElement('changefreq', 'weekly');
                $this->xml->writeElement('priority', '0.5');
                $this->xml->endElement();
            }
        }
        #endregion

        // End <urlset> element
        $this->xml->endElement();
        $this->xml->endDocument();

        $this->response->addHeader('Content-Type: application/xml');
        $this->response->setOutput($this->xml->outputMemory());
    }

    protected function getCategories($parent_id): void
    {
        $categories = $this->model_catalog_category->getCategories($parent_id);

        foreach ($categories as $category) {
            $this->xml->startElement('url');
            $this->xml->writeElement('loc', $this->url->link('product/category', 'language=' . $this->config->get('config_language') . '&path=' . $category['category_id']));
            $this->xml->writeElement('changefreq', 'weekly');
            $this->xml->writeElement('priority', '0.7');
            $this->xml->endElement();

            if ($category['category_id'] > 0) {
                $this->getCategories($category['category_id']);
            }
        }
    }
}
