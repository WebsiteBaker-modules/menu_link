<?php
/**
 *
 * @category        modules
 * @package         menu_link
 * @author          WebsiteBaker Project
 * @copyright       Ryan Djurovich
 * @copyright       WebsiteBaker Org. e.V.
 * @link            http://websitebaker.org/
 * @license         http://www.gnu.org/licenses/gpl.html
 * @platform        WebsiteBaker 2.8.3
 * @requirements    PHP 5.3.6 and higher
 * @version         $Id: add.php 67 2017-03-03 22:14:28Z manu $
 * @filesource      $HeadURL: svn://isteam.dynxs.de/wb2.10/tags/WB-2.10.0/wb/modules/menu_link/add.php $
 * @lastmodified    $Date: 2017-03-03 23:14:28 +0100 (Fr, 03. Mrz 2017) $
 *
 */

/* -------------------------------------------------------- */
// Must include code to stop this file being accessed directly
if(defined('WB_PATH') == false) { die('Illegale file access /'.basename(__DIR__).'/'.basename(__FILE__).''); }
/* -------------------------------------------------------- */

    // Insert new row into database
    $sql = 'INSERT INTO `'.TABLE_PREFIX.'mod_menu_link` SET '
         . '`page_id` = '.$database->escapeString($page_id).', '
         . '`section_id` = '.$database->escapeString($section_id).', '
         . '`target_page_id` = 0, '
         . '`redirect_type`  = \'301\', '
         . '`anchor` = 0, '
         . '`extern` = \'\' ';
    $database->query($sql);

