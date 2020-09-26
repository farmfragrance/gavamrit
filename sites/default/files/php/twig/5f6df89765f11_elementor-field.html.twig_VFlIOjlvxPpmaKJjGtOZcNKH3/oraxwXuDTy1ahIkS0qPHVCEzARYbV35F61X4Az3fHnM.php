<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* modules/contrib/elementor/templates/elementor-field.html.twig */
class __TwigTemplate_7c0f24e65fcb98c44a3131d176aa3353fad07c5facefda57ca27f9db80538b31 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 15, "raw" => 1102];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 'raw'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<script type=\"text/javascript\">
    /* <![CDATA[ */
    var elementorFrontendConfig = {
        \"isEditMode\": \"1\",
        \"is_rtl\": \"\",
        \"breakpoints\": {
            \"xs\": 0,
            \"sm\": 480,
            \"md\": 768,
            \"lg\": 1025,
            \"xl\": 1440,
            \"xxl\": 1600
        },
        \"urls\": {
            \"assets\": \"";
        // line 15
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)), "html", null, true);
        echo "/elementor/assets/\"
        },
        \"settings\": {
            \"page\": [],
            \"general\": {
                \"elementor_global_image_lightbox\": \"yes\",
                \"elementor_enable_lightbox_in_editor\": \"yes\"
            }
        },
        \"post\": {
            \"id\": 1,
            \"title\": \"Elementor #1\",
            \"excerpt\": \"\"
        },
        \"elements\": {
            \"data\": {
                \"c184\": {
                    \"stretch_section\": \"\",
                    \"layout\": \"boxed\",
                    \"content_width\": {
                        \"unit\": \"px\",
                        \"size\": \"\"
                    },
                    \"gap\": \"default\",
                    \"height\": \"default\",
                    \"custom_height\": {
                        \"unit\": \"px\",
                        \"size\": 400
                    },
                    \"custom_height_tablet\": {
                        \"unit\": \"px\",
                        \"size\": \"\"
                    },
                    \"custom_height_mobile\": {
                        \"unit\": \"px\",
                        \"size\": \"\"
                    },
                    \"column_position\": \"middle\",
                    \"content_position\": \"\",
                    \"html_tag\": \"\",
                    \"structure\": \"10\",
                    \"background_background\": \"\",
                    \"background_color\": \"\",
                    \"background_color_stop\": {
                        \"unit\": \"%\",
                        \"size\": 0
                    },
                    \"background_color_b\": \"#f2295b\",
                    \"background_color_b_stop\": {
                        \"unit\": \"%\",
                        \"size\": 100
                    },
                    \"background_gradient_type\": \"linear\",
                    \"background_gradient_angle\": {
                        \"unit\": \"deg\",
                        \"size\": 180
                    },
                    \"background_gradient_position\": \"center center\",
                    \"background_image\": {
                        \"url\": \"\",
                        \"id\": \"\"
                    },
                    \"background_position\": \"\",
                    \"background_attachment\": \"\",
                    \"background_repeat\": \"\",
                    \"background_size\": \"\",
                    \"background_video_link\": \"\",
                    \"background_video_start\": \"\",
                    \"background_video_end\": \"\",
                    \"background_video_fallback\": {
                        \"url\": \"\",
                        \"id\": \"\"
                    },
                    \"background_hover_background\": \"\",
                    \"background_hover_color\": \"\",
                    \"background_hover_color_stop\": {
                        \"unit\": \"%\",
                        \"size\": 0
                    },
                    \"background_hover_color_b\": \"#f2295b\",
                    \"background_hover_color_b_stop\": {
                        \"unit\": \"%\",
                        \"size\": 100
                    },
                    \"background_hover_gradient_type\": \"linear\",
                    \"background_hover_gradient_angle\": {
                        \"unit\": \"deg\",
                        \"size\": 180
                    },
                    \"background_hover_gradient_position\": \"center center\",
                    \"background_hover_image\": {
                        \"url\": \"\",
                        \"id\": \"\"
                    },
                    \"background_hover_position\": \"\",
                    \"background_hover_attachment\": \"\",
                    \"background_hover_repeat\": \"\",
                    \"background_hover_size\": \"\",
                    \"background_hover_video_link\": \"\",
                    \"background_hover_video_start\": \"\",
                    \"background_hover_video_end\": \"\",
                    \"background_hover_video_fallback\": {
                        \"url\": \"\",
                        \"id\": \"\"
                    },
                    \"background_hover_transition\": {
                        \"unit\": \"px\",
                        \"size\": 0.3
                    },
                    \"background_overlay_background\": \"\",
                    \"background_overlay_color\": \"\",
                    \"background_overlay_color_stop\": {
                        \"unit\": \"%\",
                        \"size\": 0
                    },
                    \"background_overlay_color_b\": \"#f2295b\",
                    \"background_overlay_color_b_stop\": {
                        \"unit\": \"%\",
                        \"size\": 100
                    },
                    \"background_overlay_gradient_type\": \"linear\",
                    \"background_overlay_gradient_angle\": {
                        \"unit\": \"deg\",
                        \"size\": 180
                    },
                    \"background_overlay_gradient_position\": \"center center\",
                    \"background_overlay_image\": {
                        \"url\": \"\",
                        \"id\": \"\"
                    },
                    \"background_overlay_position\": \"\",
                    \"background_overlay_attachment\": \"\",
                    \"background_overlay_repeat\": \"\",
                    \"background_overlay_size\": \"\",
                    \"background_overlay_video_link\": \"\",
                    \"background_overlay_video_start\": \"\",
                    \"background_overlay_video_end\": \"\",
                    \"background_overlay_video_fallback\": {
                        \"url\": \"\",
                        \"id\": \"\"
                    },
                    \"background_overlay_opacity\": {
                        \"unit\": \"px\",
                        \"size\": 0.5
                    },
                    \"overlay_blend_mode\": \"\",
                    \"background_overlay_hover_background\": \"\",
                    \"background_overlay_hover_color\": \"\",
                    \"background_overlay_hover_color_stop\": {
                        \"unit\": \"%\",
                        \"size\": 0
                    },
                    \"background_overlay_hover_color_b\": \"#f2295b\",
                    \"background_overlay_hover_color_b_stop\": {
                        \"unit\": \"%\",
                        \"size\": 100
                    },
                    \"background_overlay_hover_gradient_type\": \"linear\",
                    \"background_overlay_hover_gradient_angle\": {
                        \"unit\": \"deg\",
                        \"size\": 180
                    },
                    \"background_overlay_hover_gradient_position\": \"center center\",
                    \"background_overlay_hover_image\": {
                        \"url\": \"\",
                        \"id\": \"\"
                    },
                    \"background_overlay_hover_position\": \"\",
                    \"background_overlay_hover_attachment\": \"\",
                    \"background_overlay_hover_repeat\": \"\",
                    \"background_overlay_hover_size\": \"\",
                    \"background_overlay_hover_video_link\": \"\",
                    \"background_overlay_hover_video_start\": \"\",
                    \"background_overlay_hover_video_end\": \"\",
                    \"background_overlay_hover_video_fallback\": {
                        \"url\": \"\",
                        \"id\": \"\"
                    },
                    \"background_overlay_hover_opacity\": {
                        \"unit\": \"px\",
                        \"size\": 0.5
                    },
                    \"background_overlay_hover_transition\": {
                        \"unit\": \"px\",
                        \"size\": 0.3
                    },
                    \"border_border\": \"\",
                    \"border_width\": {
                        \"unit\": \"px\",
                        \"top\": \"\",
                        \"right\": \"\",
                        \"bottom\": \"\",
                        \"left\": \"\",
                        \"isLinked\": true
                    },
                    \"border_color\": \"\",
                    \"border_radius\": {
                        \"unit\": \"px\",
                        \"top\": \"\",
                        \"right\": \"\",
                        \"bottom\": \"\",
                        \"left\": \"\",
                        \"isLinked\": true
                    },
                    \"box_shadow_box_shadow_type\": \"\",
                    \"box_shadow_box_shadow\": {
                        \"horizontal\": 0,
                        \"vertical\": 0,
                        \"blur\": 10,
                        \"spread\": 0,
                        \"color\": \"rgba(0,0,0,0.5)\"
                    },
                    \"box_shadow_box_shadow_position\": \" \",
                    \"border_hover_border\": \"\",
                    \"border_hover_width\": {
                        \"unit\": \"px\",
                        \"top\": \"\",
                        \"right\": \"\",
                        \"bottom\": \"\",
                        \"left\": \"\",
                        \"isLinked\": true
                    },
                    \"border_hover_color\": \"\",
                    \"border_radius_hover\": {
                        \"unit\": \"px\",
                        \"top\": \"\",
                        \"right\": \"\",
                        \"bottom\": \"\",
                        \"left\": \"\",
                        \"isLinked\": true
                    },
                    \"box_shadow_hover_box_shadow_type\": \"\",
                    \"box_shadow_hover_box_shadow\": {
                        \"horizontal\": 0,
                        \"vertical\": 0,
                        \"blur\": 10,
                        \"spread\": 0,
                        \"color\": \"rgba(0,0,0,0.5)\"
                    },
                    \"box_shadow_hover_box_shadow_position\": \" \",
                    \"border_hover_transition\": {
                        \"unit\": \"px\",
                        \"size\": 0.3
                    },
                    \"shape_divider_top\": \"\",
                    \"shape_divider_top_color\": \"\",
                    \"shape_divider_top_width\": {
                        \"unit\": \"%\",
                        \"size\": \"\"
                    },
                    \"shape_divider_top_width_tablet\": {
                        \"unit\": \"%\",
                        \"size\": \"\"
                    },
                    \"shape_divider_top_width_mobile\": {
                        \"unit\": \"%\",
                        \"size\": \"\"
                    },
                    \"shape_divider_top_height\": {
                        \"unit\": \"px\",
                        \"size\": \"\"
                    },
                    \"shape_divider_top_height_tablet\": {
                        \"unit\": \"px\",
                        \"size\": \"\"
                    },
                    \"shape_divider_top_height_mobile\": {
                        \"unit\": \"px\",
                        \"size\": \"\"
                    },
                    \"shape_divider_top_flip\": \"\",
                    \"shape_divider_top_negative\": \"\",
                    \"shape_divider_top_above_content\": \"\",
                    \"shape_divider_bottom\": \"\",
                    \"shape_divider_bottom_color\": \"\",
                    \"shape_divider_bottom_width\": {
                        \"unit\": \"%\",
                        \"size\": \"\"
                    },
                    \"shape_divider_bottom_width_tablet\": {
                        \"unit\": \"%\",
                        \"size\": \"\"
                    },
                    \"shape_divider_bottom_width_mobile\": {
                        \"unit\": \"%\",
                        \"size\": \"\"
                    },
                    \"shape_divider_bottom_height\": {
                        \"unit\": \"px\",
                        \"size\": \"\"
                    },
                    \"shape_divider_bottom_height_tablet\": {
                        \"unit\": \"px\",
                        \"size\": \"\"
                    },
                    \"shape_divider_bottom_height_mobile\": {
                        \"unit\": \"px\",
                        \"size\": \"\"
                    },
                    \"shape_divider_bottom_flip\": \"\",
                    \"shape_divider_bottom_negative\": \"\",
                    \"shape_divider_bottom_above_content\": \"\",
                    \"heading_color\": \"\",
                    \"color_text\": \"\",
                    \"color_link\": \"\",
                    \"color_link_hover\": \"\",
                    \"text_align\": \"\",
                    \"margin\": {
                        \"unit\": \"px\",
                        \"top\": \"\",
                        \"right\": \"\",
                        \"bottom\": \"\",
                        \"left\": \"\",
                        \"isLinked\": true
                    },
                    \"margin_tablet\": {
                        \"unit\": \"px\",
                        \"top\": \"\",
                        \"right\": \"\",
                        \"bottom\": \"\",
                        \"left\": \"\",
                        \"isLinked\": true
                    },
                    \"margin_mobile\": {
                        \"unit\": \"px\",
                        \"top\": \"\",
                        \"right\": \"\",
                        \"bottom\": \"\",
                        \"left\": \"\",
                        \"isLinked\": true
                    },
                    \"padding\": {
                        \"unit\": \"px\",
                        \"top\": \"\",
                        \"right\": \"\",
                        \"bottom\": \"\",
                        \"left\": \"\",
                        \"isLinked\": true
                    },
                    \"padding_tablet\": {
                        \"unit\": \"px\",
                        \"top\": \"\",
                        \"right\": \"\",
                        \"bottom\": \"\",
                        \"left\": \"\",
                        \"isLinked\": true
                    },
                    \"padding_mobile\": {
                        \"unit\": \"px\",
                        \"top\": \"\",
                        \"right\": \"\",
                        \"bottom\": \"\",
                        \"left\": \"\",
                        \"isLinked\": true
                    },
                    \"z_index\": \"\",
                    \"animation\": \"\",
                    \"animation_duration\": \"\",
                    \"animation_delay\": \"\",
                    \"_element_id\": \"\",
                    \"css_classes\": \"\",
                    \"reverse_order_mobile\": \"\",
                    \"hide_desktop\": \"\",
                    \"hide_tablet\": \"\",
                    \"hide_mobile\": \"\"
                },
                \"c193\": {
                    \"_column_size\": 100,
                    \"_inline_size\": \"\",
                    \"_inline_size_tablet\": \"\",
                    \"_inline_size_mobile\": \"\",
                    \"content_position\": \"\",
                    \"space_between_widgets\": \"\",
                    \"html_tag\": \"\",
                    \"background_background\": \"\",
                    \"background_color\": \"\",
                    \"background_color_stop\": {
                        \"unit\": \"%\",
                        \"size\": 0
                    },
                    \"background_color_b\": \"#f2295b\",
                    \"background_color_b_stop\": {
                        \"unit\": \"%\",
                        \"size\": 100
                    },
                    \"background_gradient_type\": \"linear\",
                    \"background_gradient_angle\": {
                        \"unit\": \"deg\",
                        \"size\": 180
                    },
                    \"background_gradient_position\": \"center center\",
                    \"background_image\": {
                        \"url\": \"\",
                        \"id\": \"\"
                    },
                    \"background_position\": \"\",
                    \"background_attachment\": \"\",
                    \"background_repeat\": \"\",
                    \"background_size\": \"\",
                    \"background_video_link\": \"\",
                    \"background_video_start\": \"\",
                    \"background_video_end\": \"\",
                    \"background_video_fallback\": {
                        \"url\": \"\",
                        \"id\": \"\"
                    },
                    \"background_hover_background\": \"\",
                    \"background_hover_color\": \"\",
                    \"background_hover_color_stop\": {
                        \"unit\": \"%\",
                        \"size\": 0
                    },
                    \"background_hover_color_b\": \"#f2295b\",
                    \"background_hover_color_b_stop\": {
                        \"unit\": \"%\",
                        \"size\": 100
                    },
                    \"background_hover_gradient_type\": \"linear\",
                    \"background_hover_gradient_angle\": {
                        \"unit\": \"deg\",
                        \"size\": 180
                    },
                    \"background_hover_gradient_position\": \"center center\",
                    \"background_hover_image\": {
                        \"url\": \"\",
                        \"id\": \"\"
                    },
                    \"background_hover_position\": \"\",
                    \"background_hover_attachment\": \"\",
                    \"background_hover_repeat\": \"\",
                    \"background_hover_size\": \"\",
                    \"background_hover_video_link\": \"\",
                    \"background_hover_video_start\": \"\",
                    \"background_hover_video_end\": \"\",
                    \"background_hover_video_fallback\": {
                        \"url\": \"\",
                        \"id\": \"\"
                    },
                    \"background_hover_transition\": {
                        \"unit\": \"px\",
                        \"size\": 0.3
                    },
                    \"background_overlay_background\": \"\",
                    \"background_overlay_color\": \"\",
                    \"background_overlay_color_stop\": {
                        \"unit\": \"%\",
                        \"size\": 0
                    },
                    \"background_overlay_color_b\": \"#f2295b\",
                    \"background_overlay_color_b_stop\": {
                        \"unit\": \"%\",
                        \"size\": 100
                    },
                    \"background_overlay_gradient_type\": \"linear\",
                    \"background_overlay_gradient_angle\": {
                        \"unit\": \"deg\",
                        \"size\": 180
                    },
                    \"background_overlay_gradient_position\": \"center center\",
                    \"background_overlay_image\": {
                        \"url\": \"\",
                        \"id\": \"\"
                    },
                    \"background_overlay_position\": \"\",
                    \"background_overlay_attachment\": \"\",
                    \"background_overlay_repeat\": \"\",
                    \"background_overlay_size\": \"\",
                    \"background_overlay_video_link\": \"\",
                    \"background_overlay_video_start\": \"\",
                    \"background_overlay_video_end\": \"\",
                    \"background_overlay_video_fallback\": {
                        \"url\": \"\",
                        \"id\": \"\"
                    },
                    \"background_overlay_opacity\": {
                        \"unit\": \"px\",
                        \"size\": 0.5
                    },
                    \"background_overlay_hover_background\": \"\",
                    \"background_overlay_hover_color\": \"\",
                    \"background_overlay_hover_color_stop\": {
                        \"unit\": \"%\",
                        \"size\": 0
                    },
                    \"background_overlay_hover_color_b\": \"#f2295b\",
                    \"background_overlay_hover_color_b_stop\": {
                        \"unit\": \"%\",
                        \"size\": 100
                    },
                    \"background_overlay_hover_gradient_type\": \"linear\",
                    \"background_overlay_hover_gradient_angle\": {
                        \"unit\": \"deg\",
                        \"size\": 180
                    },
                    \"background_overlay_hover_gradient_position\": \"center center\",
                    \"background_overlay_hover_image\": {
                        \"url\": \"\",
                        \"id\": \"\"
                    },
                    \"background_overlay_hover_position\": \"\",
                    \"background_overlay_hover_attachment\": \"\",
                    \"background_overlay_hover_repeat\": \"\",
                    \"background_overlay_hover_size\": \"\",
                    \"background_overlay_hover_video_link\": \"\",
                    \"background_overlay_hover_video_start\": \"\",
                    \"background_overlay_hover_video_end\": \"\",
                    \"background_overlay_hover_video_fallback\": {
                        \"url\": \"\",
                        \"id\": \"\"
                    },
                    \"background_overlay_hover_opacity\": {
                        \"unit\": \"px\",
                        \"size\": 0.5
                    },
                    \"background_overlay_hover_transition\": {
                        \"unit\": \"px\",
                        \"size\": 0.3
                    },
                    \"border_border\": \"\",
                    \"border_width\": {
                        \"unit\": \"px\",
                        \"top\": \"\",
                        \"right\": \"\",
                        \"bottom\": \"\",
                        \"left\": \"\",
                        \"isLinked\": true
                    },
                    \"border_color\": \"\",
                    \"border_radius\": {
                        \"unit\": \"px\",
                        \"top\": \"\",
                        \"right\": \"\",
                        \"bottom\": \"\",
                        \"left\": \"\",
                        \"isLinked\": true
                    },
                    \"box_shadow_box_shadow_type\": \"\",
                    \"box_shadow_box_shadow\": {
                        \"horizontal\": 0,
                        \"vertical\": 0,
                        \"blur\": 10,
                        \"spread\": 0,
                        \"color\": \"rgba(0,0,0,0.5)\"
                    },
                    \"box_shadow_box_shadow_position\": \" \",
                    \"border_hover_border\": \"\",
                    \"border_hover_width\": {
                        \"unit\": \"px\",
                        \"top\": \"\",
                        \"right\": \"\",
                        \"bottom\": \"\",
                        \"left\": \"\",
                        \"isLinked\": true
                    },
                    \"border_hover_color\": \"\",
                    \"border_radius_hover\": {
                        \"unit\": \"px\",
                        \"top\": \"\",
                        \"right\": \"\",
                        \"bottom\": \"\",
                        \"left\": \"\",
                        \"isLinked\": true
                    },
                    \"box_shadow_hover_box_shadow_type\": \"\",
                    \"box_shadow_hover_box_shadow\": {
                        \"horizontal\": 0,
                        \"vertical\": 0,
                        \"blur\": 10,
                        \"spread\": 0,
                        \"color\": \"rgba(0,0,0,0.5)\"
                    },
                    \"box_shadow_hover_box_shadow_position\": \" \",
                    \"border_hover_transition\": {
                        \"unit\": \"px\",
                        \"size\": 0.3
                    },
                    \"heading_color\": \"\",
                    \"color_text\": \"\",
                    \"color_link\": \"\",
                    \"color_link_hover\": \"\",
                    \"text_align\": \"\",
                    \"margin\": {
                        \"unit\": \"px\",
                        \"top\": \"\",
                        \"right\": \"\",
                        \"bottom\": \"\",
                        \"left\": \"\",
                        \"isLinked\": true
                    },
                    \"margin_tablet\": {
                        \"unit\": \"px\",
                        \"top\": \"\",
                        \"right\": \"\",
                        \"bottom\": \"\",
                        \"left\": \"\",
                        \"isLinked\": true
                    },
                    \"margin_mobile\": {
                        \"unit\": \"px\",
                        \"top\": \"\",
                        \"right\": \"\",
                        \"bottom\": \"\",
                        \"left\": \"\",
                        \"isLinked\": true
                    },
                    \"padding\": {
                        \"unit\": \"px\",
                        \"top\": \"\",
                        \"right\": \"\",
                        \"bottom\": \"\",
                        \"left\": \"\",
                        \"isLinked\": true
                    },
                    \"padding_tablet\": {
                        \"unit\": \"px\",
                        \"top\": \"\",
                        \"right\": \"\",
                        \"bottom\": \"\",
                        \"left\": \"\",
                        \"isLinked\": true
                    },
                    \"padding_mobile\": {
                        \"unit\": \"px\",
                        \"top\": \"\",
                        \"right\": \"\",
                        \"bottom\": \"\",
                        \"left\": \"\",
                        \"isLinked\": true
                    },
                    \"z_index\": \"\",
                    \"animation\": \"\",
                    \"animation_duration\": \"\",
                    \"animation_delay\": \"\",
                    \"_element_id\": \"\",
                    \"css_classes\": \"\"
                },
                \"c413\": {
                    \"title\": \"Add Your Heading Text Here\",
                    \"link\": {
                        \"url\": \"\",
                        \"is_external\": \"\",
                        \"nofollow\": \"\"
                    },
                    \"size\": \"default\",
                    \"header_size\": \"h2\",
                    \"align\": \"\",
                    \"align_tablet\": \"\",
                    \"align_mobile\": \"\",
                    \"view\": \"traditional\",
                    \"title_color\": \"\",
                    \"typography_typography\": \"\",
                    \"typography_font_family\": \"\",
                    \"typography_font_size\": {
                        \"unit\": \"px\",
                        \"size\": \"\"
                    },
                    \"typography_font_size_tablet\": {
                        \"unit\": \"px\",
                        \"size\": \"\"
                    },
                    \"typography_font_size_mobile\": {
                        \"unit\": \"px\",
                        \"size\": \"\"
                    },
                    \"typography_font_weight\": \"\",
                    \"typography_text_transform\": \"\",
                    \"typography_font_style\": \"\",
                    \"typography_text_decoration\": \"\",
                    \"typography_line_height\": {
                        \"unit\": \"em\",
                        \"size\": \"\"
                    },
                    \"typography_line_height_tablet\": {
                        \"unit\": \"px\",
                        \"size\": \"\"
                    },
                    \"typography_line_height_mobile\": {
                        \"unit\": \"px\",
                        \"size\": \"\"
                    },
                    \"typography_letter_spacing\": {
                        \"unit\": \"px\",
                        \"size\": \"\"
                    },
                    \"typography_letter_spacing_tablet\": {
                        \"unit\": \"px\",
                        \"size\": \"\"
                    },
                    \"typography_letter_spacing_mobile\": {
                        \"unit\": \"px\",
                        \"size\": \"\"
                    },
                    \"text_shadow_text_shadow_type\": \"\",
                    \"text_shadow_text_shadow\": {
                        \"horizontal\": 0,
                        \"vertical\": 0,
                        \"blur\": 10,
                        \"color\": \"rgba(0,0,0,0.3)\"
                    },
                    \"blend_mode\": \"\",
                    \"_margin\": {
                        \"unit\": \"px\",
                        \"top\": \"\",
                        \"right\": \"\",
                        \"bottom\": \"\",
                        \"left\": \"\",
                        \"isLinked\": true
                    },
                    \"_margin_tablet\": {
                        \"unit\": \"px\",
                        \"top\": \"\",
                        \"right\": \"\",
                        \"bottom\": \"\",
                        \"left\": \"\",
                        \"isLinked\": true
                    },
                    \"_margin_mobile\": {
                        \"unit\": \"px\",
                        \"top\": \"\",
                        \"right\": \"\",
                        \"bottom\": \"\",
                        \"left\": \"\",
                        \"isLinked\": true
                    },
                    \"_padding\": {
                        \"unit\": \"px\",
                        \"top\": \"\",
                        \"right\": \"\",
                        \"bottom\": \"\",
                        \"left\": \"\",
                        \"isLinked\": true
                    },
                    \"_padding_tablet\": {
                        \"unit\": \"px\",
                        \"top\": \"\",
                        \"right\": \"\",
                        \"bottom\": \"\",
                        \"left\": \"\",
                        \"isLinked\": true
                    },
                    \"_padding_mobile\": {
                        \"unit\": \"px\",
                        \"top\": \"\",
                        \"right\": \"\",
                        \"bottom\": \"\",
                        \"left\": \"\",
                        \"isLinked\": true
                    },
                    \"_z_index\": \"\",
                    \"_animation\": \"\",
                    \"animation_duration\": \"\",
                    \"_animation_delay\": \"\",
                    \"_element_id\": \"\",
                    \"_css_classes\": \"\",
                    \"_background_background\": \"\",
                    \"_background_color\": \"\",
                    \"_background_color_stop\": {
                        \"unit\": \"%\",
                        \"size\": 0
                    },
                    \"_background_color_b\": \"#f2295b\",
                    \"_background_color_b_stop\": {
                        \"unit\": \"%\",
                        \"size\": 100
                    },
                    \"_background_gradient_type\": \"linear\",
                    \"_background_gradient_angle\": {
                        \"unit\": \"deg\",
                        \"size\": 180
                    },
                    \"_background_gradient_position\": \"center center\",
                    \"_background_image\": {
                        \"url\": \"\",
                        \"id\": \"\"
                    },
                    \"_background_position\": \"\",
                    \"_background_attachment\": \"\",
                    \"_background_repeat\": \"\",
                    \"_background_size\": \"\",
                    \"_background_video_link\": \"\",
                    \"_background_video_start\": \"\",
                    \"_background_video_end\": \"\",
                    \"_background_video_fallback\": {
                        \"url\": \"\",
                        \"id\": \"\"
                    },
                    \"_background_hover_background\": \"\",
                    \"_background_hover_color\": \"\",
                    \"_background_hover_color_stop\": {
                        \"unit\": \"%\",
                        \"size\": 0
                    },
                    \"_background_hover_color_b\": \"#f2295b\",
                    \"_background_hover_color_b_stop\": {
                        \"unit\": \"%\",
                        \"size\": 100
                    },
                    \"_background_hover_gradient_type\": \"linear\",
                    \"_background_hover_gradient_angle\": {
                        \"unit\": \"deg\",
                        \"size\": 180
                    },
                    \"_background_hover_gradient_position\": \"center center\",
                    \"_background_hover_image\": {
                        \"url\": \"\",
                        \"id\": \"\"
                    },
                    \"_background_hover_position\": \"\",
                    \"_background_hover_attachment\": \"\",
                    \"_background_hover_repeat\": \"\",
                    \"_background_hover_size\": \"\",
                    \"_background_hover_video_link\": \"\",
                    \"_background_hover_video_start\": \"\",
                    \"_background_hover_video_end\": \"\",
                    \"_background_hover_video_fallback\": {
                        \"url\": \"\",
                        \"id\": \"\"
                    },
                    \"_background_hover_transition\": {
                        \"unit\": \"px\",
                        \"size\": 0.3
                    },
                    \"_border_border\": \"\",
                    \"_border_width\": {
                        \"unit\": \"px\",
                        \"top\": \"\",
                        \"right\": \"\",
                        \"bottom\": \"\",
                        \"left\": \"\",
                        \"isLinked\": true
                    },
                    \"_border_color\": \"\",
                    \"_border_radius\": {
                        \"unit\": \"px\",
                        \"top\": \"\",
                        \"right\": \"\",
                        \"bottom\": \"\",
                        \"left\": \"\",
                        \"isLinked\": true
                    },
                    \"_box_shadow_box_shadow_type\": \"\",
                    \"_box_shadow_box_shadow\": {
                        \"horizontal\": 0,
                        \"vertical\": 0,
                        \"blur\": 10,
                        \"spread\": 0,
                        \"color\": \"rgba(0,0,0,0.5)\"
                    },
                    \"_box_shadow_box_shadow_position\": \" \",
                    \"_border_hover_border\": \"\",
                    \"_border_hover_width\": {
                        \"unit\": \"px\",
                        \"top\": \"\",
                        \"right\": \"\",
                        \"bottom\": \"\",
                        \"left\": \"\",
                        \"isLinked\": true
                    },
                    \"_border_hover_color\": \"\",
                    \"_border_radius_hover\": {
                        \"unit\": \"px\",
                        \"top\": \"\",
                        \"right\": \"\",
                        \"bottom\": \"\",
                        \"left\": \"\",
                        \"isLinked\": true
                    },
                    \"_box_shadow_hover_box_shadow_type\": \"\",
                    \"_box_shadow_hover_box_shadow\": {
                        \"horizontal\": 0,
                        \"vertical\": 0,
                        \"blur\": 10,
                        \"spread\": 0,
                        \"color\": \"rgba(0,0,0,0.5)\"
                    },
                    \"_box_shadow_hover_box_shadow_position\": \" \",
                    \"_border_hover_transition\": {
                        \"unit\": \"px\",
                        \"size\": 0.3
                    },
                    \"hide_desktop\": \"\",
                    \"hide_tablet\": \"\",
                    \"hide_mobile\": \"\"
                }
            },
            \"editSettings\": {
                \"c184\": {},
                \"c193\": {},
                \"c413\": {}
            },
            \"keys\": {
                \"section\": [
                    \"stretch_section\",
                    \"background_background\",
                    \"background_video_link\",
                    \"background_video_start\",
                    \"background_video_end\",
                    \"shape_divider_top\",
                    \"shape_divider_top_negative\",
                    \"shape_divider_bottom\",
                    \"shape_divider_bottom_negative\",
                    \"animation\",
                    \"animation_delay\"
                ],
                \"column\": [
                    \"animation\", \"animation_delay\"
                ],
                \"common\": [
                    \"_animation\", \"_animation_delay\"
                ],
                \"heading\": [
                    \"_animation\", \"_animation_delay\"
                ],
                \"image\": [
                    \"_animation\", \"_animation_delay\"
                ],
                \"text-editor\": [
                    \"drop_cap\", \"_animation\", \"_animation_delay\"
                ],
                \"video\": [
                    \"lightbox\",
                    \"aspect_ratio\",
                    \"lightbox_content_position\",
                    \"lightbox_content_animation\",
                    \"_animation\",
                    \"_animation_delay\"
                ],
                \"button\": [
                    \"_animation\", \"_animation_delay\"
                ],
                \"divider\": [
                    \"_animation\", \"_animation_delay\"
                ],
                \"spacer\": [
                    \"_animation\", \"_animation_delay\"
                ],
                \"image-box\": [
                    \"_animation\", \"_animation_delay\"
                ],
                \"google_maps\": [
                    \"_animation\", \"_animation_delay\"
                ],
                \"icon\": [
                    \"_animation\", \"_animation_delay\"
                ],
                \"icon-box\": [
                    \"_animation\", \"_animation_delay\"
                ],
                \"image-gallery\": [
                    \"_animation\", \"_animation_delay\"
                ],
                \"image-carousel\": [
                    \"slides_to_show\",
                    \"slides_to_show_tablet\",
                    \"slides_to_show_mobile\",
                    \"slides_to_scroll\",
                    \"navigation\",
                    \"pause_on_hover\",
                    \"autoplay\",
                    \"autoplay_speed\",
                    \"infinite\",
                    \"effect\",
                    \"speed\",
                    \"direction\",
                    \"_animation\",
                    \"_animation_delay\"
                ],
                \"icon-list\": [
                    \"_animation\", \"_animation_delay\"
                ],
                \"counter\": [
                    \"_animation\", \"_animation_delay\"
                ],
                \"progress\": [
                    \"_animation\", \"_animation_delay\"
                ],
                \"testimonial\": [
                    \"_animation\", \"_animation_delay\"
                ],
                \"tabs\": [
                    \"_animation\", \"_animation_delay\"
                ],
                \"accordion\": [
                    \"_animation\", \"_animation_delay\"
                ],
                \"toggle\": [
                    \"_animation\", \"_animation_delay\"
                ],
                \"social-icons\": [
                    \"_animation\", \"_animation_delay\"
                ],
                \"alert\": [
                    \"_animation\", \"_animation_delay\"
                ],
                \"audio\": [
                    \"_animation\", \"_animation_delay\"
                ],
                \"shortcode\": [
                    \"_animation\", \"_animation_delay\"
                ],
                \"html\": [
                    \"_animation\", \"_animation_delay\"
                ],
                \"menu-anchor\": [
                    \"_animation\", \"_animation_delay\"
                ],
                \"sidebar\": [
                    \"_animation\", \"_animation_delay\"
                ],
                \"wp-widget-pages\": [
                    \"_animation\", \"_animation_delay\"
                ],
                \"wp-widget-calendar\": [
                    \"_animation\", \"_animation_delay\"
                ],
                \"wp-widget-archives\": [
                    \"_animation\", \"_animation_delay\"
                ],
                \"wp-widget-media_audio\": [
                    \"_animation\", \"_animation_delay\"
                ],
                \"wp-widget-media_image\": [
                    \"_animation\", \"_animation_delay\"
                ],
                \"wp-widget-media_gallery\": [
                    \"_animation\", \"_animation_delay\"
                ],
                \"wp-widget-media_video\": [
                    \"_animation\", \"_animation_delay\"
                ],
                \"wp-widget-meta\": [
                    \"_animation\", \"_animation_delay\"
                ],
                \"wp-widget-search\": [
                    \"_animation\", \"_animation_delay\"
                ],
                \"wp-widget-text\": [
                    \"_animation\", \"_animation_delay\"
                ],
                \"wp-widget-categories\": [
                    \"_animation\", \"_animation_delay\"
                ],
                \"wp-widget-recent-posts\": [
                    \"_animation\", \"_animation_delay\"
                ],
                \"wp-widget-recent-comments\": [
                    \"_animation\", \"_animation_delay\"
                ],
                \"wp-widget-rss\": [
                    \"_animation\", \"_animation_delay\"
                ],
                \"wp-widget-tag_cloud\": [
                    \"_animation\", \"_animation_delay\"
                ],
                \"wp-widget-nav_menu\": [
                    \"_animation\", \"_animation_delay\"
                ],
                \"wp-widget-custom_html\": [\"_animation\", \"_animation_delay\"]
            }
        }
    }
    /* ]]> */
