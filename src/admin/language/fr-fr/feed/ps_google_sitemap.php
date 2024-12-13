<?php
// Heading
$_['heading_title']                = 'Playful Sparkle - Google Sitemap';
$_['heading_robotstxt']            = 'Robots.txt';
$_['heading_product']              = 'Produits';
$_['heading_category']             = 'Catégories';
$_['heading_manufacturer']         = 'Fabricants';
$_['heading_information']          = 'Informations';
$_['heading_getting_started']      = 'Commencer';
$_['heading_setup']                = 'Configuration du Google Sitemap';
$_['heading_troubleshot']          = 'Dépannage courant';
$_['heading_faq']                  = 'FAQ';
$_['heading_contact']              = 'Contacter le support';

// Text
$_['text_extension']               = 'Extensions';
$_['text_success']                 = 'Succès : Vous avez modifié le flux Google Sitemap !';
$_['text_htaccess_update_success'] = 'Succès : Le fichier .htaccess a été mis à jour avec succès.';
$_['text_edit']                    = 'Modifier le Google Sitemap';
$_['text_clear']                   = 'Effacer la base de données';
$_['text_getting_started']         = '<p><strong>Aperçu :</strong> Le Google Sitemap pour OpenCart 4.x permet d\'améliorer la visibilité de votre boutique en générant des sitemaps XML optimisés. Ces sitemaps aident les moteurs de recherche comme Google à indexer les pages principales de votre site, ce qui améliore votre classement dans les résultats de recherche et augmente votre présence en ligne.</p><p><strong>Prérequis :</strong> OpenCart 4.x+, PHP 7.4+ ou version supérieure, et un accès à votre <a href="https://search.google.com/search-console/about?hl=en" target="_blank" rel="external noopener noreferrer">Google Search Console</a> pour soumettre le sitemap.</p>';
$_['text_setup']                   = '<p><strong>Configurer Google Sitemap :</strong> Configurez votre sitemap pour inclure les pages Produits, Catégories, Fabricants et Informations selon vos besoins. Activez ou désactivez ces types de pages dans le sitemap en fonction de vos besoins et de votre public cible.</p>';
$_['text_troubleshot']             = '<ul><li><strong>Extension :</strong> Assurez-vous que l\'extension Google Sitemap est activée dans les paramètres d\'OpenCart. Si l\'extension est désactivée, le sitemap ne sera pas généré.</li><li><strong>Produit :</strong> Si les pages Produits manquent dans votre sitemap, assurez-vous qu\'elles sont activées dans les paramètres de l\'extension et que les produits concernés sont définis comme "Activé".</li><li><strong>Catégorie :</strong> Si les pages Catégories n\'apparaissent pas, vérifiez que les catégories sont activées dans les paramètres de l\'extension et que leur statut est également défini sur "Activé".</li><li><strong>Fabricant :</strong> Pour les pages Fabricants, vérifiez qu\'elles sont activées dans les paramètres de l\'extension et que les fabricants sont définis comme "Activé".</li><li><strong>Informations :</strong> Si les pages Informations ne s\'affichent pas dans le sitemap, assurez-vous qu\'elles sont activées dans les paramètres de l\'extension et que leur statut est défini sur "Activé".</li></ul>';
$_['text_faq']                     = '<details><summary>Comment soumettre mon sitemap à Google Search Console ?</summary>Dans Google Search Console, accédez à <em>Sitemaps</em> dans le menu, entrez l\'URL du sitemap (généralement /sitemap.xml) et cliquez sur <em>Soumettre</em>. Cela informera Google de commencer à explorer votre site.</details><details><summary>Pourquoi un sitemap est-il important pour le SEO ?</summary>Un sitemap guide les moteurs de recherche vers les pages les plus importantes de votre site, facilitant leur indexation précise, ce qui peut améliorer vos classements dans les résultats de recherche.</details><details><summary>Les images sont-elles incluses dans le sitemap ?</summary>Oui, les images sont incluses dans le sitemap généré par cette extension, permettant aux moteurs de recherche d\'indexer votre contenu visuel avec l\'URL.</details><details><summary>Pourquoi le sitemap utilise-t-il <em>lastmod</em> au lieu de <em>priority</em> et <em>changefreq</em> ?</summary>Google ignore désormais les valeurs <priority> et <changefreq>, se concentrant sur <lastmod> pour la fraîcheur du contenu. L\'utilisation de <lastmod> permet de prioriser les mises à jour récentes.</details>';
$_['text_contact']                 = '<p>Pour toute assistance supplémentaire, veuillez contacter notre équipe de support :</p><ul><li><strong>Contact :</strong> <a href="mailto:%s">%s</a></li><li><strong>Documentation :</strong> <a href="%s" target="_blank" rel="noopener noreferrer">Documentation utilisateur</a></li></ul>';
$_['text_user_agent_any']          = 'Tout agent utilisateur';
$_['text_allowed']                 = 'Autorisé : %s';
$_['text_disallowed']              = 'Interdit : %s';

// Tab
$_['tab_general']                  = 'Général';
$_['tab_help_and_support']         = 'Aide &amp; Support';
$_['tab_data_feed_url']            = 'URL du flux de données';
$_['tab_data_feed_seo_url']        = 'URL du flux de données optimisée SEO';

// Entry
$_['entry_status']                 = 'Statut';
$_['entry_product']                = 'Produit';
$_['entry_product_images']         = 'Exporter les images des produits';
$_['entry_max_product_images']     = 'Nombre maximum d\'images de produits';
$_['entry_category']               = 'Catégorie';
$_['entry_category_images']        = 'Exporter les images des catégories';
$_['entry_manufacturer']           = 'Fabricant';
$_['entry_manufacturer_images']    = 'Exporter les images des fabricants';
$_['entry_information']            = 'Information';
$_['entry_data_feed_url']          = 'URL du flux de données';
$_['entry_active_store']           = 'Magasin actif';
$_['entry_htaccess_mod']           = 'Modification de .htaccess';
$_['entry_validation_results']     = 'Résultats de la validation';
$_['entry_user_agent']             = 'Agent utilisateur';

// Button
$_['button_patch_htaccess']        = 'Appliquer la modification à .htaccess';
$_['button_validate_robotstxt']    = 'Valider les règles Robots.txt';

// Help
$_['help_copy']                    = 'Copier l\'URL';
$_['help_open']                    = 'Ouvrir l\'URL';
$_['help_product_images']          = 'L’exportation des images de produits peut augmenter le temps de traitement au début (seulement lors du premier traitement des images), et la taille du fichier sitemap XML sera plus grande en conséquence.';
$_['help_htaccess_mod']            = 'L\'URL du flux de données optimisée pour le SEO nécessite une modification de votre fichier .htaccess. Vous pouvez ajouter le code requis manuellement en le copiant et en le collant dans votre fichier .htaccess, ou simplement cliquer sur le bouton orange « Patch .htaccess » pour appliquer les modifications automatiquement.';

// Error
$_['error_permission']             = 'Avertissement : Vous n\'avez pas l\'autorisation de modifier le flux Google Sitemap !';
$_['error_htaccess_update']        = 'Avertissement : Une erreur s’est produite lors de la mise à jour du fichier .htaccess. Veuillez vérifier les permissions du fichier et réessayer.';
$_['error_store_id']               = 'Avertissement : Le formulaire ne contient pas d\'ID de magasin !';
$_['error_max_product_images_min'] = 'La valeur du nombre maximum d\'images de produits ne peut pas être inférieure à zéro.';
