<?php defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Kyaw Zin Wai IMAP Email Config
 *
 * Config File for IMAP.
 *
 /* Location: ./system/application/config/imap_config.php */
 * 
 * https://github.com/kzwkyawzinwai/CI_IMAP/blob/master/imap_config.php
 *
 * @package     CodeIgniter
 * @subpackage  Libraries
 * @category    Libraries
 * @author      Kyaw Zin Wai
 * @link        https://github.com/kzwkyawzinwai/CI_IMAP/blob/master/imap_config.php
 * 
 * 26-Dec-2016 - Update for php-imap fix
 * 
 */

$config['protocol'] 			= 'imap';
$config['smtp_host']			= 'your_IMAP_HOST'; // Example : imap.gmail.com (Required Field)
$config['smtp_port'] 			= 993; // 993 is for SSL. You can use other PORT.(Required Field)
$config['smtp_user']			= 'example@gmail.com'; //your username (Required Field)
$config['smtp_pass'] 			= 'your_password'; //your password (Required Field)
$config['imap_mailbox'] 		= 'All Mail'; // Mail Box of which you want to Retrieve (Example : INBOX)
$config['imap_server_encoding'] = 'utf-8';