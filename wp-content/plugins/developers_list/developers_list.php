<?php
/*
Plugin Name: Developers List
Description: List of Developers and Managers
Version: 0.0.1
Author: waldemar
*/

// Текущая директория
$currentDir = dirname(__FILE__);
define('DEVELOPERS_LIST_DIR', $currentDir);

// Версия плагина
define('DEVELOPERS_LIST_VERSION', '0.0.1');

// Название плагина
$pluginName = plugin_basename(DEVELOPERS_LIST_DIR);

// URI путь до директории с плагином
$pluginUrl = trailingslashit(WP_PLUGIN_URL . '/' . $pluginName);

// Путь для CSS, JS скриптов и картинок
$assetsUrl = $pluginUrl . '/assets';

register_activation_hook(__FILE__, 'myplug_set_options');
register_deactivation_hook(__FILE__, 'myplug_unset_options');


// в этой переменной будет содержаться имя таблицы с настройкам написанного нами плагина wordpress
$myplugin_list_table = myplugin_get_list_table(); # в этой переменной будет содержаться имя таблицы с настройкам написанного нами плагина wordpress
function myplugin_get_list_table() {
    global $wpdb; # класс wordpress для работы с БД
    return $wpdb->prefix . "myplugin_list"; # создаём имя таблицы настроек плагина
}

$myplugin_category_table = myplugin_get_category_table();
function myplugin_get_category_table() {
    global $wpdb; # класс wordpress для работы с БД
    return $wpdb->prefix . "myplugin_category"; # создаём имя таблицы настроек плагина
}

function myplugin_set_options() {
    global $wpdb;
    add_option('myplug_modify_title', 0); # будет ли плагин по умолчанию обрабатывать заголовки записей. 0 - нет
    add_option('myplug_modify_content', 1); # --||-- тело записей. 1 - да

    $myplugin_list_table = myplugin_get_list_table(); # вызов функции повторяется, т. к. данные действия происходят на этапе установки плагина, когда вызов в теле еще не может быть осуществлён
    $myplugin_category_table = myplugin_get_category_table();
    $charset_collate = ''; # кодировка БД
    if ( version_compare(mysql_get_server_info(), '4.1.0', '>=') )
        $charset_collate = "DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci"; # устанавливаем уникод

    if($wpdb->get_var("SHOW TABLES LIKE '$myplugin_list_table'") != $myplugin_list_table) { # если таблица настроек плагина еще не создана - создаём
        $sql = "CREATE TABLE `" . $myplugin_list_table . "` (
            `id` INT NOT NULL AUTO_INCREMENT,
            `name` VARCHAR(255) NOT NULL default '',
            `image` VARCHAR(255) NOT NULL default '',
            `position` VARCHAR(255) NOT NULL default '',
            `number` INT NOT NULL ,
            `category_id` INT NOT NULL,
            UNIQUE KEY id (id)
        )$charset_collate";
        require_once(ABSPATH . 'wp-admin/includes/upgrade.php'); # обращение к функциям wordpress для
        dbDelta($sql); # работы с БД. создаём новую таблицу
    }

    if($wpdb->get_var("SHOW TABLES LIKE '$myplugin_category_table'") != $myplugin_category_table) { # если таблица настроек плагина еще не создана - создаём
        $sql = "CREATE TABLE `" . $myplugin_category_table . "` (
            `id` INT NOT NULL AUTO_INCREMENT,
            `name` VARCHAR(255) NOT NULL default '',
            UNIQUE KEY id (id)
        )$charset_collate";
        require_once(ABSPATH . 'wp-admin/includes/upgrade.php'); # обращение к функциям wordpress для
        dbDelta($sql); # работы с БД. создаём новую таблицу
    }
}

function myplugin_unset_options () {
    global $wpdb, $myplugin_category_table, $myplugin_list_table;
    delete_option('myplug_modify_title');
    delete_option('myplug_modify_content');
    $sql = "DROP TABLE $myplugin_category_table";
    $wpdb->query($sql);
    $sql = "DROP TABLE $myplugin_list_table";
    $wpdb->query($sql);
}

function myplugin_admin_page() {
    add_menu_page('Developers List', 'Developers List', 8, __FILE__, 'myplugin_options_page');
}
add_action('admin_menu', 'myplugin_admin_page');

