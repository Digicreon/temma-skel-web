<?php

/**
 * Temma framework bootstrap script for Composer installation.
 *
 * @author	Amaury Bouchard <amaury@amaury.net>
 * @copyright	2024, Amaury Bouchard
 * @package	Temma
 */

// Composer autoloader
@include_once(__DIR__ . '/../vendor/autoload.php');

// Temma autoloader with include path
\Temma\Base\Autoload::autoload(__DIR__ . '/../lib');

// start the bootloader
\Temma\Web\Bootloader::bootloader();

