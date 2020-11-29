# Project Log

--------------------------------------

## Подготовка.

---------------------------------------

- В папку `test5.local` установлен Wordpress.
- Создан гит-репозиторий
- Создана стартовая тема *Phpknight* на сайте [underscores.me](https://underscores.me/)
- Тема установлена в папку с Wordpress.
- Заменен скриншот и очищен дефолтный *style.css* 
- Тема *Phpknight* активирована в консоли сайта.

---------------------------------------

### Установка плагинов.

------------------------------------------------

> Эти плагины потребуются как на стади разработки, так и в процессе работы темы (список плагинов будет продублирован в README.md).
> 

- **Advanced Custom Fields** [ACF](http://test5.local/wp-admin/plugin-install.php?tab=plugin-information&plugin=advanced-custom-fields&TB_iframe=true&width=600&height=550) - необходим и при разработке, и в процессе работы сайта.
- **Cyr-To-Lat** - необходим и при разработке, и в процессе работы сайта. Конвертирует кириллические адреса в транслит.
- **Show Current Template** - необходим **ТОЛЬКО ПРИ РАЗРАБОТКЕ**! - отображает текущий шаблон.
- **Duplicate Post, Page and Any Custom Post** - необходим **ТОЛЬКО ПРИ РАЗРАБОТКЕ**!

## ПОДКЛЮЧЕНИЕ СКРИПТОВ И БИБЛИОТЕК.

---------------------------------------

В файле *functions.php* подключены все используемые скрипты js , css, и шрифты:

```phpregexp
<?php
/**
 * Enqueue scripts and styles.
 */
function php_knight_scripts() {
	wp_enqueue_style( 'php-knight-style', get_stylesheet_uri(), array(), _S_VERSION );
    wp_enqueue_style( 'php-knight-bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css');
    wp_enqueue_style( 'php-knight-fontawesome-css', 'https://use.fontawesome.com/releases/v5.7.0/css/all.css' );
    wp_enqueue_style( 'php-knight-baguetteBox-css', get_template_directory_uri() . '/assets/css/baguetteBox.css' );
    wp_enqueue_style( 'php-knight-style-css', get_template_directory_uri() . '/assets/css/style.css' );

    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', 'https://code.jquery.com/jquery-3.5.1.js');
    wp_enqueue_script( 'jquery' );

    wp_enqueue_script( 'php-knight-popper-js', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js', array(), '', true );
    wp_enqueue_script( 'php-knight-bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js', array(), '', true );
    wp_enqueue_script( 'php-knight-baguetteBox-js', get_template_directory_uri() . '/assets/js/baguetteBox.min.js', array(), '', true );
    wp_enqueue_script( 'php-knight-main-js', get_template_directory_uri() . '/assets/js/main.js', array(), '', true );
    wp_enqueue_script( 'php-knight-phone-js', get_template_directory_uri() . '/assets/js/phone.js', array(), '', true );



	wp_style_add_data( 'php-knight-style', 'rtl', 'replace' );

}
add_action( 'wp_enqueue_scripts', 'php_knight_scripts' );
```
 В файле *front-page.php* после открывающего тега <body> добавлена функция `<?php wp_head() ?>`, а перед закрывающим - `<?php wp_footer() ?>`.