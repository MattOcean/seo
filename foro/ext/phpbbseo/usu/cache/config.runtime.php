<?php
/**
* phpBB SEO
* www.phpBB-SEO.com
* @package phpBB SEO USU
*/
if (!defined('IN_PHPBB')) {
	exit;
}
$settings = array ( 'url_rewrite' => true, 'modrtype' => 3, 'sql_rewrite' => true, 'profile_inj' => true, 'profile_vfolder' => true, 'profile_noids' => true, 'rewrite_usermsg' => true, 'rem_sid' => true, 'rem_hilit' => true, 'rem_small_words' => false, 'virtual_folder' => true, 'virtual_root' => false, 'cache_layer' => true, 'rem_ids' => true, 'redirect_404_forum' => false, 'redirect_404_topic' => false, 'copyrights' => array ( 'img' => true, 'txt' => '', 'title' => '', ), 'zero_dupe' => array ( 'on' => true, 'strict' => true, 'post_redir' => 'all', ), );
$forum_urls = array ( 3 => 'peces', 4 => 'peces-de-agua-fria', 5 => 'peces-tropicales', 6 => 'peces-marinos', 9 => 'general-acuarios', 10 => 'tienda-de-peces', 11 => 'mamiferos', 12 => 'perros', 13 => 'tienda-de-perros', 14 => 'gatos', 15 => 'tienda-de-gatos', 16 => 'conejos', 17 => 'hurones', 20 => 'mamiferos-domesticos', 21 => 'mamiferos-exoticos-y-salvajes', );