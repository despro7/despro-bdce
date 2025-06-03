<?php

/**
 * Plugin Name: Custom Elements for Breakdance by despro7
 * Plugin URI: https://github.com/despro7/despro-bdce
 * Description: Saves custom elements created with Element Studio.
 * Author: despro7
 * Author URI: https://t.me/despro7
 * License: GPLv2
 * Text Domain: breakdance
 * Domain Path: /languages/
 * Version: 0.0.1
 */

namespace DesproCustomElements;

use function Breakdance\Util\getDirectoryPathRelativeToPluginFolder;

add_action('breakdance_loaded', function () {
    \Breakdance\ElementStudio\registerSaveLocation(
        getDirectoryPathRelativeToPluginFolder(__DIR__) . '/elements',
        'DesproCustomElements',
        'element',
        'Despro Custom Elements',
        false
    );

    \Breakdance\ElementStudio\registerSaveLocation(
        getDirectoryPathRelativeToPluginFolder(__DIR__) . '/macros',
        'DesproCustomElements',
        'macro',
        'Despro Custom Macros',
        false,
    );

    \Breakdance\ElementStudio\registerSaveLocation(
        getDirectoryPathRelativeToPluginFolder(__DIR__) . '/presets',
        'DesproCustomElements',
        'preset',
        'Despro Custom Presets',
        false,
    );
},
    // register elements before loading them
    9
);
