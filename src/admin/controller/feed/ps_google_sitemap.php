<?php
namespace Opencart\Admin\Controller\Extension\PSGoogleSitemap\Feed;
/**
 * Class PSGoogleSitemap
 *
 * @package Opencart\Admin\Controller\Extension\PSGoogleSitemap\Feed
 */
class PSGoogleSitemap extends \Opencart\System\Engine\Controller
{
    /**
     * @var string The support email address.
     */
    const EXTENSION_EMAIL = 'support@playfulsparkle.com';

    /**
     * @var string The documentation URL for the extension.
     */
    const EXTENSION_DOC = 'https://github.com/playfulsparkle/oc4_google_sitemap.git';

    /**
     * Displays the Google Sitemap settings page.
     *
     * This method loads the necessary language file, sets the title of the page,
     * and prepares the data for the view. It also generates the breadcrumbs for
     * navigation and retrieves configuration settings for the sitemap.
     *
     * @return void
     */
    public function index(): void
    {
        $this->load->language('extension/ps_google_sitemap/feed/ps_google_sitemap');


        if (isset($this->request->get['store_id'])) {
            $store_id = (int) $this->request->get['store_id'];
        } else {
            $store_id = 0;
        }


        $this->document->setTitle($this->language->get('heading_title'));

        $data['breadcrumbs'] = [];

        $data['breadcrumbs'][] = [
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'])
        ];

        $data['breadcrumbs'][] = [
            'text' => $this->language->get('text_extension'),
            'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true)
        ];

        $data['breadcrumbs'][] = [
            'text' => $this->language->get('heading_title'),
            'href' => $this->url->link('extension/ps_google_sitemap/feed/ps_google_sitemap', 'user_token=' . $this->session->data['user_token'])
        ];

        $data['action'] = $this->url->link('extension/ps_google_sitemap/feed/ps_google_sitemap.save', 'user_token=' . $this->session->data['user_token']);

        $data['back'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=feed');

        $data['user_token'] = $this->session->data['user_token'];

        $this->load->model('setting/setting');

        $config = $this->model_setting_setting->getSetting('feed_ps_google_sitemap', $store_id);

        $data['feed_ps_google_sitemap_status'] = isset($config['feed_ps_google_sitemap_status']) ? (bool) $config['feed_ps_google_sitemap_status'] : false;
        $data['feed_ps_google_sitemap_product'] = isset($config['feed_ps_google_sitemap_product']) ? (bool) $config['feed_ps_google_sitemap_product'] : false;
        $data['feed_ps_google_sitemap_product_images'] = isset($config['feed_ps_google_sitemap_product_images']) ? (bool) $config['feed_ps_google_sitemap_product_images'] : false;
        $data['feed_ps_google_sitemap_max_product_images'] = isset($config['feed_ps_google_sitemap_max_product_images']) ? (int) $config['feed_ps_google_sitemap_max_product_images'] : 1;
        $data['feed_ps_google_sitemap_category'] = isset($config['feed_ps_google_sitemap_category']) ? (bool) $config['feed_ps_google_sitemap_category'] : false;
        $data['feed_ps_google_sitemap_category_images'] = isset($config['feed_ps_google_sitemap_category_images']) ? (bool) $config['feed_ps_google_sitemap_category_images'] : false;
        $data['feed_ps_google_sitemap_manufacturer'] = isset($config['feed_ps_google_sitemap_manufacturer']) ? (bool) $config['feed_ps_google_sitemap_manufacturer'] : false;
        $data['feed_ps_google_sitemap_manufacturer_images'] = isset($config['feed_ps_google_sitemap_manufacturer_images']) ? (bool) $config['feed_ps_google_sitemap_manufacturer_images'] : false;
        $data['feed_ps_google_sitemap_information'] = isset($config['feed_ps_google_sitemap_information']) ? (bool) $config['feed_ps_google_sitemap_information'] : false;

        $this->load->model('localisation/language');

        $languages = $this->model_localisation_language->getLanguages();

        $data['languages'] = $languages;

        $data['store_id'] = $store_id;

        $data['stores'] = [];

        $data['stores'][] = [
            'store_id' => 0,
            'name' => $this->config->get('config_name') . '&nbsp;' . $this->language->get('text_default'),
            'href' => $this->url->link('extension/ps_google_sitemap/feed/ps_google_sitemap', 'user_token=' . $this->session->data['user_token'] . '&store_id=0'),
        ];

        $this->load->model('setting/store');

        $stores = $this->model_setting_store->getStores();

        $store_url = HTTP_CATALOG;

        foreach ($stores as $store) {
            $data['stores'][] = [
                'store_id' => $store['store_id'],
                'name' => $store['name'],
                'href' => $this->url->link('extension/ps_google_sitemap/feed/ps_google_sitemap', 'user_token=' . $this->session->data['user_token'] . '&store_id=' . $store['store_id']),
            ];

            if ((int) $store['store_id'] === $store_id) {
                $store_url = $store['url'];
            }
        }

        $data['data_feed_urls'] = [];

        foreach ($languages as $language) {
            $data['data_feed_urls'][$language['language_id']] = rtrim($store_url, '/') . '/index.php?route=extension/ps_google_sitemap/feed/ps_google_sitemap&language=' . $language['code'];
        }

        $data['text_contact'] = sprintf($this->language->get('text_contact'), self::EXTENSION_EMAIL, self::EXTENSION_EMAIL, self::EXTENSION_DOC);

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('extension/ps_google_sitemap/feed/ps_google_sitemap', $data));
    }

    /**
     * Saves the settings for the Google Sitemap.
     *
     * This method validates user permissions, processes the submitted form data,
     * and saves the settings to the database. It returns a JSON response indicating
     * success or failure.
     *
     * @return void
     */
    public function save(): void
    {
        $this->load->language('extension/ps_google_sitemap/feed/ps_google_sitemap');

        $json = [];

        if (!$this->user->hasPermission('modify', 'extension/ps_google_sitemap/feed/ps_google_sitemap')) {
            $json['error'] = $this->language->get('error_permission');
        }

        if (!$json && !isset($this->request->post['store_id'])) {
            $json['error'] = $this->language->get('error_store_id');
        }

        if (!$json && $this->request->post['feed_ps_google_sitemap_max_product_images'] < 0) {
            $json['error']['input-max-product-images'] = $this->language->get('error_max_product_images_min');
        }

        if (!$json) {
            $this->load->model('setting/setting');

            $this->model_setting_setting->editSetting('feed_ps_google_sitemap', $this->request->post, $this->request->post['store_id']);

            $json['success'] = $this->language->get('text_success');
        }

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }

    /**
     * Installs the Google Sitemap extension.
     *
     * This method will contain logic to set up the necessary configurations or
     * database tables needed for the extension upon installation. Currently, it is empty.
     *
     * @return void
     */
    public function install(): void
    {
        if ($this->user->hasPermission('modify', 'extension/ps_google_sitemap/feed/ps_google_sitemap')) {
            $this->load->model('setting/setting');

            $data = [
                'feed_ps_google_sitemap_max_product_images' => 1
            ];

            $this->model_setting_setting->editSetting('feed_ps_google_sitemap', $data);
        }
    }

    /**
     * Uninstalls the Google Sitemap extension.
     *
     * This method will contain logic to remove configurations or database tables
     * created by the extension upon uninstallation. Currently, it is empty.
     *
     * @return void
     */
    public function uninstall(): void
    {

    }
}