</script>
<link rel=\"stylesheet\" href=\"";
        // line 1078
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)), "html", null, true);
        echo "/elementor/assets/lib/eicons/css/elementor-icons.min.css?ver=3.3.0\" type=\"text/css\">
<link rel=\"stylesheet\" href=\"";
        // line 1079
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)), "html", null, true);
        echo "/elementor/assets/lib/font-awesome/css/font-awesome.min.css?ver=4.7.0\" type=\"text/css\">
<link rel=\"stylesheet\" href=\"";
        // line 1080
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)), "html", null, true);
        echo "/elementor/assets/lib/e-select2/css/e-select2.min.css?ver=4.0.6-rc.1\" type=\"text/css\">
<link rel=\"stylesheet\" href=\"";
        // line 1081
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)), "html", null, true);
        echo "/elementor/assets/lib/eicons/css/elementor-icons.min.css?ver=3.3.0\" type=\"text/css\">
<link rel=\"stylesheet\" href=\"";
        // line 1082
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)), "html", null, true);
        echo "/elementor/assets/lib/animations/animations.min.css?ver=2.0.16\" type=\"text/css\">
<link rel=\"stylesheet\" href=\"";
        // line 1083
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)), "html", null, true);
        echo "/elementor/assets/css/editor-preview";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["is_rtl"] ?? null)) ? ("-rtl") : ("")));
        echo ".min.css?ver=2.0.16\" type=\"text/css\">
