<?php
/*
* Plugin Name: Botão Temporizador
 * Plugin URI: https://luisborges.dev/
 * Description: Plugin para criar um botão personalizável que redireciona após um tempo definido.
 * Version: 1.0
 * Author: Luis Borges
 * Author URI: https://luisborges.dev/
 * License: GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

// Função para incluir os módulos
function custom_button_redirect_load_the_modules() {
    // Verifica se a classe do Divi Builder está disponível
    if (class_exists('ET_Builder_Module')) {
        require_once plugin_dir_path(__FILE__) . 'modules/custom-button-redirect.php';
    }
}
add_action('et_builder_ready', 'custom_button_redirect_load_the_modules');
