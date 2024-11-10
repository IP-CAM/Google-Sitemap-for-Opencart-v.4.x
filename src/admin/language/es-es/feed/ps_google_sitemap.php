<?php
// Heading
$_['heading_title']           = 'Playful Sparkle - Google Sitemap';
$_['heading_categories']      = 'Categorías';
$_['heading_getting_started'] = 'Introducción';
$_['heading_setup']           = 'Configuración del Google Sitemap';
$_['heading_troubleshot']     = 'Solución de problemas comunes';
$_['heading_faq']             = 'Preguntas frecuentes';
$_['heading_contact']         = 'Contacto de soporte';

// Text
$_['text_extension']          = 'Extensiones';
$_['text_success']            = 'Éxito: ¡Ha modificado el feed de Google Sitemap!';
$_['text_edit']               = 'Editar Google Sitemap';
$_['text_clear']              = 'Limpiar base de datos';
$_['text_getting_started']    = '<p><strong>Descripción general:</strong> El Google Sitemap para OpenCart 4.x ayuda a aumentar la visibilidad de su tienda generando mapas de sitio XML optimizados. Estos mapas de sitio ayudan a los motores de búsqueda como Google a indexar las páginas clave de su sitio, lo que conduce a un mejor posicionamiento en los motores de búsqueda y mayor presencia en línea.</p><p><strong>Requisitos:</strong> OpenCart 4.x+, PHP 7.4+ o superior, y acceso a su <a href="https://search.google.com/search-console/about?hl=en" target="_blank" rel="external noopener noreferrer">Google Search Console</a> para la presentación del mapa de sitio.</p>';
$_['text_setup']              = '<p><strong>Configuración de Google Sitemap:</strong> Configure su mapa de sitio para incluir las páginas de Producto, Categoría, Fabricante e Información según sea necesario. Active o desactive las opciones para habilitar o deshabilitar estos tipos de páginas en la salida del mapa de sitio, adaptando el contenido del mapa a las necesidades y audiencia de su tienda.</p>';
$_['text_troubleshot']        = '<ul><li><strong>Extensión:</strong> Asegúrese de que la extensión Google Sitemap esté habilitada en la configuración de OpenCart. Si la extensión está deshabilitada, no se generará la salida del mapa de sitio.</li><li><strong>Producto:</strong> Si faltan páginas de Productos en su mapa de sitio, asegúrese de que estén habilitadas en la configuración de la extensión y que los productos relevantes tengan su estado configurado como "Habilitado".</li><li><strong>Categoría:</strong> Si no aparecen las páginas de Categorías, verifique que las categorías estén habilitadas en la configuración de la extensión y que su estado también esté configurado como "Habilitado".</li><li><strong>Fabricante:</strong> Para las páginas de Fabricante, verifique que estén habilitadas en la configuración de la extensión y que los fabricantes tengan su estado configurado como "Habilitado".</li><li><strong>Información:</strong> Si las páginas de Información no se muestran en el mapa de sitio, asegúrese de que estén habilitadas en la configuración de la extensión y que su estado esté configurado como "Habilitado".</li></ul>';
$_['text_faq']                = '<details><summary>¿Cómo envío mi mapa de sitio a Google Search Console?</summary>En Google Search Console, vaya a <em>Sitemaps</em> en el menú, ingrese la URL del mapa de sitio (normalmente /sitemap.xml), y haga clic en <em>Enviar</em>. Esto notificará a Google para que comience a rastrear su sitio.</details><details><summary>¿Por qué es importante un mapa de sitio para el SEO?</summary>Un mapa de sitio guía a los motores de búsqueda hacia las páginas más importantes de su sitio, facilitando que indexen su contenido de manera precisa, lo que puede tener un impacto positivo en los rankings de búsqueda.</details><details><summary>¿Se incluyen las imágenes en el mapa de sitio?</summary>Sí, las imágenes están incluidas en el mapa de sitio generado por esta extensión, asegurando que los motores de búsqueda puedan indexar su contenido visual junto con la URL.</details><details><summary>¿Por qué el mapa de sitio usa <em>lastmod</em> en lugar de <em>priority</em> y <em>changefreq</em>?</summary>Google ahora ignora los valores de <priority> y <changefreq>, enfocándose en <lastmod> para la frescura del contenido. Usar <lastmod> ayuda a priorizar las actualizaciones recientes.</details>';
$_['text_contact']            = '<p>Para más asistencia, póngase en contacto con nuestro equipo de soporte:</p><ul><li><strong>Contacto:</strong> <a href="mailto:%s">%s</a></li><li><strong>Documentación:</strong> <a href="%s" target="_blank" rel="noopener noreferrer">Documentación para el usuario</a></li></ul>';

// Tab
$_['tab_general']             = 'General';
$_['tab_help_and_support']    = 'Ayuda y soporte';

// Entry
$_['entry_status']            = 'Estado';
$_['entry_product']           = 'Producto';
$_['entry_category']          = 'Categoría';
$_['entry_manufacturer']      = 'Fabricante';
$_['entry_information']       = 'Información';
$_['entry_data_feed_url']     = 'URL del feed de datos';
$_['entry_active_store']      = 'Tienda activa';

// Error
$_['error_permission']        = 'Advertencia: ¡No tiene permiso para modificar el feed de Google Sitemap!';
$_['error_store_id']          = 'Advertencia: ¡El formulario no contiene store_id!';
