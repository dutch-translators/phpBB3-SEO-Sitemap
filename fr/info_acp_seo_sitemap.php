<?php

/**
*
* info_acp_seo_sitemap [Français]
*
* @package phpBB3 SEO Sitemap
* @copyright (c) 2014 www.phpbb-work.ru
* @license http://opensource.org/licenses/gpl-license.php Licence Publique Générale GNU
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'SEOMAP'						=> 'Plan de site SEO',
	'SEOMAP_VERSION'				=> 'Version de l’extension : %s. Consultez <a style="font-weight: bold;" href="https://www.phpbb.com/customise/db/extension/seo_sitemap/" onclick="window.open(this.href);return false;">la page de l’extension</a> pour la version la plus récente ou pour obtenir de l’aide concernant cette extension.',
	'SEOMAP_EXPLAIN'				=> 'Notez que l’utilisation des paramètres optionnels Priorité et Changefreq pourrait vous être bénéfique, mais il est recommandé de les utiliser conjointement et d’analyser réellement quelles pages devraient être considérées comme plus importantes que d’autres avant de prendre des décisions. Si vous ne savez pas ou êtes incertain, il vaut mieux désactiver ces options. <a href="http://www.sitemaps.org/protocol.html#xmlTagDefinitions" onclick="window.open(this.href);return false;">Cliquez ici</a> pour lire plus de détails sur la priorité et le changefreq.<br />Entrez 0 si vous souhaitez désactiver la priorité.',
	'SEOMAP_SETTINGS'				=> 'Paramètres du plan de site SEO',
	'SEOMAP_SETTINGS_UPDATED'		=> '<strong>Paramètres du plan de site SEO mis à jour</strong>',
	'SEOMAP_SAVED'					=> 'Paramètres du plan de site enregistrés avec succès.',
	'SEOMAP_EXCLUDED'				=> 'Forums exclus',
	'SEOMAP_EXCLUDED_EXPLAIN'		=> 'Les forums sélectionnés ici et les sujets à l’intérieur seront exclus du plan de site.<br /><strong>Attention :</strong> Les catégories et les forums sans sujets sont exclus par défaut.',
	'SEOMAP_CACHE_TIME'				=> 'Durée de mise en cache',
	'SEOMAP_CACHE_TIME_EXPLAIN'		=> 'Pour réduire la charge serveur, le plan de site sera mis en cache pendant un certain temps. Après ce temps, il sera recréé. Entrez le nombre d’heures pendant lesquelles le plan de site sera mis en cache ou entrez 0 pour désactiver la mise en cache.',
	'SEOMAP_URL'					=> 'URL du plan de site : <a href="%s" onclick="window.open(this.href);return false;">%s</a>',
	'SEOMAP_URL_COUNT'				=> 'Nombre total d’URL dans le plan de site : %s',
	'SEOMAP_URL_LIMIT'				=> 'Limite d’URL',
	'SEOMAP_URL_LIMIT_EXPLAIN'		=> 'Nombre maximum d’URL dans le fichier du plan de site, jusqu’à 50 000 selon le protocole des plans de site. Diminuez cette valeur si vous rencontrez des problèmes de dépassement de limites. Si le nombre d’URL sur votre forum dépasse ce nombre, le plan de site sera automatiquement divisé en plusieurs fichiers.',
	'SEOMAP_BATCH_SIZE'				=> 'Taille de traitement par lots préférée',
	'SEOMAP_BATCH_SIZE_EXPLAIN'		=> 'Diminuez la taille des lots en cas d’erreurs de limite de mémoire PHP lors de la génération des données du plan de site. Notez que le temps requis pour la génération du plan de site augmentera de manière significative à chaque réduction de la valeur de la taille des lots.',
	'SEOMAP_PRIORITY_0'				=> 'Priorité pour les sujets par défaut',
	'SEOMAP_PRIORITY_1'				=> 'Priorité pour les sujets épinglés',
	'SEOMAP_PRIORITY_2'				=> 'Priorité pour les annonces',
	'SEOMAP_PRIORITY_3'				=> 'Priorité pour les annonces globales',
	'SEOMAP_PRIORITY_4'				=> 'Priorité pour les sujets d’article',
	'SEOMAP_PRIORITY_F'				=> 'Priorité pour les forums',
	'SEOMAP_FREQ_0'					=> 'Changefreq pour les sujets par défaut',
	'SEOMAP_FREQ_1'					=> 'Changefreq pour les sujets épinglés',
	'SEOMAP_FREQ_2'					=> 'Changefreq pour les annonces',
	'SEOMAP_FREQ_3'					=> 'Changefreq pour les annonces globales',
	'SEOMAP_FREQ_4'					=> 'Changefreq pour les sujets d’article',
	'SEOMAP_FREQ_F'					=> 'Changefreq pour les forums',
	'SEOMAP_FREQ_NEVER'				=> 'Jamais',
	'SEOMAP_FREQ_YEARLY'			=> 'Annuellement',
	'SEOMAP_FREQ_MONTHLY'			=> 'Mensuellement',
	'SEOMAP_FREQ_WEEKLY'			=> 'Hebdomadairement',
	'SEOMAP_FREQ_DAILY'				=> 'Quotidiennement',
	'SEOMAP_FREQ_HOURLY'			=> 'Horairement',
	'SEOMAP_FREQ_ALWAYS'			=> 'Toujours',
	'SEOMAP_NO_DATA'				=> 'Aucune donnée pour le plan de site. Vérifiez l’existence et la disponibilité d’au moins un sujet pour le compte invité.',
	'SEOMAP_NO_FILE'				=> 'Impossible d’ouvrir le fichier :<br /><strong>%s</strong>',
	'SEOMAP_CANT_WRITE'				=> 'Le dossier <strong>%s</strong> n’existe pas ou n’est pas accessible en écriture. Corrigez cela manuellement à l’aide d’un client FTP.',
	'SEOMAP_COPYRIGHT'				=> 'MODs et Extensions phpBB',

// Section de synchronisation
	'SEOMAP_SYNC_COMPLETE' 			=> 'Synchronisation terminée avec succès.<br /><br /><a style="font-weight: bold;" href="%s">&laquo; Retour aux paramètres</a>',
	'SEOMAP_SYNC_PROCESS'			=> '<strong>Synchronisation en cours. Ne fermez pas cette page et n’interrompez pas le script avant qu’il n’ait terminé toutes les actions.</strong><br /><br /><strong>%1$s%%</strong> terminé. Traité <strong>%2$s</strong> sur l’ensemble des messages. Total des messages : <strong>%3$s</strong>.',
	'SEOMAP_SYNC_REQ' 				=> 'Vous devriez synchroniser les dates de modification des messages avant d’utiliser ce plan de site. Ceci est nécessaire pour générer la dernière date de modification des pages du forum. <a style="font-weight: bold;" href="%s">Cliquez ici pour synchroniser</a>.',
));
