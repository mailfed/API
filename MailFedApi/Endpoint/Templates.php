<?php
/**
 * This file contains the templates endpoint for MailFedApi PHP-SDK.
 * 
 * @author Serban George Cristian 
 * @link http://www.mailfed.com/
 * @copyright 2013-2015 http://www.mailfed.com/
 */
 
 
/**
 * MailFedApi_Endpoint_Templates handles all the API calls for email templates.
 * 
 * @author Serban George Cristian 
 * @package MailFedApi
 * @subpackage Endpoint
 * @since 1.0
 */
class MailFedApi_Endpoint_Templates extends MailFedApi_Base
{
    /**
     * Get all the email templates of the current customer
     * 
     * Note, the results returned by this endpoint can be cached.
     * 
     * @param integer $page
     * @param integer $perPage
     * @return MailFedApi_Http_Response
     */
    public function getTemplates($page = 1, $perPage = 10)
    {
        $client = new MailFedApi_Http_Client(array(
            'method'        => MailFedApi_Http_Client::METHOD_GET,
            'url'           => $this->config->getApiUrl('templates'),
            'paramsGet'     => array(
                'page'      => (int)$page, 
                'per_page'  => (int)$perPage
            ),
            'enableCache'   => true,
        ));
        
        return $response = $client->request();
    }
    
    /**
     * Get one template
     * 
     * Note, the results returned by this endpoint can be cached.
     * 
     * @param string $templateUid
     * @return MailFedApi_Http_Response
     */
    public function getTemplate($templateUid)
    {
        $client = new MailFedApi_Http_Client(array(
            'method'        => MailFedApi_Http_Client::METHOD_GET,
            'url'           => $this->config->getApiUrl(sprintf('templates/%s', (string)$templateUid)),
            'paramsGet'     => array(),
            'enableCache'   => true,
        ));
        
        return $response = $client->request();
    }
    
    /**
     * Create a new template
     * 
     * @param array $data
     * @return MailFedApi_Http_Response
     */
    public function create(array $data)
    {
        if (isset($data['content'])) {
            $data['content'] = base64_encode($data['content']);
        }
        
        if (isset($data['archive'])) {
            $data['archive'] = base64_encode($data['archive']);
        }
        
        $client = new MailFedApi_Http_Client(array(
            'method'        => MailFedApi_Http_Client::METHOD_POST,
            'url'           => $this->config->getApiUrl('templates'),
            'paramsPost'    => array(
                'template'  => $data
            ),
        ));
        
        return $response = $client->request();
    }
    
    /**
     * Update existing template for the customer
     * 
     * @param string $templateUid
     * @param array $data
     * @return MailFedApi_Http_Response
     */
    public function update($templateUid, array $data)
    {
        if (isset($data['content'])) {
            $data['content'] = base64_encode($data['content']);
        }
        
        if (isset($data['archive'])) {
            $data['archive'] = base64_encode($data['archive']);
        }
        
        $client = new MailFedApi_Http_Client(array(
            'method'        => MailFedApi_Http_Client::METHOD_PUT,
            'url'           => $this->config->getApiUrl(sprintf('templates/%s', $templateUid)),
            'paramsPut'     => array(
                'template'  => $data
            ),
        ));
        
        return $response = $client->request();
    }
    
    /**
     * Delete existing template for the customer
     * 
     * @param string $templateUid
     * @return MailFedApi_Http_Response
     */
    public function delete($templateUid)
    {
        $client = new MailFedApi_Http_Client(array(
            'method'    => MailFedApi_Http_Client::METHOD_DELETE,
            'url'       => $this->config->getApiUrl(sprintf('templates/%s', $templateUid)),
        ));
        
        return $response = $client->request();
    }
}