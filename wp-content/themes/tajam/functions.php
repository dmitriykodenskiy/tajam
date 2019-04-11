<?php
// Generate menu
register_nav_menus( array(
    'header-menu' => __( 'Header menu' ),
    'header-menu-second' => __( 'Header menu 2' ),
    'footer-menu' => __( 'Footer' )
) );
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class($classes, $item){
    $classes = array("nav-item");
    return $classes;
}
add_filter( 'nav_menu_link_attributes', 'add_menu_atts', 10, 3 );
function add_menu_atts( $atts, $item, $args ) {
    $atts['class'] = 'nav-item-link';
//    $atts['rel'] = 'nofollow';
    if ( $item->current ) {
        $atts['class'] = "nav-item-link__active";
    }
    return $atts;
}
add_filter( 'walker_nav_menu_start_el', 'filter_function_name_2880', 10, 4 );
function filter_function_name_2880( $item_output, $item, $depth, $args ){
	$match_class = "nav-item-link__active";
    if(preg_match('/' . $match_class . '/', $item_output)) {
        preg_match('/\">(.*)<\//', $item_output, $matches);
        $item_output = '<span class="' . $match_class . '">' . $matches[1] . '</span>';
    }
	return $item_output;
}
add_filter('nav_menu_item_id', '__return_false');
//remove indentation
// remove_filter('the_content', 'wpautop');
// SHOW THUMBNAILS
if (function_exists('add_theme_support')) {
    add_theme_support('post-thumbnails');
}
// remove admin-bar on front-page
show_admin_bar(true);
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
function my_function_admin_bar() { return false;}
// remove unnesusary wp-styles
add_filter('show_admin_bar', 'my_function_admin_bar');
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
remove_action('wp_head', 'wp_oembed_add_discovery_links' );
remove_action( 'wp_head', 'wp_resource_hints', 2 );

//remove rest api
function chuck_disable_rest_endpoints( $access ) {
    if( ! is_user_logged_in() ) {
          return new WP_Error( 'rest_cannot_access', __( 'Only logged users are able to call REST API.', 'disable-json-api' ), array( 'status' => rest_authorization_required_code() ) );
    }return $access;                                                            
  }                                                
  add_filter( 'rest_authentication_errors', 'chuck_disable_rest_endpoints' );
  
