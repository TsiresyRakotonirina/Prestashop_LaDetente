<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig */
class __TwigTemplate_81155caae222c089b2329143f40a1d3a extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        // line 45
        $_trait_0 = $this->loadTemplate("bootstrap_base_layout.html.twig", "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", 45);
        if (!$_trait_0->unwrap()->isTraitable()) {
            throw new RuntimeError('Template "'."bootstrap_base_layout.html.twig".'" cannot be used as a trait.', 45, $this->source);
        }
        $_trait_0_blocks = $_trait_0->unwrap()->getBlocks();

        if (!isset($_trait_0_blocks["radio_widget"])) {
            throw new RuntimeError('Block "radio_widget" is not defined in trait "bootstrap_base_layout.html.twig".', 45, $this->source);
        }

        $_trait_0_blocks["base_radio_widget"] = $_trait_0_blocks["radio_widget"]; unset($_trait_0_blocks["radio_widget"]); $this->traitAliases["base_radio_widget"] = "radio_widget";

        if (!isset($_trait_0_blocks["checkbox_widget"])) {
            throw new RuntimeError('Block "checkbox_widget" is not defined in trait "bootstrap_base_layout.html.twig".', 45, $this->source);
        }

        $_trait_0_blocks["base_checkbox_widget"] = $_trait_0_blocks["checkbox_widget"]; unset($_trait_0_blocks["checkbox_widget"]); $this->traitAliases["base_checkbox_widget"] = "checkbox_widget";

        // line 48
        $_trait_1 = $this->loadTemplate("bootstrap_4_layout.html.twig", "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", 48);
        if (!$_trait_1->unwrap()->isTraitable()) {
            throw new RuntimeError('Template "'."bootstrap_4_layout.html.twig".'" cannot be used as a trait.', 48, $this->source);
        }
        $_trait_1_blocks = $_trait_1->unwrap()->getBlocks();

        // line 49
        $_trait_2 = $this->loadTemplate("@PrestaShop/Admin/TwigTemplateForm/entity_search_input.html.twig", "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", 49);
        if (!$_trait_2->unwrap()->isTraitable()) {
            throw new RuntimeError('Template "'."@PrestaShop/Admin/TwigTemplateForm/entity_search_input.html.twig".'" cannot be used as a trait.', 49, $this->source);
        }
        $_trait_2_blocks = $_trait_2->unwrap()->getBlocks();

        // line 50
        $_trait_3 = $this->loadTemplate("@PrestaShop/Admin/TwigTemplateForm/material.html.twig", "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", 50);
        if (!$_trait_3->unwrap()->isTraitable()) {
            throw new RuntimeError('Template "'."@PrestaShop/Admin/TwigTemplateForm/material.html.twig".'" cannot be used as a trait.', 50, $this->source);
        }
        $_trait_3_blocks = $_trait_3->unwrap()->getBlocks();

        // line 51
        $_trait_4 = $this->loadTemplate("@PrestaShop/Admin/TwigTemplateForm/multishop.html.twig", "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", 51);
        if (!$_trait_4->unwrap()->isTraitable()) {
            throw new RuntimeError('Template "'."@PrestaShop/Admin/TwigTemplateForm/multishop.html.twig".'" cannot be used as a trait.', 51, $this->source);
        }
        $_trait_4_blocks = $_trait_4->unwrap()->getBlocks();

        $this->traits = array_merge(
            $_trait_0_blocks,
            $_trait_1_blocks,
            $_trait_2_blocks,
            $_trait_3_blocks,
            $_trait_4_blocks
        );

        $this->blocks = array_merge(
            $this->traits,
            [
                'form_start' => [$this, 'block_form_start'],
                'form_widget' => [$this, 'block_form_widget'],
                'form_widget_simple' => [$this, 'block_form_widget_simple'],
                'ip_address_text_widget' => [$this, 'block_ip_address_text_widget'],
                'password_widget' => [$this, 'block_password_widget'],
                'form_row' => [$this, 'block_form_row'],
                'form_modify_all_shops' => [$this, 'block_form_modify_all_shops'],
                'form_disabling_switch' => [$this, 'block_form_disabling_switch'],
                'widget_type_class' => [$this, 'block_widget_type_class'],
                'form_label' => [$this, 'block_form_label'],
                'textarea_widget' => [$this, 'block_textarea_widget'],
                'money_widget' => [$this, 'block_money_widget'],
                'percent_widget' => [$this, 'block_percent_widget'],
                'datetime_widget' => [$this, 'block_datetime_widget'],
                'url_widget' => [$this, 'block_url_widget'],
                'date_widget' => [$this, 'block_date_widget'],
                'time_widget' => [$this, 'block_time_widget'],
                'email_widget' => [$this, 'block_email_widget'],
                'button_widget' => [$this, 'block_button_widget'],
                'icon_button_widget' => [$this, 'block_icon_button_widget'],
                'choice_widget' => [$this, 'block_choice_widget'],
                'choice_widget_collapsed' => [$this, 'block_choice_widget_collapsed'],
                'choice_widget_expanded' => [$this, 'block_choice_widget_expanded'],
                'choice_tree_widget' => [$this, 'block_choice_tree_widget'],
                'choice_tree_item_widget' => [$this, 'block_choice_tree_item_widget'],
                'translatefields_widget' => [$this, 'block_translatefields_widget'],
                'translate_fields_widget' => [$this, 'block_translate_fields_widget'],
                'translate_text_widget' => [$this, 'block_translate_text_widget'],
                'translate_textarea_widget' => [$this, 'block_translate_textarea_widget'],
                'date_picker_widget' => [$this, 'block_date_picker_widget'],
                'date_range_widget' => [$this, 'block_date_range_widget'],
                'search_and_reset_widget' => [$this, 'block_search_and_reset_widget'],
                'switch_widget' => [$this, 'block_switch_widget'],
                'row_attributes' => [$this, 'block_row_attributes'],
                '_form_step6_attachments_widget' => [$this, 'block__form_step6_attachments_widget'],
                'choice_label' => [$this, 'block_choice_label'],
                'checkbox_label' => [$this, 'block_checkbox_label'],
                'radio_label' => [$this, 'block_radio_label'],
                'checkbox_radio_label' => [$this, 'block_checkbox_radio_label'],
                'radio_widget' => [$this, 'block_radio_widget'],
                'checkbox_widget' => [$this, 'block_checkbox_widget'],
                'form_errors' => [$this, 'block_form_errors'],
                'form_errors_field' => [$this, 'block_form_errors_field'],
                'form_errors_other' => [$this, 'block_form_errors_other'],
                'material_choice_table_widget' => [$this, 'block_material_choice_table_widget'],
                'material_multiple_choice_table_widget' => [$this, 'block_material_multiple_choice_table_widget'],
                'translatable_fields_with_tabs' => [$this, 'block_translatable_fields_with_tabs'],
                'translatable_fields_with_dropdown' => [$this, 'block_translatable_fields_with_dropdown'],
                'translatable_widget' => [$this, 'block_translatable_widget'],
                'birthday_widget' => [$this, 'block_birthday_widget'],
                'file_widget' => [$this, 'block_file_widget'],
                'shop_restriction_checkbox_widget' => [$this, 'block_shop_restriction_checkbox_widget'],
                'generatable_text_widget' => [$this, 'block_generatable_text_widget'],
                'text_with_recommended_length_widget' => [$this, 'block_text_with_recommended_length_widget'],
                'text_with_length_counter_widget' => [$this, 'block_text_with_length_counter_widget'],
                'integer_min_max_filter_widget' => [$this, 'block_integer_min_max_filter_widget'],
                'number_min_max_filter_widget' => [$this, 'block_number_min_max_filter_widget'],
                'number_widget' => [$this, 'block_number_widget'],
                'integer_widget' => [$this, 'block_integer_widget'],
                'form_unit' => [$this, 'block_form_unit'],
                'form_unit_prepend' => [$this, 'block_form_unit_prepend'],
                'form_help' => [$this, 'block_form_help'],
                'form_prepend_external_link' => [$this, 'block_form_prepend_external_link'],
                'form_append_external_link' => [$this, 'block_form_append_external_link'],
                'form_external_link' => [$this, 'block_form_external_link'],
                'form_external_link_attributes' => [$this, 'block_form_external_link_attributes'],
                'custom_content_widget' => [$this, 'block_custom_content_widget'],
                'text_widget' => [$this, 'block_text_widget'],
                'form_prepend_alert' => [$this, 'block_form_prepend_alert'],
                'form_append_alert' => [$this, 'block_form_append_alert'],
                'form_alert' => [$this, 'block_form_alert'],
                'unavailable_widget' => [$this, 'block_unavailable_widget'],
                'text_preview_widget' => [$this, 'block_text_preview_widget'],
                'link_preview_widget' => [$this, 'block_link_preview_widget'],
                'image_preview_widget' => [$this, 'block_image_preview_widget'],
                'delta_quantity_widget' => [$this, 'block_delta_quantity_widget'],
                'delta_quantity_quantity_widget' => [$this, 'block_delta_quantity_quantity_widget'],
                'delta_quantity_delta_row' => [$this, 'block_delta_quantity_delta_row'],
                'delta_quantity_delta_widget' => [$this, 'block_delta_quantity_delta_widget'],
                'submittable_input_widget' => [$this, 'block_submittable_input_widget'],
                'submittable_input_button_widget' => [$this, 'block_submittable_input_button_widget'],
                'submittable_delta_quantity_delta_widget' => [$this, 'block_submittable_delta_quantity_delta_widget'],
                'navigation_tab_widget' => [$this, 'block_navigation_tab_widget'],
                'accordion_widget' => [$this, 'block_accordion_widget'],
                'button_collection_widget' => [$this, 'block_button_collection_widget'],
                'avatar_url_row' => [$this, 'block_avatar_url_row'],
                'change_password_row' => [$this, 'block_change_password_row'],
                'price_reduction_widget' => [$this, 'block_price_reduction_widget'],
                'image_with_preview_widget' => [$this, 'block_image_with_preview_widget'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 25
        yield "
";
        // line 34
        yield "
";
        // line 46
        yield "
";
        // line 52
        yield "
";
        // line 54
        yield "
";
        // line 56
        yield "
";
        // line 57
        yield from $this->unwrap()->yieldBlock('form_start', $context, $blocks);
        // line 67
        yield from $this->unwrap()->yieldBlock('form_widget', $context, $blocks);
        // line 75
        yield from $this->unwrap()->yieldBlock('form_widget_simple', $context, $blocks);
        // line 80
        yield from $this->unwrap()->yieldBlock('ip_address_text_widget', $context, $blocks);
        // line 90
        yield from $this->unwrap()->yieldBlock('password_widget', $context, $blocks);
        // line 97
        yield "
";
        // line 98
        yield from $this->unwrap()->yieldBlock('form_row', $context, $blocks);
        // line 116
        yield "
";
        // line 121
        yield from $this->unwrap()->yieldBlock('form_modify_all_shops', $context, $blocks);
        // line 128
        yield "
";
        // line 129
        yield from $this->unwrap()->yieldBlock('form_disabling_switch', $context, $blocks);
        // line 136
        yield "
";
        // line 137
        yield from $this->unwrap()->yieldBlock('widget_type_class', $context, $blocks);
        // line 156
        yield "
";
        // line 159
        yield from $this->unwrap()->yieldBlock('form_label', $context, $blocks);
        // line 204
        yield "
";
        // line 205
        yield from $this->unwrap()->yieldBlock('textarea_widget', $context, $blocks);
        // line 211
        yield "
";
        // line 212
        yield from $this->unwrap()->yieldBlock('money_widget', $context, $blocks);
        // line 230
        yield "
";
        // line 231
        yield from $this->unwrap()->yieldBlock('percent_widget', $context, $blocks);
        // line 239
        yield "
";
        // line 240
        yield from $this->unwrap()->yieldBlock('datetime_widget', $context, $blocks);
        // line 254
        yield from $this->unwrap()->yieldBlock('url_widget', $context, $blocks);
        // line 260
        yield from $this->unwrap()->yieldBlock('date_widget', $context, $blocks);
        // line 278
        yield "
";
        // line 279
        yield from $this->unwrap()->yieldBlock('time_widget', $context, $blocks);
        // line 294
        yield from $this->unwrap()->yieldBlock('email_widget', $context, $blocks);
        // line 300
        yield from $this->unwrap()->yieldBlock('button_widget', $context, $blocks);
        // line 304
        yield "
";
        // line 305
        yield from $this->unwrap()->yieldBlock('icon_button_widget', $context, $blocks);
        // line 323
        yield "
";
        // line 324
        yield from $this->unwrap()->yieldBlock('choice_widget', $context, $blocks);
        // line 328
        yield "
";
        // line 329
        yield from $this->unwrap()->yieldBlock('choice_widget_collapsed', $context, $blocks);
        // line 333
        yield "
";
        // line 334
        yield from $this->unwrap()->yieldBlock('choice_widget_expanded', $context, $blocks);
        // line 357
        yield "
";
        // line 358
        yield from $this->unwrap()->yieldBlock('choice_tree_widget', $context, $blocks);
        // line 368
        yield "
";
        // line 369
        yield from $this->unwrap()->yieldBlock('choice_tree_item_widget', $context, $blocks);
        // line 407
        yield "
";
        // line 408
        yield from $this->unwrap()->yieldBlock('translatefields_widget', $context, $blocks);
        // line 433
        yield "
";
        // line 434
        yield from $this->unwrap()->yieldBlock('translate_fields_widget', $context, $blocks);
        // line 440
        yield "
";
        // line 441
        yield from $this->unwrap()->yieldBlock('translate_text_widget', $context, $blocks);
        // line 477
        yield "
";
        // line 478
        yield from $this->unwrap()->yieldBlock('translate_textarea_widget', $context, $blocks);
        // line 519
        yield "
";
        // line 520
        yield from $this->unwrap()->yieldBlock('date_picker_widget', $context, $blocks);
        // line 534
        yield "
";
        // line 535
        yield from $this->unwrap()->yieldBlock('date_range_widget', $context, $blocks);
        // line 551
        yield "
";
        // line 552
        yield from $this->unwrap()->yieldBlock('search_and_reset_widget', $context, $blocks);
        // line 577
        yield "
";
        // line 578
        yield from $this->unwrap()->yieldBlock('switch_widget', $context, $blocks);
        // line 602
        yield from $this->unwrap()->yieldBlock('row_attributes', $context, $blocks);
        // line 610
        yield from $this->unwrap()->yieldBlock('_form_step6_attachments_widget', $context, $blocks);
        // line 639
        yield "
";
        // line 641
        yield "
";
        // line 642
        yield from $this->unwrap()->yieldBlock('choice_label', $context, $blocks);
        // line 647
        yield "
";
        // line 648
        yield from $this->unwrap()->yieldBlock('checkbox_label', $context, $blocks);
        // line 651
        yield "
";
        // line 652
        yield from $this->unwrap()->yieldBlock('radio_label', $context, $blocks);
        // line 655
        yield "
";
        // line 656
        yield from $this->unwrap()->yieldBlock('checkbox_radio_label', $context, $blocks);
        // line 688
        yield "
";
        // line 689
        yield from $this->unwrap()->yieldBlock('radio_widget', $context, $blocks);
        // line 703
        yield "
";
        // line 704
        yield from $this->unwrap()->yieldBlock('checkbox_widget', $context, $blocks);
        // line 711
        yield "
";
        // line 713
        yield "
";
        // line 714
        yield from $this->unwrap()->yieldBlock('form_errors', $context, $blocks);
        // line 721
        yield "
";
        // line 722
        yield from $this->unwrap()->yieldBlock('form_errors_field', $context, $blocks);
        // line 778
        yield "
";
        // line 779
        yield from $this->unwrap()->yieldBlock('form_errors_other', $context, $blocks);
        // line 794
        yield "
";
        // line 796
        yield "
";
        // line 797
        yield from $this->unwrap()->yieldBlock('material_choice_table_widget', $context, $blocks);
        // line 834
        yield "
";
        // line 835
        yield from $this->unwrap()->yieldBlock('material_multiple_choice_table_widget', $context, $blocks);
        // line 887
        yield "
";
        // line 889
        yield from $this->unwrap()->yieldBlock('translatable_fields_with_tabs', $context, $blocks);
        // line 912
        yield "
";
        // line 913
        yield from $this->unwrap()->yieldBlock('translatable_fields_with_dropdown', $context, $blocks);
        // line 949
        yield "
";
        // line 950
        yield from $this->unwrap()->yieldBlock('translatable_widget', $context, $blocks);
        // line 958
        yield "
";
        // line 959
        yield from $this->unwrap()->yieldBlock('birthday_widget', $context, $blocks);
        // line 983
        yield "
";
        // line 984
        yield from $this->unwrap()->yieldBlock('file_widget', $context, $blocks);
        // line 1016
        yield "
";
        // line 1017
        yield from $this->unwrap()->yieldBlock('shop_restriction_checkbox_widget', $context, $blocks);
        // line 1033
        yield "
";
        // line 1034
        yield from $this->unwrap()->yieldBlock('generatable_text_widget', $context, $blocks);
        // line 1053
        yield "
";
        // line 1054
        yield from $this->unwrap()->yieldBlock('text_with_recommended_length_widget', $context, $blocks);
        // line 1079
        yield "
";
        // line 1080
        yield from $this->unwrap()->yieldBlock('text_with_length_counter_widget', $context, $blocks);
        // line 1108
        yield "
";
        // line 1109
        yield from $this->unwrap()->yieldBlock('integer_min_max_filter_widget', $context, $blocks);
        // line 1113
        yield "
";
        // line 1114
        yield from $this->unwrap()->yieldBlock('number_min_max_filter_widget', $context, $blocks);
        // line 1119
        yield from $this->unwrap()->yieldBlock('number_widget', $context, $blocks);
        // line 1129
        yield from $this->unwrap()->yieldBlock('integer_widget', $context, $blocks);
        // line 1139
        yield from $this->unwrap()->yieldBlock('form_unit', $context, $blocks);
        // line 1146
        yield "
";
        // line 1147
        yield from $this->unwrap()->yieldBlock('form_unit_prepend', $context, $blocks);
        // line 1154
        yield "
";
        // line 1155
        yield from $this->unwrap()->yieldBlock('form_help', $context, $blocks);
        // line 1164
        yield "
";
        // line 1165
        yield from $this->unwrap()->yieldBlock('form_prepend_external_link', $context, $blocks);
        // line 1170
        yield "
";
        // line 1171
        yield from $this->unwrap()->yieldBlock('form_append_external_link', $context, $blocks);
        // line 1176
        yield "
";
        // line 1177
        yield from $this->unwrap()->yieldBlock('form_external_link', $context, $blocks);
        // line 1195
        yield from $this->unwrap()->yieldBlock('form_external_link_attributes', $context, $blocks);
        // line 1209
        yield from $this->unwrap()->yieldBlock('custom_content_widget', $context, $blocks);
        // line 1212
        yield "
";
        // line 1213
        yield from $this->unwrap()->yieldBlock('text_widget', $context, $blocks);
        // line 1230
        yield from $this->unwrap()->yieldBlock('form_prepend_alert', $context, $blocks);
        // line 1236
        yield from $this->unwrap()->yieldBlock('form_append_alert', $context, $blocks);
        // line 1242
        yield from $this->unwrap()->yieldBlock('form_alert', $context, $blocks);
        // line 1283
        yield from $this->unwrap()->yieldBlock('unavailable_widget', $context, $blocks);
        // line 1290
        yield "
";
        // line 1291
        yield from $this->unwrap()->yieldBlock('text_preview_widget', $context, $blocks);
        // line 1321
        yield "
";
        // line 1322
        yield from $this->unwrap()->yieldBlock('link_preview_widget', $context, $blocks);
        // line 1329
        yield "
";
        // line 1330
        yield from $this->unwrap()->yieldBlock('image_preview_widget', $context, $blocks);
        // line 1339
        yield "
";
        // line 1340
        yield from $this->unwrap()->yieldBlock('delta_quantity_widget', $context, $blocks);
        // line 1353
        yield "
";
        // line 1354
        yield from $this->unwrap()->yieldBlock('delta_quantity_quantity_widget', $context, $blocks);
        // line 1366
        yield "
";
        // line 1367
        yield from $this->unwrap()->yieldBlock('delta_quantity_delta_row', $context, $blocks);
        // line 1383
        yield "
";
        // line 1384
        yield from $this->unwrap()->yieldBlock('delta_quantity_delta_widget', $context, $blocks);
        // line 1389
        yield "
";
        // line 1390
        yield from $this->unwrap()->yieldBlock('submittable_input_widget', $context, $blocks);
        // line 1403
        yield "
";
        // line 1404
        yield from $this->unwrap()->yieldBlock('submittable_input_button_widget', $context, $blocks);
        // line 1409
        yield "
";
        // line 1410
        yield from $this->unwrap()->yieldBlock('submittable_delta_quantity_delta_widget', $context, $blocks);
        // line 1424
        yield from $this->unwrap()->yieldBlock('navigation_tab_widget', $context, $blocks);
        // line 1482
        yield from $this->unwrap()->yieldBlock('accordion_widget', $context, $blocks);
        // line 1528
        yield from $this->unwrap()->yieldBlock('button_collection_widget', $context, $blocks);
        // line 1574
        yield "
";
        // line 1575
        yield from $this->unwrap()->yieldBlock('avatar_url_row', $context, $blocks);
        // line 1585
        yield "
";
        // line 1586
        yield from $this->unwrap()->yieldBlock('change_password_row', $context, $blocks);
        // line 1626
        yield from $this->unwrap()->yieldBlock('price_reduction_widget', $context, $blocks);
        // line 1640
        yield from $this->unwrap()->yieldBlock('image_with_preview_widget', $context, $blocks);
        yield from [];
    }

    // line 57
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_start(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 58
        yield "  ";
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["data-alerts-success" => Twig\Extension\CoreExtension::length($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 58), "alerts", [], "any", false, true, false, 58), "success", [], "any", true, true, false, 58)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 58), "alerts", [], "any", false, false, false, 58), "success", [], "any", false, false, false, 58), [])) : ([])))]);
        // line 59
        yield "  ";
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["data-alerts-info" => Twig\Extension\CoreExtension::length($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 59), "alerts", [], "any", false, true, false, 59), "info", [], "any", true, true, false, 59)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 59), "alerts", [], "any", false, false, false, 59), "info", [], "any", false, false, false, 59), [])) : ([])))]);
        // line 60
        yield "  ";
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["data-alerts-warning" => Twig\Extension\CoreExtension::length($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 60), "alerts", [], "any", false, true, false, 60), "warning", [], "any", true, true, false, 60)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 60), "alerts", [], "any", false, false, false, 60), "warning", [], "any", false, false, false, 60), [])) : ([])))]);
        // line 61
        yield "  ";
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["data-alerts-error" => Twig\Extension\CoreExtension::length($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 61), "alerts", [], "any", false, true, false, 61), "error", [], "any", true, true, false, 61)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 61), "alerts", [], "any", false, false, false, 61), "error", [], "any", false, false, false, 61), [])) : ([])))]);
        // line 62
        yield "  ";
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["data-form-submitted" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 62), "submitted", [], "any", false, false, false, 62)) ? (1) : (0))]);
        // line 63
        yield "  ";
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["data-form-valid" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 63), "valid", [], "any", false, false, false, 63)) ? (1) : (0))]);
        // line 64
        yield "  ";
        yield from $this->yieldParentBlock("form_start", $context, $blocks);
        yield "
