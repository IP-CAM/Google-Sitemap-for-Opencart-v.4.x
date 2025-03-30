<?php
// Heading
$_['heading_title']                = 'Playful Sparkle - Google Sitemap';
$_['heading_robotstxt']            = 'Robots.txt';
$_['heading_product']              = 'Продукты';
$_['heading_category']             = 'Категории';
$_['heading_manufacturer']         = 'Производители';
$_['heading_information']          = 'Информации';
$_['heading_cms']                  = 'CMS';
$_['heading_getting_started']      = 'Начало работы';
$_['heading_setup']                = 'Настройка Google Sitemap';
$_['heading_troubleshot']          = 'Часто встречающиеся проблемы';
$_['heading_faq']                  = 'Часто задаваемые вопросы';
$_['heading_contact']              = 'Контакты службы поддержки';

// Text
$_['text_extension']               = 'Расширения';
$_['text_success']                 = 'Успех: Вы успешно изменили ленту Google Sitemap!';
$_['text_htaccess_update_success'] = 'Успех: Файл .htaccess успешно обновлён.';
$_['text_edit']                    = 'Редактировать Google Sitemap';
$_['text_clear']                   = 'Очистить базу данных';
$_['text_getting_started']         = '<p><strong>Обзор:</strong> Google Sitemap для OpenCart 4.x помогает повысить видимость вашего магазина, генерируя оптимизированные XML-карты сайта. Эти карты помогают поисковым системам, таким как Google, индексировать ключевые страницы вашего сайта, что способствует улучшению позиций в поисковой выдаче и увеличению онлайн-присутствия.</p><p><strong>Требования:</strong> OpenCart 4.x+, PHP 7.4+ или выше, а также доступ к <a href="https://search.google.com/search-console/about?hl=en" target="_blank" rel="external noopener noreferrer">Google Search Console</a> для отправки карты сайта.</p>';
$_['text_setup']                   = '<p><strong>Настройка Google Sitemap:</strong> Настройте карту сайта, чтобы включить страницы продуктов, категорий, производителей и информации по мере необходимости. Включайте или отключайте эти страницы для отображения в карте сайта, адаптируя её содержимое под потребности и аудиторию вашего магазина.</p>';
$_['text_troubleshot']             = '<ul><li><strong>Расширение:</strong> Убедитесь, что расширение Google Sitemap включено в настройках OpenCart. Если расширение отключено, карта сайта не будет сгенерирована.</li><li><strong>Продукт:</strong> Если страницы продуктов отсутствуют в вашей карте сайта, убедитесь, что они включены в настройках расширения и что для соответствующих продуктов установлен статус "Включено".</li><li><strong>Категория:</strong> Если страницы категорий не отображаются, проверьте, что категории включены в настройках расширения и их статус также установлен как "Включено".</li><li><strong>Производитель:</strong> Для страниц производителей убедитесь, что они включены в настройках расширения и что для производителей установлен статус "Включено".</li><li><strong>Информация:</strong> Если страницы информации не отображаются в карте сайта, убедитесь, что они включены в настройках расширения и что их статус установлен как "Включено".</li></ul>';
$_['text_faq']                     = '<details><summary>Как отправить карту сайта в Google Search Console?</summary>В Google Search Console перейдите в раздел <em>Карта сайта</em>, введите URL карты сайта (обычно /sitemap.xml) и нажмите <em>Отправить</em>. Это уведомит Google, чтобы он начал обходить ваш сайт.</details><details><summary>Почему карта сайта важна для SEO?</summary>Карта сайта помогает поисковым системам находить важнейшие страницы вашего сайта, облегчая их индексацию, что может положительно сказаться на позициях в поисковой выдаче.</details><details><summary>Включены ли изображения в карту сайта?</summary>Да, изображения включаются в генерируемую картой сайта, чтобы поисковые системы могли индексировать ваш визуальный контент вместе с URL.</details><details><summary>Почему в карте сайта используется <em>lastmod</em> вместо <em>priority</em> и <em>changefreq</em>?</summary>Google теперь игнорирует значения <priority> и <changefreq>, сосредотачиваясь на <lastmod> для отслеживания актуальности контента. Использование <lastmod> помогает выделять последние обновления.</details>';
$_['text_contact']                 = '<p>Для дополнительной помощи, пожалуйста, свяжитесь с нашей службой поддержки:</p><ul><li><strong>Контакт:</strong> <a href="mailto:%s">%s</a></li><li><strong>Документация:</strong> <a href="%s" target="_blank" rel="noopener noreferrer">Документация пользователя</a></li></ul>';
$_['text_user_agent_any']          = 'Любой пользовательский агент';
$_['text_allowed']                 = 'Разрешено: %s';
$_['text_disallowed']              = 'Запрещено: %s';

// Tab
$_['tab_general']                  = 'Общие';
$_['tab_help_and_support']         = 'Помощь и поддержка';
$_['tab_data_feed_url']            = 'URL потока данных';
$_['tab_data_feed_seo_url']        = 'SEO-дружелюбный URL потока данных';

// Entry
$_['entry_status']                 = 'Статус';
$_['entry_product']                = 'Продукт';
$_['entry_product_images']         = 'Экспорт изображений товаров';
$_['entry_max_product_images']     = 'Макс. количество изображений продукта';
$_['entry_category']               = 'Категория';
$_['entry_category_images']        = 'Экспорт изображений категорий';
$_['entry_manufacturer']           = 'Производитель';
$_['entry_manufacturer_images']    = 'Экспорт изображений производителей';
$_['entry_information']            = 'Информация';
$_['entry_topic']                  = 'Тема';
$_['entry_article']                = 'Статья';
$_['entry_data_feed_url']          = 'URL ленты данных';
$_['entry_active_store']           = 'Активный магазин';
$_['entry_htaccess_mod']           = 'Модификация .htaccess';
$_['entry_validation_results']     = 'Результаты проверки';
$_['entry_user_agent']             = 'User-Agent';

// Button
$_['button_patch_htaccess']        = 'Применить изменения в .htaccess';
$_['button_validate_robotstxt']    = 'Проверить правила Robots.txt';

// Help
$_['help_copy']                    = 'Копировать URL';
$_['help_open']                    = 'Открыть URL';
$_['help_product_images']          = 'Экспорт изображений товаров может сначала увеличить время обработки (только при первом обработке изображений), и размер файла XML-карты сайта увеличится.';
$_['help_htaccess_mod']            = 'SEO-дружелюбная URL-адресация потока данных требует модификации вашего файла .htaccess. Вы можете вручную добавить необходимый код, скопировав и вставив его в файл .htaccess, или просто нажать на оранжевую кнопку "Patch .htaccess", чтобы автоматически применить изменения.';

// Error
$_['error_permission']             = 'Предупреждение: У вас нет прав для изменения ленты Google Sitemap!';
$_['error_htaccess_update']        = 'Предупреждение: Произошла ошибка при обновлении файла .htaccess. Проверьте права доступа к файлу и попробуйте снова.';
$_['error_store_id']               = 'Предупреждение: В форме отсутствует store_id!';
$_['error_max_product_images_min'] = 'Значение максимального числа изображений продукта не может быть меньше нуля.';
