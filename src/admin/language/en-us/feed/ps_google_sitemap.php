<?php
// Heading
$_['heading_title']                = 'Playful Sparkle - Google Sitemap';
$_['heading_product']              = 'Products';
$_['heading_category']             = 'Categories';
$_['heading_manufacturer']         = 'Manufacturers';
$_['heading_information']          = 'Informations';
$_['heading_getting_started']      = 'Getting Started';
$_['heading_setup']                = 'Setting Up Google Sitemap';
$_['heading_troubleshot']          = 'Common Troubleshooting';
$_['heading_faq']                  = 'FAQ';
$_['heading_contact']              = 'Contact Support';

// Text
$_['text_extension']               = 'Extensions';
$_['text_success']                 = 'Success: You have modified Google Sitemap feed!';
$_['text_edit']                    = 'Edit Google Sitemap';
$_['text_clear']                   = 'Clear Database';
$_['text_getting_started']         = '<p><strong>Overview:</strong> The Google Sitemap for OpenCart 4.x helps boost your store’s visibility by generating optimized XML sitemaps. These sitemaps help search engines like Google index your site’s key pages, leading to better search engine rankings and increased online presence.</p><p><strong>Requirements:</strong> OpenCart 4.x+, PHP 7.4+ or higher, and access to your <a href="https://search.google.com/search-console/about?hl=en" target="_blank" rel="external noopener noreferrer">Google Search Console</a> for sitemap submission.</p>';
$_['text_setup']                   = '<p><strong>Setting Up Google Sitemap:</strong> Configure your sitemap to include Product, Category, Manufacturer, and Information pages as needed. Toggle the options to enable or disable these page types in the sitemap output, tailoring the sitemap content to your store’s needs and audience.</p>';
$_['text_troubleshot']             = '<ul><li><strong>Extension:</strong> Ensure that the Google Sitemap extension is enabled in your OpenCart settings. If the extension is disabled, the sitemap output will not be generated.</li><li><strong>Product:</strong> If Product pages are missing from your sitemap, ensure they are enabled in the extension settings and that the relevant products have their status set to “Enabled.”</li><li><strong>Category:</strong> If Category pages are not appearing, check that the categories are enabled in the extension settings and that their status is also set to “Enabled.”</li><li><strong>Manufacturer:</strong> For Manufacturer pages, verify that they are enabled in the extension settings and that the manufacturers have their status set to “Enabled.”</li><li><strong>Information:</strong> If Information pages are not showing in the sitemap, make sure they are enabled in the extension settings and that their status is set to “Enabled.”</li></ul>';
$_['text_faq']                     = '<details><summary>How do I submit my sitemap to Google Search Console?</summary>In Google Search Console, go to <em>Sitemaps</em> in the menu, enter the sitemap URL (typically /sitemap.xml), and click <em>Submit</em>. This will notify Google to start crawling your site.</details><details><summary>Why is a sitemap important for SEO?</summary>A sitemap guides search engines to your site’s most important pages, making it easier for them to index your content accurately, which can positively impact search rankings.</details><details><summary>Are images included in the sitemap?</summary>Yes, images are included in the generated sitemap by this extension, ensuring that search engines can index your visual content along with the url.</details><details><summary>Why does the sitemap use <em>lastmod</em> instead of <em>priority</em> and <em>changefreq</em>?</summary>Google now ignores <priority> and <changefreq> values, focusing instead on <lastmod> for content freshness. Using <lastmod> helps prioritize recent updates.</details>';
$_['text_contact']                 = '<p>For further assistance, please reach out to our support team:</p><ul><li><strong>Contact:</strong> <a href="mailto:%s">%s</a></li><li><strong>Documentation:</strong> <a href="%s" target="_blank" rel="noopener noreferrer">User Documentation</a></li></ul>';

// Tab
$_['tab_general']                  = 'General';
$_['tab_help_and_support']         = 'Help &amp; Support';

// Entry
$_['entry_status']                 = 'Status';
$_['entry_product']                = 'Product';
$_['entry_product_images']         = 'Export product images';
$_['entry_max_product_images']     = 'Max. product images';
$_['entry_category']               = 'Category';
$_['entry_category_images']        = 'Export category images';
$_['entry_manufacturer']           = 'Manufacturer';
$_['entry_manufacturer_images']    = 'Export manufacturer image';
$_['entry_information']            = 'Information';
$_['entry_data_feed_url']          = 'Data Feed Url';
$_['entry_active_store']           = 'Active Store';

// Help
$_['help_product_images']          = 'Exporting product images may increase processing time initially (only when images are processed for the first time), and the XML sitemap file size will be larger as a result.';

// Error
$_['error_permission']             = 'Warning: You do not have permission to modify Google Sitemap feed!';
$_['error_store_id']               = 'Warning: Form does not contain store_id!';
$_['error_max_product_images_min'] = 'The value of max. product images cannot be less than zero.';
