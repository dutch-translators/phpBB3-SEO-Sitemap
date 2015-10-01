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
	'SEOMAP_VERSION'				=> 'SEO Sitemap versie: %s. Voor de meest recente versie en support ga je naar de <a style="font-weight: bold;" href="https://www.phpbb.com/customise/db/extension/seo_sitemap/" onclick="window.open(this.href);return false;">extensie pagina</a>.',
	'SEOMAP_EXPLAIN'				=> 'Houd er rekening mee dat het gebruik van de prioriteit en veranderingsfrequentie instellingen een aantal positieve resultaten voor je kan opleveren, het is aangeraden om ze samen te gebruiken, denk vooraf na welke paginas het belangrijkst zijn alvorens je instellingen gaat veranderen. Als je het niet weet of niet zeker bent, is het beter deze opties uit te schakelen. <a href="http://www.sitemaps.org/protocol.html#xmlTagDefinitions" onclick="window.open(this.href);return false;">klik hier</a> voor meer informatie over de prioriteit en veranderingsfrequentie. Stel 0 in als je de prioriteit wilt uitschakelen.',
	'SEOMAP_SETTINGS'				=> 'SEO Sitemap Instellingen',
	'SEOMAP_SETTINGS_UPDATED'		=> '<strong>SEO Sitemap Instellingen Bijgewerkt</strong>',
	'SEOMAP_SAVED'					=> 'Sitemap Instellingen succesvol bijgewerkt.',
	'SEOMAP_EXCLUDED'				=> 'Deze forums uitsluiten',
	'SEOMAP_EXCLUDED_EXPLAIN'		=> 'De forumonderdelen(met alle onderwerpen die erin staan) die hier geselecteerd zijn, zullen niet worden weergegeven in de sitemap.<br /><strong>Let op:</strong> Categorieën en forumonderdelen zonder onderwerpen worden standaard uitgesloten.',
	'SEOMAP_CACHE_TIME'				=> 'Cache tijd',
	'SEOMAP_CACHE_TIME_EXPLAIN'		=> 'Om de serverprestatie te reduceren, worden de sitemaps tijdelijk opgeslagen in de cache. Na het aantal uren dat hier is ingesteld worden de sitemaps opnieuw aangemaakt. Stel hier het aantal uren in dat de sitemaps opgeslagen moeten worden in de cache, stel in op 0 als je deze optie wilt uitschakelen.',
	'SEOMAP_URL'					=> 'Sitemap URL: <a href="%s" onclick="window.open(this.href);return false;">%s</a>',
	'SEOMAP_URL_COUNT'				=> 'Het aantal links in de sitemap: %s',
	'SEOMAP_URL_LIMIT'				=> 'URL limiet',
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
	'SEOMAP_SYNC_COMPLETE' 			=> 'Synchronisatie succesvol afgerond <br /><br /><a style="font-weight: bold;" href="%s">&laquo; Ga terug naar de instellingen</a>',
	'SEOMAP_SYNC_PROCESS'			=> '<strong>Sync in behandeling. Sluit deze pagina niet en onbreek het script niet alvorens het klaar is met alle acties.</strong><br /><br /><strong>%1$s%%</strong> finished.<strong>%2$s</strong> van alle berichten verwerkt. Totaal aantal berichten: <strong>%3$s</strong>.',
	'SEOMAP_SYNC_REQ' 				=> 'Het is aangeraden om de wijzigingsdatums van berichten te synchroniseren voordat je de sitemap gaat gebruiken. Dit is nodig om de laatste wijzigingsdatum van de forum paginas te genereren. <a style="font-weight: bold;" href="%s">klik hier om te synchroniseren</a>.',
));
