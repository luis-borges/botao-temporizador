<?php

if (!defined('ABSPATH')) {
    exit;
}

if (!class_exists('ET_Builder_Module')) {
    return;
}

class Custom_Button_Redirect_Module extends ET_Builder_Module {

    public $slug       = 'custom_button_redirect';
    public $vb_support = 'on';

    public function init() {
        $this->name = esc_html__('Botão Temporizador Estratégia', 'custom-button-redirect');
        $this->child_item_text = __("Botão Temporizador Estratégia");
        $this->main_css_element = "%%order_class%%";
    }

    public function get_fields() {
        return array(
            'layout' => array(
                'label'       => esc_html__('Layout', 'custom-button-redirect'),
                'type'        => 'select',
                'options'     => array(
                    'default'      => esc_html__('Default', 'custom-button-redirect'),
                    'alternative'  => esc_html__('Alternative', 'custom-button-redirect'),
                ),
                'default'     => 'default',
                'toggle_slug' => 'layout_settings',
            ),
            'button_text' => array(
                'label'       => esc_html__('Texto do Botão', 'custom-button-redirect'),
                'type'        => 'text',
                'default'     => 'Acesse o Grupo',
                'toggle_slug' => 'personalizacao',
            ),
            'button_url' => array(
                'label'       => esc_html__('URL do Botão', 'custom-button-redirect'),
                'type'        => 'text',
                'default'     => '#',
                'toggle_slug' => 'personalizacao',
            ),
            'background_border_card_color' => array(
                'label'       => esc_html__('Cor do Botão', 'custom-button-redirect'),
                'type'        => 'color-alpha',
                'default'     => 'linear-gradient(180deg,#23c760 16%,#16542b 100%)',
                'tab_slug'    => 'general',
                'toggle_slug' => 'personalizacao',
            ),
            'button_image' => array(
                'label'       => esc_html__('Imagem do Botão', 'custom-button-redirect'),
                'type'        => 'upload',
                'default'     => '',
                'tab_slug'    => 'general',
                'toggle_slug' => 'personalizacao',
            ),
            'redirect_time' => array(
                'label'       => esc_html__('Tempo de Redirecionamento (segundos)', 'custom-button-redirect'),
                'type'        => 'number',
                'default'     => 5,
                'toggle_slug' => 'personalizacao',
            ),
        );
    }

    public function get_settings_modal_toggles() {
        return array(
            "general" => array(
                "toggles" => array(
                    "layout" => esc_html__("Estrutura", "dp_dmb"),
                    "personalizacao" => esc_html__("Personalização", "dp_dmb"),
                    "estilização" => esc_html__("Botão Temporizador", "dp_dmb"),
                ),
            ),
        );
    }

    public function get_advanced_fields_config() {
        return array(
            'background' => false,
            'borders' => false,
            'box_shadow' => false,
            'button' => false,
            'filters' => false,
            'fonts' => false,
            'margin_padding' => false,
            'max_width' => false,
        );
    }

    public function render($attrs, $content = null, $render_slug) {
        $layout        = $this->props['layout'];
        $button_text   = $this->props['button_text'];
        $button_url    = $this->props['button_url'];
        $button_image  = $this->props['button_image'];
        $redirect_time = intval($this->props['redirect_time']);
        $background_color = esc_html($this->props['background_border_card_color']);

        // Renderiza o botão no fluxo normal da página
        $output = '<div class="custom-button-container">';
        $output .= '<style>
            .custom-button-container {
                text-align: center;
                margin-top: 20px;
            }
            .custom-button {
                background: ' . $background_color . ';
                padding: 10px 20px;
                color: #ffffff;
                text-decoration: none;
                display: inline-block;
                margin-top: 20px;
                text-align: center;
                display: flex;
                align-items: center;
                justify-content: center;
                border-radius: 8px;
            }
        </style>';
        $output .= '<a href="' . esc_url($button_url) . '" class="custom-button">';
        if (!empty($button_image)) {
            $output .= '<img src="' . esc_url($button_image) . '" width="25" height="25" alt="' . esc_html($button_text) . '" style="vertical-align: middle; margin-right: 8px;">';
        }
        $output .= esc_html($button_text) . '</a>';
        $output .= '</div>';

        // Redirecionamento
        $output .= '<script>
            setTimeout(function() {
                window.location.href = "' . esc_url($button_url) . '";
            }, ' . ($redirect_time * 1000) . ');
        </script>';

        return $output;
    }
}

new Custom_Button_Redirect_Module();