";
        yield from [];
    }

    // line 67
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 68
        if (array_key_exists("columns_number", $context)) {
            // line 69
            yield "    ";
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim(((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 69)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 69), "")) : ("")) . " form-columns-") . ($context["columns_number"] ?? null)))]);
            // line 70
            yield "  ";
        }
        // line 71
        yield "  ";
        yield from $this->yieldParentBlock("form_widget", $context, $blocks);
        // line 72
        yield from         $this->unwrap()->yieldBlock("form_help", $context, $blocks);
        yield from [];
    }

    // line 75
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_widget_simple(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 76
        yield from $this->yieldParentBlock("form_widget_simple", $context, $blocks);
        yield "
  ";
        // line 77
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@PrestaShop/Admin/TwigTemplateForm/form_max_length.html.twig", ["attr" => ($context["attr"] ?? null)]);
        yield from [];
    }

    // line 80
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ip_address_text_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 81
        yield "  <div class=\"input-group\">";
        // line 82
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        // line 83
        yield "<button type=\"button\" class=\"btn btn-outline-primary add_ip_button\" data-ip=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["currentIp"] ?? null), "html", null, true);
        yield "\">
      <i class=\"material-icons\">add_circle</i> ";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add my IP", [], "Admin.Actions"), "html", null, true);
        yield "
    </button>
  </div>
  ";
        // line 87
        yield from         $this->unwrap()->yieldBlock("form_help", $context, $blocks);
        yield "
";
        yield from [];
    }

    // line 90
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_password_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 91
        $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default(($context["type"] ?? null), "password")) : ("password"));
        // line 92
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        yield "
  ";
        // line 93
        yield from         $this->unwrap()->yieldBlock("form_help", $context, $blocks);
        yield from [];
    }

    // line 98
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 99
        yield "<div class=\"form-group";
        yield from         $this->unwrap()->yieldBlock("widget_type_class", $context, $blocks);
        if ((( !($context["compound"] ?? null) || ((array_key_exists("force_error", $context)) ? (Twig\Extension\CoreExtension::default(($context["force_error"] ?? null), false)) : (false))) &&  !($context["valid"] ?? null))) {
            yield " has-error";
        }
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 99)) {
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 99), "html", null, true);
        }
        yield "\">";
        // line 100
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 101
        yield from         $this->unwrap()->yieldBlock("form_prepend_alert", $context, $blocks);
        // line 102
        yield from         $this->unwrap()->yieldBlock("form_prepend_external_link", $context, $blocks);
        // line 104
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 105
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 106
        yield from         $this->unwrap()->yieldBlock("form_modify_all_shops", $context, $blocks);
        // line 108
        yield from         $this->unwrap()->yieldBlock("form_append_alert", $context, $blocks);
        // line 109
        yield from         $this->unwrap()->yieldBlock("form_append_external_link", $context, $blocks);
        // line 110
        yield "</div>

  ";
        // line 112
        if (($context["column_breaker"] ?? null)) {
            // line 113
            yield "  <div class=\"form-group form-column-breaker\"></div>
  ";
        }
        yield from [];
    }

    // line 121
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_modify_all_shops(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 122
        yield "  ";
        $context["overrideCheckboxName"] = (($context["modify_all_shops_prefix"] ?? null) . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 122), "name", [], "any", false, false, false, 122));
        // line 123
        yield "  ";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, true, false, 123), ($context["overrideCheckboxName"] ?? null), [], "any", true, true, false, 123)) {
            // line 124
            yield "    ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, false, false, 124), ($context["overrideCheckboxName"] ?? null), [], "any", false, false, false, 124), 'errors');
            yield "
    ";
            // line 125
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, false, false, 125), ($context["overrideCheckboxName"] ?? null), [], "any", false, false, false, 125), 'widget');
            yield "
  ";
        }
        yield from [];
    }

    // line 129
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_disabling_switch(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 130
        yield "  ";
        $context["disablingSwitchName"] = (($context["disabling_switch_prefix"] ?? null) . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 130), "name", [], "any", false, false, false, 130));
        // line 131
        yield "  ";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, true, false, 131), ($context["disablingSwitchName"] ?? null), [], "any", true, true, false, 131)) {
            // line 132
            yield "    ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, false, false, 132), ($context["disablingSwitchName"] ?? null), [], "any", false, false, false, 132), 'errors');
            yield "
    ";
            // line 133
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, false, false, 133), ($context["disablingSwitchName"] ?? null), [], "any", false, false, false, 133), 'widget');
            yield "
  ";
        }
        yield from [];
    }

    // line 137
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_widget_type_class(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 138
        if (( !((array_key_exists("compound", $context)) ? (Twig\Extension\CoreExtension::default(($context["compound"] ?? null), false)) : (false)) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 138), "block_prefixes", [], "any", false, false, false, 138)) > 2))) {
            // line 139
            yield " ";
            $_v0 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 140
                yield "
    ";
                // line 141
                $context["index"] = (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 141), "block_prefixes", [], "any", false, false, false, 141)) - 2);
                // line 142
                yield "    ";
                $context["widgetType"] = (($_v1 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 142), "block_prefixes", [], "any", false, false, false, 142)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[($context["index"] ?? null)] ?? null) : null);
                // line 143
                yield "    ";
                if ((($context["widgetType"] ?? null) == "choice")) {
                    // line 144
                    yield "      ";
                    if ( !($context["expanded"] ?? null)) {
                        // line 145
                        yield "        ";
                        $context["widgetType"] = "select";
                        // line 146
                        yield "      ";
                    } elseif (($context["multiple"] ?? null)) {
                        // line 147
                        yield "        ";
                        $context["widgetType"] = "checboxes";
                        // line 148
                        yield "      ";
                    } else {
                        // line 149
                        yield "        ";
                        $context["widgetType"] = "radio";
                        // line 150
                        yield "      ";
                    }
                    // line 151
                    yield "    ";
                }
                // line 152
                yield "    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["widgetType"] ?? null), "html", null, true);
                yield "-widget
";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 139
            yield Twig\Extension\CoreExtension::spaceless($_v0);
        }
        yield from [];
    }

    // line 159
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 160
        if ( !(($context["label"] ?? null) === false)) {
            // line 161
            if ( !($context["compound"] ?? null)) {
                // line 162
                $context["label_attr"] = Twig\Extension\CoreExtension::merge(($context["label_attr"] ?? null), ["for" => ($context["id"] ?? null)]);
            }
            // line 164
            yield "    ";
            if (($context["required"] ?? null)) {
                // line 165
                $context["label_attr"] = Twig\Extension\CoreExtension::merge(($context["label_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 165)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 165), "")) : ("")) . " required"))]);
            }
            // line 167
            yield "    ";
            if (Twig\Extension\CoreExtension::testEmpty(($context["label"] ?? null))) {
                // line 168
                if ( !Twig\Extension\CoreExtension::testEmpty(($context["label_format"] ?? null))) {
                    // line 169
                    $context["label"] = Twig\Extension\CoreExtension::replace(($context["label_format"] ?? null), ["%name%" =>                     // line 170
($context["name"] ?? null), "%id%" =>                     // line 171
($context["id"] ?? null)]);
                } else {
                    // line 174
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? null));
                }
            }
            // line 178
            $context["labelTag"] = ((array_key_exists("label_tag_name", $context)) ? (Twig\Extension\CoreExtension::default(($context["label_tag_name"] ?? null), "label")) : ("label"));
            // line 179
            yield "    <";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["labelTag"] ?? null), "html", null, true);
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["label_attr"] ?? null));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrname"], "html", null, true);
                yield "=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrvalue"], "html", null, true);
                yield "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['attrname'], $context['attrvalue'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield ">
    ";
            // line 180
            if (($context["required"] ?? null)) {
                // line 181
                yield "      <span class=\"text-danger\">*</span>
    ";
            }
            // line 183
            yield "    ";
            yield (((($context["translation_domain"] ?? null) === false)) ? (($context["label"] ?? null)) : (($context["label"] ?? null)));
            yield "
    ";
            // line 184
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "tooltip", [], "array", true, true, false, 184)) {
                // line 185
                yield "      ";
                $context["placement"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "tooltip_placement", [], "array", true, true, false, 185)) ? ((($_v2 = ($context["label_attr"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["tooltip_placement"] ?? null) : null)) : ("top"));
                // line 186
                yield "      <i class=\"icon-question\" data-toggle=\"pstooltip\" data-placement=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["placement"] ?? null), "html", null, true);
                yield "\"
         title=\"";
                // line 187
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v3 = ($context["label_attr"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["tooltip"] ?? null) : null), "html", null, true);
                yield "\"></i>
    ";
            }
            // line 189
            yield "
    ";
            // line 190
            if ((array_key_exists("label_help_box", $context) || CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "popover", [], "array", true, true, false, 190))) {
                // line 191
                yield "      ";
                $context["content"] = ((array_key_exists("label_help_box", $context)) ? (($context["label_help_box"] ?? null)) : ((($_v4 = ($context["label_attr"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["popover"] ?? null) : null)));
                // line 192
                yield "      ";
                $context["placement"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "popover_placement", [], "array", true, true, false, 192)) ? ((($_v5 = ($context["label_attr"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["popover_placement"] ?? null) : null)) : ("top"));
                // line 193
                yield "      ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@Common/HelpBox/helpbox.html.twig", ["placement" => ($context["placement"] ?? null), "content" => ($context["content"] ?? null)]);
                yield "
    ";
            }
            // line 195
            yield from             $this->unwrap()->yieldBlock("form_disabling_switch", $context, $blocks);
            // line 196
            yield "</";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["labelTag"] ?? null), "html", null, true);
            yield ">";
        }
        // line 198
        if (array_key_exists("label_subtitle", $context)) {
            // line 199
            yield "    <p class=\"subtitle\">";
            yield ($context["label_subtitle"] ?? null);
            yield "</p>
  ";
        }
        yield from [];
    }

    // line 205
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_textarea_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 206
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 206)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 206), "")) : ("")) . " form-control"))]);
        // line 207
        yield from $this->yieldParentBlock("textarea_widget", $context, $blocks);
        // line 208
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@PrestaShop/Admin/TwigTemplateForm/form_max_length.html.twig", ["attr" => ($context["attr"] ?? null)]);
        yield "
  ";
        // line 209
        yield from         $this->unwrap()->yieldBlock("form_help", $context, $blocks);
        yield from [];
    }

    // line 212
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_money_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 213
        yield "<div class=\"input-group money-type\">
    ";
        // line 214
        $context["prepend"] = ("{{" == Twig\Extension\CoreExtension::slice($this->env->getCharset(), ($context["money_pattern"] ?? null), 0, 2));
        // line 215
        yield "    ";
        if ( !($context["prepend"] ?? null)) {
            // line 216
            yield "      <div class=\"input-group-prepend\">
        <span class=\"input-group-text\">";
            // line 217
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(($context["money_pattern"] ?? null), ["{{ widget }}" => ""]), "html", null, true);
            yield "</span>
      </div>
    ";
        }
        // line 220
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        // line 221
        if (($context["prepend"] ?? null)) {
            // line 222
            yield "      <div class=\"input-group-append\">
        <span class=\"input-group-text\">";
            // line 223
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(($context["money_pattern"] ?? null), ["{{ widget }}" => ""]), "html", null, true);
            yield "</span>
      </div>
    ";
        }
        // line 226
        yield "  </div>

  ";
        // line 228
        yield from         $this->unwrap()->yieldBlock("form_help", $context, $blocks);
        yield from [];
    }

    // line 231
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_percent_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 232
        yield "<div class=\"input-group\">";
        // line 233
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        // line 234
        yield "<div class=\"input-group-append\">
      <span class=\"input-group-text\">%</span>
    </div>
  </div>";
        yield from [];
    }

    // line 240
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_datetime_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 241
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 242
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 244
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 244)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 244), "")) : ("")) . " form-inline"))]);
            // line 245
            yield "<div ";
            yield from             $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
            yield ">";
            // line 246
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "date", [], "any", false, false, false, 246), 'errors');
            // line 247
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "time", [], "any", false, false, false, 247), 'errors');
            // line 248
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "date", [], "any", false, false, false, 248), 'widget', ["datetime" => true]);
            // line 249
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "time", [], "any", false, false, false, 249), 'widget', ["datetime" => true]);
            // line 250
            yield "</div>";
        }
        yield from [];
    }

    // line 254
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_url_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 255
        $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default(($context["type"] ?? null), "url")) : ("url"));
        // line 256
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        yield "
  ";
        // line 257
        yield from         $this->unwrap()->yieldBlock("form_help", $context, $blocks);
        yield from [];
    }

    // line 260
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_date_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 261
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 262
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 264
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 264)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 264), "")) : ("")) . " form-inline"))]);
            // line 265
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? null))) {
                // line 266
                yield "<div ";
                yield from                 $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
                yield ">";
            }
            // line 268
            yield Twig\Extension\CoreExtension::replace(($context["date_pattern"] ?? null), ["{{ year }}" =>             // line 269
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "year", [], "any", false, false, false, 269), 'widget'), "{{ month }}" =>             // line 270
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "month", [], "any", false, false, false, 270), 'widget'), "{{ day }}" =>             // line 271
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "day", [], "any", false, false, false, 271), 'widget')]);
            // line 273
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? null))) {
                // line 274
                yield "</div>";
            }
        }
        yield from [];
    }

    // line 279
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_time_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 280
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 281
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 283
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 283)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 283), "")) : ("")) . " form-inline"))]);
            // line 284
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? null)))) {
                // line 285
                yield "<div ";
                yield from                 $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
                yield ">";
            }
            // line 287
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "hour", [], "any", false, false, false, 287), 'widget');
            yield ":";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "minute", [], "any", false, false, false, 287), 'widget');
            if (($context["with_seconds"] ?? null)) {
                yield ":";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "second", [], "any", false, false, false, 287), 'widget');
            }
            // line 288
            yield "    ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? null)))) {
                // line 289
                yield "</div>";
            }
        }
        yield from [];
    }

    // line 294
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_email_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 295
        $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default(($context["type"] ?? null), "email")) : ("email"));
        // line 296
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        yield "
  ";
        // line 297
        yield from         $this->unwrap()->yieldBlock("form_help", $context, $blocks);
        yield from [];
    }

    // line 300
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_button_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 301
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 301)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 301), "btn-default")) : ("btn-default")) . " btn"))]);
        // line 302
        yield from $this->yieldParentBlock("button_widget", $context, $blocks);
        yield from [];
    }

    // line 305
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_icon_button_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 306
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 306)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 306), "btn-default")) : ("btn-default")) . " btn"))]);
        // line 307
        yield "  ";
        if ((($context["button_type"] ?? null) == "link")) {
            // line 308
            yield "    ";
            $context["buttonTag"] = "a";
            // line 309
            yield "    ";
            // line 310
            yield "    ";
            if (((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "disabled", [], "any", true, true, false, 310)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "disabled", [], "any", false, false, false, 310), false)) : (false))) {
                // line 311
                yield "      ";
                $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 311) . " disabled"))]);
                // line 312
                yield "    ";
            }
            // line 313
            yield "  ";
        } else {
            // line 314
            yield "    ";
            $context["buttonTag"] = "button";
            // line 315
            yield "    ";
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["type" => "button"]);
            // line 316
            yield "  ";
        }
        // line 317
        yield "
  <";
        // line 318
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["buttonTag"] ?? null), "html", null, true);
        yield " ";
        yield from         $this->unwrap()->yieldBlock("button_attributes", $context, $blocks);
        yield ">
    <i class=\"material-icons\">";
        // line 319
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["button_icon"] ?? null), "html", null, true);
        yield "</i>
    <span class=\"btn-label\">";
        // line 320
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["label"] ?? null), "html", null, true);
        yield "</span>
  </";
        // line 321
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["buttonTag"] ?? null), "html", null, true);
        yield ">";
        yield from [];
    }

    // line 324
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_choice_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 325
        yield from $this->yieldParentBlock("choice_widget", $context, $blocks);
        // line 326
        yield from         $this->unwrap()->yieldBlock("form_help", $context, $blocks);
        yield "
