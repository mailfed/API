<?php
/**
 * This file contains the list segments endpoint for MailFedApi PHP-SDK.
 * 
 * @author Serban George Cristian 
 * @link http://www.mailfed.com/
 * @copyright 2013-2015 http://www.mailfed.com/
 */
 
 
/**
 * MailFedApi_Endpoint_ListSegments handles all the API calls for handling the list segments.
 * 
 * @author Serban George Cristian 
 * @package MailFedApi
 * @subpackage Endpoint
 * @since 1.0
 */
class MailFedApi_Endpoint_ListSegments extends MailFedApi_Base
{
    /**
     * Get segments from a certain mail list
     * 
     * Note, the results returned by this endpoint can be cached.
     * 
     * @param string $listUid
     * @param integer $page
     * @param integer $perPage
     * @return MailFedApi_Http_Response
     */
    public function getSegments($listUid, $page = 1, $perPage = 10)
    {
        $client = new MailFedApi_Http_Client(array(
            'method'        => MailFedApi_Http_Client::METHOD_GET,
            'url'           => $this->config->getApiUrl(sprintf('lists/%s/segments', $listUid)),
            'paramsGet'     => array(
                'page'      => (int)$page, 
                'per_page'  => (int)$perPage
            ),
            'enableCache'   => true,
        ));
        
        return $response = $client->request();
    }
}