<?php
 /*
 Plugin Name: Perfume
 Plugin URI: https://github.com/DrunkNoob/Portfolio/tree/master/Web/WordPress/perfume
 Description: Небольшой плагин для сайта "perfumedia.ru", добавляет новый тип записей и несколько таксономий к нему.
 Version: 1.0
 Author: Danil Yakovenko
 Author URI: http://fefaweb.ru/
 */


// Здесь код плагина
function add_new_taxonomies() {
/* создаем функцию с новой таксономией - "Парфюмеры"*/
	register_taxonomy('perfumer',
		array('perfume'),
		array(
			'hierarchical' => false,
			/* true - по типу рубрик, false - по типу меток,
			по умолчанию - false */
			'labels' => array(
				/* ярлыки, нужные при создании UI, можно не писать ничего, тогда будут использованы
				ярлыки по умолчанию */
				'name' => 'Парфюмеры',
				'singular_name' => 'Парфюмер',
				'search_items' =>  'Найти парфюмера',
				'popular_items' => 'Популярные парфюмеры',
				'all_items' => 'Все парфюмеры',
				'parent_item' => null,
				'parent_item_colon' => null,
				'edit_item' => 'Редактировать',
				'update_item' => 'Обновить',
				'add_new_item' => 'Добавить парфюмера',
				'new_item_name' => 'Имя парфюмера',

				'add_or_remove_items' => 'Добавить или удалить парфюмера',
				'choose_from_most_used' => 'Выбрать из наиболее часто используемых парфюмеров',
				'menu_name' => 'Парфюмеры'
			),
			'public' => true,
			/* каждый может использовать таксономию, либо
			только администраторы, по умолчанию - true */
			'show_in_nav_menus' => true,
			/* добавить на страницу создания меню */
			'show_ui' => true,
			/* добавить интерфейс создания и редактирования */
			'show_tagcloud' => true,
			/* нужно ли разрешить облако тегов для этой таксономии */
			'update_count_callback' => '_update_post_term_count',
			/* callback-функция для обновления счетчика $object_type */
			'query_var' => true,
			/* разрешено ли использование query_var, также можно
			указать строку, которая будет использоваться в качестве
			него, по умолчанию - имя таксономии */
			'rewrite' => array(
			/* настройки URL пермалинков */
				'slug' => 'perfumer', // ярлык
				'hierarchical' => false // разрешить вложенность

			),
		)
	);

/* создаем функцию с новой таксономией - "Ноты"*/
	register_taxonomy('notes',
		array('perfume'),
		array(
			'hierarchical' => true,
			/* true - по типу рубрик, false - по типу меток,
			по умолчанию - false */
			'labels' => array(
				/* ярлыки, нужные при создании UI, можно не писать ничего, тогда будут использованы
				ярлыки по умолчанию */
				'name' => 'Ноты',
				'singular_name' => 'Нота',
				'search_items' =>  'Найти ноту',
				'popular_items' => 'Популярные ноты',
				'all_items' => 'Все ноты',
				'parent_item' => null,
				'parent_item_colon' => null,
				'edit_item' => 'Редактировать',
				'update_item' => 'Обновить',
				'add_new_item' => 'Добавить ноту',
				'new_item_name' => 'Имя ноты',

				'add_or_remove_items' => 'Добавить или удалить ноту',
				'choose_from_most_used' => 'Выбрать из наиболее часто используемых нот',
				'menu_name' => 'Ноты'
			),
			'public' => true,
			/* каждый может использовать таксономию, либо
			только администраторы, по умолчанию - true */
			'show_in_nav_menus' => true,
			/* добавить на страницу создания меню */
			'show_ui' => true,
			/* добавить интерфейс создания и редактирования */
			'show_tagcloud' => true,
			/* нужно ли разрешить облако тегов для этой таксономии */
			'update_count_callback' => '_update_post_term_count',
			/* callback-функция для обновления счетчика $object_type */
			'query_var' => true,
			/* разрешено ли использование query_var, также можно
			указать строку, которая будет использоваться в качестве
			него, по умолчанию - имя таксономии */
			'rewrite' => array(
			/* настройки URL пермалинков */
				'slug' => 'notes', // ярлык
				'hierarchical' => true // разрешить вложенность

			),
		)
	);

/* создаем функцию с новой таксономией - "Дизайнеры"*/
	register_taxonomy('designers',
		array('perfume'),
		array(
			'hierarchical' => false,
			/* true - по типу рубрик, false - по типу меток,
			по умолчанию - false */
			'labels' => array(
				/* ярлыки, нужные при создании UI, можно не писать ничего, тогда будут использованы
				ярлыки по умолчанию */
				'name' => 'Дизайнеры',
				'singular_name' => 'Дизайнер',
				'search_items' =>  'Найти дизайнера',
				'popular_items' => 'Популярные дизайнеры',
				'all_items' => 'Все дизайнеры',
				'parent_item' => null,
				'parent_item_colon' => null,
				'edit_item' => 'Редактировать',
				'update_item' => 'Обновить',
				'add_new_item' => 'Добавить дизайнера',
				'new_item_name' => 'Имя дизайнера',

				'add_or_remove_items' => 'Добавить или удалить дизайнера',
				'choose_from_most_used' => 'Выбрать из наиболее часто используемых дизайнеров',
				'menu_name' => 'Дизайнеры'
			),
			'public' => true,
			/* каждый может использовать таксономию, либо
			только администраторы, по умолчанию - true */
			'show_in_nav_menus' => true,
			/* добавить на страницу создания меню */
			'show_ui' => true,
			/* добавить интерфейс создания и редактирования */
			'show_tagcloud' => true,
			/* нужно ли разрешить облако тегов для этой таксономии */
			'update_count_callback' => '_update_post_term_count',
			/* callback-функция для обновления счетчика $object_type */
			'query_var' => true,
			/* разрешено ли использование query_var, также можно
			указать строку, которая будет использоваться в качестве
			него, по умолчанию - имя таксономии */
			'rewrite' => array(
			/* настройки URL пермалинков */
				'designers' => 'notes', // ярлык
				'hierarchical' => true // разрешить вложенность

			),
		)
	);
/* создаем функцию с новой таксономией - "Страна", хотя для страны больше подойдет метабокс*/
	register_taxonomy('country',
		array('perfume'),
		array(
			'hierarchical' => false,
			/* true - по типу рубрик, false - по типу меток,
			по умолчанию - false */
			'labels' => array(
				/* ярлыки, нужные при создании UI, можно не писать ничего, тогда будут использованы
				ярлыки по умолчанию */
				'name' => 'Страны',
				'singular_name' => 'Страна',
				'search_items' =>  'Найти страну',
				'popular_items' => 'Популярные страны',
				'all_items' => 'Все страны',
				'parent_item' => null,
				'parent_item_colon' => null,
				'edit_item' => 'Редактировать',
				'update_item' => 'Обновить',
				'add_new_item' => 'Добавить страну',
				'new_item_name' => 'Имя страны',

				'add_or_remove_items' => 'Добавить или удалить страну',
				'choose_from_most_used' => 'Выбрать из наиболее часто используемых стран',
				'menu_name' => 'Страны'
			),
			'public' => true,
			/* каждый может использовать таксономию, либо
			только администраторы, по умолчанию - true */
			'show_in_nav_menus' => true,
			/* добавить на страницу создания меню */
			'show_ui' => true,
			/* добавить интерфейс создания и редактирования */
			'show_tagcloud' => true,
			/* нужно ли разрешить облако тегов для этой таксономии */
			'update_count_callback' => '_update_post_term_count',
			/* callback-функция для обновления счетчика $object_type */
			'query_var' => true,
			/* разрешено ли использование query_var, также можно
			указать строку, которая будет использоваться в качестве
			него, по умолчанию - имя таксономии */
			'rewrite' => array(
			/* настройки URL пермалинков */
				'slug' => 'country', // ярлык
				'hierarchical' => true // разрешить вложенность

			),
		)
	);

}
add_action( 'init', 'add_new_taxonomies', 0 );