";
        yield from [];
    }

    // line 329
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_choice_widget_collapsed(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 330
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 330)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 330), "")) : ("")) . " custom-select"))]);
        // line 331
        yield from $this->yieldParentBlock("choice_widget_collapsed", $context, $blocks);
        yield from [];
    }

    // line 334
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_choice_widget_expanded(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 335
        if (CoreExtension::inFilter("-inline", ((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 335)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 335), "")) : ("")))) {
            // line 336
            yield "<div class=\"control-group\">";
            // line 337
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 338
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["parent_label_class" => ((CoreExtension::getAttribute($this->env, $this->source,                 // line 339
($context["label_attr"] ?? null), "class", [], "any", true, true, false, 339)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 339), "")) : ("")), "translation_domain" =>                 // line 340
($context["choice_translation_domain"] ?? null), "valid" =>                 // line 341
($context["valid"] ?? null)]);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 344
            yield "</div>";
        } else {
            // line 346
            yield "<div ";
            yield from             $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
            yield ">";
            // line 347
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 348
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["parent_label_class" => ((CoreExtension::getAttribute($this->env, $this->source,                 // line 349
($context["label_attr"] ?? null), "class", [], "any", true, true, false, 349)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 349), "")) : ("")), "translation_domain" =>                 // line 350
($context["choice_translation_domain"] ?? null), "valid" =>                 // line 351
($context["valid"] ?? null)]);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 354
            yield "</div>";
        }
        yield from [];
    }

    // line 358
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_choice_tree_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 359
        yield "<div ";
        yield from         $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
        yield " class=\"category-tree-overflow\">
    <ul class=\"category-tree\">
      <li class=\"form-control-label text-right main-category\">";
        // line 361
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Main category", [], "Admin.Catalog.Feature"), "html", null, true);
        yield "</li>";
        // line 362
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["choices"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 363
            yield "        ";
            yield from             $this->unwrap()->yieldBlock("choice_tree_item_widget", $context, $blocks);
            yield "
      ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 365
        yield "</ul>
  </div>";
        yield from [];
    }

    // line 369
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_choice_tree_item_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 370
        yield "<li>
    ";
        // line 371
        $context["checked"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 371), "submitted_values", [], "any", true, true, false, 371) && CoreExtension::getAttribute($this->env, $this->source, ($context["submitted_values"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["child"] ?? null), "id_category", [], "any", false, false, false, 371), [], "array", true, true, false, 371))) ? ("checked=\"checked\"") : (""));
        // line 372
        yield "    ";
        if (($context["multiple"] ?? null)) {
            // line 373
            yield "<div class=\"checkbox\">
        <label>
          <input type=\"checkbox\" name=\"";
            // line 375
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 375), "full_name", [], "any", false, false, false, 375), "html", null, true);
            yield "[tree][]\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["child"] ?? null), "id_category", [], "any", false, false, false, 375), "html", null, true);
            yield "\" class=\"category\" ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["checked"] ?? null), "html", null, true);
            yield ">
          ";
            // line 376
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["child"] ?? null), "active", [], "any", true, true, false, 376) && (CoreExtension::getAttribute($this->env, $this->source, ($context["child"] ?? null), "active", [], "any", false, false, false, 376) == 0))) {
                // line 377
                yield "            <i>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["child"] ?? null), "name", [], "any", false, false, false, 377), "html", null, true);
                yield "</i>";
            } else {
                // line 379
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["child"] ?? null), "name", [], "any", false, false, false, 379), "html", null, true);
                yield "
          ";
            }
            // line 381
            yield "          ";
            if (array_key_exists("defaultCategory", $context)) {
                // line 382
                yield "            <input type=\"radio\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["child"] ?? null), "id_category", [], "any", false, false, false, 382), "html", null, true);
                yield "\" name=\"ignore\" class=\"default-category\" />
          ";
            }
            // line 384
            yield "        </label>
      </div>";
        } else {
            // line 387
            yield "<div class=\"radio\">
        <label>
          <input type=\"radio\" name=\"form[";
            // line 389
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 389), "id", [], "any", false, false, false, 389), "html", null, true);
            yield "][tree]\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["child"] ?? null), "id_category", [], "any", false, false, false, 389), "html", null, true);
            yield "\" ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["checked"] ?? null), "html", null, true);
            yield " class=\"category\">
          ";
            // line 390
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["child"] ?? null), "name", [], "any", false, false, false, 390), "html", null, true);
            yield "
          ";
            // line 391
            if (array_key_exists("defaultCategory", $context)) {
                // line 392
                yield "            <input type=\"radio\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["child"] ?? null), "id_category", [], "any", false, false, false, 392), "html", null, true);
                yield "\" name=\"ignore\" class=\"default-category\" />
          ";
            }
            // line 394
            yield "        </label>
      </div>";
        }
        // line 397
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["child"] ?? null), "children", [], "any", true, true, false, 397)) {
            // line 398
            yield "      <ul>
        ";
            // line 399
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["child"] ?? null), "children", [], "any", false, false, false, 399));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 400
                yield "          ";
                $context["child"] = $context["item"];
                // line 401
                yield "          ";
                yield from                 $this->unwrap()->yieldBlock("choice_tree_item_widget", $context, $blocks);
                yield "
        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 403
            yield "</ul>
    ";
        }
        // line 405
        yield "  </li>";
        yield from [];
    }

    // line 408
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_translatefields_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 409
        yield "  ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        yield "
  <div class=\"translations tabbable\" id=\"";
        // line 410
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 410), "id", [], "any", false, false, false, 410), "html", null, true);
        yield "\" tabindex=\"1\">
    ";
        // line 411
        if (((($context["hideTabs"] ?? null) == false) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["form"] ?? null)) > 1))) {
            // line 412
            yield "      <ul class=\"translationsLocales nav nav-pills\">
        ";
            // line 413
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
                // line 414
                yield "          <li class=\"nav-item\">
            <a href=\"#\" data-locale=\"";
                // line 415
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 415), "label", [], "any", false, false, false, 415), "html", null, true);
                yield "\" class=\"";
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["defaultLocale"] ?? null), "id_lang", [], "any", false, false, false, 415) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 415), "name", [], "any", false, false, false, 415))) {
                    yield "active";
                }
                yield " nav-link\" data-toggle=\"tab\" data-target=\".translationsFields-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 415), "id", [], "any", false, false, false, 415), "html", null, true);
                yield "\">
              ";
                // line 416
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 416), "label", [], "any", false, false, false, 416)), "html", null, true);
                yield "
            </a>
          </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['translationsFields'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 420
            yield "      </ul>
    ";
        }
        // line 422
        yield "
    <div class=\"translationsFields tab-content\">
      ";
        // line 424
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
            // line 425
            yield "        <div data-locale=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 425), "label", [], "any", false, false, false, 425), "html", null, true);
            yield "\" class=\"translationsFields-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 425), "id", [], "any", false, false, false, 425), "html", null, true);
            yield " tab-pane translation-field ";
            if (((($context["hideTabs"] ?? null) == false) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["form"] ?? null)) > 1))) {
                yield "panel panel-default";
            }
            yield " ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["defaultLocale"] ?? null), "id_lang", [], "any", false, false, false, 425) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 425), "name", [], "any", false, false, false, 425))) {
                yield "show active";
            }
            yield " ";
            if ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 425), "valid", [], "any", false, false, false, 425)) {
                yield "field-error";
            }
            yield " translation-label-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 425), "label", [], "any", false, false, false, 425), "html", null, true);
            yield "\">
          ";
            // line 426
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translationsFields"], 'errors');
            yield "
          ";
            // line 427
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translationsFields"], 'widget');
            yield "
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['translationsFields'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 430
        yield "    </div>
  </div>
";
        yield from [];
    }

    // line 434
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_translate_fields_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 435
        if (( !array_key_exists("type", $context) || ("file" != ($context["type"] ?? null)))) {
            // line 436
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 436)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 436), "")) : ("")) . " form-control"))]);
        }
        // line 438
        yield from $this->yieldParentBlock("translate_fields_widget", $context, $blocks);
        yield from [];
    }

    // line 441
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_translate_text_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 442
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        yield "
  <div class=\"input-group locale-input-group js-locale-input-group\">
    ";
        // line 444
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["form"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["translateField"]) {
            // line 445
            yield "      ";
            $context["classes"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, true, false, 445), "attr", [], "any", false, true, false, 445), "class", [], "any", true, true, false, 445)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, false, false, 445), "attr", [], "any", false, false, false, 445), "class", [], "any", false, false, false, 445), "")) : ("")) . " js-locale-input");
            // line 446
            yield "      ";
            $context["classes"] = ((($context["classes"] ?? null) . " js-locale-") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, false, false, 446), "label", [], "any", false, false, false, 446));
            // line 447
            yield "
      ";
            // line 448
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["default_locale"] ?? null), "id_lang", [], "any", false, false, false, 448) != CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, false, false, 448), "name", [], "any", false, false, false, 448))) {
                // line 449
                yield "        ";
                $context["classes"] = (($context["classes"] ?? null) . " d-none");
                // line 450
                yield "      ";
            }
            // line 452
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim(($context["classes"] ?? null))]);
            // line 453
            yield from             $this->unwrap()->yieldBlock("form_widget", $context, $blocks);
            yield "
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['translateField'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 455
        yield "
    ";
        // line 456
        if ( !($context["hide_locales"] ?? null)) {
            // line 457
            yield "      <div class=\"dropdown\">
        <button class=\"btn btn-outline-secondary dropdown-toggle js-locale-btn\"
                type=\"button\"
                data-toggle=\"dropdown\"
                aria-haspopup=\"true\"
                aria-expanded=\"false\"
                id=\"";
            // line 463
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 463), "id", [], "any", false, false, false, 463), "html", null, true);
            yield "\"
        >
          ";
            // line 465
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 465), "default_locale", [], "any", false, false, false, 465), "iso_code", [], "any", false, false, false, 465)), "html", null, true);
            yield "
        </button>

        <div class=\"dropdown-menu dropdown-menu-right locale-dropdown-menu\" aria-labelledby=\"";
            // line 468
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 468), "id", [], "any", false, false, false, 468), "html", null, true);
            yield "\">
          ";
            // line 469
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["locales"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                // line 470
                yield "            <span class=\"dropdown-item js-locale-item\" data-locale=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["locale"], "iso_code", [], "any", false, false, false, 470), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["locale"], "name", [], "any", false, false, false, 470), "html", null, true);
                yield "</span>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['locale'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 472
            yield "        </div>
      </div>
    ";
        }
        // line 475
        yield "  </div>";
        yield from [];
    }

    // line 478
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_translate_textarea_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 479
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        yield "
  <div class=\"input-group locale-input-group js-locale-input-group\">
    ";
        // line 481
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["textarea"]) {
            // line 482
            yield "      ";
            $context["classes"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["textarea"], "vars", [], "any", false, true, false, 482), "attr", [], "any", false, true, false, 482), "class", [], "any", true, true, false, 482)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["textarea"], "vars", [], "any", false, false, false, 482), "attr", [], "any", false, false, false, 482), "class", [], "any", false, false, false, 482), "")) : ("")) . " js-locale-input");
            // line 483
            yield "      ";
            $context["classes"] = ((($context["classes"] ?? null) . " js-locale-") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["textarea"], "vars", [], "any", false, false, false, 483), "label", [], "any", false, false, false, 483));
            // line 484
            yield "
      ";
            // line 485
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["default_locale"] ?? null), "id_lang", [], "any", false, false, false, 485) != CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["textarea"], "vars", [], "any", false, false, false, 485), "name", [], "any", false, false, false, 485))) {
                // line 486
                yield "        ";
                $context["classes"] = (($context["classes"] ?? null) . " d-none");
                // line 487
                yield "      ";
            }
            // line 488
            yield "
      <div class=\"";
            // line 489
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["classes"] ?? null), "html", null, true);
            yield "\">
        ";
            // line 490
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["textarea"], 'widget', ["attr" => ["class" => Twig\Extension\CoreExtension::trim(($context["classes"] ?? null))]]);
            yield "
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['textarea'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 493
        yield "
    ";
        // line 494
        if (($context["show_locale_select"] ?? null)) {
            // line 495
            yield "      <div class=\"dropdown\">
        <button class=\"btn btn-outline-secondary dropdown-toggle js-locale-btn\"
                type=\"button\"
                data-toggle=\"dropdown\"
                aria-haspopup=\"true\"
                aria-expanded=\"false\"
                id=\"";
            // line 501
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 501), "id", [], "any", false, false, false, 501), "html", null, true);
            yield "\"
        >
          ";
            // line 503
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 503), "default_locale", [], "any", false, false, false, 503), "iso_code", [], "any", false, false, false, 503)), "html", null, true);
            yield "
        </button>

        <div class=\"dropdown-menu dropdown-menu-right locale-dropdown-menu\" aria-labelledby=\"";
            // line 506
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 506), "id", [], "any", false, false, false, 506), "html", null, true);
            yield "\">
          ";
            // line 507
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["locales"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                // line 508
                yield "            <span class=\"dropdown-item js-locale-item\"
                  data-locale=\"";
                // line 509
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["locale"], "iso_code", [], "any", false, false, false, 509), "html", null, true);
                yield "\"
            >
              ";
                // line 511
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["locale"], "name", [], "any", false, false, false, 511), "html", null, true);
                yield "
            </span>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['locale'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 514
            yield "        </div>
      </div>
    ";
        }
        // line 517
        yield "  </div>";
        yield from [];
    }

    // line 520
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_date_picker_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 521
        yield "  ";
        $_v6 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 522
            yield "    ";
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 522)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 522), "")) : ("")) . " form-control datepicker"))]);
            // line 523
            yield "    <div class=\"input-group datepicker\">
      <input type=\"text\" data-format=\"";
            // line 524
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["date_format"] ?? null), "html", null, true);
            yield "\" ";
            yield from             $this->unwrap()->yieldBlock("widget_attributes", $context, $blocks);
            yield " ";
            if ( !Twig\Extension\CoreExtension::testEmpty(($context["value"] ?? null))) {
                yield "value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
                yield "\" ";
            }
            yield "/>
      <div class=\"input-group-append\">
        <div class=\"input-group-text\">
          <i class=\"material-icons\">date_range</i>
        </div>
      </div>
    </div>
    ";
            // line 531
            yield from             $this->unwrap()->yieldBlock("form_help", $context, $blocks);
            yield "
  ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 521
        yield Twig\Extension\CoreExtension::spaceless($_v6);
        yield from [];
    }

    // line 535
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_date_range_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 536
        yield "  ";
        $_v7 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 537
            yield "    <div class=\"input-group date-range row\">
      <div class=\"col col-md-4\">
        ";
            // line 539
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "from", [], "any", false, false, false, 539), 'row');
            yield "
      </div>
      <div class=\"col col-md-4\">
        ";
            // line 542
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "to", [], "any", false, false, false, 542), 'row');
            yield "
        ";
            // line 543
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "unlimited", [], "any", true, true, false, 543)) {
                // line 544
                yield "          ";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "unlimited", [], "any", false, false, false, 544), 'widget');
                yield "
          ";
                // line 545
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "unlimited", [], "any", false, false, false, 545), 'errors');
                yield "
        ";
            }
            // line 547
            yield "      </div>
    </div>
  ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 536
        yield Twig\Extension\CoreExtension::spaceless($_v7);
        yield from [];
    }

    // line 552
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_search_and_reset_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 553
        yield "  ";
        $_v8 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 554
            yield "    <button type=\"submit\"
            class=\"btn btn-primary grid-search-button\"
            title=\"";
            // line 556
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search", [], "Admin.Actions"), "html", null, true);
            yield "\"
            name=\"";
            // line 557
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["full_name"] ?? null), "html", null, true);
            yield "[search]\"
    >
      <i class=\"material-icons\">search</i>
      ";
            // line 560
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search", [], "Admin.Actions"), "html", null, true);
            yield "
    </button>
    ";
            // line 562
            if (($context["show_reset_button"] ?? null)) {
                // line 563
                yield "      <div class=\"js-grid-reset-button\">
        <button type=\"reset\"
                name=\"";
                // line 565
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["full_name"] ?? null), "html", null, true);
                yield "[reset]\"
                class=\"btn btn-link js-reset-search btn d-block grid-reset-button\"
                data-url=\"";
                // line 567
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["reset_url"] ?? null), "html", null, true);
                yield "\"
                data-redirect=\"";
                // line 568
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["redirect_url"] ?? null), "html", null, true);
                yield "\"
        >
          <i class=\"material-icons\">clear</i>
          ";
                // line 571
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reset", [], "Admin.Actions"), "html", null, true);
                yield "
        </button>
      </div>
    ";
            }
            // line 575
            yield "  ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 553
        yield Twig\Extension\CoreExtension::spaceless($_v8);
        yield from [];
    }

    // line 578
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_switch_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 579
        yield "  ";
        $_v9 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 580
            yield "  ";
            $context["rowAttributes"] = ((array_key_exists("row_attr", $context)) ? (Twig\Extension\CoreExtension::default(($context["row_attr"] ?? null), [])) : ([]));
            // line 581
            yield "  <div class=\"input-group ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["rowAttributes"] ?? null), "class", [], "any", true, true, false, 581)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["rowAttributes"] ?? null), "class", [], "any", false, false, false, 581), "")) : ("")), "html", null, true);
            yield "\" ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["rowAttributes"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["rowAttr"]) {
                yield " ";
                if (($context["key"] != "class")) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                    yield "=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["rowAttr"], "html", null, true);
                    yield "\"";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['rowAttr'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield ">
    <span class=\"ps-switch\" id=\"";
            // line 582
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 582), "id", [], "any", false, false, false, 582), "html", null, true);
            yield "\">
        ";
            // line 583
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["choices"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
                // line 584
                yield "          ";
                $context["inputId"] = ((($context["id"] ?? null) . "_") . CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "value", [], "any", false, false, false, 584));
                // line 585
                yield "          <input id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["inputId"] ?? null), "html", null, true);
                yield "\"
            ";
                // line 586
                yield from                 $this->unwrap()->yieldBlock("attributes", $context, $blocks);
                yield "
            name=\"";
                // line 587
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["full_name"] ?? null), "html", null, true);
                yield "\"
            value=\"";
                // line 588
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "value", [], "any", false, false, false, 588), "html", null, true);
                yield "\"
            ";
                // line 589
                if (Symfony\Bridge\Twig\Extension\twig_is_selected_choice($context["choice"], ($context["value"] ?? null))) {
                    yield "checked=\"\"";
                }
                // line 590
                yield "            ";
                if (($context["disabled"] ?? null)) {
                    yield "disabled=\"\"";
                }
                // line 591
                yield "            type=\"radio\"
          >
          ";
                // line 593
                if (($context["show_choices"] ?? null)) {
                    yield "<label for=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["inputId"] ?? null), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "label", [], "any", false, false, false, 593), [], ($context["choice_translation_domain"] ?? null)), "html", null, true);
                    yield "</label>";
                }
                // line 594
                yield "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 595
            yield "        <span class=\"slide-button\"></span>
    </span>
  </div>
  ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 579
        yield Twig\Extension\CoreExtension::spaceless($_v9);
        // line 599
        yield from         $this->unwrap()->yieldBlock("form_help", $context, $blocks);
        yield from [];
    }

    // line 602
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_row_attributes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 603
        $context["rowAttributes"] = ((array_key_exists("row_attr", $context)) ? (Twig\Extension\CoreExtension::default(($context["row_attr"] ?? null), [])) : ([]));
        // line 604
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["rowAttributes"] ?? null));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 605
            yield " ";
            // line 606
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrname"], "html", null, true);
            yield "=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrvalue"], "html", null, true);
            yield "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['attrname'], $context['attrvalue'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield from [];
    }

    // line 610
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block__form_step6_attachments_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 611
        yield "  <div class=\"js-options-no-attachments ";
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["form"] ?? null)) > 0)) ? ("hide") : (""));
        yield "\">
    <small>";
        // line 612
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("There is no attachment yet.", [], "Admin.Catalog.Notification"), "html", null, true);
        yield "</small>
  </div>
  <div id=\"product-attachments\" class=\"panel panel-default\">
    <div class=\"panel-body js-options-with-attachments ";
        // line 615
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["form"] ?? null)) == 0)) ? ("hide") : (""));
        yield "\">
      <div>
        <table id=\"product-attachment-file\" class=\"table\">
          <thead class=\"thead-default\">
          <tr>
            <th class=\"col-md-3\">";
        // line 620
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Title", [], "Admin.Global"), "html", null, true);
        yield "</th>
            <th class=\"col-md-6\">";
        // line 621
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("File name", [], "Admin.Global"), "html", null, true);
        yield "</th>
            <th class=\"col-md-2\">";
        // line 622
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Type", [], "Admin.Catalog.Feature"), "html", null, true);
        yield "</th>
          </tr>
          </thead>
          <tbody>";
        // line 626
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["form"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 627
            yield "            <tr>
              <td class=\"col-md-3\">";
            // line 628
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
            yield "</td>
              <td class=\"col-md-6 file-name\"><span>";
            // line 629
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v10 = (($_v11 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 629), "attr", [], "any", false, false, false, 629), "data", [], "any", false, false, false, 629)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 629)] ?? null) : null)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10["file_name"] ?? null) : null), "html", null, true);
            yield "</span></td>
              <td class=\"col-md-2\">";
            // line 630
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v12 = (($_v13 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 630), "attr", [], "any", false, false, false, 630), "data", [], "any", false, false, false, 630)) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 630)] ?? null) : null)) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12["mime"] ?? null) : null), "html", null, true);
            yield "</td>
            </tr>
          ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 633
        yield "</tbody>
        </table>
      </div>
    </div>
  </div>