// H1 for category.php
add_action('admin_init', 'category_custom_fields', 1);
add_action( 'create_category', 'category_custom_fields_save');
add_action( 'category_add_form_fields', 'category_custom_fields_form');
function category_custom_fields()
{
    add_action('edit_category_form_fields', 'category_custom_fields_form');
    add_action('edited_category', 'category_custom_fields_save');
}
function category_custom_fields_form($tag)
{
    $t_id = $tag->term_id;
    $cat_meta = get_option("category_$t_id");
    ?>
    <tr class="form-field">
        <th scope="row" valign="top"><label for="extra1"><?php _e('H1 для категории'); ?></label></th>
        <td>
            <input type="text" name="Cat_meta[cat_h1]" id="Cat_meta[cat_h1]" size="25" style="width:60%;" value="<?php echo
            $cat_meta['cat_h1'] ? $cat_meta['cat_h1'] : ''; ?>"><br />
            <span class="description"><?php _e('H1 категории'); ?></span>
        </td>
    </tr>
    <?php
}
function category_custom_fields_save($term_id)
{
    if (isset($_POST['Cat_meta'])) {
        $t_id = $term_id;
        $cat_meta = get_option("category_$t_id");
        $cat_keys = array_keys($_POST['Cat_meta']);
        foreach ($cat_keys as $key) {
            if (isset($_POST['Cat_meta'][$key])) {
                $cat_meta[$key] = $_POST['Cat_meta'][$key];
            }
        }
        update_option("category_$t_id", $cat_meta);
    }
}
// H1 for tag.php
add_action('admin_init', 'tag_custom_fields', 1);
function tag_custom_fields()
{
    add_action('edit_tag_form_fields', 'tag_custom_fields_form');
    add_action('edited_post_tag', 'tag_custom_fields_save');
    add_action( 'create_post_tag', 'tag_custom_fields_save');
    add_action( 'post_tag_add_form_fields', 'tag_custom_fields_form');
}
function tag_custom_fields_form($tag)
{
    $t_id = $tag->term_id;
    $cat_meta = get_option("post_tag_$t_id");
    ?>
    <tr class="form-field">
        <th scope="row" valign="top"><label for="extra1"><?php _e('H1 для tag.php'); ?></label></th>
        <td>
            <input type="text" name="Cat_meta[h1_for_tag]" id="Cat_meta[h1_for_tag]" size="25" style="width:60%;" value="<?php echo
            $cat_meta['h1_for_tag'] ? $cat_meta['h1_for_tag'] : ''; ?>"><br />
            <span class="description"><?php _e('Title'); echo ' H1'; ?></span>
        </td>
    </tr>
    <?php
}
function tag_custom_fields_save($term_id)
{
    if (isset($_POST['Cat_meta'])) {
        $t_id = $term_id;
        $cat_meta = get_option("post_tag_$t_id");
        $cat_keys = array_keys($_POST['Cat_meta']);
        foreach ($cat_keys as $key) {
            if (isset($_POST['Cat_meta'][$key])) {
                $cat_meta[$key] = $_POST['Cat_meta'][$key];
            }
        }
        update_option("post_tag_$t_id", $cat_meta);
    }
}
// Вывод произвольных игр. В код страницы вставить код: <!--@@@\d+-->
function insert_random_game($content){
    $pattern = '/<!--@@@\d+-->/miU';
    preg_match_all($pattern, $content, $matches);
    $size=count($matches[0]);
    $second_query = new WP_Query();
    $second_query->query( array('orderby' => 'rand'/*,'category__not_in'=>12*/) );
    $array[]=0;
    $m=0;
    while ( $second_query->have_posts() ) {
        $second_query->the_post();
        $array[$m]= get_post( $post->ID );
        $m++;
    }
    $len = count($array);
    $k=0;
    for ($i = 0; $i < $size; $i++) {
        $game_line_part = '<ul class="wp-spisok-igr">';
        $result = substr($matches[0][$i], 7, -3) * 1;
        $result = $result +$k;
        for ($k; $k < $result && $k<$len; $k++) {
            $game_line_part =  $game_line_part . '<li><a href="'. get_permalink($array[$k]->ID) .'" title="'.get_the_title($array[$k]->ID).'">'.
                get_the_post_thumbnail($array[$k]->ID).'<b>'.get_the_title($array[$k]->ID).'</b></a></li>';
        }
        $game_line_part = $game_line_part . ' </ul>';
        $content = preg_replace($pattern, $game_line_part, $content,1);
    }
    wp_reset_postdata();
    return $content;
}
// подключаем функцию активации мета блока (my_extra_fields) произвольных полей
add_action('add_meta_boxes', 'my_extra_fields', 1);
function my_extra_fields() {
    add_meta_box( 'extra_fields', 'Дополнительные поля', 'extra_fields_box_func', 'post', 'normal', 'high'  );
}
// код блока
function extra_fields_box_func( $post ){
	?>
    <p><label><input type="text" name="extra[h1]" value="<?php echo get_post_meta($post->ID, 'h1', 1); ?>" style="width:50%" /> h1 записи </label></p>

    <p>Универсальный iframe игры (выводится и на мобильном и на десктопном экране):
        <textarea type="text" name="extra[mob_iframe]" style="width:100%;height:50px;"><?php echo get_post_meta($post->ID, 'mob_iframe', 1); ?></textarea>
    </p>
    <p>iframe игры только для десктопной версии (на мобильном сработает заглушка):
        <textarea type="text" name="extra[iframe]" style="width:100%;height:50px;"><?php echo get_post_meta($post->ID, 'iframe', 1); ?></textarea>
    </p>
    <p>Если нет iframe игры, то сюда вписываем название скриншота игрушки, например так - <b>aztec-gold-slot-game-screenshot.png</b>
        <br>скриншот заранее загрузить через Медиафайлы:
        <textarea type="text" name="extra[picture]" style="width:100%;height:50px;"><?php echo get_post_meta($post->ID, 'picture', 1); ?></textarea>
    </p>

    <input type="hidden" name="extra_fields_nonce" value="<?php echo wp_create_nonce(__FILE__); ?>" />
	<?php
}
// включаем обновление полей при сохранении
add_action('save_post', 'my_extra_fields_update', 0);
/* Сохраняем данные, при сохранении поста */
function my_extra_fields_update( $post_id ){
    if ( ! wp_verify_nonce($_POST['extra_fields_nonce'], __FILE__) ) return false; // проверка
    if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE  ) return false; // выходим если это автосохранение
    if ( !current_user_can('edit_post', $post_id) ) return false; // выходим если юзер не имеет право редактировать запись
    if( !isset($_POST['extra']) ) return false; // выходим если данных нет
    // Все ОК! Теперь, нужно сохранить/удалить данные
    $_POST['extra'] = array_map('trim', $_POST['extra']); // чистим все данные от пробелов по краям
    foreach( $_POST['extra'] as $key=>$value ){
        if( empty($value) ){
            delete_post_meta($post_id, $key); // удаляем поле если значение пустое
            continue;
        }
        update_post_meta($post_id, $key, $value); // add_post_meta() работает автоматически
    }
    return $post_id;
}

// URL toLowerCase

if ( $_SERVER['REQUEST_URI'] != strtolower( $_SERVER['REQUEST_URI']) ) {
    header('Location: //'.$_SERVER['HTTP_HOST'] . strtolower($_SERVER['REQUEST_URI']), true, 301);
    exit();
}

//style and script
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );
function theme_name_scripts() {
    wp_enqueue_style( 'style-name', get_stylesheet_uri() );
}
