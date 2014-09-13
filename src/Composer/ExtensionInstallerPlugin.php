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
		$installer = new ExtensionInstaller($io, $composer);

		$composer->getInstallationManager()->addInstaller($installer);
	}
}
