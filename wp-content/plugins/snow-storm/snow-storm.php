<?php
/* 
Plugin Name: Snow Storm
Plugin URI: https://diegomazenc-dev.netlify.app/
Description: This is a plugin Snow Storm 
 */

function loading_my_plugin_snowstorm()
{
    if (is_front_page()) {
        wp_enqueue_script('my_snowstorm_js', plugin_dir_url(__FILE__) . 'snowstorm.js');
        wp_enqueue_script('my_yahoo-animate-min_js', plugin_dir_url(__FILE__) . 'yahoo-animate-min.js');
        wp_enqueue_script('my_soundmanager_js', plugin_dir_url(__FILE__) . 'soundmanager.js');
        wp_enqueue_script('my_christmaslights_js', plugin_dir_url(__FILE__) . 'christmaslights.js');
        wp_enqueue_style('my_christmaslights_css', plugin_dir_url(__FILE__) . 'christmaslights.css');
    }
}

add_action('wp_enqueue_scripts', 'loading_my_plugin_snowstorm', 10);
function custom_snow()
{ ?>
    <script>
        snowStorm.snowColor = "<?= get_option("snowColor", "#FFF" ) ?>"; // blue-ish snow!?
        snowStorm.flakesMaxActive = <?= get_option("snowQuantity", 50 ) ?>; // show more snow on screen at once
        snowStorm.useTwinkleEffect = true; // let the snow flicker in and out of view
        snowStorm.snowCharacter = "<?= get_option("snowShape", "&bull;" ) ?>";
        var urlBase = '<?= plugin_dir_url(__FILE__) ?>';
        soundManager.url = '<?= plugin_dir_url(__FILE__) ?>';
    </script>
<?php }

add_action('wp_head', 'custom_snow');

function add_christmas_lights()
{ 
    if (get_option('activateChristmasLight')) { ?>
        <div id="lights"> </div>
    <?php }
}

add_action('wp_body_open', 'add_christmas_lights');


function my_plugin_options(){
    //fonction (Nom de la page, nom de l'option, capabilities = définition du role, url, fonction de render)
    add_options_page('Snow Storm', 'Snow Storm Options', 'manage_options', 'mysnowstorm-options', 'my_snowstorm_editing');
}

add_action('admin_menu', 'my_plugin_options');

// add_action('admin_init');

function my_snowstorm_editing()
{ ?>

    <h2>My Snow Storm Option</h2>
    <form action="options.php" method="post">

        <?php 
    settings_fields('mysnowstorm-options');
    do_settings_sections('mysnowstorm-options');
    ?>
    <input type="submit" name="save" value="Save" class="button button-primary">
</form>


<?php } 

function my_snowstorm_register_sections_and_fields(){
    // function (url, nome de l'option)
    register_setting(
        'mysnowstorm-options',
         'snowColor'
    );

    register_setting(
        'mysnowstorm-options',
         'snowShape'
    );

    register_setting(
        'mysnowstorm-options',
         'snowQuantity'
    );

    register_setting(
        'mysnowstorm-options',
         'activateChristmasLight'
    );


    add_settings_section(
        'mySnowsotrmSettingsSection',
        'my Snowsotrm Settings Section',
        'my_snowstorm_first_section',
        'mysnowstorm-options'
    );

    add_settings_field(
        'snowColor',
        'Snow Color',
        'color_snow_input',
        'mysnowstorm-options',
        'mySnowsotrmSettingsSection'
    );

    add_settings_field(
        'snowShape',
        'Snow Shape',
        'shape_snow_select',
        'mysnowstorm-options',
        'mySnowsotrmSettingsSection'
    );

    add_settings_field(
        'snowQuantity',
        'Snow Quantity',
        'quantity_snow_select',
        'mysnowstorm-options',
        'mySnowsotrmSettingsSection'
    );

    add_settings_field(
        'activateChristmasLight',
        'Activate Christmas Light',
        'activate_christmas_light',
        'mysnowstorm-options',
        'mySnowsotrmSettingsSection'
    );

}

add_action('admin_init', 'my_snowstorm_register_sections_and_fields');

function my_snowstorm_first_section(){
    echo "Mon titre de section";
}

function color_snow_input(){?>
    <input type="color" name="snowColor" id="snowColor" value="<?= esc_attr(get_option("snowColor", "#FFF")) ?>">
<?php } 

function shape_snow_select(){?>
    <select name="snowShape" id="snowShape">
        <option value="&bull;" <?php selected(get_option('snowShape'), '&bull;'); ?>>&bull; Bulles</option>
        <option value="&hearts;" <?php selected(get_option('snowShape'), '&hearts;'); ?>>&hearts; Coeurs</option>
    </select>
<?php } 

function quantity_snow_select(){?>
    <select name="snowQuantity" id="snowQuantity">
        <option value="10" <?php selected(get_option('snowQuantity'), '10'); ?>>Minimum</option>
        <option value="50" <?php selected(get_option('snowQuantity'), '50'); ?>>Moyen</option>
        <option value="100" <?php selected(get_option('snowQuantity'), '100'); ?>>Maximum</option>
    </select>
<?php }

function activate_christmas_light(){?>
    <select name="activateChristmasLight" id="activateChristmasLight">
        <option value="<?= true ?>" <?php selected(get_option('activateChristmasLight'), true); ?>>Activer</option>
        <option value="<?= false ?>" <?php selected(get_option('activateChristmasLight'), false); ?>>Désactiver</option>
    </select>
<?php }
