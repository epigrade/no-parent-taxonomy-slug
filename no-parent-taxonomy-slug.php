<?php
/**
 * Plugin Name: No Parent Taxonomy Slug
 * Plugin URI: https://wordpress.org/plugins/no-parent-taxonomy-slug/
 * Description: Remove parent taxonomy slug(s) from term permalinks.
 * Version: 1.0
 * Author: Epigrade
 * Author URI: https://www.epigrade.com/
 * License: MIT
 * License URI: https://opensource.org/license/mit/
 */

add_action( 'term_link', 'epigrade_no_parent_taxonomy_slug', 11, 3 );

function epigrade_no_parent_taxonomy_slug( $url, $term, $taxonomy )
{
  $begin_pos = strpos($url, '/', strpos($url, '/', strpos($url, '/', strpos($url, '/')+1)+1)+1);
  $end_pos = strrpos(rtrim($url, '/'), '/');
  $return = substr($url, 0, $begin_pos) . substr($url, $end_pos);
  return $return;
}
