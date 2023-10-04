<?php

class LibraryRegistration
{
    private string $postType = 'library';
    private string $taxonomy = 'libraryCategories';

    public function __construct()
    {
        add_action('init', array($this, 'registration_post_type_library'));
        add_action('init', array($this, 'registration_taxonomy_library_categories'));
    }

    public function registration_post_type_library(): void
    {
        $labels = array(
            'name' => 'Бібліотека',
            'singular_name' => 'Бібліотека',
            'menu_name' => 'Бібліотека',
            'all_items' => 'Усі записи',
            'add_new' => 'Додати новий',
            'add_new_item' => 'Додати новий запис',
            'edit_item' => 'Редагувати запис',
            'new_item' => 'Новий запис',
            'view_item' => 'Переглянути запис',
            'search_items' => 'Пошук записів',
            'not_found' => 'Записи не знайдено',
            'not_found_in_trash' => 'Записи не знайдено в кошику',
            'parent_item_colon' => 'Батьківський запис:',
        );

        $args = array(
            'labels' => $labels,
            'public' => true,
            'has_archive' => true,
            'publicly_queryable' => true,
            'query_var' => true,
            'rewrite' => array('slug' => 'library'),
            'capability_type' => 'post',
            'menu_icon' => 'dashicons-book',
            'hierarchical' => false,
            'menu_position' => 5,
            'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'comments'),
        );

        register_post_type($this->postType, $args);
    }

    public function registration_taxonomy_library_categories(): void
    {
        $labels = array(
            'name' => 'Категорії бібліотеки',
            'singular_name' => 'Категорія бібліотеки',
            'search_items' => 'Пошук категорій',
            'all_items' => 'Усі категорії',
            'parent_item' => 'Батьківська категорія',
            'parent_item_colon' => 'Батьківська категорія:',
            'edit_item' => 'Редагувати категорію',
            'update_item' => 'Оновити категорію',
            'add_new_item' => 'Додати нову категорію',
            'new_item_name' => 'Нова категорія',
            'menu_name' => 'Категорії бібліотеки',
        );

        $args = array(
            'hierarchical' => true,
            'labels' => $labels,
            'show_ui' => true,
            'show_admin_column' => true,
            'query_var' => true,
            'rewrite' => array('slug' => 'library-category'),
        );

        register_taxonomy($this->taxonomy, $this->postType, $args);
    }
}

$libraryRegistration = new LibraryRegistration();





