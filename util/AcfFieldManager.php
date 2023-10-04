<?php

class AcfFieldManager
{
    public function __construct() {
        add_action('acf/init', array($this, 'register_custom_acf_field_group'));

    }


    function register_custom_acf_field_group(): void
    {
        acf_add_local_field_group(array(
            'key' => 'group_651c0e055d36f',
            'title' => 'Test',
            'fields' => array(
                array(
                    'key' => 'field_651c0e138c21f',
                    'label' => 'Test_title',
                    'name' => 'test_title',
                    'type' => 'text',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'page',
                        'operator' => '==',
                        'value' => '15',
                    ),
                ),
            ),
            'menu_order' => 0,
            'position' => 'normal',
            'style' => 'default',
            'label_placement' => 'top',
            'instruction_placement' => 'label',
            'hide_on_screen' => '',
            'active' => true,
            'description' => '',
        ));
    }





}
$acf_hooks_manager = new AcfFieldManager();