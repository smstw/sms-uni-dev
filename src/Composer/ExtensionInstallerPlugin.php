<?php
namespace SMS\Composer;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;

/**
 * Composer installer plugin
 */
class ExtensionInstallerPlugin implements PluginInterface
{
	/**
	 * Apply plugin modifications to composer
	 *
	 * @param Composer $composer
	 * @param IOInterface $io
	 */
	public function activate(Composer $composer, IOInterface $io)
	{
		echo "SMS Plugin";
		
		if(!defined('_JEXEC'))
	        {
	            $_SERVER['HTTP_HOST']   = 'localhost';
	            $_SERVER['HTTP_USER_AGENT'] = 'Composer';
	
	            define('_JEXEC', 1);
	            define('DS', DIRECTORY_SEPARATOR);
	
	            define('JPATH_BASE', realpath('..'));
	            require_once JPATH_BASE . '/includes/defines.php';
	
	            require_once JPATH_BASE . '/includes/framework.php';
	            require_once JPATH_LIBRARIES . '/import.php';
	
	            require_once JPATH_LIBRARIES . '/cms.php';
	        }
	}
}
