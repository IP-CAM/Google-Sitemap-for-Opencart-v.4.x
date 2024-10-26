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

        $data['feed_ps_google_sitemap_status'] = $this->config->get('feed_ps_google_sitemap_status');
        $data['feed_ps_google_sitemap_product'] = $this->config->get('feed_ps_google_sitemap_product');
        $data['feed_ps_google_sitemap_category'] = $this->config->get('feed_ps_google_sitemap_category');
        $data['feed_ps_google_sitemap_manufacturer'] = $this->config->get('feed_ps_google_sitemap_manufacturer');
        $data['feed_ps_google_sitemap_information'] = $this->config->get('feed_ps_google_sitemap_information');

        $this->load->model('localisation/language');

        $languages = $this->model_localisation_language->getLanguages();

        $data['languages'] = $languages;

        $data['data_feed_urls'] = [];

        foreach ($languages as $language) {
            $data['data_feed_urls'][$language['language_id']] = HTTP_CATALOG . 'index.php?route=extension/ps_google_sitemap/feed/ps_google_sitemap&language=' . $language['code'];
        }

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

        if (!$json) {
            $this->load->model('setting/setting');

            $this->model_setting_setting->editSetting('feed_ps_google_sitemap', $this->request->post);

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