";
        yield from [];
    }

    // line 642
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_choice_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 644
        $context["label_attr"] = Twig\Extension\CoreExtension::merge(($context["label_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::replace(((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 644)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 644), "")) : ("")), ["checkbox-inline" => "", "radio-inline" => ""]))]);
        // line 645
        yield from         $this->unwrap()->yieldBlock("form_label", $context, $blocks);
        yield from [];
    }

    // line 648
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_checkbox_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 649
        yield from         $this->unwrap()->yieldBlock("checkbox_radio_label", $context, $blocks);
        yield from [];
    }

    // line 652
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_radio_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 653
        yield from         $this->unwrap()->yieldBlock("checkbox_radio_label", $context, $blocks);
        yield from [];
    }

    // line 656
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_checkbox_radio_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 657
        yield "  ";
        // line 658
        yield "  ";
        if (array_key_exists("widget", $context)) {
            // line 659
            yield "    ";
            if (($context["required"] ?? null)) {
                // line 660
                yield "      ";
                $context["label_attr"] = Twig\Extension\CoreExtension::merge(($context["label_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 660)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 660), "")) : ("")) . " required"))]);
                // line 661
                yield "    ";
            }
            // line 662
            yield "    ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 663
                yield "      ";
                $context["label_attr"] = Twig\Extension\CoreExtension::merge(($context["label_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim(((((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 663)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 663), "")) : ("")) . " ") . ($context["parent_label_class"] ?? null)))]);
                // line 664
                yield "    ";
            }
            // line 665
            yield "    ";
            if (( !(($context["label"] ?? null) === false) && Twig\Extension\CoreExtension::testEmpty(($context["label"] ?? null)))) {
                // line 666
                yield "      ";
                $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? null));
                // line 667
                yield "    ";
            }
            // line 668
            yield "
    ";
            // line 669
            if (((($_v14 = ($context["block_prefixes"] ?? null)) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14[2] ?? null) : null) == "radio")) {
                // line 670
                yield "      <label class=\"form-check-label\"";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["label_attr"] ?? null));
                foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                    yield " ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrname"], "html", null, true);
                    yield "=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrvalue"], "html", null, true);
                    yield "\"";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['attrname'], $context['attrvalue'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                yield ">";
                // line 671
                yield ($context["widget"] ?? null);
                // line 673
                yield "<i class=\"form-check-round\"></i>";
                // line 675
                yield (( !(($context["label"] ?? null) === false)) ? ((((($context["translation_domain"] ?? null) === false)) ? (($context["label"] ?? null)) : (($context["label"] ?? null)))) : (""));
                // line 676
                yield "</label>
    ";
            } else {
                // line 678
                yield "      <div class=\"md-checkbox md-checkbox-inline\">
        <label";
                // line 679
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["label_attr"] ?? null));
                foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                    yield " ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrname"], "html", null, true);
                    yield "=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrvalue"], "html", null, true);
                    yield "\"";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['attrname'], $context['attrvalue'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                yield ">";
                // line 680
                yield ($context["widget"] ?? null);
                // line 681
                yield "<i class=\"md-checkbox-control\"></i>";
                // line 682
                yield (( !(($context["label"] ?? null) === false)) ? ((((($context["translation_domain"] ?? null) === false)) ? (($context["label"] ?? null)) : (($context["label"] ?? null)))) : (""));
                // line 683
                yield "</label>
      </div>
    ";
            }
            // line 686
            yield "  ";
        }
        yield from [];
    }

    // line 689
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_radio_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 690
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["parent_label_class"] ?? null), ((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 690)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 690), "")) : ("")))) : (((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 690)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 690), "")) : (""))));
        // line 691
        if (CoreExtension::inFilter("radio-custom", ($context["parent_label_class"] ?? null))) {
            // line 692
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 692)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 692), "")) : ("")) . " custom-control-input"))]);
            // line 693
            yield "<div class=\"custom-control custom-radio";
            yield ((CoreExtension::inFilter("radio-inline", ($context["parent_label_class"] ?? null))) ? (" custom-control-inline") : (""));
            yield "\">";
            // line 694
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', ["widget" =>             $this->unwrap()->renderBlock("base_radio_widget", $context, $blocks)]);
            // line 695
            yield "</div>";
        } else {
            // line 697
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 697)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 697), "")) : ("")) . " form-check-input"))]);
            // line 698
            yield "<div class=\"form-check form-check-radio form-radio";
            yield ((CoreExtension::inFilter("radio-inline", ($context["parent_label_class"] ?? null))) ? (" form-check-inline") : (""));
            yield "\">";
            // line 699
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', ["widget" =>             $this->unwrap()->renderBlock("base_radio_widget", $context, $blocks)]);
            // line 700
            yield "</div>";
        }
        yield from [];
    }

    // line 704
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_checkbox_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 705
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["parent_label_class"] ?? null), ((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 705)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 705), "")) : ("")))) : (((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 705)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 705), "")) : (""))));
        // line 706
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 706)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 706), "")) : ("")) . " form-check-input"))]);
        // line 707
        yield "<div class=\"form-check form-check-radio form-checkbox";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "container_class", [], "any", true, true, false, 707)) {
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "container_class", [], "any", false, false, false, 707), "html", null, true);
        }
        yield "\">";
        // line 708
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', ["widget" =>         $this->unwrap()->renderBlock("base_checkbox_widget", $context, $blocks)]);
        // line 709
        yield "</div>";
        yield from [];
    }

    // line 714
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_errors(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 715
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "fieldError", [], "array", true, true, false, 715) && ((($_v15 = ($context["attr"] ?? null)) && is_array($_v15) || $_v15 instanceof ArrayAccess ? ($_v15["fieldError"] ?? null) : null) == true))) {
            // line 716
            yield "    ";
            yield from             $this->unwrap()->yieldBlock("form_errors_field", $context, $blocks);
            yield "
  ";
        } else {
            // line 718
            yield "    ";
            yield from             $this->unwrap()->yieldBlock("form_errors_other", $context, $blocks);
            yield "
  ";
        }
        yield from [];
    }

    // line 722
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_errors_field(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 723
        yield "  ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["errors"] ?? null)) > 0)) {
            // line 725
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["errors"] ?? null)) > 1)) {
                // line 727
                $context["popoverContainer"] = ("popover-error-container-" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 727), "id", [], "any", false, false, false, 727));
                // line 728
                yield "      <div class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["popoverContainer"] ?? null), "html", null, true);
                yield "\"></div>

      ";
                // line 730
                $context["popoverErrorContent"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 731
                    yield "        <div class=\"popover-error-list\">
          <ul>";
                    // line 733
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(($context["errors"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                        // line 734
                        yield "<li class=\"text-danger\"> ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "messageTemplate", [], "any", false, false, false, 734), CoreExtension::getAttribute($this->env, $this->source, $context["error"], "messageParameters", [], "any", false, false, false, 734), "form_error"), "html", null, true);
                        yield "
              </li>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 737
                    yield "          </ul>
        </div>
      ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 740
                yield "
      <template class=\"js-popover-error-content\" data-id=\"";
                // line 741
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 741), "id", [], "any", false, false, false, 741), "html", null, true);
                yield "\">
        ";
                // line 742
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["popoverErrorContent"] ?? null), "html", null, true);
                yield "
      </template>

      ";
                // line 745
                $context["errorPopover"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 746
                    yield "        <span
          data-toggle=\"form-popover-error\"
          data-id=\"";
                    // line 748
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 748), "id", [], "any", false, false, false, 748), "html", null, true);
                    yield "\"
          data-placement=\"bottom\"
          data-template='<div class=\"popover form-popover-error\" role=\"tooltip\"><h3 class=\"popover-header\"></h3><div class=\"popover-body\"></div></div>'
          data-trigger=\"hover\"
          data-container=\".";
                    // line 752
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["popoverContainer"] ?? null), "html", null, true);
                    yield "\"
        >
          <i class=\"material-icons form-error-icon\">error_outline</i> <u> ";
                    // line 754
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%count% errors", ["%count%" => Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["errors"] ?? null))], "Admin.Global"), "html", null, true);
                    yield "</u>
        </span>
      ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 757
                yield "
      <div class=\"invalid-feedback-container\">
        <div class=\"text-danger\">
          ";
                // line 760
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["errorPopover"] ?? null), "html", null, true);
                yield "
        </div>
      </div>

      ";
            } else {
                // line 766
                yield "<div class=\"d-inline-block align-baseline text-danger mt-1\" role=\"alert\">
        <i class=\"material-icons form-error-icon\">error_outline</i>

        ";
                // line 769
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["errors"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 770
                    yield "          <span>
            ";
                    // line 771
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "messageTemplate", [], "any", false, false, false, 771), CoreExtension::getAttribute($this->env, $this->source, $context["error"], "messageParameters", [], "any", false, false, false, 771), "form_error"), "html", null, true);
                    yield "
          </span>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 774
                yield "</div>";
            }
        }
        yield from [];
    }

    // line 779
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_errors_other(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 780
        yield "  ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["errors"] ?? null)) > 0)) {
            // line 781
            yield "<div class=\"alert alert-danger d-print-none\" role=\"alert\">
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
        <span aria-hidden=\"true\"><i class=\"material-icons\">close</i></span>
      </button>
      <div class=\"alert-text\">
        ";
            // line 786
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 787
                yield "            <p> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "messageTemplate", [], "any", false, false, false, 787), CoreExtension::getAttribute($this->env, $this->source, $context["error"], "messageParameters", [], "any", false, false, false, 787), "form_error"), "html", null, true);
                yield "
            </p>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 790
            yield "</div>
    </div>
  ";
        }
        yield from [];
    }

    // line 797
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_material_choice_table_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 798
        yield "  ";
        $_v16 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 799
            yield "    <div class=\"choice-table\">
      <table class=\"table table-bordered mb-0\">
        <thead>
        <tr>
          <th class=\"checkbox\">
            <div class=\"md-checkbox\">
              <label>
                <input
                  type=\"checkbox\"
                  class=\"js-choice-table-select-all\"
                  ";
            // line 809
            if (($context["isCheckSelectAll"] ?? null)) {
                // line 810
                yield "                    checked
                  ";
            }
            // line 812
            yield "                >
                <i class=\"md-checkbox-control\"></i>
                ";
            // line 814
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Select all", [], "Admin.Actions"), "html", null, true);
            yield " ";
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 814), "displayTotalItems", [], "any", false, false, false, 814)) {
                yield " (";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["form"] ?? null)), "html", null, true);
                yield ") ";
            }
            // line 815
            yield "              </label>
            </div>
          </th>
        </tr>
        </thead>
        <tbody>
        ";
            // line 821
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 822
                yield "          <tr>
            <td>
              ";
                // line 824
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["material_design" => true]);
                yield "
            </td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 828
            yield "        </tbody>
      </table>
    </div>
  ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 798
        yield Twig\Extension\CoreExtension::spaceless($_v16);
        // line 832
        yield "  ";
        yield from         $this->unwrap()->yieldBlock("form_help", $context, $blocks);
        yield "
