<?php
/**
 * This file contains the autoloader class for the MailFedApi PHP-SDK.
 *
 * @author Serban George Cristian 
 * @link http://www.mailfed.com/
 * @copyright 2013-2015 http://www.mailfed.com/
 */
 
 
/**
 * The MailFedApi Autoloader class.
 * 
 * From within a Yii Application, you would load this as:
 * 
 * <pre>
 * require_once(Yii::getPathOfAlias('application.vendors.MailFedApi.Autoloader').'.php');
 * Yii::registerAutoloader(array('MailFedApi_Autoloader', 'autoloader'), true);
 * </pre>
 * 
 * Alternatively you can:
 * <pre>
 * require_once('Path/To/MailFedApi/Autoloader.php');
 * MailFedApi_Autoloader::register();
 * </pre>
 * 
 * @author Serban George Cristian 
 * @package MailFedApi
 * @since 1.0
 */
class MailFedApi_Autoloader
{
    /**
     * The registrable autoloader
     * 
     * @param string $class
     */
    public static function autoloader($class)
    {
        if (strpos($class, 'MailFedApi') === 0) {
            $className = str_replace('_', '/', $class);
            $className = substr($className, 12);
            
            if (is_file($classFile = dirname(__FILE__) . '/'. $className.'.php')) {
                require_once($classFile);
            }
        }
    }
    
    /**
     * Registers the MailFedApi_Autoloader::autoloader()
     */
    public static function register()
    {
        spl_autoload_register(array('MailFedApi_Autoloader', 'autoloader'));
    }
}