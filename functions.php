<?php
    // language transalation setup 
    load_theme_textdomain('runbangla24', get_template_directory().'/languages');

    // dynamic site/page title
    function my_custom_menu() {
        register_nav_menus(
            array(
                'my-custom-menu' => _( 'My Custom Menu' ),
                'my-custom-menu-2' =>_('My Second Custom Menu')
            )
        );
    }
    add_action( 'init', 'my_custom_menu' );
    
    
    function runbangla24_setup(){
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails',array('post'));

        // registering manu
        register_nav_menus(array(
            'primary-menu' => __('Primary Menu', 'runbangla24'),
            'footer-menu' => __('Footer Menu', 'runbangla24'),
            'top-menu' => __('Topber Menu', 'runbangla24')

        ));

        /*
        * Add support for core custom logo.
        *
        * @link https://codex.wordpress.org/Theme_Logo
        */
        // $logo_width  = 150;
        // $logo_height = 50;

        // add_theme_support(
        //     'custom-logo',
        //     array(
        //         'height'               => $logo_height,
        //         'width'                => $logo_width,
        //         'flex-width'           => true,
        //         'flex-height'          => true,
        //         'unlink-homepage-logo' => true,
        //     )
        // );


    }
    // hocks for title and others
    add_action('after_setup_theme','runbangla24_setup');
    
    // logo 
    function my_customizer_logo_settings( $wp_customize ) {

        $wp_customize->add_section(
          'my_custom_logo_settings',
          array(
            'title' => __( 'My Custom Logo Settings', 'runbangla24' ),
            'priority' => 30,
          )
        );
      
        $wp_customize->add_setting(
          'my_custom_logo_width',
          array(
            'default' => 150,
            'sanitize_callback' => 'sanitize_text_field',
          )
        );
      
        $wp_customize->add_setting(
          'my_custom_logo_height',
          array(
            'default' => 50,
            'sanitize_callback' => 'sanitize_text_field',
          )
        );
      
        $wp_customize->add_control(
          'my_custom_logo_width_control',
          array(
            'label' => __( 'Logo Width', 'runbangla24' ),
            'type' => 'text',
            'section' => 'my_custom_logo_settings',
            'settings' => 'my_custom_logo_width',
          )
        );
      
        $wp_customize->add_control(
          'my_custom_logo_height_control',
          array(
            'label' => __( 'Logo Height', 'runbangla24' ),
            'type' => 'text',
            'section' => 'my_custom_logo_settings',
            'settings' => 'my_custom_logo_height',
          )
        );
      
      }
      
      add_action( 'customize_register', 'my_customizer_logo_settings' );
      
      // Add theme support for custom logo with the new settings
      add_theme_support(
        'custom-logo',
        array(
          'height' => get_theme_mod( 'my_custom_logo_height' ),
          'width' => get_theme_mod( 'my_custom_logo_width' ),
          'flex-width' => true,
          'flex-height' => true,
          'unlink-homepage-logo' => true,
        )
      );
    //   logo end

    // activing assects style and js
    function runbangla24_assets() {

        // css files
        wp_enqueue_style( 'stypreconnect', 'https://fonts.gstatic.com', false );
        wp_enqueue_style( 'bangla_font', get_template_directory_uri().'/assets/fonts/LiTitirUnicode-Italic.ttf', array(), '1.0.0', 'all' );
        wp_enqueue_style( 'bangla_font', get_template_directory_uri().'/assets/fonts/LiTitirUnicode-Regular.ttf', array(), '1.0.0', 'all' );
        wp_enqueue_style( 'googel-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap', false );
         wp_enqueue_style( 'kalpurush', 'https://fonts.maateen.me/kalpurush/font.css', false );
        wp_enqueue_style( 'solamiman-lipi', 'https://fonts.maateen.me/solaiman-lipi/font.css', false );
        wp_enqueue_style( 'owl_carousel', get_template_directory_uri().'/assets/lib/owlcarousel/assets/owl.carousel.min.css', array(), '1.0.0', 'all' );
        wp_enqueue_style( 'fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css', false );
        wp_enqueue_style( 'style', get_template_directory_uri().'/assets/css/style.css', array(), '1.0.0', 'all' );
        wp_enqueue_style( 'main', get_stylesheet_uri() );


        // js files 
        wp_enqueue_style( 'jquery', 'https://code.jquery.com/jquery-3.4.1.min.js', false );
        wp_enqueue_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js', false );
        wp_enqueue_script( 'easing', get_template_directory_uri().'/assets/lib/easing/easing.min.js', 
        array('jquery'), '1.0.0', true);
        wp_enqueue_script( 'owlcarousel', get_template_directory_uri().'/assets/lib/owlcarousel/owl.carousel.min.js', 
        array('jquery'), '1.0.0', true);
        wp_enqueue_script( 'mainJs', get_template_directory_uri().'/assets/js/main.js', 
        array('jquery'), '1.0.0', true);    

    }
    add_action( 'wp_enqueue_scripts', 'runbangla24_assets' );

// custome excerpt length
    function runbangla24_custom_excerpt_length( $length ) {
        return 20;
    }
    add_filter( 'excerpt_length', 'runbangla24_custom_excerpt_length', 999 );


    // register sideber 
    function runbangla24_sidebar(){
        // main sidebar
        register_sidebar(array(
            'name' 	        => __('Theme Main Sidebar','runbangla24'),
            'id'	        => 'sidebar',
            'description'	=> __('Sidebar will show blog/post/category and others requred pages', 'runbangla24'),
            'before_widget'  => '<li id="%1$s" class="widget %2$s">',
            'after_widget'   => "</li>\n",
            'before_title'   => '<h4">',
            'after_title'    => "</h4>\n",
        ));
    }
    add_action('widgets_init', 'runbangla24_sidebar');