<link rel=\"stylesheet\" href=\"";
        // line 1084
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)), "html", null, true);
        echo "/elementor/assets/css/frontend";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["is_rtl"] ?? null)) ? ("-rtl") : ("")));
        echo ".min.css?ver=2.0.16\" type=\"text/css\">
<link rel=\"stylesheet\" href=\"";
        // line 1085
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)), "html", null, true);
        echo "/elementor/assets/css/frontend-msie.min.css\">

<script src=\"";
        // line 1087
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)), "html", null, true);
        echo "/elementor_drupal/assets/js/jquery/jquery.js\"></script>
<script src=\"";
        // line 1088
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)), "html", null, true);
        echo "/elementor_drupal/assets/js/jquery/jquery-migrate.min.js\"></script>
<script src=\"";
        // line 1089
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)), "html", null, true);
        echo "/elementor_drupal/assets/js/jquery/ui/position.min.js\"></script>

<script type=\"text/javascript\" src=\"";
        // line 1091
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)), "html", null, true);
        echo "/elementor/assets/lib/slick/slick.min.js?ver=1.8.1\"></script>
<script type=\"text/javascript\" src=\"";
        // line 1092
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)), "html", null, true);
        echo "/elementor/assets/lib/jquery-numerator/jquery-numerator.min.js?ver=0.2.1\"></script>