";
        yield from [];
    }

    // line 835
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_material_multiple_choice_table_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 836
        yield "  ";
        $_v17 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 837
            yield "    <div class=\"choice-table";
            if (($context["headers_fixed"] ?? null)) {
                yield "-headers-fixed";
            }
            yield " table-responsive\">
      <table class=\"table\">
        <thead>
        <tr>
          <th>";
            // line 841
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["table_label"] ?? null), "html", null, true);
            yield "</th>
          ";
            // line 842
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["form"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["child_choice"]) {
                // line 843
                yield "            <th class=\"text-center\">
              ";
                // line 844
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child_choice"], "vars", [], "any", false, false, false, 844), "multiple", [], "any", false, false, false, 844) && !CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child_choice"], "vars", [], "any", false, false, false, 844), "name", [], "any", false, false, false, 844), ($context["headers_to_disable"] ?? null)))) {
                    // line 845
                    yield "                <a href=\"#\"
                   class=\"js-multiple-choice-table-select-column\"
                   data-column-num=\"";
                    // line 847
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 847) + 1), "html", null, true);
                    yield "\"
                   data-column-checked=\"false\"
                >
                  ";
                    // line 850
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child_choice"], "vars", [], "any", false, false, false, 850), "label", [], "any", false, false, false, 850), "html", null, true);
                    yield "
                </a>
              ";
                } else {
                    // line 853
                    yield "                ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child_choice"], "vars", [], "any", false, false, false, 853), "label", [], "any", false, false, false, 853), "html", null, true);
                    yield "
              ";
                }
                // line 855
                yield "            </th>
          ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['child_choice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 857
            yield "        </tr>
        </thead>
        <tbody>
        ";
            // line 860
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["choices"] ?? null));
            foreach ($context['_seq'] as $context["choice_name"] => $context["choice_value"]) {
                // line 861
                yield "          <tr>
            <td>
              ";
                // line 863
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["choice_name"], "html", null, true);
                yield "
            </td>
            ";
                // line 865
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["form"] ?? null));
                foreach ($context['_seq'] as $context["child_choice_name"] => $context["child_choice"]) {
                    // line 866
                    yield "              <td class=\"text-center\">
                ";
                    // line 867
                    if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["child_choice_entry_index_mapping"] ?? null), $context["choice_value"], [], "array", false, true, false, 867), $context["child_choice_name"], [], "array", true, true, false, 867)) {
                        // line 868
                        yield "                  ";
                        $context["entry_index"] = (($_v18 = (($_v19 = ($context["child_choice_entry_index_mapping"] ?? null)) && is_array($_v19) || $_v19 instanceof ArrayAccess ? ($_v19[$context["choice_value"]] ?? null) : null)) && is_array($_v18) || $_v18 instanceof ArrayAccess ? ($_v18[$context["child_choice_name"]] ?? null) : null);
                        // line 869
                        yield "
                  ";
                        // line 870
                        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child_choice"], "vars", [], "any", false, false, false, 870), "multiple", [], "any", false, false, false, 870)) {
                            // line 871
                            yield "                    ";
                            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($_v20 = $context["child_choice"]) && is_array($_v20) || $_v20 instanceof ArrayAccess ? ($_v20[($context["entry_index"] ?? null)] ?? null) : null), 'widget', ["material_design" => true]);
                            yield "
                  ";
                        } else {
                            // line 873
                            yield "                    ";
                            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($_v21 = $context["child_choice"]) && is_array($_v21) || $_v21 instanceof ArrayAccess ? ($_v21[($context["entry_index"] ?? null)] ?? null) : null), 'widget');
                            yield "
                  ";
                        }
                        // line 875
                        yield "                ";
                    } else {
                        // line 876
                        yield "                  --
                ";
                    }
                    // line 878
                    yield "              </td>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['child_choice_name'], $context['child_choice'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 880
                yield "          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['choice_name'], $context['choice_value'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 882
            yield "        </tbody>
      </table>
    </div>
  ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 836
        yield Twig\Extension\CoreExtension::spaceless($_v17);
        yield from [];
    }

    // line 889
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_translatable_fields_with_tabs(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 890
        yield "  <div class=\"translations tabbable\" id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 890), "id", [], "any", false, false, false, 890), "html", null, true);
        yield "\" tabindex=\"1\">
    ";
        // line 891
        if (((($context["hide_locales"] ?? null) == false) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["form"] ?? null)) > 1))) {
            // line 892
            yield "      <ul class=\"translationsLocales nav nav-pills\">
        ";
            // line 893
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
                // line 894
                yield "          <li class=\"nav-item\">
            <a href=\"#\" data-locale=\"";
                // line 895
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 895), "label", [], "any", false, false, false, 895), "html", null, true);
                yield "\" class=\"";
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["default_locale"] ?? null), "id_lang", [], "any", false, false, false, 895) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 895), "name", [], "any", false, false, false, 895))) {
                    yield "active";
                }
                yield " nav-link\" data-toggle=\"tab\" data-target=\".translationsFields-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 895), "id", [], "any", false, false, false, 895), "html", null, true);
                yield "\">
              ";
                // line 896
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 896), "label", [], "any", false, false, false, 896)), "html", null, true);
                yield "
            </a>
          </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['translationsFields'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 900
            yield "      </ul>
    ";
        }
        // line 902
        yield "
    <div class=\"translationsFields tab-content\">
      ";
        // line 904
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
            // line 905
            yield "        <div data-locale=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 905), "label", [], "any", false, false, false, 905), "html", null, true);
            yield "\" class=\"translationsFields-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 905), "id", [], "any", false, false, false, 905), "html", null, true);
            yield " tab-pane translation-field ";
            if (((($context["hide_locales"] ?? null) == false) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["form"] ?? null)) > 1))) {
                yield "panel panel-default";
            }
            yield " ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["default_locale"] ?? null), "id_lang", [], "any", false, false, false, 905) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 905), "name", [], "any", false, false, false, 905))) {
                yield "show active";
            }
            yield " ";
            if ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 905), "valid", [], "any", false, false, false, 905)) {
                yield "field-error";
            }
            yield " translation-label-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 905), "label", [], "any", false, false, false, 905), "html", null, true);
            yield "\">
          ";
            // line 906
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translationsFields"], 'widget');
            yield "
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['translationsFields'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 909
        yield "    </div>
  </div>
";
        yield from [];
    }

    // line 913
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_translatable_fields_with_dropdown(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 914
        $context["formClass"] = Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 914), "attr", [], "any", false, true, false, 914), "class", [], "any", true, true, false, 914)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 914), "attr", [], "any", false, false, false, 914), "class", [], "any", false, false, false, 914), "")) : ("")) . " input-group locale-input-group js-locale-input-group d-flex"));
        // line 915
        yield "    <div class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["formClass"] ?? null), "html", null, true);
        yield "\" id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 915), "id", [], "any", false, false, false, 915), "html", null, true);
        yield "\" tabindex=\"1\">
      ";
        // line 916
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["translateField"]) {
            // line 917
            yield "        ";
            $context["classes"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, true, false, 917), "attr", [], "any", false, true, false, 917), "class", [], "any", true, true, false, 917)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, false, false, 917), "attr", [], "any", false, false, false, 917), "class", [], "any", false, false, false, 917), "")) : ("")) . " js-locale-input");
            // line 918
            yield "        ";
            $context["classes"] = ((($context["classes"] ?? null) . " js-locale-") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, false, false, 918), "label", [], "any", false, false, false, 918));
            // line 919
            yield "        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["default_locale"] ?? null), "id_lang", [], "any", false, false, false, 919) != CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, false, false, 919), "name", [], "any", false, false, false, 919))) {
                // line 920
                yield "          ";
                $context["classes"] = (($context["classes"] ?? null) . " d-none");
                // line 921
                yield "        ";
            }
            // line 922
            yield "        <div data-lang-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, false, false, 922), "name", [], "any", false, false, false, 922), "html", null, true);
            yield "\" class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["classes"] ?? null), "html", null, true);
            yield "\" style=\"flex-grow: 1;\">
          ";
            // line 923
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translateField"], 'widget');
            yield "
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['translateField'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 926
        yield "      ";
        if ( !($context["hide_locales"] ?? null)) {
            // line 927
            yield "        <div class=\"dropdown\">
          <button class=\"btn btn-outline-secondary dropdown-toggle js-locale-btn\"
                  type=\"button\"
                  data-toggle=\"dropdown\"
            ";
            // line 931
            if (array_key_exists("change_form_language_url", $context)) {
                // line 932
                yield "              data-change-language-url=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 932), "change_form_language_url", [], "any", false, false, false, 932), "html", null, true);
                yield "\"
            ";
            }
            // line 934
            yield "                  aria-haspopup=\"true\"
                  aria-expanded=\"false\"
                  id=\"";
            // line 936
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 936), "id", [], "any", false, false, false, 936), "html", null, true);
            yield "_dropdown\"
          >
            ";
            // line 938
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 938), "default_locale", [], "any", false, false, false, 938), "iso_code", [], "any", false, false, false, 938)), "html", null, true);
            yield "
          </button>
          <div class=\"dropdown-menu dropdown-menu-right locale-dropdown-menu\" aria-labelledby=\"";
            // line 940
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 940), "id", [], "any", false, false, false, 940), "html", null, true);
            yield "_dropdown\">
            ";
            // line 941
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["locales"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                // line 942
                yield "              <span class=\"dropdown-item js-locale-item\" data-locale=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["locale"], "iso_code", [], "any", false, false, false, 942), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["locale"], "name", [], "any", false, false, false, 942), "html", null, true);
                yield "</span>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['locale'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 944
            yield "          </div>
        </div>
      ";
        }
        // line 947
        yield "    </div>";
        yield from [];
    }

    // line 950
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_translatable_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 951
        if (($context["use_tabs"] ?? null)) {
            // line 952
            yield "    ";
            yield from             $this->unwrap()->yieldBlock("translatable_fields_with_tabs", $context, $blocks);
            yield "
  ";
        } else {
            // line 954
            yield "    ";
            yield from             $this->unwrap()->yieldBlock("translatable_fields_with_dropdown", $context, $blocks);
            yield "
  ";
        }
        // line 956
        yield "  ";
        yield from         $this->unwrap()->yieldBlock("form_help", $context, $blocks);
        yield from [];
    }

    // line 959
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_birthday_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 960
        yield "  ";
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 961
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 963
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 963)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 963), "")) : ("")) . " form-inline"))]);
            // line 964
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? null))) {
                // line 965
                yield "<div ";
                yield from                 $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
                yield ">";
            }
            // line 967
            yield "
    ";
            // line 968
            $context["yearWidget"] = (("<div class=\"col pl-0 birthday-select-container\">" . $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "year", [], "any", false, false, false, 968), 'widget')) . "</div>");
            // line 969
            yield "    ";
            $context["monthWidget"] = (("<div class=\"col birthday-select-container\">" . $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "month", [], "any", false, false, false, 969), 'widget')) . "</div>");
            // line 970
            yield "    ";
            $context["dayWidget"] = (("<div class=\"col pr-0 birthday-select-container\">" . $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "day", [], "any", false, false, false, 970), 'widget')) . "</div>");
            // line 972
            yield Twig\Extension\CoreExtension::replace(($context["date_pattern"] ?? null), ["{{ year }}" =>             // line 973
($context["yearWidget"] ?? null), "{{ month }}" =>             // line 974
($context["monthWidget"] ?? null), "{{ day }}" =>             // line 975
($context["dayWidget"] ?? null)]);
            // line 978
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? null))) {
                // line 979
                yield "</div>";
            }
        }
        yield from [];
    }

    // line 984
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_file_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 985
        yield "  <style>
    .custom-file-label:after {
      content: \"";
        // line 987
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Browse", [], "Admin.Actions"), "html", null, true);
        yield "\";
    }
  </style>
  <div class=\"custom-file\">
    ";
        // line 991
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source,         // line 992
($context["attr"] ?? null), "class", [], "any", true, true, false, 992)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 992), "")) : ("")) . " custom-file-input")), "data-multiple-files-text" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%count% file(s)", [], "Admin.Global"), "data-locale" => $this->extensions['PrestaShopBundle\Twig\ContextIsoCodeProviderExtension']->getIsoCode()]);
        // line 997
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "disabled", [], "any", true, true, false, 997) && CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "disabled", [], "any", false, false, false, 997))) {
            // line 998
            yield "      ";
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => (CoreExtension::getAttribute($this->env, $this->source,             // line 999
($context["attr"] ?? null), "class", [], "any", false, false, false, 999) . " disabled")]);
            // line 1001
            yield "    ";
        }
        // line 1002
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        // line 1004
        yield "<label class=\"custom-file-label\" for=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1004), "id", [], "any", false, false, false, 1004), "html", null, true);
        yield "\">
      ";
        // line 1005
        $context["attributes"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1005), "attr", [], "any", false, false, false, 1005);
        // line 1006
        yield "      ";
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "placeholder", [], "any", true, true, false, 1006)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "placeholder", [], "any", false, false, false, 1006), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Choose file(s)", [], "Admin.Actions"), "html", null, true)));
        yield "
    </label>
  </div>";
        // line 1009
        yield from         $this->unwrap()->yieldBlock("form_help", $context, $blocks);
        // line 1010
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1010), "download_url", [], "any", false, false, false, 1010)) {
            // line 1011
            yield "    <a target=\"_blank\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1011), "download_url", [], "any", false, false, false, 1011), "html", null, true);
            yield "\">
      ";
            // line 1012
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Download file", [], "Admin.Actions"), "html", null, true);
            yield "
    </a>
  ";
        }
        yield from [];
    }

    // line 1017
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_shop_restriction_checkbox_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1018
        yield "  ";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1018), "attr", [], "any", false, false, false, 1018), "is_allowed_to_display", [], "any", false, false, false, 1018)) {
            // line 1019
            yield "    <div class=\"md-checkbox md-checkbox-inline\">
      <label>
        ";
            // line 1021
            $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default(($context["type"] ?? null), "checkbox")) : ("checkbox"));
            // line 1022
            yield "        <input
          class=\"js-multi-store-restriction-checkbox\"
          type=\"";
            // line 1024
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["type"] ?? null), "html", null, true);
            yield "\"
          ";
            // line 1025
            yield from             $this->unwrap()->yieldBlock("widget_attributes", $context, $blocks);
            yield "
          value=\"";
            // line 1026
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
            yield "\"
        >
        <i class=\"md-checkbox-control\"></i>
      </label>
    </div>
  ";
        }
        yield from [];
    }

    // line 1034
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_generatable_text_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1035
        yield "  <div class=\"input-group\">
    ";
        // line 1036
        if (($context["compound"] ?? null)) {
            // line 1037
            yield from             $this->unwrap()->yieldBlock("form_widget_compound", $context, $blocks);
        } else {
            // line 1039
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        }
        // line 1041
        yield "    <span class=\"input-group-btn ml-1\">
      <button class=\"btn btn-outline-secondary js-generator-btn\"
              type=\"button\"
              data-target-input-id=\"";
        // line 1044
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true);
        yield "\"
              data-generated-value-length=\"";
        // line 1045
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["generated_value_length"] ?? null), "html", null, true);
        yield "\"
      >
        ";
        // line 1047
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Generate", [], "Admin.Actions"), "html", null, true);
        yield "
      </button>
   </span>
  </div>
  ";
        // line 1051
        yield from         $this->unwrap()->yieldBlock("form_help", $context, $blocks);
        yield "
";
        yield from [];
    }

    // line 1054
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_text_with_recommended_length_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1055
        yield "  ";
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["data-recommended-length-counter" => (("#" .         // line 1056
($context["id"] ?? null)) . "_recommended_length_counter"), "class" => "js-recommended-length-input"]);
        // line 1060
        if ((($context["input_type"] ?? null) == "textarea")) {
            // line 1061
            yield from             $this->unwrap()->yieldBlock("textarea_widget", $context, $blocks);
        } else {
            // line 1063
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        }
        // line 1065
        yield "
  <small class=\"form-text text-muted text-right\"
         id=\"";
        // line 1067
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true);
        yield "_recommended_length_counter\"
  >
    <em>
      ";
        // line 1070
        yield Twig\Extension\CoreExtension::replace($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("[1][/1] of [2][/2] characters used (recommended)", [], "Admin.Catalog.Feature"), ["[1]" => ("<span class=\"js-current-length\">" . Twig\Extension\CoreExtension::length($this->env->getCharset(),         // line 1071
($context["value"] ?? null))), "[/1]" => "</span>", "[2]" => ("<span>" .         // line 1073
($context["recommended_length"] ?? null)), "[/2]" => "</span>"]);
        // line 1075
        yield "
    </em>
  </small>
";
        yield from [];
    }

    // line 1080
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_text_with_length_counter_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1081
        yield "  <div class=\"input-group js-text-with-length-counter\">
    ";
        // line 1082
        $context["current_length"] = (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1082), "max_length", [], "any", false, false, false, 1082) - Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["value"] ?? null)));
        // line 1083
        yield "
    ";
        // line 1084
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1084), "position", [], "any", false, false, false, 1084) == "before")) {
            // line 1085
            yield "      <div class=\"input-group-prepend\">
        <span class=\"input-group-text js-countable-text\">";
            // line 1086
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["current_length"] ?? null), "html", null, true);
            yield "</span>
      </div>
    ";
        }
        // line 1089
        yield "
    ";
        // line 1090
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ($context["input_attr"] ?? null));
        // line 1091
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["data-max-length" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1091), "max_length", [], "any", false, false, false, 1091), "maxlength" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1091), "max_length", [], "any", false, false, false, 1091), "class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 1091)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 1091), "")) : ("")) . " js-countable-input"))]);
        // line 1093
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1093), "input", [], "any", false, false, false, 1093) == "input")) {
            // line 1094
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 1095
($context["form"] ?? null), "vars", [], "any", false, false, false, 1095), "input", [], "any", false, false, false, 1095) == "textarea")) {
            // line 1096
            yield from             $this->unwrap()->yieldBlock("textarea_widget", $context, $blocks);
        } else {
            // line 1098
            yield from             $this->unwrap()->yieldBlock("form_widget", $context, $blocks);
        }
        // line 1100
        yield "
    ";
        // line 1101
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1101), "position", [], "any", false, false, false, 1101) == "after")) {
            // line 1102
            yield "      <div class=\"input-group-append\">
        <span class=\"input-group-text js-countable-text\">";
            // line 1103
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["current_length"] ?? null), "html", null, true);
            yield "</span>
      </div>
    ";
        }
        // line 1106
        yield "  </div>
";
        yield from [];
    }

    // line 1109
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_integer_min_max_filter_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1110
        yield "  ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($_v22 = ($context["form"] ?? null)) && is_array($_v22) || $_v22 instanceof ArrayAccess ? ($_v22["min_field"] ?? null) : null), 'widget', ["attr" => ["class" => "min-field"]]);
        yield "
  ";
        // line 1111
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($_v23 = ($context["form"] ?? null)) && is_array($_v23) || $_v23 instanceof ArrayAccess ? ($_v23["max_field"] ?? null) : null), 'widget', ["attr" => ["class" => "max-field"]]);
        yield "
";
        yield from [];
    }

    // line 1114
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_number_min_max_filter_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1115
        yield "  ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($_v24 = ($context["form"] ?? null)) && is_array($_v24) || $_v24 instanceof ArrayAccess ? ($_v24["min_field"] ?? null) : null), 'widget', ["attr" => ["class" => "min-field"]]);
        yield "
  ";
        // line 1116
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($_v25 = ($context["form"] ?? null)) && is_array($_v25) || $_v25 instanceof ArrayAccess ? ($_v25["max_field"] ?? null) : null), 'widget', ["attr" => ["class" => "max-field"]]);
        yield "
";
        yield from [];
    }

    // line 1119
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_number_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1120
        $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default(($context["type"] ?? null), "text")) : ("text"));
        // line 1121
        yield "<div class=\"input-group\">";
        // line 1122
        yield from         $this->unwrap()->yieldBlock("form_unit_prepend", $context, $blocks);
        // line 1123
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        // line 1124
        yield from         $this->unwrap()->yieldBlock("form_unit", $context, $blocks);
        // line 1125
        yield "</div>
  ";
        // line 1126
        yield from         $this->unwrap()->yieldBlock("form_help", $context, $blocks);
        yield from [];
    }

    // line 1129
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_integer_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1130
        $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default(($context["type"] ?? null), "number")) : ("number"));
        // line 1131
        yield "<div class=\"input-group\">";
        // line 1132
        yield from         $this->unwrap()->yieldBlock("form_unit_prepend", $context, $blocks);
        // line 1133
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        // line 1134
        yield from         $this->unwrap()->yieldBlock("form_unit", $context, $blocks);
        // line 1135
        yield "</div>
  ";
        // line 1136
        yield from         $this->unwrap()->yieldBlock("form_help", $context, $blocks);
        yield from [];
    }

    // line 1139
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_unit(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1140
        yield "  ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 1140), "unit", [], "any", true, true, false, 1140) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1140), "prepend_unit", [], "any", false, false, false, 1140))) {
            // line 1141
            yield "    <div class=\"input-group-append\">
      <span class=\"input-group-text\">";
            // line 1142
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1142), "unit", [], "any", false, false, false, 1142), "html", null, true);
            yield "</span>
    </div>
  ";
        }
        yield from [];
    }

    // line 1147
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_unit_prepend(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1148
        yield "  ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 1148), "unit", [], "any", true, true, false, 1148) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1148), "prepend_unit", [], "any", false, false, false, 1148))) {
            // line 1149
            yield "    <div class=\"input-group-prepend\">
      <span class=\"input-group-text\">";
            // line 1150
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1150), "unit", [], "any", false, false, false, 1150), "html", null, true);
            yield "</span>
    </div>
  ";
        }
        yield from [];
    }

    // line 1155
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_help(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1156
        yield "  ";
        if ( !(null === ($context["help"] ?? null))) {
            // line 1157
            $context["help_attr"] = Twig\Extension\CoreExtension::merge(($context["help_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["help_attr"] ?? null), "class", [], "any", true, true, false, 1157)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["help_attr"] ?? null), "class", [], "any", false, false, false, 1157), "")) : ("")) . " form-text"))]);
            // line 1158
            yield "<small id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true);
            yield "_help\"";
            $_v26 = $context;
            $_v27 = ["attr" => ($context["help_attr"] ?? null)];
            if (!is_iterable($_v27)) {
                throw new RuntimeError('Variables passed to the "with" tag must be a mapping.', 1158, $this->getSourceContext());
            }
            $_v27 = CoreExtension::toArray($_v27);
            $context = $_v27 + $context + $this->env->getGlobals();
            yield from             $this->unwrap()->yieldBlock("attributes", $context, $blocks);
            $context = $_v26;
            yield ">";
            yield ($context["help"] ?? null);
            yield "</small>
  ";
        }
        // line 1160
        yield "  ";
        if (array_key_exists("warning", $context)) {
            // line 1161
            yield "    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["warning"] ?? null), "html", null, true);
            yield "
  ";
        }
        yield from [];
    }

    // line 1165
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_prepend_external_link(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1166
        yield "  ";
        if ((array_key_exists("external_link", $context) && (CoreExtension::getAttribute($this->env, $this->source, ($context["external_link"] ?? null), "position", [], "any", false, false, false, 1166) == "prepend"))) {
            // line 1167
            yield from             $this->unwrap()->yieldBlock("form_external_link", $context, $blocks);
        }
        yield from [];
    }

    // line 1171
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_append_external_link(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1172
        yield "  ";
        if ((array_key_exists("external_link", $context) && (CoreExtension::getAttribute($this->env, $this->source, ($context["external_link"] ?? null), "position", [], "any", false, false, false, 1172) == "append"))) {
            // line 1173
            yield from             $this->unwrap()->yieldBlock("form_external_link", $context, $blocks);
        }
        yield from [];
    }

    // line 1177
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_external_link(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1178
        yield "  ";
        if (array_key_exists("external_link", $context)) {
            // line 1179
            $context["openingTag"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 1180
                yield "<a ";
                yield from                 $this->unwrap()->yieldBlock("form_external_link_attributes", $context, $blocks);
                yield ">
        ";
                // line 1181
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["external_link"] ?? null), "open_in_new_tab", [], "any", false, false, false, 1181)) {
                    yield "<i class=\"material-icons\">open_in_new</i>";
                }
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1184
            yield "<div class=\"small font-secondary form-external-link";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["external_link"] ?? null), "align", [], "any", false, false, false, 1184) === "right")) {
                yield " text-right";
            }
            yield "\">
      ";
            // line 1186
            yield "      ";
            if ((CoreExtension::inFilter("[1]", CoreExtension::getAttribute($this->env, $this->source, ($context["external_link"] ?? null), "text", [], "any", false, false, false, 1186)) && CoreExtension::inFilter("[/1]", CoreExtension::getAttribute($this->env, $this->source, ($context["external_link"] ?? null), "text", [], "any", false, false, false, 1186)))) {
                // line 1187
                yield "        ";
                yield Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, ($context["external_link"] ?? null), "text", [], "any", false, false, false, 1187), ["[1]" => ($context["openingTag"] ?? null), "[/1]" => "</a>"]);
                yield "
      ";
            } else {
                // line 1189
                yield "        ";
                yield Twig\Extension\CoreExtension::replace((("[1]" . CoreExtension::getAttribute($this->env, $this->source, ($context["external_link"] ?? null), "text", [], "any", false, false, false, 1189)) . "[/1]"), ["[1]" => ($context["openingTag"] ?? null), "[/1]" => "</a>"]);
                yield "
      ";
            }
            // line 1191
            yield "    </div>
  ";
        }
        yield from [];
    }

    // line 1195
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_external_link_attributes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1196
        $context["external_link_attr"] = Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, ($context["external_link"] ?? null), "attr", [], "any", false, false, false, 1196), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["external_link"] ?? null), "attr", [], "any", false, true, false, 1196), "class", [], "any", true, true, false, 1196)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["external_link"] ?? null), "attr", [], "any", false, false, false, 1196), "class", [], "any", false, false, false, 1196), "")) : ("")) . " btn btn-link px-0 align-right"))]);
        // line 1197
        yield "
  ";
        // line 1198
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["external_link_attr"] ?? null));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 1199
            yield "    ";
            if (!CoreExtension::inFilter($context["attrname"], ["href", "class"])) {
                // line 1200
                yield "      ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrname"], "html", null, true);
                yield "=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrvalue"], "html", null, true);
                yield "\"
    ";
            }
            // line 1202
            yield "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['attrname'], $context['attrvalue'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1203
        yield "
  ";
        // line 1204
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["external_link"] ?? null), "open_in_new_tab", [], "any", false, false, false, 1204)) {
            yield "target=\"_blank\"";
        }
        // line 1205
        yield "  href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["external_link"] ?? null), "href", [], "any", false, false, false, 1205), "html", null, true);
        yield "\"
  class=\"";
        // line 1206
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["external_link_attr"] ?? null), "class", [], "any", false, false, false, 1206), "html", null, true);
        yield "\"";
        yield from [];
    }

    // line 1209
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_custom_content_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1210
        yield "  ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, ($context["template"] ?? null), ($context["data"] ?? null));
        yield "
