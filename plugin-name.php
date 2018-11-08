<?php

/**
 * Plugin Name: Plugin Name
 * Plugin URI: http://www.domain.tld
 * Description: Plugin description.
 * Version: 1.0.0
 * Author: Your name
 * Author URI: https://framework.themosis.com/
 * Text Domain: plugin-textdomain
 * Domain Path: /languages
 * Domain Var: PLUGIN_TD
 * Plugin Namespace: tld_domain_plugin
 */

use Themosis\Core\Application;

/*
|--------------------------------------------------------------------------
| Bootstrap Plugin
|--------------------------------------------------------------------------
|
| We bootstrap the plugin. The following code is loading your plugin
| configuration and resources.
*/
$plugin = (Application::getInstance())->loadPlugin(__FILE__, 'config');

/*
|--------------------------------------------------------------------------
| Plugin assets locations
|--------------------------------------------------------------------------
|
| You can define your plugin assets paths and URLs. You can add as many
| locations as you want. The key is your asset directory path and
| the value is its public URL.
*/
$plugin->assets([
    $plugin->getPath('dist') => $plugin->getUrl('dist')
]);

/*
|--------------------------------------------------------------------------
| Plugin i18n | l10n
|--------------------------------------------------------------------------
|
| Registers the "languages" directory for storing the plugin translations.
| The plugin text domain constant name is the plugin "Domain Var" header
| and its value the "Text Domain" header.
*/
load_plugin_textdomain(
    $plugin->getHeader('text_domain'),
    false,
    $plugin->getPath(trim($plugin->getHeader('domain_path'), '\/'))
);

/*
|--------------------------------------------------------------------------
| Plugin includes
|--------------------------------------------------------------------------
|
| Auto includes files by providing one or more paths. By default, we setup
| an "inc" directory within the plugin. Use that "inc" directory to extend
| your WordPress application. Nested files are also included.
*/
$plugin->includes([
    $plugin->getPath('inc')
]);

/*
|--------------------------------------------------------------------------
| Plugin assets
|--------------------------------------------------------------------------
|
| Here you can define the loaded assets from our previously defined
| "dist" directory. Assets sources are located under the root "assets"
| directory and are then compiled, thanks to Laravel Mix, to the "dist"
| folder.
|
| @see https://framework.themosis.com/docs/
| @see https://laravel-mix.com/
*/
