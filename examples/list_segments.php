<?php
/**
 * This file contains examples for using the MailFedApi PHP-SDK.
 *
 * @author Serban George Cristian 
 * @link http://www.mailfed.com/
 * @copyright 2013-2015 http://www.mailfed.com/
 */
 
// require the setup which has registered the autoloader
require_once dirname(__FILE__) . '/setup.php';

// CREATE THE ENDPOINT
$endpoint = new MailFedApi_Endpoint_ListSegments();

/*===================================================================================*/

// GET ALL ITEMS
$response = $endpoint->getSegments('LIST-UNIQUE-ID');

// DISPLAY RESPONSE
echo '<pre>';
print_r($response->body);
echo '</pre>';