<script type=\"text/javascript\" src=\"";
        // line 1093
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)), "html", null, true);
        echo "/elementor/assets/lib/inline-editor/js/inline-editor.min.js?ver=4.9.6\"></script>
<script type=\"text/javascript\" src=\"";
        // line 1094
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)), "html", null, true);
        echo "/elementor/assets/lib/dialog/dialog.min.js?ver=4.3.2\"></script>
<script type=\"text/javascript\" src=\"";
        // line 1095
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)), "html", null, true);
        echo "/elementor/assets/lib/waypoints/waypoints.min.js?ver=4.0.2\"></script>
<script type=\"text/javascript\" src=\"";
        // line 1096
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)), "html", null, true);
        echo "/elementor/assets/lib/swiper/swiper.jquery.min.js?ver=3.4.2\"></script>
<script type=\"text/javascript\" src=\"";
        // line 1097
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)), "html", null, true);
        echo "/elementor/assets/js/frontend.min.js?ver=2.0.16\"></script>

<!-- attach_library('elementor/frontend') -->

<div id=\"elementor\" class=\"elementor-";
        // line 1101
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["uid"] ?? null)), "html", null, true);
        echo " elementor-edit-mode elementor elementor-edit-area-active\">
    ";
        // line 1102
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed(($context["elementor_tmp"] ?? null)));
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "modules/contrib/elementor/templates/elementor-field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1222 => 1102,  1218 => 1101,  1211 => 1097,  1207 => 1096,  1203 => 1095,  1199 => 1094,  1195 => 1093,  1191 => 1092,  1187 => 1091,  1182 => 1089,  1178 => 1088,  1174 => 1087,  1169 => 1085,  1163 => 1084,  1157 => 1083,  1153 => 1082,  1149 => 1081,  1145 => 1080,  1141 => 1079,  1137 => 1078,  71 => 15,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/elementor/templates/elementor-field.html.twig", "C:\\xampp\\htdocs\\fresh\\gavamrit\\modules\\contrib\\elementor\\templates\\elementor-field.html.twig");
    }
}