function myplugin_options_page() {      //Функция создания и обработки страницы настроек плагина
    global $wpdb, $myplugin_list_table, $myplugin_category_table;
    $myplugin_options = array(          //Создаём массив с настройками плагина
        'myplug_modify_name',
    );
    $cmd = $_POST['cmd'];               //Обработка пользовательского ввода
    foreach ($myplugin_options as $myplugin_opt) {
        $$myplugin_opt = get_option($myplugin_opt);
    }
    if ($cmd == "del_prefs") {          //Если нажато "удалить фразы" - очищаем таблицу настроек плагина
        $sql = "TRUNCATE TABLE $myplugin_category_table";
        $wpdb->query( $sql );
        ?>
        <div class="updated"><p><strong> <?php echo __('All phrases are removed from the database','example_plugin'); ?></strong></p></div> /* Сообщаем пользвателю об успешной очистке. */
    <?php
    }
    if ($cmd == "add_prefs" && $_POST['prefs_base']) { //Если введены новые фразы в соотв. поле - обработаем их
        $lines = explode("\n", $_POST['prefs_base']); //Ввод разбивается на строки и кладётся в массив, разделитель - перевод строки
        foreach($lines as $line){   //Перебираем массив со строками
            $line = trim($line);    //Обрезка каждой строки от переводов
            if (!$line) continue;   //Если строка отстутствует - переходим к следующей итерации
            list($title, $body) = explode("|", $line);  //Разделение строки на две подстроки
            //Кладём подстроки в таблицу плагина.
            $sql = "INSERT INTO $myplugin_prefs_table (title, body) VALUES('$title','$body')";
            $wpdb->query($sql);
        }
        ?>
        <div class="updated"><p><strong> <?php echo __('Phrases added to the database','example_plugin'); ?></strong></p></div> /*Сообщаем пользователю об успешной обработке*/
    <?php
    }
    if ($cmd == "myplugin_save_opt") { //Обработка нажатия "Сохранить настройки"
        foreach ($myplugin_options as $myplugin_opt) {  //Перебор массива с настройками
            $$myplugin_opt = $_POST[$myplugin_opt]; //Каждому элементу массива присваиваем введённое пользователем занчение
        }

        foreach ($myplugin_options as $myplugin_opt) { //Обновляем настройки плагина в таблице настроек wordpress
            update_option($myplugin_opt, $$myplugin_opt);
        }
        ?>
        <div class="updated"><p><strong> <?php echo __('Settings saved','example_plugin'); ?></strong></p></div>
    <?php
    }
    ?>
    <div class="wrap">
        <h2>Developers List</h2>

        <h3><?php echo __('Settings','example_plugin'); ?></h3> /*Название раздела настроек*/
        /*Начало формы для обработки настроек. Форма содержит 2 чекбокса, включающих или отключающих соответствующие функции плагина*/
        <form method="post" action="<? echo $_SERVER['REQUEST_URI'];?>">
            <table class="form-table">
                <tr>
                    <th colspan=2 scope="row"> /*Первый чекбокс - будет ли плагин обрабатывать заголовки записей*/
                        <input name="myplug_modify_title" type="checkbox" <?if($myplug_modify_title)echo "checked";?>> <?php echo __('Add random phrase to post title','example_plugin'); ?>
                    </th>
                </tr>
                <tr>
                    <th colspan=2 scope="row"> /*Второй чекбокс - будет ли плагин обрабатывать тело записей*/
                        <input name="myplug_modify_content" type="checkbox" <?if($myplug_modify_content)echo "checked";?>> <?php echo __('Add random phrase to post content','example_plugin'); ?>
                    </th>
                </tr>
            </table>
            <input type="hidden" name="cmd" value="myplugin_save_opt"> /*"Функциональная" часть кнопки сохранения настроек*/
            <p class="submit">
                <input type="submit" name="Submit" value="<?php _e('Save Changes') ?>" /> /*Вывод кнопки сохранения настроек в браузер. Стандартная функция Wordpress*/
            </p>
        </form> /*Конец формы обработки настроек*/

        /*Вывод информации о плагине. Например - кем разработан*/
        <h3><?php echo __('Plugin developed','example_plugin'); ?></h3>
        <table class="form-table">
            <tr><th>
                    <ul>
                        <li><?php echo __('By: <a href="http://dimio.org/" target="_blank">dimio</a>','example_plugin'); ?></li>
                    </ul>
                </th></tr></table>

        /*Блок ввода новых фраз в таблицу настроек плагина. Сначала идёт справка для пользователя*/
        <h3><?php echo __('Adding phrases','example_plugin'); ?></h3>
        /*Начало формы ввода. Форма содержит текстовое поле для ввода шириной 80 символов и высотой 12 строк*/
        <table class="form-table" width="300px">
            <tr>
                <td>
                    <?php echo __('Format phrases: Title|Body','example_plugin'); ?><br />
                    <form method="post" action="<? echo $_SERVER['REQUEST_URI'];?>">
                        <textarea cols=80 rows=12 name="prefs_base"></textarea> /*Поле для ввода новых фраз*/
                </td>
            </tr>
        </table>
        /*Кнопка для сохранения фраз. По аналогии с кнопкой сохранения настроек, но без применения стандартной ф-и Wordpress*/
        <input type="hidden" name="cmd" value="add_prefs">
        <p class="submit">
            <input type="submit" name="Submit" value="<?php echo __('Add phrases','example_plugin'); ?>" />
        </p>
        </form>
        /*Форма, содержащая единственную кнопку - очистки таблицы настроек плагина*/
        <form method="post" action="<? echo $_SERVER['REQUEST_URI'];?>">
            <input type="hidden" name="cmd" value="del_prefs">
            <input type="submit" name="Submit" value="<?php echo __('Remove all phrases from the database','example_plugin'); ?>" />
        </form>
    </div>

<?php
//Конец функции создания и обработки страницы настроек.
}
?>