";
        yield from [];
    }

    // line 1213
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_text_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1214
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["aria-label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%inputId% input", ["%inputId%" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1214), "id", [], "any", false, false, false, 1214)], "Admin.Global")]);
        // line 1215
        if ( !(null === ($context["data_list"] ?? null))) {
            // line 1216
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["list" => (($context["id"] ?? null) . "_datalist")]);
        }
        // line 1218
        yield "
  ";
        // line 1219
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ["attr" => ($context["attr"] ?? null)]);
        yield "

  ";
        // line 1221
        if ( !(null === ($context["data_list"] ?? null))) {
            // line 1222
            yield "    <datalist id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["id"] ?? null) . "_datalist"), "html", null, true);
            yield "\">
      ";
            // line 1223
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["data_list"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 1224
                yield "        <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["item"], "html", null, true);
                yield "\"></option>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1226
            yield "    </datalist>
  ";
        }
        yield from [];
    }

    // line 1230
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_prepend_alert(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1231
        if ((array_key_exists("alert_position", $context) && (($context["alert_position"] ?? null) == "prepend"))) {
            // line 1232
            yield from             $this->unwrap()->yieldBlock("form_alert", $context, $blocks);
        }
        yield from [];
    }

    // line 1236
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_append_alert(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1237
        if ((array_key_exists("alert_position", $context) && (($context["alert_position"] ?? null) == "append"))) {
            // line 1238
            yield from             $this->unwrap()->yieldBlock("form_alert", $context, $blocks);
        }
        yield from [];
    }

    // line 1242
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_alert(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1243
        if (array_key_exists("alert_message", $context)) {
            // line 1244
            yield "    <div class=\"alert alert-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["alert_type"] ?? null), "html", null, true);
            if (array_key_exists("alert_title", $context)) {
                yield " expandable-alert";
            }
            yield "\" role=\"alert\">
    ";
            // line 1245
            if (array_key_exists("alert_title", $context)) {
                // line 1246
                yield "      <p class=\"alert-text\">
        ";
                // line 1247
                yield ($context["alert_title"] ?? null);
                yield "
      </p>
    ";
            } else {
                // line 1250
                yield "      ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["alert_message"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 1251
                    yield "        <p class=\"alert-text\">
          ";
                    // line 1252
                    yield $context["message"];
                    yield "
        </p>
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1255
                yield "    ";
            }
            // line 1256
            yield "
    ";
            // line 1257
            if (array_key_exists("alert_title", $context)) {
                // line 1258
                yield "      <div class=\"alert-more collapse\" id=\"expandable_";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1258), "id", [], "any", false, false, false, 1258), "html", null, true);
                yield "\" style=\"\">
        ";
                // line 1259
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["alert_message"] ?? null)) > 1)) {
                    // line 1260
                    yield "          <ul class=\"p-0\">
            ";
                    // line 1261
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(($context["alert_message"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                        // line 1262
                        yield "              <li>";
                        yield $context["message"];
                        yield "</li>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1264
                    yield "          </ul>
        ";
                } else {
                    // line 1266
                    yield "          ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(($context["alert_message"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                        // line 1267
                        yield "            <p>
              ";
                        // line 1268
                        yield $context["message"];
                        yield "
            </p>
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1271
                    yield "        ";
                }
                // line 1272
                yield "      </div>
      <div class=\"read-more-container\">
         <button type=\"button\" class=\"read-more btn-link\" data-toggle=\"collapse\" data-target=\"#expandable_";
                // line 1274
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1274), "id", [], "any", false, false, false, 1274), "html", null, true);
                yield "\" aria-expanded=\"true\" aria-controls=\"collapseDanger\">
            ";
                // line 1275
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Read more", [], "Admin.Actions"), "html", null, true);
                yield "
          </button>
       </div>
    ";
            }
            // line 1279
            yield "  </div>
  ";
        }
        yield from [];
    }

    // line 1283
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_unavailable_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1284
        yield "  <div class=\"alert alert-unavailable\" role=\"alert\">
    <p class=\"alert-text\">
      ";
        // line 1286
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Not available yet.", [], "Admin.Catalog.Feature"), "html", null, true);
        yield "
    </p>
  </div>
";
        yield from [];
    }

    // line 1291
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_text_preview_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1292
        yield "  ";
        // line 1293
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        // line 1294
        yield "<span class=\"label text-preview ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["preview_class"] ?? null), "html", null, true);
        yield "\">
    ";
        // line 1296
        yield "    ";
        if (array_key_exists("prefix", $context)) {
            // line 1297
            yield "    <span class=\"text-preview-prefix\">
      ";
            // line 1298
            yield ($context["prefix"] ?? null);
            yield "
    </span>
    ";
        }
        // line 1301
        yield "
    <span class=\"text-preview-value\">
      ";
        // line 1303
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1303), "allow_html", [], "any", false, false, false, 1303)) {
            // line 1304
            yield "        ";
            // line 1305
            yield "        ";
            yield ($context["value"] ?? null);
            yield "
      ";
        } else {
            // line 1307
            yield "        ";
            // line 1308
            yield "        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html");
            yield "
      ";
        }
        // line 1310
        yield "    </span>

    ";
        // line 1313
        yield "    ";
        if (array_key_exists("suffix", $context)) {
            // line 1314
            yield "    <span class=\"text-preview-suffix\">
      ";
            // line 1315
            yield ($context["suffix"] ?? null);
            yield "
    </span>
    ";
        }
        // line 1318
        yield "  </span>";
        // line 1319
        yield from         $this->unwrap()->yieldBlock("form_help", $context, $blocks);
        yield from [];
    }

    // line 1322
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_link_preview_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1323
        yield "  ";
        // line 1324
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        // line 1325
        yield "<a href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1325), "value", [], "any", false, false, false, 1325), "html", null, true);
        yield "\" class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 1325)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 1325), "")) : ("")), "html", null, true);
        yield "\">
    ";
        // line 1326
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1326), "button_label", [], "any", false, false, false, 1326), "html", null, true);
        yield "
  </a>
";
        yield from [];
    }

    // line 1330
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_image_preview_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1331
        yield "  ";
        // line 1332
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        // line 1333
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["value"] ?? null))) {
            // line 1334
            yield "    <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::trim(("Image preview for " . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1334), "name", [], "any", false, false, false, 1334))), "html", null, true);
            yield "\" class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1334), "image_class", [], "any", false, false, false, 1334), "html", null, true);
            yield "\" />
  ";
        } else {
            // line 1336
            yield "    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No picture", [], "Admin.Global"), "html", null, true);
            yield "
  ";
        }
        yield from [];
    }

    // line 1340
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_delta_quantity_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1341
        yield "  ";
        $context["quantity"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["value"] ?? null), "quantity", [], "any", true, true, false, 1341)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["value"] ?? null), "quantity", [], "any", false, false, false, 1341), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "quantity", [], "any", false, false, false, 1341), "vars", [], "any", false, false, false, 1341), "value", [], "any", false, false, false, 1341))) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "quantity", [], "any", false, false, false, 1341), "vars", [], "any", false, false, false, 1341), "value", [], "any", false, false, false, 1341)));
        // line 1342
        yield "  ";
        // line 1343
        yield "  ";
        if ((null === ($context["initialQuantity"] ?? null))) {
            // line 1344
            yield "    ";
            $context["initialQuantity"] = ($context["quantity"] ?? null);
            // line 1345
            yield "  ";
        }
        // line 1346
        yield "  ";
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 1346)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 1346), "")) : ("")) . " delta-quantity")), "data-initial-quantity" => ($context["initialQuantity"] ?? null)]);
        // line 1347
        yield "  <div ";
        yield from         $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
        yield ">
    ";
        // line 1348
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "initial_quantity", [], "any", false, false, false, 1348), 'widget', ["value" => ($context["initialQuantity"] ?? null)]);
        yield "
    ";
        // line 1349
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "quantity", [], "any", false, false, false, 1349), 'widget', ["initialQuantity" => ($context["initialQuantity"] ?? null), "deltaQuantity" => ($context["deltaQuantity"] ?? null), "value" => ($context["quantity"] ?? null)]);
        yield "
    ";
        // line 1350
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "delta", [], "any", false, false, false, 1350), 'row');
        yield "
  </div>
";
        yield from [];
    }

    // line 1354
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_delta_quantity_quantity_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1355
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 1355)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 1355), "")) : ("")) . " delta-quantity-quantity"))]);
        // line 1356
        yield "<div ";
        yield from         $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
        yield ">";
        // line 1357
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        // line 1358
        yield "<span class=\"initial-quantity\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["initialQuantity"] ?? null), "html", null, true);
        yield "</span>
    <span class=\"quantity-update";
        // line 1359
        if ((($context["deltaQuantity"] ?? null) != 0)) {
            yield " quantity-modified";
        }
        yield "\">
      <i class=\"material-icons\">trending_flat</i>
      <span class=\"new-quantity\">";
        // line 1361
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
        yield "</span>
    </span>
    ";
        // line 1363
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        yield "
  </div>
";
        yield from [];
    }

    // line 1367
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_delta_quantity_delta_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1368
        yield "  <div class=\"form-group";
        yield from         $this->unwrap()->yieldBlock("widget_type_class", $context, $blocks);
        if ((( !($context["compound"] ?? null) || ((array_key_exists("force_error", $context)) ? (Twig\Extension\CoreExtension::default(($context["force_error"] ?? null), false)) : (false))) &&  !($context["valid"] ?? null))) {
            yield " has-error";
        }
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 1368)) {
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 1368), "html", null, true);
        }
        yield "\">
    <div class=\"delta-quantity-delta-container\">";
        // line 1370
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 1371
        yield from         $this->unwrap()->yieldBlock("form_prepend_alert", $context, $blocks);
        // line 1372
        yield from         $this->unwrap()->yieldBlock("form_prepend_external_link", $context, $blocks);
        // line 1374
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 1376
        yield from         $this->unwrap()->yieldBlock("form_append_alert", $context, $blocks);
        // line 1377
        yield from         $this->unwrap()->yieldBlock("form_append_external_link", $context, $blocks);
        // line 1378
        yield "</div>";
        // line 1379
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 1380
        yield from         $this->unwrap()->yieldBlock("form_modify_all_shops", $context, $blocks);
        // line 1381
        yield "</div>
";
        yield from [];
    }

    // line 1384
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_delta_quantity_delta_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1385
        $context["type"] = "number";
        // line 1386
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 1386)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 1386), "")) : ("")) . " delta-quantity-delta"))]);
        // line 1387
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        yield from [];
    }

    // line 1390
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_submittable_input_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1391
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 1391)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 1391), "")) : ("")) . " ps-submittable-input-wrapper"))]);
        // line 1392
        yield "<div ";
        yield from         $this->unwrap()->yieldBlock("widget_attributes", $context, $blocks);
        yield ">";
        // line 1393
        $context["typeAttr"] = Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1393), "type_attr", [], "any", false, false, false, 1393), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 1394
($context["form"] ?? null), "vars", [], "any", false, true, false, 1394), "type_attr", [], "any", false, true, false, 1394), "class", [], "any", true, true, false, 1394)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1394), "type_attr", [], "any", false, false, false, 1394), "class", [], "any", false, false, false, 1394), "")) : ("")) . " submittable-input")), "data-initial-value" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 1395
($context["form"] ?? null), "value", [], "any", false, false, false, 1395), "vars", [], "any", false, false, false, 1395), "value", [], "any", false, false, false, 1395), "value" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 1396
($context["form"] ?? null), "value", [], "any", false, false, false, 1396), "vars", [], "any", false, false, false, 1396), "value", [], "any", false, false, false, 1396)]);
        // line 1399
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "value", [], "any", false, false, false, 1399), 'widget', ["attr" => ($context["typeAttr"] ?? null)]);
        // line 1400
        yield from         $this->unwrap()->yieldBlock("submittable_input_button_widget", $context, $blocks);
        // line 1401
        yield "</div>
";
        yield from [];
    }

    // line 1404
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_submittable_input_button_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1405
        yield "  <button type=\"button\" class=\"check-button d-none\">
    <i class=\"material-icons\">check</i>
  </button>
";
        yield from [];
    }

    // line 1410
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_submittable_delta_quantity_delta_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1411
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 1411)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 1411), "")) : ("")) . " delta-quantity-delta ps-submittable-input-wrapper"))]);
        // line 1412
        yield "<div ";
        yield from         $this->unwrap()->yieldBlock("widget_attributes", $context, $blocks);
        yield ">";
        // line 1413
        $context["attr"] = Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1413), "attr", [], "any", false, false, false, 1413), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 1414
($context["form"] ?? null), "vars", [], "any", false, true, false, 1414), "attr", [], "any", false, true, false, 1414), "class", [], "any", true, true, false, 1414)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1414), "attr", [], "any", false, false, false, 1414), "class", [], "any", false, false, false, 1414), "")) : ("")) . " submittable-input")), "data-initial-value" =>         // line 1415
($context["value"] ?? null), "value" =>         // line 1416
($context["value"] ?? null)]);
        // line 1419
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ["attr" => ($context["attr"] ?? null)]);
        // line 1420
        yield from         $this->unwrap()->yieldBlock("submittable_input_button_widget", $context, $blocks);
        // line 1421
        yield "</div>
";
        yield from [];
    }

    // line 1424
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_navigation_tab_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1425
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 1425)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 1425), "")) : ("")) . " navigation-tab-widget"))]);
        // line 1426
        yield "<div ";
        yield from         $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
        yield ">
  <div id=\"";
        // line 1427
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1427), "id", [], "any", false, false, false, 1427), "html", null, true);
        yield "-tabs\" class=\"tabs js-tabs\">
    <div class=\"arrow d-xl-none js-arrow left-arrow float-left\">
      <i class=\"material-icons rtl-flip hide\">chevron_left</i>
    </div>

    <ul class=\"nav nav-tabs js-nav-tabs\" id=\"form-nav\" role=\"tablist\">
    ";
        // line 1433
        $context["firstRenderedChild"] = true;
        // line 1434
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "children", [], "any", false, false, false, 1434));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 1435
            yield "      ";
            if (((( !CoreExtension::getAttribute($this->env, $this->source, $context["child"], "rendered", [], "any", false, false, false, 1435) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1435), "name", [], "any", false, false, false, 1435) != "_toolbar_buttons")) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1435), "name", [], "any", false, false, false, 1435) != "_footer_buttons")) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1435), "name", [], "any", false, false, false, 1435) != "_token"))) {
                // line 1436
                yield "      <li id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1436), "id", [], "any", false, false, false, 1436), "html", null, true);
                yield "-tab-nav\" class=\"nav-item";
                if ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1436), "valid", [], "any", false, false, false, 1436)) {
                    yield " has-error";
                }
                yield "\">
        <a href=\"#";
                // line 1437
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1437), "id", [], "any", false, false, false, 1437), "html", null, true);
                yield "-tab\" role=\"tab\" data-toggle=\"tab\" class=\"nav-link";
                if (($context["firstRenderedChild"] ?? null)) {
                    yield " active";
                }
                yield "\">
          ";
                // line 1438
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1438), "label", [], "any", false, false, false, 1438), "html", null, true);
                yield "
        </a>
      </li>
      ";
                // line 1441
                $context["firstRenderedChild"] = false;
                // line 1442
                yield "      ";
            }
            // line 1443
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1444
        yield "    </ul>

    <div class=\"arrow d-xl-none js-arrow right-arrow visible float-right\">
      <i class=\"material-icons rtl-flip hide\">chevron_right</i>
    </div>

    ";
        // line 1450
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "offsetExists", ["_toolbar_buttons"], "method", false, false, false, 1450)) {
            // line 1451
            yield "    <div class=\"navigation-tab-widget-toolbar toolbar text-md-right\">
      ";
            // line 1452
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "_toolbar_buttons", [], "any", false, false, false, 1452), 'widget');
            yield "
    </div>
    ";
        }
        // line 1455
        yield "  </div>

  <div id=\"";
        // line 1457
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1457), "id", [], "any", false, false, false, 1457), "html", null, true);
        yield "-tabs-content\" class=\"tab-content\">
    ";
        // line 1458
        $context["firstRenderedChild"] = true;
        // line 1459
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "children", [], "any", false, false, false, 1459));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 1460
            yield "      ";
            if ((( !CoreExtension::getAttribute($this->env, $this->source, $context["child"], "rendered", [], "any", false, false, false, 1460) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1460), "name", [], "any", false, false, false, 1460) != "_footer_buttons")) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1460), "name", [], "any", false, false, false, 1460) != "_token"))) {
                // line 1461
                yield "      <div role=\"tabpanel\" class=\"form-contenttab tab-pane container-fluid";
                if (($context["firstRenderedChild"] ?? null)) {
                    yield " active";
                }
                yield "\" id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1461), "id", [], "any", false, false, false, 1461), "html", null, true);
                yield "-tab\">
        ";
                // line 1462
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, true, false, 1462), "label_tab", [], "any", true, true, false, 1462)) {
                    // line 1463
                    yield "          ";
                    // line 1464
                    yield "          ";
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'label', ["required" => false] + (CoreExtension::testEmpty($_label_ = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1464), "label_tab", [], "any", false, false, false, 1464)) ? [] : ["label" => $_label_]));
                    yield "
        ";
                }
                // line 1466
                yield "        ";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'errors');
                yield "
        ";
                // line 1467
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
                yield "
      </div>
      ";
                // line 1469
                $context["firstRenderedChild"] = false;
                // line 1470
                yield "      ";
            }
            // line 1471
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1472
        yield "  </div>

  ";
        // line 1474
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "offsetExists", ["_footer_buttons"], "method", false, false, false, 1474)) {
            // line 1475
            yield "    <div class=\"navigation-tab-widget-footer\">
      ";
            // line 1476
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "_footer_buttons", [], "any", false, false, false, 1476), 'widget');
            yield "
    </div>
  ";
        }
        // line 1479
        yield "</div>