add_action( 'init', 'true_register_post_type_init' ); // Использовать функцию только внутри хука init

function true_register_post_type_init() {
	$labels = array(
		'name' => 'Ароматы',
		'singular_name' => 'Аромат', // админ панель Добавить->Аромат
		'add_new' => 'Добавить аромат',
		'add_new_item' => 'Добавить новый аромат', // заголовок тега <title>
		'edit_item' => 'Редактировать аромат',
		'new_item' => 'Новый аромат',
		'all_items' => 'Все ароматы',
		'view_item' => 'Просмотр аромата на сайте',
		'search_items' => 'Искать аромат',
		'not_found' =>  'Аромат не найден.',
		'not_found_in_trash' => 'В корзине нет ароматов.',
		'menu_name' => 'Ароматы' // ссылка в меню в админке
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'show_ui' => true, // показывать интерфейс в админке
		'has_archive' => true,
		//'menu_icon' => get_stylesheet_directory_uri() .'/wp-content/plugins/perfume/perfume_icon.png', // иконка в меню
		'menu_position' => 20, // порядок в меню
		'supports' => array( 'title', 'editor', 'comments', 'thumbnail')
	);
	register_post_type('perfume', $args);
}

add_filter( 'post_updated_messages', 'true_post_type_messages' );

function true_post_type_messages( $messages ) {
	global $post, $post_ID;

	$messages['perfume'] = array( // perfume - название созданного типа записей
		0 => '', // Данный индекс не используется.
		1 => sprintf( 'Аромат обновлён. <a href="%s">Просмотр</a>', esc_url( get_permalink($post_ID) ) ),
		2 => 'Параметр обновлён.',
		3 => 'Параметр удалён.',
		4 => 'Аромат обновлён',
		5 => isset($_GET['revision']) ? sprintf( 'Функция восстановлена из редакции: %s', wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
		6 => sprintf( 'Аромат опубликован на сайте. <a href="%s">Просмотр</a>', esc_url( get_permalink($post_ID) ) ),
		7 => 'Аромат сохранён.',
		8 => sprintf( 'Отправлено на проверку. <a target="_blank" href="%s">Просмотр</a>', esc_url( add_query_arg( 'preview', 'true', get_permalink($post_ID) ) ) ),
		9 => sprintf( 'Запланировано на публикацию: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Просмотр</a>', date_i18n( __( 'M j, Y @ G:i' ), strtotime( $post->post_date ) ), esc_url( get_permalink($post_ID) ) ),
		10 => sprintf( 'Черновик обновлён. <a target="_blank" href="%s">Просмотр</a>', esc_url( add_query_arg( 'preview', 'true', get_permalink($post_ID) ) ) ),
	);

	return $messages;
}

function true_post_type_help_tab() {

	$screen = get_current_screen();

	// Прекращаем выполнение функции, если находимся на страницах других типов постов
	if ( 'perfume' != $screen->post_type )
		return;

	// Массив параметров для первой вкладки
	$args = array(
		'id'      => 'tab_1',
		'title'   => 'Обзор',
		'content' => '<h3>Обзор</h3><p>Содержимое первой вкладки.</p>'
	);

	// Добавляем вкладку
	$screen->add_help_tab( $args );

	// Массив параметров для второй вкладки
	$args = array(
		'id'      => 'tab_2',
		'title'   => 'Доступные действия',
		'content' => '<h3>Доступные действия с типом постов &laquo;' . $screen->post_type . '&raquo;</h3><p>Содержимое второй вкладки</p>'
	);

	// Добавляем вторую вкладку
	$screen->add_help_tab( $args );

}

add_action('admin_head', 'true_post_type_help_tab');
