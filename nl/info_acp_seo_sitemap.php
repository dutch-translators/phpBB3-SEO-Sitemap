<?php

/**
*
* info_acp_seo_sitemap [Dutch]
*
* @package phpBB3 SEO Sitemap
* @copyright (c) 2014 www.phpbb-work.ru
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* Dutch translation by Dutch Translators (https://github.com/dutch-translators)
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
	'SEOMAP'						=> 'SEO Sitemap',
	'SEOMAP_VERSION'				=> 'Extensie versie: %s. See <a style="font-weight: bold;" href="https://www.phpbb.com/customise/db/extension/seo_sitemap/" onclick="window.open(this.href);return false;">extension page</a> for the latest version or to get help with this extension.',
	'SEOMAP_EXPLAIN'				=> 'Pay attention that use of optional Priority and Changefreq settings could yield some positive results for you, but recommended using them together and really analysing which pages should be considered more important over others before making any decisions. If you do not know or are unsure, it is better to disable these options. <a href="http://www.sitemaps.org/protocol.html#xmlTagDefinitions" onclick="window.open(this.href);return false;">Click here</a> to read more details about priority and changefreq.<br />Enter 0 if you wish to disable priority.',
	'SEOMAP_SETTINGS'				=> 'SEO Sitemap Instellingen',
	'SEOMAP_SETTINGS_UPDATED'		=> '<strong>SEO Sitemap Instellingen Bijgewerkt</strong>',
	'SEOMAP_SAVED'					=> 'Sitemap Instellingen succesvol bijgewerkt.',
	'SEOMAP_EXCLUDED'				=> 'Deze forums uitsluiten',
	'SEOMAP_EXCLUDED_EXPLAIN'		=> 'De forumonderdelen(met alle onderwerpen die erin staan) die hier geselecteerd zijn, zullen niet worden weergegeven in de sitemap.<br /><strong>Let op:</strong> Categorieën en forumonderdelen zonder onderwerpen worden standaard uitgeslote.',
	'SEOMAP_CACHE_TIME'				=> 'Cache time',
	'SEOMAP_CACHE_TIME_EXPLAIN'		=> 'To reduce server load, sitemap will be cached for some time. After this time it will be re-created. Enter the number of hours for which sitemap will be cached or enter 0 for disable caching.',
	'SEOMAP_URL'					=> 'Sitemap URL: <a href="%s" onclick="window.open(this.href);return false;">%s</a>',
	'SEOMAP_URL_COUNT'				=> 'Het aantal links in de sitemap: %s',
	'SEOMAP_URL_LIMIT'				=> 'URL limit',
	'SEOMAP_URL_LIMIT_EXPLAIN'		=> 'Het maximum aantal links in je sitemap is 50000 volgens het sitemap protocol. Je kan deze waarde verlagen als je problemen ondervind met de ingestelde limiet. Als het aantal links van je forum deze waarde overschrijd, dan zal sitemap automatische worden verdeeld in meerdere bestanden.',
	'SEOMAP_PRIORITY_0'				=> 'Prioriteit voor standaard onderwerpen',
	'SEOMAP_PRIORITY_1'				=> 'Prioriteit voor sticky onderwerpen',
	'SEOMAP_PRIORITY_2'				=> 'Prioriteit voor aankondigingen',
	'SEOMAP_PRIORITY_3'				=> 'Prioriteit voor algemene aankondigingen',
	'SEOMAP_PRIORITY_4'				=> 'Prioriteit voor article topics',
	'SEOMAP_PRIORITY_F'				=> 'Prioriteit voor forums',
	'SEOMAP_FREQ_0'					=> 'Veranderingsfrequentie voor standaard onderwerpen',
	'SEOMAP_FREQ_1'					=> 'Veranderingsfrequentie voor sticky onderwerpen',
	'SEOMAP_FREQ_2'					=> 'Veranderingsfrequentie voor aankondigingen',
	'SEOMAP_FREQ_3'					=> 'Veranderingsfrequentie voor algemene aankondigingen',
	'SEOMAP_FREQ_4'					=> 'Veranderingsfrequentie voor article topics',
	'SEOMAP_FREQ_F'					=> 'Veranderingsfrequentie voor forums',
	'SEOMAP_FREQ_NEVER'				=> 'Nooit',
	'SEOMAP_FREQ_YEARLY'			=> 'Jaarlijks',
	'SEOMAP_FREQ_MONTHLY'			=> 'Maandelijks',
	'SEOMAP_FREQ_WEEKLY'			=> 'Wekelijks',
	'SEOMAP_FREQ_DAILY'				=> 'Dagelijks',
	'SEOMAP_FREQ_HOURLY'			=> 'Per uur',
	'SEOMAP_FREQ_ALWAYS'			=> 'Altijd',
	'SEOMAP_NO_DATA'				=> 'Geen gegevens voor sitemap.',
	'SEOMAP_CANT_WRITE'				=> 'De map <strong>%s</strong> bestaat niet of is niet schrijfbaar. Je kan dit handmatig oplossen met behulp van je FTP-client.',

// Sync section
	'SEOMAP_SYNC_COMPLETE' 			=> 'Synchronisation successfully completed.<br /><br /><a style="font-weight: bold;" href="%s">&laquo; Go back to settings</a>',
	'SEOMAP_SYNC_PROCESS'			=> '<strong>Sync in progress. Do not close this page and do not interrupt script before it finishes all the actions.</strong><br /><br /><strong>%1$s%%</strong> finished. Processed <strong>%2$s</strong> of all posts. Total posts: <strong>%3$s</strong>.',
	'SEOMAP_SYNC_REQ' 				=> 'You should synchronise posts modification dates before using this sitemap. This is needed to generate last modification time of the board pages. <a style="font-weight: bold;" href="%s">Click here to synchronise</a>.',
));