";
        yield from [];
    }

    // line 1482
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_accordion_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1483
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source,         // line 1484
($context["attr"] ?? null), "class", [], "any", true, true, false, 1484)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 1484), "")) : ("")) . " accordion accordion-form"))]);
        // line 1486
        yield "<div ";
        yield from         $this->unwrap()->yieldBlock("widget_attributes", $context, $blocks);
        yield ">
    ";
        // line 1487
        $context["firstChild"] = true;
        // line 1488
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 1489
            yield "      ";
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1489), "compound", [], "any", false, false, false, 1489)) {
                // line 1490
                yield "      ";
                $context["hasError"] = (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1490), "valid", [], "any", false, false, false, 1490) != true);
                // line 1491
                yield "      ";
                $context["isExpanded"] = (((($context["firstChild"] ?? null) && ($context["expand_first"] ?? null)) || (($context["hasError"] ?? null) && ($context["expand_on_error"] ?? null))) || ($context["expand_all"] ?? null));
                // line 1492
                yield "      <div class=\"card\">
        <div class=\"card-header\" id=\"";
                // line 1493
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1493), "id", [], "any", false, false, false, 1493), "html", null, true);
                yield "_accordion_header\">
          <h2 class=\"mb-0\">
            <button
              class=\"accordion-form-button ";
                // line 1496
                if (($context["hasError"] ?? null)) {
                    yield " has-error ";
                }
                yield " btn btn-block text-left";
                if ( !($context["isExpanded"] ?? null)) {
                    yield " collapsed";
                }
                yield "\"
              type=\"button\"
              data-toggle=\"collapse\"
              data-target=\"#";
                // line 1499
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1499), "id", [], "any", false, false, false, 1499), "html", null, true);
                yield "_accordion\"
              aria-expanded=\"";
                // line 1500
                if (($context["isExpanded"] ?? null)) {
                    yield "true";
                } else {
                    yield "false";
                }
                yield "\"
              aria-controls=\"";
                // line 1501
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1501), "id", [], "any", false, false, false, 1501), "html", null, true);
                yield "_accordion\">
              <span class=\"accordion-form-button-label\">";
                // line 1502
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1502), "label", [], "any", false, false, false, 1502), "html", null, true);
                yield "</span>
              ";
                // line 1503
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, true, false, 1503), "label_subtitle", [], "any", true, true, false, 1503)) {
                    // line 1504
                    yield "                <span class=\"accordion-form-button-sub-label\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1504), "label_subtitle", [], "any", false, false, false, 1504), "html", null, true);
                    yield "</span>
              ";
                }
                // line 1506
                yield "              <i class=\"material-icons\"></i>
            </button>
          </h2>
        </div>

        <div id=\"";
                // line 1511
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1511), "id", [], "any", false, false, false, 1511), "html", null, true);
                yield "_accordion\" class=\"collapse";
                if (($context["isExpanded"] ?? null)) {
                    yield " show";
                }
                yield "\" aria-labelledby=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1511), "id", [], "any", false, false, false, 1511), "html", null, true);
                yield "_accordion_header\" ";
                if (($context["display_one"] ?? null)) {
                    yield "data-parent=\"#";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1511), "id", [], "any", false, false, false, 1511), "html", null, true);
                    yield "\"";
                }
                yield ">
          <div class=\"card-body\">
            ";
                // line 1513
                $context["childAttr"] = ["class" => "accordion-sub-form"];
                // line 1514
                yield "            ";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["attr" => ($context["childAttr"] ?? null)]);
                yield "
            ";
                // line 1515
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'errors');
                yield "
          </div>
        </div>
      </div>
      ";
                // line 1519
                $context["firstChild"] = false;
                // line 1520
                yield "      ";
            }
            // line 1521
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1522
        yield "
    ";
        // line 1524
        yield "    ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        yield "
  </div>";
        yield from [];
    }

    // line 1528
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_button_collection_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1529
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source,         // line 1530
($context["attr"] ?? null), "class", [], "any", true, true, false, 1530)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 1530), "")) : ("")) . " form-group btn-collection btn-toolbar")), "role" => "group", "style" => ("justify-content: " .         // line 1532
($context["justify_content"] ?? null))]);
        // line 1534
        yield "<div ";
        yield from         $this->unwrap()->yieldBlock("widget_attributes", $context, $blocks);
        yield ">
    ";
        // line 1535
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["button_groups"] ?? null));
        foreach ($context['_seq'] as $context["group"] => $context["buttons"]) {
            // line 1536
            yield "      <div class=\"";
            if (($context["use_button_groups"] ?? null)) {
                yield "btn-group ";
            }
            yield "group-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["group"], "html", null, true);
            yield "\">
        ";
            // line 1538
            yield "        ";
            $context["inlineButtonsLimit"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1538), "inline_buttons_limit", [], "any", false, false, false, 1538);
            // line 1539
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["buttons"]);
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                // line 1540
                yield "          ";
                $context["action"] = CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), $context["button"], [], "any", false, false, false, 1540);
                // line 1541
                yield "          ";
                if (((($context["inlineButtonsLimit"] ?? null) === null) || (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 1541) <= ($context["inlineButtonsLimit"] ?? null)))) {
                    // line 1542
                    yield "            ";
                    // line 1543
                    yield "            ";
                    if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1543), "use_inline_labels", [], "any", false, false, false, 1543)) {
                        // line 1544
                        yield "              ";
                        $context["actionLabel"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "vars", [], "any", false, false, false, 1544), "label", [], "any", false, false, false, 1544);
                        // line 1545
                        yield "            ";
                    } else {
                        // line 1546
                        yield "              ";
                        $context["actionLabel"] = "";
                        // line 1547
                        yield "            ";
                    }
                    // line 1548
                    yield "            ";
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["action"] ?? null), 'widget', ["label" => ($context["actionLabel"] ?? null)]);
                    yield "
          ";
                }
                // line 1550
                yield "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1551
            yield "
        ";
            // line 1553
            yield "        ";
            if (( !(($context["inlineButtonsLimit"] ?? null) === null) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), $context["buttons"]) > ($context["inlineButtonsLimit"] ?? null)))) {
                // line 1554
                yield "          <a id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1554), "id", [], "any", false, false, false, 1554), "html", null, true);
                yield "_dropdown\" class=\"btn btn-link dropdown-toggle dropdown-toggle-dots dropdown-toggle-split no-rotate\"
             data-toggle=\"dropdown\"
             aria-haspopup=\"true\"
             aria-expanded=\"false\"
          >
          </a>
          <div class=\"dropdown-menu\">
            ";
                // line 1561
                $context["remainingButtons"] = Twig\Extension\CoreExtension::slice($this->env->getCharset(), $context["buttons"], ($context["inlineButtonsLimit"] ?? null));
                // line 1562
                yield "            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["remainingButtons"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                    // line 1563
                    yield "              ";
                    $context["action"] = CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), $context["button"], [], "any", false, false, false, 1563);
                    // line 1564
                    yield "              ";
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["action"] ?? null), 'widget', ["attr" => ["class" => ("dropdown-item " . Twig\Extension\CoreExtension::trim(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                     // line 1565
($context["action"] ?? null), "vars", [], "any", false, true, false, 1565), "attr", [], "any", false, true, false, 1565), "class", [], "any", true, true, false, 1565)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "vars", [], "any", false, false, false, 1565), "attr", [], "any", false, false, false, 1565), "class", [], "any", false, false, false, 1565), "")) : (""))))]]);
                    // line 1566
                    yield "
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['button'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1568
                yield "          </div>
        ";
            }
            // line 1570
            yield "      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['group'], $context['buttons'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1572
        yield "  </div>
";
        yield from [];
    }

    // line 1575
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_avatar_url_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1576
        yield "  ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'row', ["attr" => ($context["attr"] ?? null)]);
        yield "

  <div class=\"form-group row\">
    <label class=\"form-control-label\"></label>
    <div class=\"col-sm\">
      <img class=\"img-thumbnail clickable-avatar\" src=\"";
        // line 1581
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, false, false, 1581), "vars", [], "any", false, false, false, 1581), "value", [], "any", false, false, false, 1581), "avatar_url", [], "any", false, false, false, 1581), "html", null, true);
        yield "\" alt=\"\">
    </div>
  </div>
";
        yield from [];
    }

    // line 1586
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_change_password_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1587
        yield "  <div class=\"form-group row\">
    <label class=\"form-control-label\">
      ";
        // line 1589
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Password", [], "Admin.Global"), "html", null, true);
        yield "
    </label>
    <div class=\"col-sm\">
      ";
        // line 1593
        yield "      ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "children", [], "any", false, false, false, 1593), "change_password_button", [], "any", false, false, false, 1593), 'row');
        yield "

      <div class=\"card card-body js-change-password-block d-none\">
        ";
        // line 1597
        yield "        ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "children", [], "any", false, false, false, 1597), "old_password", [], "any", false, false, false, 1597), 'row');
        yield "

        ";
        // line 1600
        yield "        ";
        // line 1601
        yield "        ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "children", [], "any", false, false, false, 1601), "new_password", [], "any", false, false, false, 1601), 'row');
        yield "

        <div class=\"form-group row\">
          <label class=\"form-control-label\"></label>
          <div class=\"col-sm\">
            ";
        // line 1606
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "children", [], "any", false, false, false, 1606), "generated_password", [], "any", false, false, false, 1606), 'widget');
        yield "
          </div>
          <div class=\"col-sm\">
            ";
        // line 1609
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "children", [], "any", false, false, false, 1609), "generate_password_button", [], "any", false, false, false, 1609), 'widget');
        yield "
          </div>
        </div>
        ";
        // line 1612
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "children", [], "any", false, false, false, 1612), "cancel_button", [], "any", false, false, false, 1612), 'row');
        yield "

        ";
        // line 1615
        yield "        <div class=\"js-password-strength-feedback d-none\">
          <span class=\"strength-low\">";
        // line 1616
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Invalid", [], "Admin.Advparameters.Help"), "html", null, true);
        yield "</span>
          <span class=\"strength-medium\">";
        // line 1617
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Okay", [], "Admin.Advparameters.Help"), "html", null, true);
        yield "</span>
          <span class=\"strength-high\">";
        // line 1618
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Good", [], "Admin.Advparameters.Help"), "html", null, true);
        yield "</span>
          <span class=\"strength-extreme\">";
        // line 1619
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Fabulous", [], "Admin.Advparameters.Help"), "html", null, true);
        yield "</span>
        </div>
      </div>
    </div>
  </div>
