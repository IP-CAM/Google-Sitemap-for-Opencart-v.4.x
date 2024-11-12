<?php
// Heading
$_['heading_title']                = 'Playful Sparkle - Google Sitemap';
$_['heading_product']              = 'Produkte';
$_['heading_category']             = 'Kategorien';
$_['heading_manufacturer']         = 'Hersteller';
$_['heading_information']          = 'Informationen';
$_['heading_getting_started']      = 'Erste Schritte';
$_['heading_setup']                = 'Einrichtung des SEO Pack';
$_['heading_troubleshot']          = 'Häufige Fehlersuche';
$_['heading_faq']                  = 'Häufig gestellte Fragen';
$_['heading_contact']              = 'Support kontaktieren';

// Text
$_['text_extension']               = 'Erweiterungen';
$_['text_success']                 = 'Erfolg: Sie haben den Google Sitemap-Feed geändert!';
$_['text_edit']                    = 'Google Sitemap bearbeiten';
$_['text_clear']                   = 'Datenbank leeren';
$_['text_getting_started']         = '<p><strong>Überblick:</strong> Die Google Sitemap-Erweiterung für OpenCart 4.x hilft dabei, die Sichtbarkeit Ihres Shops zu erhöhen, indem optimierte XML-Sitemaps generiert werden. Diese Sitemaps helfen Suchmaschinen wie Google, die wichtigen Seiten Ihrer Website zu indexieren, was zu besseren Suchmaschinenrankings und einer erhöhten Online-Präsenz führt.</p><p><strong>Voraussetzungen:</strong> OpenCart 4.x+, PHP 7.4+ oder höher sowie Zugang zu Ihrer <a href="https://search.google.com/search-console/about?hl=de" target="_blank" rel="external noopener noreferrer">Google Search Console</a> für die Einreichung der Sitemap.</p>';
$_['text_setup']                   = '<p><strong>Einrichten der Google Sitemap:</strong> Konfigurieren Sie Ihre Sitemap, um nach Bedarf Produkt-, Kategorie-, Hersteller- und Informationsseiten einzuschließen. Aktivieren oder deaktivieren Sie die Optionen, um diese Seitentypen im Sitemap-Ausgang anzuzeigen, und passen Sie den Inhalt der Sitemap an die Bedürfnisse und das Publikum Ihres Shops an.</p>';
$_['text_troubleshot']             = '<ul><li><strong>Erweiterung:</strong> Stellen Sie sicher, dass die Google Sitemap-Erweiterung in Ihren OpenCart-Einstellungen aktiviert ist. Wenn die Erweiterung deaktiviert ist, wird die Sitemap nicht generiert.</li><li><strong>Produkt:</strong> Wenn Produktseiten in Ihrer Sitemap fehlen, stellen Sie sicher, dass sie in den Erweiterungseinstellungen aktiviert sind und dass der Status der relevanten Produkte auf "Aktiv" gesetzt ist.</li><li><strong>Kategorie:</strong> Wenn Kategorie-Seiten nicht angezeigt werden, überprüfen Sie, ob die Kategorien in den Erweiterungseinstellungen aktiviert sind und ob ihr Status ebenfalls auf "Aktiv" gesetzt ist.</li><li><strong>Hersteller:</strong> Überprüfen Sie für Herstellerseiten, ob sie in den Erweiterungseinstellungen aktiviert sind und ob die Hersteller ihren Status auf "Aktiv" gesetzt haben.</li><li><strong>Information:</strong> Wenn Informationsseiten in der Sitemap nicht angezeigt werden, stellen Sie sicher, dass sie in den Erweiterungseinstellungen aktiviert sind und dass ihr Status auf "Aktiv" gesetzt ist.</li></ul>';
$_['text_faq']                     = '<details><summary>Wie reiche ich meine Sitemap bei der Google Search Console ein?</summary>Gehen Sie in der Google Search Console zu <em>Sitemaps</em> im Menü, geben Sie die URL der Sitemap ein (typischerweise /sitemap.xml) und klicken Sie auf <em>Einreichen</em>. Damit benachrichtigen Sie Google, Ihre Website zu crawlen.</details><details><summary>Warum ist eine Sitemap wichtig für SEO?</summary>Eine Sitemap leitet Suchmaschinen zu den wichtigsten Seiten Ihrer Website, was es ihnen erleichtert, Ihre Inhalte genau zu indexieren, was sich positiv auf die Suchrankings auswirken kann.</details><details><summary>Sind Bilder in der Sitemap enthalten?</summary>Ja, Bilder sind in der von dieser Erweiterung generierten Sitemap enthalten, sodass Suchmaschinen Ihren visuellen Inhalt zusammen mit der URL indexieren können.</details><details><summary>Warum verwendet die Sitemap <em>lastmod</em> anstelle von <em>priority</em> und <em>changefreq</em>?</summary>Google ignoriert jetzt die Werte <priority> und <changefreq> und konzentriert sich stattdessen auf <lastmod> für die Frische des Inhalts. Die Verwendung von <lastmod> hilft, kürzliche Aktualisierungen zu priorisieren.</details>';
$_['text_contact']                 = '<p>Für weitere Unterstützung wenden Sie sich bitte an unser Support-Team:</p><ul><li><strong>Kontakt:</strong> <a href="mailto:%s">%s</a></li><li><strong>Dokumentation:</strong> <a href="%s" target="_blank" rel="noopener noreferrer">Benutzerdokumentation</a></li></ul>';

// Tab
$_['tab_general']                  = 'Allgemein';
$_['tab_help_and_support']         = 'Hilfe &amp; Unterstützung';

// Entry
$_['entry_status']                 = 'Status';
$_['entry_product']                = 'Produkt';
$_['entry_product_images']         = 'Produktbilder exportieren';
$_['entry_max_product_images']     = 'Max. Produktbilder';
$_['entry_category']               = 'Kategorie';
$_['entry_category_images']        = 'Kategoriebilder exportieren';
$_['entry_manufacturer']           = 'Hersteller';
$_['entry_manufacturer_images']    = 'Herstellerbilder exportieren';
$_['entry_information']            = 'Information';
$_['entry_data_feed_url']          = 'Daten-Feed-Url';
$_['entry_active_store']           = 'Aktiver Shop';

// Help
$_['help_product_images']          = 'Das Exportieren von Produktbildern kann anfänglich die Verarbeitungszeit erhöhen (nur beim ersten Verarbeiten der Bilder), und die XML-Sitemap-Datei wird dadurch größer.';

// Error
$_['error_permission']             = 'Warnung: Sie haben keine Berechtigung, den Google Sitemap-Feed zu ändern!';
$_['error_store_id']               = 'Warnung: Das Formular enthält keine store_id!';
$_['error_max_product_images_min'] = 'Der Wert der maximalen Produktbilder kann nicht kleiner als null sein.';
