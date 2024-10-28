<?php
// Heading
$_['heading_title']           = 'Playful Sparkle - Google Oldaltérkép';
$_['heading_getting_started'] = 'Kezdő lépések';
$_['heading_setup']           = 'Google Sitemap beállítása';
$_['heading_troubleshot']     = 'Gyakori hibakeresési lépések';
$_['heading_faq']             = 'GYIK';
$_['heading_contact']         = 'Kapcsolatfelvétel a támogatással';

// Text
$_['text_extension']          = 'Bővítmények';
$_['text_success']            = 'Siker: A Google Oldaltérkép feedet módosította!';
$_['text_edit']               = 'Google Oldaltérkép szerkesztése';
$_['text_clear']              = 'Adatbázis törlése';
$_['text_categories']         = 'Kategóriák';
$_['text_getting_started']    = '<p><strong>Áttekintés:</strong> A Google Sitemap kiegészítő az OpenCart 4-hez segít növelni az üzlet láthatóságát optimalizált XML térképek generálásával. Ezek a térképek segítik a keresőmotorokat, mint például a Google, az Ön webhelyének kulcsfontosságú oldalainak indexelésében, ami jobb keresőoptimalizálási rangsoroláshoz és megnövekedett online jelenléthez vezet.</p><p><strong>Követelmények:</strong> OpenCart 4.x, PHP 7.3 vagy újabb, valamint hozzáférés a <a href="https://search.google.com/search-console/about?hl=hu" target="_blank" rel="external noopener noreferrer">Google Search Console</a>-hoz a térkép benyújtásához.</p>';
$_['text_setup']              = '<p><strong>A Google Sitemap beállítása:</strong> Konfigurálja a térképet, hogy szükség szerint tartalmazza a Termék, Kategória, Gyártó és Információs oldalakat. Változtassa meg a beállításokat, hogy engedélyezze vagy letiltsa ezeket az oldal típusokat a térkép kimenetében, testre szabva a térkép tartalmát az üzlet igényeinek és közönségének megfelelően.</p>';
$_['text_troubleshot']        = '<ul><li><strong>Kiegészítő:</strong> Győződjön meg arról, hogy a Google Sitemap kiegészítő engedélyezve van az OpenCart beállításokban. Ha a kiegészítő le van tiltva, a térkép kimenete nem lesz generálva.</li><li><strong>Termék:</strong> Ha a Termék oldalak hiányoznak a térképből, győződjön meg arról, hogy engedélyezve vannak a kiegészítő beállításaiban, és hogy a megfelelő termékek állapota "Engedélyezett".</li><li><strong>Kategória:</strong> Ha a Kategória oldalak nem jelennek meg, ellenőrizze, hogy a kategóriák engedélyezve vannak-e a kiegészítő beállításaiban, és hogy azok állapota is "Engedélyezett".</li><li><strong>Gyártó:</strong> A Gyártó oldalak esetében ellenőrizze, hogy azok engedélyezve vannak a kiegészítő beállításaiban, és hogy a gyártók állapota "Engedélyezett".</li><li><strong>Információ:</strong> Ha az Információs oldalak nem jelennek meg a térképen, győződjön meg arról, hogy engedélyezve vannak a kiegészítő beállításaiban, és hogy az állapotuk "Engedélyezett".</li></ul>';
$_['text_faq']                = '<details><summary>Hogyan tudom benyújtani a térképet a Google Search Console-ba?</summary>A Google Search Console-ban lépjen a menüben a <em>Térképek</em> menüpontra, adja meg a térkép URL-jét (általában /sitemap.xml), majd kattintson a <em>Benyújtás</em> gombra. Ezzel értesíti a Google-t, hogy kezdje el feltérképezni az Ön webhelyét.</details><details><summary>Miért fontos a térkép az SEO szempontjából?</summary>A térkép irányítja a keresőmotorokat az Ön webhelyének legfontosabb oldalaira, megkönnyítve számukra a tartalom pontos indexelését, ami pozitív hatással lehet a keresési rangsorolásra.</details><details><summary>Az képek benne vannak a térképen?</summary>Ez a kiegészítő a szöveges tartalomra összpontosít, így a képek általában alapértelmezetten nincsenek benne. Ellenőrizze a konkrét követelményeket, ha médiafájlokat szeretne belefoglalni.</details><details><summary>Miért használ a térkép <em>lastmod</em>-ot a <em>priority</em> és a <em>changefreq</em> helyett?</summary>A Google most már figyelmen kívül hagyja a <priority> és <changefreq> értékeket, inkább a <lastmod> értékre összpontosít a tartalom frissessége szempontjából. A <lastmod> használata segít prioritásként kezelni a legfrissebb frissítéseket.</details>';
$_['text_contact']            = '<p>További segítségért kérjük, lépjen kapcsolatba ügyfélszolgálati csapatunkkal:</p><ul><li><strong>Kapcsolat:</strong> <a href="mailto:%s">%s</a></li><li><strong>Dokumentáció:</strong> <a href="%s" target="_blank" rel="noopener noreferrer">Felhasználói dokumentáció</a></li></ul>';

// Tab
$_['tab_general']             = 'Általános beállítások';
$_['tab_help_and_support']    = 'Segítség &amp; támogatás';

// Entry
$_['entry_status']            = 'Állapot';
$_['entry_product']           = 'Termék';
$_['entry_category']          = 'Kategória';
$_['entry_manufacturer']      = 'Gyártó';
$_['entry_information']       = 'Információ';
$_['entry_data_feed_url']     = 'Adatfeed URL';

// Error
$_['error_permission']        = 'Figyelmeztetés: Nincs jogosultsága a Google Oldaltérkép feed módosításához!';