";
        yield from [];
    }

    // line 1626
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_price_reduction_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1627
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 1627)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 1627), "")) : ("")) . " reduction-widget row"))]);
        // line 1628
        yield "  <div ";
        yield from         $this->unwrap()->yieldBlock("widget_attributes", $context, $blocks);
        yield ">
    ";
        // line 1629
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "children", [], "any", false, false, false, 1629));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 1630
            yield "      ";
            $_v28 = $context;
            $_v29 = ["row_attr" => Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1630), "row_attr", [], "any", false, false, false, 1630), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, true, false, 1630), "row_attr", [], "any", false, true, false, 1630), "class", [], "any", true, true, false, 1630)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1630), "row_attr", [], "any", false, false, false, 1630), "class", [], "any", false, false, false, 1630), "")) : ("")) . " col col-md-3"))])];
            if (!is_iterable($_v29)) {
                throw new RuntimeError('Variables passed to the "with" tag must be a mapping.', 1630, $this->getSourceContext());
            }
            $_v29 = CoreExtension::toArray($_v29);
            $context = $_v29 + $context + $this->env->getGlobals();
            // line 1631
            yield "      <div ";
            yield from             $this->unwrap()->yieldBlock("row_attributes", $context, $blocks);
            yield ">
      ";
            $context = $_v28;
            // line 1633
            yield "        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
            yield "
        ";
            // line 1634
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'errors');
            yield "
      </div>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1637
        yield "</div>";
        yield from [];
    }

    // line 1640
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_image_with_preview_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1641
        yield "  ";
        if ((array_key_exists("data", $context) &&  !Twig\Extension\CoreExtension::testEmpty(($context["data"] ?? null)))) {
            // line 1642
            yield "    <div>
      ";
            // line 1643
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["data"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["preview_image"]) {
                // line 1646
                yield "        ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["preview_image"], "image_path", [], "any", true, true, false, 1646)) {
                    // line 1647
                    yield "          ";
                    if (($context["can_be_deleted"] ?? null)) {
                        // line 1648
                        yield "            <figure class=\"figure\">
              <img src=\"";
                        // line 1649
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["preview_image"], "image_path", [], "any", false, false, false, 1649), "html", null, true);
                        yield "\" class=\"figure-img img-fluid img-thumbnail\">
              <figcaption class=\"figure-caption\">
                ";
                        // line 1651
                        if (($context["show_size"] ?? null)) {
                            // line 1652
                            yield "                  <p>";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("File size", [], "Admin.Advparameters.Feature"), "html", null, true);
                            yield " ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["preview_image"], "size", [], "any", false, false, false, 1652), "html", null, true);
                            yield "</p>
                ";
                        }
                        // line 1654
                        yield "                <button class=\"btn btn-outline-danger btn-sm js-form-submit-btn\"
                        data-form-submit-url=\"";
                        // line 1655
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["preview_image"], "delete_path", [], "any", false, false, false, 1655), "html", null, true);
                        yield "\"
                >
                  <i class=\"material-icons\">
                    delete_forever
                  </i>
                  ";
                        // line 1660
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete", [], "Admin.Actions"), "html", null, true);
                        yield "
                </button>
              </figcaption>
            </figure>
          ";
                    } else {
                        // line 1665
                        yield "            ";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(($context["data"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["preview_image"]) {
                            // line 1666
                            yield "              <figure class=\"figure\">
                <img src=\"";
                            // line 1667
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["preview_image"], "image_path", [], "any", false, false, false, 1667), "html", null, true);
                            yield "\" class=\"figure-img img-fluid img-thumbnail\">
                ";
                            // line 1668
                            if (($context["show_size"] ?? null)) {
                                // line 1669
                                yield "                  <figcaption class=\"figure-caption\">";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("File size", [], "Admin.Advparameters.Feature"), "html", null, true);
                                yield " ";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["preview_image"], "size", [], "any", false, false, false, 1669), "html", null, true);
                                yield "</figcaption>
                ";
                            }
                            // line 1671
                            yield "              </figure>
            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['preview_image'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 1673
                        yield "          ";
                    }
                    // line 1674
                    yield "      ";
                }
                // line 1675
                yield "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['preview_image'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1676
            yield "    </div>
  ";
        }
        // line 1678
        yield "  ";
        yield from         $this->unwrap()->yieldBlock("file_widget", $context, $blocks);
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  5094 => 1678,  5090 => 1676,  5084 => 1675,  5081 => 1674,  5078 => 1673,  5071 => 1671,  5063 => 1669,  5061 => 1668,  5057 => 1667,  5054 => 1666,  5049 => 1665,  5041 => 1660,  5033 => 1655,  5030 => 1654,  5022 => 1652,  5020 => 1651,  5015 => 1649,  5012 => 1648,  5009 => 1647,  5006 => 1646,  5002 => 1643,  4999 => 1642,  4996 => 1641,  4989 => 1640,  4984 => 1637,  4967 => 1634,  4962 => 1633,  4956 => 1631,  4947 => 1630,  4930 => 1629,  4925 => 1628,  4923 => 1627,  4916 => 1626,  4905 => 1619,  4901 => 1618,  4897 => 1617,  4893 => 1616,  4890 => 1615,  4885 => 1612,  4879 => 1609,  4873 => 1606,  4864 => 1601,  4862 => 1600,  4856 => 1597,  4849 => 1593,  4843 => 1589,  4839 => 1587,  4832 => 1586,  4823 => 1581,  4814 => 1576,  4807 => 1575,  4801 => 1572,  4794 => 1570,  4790 => 1568,  4783 => 1566,  4781 => 1565,  4779 => 1564,  4776 => 1563,  4771 => 1562,  4769 => 1561,  4758 => 1554,  4755 => 1553,  4752 => 1551,  4738 => 1550,  4732 => 1548,  4729 => 1547,  4726 => 1546,  4723 => 1545,  4720 => 1544,  4717 => 1543,  4715 => 1542,  4712 => 1541,  4709 => 1540,  4691 => 1539,  4688 => 1538,  4679 => 1536,  4675 => 1535,  4670 => 1534,  4668 => 1532,  4667 => 1530,  4666 => 1529,  4659 => 1528,  4651 => 1524,  4648 => 1522,  4642 => 1521,  4639 => 1520,  4637 => 1519,  4630 => 1515,  4625 => 1514,  4623 => 1513,  4606 => 1511,  4599 => 1506,  4593 => 1504,  4591 => 1503,  4587 => 1502,  4583 => 1501,  4575 => 1500,  4571 => 1499,  4559 => 1496,  4553 => 1493,  4550 => 1492,  4547 => 1491,  4544 => 1490,  4541 => 1489,  4536 => 1488,  4534 => 1487,  4529 => 1486,  4527 => 1484,  4526 => 1483,  4519 => 1482,  4513 => 1479,  4507 => 1476,  4504 => 1475,  4502 => 1474,  4498 => 1472,  4492 => 1471,  4489 => 1470,  4487 => 1469,  4482 => 1467,  4477 => 1466,  4471 => 1464,  4469 => 1463,  4467 => 1462,  4458 => 1461,  4455 => 1460,  4450 => 1459,  4448 => 1458,  4444 => 1457,  4440 => 1455,  4434 => 1452,  4431 => 1451,  4429 => 1450,  4421 => 1444,  4415 => 1443,  4412 => 1442,  4410 => 1441,  4404 => 1438,  4396 => 1437,  4387 => 1436,  4384 => 1435,  4379 => 1434,  4377 => 1433,  4368 => 1427,  4363 => 1426,  4361 => 1425,  4354 => 1424,  4348 => 1421,  4346 => 1420,  4344 => 1419,  4342 => 1416,  4341 => 1415,  4340 => 1414,  4339 => 1413,  4335 => 1412,  4333 => 1411,  4326 => 1410,  4318 => 1405,  4311 => 1404,  4305 => 1401,  4303 => 1400,  4301 => 1399,  4299 => 1396,  4298 => 1395,  4297 => 1394,  4296 => 1393,  4292 => 1392,  4290 => 1391,  4283 => 1390,  4278 => 1387,  4276 => 1386,  4274 => 1385,  4267 => 1384,  4261 => 1381,  4259 => 1380,  4257 => 1379,  4255 => 1378,  4253 => 1377,  4251 => 1376,  4249 => 1374,  4247 => 1372,  4245 => 1371,  4243 => 1370,  4231 => 1368,  4224 => 1367,  4216 => 1363,  4211 => 1361,  4204 => 1359,  4199 => 1358,  4197 => 1357,  4193 => 1356,  4191 => 1355,  4184 => 1354,  4176 => 1350,  4172 => 1349,  4168 => 1348,  4163 => 1347,  4160 => 1346,  4157 => 1345,  4154 => 1344,  4151 => 1343,  4149 => 1342,  4146 => 1341,  4139 => 1340,  4130 => 1336,  4120 => 1334,  4118 => 1333,  4116 => 1332,  4114 => 1331,  4107 => 1330,  4099 => 1326,  4092 => 1325,  4090 => 1324,  4088 => 1323,  4081 => 1322,  4076 => 1319,  4074 => 1318,  4068 => 1315,  4065 => 1314,  4062 => 1313,  4058 => 1310,  4052 => 1308,  4050 => 1307,  4044 => 1305,  4042 => 1304,  4040 => 1303,  4036 => 1301,  4030 => 1298,  4027 => 1297,  4024 => 1296,  4019 => 1294,  4017 => 1293,  4015 => 1292,  4008 => 1291,  3999 => 1286,  3995 => 1284,  3988 => 1283,  3981 => 1279,  3974 => 1275,  3970 => 1274,  3966 => 1272,  3963 => 1271,  3954 => 1268,  3951 => 1267,  3946 => 1266,  3942 => 1264,  3933 => 1262,  3929 => 1261,  3926 => 1260,  3924 => 1259,  3919 => 1258,  3917 => 1257,  3914 => 1256,  3911 => 1255,  3902 => 1252,  3899 => 1251,  3894 => 1250,  3888 => 1247,  3885 => 1246,  3883 => 1245,  3875 => 1244,  3873 => 1243,  3866 => 1242,  3860 => 1238,  3858 => 1237,  3851 => 1236,  3845 => 1232,  3843 => 1231,  3836 => 1230,  3829 => 1226,  3820 => 1224,  3816 => 1223,  3811 => 1222,  3809 => 1221,  3804 => 1219,  3801 => 1218,  3798 => 1216,  3796 => 1215,  3794 => 1214,  3787 => 1213,  3779 => 1210,  3772 => 1209,  3766 => 1206,  3761 => 1205,  3757 => 1204,  3754 => 1203,  3748 => 1202,  3740 => 1200,  3737 => 1199,  3733 => 1198,  3730 => 1197,  3728 => 1196,  3721 => 1195,  3714 => 1191,  3708 => 1189,  3702 => 1187,  3699 => 1186,  3692 => 1184,  3686 => 1181,  3681 => 1180,  3679 => 1179,  3676 => 1178,  3669 => 1177,  3663 => 1173,  3660 => 1172,  3653 => 1171,  3647 => 1167,  3644 => 1166,  3637 => 1165,  3628 => 1161,  3625 => 1160,  3607 => 1158,  3605 => 1157,  3602 => 1156,  3595 => 1155,  3586 => 1150,  3583 => 1149,  3580 => 1148,  3573 => 1147,  3564 => 1142,  3561 => 1141,  3558 => 1140,  3551 => 1139,  3546 => 1136,  3543 => 1135,  3541 => 1134,  3539 => 1133,  3537 => 1132,  3535 => 1131,  3533 => 1130,  3526 => 1129,  3521 => 1126,  3518 => 1125,  3516 => 1124,  3514 => 1123,  3512 => 1122,  3510 => 1121,  3508 => 1120,  3501 => 1119,  3494 => 1116,  3489 => 1115,  3482 => 1114,  3475 => 1111,  3470 => 1110,  3463 => 1109,  3457 => 1106,  3451 => 1103,  3448 => 1102,  3446 => 1101,  3443 => 1100,  3440 => 1098,  3437 => 1096,  3435 => 1095,  3433 => 1094,  3431 => 1093,  3429 => 1091,  3427 => 1090,  3424 => 1089,  3418 => 1086,  3415 => 1085,  3413 => 1084,  3410 => 1083,  3408 => 1082,  3405 => 1081,  3398 => 1080,  3390 => 1075,  3388 => 1073,  3387 => 1071,  3386 => 1070,  3380 => 1067,  3376 => 1065,  3373 => 1063,  3370 => 1061,  3368 => 1060,  3366 => 1056,  3364 => 1055,  3357 => 1054,  3350 => 1051,  3343 => 1047,  3338 => 1045,  3334 => 1044,  3329 => 1041,  3326 => 1039,  3323 => 1037,  3321 => 1036,  3318 => 1035,  3311 => 1034,  3299 => 1026,  3295 => 1025,  3291 => 1024,  3287 => 1022,  3285 => 1021,  3281 => 1019,  3278 => 1018,  3271 => 1017,  3262 => 1012,  3257 => 1011,  3255 => 1010,  3253 => 1009,  3247 => 1006,  3245 => 1005,  3240 => 1004,  3238 => 1002,  3235 => 1001,  3233 => 999,  3231 => 998,  3229 => 997,  3227 => 992,  3226 => 991,  3219 => 987,  3215 => 985,  3208 => 984,  3201 => 979,  3199 => 978,  3197 => 975,  3196 => 974,  3195 => 973,  3194 => 972,  3191 => 970,  3188 => 969,  3186 => 968,  3183 => 967,  3178 => 965,  3176 => 964,  3174 => 963,  3171 => 961,  3168 => 960,  3161 => 959,  3155 => 956,  3149 => 954,  3143 => 952,  3141 => 951,  3134 => 950,  3129 => 947,  3124 => 944,  3113 => 942,  3109 => 941,  3105 => 940,  3100 => 938,  3095 => 936,  3091 => 934,  3085 => 932,  3083 => 931,  3077 => 927,  3074 => 926,  3065 => 923,  3058 => 922,  3055 => 921,  3052 => 920,  3049 => 919,  3046 => 918,  3043 => 917,  3039 => 916,  3032 => 915,  3030 => 914,  3023 => 913,  3016 => 909,  3007 => 906,  2986 => 905,  2982 => 904,  2978 => 902,  2974 => 900,  2964 => 896,  2954 => 895,  2951 => 894,  2947 => 893,  2944 => 892,  2942 => 891,  2937 => 890,  2930 => 889,  2925 => 836,  2918 => 882,  2911 => 880,  2904 => 878,  2900 => 876,  2897 => 875,  2891 => 873,  2885 => 871,  2883 => 870,  2880 => 869,  2877 => 868,  2875 => 867,  2872 => 866,  2868 => 865,  2863 => 863,  2859 => 861,  2855 => 860,  2850 => 857,  2835 => 855,  2829 => 853,  2823 => 850,  2817 => 847,  2813 => 845,  2811 => 844,  2808 => 843,  2791 => 842,  2787 => 841,  2777 => 837,  2774 => 836,  2767 => 835,  2759 => 832,  2757 => 798,  2750 => 828,  2740 => 824,  2736 => 822,  2732 => 821,  2724 => 815,  2716 => 814,  2712 => 812,  2708 => 810,  2706 => 809,  2694 => 799,  2691 => 798,  2684 => 797,  2676 => 790,  2667 => 787,  2663 => 786,  2656 => 781,  2653 => 780,  2646 => 779,  2639 => 774,  2631 => 771,  2628 => 770,  2624 => 769,  2619 => 766,  2611 => 760,  2606 => 757,  2599 => 754,  2594 => 752,  2587 => 748,  2583 => 746,  2581 => 745,  2575 => 742,  2571 => 741,  2568 => 740,  2562 => 737,  2552 => 734,  2548 => 733,  2545 => 731,  2543 => 730,  2537 => 728,  2535 => 727,  2533 => 725,  2530 => 723,  2523 => 722,  2514 => 718,  2508 => 716,  2506 => 715,  2499 => 714,  2494 => 709,  2492 => 708,  2485 => 707,  2483 => 706,  2481 => 705,  2474 => 704,  2468 => 700,  2466 => 699,  2462 => 698,  2460 => 697,  2457 => 695,  2455 => 694,  2451 => 693,  2449 => 692,  2447 => 691,  2445 => 690,  2438 => 689,  2432 => 686,  2427 => 683,  2425 => 682,  2423 => 681,  2421 => 680,  2407 => 679,  2404 => 678,  2400 => 676,  2398 => 675,  2396 => 673,  2394 => 671,  2379 => 670,  2377 => 669,  2374 => 668,  2371 => 667,  2368 => 666,  2365 => 665,  2362 => 664,  2359 => 663,  2356 => 662,  2353 => 661,  2350 => 660,  2347 => 659,  2344 => 658,  2342 => 657,  2335 => 656,  2330 => 653,  2323 => 652,  2318 => 649,  2311 => 648,  2306 => 645,  2304 => 644,  2297 => 642,  2287 => 633,  2270 => 630,  2266 => 629,  2262 => 628,  2259 => 627,  2242 => 626,  2236 => 622,  2232 => 621,  2228 => 620,  2220 => 615,  2214 => 612,  2209 => 611,  2202 => 610,  2190 => 606,  2188 => 605,  2184 => 604,  2182 => 603,  2175 => 602,  2170 => 599,  2168 => 579,  2161 => 595,  2147 => 594,  2139 => 593,  2135 => 591,  2130 => 590,  2126 => 589,  2122 => 588,  2118 => 587,  2114 => 586,  2109 => 585,  2106 => 584,  2089 => 583,  2085 => 582,  2065 => 581,  2062 => 580,  2059 => 579,  2052 => 578,  2047 => 553,  2043 => 575,  2036 => 571,  2030 => 568,  2026 => 567,  2021 => 565,  2017 => 563,  2015 => 562,  2010 => 560,  2004 => 557,  2000 => 556,  1996 => 554,  1993 => 553,  1986 => 552,  1981 => 536,  1975 => 547,  1970 => 545,  1965 => 544,  1963 => 543,  1959 => 542,  1953 => 539,  1949 => 537,  1946 => 536,  1939 => 535,  1934 => 521,  1928 => 531,  1910 => 524,  1907 => 523,  1904 => 522,  1901 => 521,  1894 => 520,  1889 => 517,  1884 => 514,  1875 => 511,  1870 => 509,  1867 => 508,  1863 => 507,  1859 => 506,  1853 => 503,  1848 => 501,  1840 => 495,  1838 => 494,  1835 => 493,  1826 => 490,  1822 => 489,  1819 => 488,  1816 => 487,  1813 => 486,  1811 => 485,  1808 => 484,  1805 => 483,  1802 => 482,  1798 => 481,  1793 => 479,  1786 => 478,  1781 => 475,  1776 => 472,  1765 => 470,  1761 => 469,  1757 => 468,  1751 => 465,  1746 => 463,  1738 => 457,  1736 => 456,  1733 => 455,  1717 => 453,  1715 => 452,  1712 => 450,  1709 => 449,  1707 => 448,  1704 => 447,  1701 => 446,  1698 => 445,  1681 => 444,  1676 => 442,  1669 => 441,  1664 => 438,  1661 => 436,  1659 => 435,  1652 => 434,  1645 => 430,  1636 => 427,  1632 => 426,  1611 => 425,  1607 => 424,  1603 => 422,  1599 => 420,  1589 => 416,  1579 => 415,  1576 => 414,  1572 => 413,  1569 => 412,  1567 => 411,  1563 => 410,  1558 => 409,  1551 => 408,  1546 => 405,  1542 => 403,  1525 => 401,  1522 => 400,  1505 => 399,  1502 => 398,  1499 => 397,  1495 => 394,  1489 => 392,  1487 => 391,  1483 => 390,  1475 => 389,  1471 => 387,  1467 => 384,  1461 => 382,  1458 => 381,  1453 => 379,  1448 => 377,  1446 => 376,  1438 => 375,  1434 => 373,  1431 => 372,  1429 => 371,  1426 => 370,  1419 => 369,  1413 => 365,  1396 => 363,  1379 => 362,  1376 => 361,  1370 => 359,  1363 => 358,  1357 => 354,  1351 => 351,  1350 => 350,  1349 => 349,  1348 => 348,  1344 => 347,  1340 => 346,  1337 => 344,  1331 => 341,  1330 => 340,  1329 => 339,  1328 => 338,  1324 => 337,  1322 => 336,  1320 => 335,  1313 => 334,  1308 => 331,  1306 => 330,  1299 => 329,  1292 => 326,  1290 => 325,  1283 => 324,  1277 => 321,  1273 => 320,  1269 => 319,  1263 => 318,  1260 => 317,  1257 => 316,  1254 => 315,  1251 => 314,  1248 => 313,  1245 => 312,  1242 => 311,  1239 => 310,  1237 => 309,  1234 => 308,  1231 => 307,  1229 => 306,  1222 => 305,  1217 => 302,  1215 => 301,  1208 => 300,  1203 => 297,  1199 => 296,  1197 => 295,  1190 => 294,  1183 => 289,  1180 => 288,  1172 => 287,  1167 => 285,  1165 => 284,  1163 => 283,  1160 => 281,  1158 => 280,  1151 => 279,  1144 => 274,  1142 => 273,  1140 => 271,  1139 => 270,  1138 => 269,  1137 => 268,  1132 => 266,  1130 => 265,  1128 => 264,  1125 => 262,  1123 => 261,  1116 => 260,  1111 => 257,  1107 => 256,  1105 => 255,  1098 => 254,  1092 => 250,  1090 => 249,  1088 => 248,  1086 => 247,  1084 => 246,  1080 => 245,  1078 => 244,  1075 => 242,  1073 => 241,  1066 => 240,  1058 => 234,  1056 => 233,  1054 => 232,  1047 => 231,  1042 => 228,  1038 => 226,  1032 => 223,  1029 => 222,  1027 => 221,  1025 => 220,  1019 => 217,  1016 => 216,  1013 => 215,  1011 => 214,  1008 => 213,  1001 => 212,  996 => 209,  992 => 208,  990 => 207,  988 => 206,  981 => 205,  972 => 199,  970 => 198,  965 => 196,  963 => 195,  957 => 193,  954 => 192,  951 => 191,  949 => 190,  946 => 189,  941 => 187,  936 => 186,  933 => 185,  931 => 184,  926 => 183,  922 => 181,  920 => 180,  903 => 179,  901 => 178,  897 => 174,  894 => 171,  893 => 170,  892 => 169,  890 => 168,  887 => 167,  884 => 165,  881 => 164,  878 => 162,  876 => 161,  874 => 160,  867 => 159,  861 => 139,  854 => 152,  851 => 151,  848 => 150,  845 => 149,  842 => 148,  839 => 147,  836 => 146,  833 => 145,  830 => 144,  827 => 143,  824 => 142,  822 => 141,  819 => 140,  816 => 139,  814 => 138,  807 => 137,  799 => 133,  794 => 132,  791 => 131,  788 => 130,  781 => 129,  773 => 125,  768 => 124,  765 => 123,  762 => 122,  755 => 121,  748 => 113,  746 => 112,  742 => 110,  740 => 109,  738 => 108,  736 => 106,  734 => 105,  732 => 104,  730 => 102,  728 => 101,  726 => 100,  715 => 99,  708 => 98,  703 => 93,  699 => 92,  697 => 91,  690 => 90,  683 => 87,  677 => 84,  672 => 83,  670 => 82,  668 => 81,  661 => 80,  656 => 77,  652 => 76,  645 => 75,  640 => 72,  637 => 71,  634 => 70,  631 => 69,  629 => 68,  622 => 67,  614 => 64,  611 => 63,  608 => 62,  605 => 61,  602 => 60,  599 => 59,  596 => 58,  589 => 57,  584 => 1640,  582 => 1626,  580 => 1586,  577 => 1585,  575 => 1575,  572 => 1574,  570 => 1528,  568 => 1482,  566 => 1424,  564 => 1410,  561 => 1409,  559 => 1404,  556 => 1403,  554 => 1390,  551 => 1389,  549 => 1384,  546 => 1383,  544 => 1367,  541 => 1366,  539 => 1354,  536 => 1353,  534 => 1340,  531 => 1339,  529 => 1330,  526 => 1329,  524 => 1322,  521 => 1321,  519 => 1291,  516 => 1290,  514 => 1283,  512 => 1242,  510 => 1236,  508 => 1230,  506 => 1213,  503 => 1212,  501 => 1209,  499 => 1195,  497 => 1177,  494 => 1176,  492 => 1171,  489 => 1170,  487 => 1165,  484 => 1164,  482 => 1155,  479 => 1154,  477 => 1147,  474 => 1146,  472 => 1139,  470 => 1129,  468 => 1119,  466 => 1114,  463 => 1113,  461 => 1109,  458 => 1108,  456 => 1080,  453 => 1079,  451 => 1054,  448 => 1053,  446 => 1034,  443 => 1033,  441 => 1017,  438 => 1016,  436 => 984,  433 => 983,  431 => 959,  428 => 958,  426 => 950,  423 => 949,  421 => 913,  418 => 912,  416 => 889,  413 => 887,  411 => 835,  408 => 834,  406 => 797,  403 => 796,  400 => 794,  398 => 779,  395 => 778,  393 => 722,  390 => 721,  388 => 714,  385 => 713,  382 => 711,  380 => 704,  377 => 703,  375 => 689,  372 => 688,  370 => 656,  367 => 655,  365 => 652,  362 => 651,  360 => 648,  357 => 647,  355 => 642,  352 => 641,  349 => 639,  347 => 610,  345 => 602,  343 => 578,  340 => 577,  338 => 552,  335 => 551,  333 => 535,  330 => 534,  328 => 520,  325 => 519,  323 => 478,  320 => 477,  318 => 441,  315 => 440,  313 => 434,  310 => 433,  308 => 408,  305 => 407,  303 => 369,  300 => 368,  298 => 358,  295 => 357,  293 => 334,  290 => 333,  288 => 329,  285 => 328,  283 => 324,  280 => 323,  278 => 305,  275 => 304,  273 => 300,  271 => 294,  269 => 279,  266 => 278,  264 => 260,  262 => 254,  260 => 240,  257 => 239,  255 => 231,  252 => 230,  250 => 212,  247 => 211,  245 => 205,  242 => 204,  240 => 159,  237 => 156,  235 => 137,  232 => 136,  230 => 129,  227 => 128,  225 => 121,  222 => 116,  220 => 98,  217 => 97,  215 => 90,  213 => 80,  211 => 75,  209 => 67,  207 => 57,  204 => 56,  201 => 54,  198 => 52,  195 => 46,  192 => 34,  189 => 25,  75 => 51,  68 => 50,  61 => 49,  54 => 48,  35 => 45,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", "C:\\wamp64\\www\\prestashop9\\src\\PrestaShopBundle\\Resources\\views\\Admin\\TwigTemplateForm\\prestashop_ui_kit_base.html.twig");
    }
}
