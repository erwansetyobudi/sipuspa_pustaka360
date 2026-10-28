<?php
/**
 * Plugin Name: SIPUSPA - PUSTAKA360
 * Plugin URI: https://library.poltekkes-smg.ac.id/
 * Description: Landing page ekosistem inovasi SIPUSPA : PUSTAKA360 Perpustakaan Poltekkes Kemenkes Semarang.
 * Version: 1.0.0
 * Author: Perpustakaan Poltekkes Kemenkes Semarang
 * Author URI: https://library.poltekkes-smg.ac.id/
 */

use SLiMS\Plugins;

$plugins = Plugins::getInstance();

$plugins->registerMenu(
    'opac',
    'sipuspa-pustaka360',
    __DIR__ . '/index.inc.php'
);
