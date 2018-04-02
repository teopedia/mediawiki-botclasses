<?php
/* Simple script to log in and get statistics
 * https://github.com/teopedia/mediawiki-botclasses 
 * 
 * More info 
 * in English: https://www.mediawiki.org/wiki/Manual:Botclasses.php
 * in Russian: http://sysadminwiki.ru/wiki/MediaWiki/Внешний_вид/Статистика_в_теме_оформления
*/

require_once( "botclasses.php" ); //include bot functions

function wiki_statistics( $item, $value='' ) {
   	$wikiAPI  = 'http://mywiki.org/w/api.php';
	$wikiUser = "Bot name";
	$wikiPass = "Bot password";
	$str = '';
	$bot = new extended( $wikiAPI );
	$bot->login( $wikiUser, $wikiPass );
	$str = $bot->statvalue($item, $value);
	return $str;
}
?>
