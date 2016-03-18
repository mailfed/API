<?php
/**
 * This file contains the Dummy cache class used in the MailFedApi PHP-SDK.
 * 
 * @author Serban George Cristian 
 * @link http://www.mailfed.com/
 * @copyright 2013-2015 http://www.mailfed.com/
 */
 
 
/**
 * MailFedApi_Cache_Dummy is used for testing purposes, when you use the sdk with cache but don't want to
 * really cache anything.
 *  
 * @author Serban George Cristian 
 * @package MailFedApi
 * @subpackage Cache
 * @since 1.0
 */
class MailFedApi_Cache_Dummy extends MailFedApi_Cache_Abstract
{
    /**
     * Cache data by given key.
     * 
     * This method implements {@link MailFedApi_Cache_Abstract::set()}.
     * 
     * @param string $key
     * @param mixed $value
     * @return bool
     */
    public function set($key, $value)
    {
        return true;
    }
    
    /**
     * Get cached data by given key.
     * 
     * This method implements {@link MailFedApi_Cache_Abstract::get()}.
     * 
     * @param string $key
     * @return mixed
     */
    public function get($key)
    {
        return null;        
    }
    
    /**
     * Delete cached data by given key.
     * 
     * This method implements {@link MailFedApi_Cache_Abstract::delete()}.
     * 
     * @param string $key
     * @return bool
     */
    public function delete($key)
    {
        return true;
    }
    
    /**
     * Delete all cached data.
     * 
     * This method implements {@link MailFedApi_Cache_Abstract::flush()}.
     * 
     * @return bool
     */
    public function flush()
    {
        return true;
    }
}