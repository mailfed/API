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

// create the lists endpoint:
$endpoint = new MailFedApi_Endpoint_Lists();

/*===================================================================================*/

// GET ALL ITEMS
$response = $endpoint->getLists($pageNumber = 1, $perPage = 10);

// DISPLAY RESPONSE
echo '<pre>';
print_r($response->body);
echo '</pre>';

/*===================================================================================*/

// get a single list
$response = $endpoint->getList('LIST-UNIQUE-ID');

// DISPLAY RESPONSE
echo '<hr /><pre>';
print_r($response->body);
echo '</pre>';

/*===================================================================================*/

// copy a list
$response = $endpoint->copy('LIST-UNIQUE-ID');

// DISPLAY RESPONSE
echo '<hr /><pre>';
print_r($response->body);
echo '</pre>';

/*===================================================================================*/

// delete a list
$response = $endpoint->delete('LIST-UNIQUE-ID');

// DISPLAY RESPONSE
echo '<hr /><pre>';
print_r($response->body);
echo '</pre>';
