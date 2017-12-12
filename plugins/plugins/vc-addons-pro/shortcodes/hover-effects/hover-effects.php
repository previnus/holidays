<?php
if ( ! class_exists( 'ASVC_HoverEffects' ) ) {
    class ASVC_HoverEffects {
        
    function ASVC_HoverEffects() {
    vc_map( 
    
        array(
            "name" => __( "Hover Effects", "hvc" ),
            "base" => "asvc-hover",
            "class" => "",
            "icon"        => "asvc_hover_effects_icon",
            "category" => __( "VC Addons", "hvc"),
            "description" => __( "", "hvc"),
            "params" => array(
            
            
            array(
                "type"              => "dropdown",
                "heading"           => __( "Select Style", "hvc" ),
                "param_name"        => "style",
                "value"             => array(
                    __( 'Circle', "hvc" )		=> "circle",
                    __( 'Square', "hvc" )		=> "square",
                    __( 'Square 2', "hvc" )		=> "square2",
                    __( 'Caption', "hvc" )		=> "caption",
                    __( 'Jibon', "hvc" )		=> "jibon",
                    __( 'Others', "hvc" )		=> "others",

                ),
                "admin_label"		=> true,
                "description"       => __( "Select the style for the hover effect.", "hvc" ),
            ),
            
            array(
                "type"              => "dropdown",
                "heading"           => __( "Select Effect", "hvc" ),
                "param_name"        => "circle_effects",
                "value"             => array(
                    __( 'Effect 1', "hvc" )		    => "effect1",
                    __( 'Effect 2', "hvc" )		    => "effect2",
                    __( 'Effect 3', "hvc" )		    => "effect3",
                    __( 'Effect 4', "hvc" )		    => "effect4",
                    __( 'Effect 5', "hvc" )		    => "effect5",
                    __( 'Effect 6', "hvc" )	    	=> "effect6",
                    __( 'Effect 7', "hvc" )	    	=> "effect7",
                    __( 'Effect 8', "hvc" )	    	=> "effect8",
                    __( 'Effect 9', "hvc" )	    	=> "effect9",
                    __( 'Effect 10', "hvc" )		=> "effect10",
                    __( 'Effect 11', "hvc" )		=> "effect11",
                    __( 'Effect 12', "hvc" )		=> "effect12",
                    __( 'Effect 13', "hvc" )		=> "effect13",
                    __( 'Effect 14', "hvc" )		=> "effect14",
                    __( 'Effect 15', "hvc" )		=> "effect15",
                    __( 'Effect 16', "hvc" )		=> "effect16",
                    __( 'Effect 17', "hvc" )		=> "effect17",
                    __( 'Effect 18', "hvc" )		=> "effect18",
                    __( 'Effect 19', "hvc" )		=> "effect19",
                    __( 'Effect 20', "hvc" )		=> "effect20",

                ),
                "dependency"        => array( 'element' => "style", 'value' => array('circle') ),
            ),            
            
            array(
                "type"              => "dropdown",
                "heading"           => __( "Select Effect", "hvc" ),
                "param_name"        => "square_effects",
                "value"             => array(
                    __( 'Effect 1', "hvc" )		    => "effect1",
                    __( 'Effect 2', "hvc" )		    => "effect2",
                    __( 'Effect 3', "hvc" )		    => "effect3",
                    __( 'Effect 4', "hvc" )		    => "effect4",
                    __( 'Effect 5', "hvc" )		    => "effect5",
                    __( 'Effect 6', "hvc" )	    	=> "effect6",
                    __( 'Effect 7', "hvc" )	    	=> "effect7",
                    __( 'Effect 8', "hvc" )	    	=> "effect8",
                    __( 'Effect 9', "hvc" )	    	=> "effect9",
                    __( 'Effect 10', "hvc" )		=> "effect10",
                    __( 'Effect 11', "hvc" )		=> "effect11",
                    __( 'Effect 12', "hvc" )		=> "effect12",
                    __( 'Effect 13', "hvc" )		=> "effect13",
                    __( 'Effect 14', "hvc" )		=> "effect14",
                    __( 'Effect 15', "hvc" )		=> "effect15",

                ),
                "dependency"        => array( 'element' => "style", 'value' => array('square') ),
            ),            

            array(
                "type"              => "dropdown",
                "heading"           => __( "Select Effect", "hvc" ),
                "param_name"        => "square2_effects",
                "value"             => array(
                    __( 'Effect 1', "hvc" )		    => "effect1",
                    __( 'Effect 2', "hvc" )		    => "effect2",
                    __( 'Effect 3', "hvc" )		    => "effect3",
                    __( 'Effect 4', "hvc" )		    => "effect4",
                    __( 'Effect 5', "hvc" )		    => "effect5",
                    __( 'Effect 6', "hvc" )	    	=> "effect6",
                    __( 'Effect 7', "hvc" )	    	=> "effect7",
                    __( 'Effect 8', "hvc" )	    	=> "effect8",
                    __( 'Effect 9', "hvc" )	    	=> "effect9",
                    __( 'Effect 10', "hvc" )		=> "effect10",
                    __( 'Effect 11', "hvc" )		=> "effect11",
                    __( 'Effect 12', "hvc" )		=> "effect12",
                    __( 'Effect 13', "hvc" )		=> "effect13",
                    __( 'Effect 14', "hvc" )		=> "effect14",
                    __( 'Effect 15', "hvc" )		=> "effect15",
                    __( 'Effect 16', "hvc" )		=> "effect16",
                    __( 'Effect 17', "hvc" )		=> "effect17",
                    __( 'Effect 18', "hvc" )		=> "effect18",
                    __( 'Effect 19', "hvc" )		=> "effect19",
                    __( 'Effect 20', "hvc" )		=> "effect20",

                ),
                "dependency"        => array( 'element' => "style", 'value' => array('square2') ),
            ),

            array(
                "type"              => "dropdown",
                "heading"           => __( "Select Effect", "hvc" ),
                "param_name"        => "caption_effects",
                "value"             => array(
                    __( 'Effect 1', "hvc" )		    => "effect1",
                    __( 'Effect 2', "hvc" )		    => "effect2",
                    __( 'Effect 3', "hvc" )		    => "effect3",
                    __( 'Effect 4', "hvc" )		    => "effect4",
                    __( 'Effect 5', "hvc" )		    => "effect5",
                    __( 'Effect 6', "hvc" )	    	=> "effect6",
                    __( 'Effect 7', "hvc" )	    	=> "effect7",
                    __( 'Effect 8', "hvc" )	    	=> "effect8",
                    __( 'Effect 9', "hvc" )	    	=> "effect9",
                    __( 'Effect 10', "hvc" )		=> "effect10",
                    __( 'Effect 11', "hvc" )		=> "effect11",
                    __( 'Effect 12', "hvc" )		=> "effect12",
                    __( 'Effect 13', "hvc" )		=> "effect13",
                    __( 'Effect 14', "hvc" )		=> "effect14",
                    __( 'Effect 15', "hvc" )		=> "effect15",
                    __( 'Effect 16', "hvc" )		=> "effect16",
                    __( 'Effect 17', "hvc" )		=> "effect17",
                    __( 'Effect 18', "hvc" )		=> "effect18",
                    __( 'Effect 19', "hvc" )		=> "effect19",
                    __( 'Effect 20', "hvc" )		=> "effect20",

                ),
                "dependency"        => array( 'element' => "style", 'value' => array('caption') ),
            ),

            array(
                "type"              => "dropdown",
                "heading"           => __( "Select Effect", "hvc" ),
                "param_name"        => "jibon_effects",
                "value"             => array(
                    __( 'Effect 1', "hvc" )		    => "effect1",
                    __( 'Effect 2', "hvc" )		    => "effect2",
                    __( 'Effect 3', "hvc" )		    => "effect3",
                    __( 'Effect 4', "hvc" )		    => "effect4",
                    __( 'Effect 5', "hvc" )		    => "effect5",
                    __( 'Effect 6', "hvc" )	    	=> "effect6",
                    __( 'Effect 7', "hvc" )	    	=> "effect7",
                    __( 'Effect 8', "hvc" )	    	=> "effect8",
                    __( 'Effect 9', "hvc" )	    	=> "effect9",
                    __( 'Effect 10', "hvc" )		=> "effect10",
                    __( 'Effect 11', "hvc" )		=> "effect11",
                    __( 'Effect 12', "hvc" )		=> "effect12",

                ),
                "dependency"        => array( 'element' => "style", 'value' => array('jibon') ),
            ),


            array(
                "type"              => "dropdown",
                "heading"           => __( "Select Animation Direction", "hvc" ),
                "param_name"        => "animation",
                //"width"             => 150,
                "value"             => array(
                    __( 'Left To Right', "hvc" )		    => "left_to_right",
                    __( 'Right To Left', "hvc" )		    => "right_to_left",
                    __( 'Top To Bottom', "hvc" )		    => "top_to_bottom",
                    __( 'Bottom To Top', "hvc" )		    => "bottom_to_top",

                ),
                "dependency"        => array( 'element' => "style", 'value' => array('square', 'circle') ),
            ),



            
             array(
                "type" => "attach_image",
                "heading" => __("Image", "hvc"),
                "param_name" => "image",
                "admin_label"		=> true,
                "value" => "",
                //"description" => __("select image for hover", "hvc")
            ),            
                
             array(
                "type" => "textfield",
                "heading" => __("Heading", "hvc"),
                "param_name" => "title",
                "admin_label"		=> true,
                //"value" => "Heading Goes Here",
                //"description" => __("select image for hover", "hvc")
            ), 
                            
             array(
                "type" => "textarea",
                "heading" => __("Description", "hvc"),
                "param_name" => "description",
                "admin_label"		=> true,
                //"value" => "description goes here",
                //"description" => __("select image for hover", "hvc")
                "dependency"        => array( 'element' => "style", 'value' => array('square', 'circle', 'caption', 'jibon') ),
            ), 
            
        /*                    
            array(
                "type" => "checkbox",
                "heading" => __("Custom Link ?", "hvc"),
                "param_name" => "custom_link",
                "admin_label"		=> true,
                "description" => __("linking hover item", "hvc")
            ),

        */

            array(
                "type" => "vc_link",
                "heading" => __("Link", "hvc"),
                "param_name" => "link",
                "admin_label"		=> true,
                "description" => __("keep blank if you don't want", "hvc"),
                //"dependency"        => array( 'element' => "custom_link", 'value' => '1' ),
                
            ), 
            
            
           
        // Group Settins
             array(
                "type"              => "textfield",
                "heading"           => __( "Custom Image Width", "hvc" ),
                "param_name"        => "image_width",
                "value"             => '216',
                "description" => __("custom image width in px, default value is 216px ", "hvc"),
                //"dependency"        => array( 'element' => "style", 'value' => array('circle') ),
                "group" 			=> "Settings",
            ),            
            array(
                "type"              => "textfield",
                "heading"           => __( "Custom Image Height", "hvc" ),
                "param_name"        => "image_height",
                "value"             => '216',
                "description" => __("custom image height in px, default value is 216px ", "hvc"),
                "dependency"        => array( 'element' => "style", 'value' => array('square', 'square2', 'caption','jibon') ),
                "group" 			=> "Settings",
            ),  
            
            /*                
             array(
                "type"              => "textfield",
                "heading"           => __( "Move Texts to Bottom or Top", "hvc" ),
                "param_name"        => "move_texts_topbottom",
                "value"             => '15',
                "description" => __("texts position up or down, default value is 15px ", "hvc"),
                "dependency"        => array( 'element' => "style", 'value' => array('jibon') ),
                "group" 			=> "Settings",
            ),
            
             array(
                "type"              => "textfield",
                "heading"           => __( "Move Texts to Left or Right", "hvc" ),
                "param_name"        => "move_texts_leftright",
                "value"             => '15',
                "description" => __("texts position left or right, default value is 15px ", "hvc"),
                "dependency"        => array( 'element' => "style", 'value' => array('jibon') ),
                "group" 			=> "Settings",
            ),
            */
                                    
            array(
                "type"              => "dropdown",
                "heading"           => __( "Custom Font", "hvc" ),
                "param_name"        => "font",
                "value"             => array(
                    "ABeeZee" => "ABeeZee",
                    "Abel" => "Abel",
                    "Abril Fatface" => "Abril+Fatface",
                    "Aclonica" => "Aclonica",
                    "Acme" => "Acme",
                    "Actor" => "Actor",
                    "Adamina" => "Adamina",
                    "Advent Pro" => "Advent+Pro",
                    "Aguafina Script" => "Aguafina+Script",
                    "Akronim" => "Akronim",
                    "Aladin" => "Aladin",
                    "Aldrich" => "Aldrich",
                    "Alegreya" => "Alegreya",
                    "Alegreya SC" => "Alegreya+SC",
                    "Alex Brush" => "Alex+Brush",
                    "Alfa Slab One" => "Alfa+Slab+One",
                    "Alice" => "Alice",
                    "Alike" => "Alike",
                    "Alike Angular" => "Alike+Angular",
                    "Allan" => "Allan",
                    "Allerta" => "Allerta",
                    "Allerta Stencil" => "Allerta+Stencil",
                    "Allura" => "Allura",
                    "Almendra" => "Almendra",
                    "Almendra Display" => "Almendra+Display",
                    "Almendra SC" => "Almendra+SC",
                    "Amarante" => "Amarante",
                    "Amaranth" => "Amaranth",
                    "Amatic SC" => "Amatic+SC",
                    "Amethysta" => "Amethysta",
                    "Anaheim" => "Anaheim",
                    "Andada" => "Andada",
                    "Andika" => "Andika",
                    "Angkor" => "Angkor",
                    "Annie Use Your Telescope" => "Annie+Use+Your+Telescope",
                    "Anonymous Pro" => "Anonymous+Pro",
                    "Antic" => "Antic",
                    "Antic Didone" => "Antic+Didone",
                    "Antic Slab" => "Antic+Slab",
                    "Anton" => "Anton",
                    "Arapey" => "Arapey",
                    "Arbutus" => "Arbutus",
                    "Arbutus Slab" => "Arbutus+Slab",
                    "Architects Daughter" => "Architects+Daughter",
                    "Archivo Black" => "Archivo+Black",
                    "Archivo Narrow" => "Archivo+Narrow",
                    "Arimo" => "Arimo",
                    "Arizonia" => "Arizonia",
                    "Armata" => "Armata",
                    "Artifika" => "Artifika",
                    "Arvo" => "Arvo",
                    "Asap" => "Asap",
                    "Asset" => "Asset",
                    "Astloch" => "Astloch",
                    "Asul" => "Asul",
                    "Atomic Age" => "Atomic+Age",
                    "Aubrey" => "Aubrey",
                    "Audiowide" => "Audiowide",
                    "Autour One" => "Autour+One",
                    "Average" => "Average",
                    "Average Sans" => "Average+Sans",
                    "Averia Gruesa Libre" => "Averia+Gruesa+Libre",
                    "Averia Libre" => "Averia+Libre",
                    "Averia Sans Libre" => "Averia+Sans+Libre",
                    "Averia Serif Libre" => "Averia+Serif+Libre",
                    "Bad Script" => "Bad+Script",
                    "Balthazar" => "Balthazar",
                    "Bangers" => "Bangers",
                    "Basic" => "Basic",
                    "Battambang" => "Battambang",
                    "Baumans" => "Baumans",
                    "Bayon" => "Bayon",
                    "Belgrano" => "Belgrano",
                    "Belleza" => "Belleza",
                    "BenchNine" => "BenchNine",
                    "Bentham" => "Bentham",
                    "Berkshire Swash" => "Berkshire+Swash",
                    "Bevan" => "Bevan",
                    "Bigelow Rules" => "Bigelow+Rules",
                    "Bigshot One" => "Bigshot+One",
                    "Bilbo" => "Bilbo",
                    "Bilbo Swash Caps" => "Bilbo+Swash+Caps",
                    "Bitter" => "Bitter",
                    "Black Ops One" => "Black+Ops+One",
                    "Bokor" => "Bokor",
                    "Bonbon" => "Bonbon",
                    "Boogaloo" => "Boogaloo",
                    "Bowlby One" => "Bowlby+One",
                    "Bowlby One SC" => "Bowlby+One+SC",
                    "Brawler" => "Brawler",
                    "Bree Serif" => "Bree+Serif",
                    "Bubblegum Sans" => "Bubblegum+Sans",
                    "Bubbler One" => "Bubbler+One",
                    "Buda" => "Buda",
                    "Buenard" => "Buenard",
                    "Butcherman" => "Butcherman",
                    "Butterfly Kids" => "Butterfly+Kids",
                    "Cabin" => "Cabin",
                    "Cabin Condensed" => "Cabin+Condensed",
                    "Cabin Sketch" => "Cabin+Sketch",
                    "Caesar Dressing" => "Caesar+Dressing",
                    "Cagliostro" => "Cagliostro",
                    "Calligraffitti" => "Calligraffitti",
                    "Cambo" => "Cambo",
                    "Candal" => "Candal",
                    "Cantarell" => "Cantarell",
                    "Cantata One" => "Cantata+One",
                    "Cantora One" => "Cantora+One",
                    "Capriola" => "Capriola",
                    "Cardo" => "Cardo",
                    "Carme" => "Carme",
                    "Carrois Gothic" => "Carrois+Gothic",
                    "Carrois Gothic SC" => "Carrois+Gothic+SC",
                    "Carter One" => "Carter+One",
                    "Caudex" => "Caudex",
                    "Cedarville Cursive" => "Cedarville+Cursive",
                    "Ceviche One" => "Ceviche+One",
                    "Changa One" => "Changa+One",
                    "Chango" => "Chango",
                    "Chau Philomene One" => "Chau+Philomene+One",
                    "Chela One" => "Chela+One",
                    "Chelsea Market" => "Chelsea+Market",
                    "Chenla" => "Chenla",
                    "Cherry Cream Soda" => "Cherry+Cream+Soda",
                    "Cherry Swash" => "Cherry+Swash",
                    "Chewy" => "Chewy",
                    "Chicle" => "Chicle",
                    "Chivo" => "Chivo",
                    "Cinzel" => "Cinzel",
                    "Cinzel Decorative" => "Cinzel+Decorative",
                    "Clicker Script" => "Clicker+Script",
                    "Coda" => "Coda",
                    "Coda Caption" => "Coda+Caption",
                    "Codystar" => "Codystar",
                    "Combo" => "Combo",
                    "Comfortaa" => "Comfortaa",
                    "Coming Soon" => "Coming+Soon",
                    "Concert One" => "Concert+One",
                    "Condiment" => "Condiment",
                    "Content" => "Content",
                    "Contrail One" => "Contrail+One",
                    "Convergence" => "Convergence",
                    "Cookie" => "Cookie",
                    "Copse" => "Copse",
                    "Corben" => "Corben",
                    "Courgette" => "Courgette",
                    "Cousine" => "Cousine",
                    "Coustard" => "Coustard",
                    "Covered By Your Grace" => "Covered+By+Your+Grace",
                    "Crafty Girls" => "Crafty+Girls",
                    "Creepster" => "Creepster",
                    "Crete Round" => "Crete+Round",
                    "Crimson Text" => "Crimson+Text",
                    "Croissant One" => "Croissant+One",
                    "Crushed" => "Crushed",
                    "Cuprum" => "Cuprum",
                    "Cutive" => "Cutive",
                    "Cutive Mono" => "Cutive+Mono",
                    "Damion" => "Damion",
                    "Dancing Script" => "Dancing+Script",
                    "Dangrek" => "Dangrek",
                    "Dawning of a New Day" => "Dawning+of+a+New+Day",
                    "Days One" => "Days+One",
                    "Delius" => "Delius",
                    "Delius Swash Caps" => "Delius+Swash+Caps",
                    "Delius Unicase" => "Delius+Unicase",
                    "Della Respira" => "Della+Respira",
                    "Denk One" => "Denk+One",
                    "Devonshire" => "Devonshire",
                    "Didact Gothic" => "Didact+Gothic",
                    "Diplomata" => "Diplomata",
                    "Diplomata SC" => "Diplomata+SC",
                    "Domine" => "Domine",
                    "Donegal One" => "Donegal+One",
                    "Doppio One" => "Doppio+One",
                    "Dorsa" => "Dorsa",
                    "Dosis" => "Dosis",
                    "Dr Sugiyama" => "Dr+Sugiyama",
                    "Droid Sans" => "Droid+Sans",
                    "Droid Sans Mono" => "Droid+Sans+Mono",
                    "Droid Serif" => "Droid+Serif",
                    "Duru Sans" => "Duru+Sans",
                    "Dynalight" => "Dynalight",
                    "EB Garamond" => "EB+Garamond",
                    "Eagle Lake" => "Eagle+Lake",
                    "Eater" => "Eater",
                    "Economica" => "Economica",
                    "Electrolize" => "Electrolize",
                    "Elsie" => "Elsie",
                    "Elsie Swash Caps" => "Elsie+Swash+Caps",
                    "Emblema One" => "Emblema+One",
                    "Emilys Candy" => "Emilys+Candy",
                    "Engagement" => "Engagement",
                    "Englebert" => "Englebert",
                    "Enriqueta" => "Enriqueta",
                    "Erica One" => "Erica+One",
                    "Esteban" => "Esteban",
                    "Euphoria Script" => "Euphoria+Script",
                    "Ewert" => "Ewert",
                    "Exo" => "Exo",
                    "Expletus Sans" => "Expletus+Sans",
                    "Fanwood Text" => "Fanwood+Text",
                    "Fascinate" => "Fascinate",
                    "Fascinate Inline" => "Fascinate+Inline",
                    "Faster One" => "Faster+One",
                    "Fasthand" => "Fasthand",
                    "Federant" => "Federant",
                    "Federo" => "Federo",
                    "Felipa" => "Felipa",
                    "Fenix" => "Fenix",
                    "Finger Paint" => "Finger+Paint",
                    "Fjalla One" => "Fjalla+One",
                    "Fjord One" => "Fjord+One",
                    "Flamenco" => "Flamenco",
                    "Flavors" => "Flavors",
                    "Fondamento" => "Fondamento",
                    "Fontdiner Swanky" => "Fontdiner+Swanky",
                    "Forum" => "Forum",
                    "Francois One" => "Francois+One",
                    "Freckle Face" => "Freckle+Face",
                    "Fredericka the Great" => "Fredericka+the+Great",
                    "Fredoka One" => "Fredoka+One",
                    "Freehand" => "Freehand",
                    "Fresca" => "Fresca",
                    "Frijole" => "Frijole",
                    "Fruktur" => "Fruktur",
                    "Fugaz One" => "Fugaz+One",
                    "GFS Didot" => "GFS+Didot",
                    "GFS Neohellenic" => "GFS+Neohellenic",
                    "Gabriela" => "Gabriela",
                    "Gafata" => "Gafata",
                    "Galdeano" => "Galdeano",
                    "Galindo" => "Galindo",
                    "Gentium Basic" => "Gentium+Basic",
                    "Gentium Book Basic" => "Gentium+Book+Basic",
                    "Geo" => "Geo",
                    "Geostar" => "Geostar",
                    "Geostar Fill" => "Geostar+Fill",
                    "Germania One" => "Germania+One",
                    "Gilda Display" => "Gilda+Display",
                    "Give You Glory" => "Give+You+Glory",
                    "Glass Antiqua" => "Glass+Antiqua",
                    "Glegoo" => "Glegoo",
                    "Gloria Hallelujah" => "Gloria+Hallelujah",
                    "Goblin One" => "Goblin+One",
                    "Gochi Hand" => "Gochi+Hand",
                    "Gorditas" => "Gorditas",
                    "Goudy Bookletter 1911" => "Goudy+Bookletter+1911",
                    "Graduate" => "Graduate",
                    "Grand Hotel" => "Grand+Hotel",
                    "Gravitas One" => "Gravitas+One",
                    "Great Vibes" => "Great+Vibes",
                    "Griffy" => "Griffy",
                    "Gruppo" => "Gruppo",
                    "Gudea" => "Gudea",
                    "Habibi" => "Habibi",
                    "Hammersmith One" => "Hammersmith+One",
                    "Hanalei" => "Hanalei",
                    "Hanalei Fill" => "Hanalei+Fill",
                    "Handlee" => "Handlee",
                    "Hanuman" => "Hanuman",
                    "Happy Monkey" => "Happy+Monkey",
                    "Headland One" => "Headland+One",
                    "Henny Penny" => "Henny+Penny",
                    "Herr Von Muellerhoff" => "Herr+Von+Muellerhoff",
                    "Holtwood One SC" => "Holtwood+One+SC",
                    "Homemade Apple" => "Homemade+Apple",
                    "Homenaje" => "Homenaje",
                    "IM Fell DW Pica" => "IM+Fell+DW+Pica",
                    "IM Fell DW Pica SC" => "IM+Fell+DW+Pica+SC",
                    "IM Fell Double Pica" => "IM+Fell+Double+Pica",
                    "IM Fell Double Pica SC" => "IM+Fell+Double+Pica+SC",
                    "IM Fell English" => "IM+Fell+English",
                    "IM Fell English SC" => "IM+Fell+English+SC",
                    "IM Fell French Canon" => "IM+Fell+French+Canon",
                    "IM Fell French Canon SC" => "IM+Fell+French+Canon+SC",
                    "IM Fell Great Primer" => "IM+Fell+Great+Primer",
                    "IM Fell Great Primer SC" => "IM+Fell+Great+Primer+SC",
                    "Iceberg" => "Iceberg",
                    "Iceland" => "Iceland",
                    "Imprima" => "Imprima",
                    "Inconsolata" => "Inconsolata",
                    "Inder" => "Inder",
                    "Indie Flower" => "Indie+Flower",
                    "Inika" => "Inika",
                    "Irish Grover" => "Irish+Grover",
                    "Istok Web" => "Istok+Web",
                    "Italiana" => "Italiana",
                    "Italianno" => "Italianno",
                    "Jacques Francois" => "Jacques+Francois",
                    "Jacques Francois Shadow" => "Jacques+Francois+Shadow",
                    "Jim Nightshade" => "Jim+Nightshade",
                    "Jockey One" => "Jockey+One",
                    "Jolly Lodger" => "Jolly+Lodger",
                    "Josefin Sans" => "Josefin+Sans",
                    "Josefin Slab" => "Josefin+Slab",
                    "Joti One" => "Joti+One",
                    "Judson" => "Judson",
                    "Julee" => "Julee",
                    "Julius Sans One" => "Julius+Sans+One",
                    "Junge" => "Junge",
                    "Jura" => "Jura",
                    "Just Another Hand" => "Just+Another+Hand",
                    "Just Me Again Down Here" => "Just+Me+Again+Down+Here",
                    "Kameron" => "Kameron",
                    "Karla" => "Karla",
                    "Kaushan Script" => "Kaushan+Script",
                    "Kavoon" => "Kavoon",
                    "Keania One" => "Keania+One",
                    "Kelly Slab" => "Kelly+Slab",
                    "Kenia" => "Kenia",
                    "Khmer" => "Khmer",
                    "Kite One" => "Kite+One",
                    "Knewave" => "Knewave",
                    "Kotta One" => "Kotta+One",
                    "Koulen" => "Koulen",
                    "Kranky" => "Kranky",
                    "Kreon" => "Kreon",
                    "Kristi" => "Kristi",
                    "Krona One" => "Krona+One",
                    "La Belle Aurore" => "La+Belle+Aurore",
                    "Lancelot" => "Lancelot",
                    "Lato" => "Lato",
                    "League Script" => "League+Script",
                    "Leckerli One" => "Leckerli+One",
                    "Ledger" => "Ledger",
                    "Lekton" => "Lekton",
                    "Lemon" => "Lemon",
                    "Libre Baskerville" => "Libre+Baskerville",
                    "Life Savers" => "Life+Savers",
                    "Lilita One" => "Lilita+One",
                    "Limelight" => "Limelight",
                    "Linden Hill" => "Linden+Hill",
                    "Lobster" => "Lobster",
                    "Lobster Two" => "Lobster+Two",
                    "Londrina Outline" => "Londrina+Outline",
                    "Londrina Shadow" => "Londrina+Shadow",
                    "Londrina Sketch" => "Londrina+Sketch",
                    "Londrina Solid" => "Londrina+Solid",
                    "Lora" => "Lora",
                    "Love Ya Like A Sister" => "Love+Ya+Like+A+Sister",
                    "Loved by the King" => "Loved+by+the+King",
                    "Lovers Quarrel" => "Lovers+Quarrel",
                    "Luckiest Guy" => "Luckiest+Guy",
                    "Lusitana" => "Lusitana",
                    "Lustria" => "Lustria",
                    "Macondo" => "Macondo",
                    "Macondo Swash Caps" => "Macondo+Swash+Caps",
                    "Magra" => "Magra",
                    "Maiden Orange" => "Maiden+Orange",
                    "Mako" => "Mako",
                    "Marcellus" => "Marcellus",
                    "Marcellus SC" => "Marcellus+SC",
                    "Marck Script" => "Marck+Script",
                    "Margarine" => "Margarine",
                    "Marko One" => "Marko+One",
                    "Marmelad" => "Marmelad",
                    "Marvel" => "Marvel",
                    "Mate" => "Mate",
                    "Mate SC" => "Mate+SC",
                    "Maven Pro" => "Maven+Pro",
                    "McLaren" => "McLaren",
                    "Meddon" => "Meddon",
                    "MedievalSharp" => "MedievalSharp",
                    "Medula One" => "Medula+One",
                    "Megrim" => "Megrim",
                    "Meie Script" => "Meie+Script",
                    "Merienda" => "Merienda",
                    "Merienda One" => "Merienda+One",
                    "Merriweather" => "Merriweather",
                    "Merriweather Sans" => "Merriweather+Sans",
                    "Metal" => "Metal",
                    "Metal Mania" => "Metal+Mania",
                    "Metamorphous" => "Metamorphous",
                    "Metrophobic" => "Metrophobic",
                    "Michroma" => "Michroma",
                    "Milonga" => "Milonga",
                    "Miltonian" => "Miltonian",
                    "Miltonian Tattoo" => "Miltonian+Tattoo",
                    "Miniver" => "Miniver",
                    "Miss Fajardose" => "Miss+Fajardose",
                    "Modern Antiqua" => "Modern+Antiqua",
                    "Molengo" => "Molengo",
                    "Molle" => "Molle",
                    "Monda" => "Monda",
                    "Monofett" => "Monofett",
                    "Monoton" => "Monoton",
                    "Monsieur La Doulaise" => "Monsieur+La+Doulaise",
                    "Montaga" => "Montaga",
                    "Montez" => "Montez",
                    "Montserrat" => "Montserrat",
                    "Montserrat Alternates" => "Montserrat+Alternates",
                    "Montserrat Subrayada" => "Montserrat+Subrayada",
                    "Moul" => "Moul",
                    "Moulpali" => "Moulpali",
                    "Mountains of Christmas" => "Mountains+of+Christmas",
                    "Mouse Memoirs" => "Mouse+Memoirs",
                    "Mr Bedfort" => "Mr+Bedfort",
                    "Mr Dafoe" => "Mr+Dafoe",
                    "Mr De Haviland" => "Mr+De+Haviland",
                    "Mrs Saint Delafield" => "Mrs+Saint+Delafield",
                    "Mrs Sheppards" => "Mrs+Sheppards",
                    "Muli" => "Muli",
                    "Mystery Quest" => "Mystery+Quest",
                    "Neucha" => "Neucha",
                    "Neuton" => "Neuton",
                    "New Rocker" => "New+Rocker",
                    "News Cycle" => "News+Cycle",
                    "Niconne" => "Niconne",
                    "Nixie One" => "Nixie+One",
                    "Nobile" => "Nobile",
                    "Nokora" => "Nokora",
                    "Norican" => "Norican",
                    "Nosifer" => "Nosifer",
                    "Nothing You Could Do" => "Nothing+You+Could+Do",
                    "Noticia Text" => "Noticia+Text",
                    "Nova Cut" => "Nova+Cut",
                    "Nova Flat" => "Nova+Flat",
                    "Nova Mono" => "Nova+Mono",
                    "Nova Oval" => "Nova+Oval",
                    "Nova Round" => "Nova+Round",
                    "Nova Script" => "Nova+Script",
                    "Nova Slim" => "Nova+Slim",
                    "Nova Square" => "Nova+Square",
                    "Numans" => "Numans",
                    "Nunito" => "Nunito",
                    "Odor Mean Chey" => "Odor+Mean+Chey",
                    "Offside" => "Offside",
                    "Old Standard TT" => "Old+Standard+TT",
                    "Oldenburg" => "Oldenburg",
                    "Oleo Script" => "Oleo+Script",
                    "Oleo Script Swash Caps" => "Oleo+Script+Swash+Caps",
                    "Open Sans" => "Open+Sans",
                    "Open Sans Condensed" => "Open+Sans+Condensed",
                    "Oranienbaum" => "Oranienbaum",
                    "Orbitron" => "Orbitron",
                    "Oregano" => "Oregano",
                    "Orienta" => "Orienta",
                    "Original Surfer" => "Original+Surfer",
                    "Oswald" => "Oswald",
                    "Over the Rainbow" => "Over+the+Rainbow",
                    "Overlock" => "Overlock",
                    "Overlock SC" => "Overlock+SC",
                    "Ovo" => "Ovo",
                    "Oxygen" => "Oxygen",
                    "Oxygen Mono" => "Oxygen+Mono",
                    "PT Mono" => "PT+Mono",
                    "PT Sans" => "PT+Sans",
                    "PT Sans Caption" => "PT+Sans+Caption",
                    "PT Sans Narrow" => "PT+Sans+Narrow",
                    "PT Serif" => "PT+Serif",
                    "PT Serif Caption" => "PT+Serif+Caption",
                    "Pacifico" => "Pacifico",
                    "Paprika" => "Paprika",
                    "Parisienne" => "Parisienne",
                    "Passero One" => "Passero+One",
                    "Passion One" => "Passion+One",
                    "Patrick Hand" => "Patrick+Hand",
                    "Patrick Hand SC" => "Patrick+Hand+SC",
                    "Patua One" => "Patua+One",
                    "Paytone One" => "Paytone+One",
                    "Peralta" => "Peralta",
                    "Permanent Marker" => "Permanent+Marker",
                    "Petit Formal Script" => "Petit+Formal+Script",
                    "Petrona" => "Petrona",
                    "Philosopher" => "Philosopher",
                    "Piedra" => "Piedra",
                    "Pinyon Script" => "Pinyon+Script",
                    "Pirata One" => "Pirata+One",
                    "Plaster" => "Plaster",
                    "Play" => "Play",
                    "Playball" => "Playball",
                    "Playfair Display" => "Playfair+Display",
                    "Playfair Display SC" => "Playfair+Display+SC",
                    "Podkova" => "Podkova",
                    "Poiret One" => "Poiret+One",
                    "Poller One" => "Poller+One",
                    "Poly" => "Poly",
                    "Pompiere" => "Pompiere",
                    "Pontano Sans" => "Pontano+Sans",
                    "Port Lligat Sans" => "Port+Lligat+Sans",
                    "Port Lligat Slab" => "Port+Lligat+Slab",
                    "Prata" => "Prata",
                    "Preahvihear" => "Preahvihear",
                    "Press Start 2P" => "Press+Start+2P",
                    "Princess Sofia" => "Princess+Sofia",
                    "Prociono" => "Prociono",
                    "Prosto One" => "Prosto+One",
                    "Puritan" => "Puritan",
                    "Purple Purse" => "Purple+Purse",
                    "Quando" => "Quando",
                    "Quantico" => "Quantico",
                    "Quattrocento" => "Quattrocento",
                    "Quattrocento Sans" => "Quattrocento+Sans",
                    "Questrial" => "Questrial",
                    "Quicksand" => "Quicksand",
                    "Quintessential" => "Quintessential",
                    "Qwigley" => "Qwigley",
                    "Racing Sans One" => "Racing+Sans+One",
                    "Radley" => "Radley",
                    "Raleway" => "Raleway",
                    "Raleway Dots" => "Raleway+Dots",
                    "Rambla" => "Rambla",
                    "Rammetto One" => "Rammetto+One",
                    "Ranchers" => "Ranchers",
                    "Rancho" => "Rancho",
                    "Rationale" => "Rationale",
                    "Redressed" => "Redressed",
                    "Reenie Beanie" => "Reenie+Beanie",
                    "Revalia" => "Revalia",
                    "Ribeye" => "Ribeye",
                    "Ribeye Marrow" => "Ribeye+Marrow",
                    "Righteous" => "Righteous",
                    "Risque" => "Risque",
                    "Roboto" => "Roboto",
                    "Roboto Condensed" => "Roboto+Condensed",
                    "Rochester" => "Rochester",
                    "Rock Salt" => "Rock+Salt",
                    "Rokkitt" => "Rokkitt",
                    "Romanesco" => "Romanesco",
                    "Ropa Sans" => "Ropa+Sans",
                    "Rosario" => "Rosario",
                    "Rosarivo" => "Rosarivo",
                    "Rouge Script" => "Rouge+Script",
                    "Ruda" => "Ruda",
                    "Rufina" => "Rufina",
                    "Ruge Boogie" => "Ruge+Boogie",
                    "Ruluko" => "Ruluko",
                    "Rum Raisin" => "Rum+Raisin",
                    "Ruslan Display" => "Ruslan+Display",
                    "Russo One" => "Russo+One",
                    "Ruthie" => "Ruthie",
                    "Rye" => "Rye",
                    "Sacramento" => "Sacramento",
                    "Sail" => "Sail",
                    "Salsa" => "Salsa",
                    "Sanchez" => "Sanchez",
                    "Sancreek" => "Sancreek",
                    "Sansita One" => "Sansita+One",
                    "Sarina" => "Sarina",
                    "Satisfy" => "Satisfy",
                    "Scada" => "Scada",
                    "Schoolbell" => "Schoolbell",
                    "Seaweed Script" => "Seaweed+Script",
                    "Sevillana" => "Sevillana",
                    "Seymour One" => "Seymour+One",
                    "Shadows Into Light" => "Shadows+Into+Light",
                    "Shadows Into Light Two" => "Shadows+Into+Light+Two",
                    "Shanti" => "Shanti",
                    "Share" => "Share",
                    "Share Tech" => "Share+Tech",
                    "Share Tech Mono" => "Share+Tech+Mono",
                    "Shojumaru" => "Shojumaru",
                    "Short Stack" => "Short+Stack",
                    "Siemreap" => "Siemreap",
                    "Sigmar One" => "Sigmar+One",
                    "Signika" => "Signika",
                    "Signika Negative" => "Signika+Negative",
                    "Simonetta" => "Simonetta",
                    "Sintony" => "Sintony",
                    "Sirin Stencil" => "Sirin+Stencil",
                    "Six Caps" => "Six+Caps",
                    "Skranji" => "Skranji",
                    "Slackey" => "Slackey",
                    "Smokum" => "Smokum",
                    "Smythe" => "Smythe",
                    "Sniglet" => "Sniglet",
                    "Snippet" => "Snippet",
                    "Snowburst One" => "Snowburst+One",
                    "Sofadi One" => "Sofadi+One",
                    "Sofia" => "Sofia",
                    "Sonsie One" => "Sonsie+One",
                    "Sorts Mill Goudy" => "Sorts+Mill+Goudy",
                    "Source Code Pro" => "Source+Code+Pro",
                    "Source Sans Pro" => "Source+Sans+Pro",
                    "Special Elite" => "Special+Elite",
                    "Spicy Rice" => "Spicy+Rice",
                    "Spinnaker" => "Spinnaker",
                    "Spirax" => "Spirax",
                    "Squada One" => "Squada+One",
                    "Stalemate" => "Stalemate",
                    "Stalinist One" => "Stalinist+One",
                    "Stardos Stencil" => "Stardos+Stencil",
                    "Stint Ultra Condensed" => "Stint+Ultra+Condensed",
                    "Stint Ultra Expanded" => "Stint+Ultra+Expanded",
                    "Stoke" => "Stoke",
                    "Strait" => "Strait",
                    "Sue Ellen Francisco" => "Sue+Ellen+Francisco",
                    "Sunshiney" => "Sunshiney",
                    "Supermercado One" => "Supermercado+One",
                    "Suwannaphum" => "Suwannaphum",
                    "Swanky and Moo Moo" => "Swanky+and+Moo+Moo",
                    "Syncopate" => "Syncopate",
                    "Tangerine" => "Tangerine",
                    "Taprom" => "Taprom",
                    "Tauri" => "Tauri",
                    "Telex" => "Telex",
                    "Tenor Sans" => "Tenor+Sans",
                    "Text Me One" => "Text+Me+One",
                    "The Girl Next Door" => "The+Girl+Next+Door",
                    "Tienne" => "Tienne",
                    "Tinos" => "Tinos",
                    "Titan One" => "Titan+One",
                    "Titillium Web" => "Titillium+Web",
                    "Trade Winds" => "Trade+Winds",
                    "Trocchi" => "Trocchi",
                    "Trochut" => "Trochut",
                    "Trykker" => "Trykker",
                    "Tulpen One" => "Tulpen+One",
                    "Ubuntu" => "Ubuntu",
                    "Ubuntu Condensed" => "Ubuntu+Condensed",
                    "Ubuntu Mono" => "Ubuntu+Mono",
                    "Ultra" => "Ultra",
                    "Uncial Antiqua" => "Uncial+Antiqua",
                    "Underdog" => "Underdog",
                    "Unica One" => "Unica+One",
                    "UnifrakturCook" => "UnifrakturCook",
                    "UnifrakturMaguntia" => "UnifrakturMaguntia",
                    "Unkempt" => "Unkempt",
                    "Unlock" => "Unlock",
                    "Unna" => "Unna",
                    "VT323" => "VT323",
                    "Vampiro One" => "Vampiro+One",
                    "Varela" => "Varela",
                    "Varela Round" => "Varela+Round",
                    "Vast Shadow" => "Vast+Shadow",
                    "Vibur" => "Vibur",
                    "Vidaloka" => "Vidaloka",
                    "Viga" => "Viga",
                    "Voces" => "Voces",
                    "Volkhov" => "Volkhov",
                    "Vollkorn" => "Vollkorn",
                    "Voltaire" => "Voltaire",
                    "Waiting for the Sunrise" => "Waiting+for+the+Sunrise",
                    "Wallpoet" => "Wallpoet",
                    "Walter Turncoat" => "Walter+Turncoat",
                    "Warnes" => "Warnes",
                    "Wellfleet" => "Wellfleet",
                    "Wendy One" => "Wendy+One",
                    "Wire One" => "Wire+One",
                    "Yanone Kaffeesatz" => "Yanone+Kaffeesatz",
                    "Yellowtail" => "Yellowtail",
                    "Yeseva One" => "Yeseva+One",
                    "Yesteryear" => "Yesteryear",
                    "Zeyada" => "Zeyada",                    

                ),
                "group" 			=> "Settings",
                //"description"       => __( "default font is Open Sans.", "hvc" ),
                //"dependency"        => array( 'element' => "style", 'value' => array('flipboard') ),
            ),            
            
                 
            array(
                "type"              => "textfield",
                "heading"           => __( "Heading Font Size", "hvc" ),
                "param_name"        => "heading_font_size",
                "value"             => '16',
                "description" => __("default value is 16px", "hvc"),
                "group" 			=> "Settings",
            ), 
            array(
                "type"              => "colorpicker",
                "heading"           => __( "Heading Color", "hvc" ),
                "param_name"        => "heading_color",
                "value"             => '#ffffff',
                "description" => __("default color is #ffffff", "hvc"),
                "group" 			=> "Settings",
            ), 
            
                        
            array(
                "type"              => "textfield",
                "heading"           => __( "Description Font Size", "hvc" ),
                "param_name"        => "desc_font_size",
                "value"             => '12',
                "description" => __("default value is 12px", "hvc"),
                "group" 			=> "Settings",
            ),
            array(
                "type"              => "colorpicker",
                "heading"           => __( "Description Color", "hvc" ),
                "param_name"        => "desc_color",
                "value"             => '#ffffff',
                "description" => __("default color is #ffffff", "hvc"),
                "group" 			=> "Settings",
            ),             
                                  
            array(
                "type"              => "colorpicker",
                "heading"           => __( "Background Color", "hvc" ),
                "param_name"        => "color",
                //"value"             => '#ffffff',
                "description" => __("use Alpha/rgba color for transperant bg", "hvc"),
                "dependency"        => array( 'element' => "style", 'value' => array('circle', 'square', 'caption') ),
                "group" 			=> "Settings",
            ),            
            
            
            array(
                "type" => "checkbox",
                "heading" => __("Remove Border", "hvc"),
                "param_name" => "remove_border",
                "admin_label"		=> true,
                "description" => __("", "hvc"),
                "dependency"        => array( 'element' => "style", 'value' => array('circle', 'square') ),
                "group" 			=> "Settings",
            ),            
            array(
                "type" => "checkbox",
                "heading" => __("Remove Underline", "hvc"),
                "param_name" => "remove_underline",
                "admin_label"		=> true,
                "description" => __("", "hvc"),
                "dependency"        => array( 'element' => "style", 'value' => array('circle') ),
                "group" 			=> "Settings",
            ),             
            
            array(
                "type"              => "textfield",
                "heading"           => __( "Move Texts to Bottom", "hvc" ),
                "param_name"        => "move_texts",
                "value"             => '0',
                "description" => __("moving heading & desc texts to bottom. default value is 0px", "hvc"),
                "dependency"        => array( 'element' => "style", 'value' => array('circle', 'square', 'caption') ),
                "group" 			=> "Settings",
            ),
            
            array(
                "type" => "checkbox",
                "heading" => __("Description Text to Normal", "hvc"),
                "param_name" => "desc_normal",
                "description" => __("", "hvc"),
                "dependency"        => array( 'element' => "style", 'value' => array('circle', 'square') ),
                "group" 			=> "Settings",
            ),            
                   
            
            array(
                "type"              => "textfield",
                "heading"           => __( "Custom CSS Class", "hvc" ),
                "param_name"        => "css_class",
                "value"             => '',
                "description" => __("using custom class you can customize styles.", "hvc"),
                "group" 			=> "Settings",
            ),            
            
            
                            
                
            )
        ) 
    
    );
    
    
    
function asvc_hover_effects( $atts, $content = null, $tag ) {
                extract(shortcode_atts(array(
                
                        "style" => 'circle',
                        "circle_effects" => 'effect1',
                        "square_effects" => 'effect1',
                        "square2_effects" => 'effect1',
                        "caption_effects" => 'effect1',
                        "jibon_effects" => 'effect1',
                        "animation" => 'left_to_right',
                        "image" => '',
                        "title" => 'Heading Goes Here',
                        "description" => 'description goes here',
                        "link" => '',
                        "image_width" => '216',
                        "image_height" => '216',
                        //"move_texts_topbottom" => '15',
                        //"move_texts_leftright" => '15',
                        "font" => 'Open+Sans',
                        "heading_font_size" => '16',
                        "heading_color" => '#ffffff',
                        "desc_font_size" => '12',
                        "desc_color" => '#ffffff',
                        "color" => '',
                        "remove_border" => '',
                        "remove_underline" => '',
                        "open_link" => '',
                        "move_texts" => '',
                        "desc_normal" => '',
                        "css_class" => '',
                        
                ), $atts));
                
                
                
                wp_register_style('hvc_ihover', plugins_url( 'css/ihover.css' , __FILE__ ) );
                wp_enqueue_style( 'hvc_ihover' );
                
                wp_register_style('hvc_square2', plugins_url( 'css/square2.css' , __FILE__ ) );
                wp_enqueue_style( 'hvc_square2' );
                
                wp_register_style('hvc_caption', plugins_url( 'css/caption.css' , __FILE__ ) );
                wp_enqueue_style( 'hvc_caption' );
                
                wp_register_style('hvc_othersFour', plugins_url( 'css/othersFour.css' , __FILE__ ) );
                wp_enqueue_style( 'hvc_othersFour' );
                
                wp_register_style('hvc_custom', plugins_url( 'css/custom.css' , __FILE__ ) ); 
                wp_enqueue_style( 'hvc_custom' );               
                
                
                
                

                $image = wp_get_attachment_image_src( $image, 'full' ); 
                    
                $link   = vc_build_link( $link );
                
                if ($remove_underline) {
                        $remove_underline = 'none';
                }
                
                if ($desc_normal) {
                    $output ='<style>.ih-item .info p {
                                                font-style: normal !important;
                                        }</style>';
                }      
                
                $output .= '<style>@import url(https://fonts.googleapis.com/css?family='.$font.');</style>';
                
                
                
                if ( $style=='circle' && $circle_effects=='effect1' ){
        
                        $output .= '<div class="ih-item circle effect1 '.$css_class.'" style="width:'.$image_width.'px; height:'.$image_width.'px;background:'.$color.'"><a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                                                        <div class="spinner"></div>
                                                                <div class="img" style="box-shadow:none; width:'.$image_width.'px; height:'.$image_width.'px;"><img src="'.$image[0].'"></div>
                                                                        <div class="info" style="background:'.$color.'">
                                                                <div class="info-back" >
                                                                <h3 style="letter-spacing: 0px; margin-top: '.$move_texts.'px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$title.'</h3>
                                                                <p style="font-family: '.$font.'; border-top: '.$remove_underline.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$description.'</p>
                                        
                                        </div></div></a></div>';
                }
                
                if ( $style=='circle' && $circle_effects=='effect2' ){
        
                        $output .= '<div class="ih-item circle effect2 '.$animation.' '.$css_class.'" style="width:'.$image_width.'px; height:'.$image_width.'px;background:'.$color.'"><a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                                                        <div class="spinner"></div>
                                                                <div class="img" style="box-shadow:none; width:'.$image_width.'px; height:'.$image_width.'px;"><img src="'.$image[0].'"></div>
                                                                        <div class="info" style="background:'.$color.'">
                                                                <h3 style="letter-spacing: 0px; margin-top: '.$move_texts.'px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$title.'</h3>
                                                                <p style="font-family: '.$font.'; border-top: '.$remove_underline.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$description.'</p>
                                        
                                        </div></a></div>';
                }
                                
                if ( $style=='circle' && $circle_effects=='effect3' ){
        
                        $output .= '<div class="ih-item circle effect3 '.$animation.' '.$css_class.'" style="width:'.$image_width.'px; height:'.$image_width.'px;background:'.$color.'"><a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                                                        <div class="spinner"></div>
                                                                <div class="img" style="box-shadow:none; width:'.$image_width.'px; height:'.$image_width.'px;"><img src="'.$image[0].'"></div>
                                                                        <div class="info" style="background:'.$color.'">
                                                                <h3 style="letter-spacing: 0px; margin-top: '.$move_texts.'px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$title.'</h3>
                                                                <p style="font-family: '.$font.'; border-top: '.$remove_underline.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$description.'</p>
                                        
                                        </div></a></div>';
                }
                
                if ( $style=='circle' && $circle_effects=='effect4' ){
        
                        $output .= '<div class="ih-item circle effect4 '.$animation.' '.$css_class.'" style="width:'.$image_width.'px; height:'.$image_width.'px;background:'.$color.'"><a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                                                        <div class="spinner"></div>
                                                                <div class="img" style="box-shadow:none; width:'.$image_width.'px; height:'.$image_width.'px;"><img src="'.$image[0].'"></div>
                                                                        <div class="info" style="background:'.$color.'">
                                                                <h3 style="letter-spacing: 0px; margin-top: '.$move_texts.'px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$title.'</h3>
                                                                <p style="font-family: '.$font.'; border-top: '.$remove_underline.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$description.'</p>
                                        
                                        </div></a></div>';
                }
                
                if ( $style=='circle' && $circle_effects=='effect5' ){
        
                        $output .= '<div class="ih-item circle effect5 '.$animation.' '.$css_class.'" style="width:'.$image_width.'px; height:'.$image_width.'px;background:'.$color.'"><a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                                                        <div class="spinner"></div>
                                                                <div class="img" style="width:'.$image_width.'px; height:'.$image_width.'px;"><img src="'.$image[0].'"></div>
                                                                        <div class="info">
                                                                <div class="info-back" style="background:'.$color.'">
                                                                <h3 style="letter-spacing: 0px; margin-top: '.$move_texts.'px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$title.'</h3>
                                                                <p style="font-family: '.$font.'; border-top: '.$remove_underline.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$description.'</p>
                                        
                                        </div></div></a></div>';
                }        
 

                if ( $style=='circle' && $circle_effects=='effect6' ){
        
                        $output .= '<div class="ih-item circle effect6 scale_down_up '.$css_class.'" style="width:'.$image_width.'px; height:'.$image_width.'px;background:'.$color.'"><a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                                                        <div class="spinner"></div>
                                                                <div class="img" style="box-shadow:none; width:'.$image_width.'px; height:'.$image_width.'px;"><img src="'.$image[0].'"></div>
                                                                        <div class="info" style="background:'.$color.'">
                                                                <h3 style="letter-spacing: 0px; margin-top: '.$move_texts.'px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$title.'</h3>
                                                                <p style="font-family: '.$font.'; border-top: '.$remove_underline.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$description.'</p>
                                        
                                        </div></a></div>';
                }

                if ( $style=='circle' && $circle_effects=='effect7' ){
        
                        $output .= '<div class="ih-item circle effect7 '.$animation.' '.$css_class.'" style="width:'.$image_width.'px; height:'.$image_width.'px;background:'.$color.'"><a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                                                        <div class="spinner"></div>
                                                                <div class="img" style="width:'.$image_width.'px; height:'.$image_width.'px;"><img src="'.$image[0].'"></div>
                                                                        <div class="info">
                                                                <div class="info-back" style="background:'.$color.'">
                                                                <h3 style="letter-spacing: 0px; margin-top: '.$move_texts.'px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$title.'</h3>
                                                                <p style="font-family: '.$font.'; border-top: '.$remove_underline.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$description.'</p>
                                        
                                        </div></div></a></div>';
                }
                
                if ( $style=='circle' && $circle_effects=='effect8' ){
        
                                                $output .= '<div class="ih-item circle effect8 '.$animation.' '.$css_class.'" style="width:'.$image_width.'px; height:'.$image_width.'px;background:'.$color.'"><a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                                                                                                                                <div class="img-container">
                                                                                                                                        <div class="img" style="width:'.$image_width.'px; height:'.$image_width.'px;"><img src="'.$image[0].'"></div>
                                                                                                                                </div>
                                                                                                                                <div class="info-container">
                                                                                                                                        <div class="info" style="background:'.$color.'">
                                                                                                                                                <h3 style="letter-spacing: 0px; margin-top: '.$move_texts.'px; font-family: '.$font.'; font-size: '.$heading_font.'px; color:'.$heading_color.';">'.$title.'</h3>
                                                                                                                                                <p style="font-family: '.$font.'; border-top: '.$remove_underline.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$description.'</p>
                                                                                                                                        </div>
                                                                </div></a></div>';
                }        
                
                if ( $style=='circle' && $circle_effects=='effect9' ){
        
                        $output .= '<div class="ih-item circle effect9 '.$animation.' '.$css_class.'" style="width:'.$image_width.'px; height:'.$image_width.'px;background:'.$color.'"><a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                                                        <div class="spinner"></div>
                                                                <div class="img" style="box-shadow:none; width:'.$image_width.'px; height:'.$image_width.'px;"><img src="'.$image[0].'"></div>
                                                                        <div class="info" style="background:'.$color.'">
                                                                <h3 style="letter-spacing: 0px; margin-top: '.$move_texts.'px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$title.'</h3>
                                                                <p style="font-family: '.$font.'; border-top: '.$remove_underline.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$description.'</p>
                                        
                                        </div></a></div>';
                }
                                
                if ( $style=='circle' && $circle_effects=='effect10' ){
        
                        $output .= '<div class="ih-item circle effect10 top_to_bottom '.$css_class.'" style="width:'.$image_width.'px; height:'.$image_width.'px;background:'.$color.'"><a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                                                        <div class="spinner"></div>
                                                                <div class="img" style="box-shadow:none; width:'.$image_width.'px; height:'.$image_width.'px;"><img src="'.$image[0].'"></div>
                                                                        <div class="info" style="background:'.$color.'">
                                                                <h3 style="letter-spacing: 0px; margin-top: '.$move_texts.'px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$title.'</h3>
                                                                <p style="font-family: '.$font.'; border-top: '.$remove_underline.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$description.'</p>
                                        
                                        </div></a></div>';
                }      
                    
                if ( $style=='circle' && $circle_effects=='effect11' ){
        
                        $output .= '<div class="ih-item circle effect11 '.$animation.' '.$css_class.'" style="width:'.$image_width.'px; height:'.$image_width.'px;background:'.$color.'"><a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                                                        <div class="spinner"></div>
                                                                <div class="img" style="box-shadow:none; width:'.$image_width.'px; height:'.$image_width.'px;"><img src="'.$image[0].'"></div>
                                                                        <div class="info" style="background:'.$color.'">
                                                                <h3 style="letter-spacing: 0px; margin-top: '.$move_texts.'px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$title.'</h3>
                                                                <p style="font-family: '.$font.'; border-top: '.$remove_underline.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$description.'</p>
                                        
                                        </div></a></div>';
                }        
                
                if ( $style=='circle' && $circle_effects=='effect12' ){
        
                        $output .= '<div class="ih-item circle effect12 '.$animation.' '.$css_class.'" style="width:'.$image_width.'px; height:'.$image_width.'px;background:'.$color.'"><a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                                                        <div class="spinner"></div>
                                                                <div class="img" style="box-shadow:none; width:'.$image_width.'px; height:'.$image_width.'px;"><img src="'.$image[0].'"></div>
                                                                        <div class="info" style="background:'.$color.'">
                                                                <h3 style="letter-spacing: 0px; margin-top: '.$move_texts.'px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$title.'</h3>
                                                                <p style="font-family: '.$font.'; border-top: '.$remove_underline.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$description.'</p>
                                        
                                        </div></a></div>';
                }

                if ( $style=='circle' && $circle_effects=='effect13' ){
        
                        $output .= '<div class="ih-item circle effect13 from_left_and_right '.$css_class.'" style="width:'.$image_width.'px; height:'.$image_width.'px;background:'.$color.'"><a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                                                        <div class="spinner"></div>
                                                                <div class="img" style="width:'.$image_width.'px; height:'.$image_width.'px;"><img src="'.$image[0].'"></div>
                                                                        <div class="info">
                                                                <div class="info-back" style="background:'.$color.'">
                                                                <h3 style="letter-spacing: 0px; margin-top: '.$move_texts.'px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$title.'</h3>
                                                                <p style="font-family: '.$font.'; border-top: '.$remove_underline.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$description.'</p>
                                        
                                        </div></div></a></div>';
                }
                
                if ( $style=='circle' && $circle_effects=='effect14' ){
        
                        $output .= '<div class="ih-item circle effect14 '.$animation.' '.$css_class.'" style="width:'.$image_width.'px; height:'.$image_width.'px;background:'.$color.'"><a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                                                        <div class="spinner"></div>
                                                                <div class="img" style="box-shadow:none; width:'.$image_width.'px; height:'.$image_width.'px;"><img src="'.$image[0].'"></div>
                                                                        <div class="info" style="background:'.$color.'">
                                                                <h3 style="letter-spacing: 0px; margin-top: '.$move_texts.'px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$title.'</h3>
                                                                <p style="font-family: '.$font.'; border-top: '.$remove_underline.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$description.'</p>
                                        
                                        </div></a></div>';
                }        
                
                if ( $style=='circle' && $circle_effects=='effect15' ){
        
                        $output .= '<div class="ih-item circle effect15 left_to_right '.$css_class.'" style="width:'.$image_width.'px; height:'.$image_width.'px;background:'.$color.'"><a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                                                        <div class="spinner"></div>
                                                                <div class="img" style="box-shadow:none; width:'.$image_width.'px; height:'.$image_width.'px;"><img src="'.$image[0].'"></div>
                                                                        <div class="info" style="background:'.$color.'">
                                                                <h3 style="letter-spacing: 0px; margin-top: '.$move_texts.'px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$title.'</h3>
                                                                <p style="font-family: '.$font.'; border-top: '.$remove_underline.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$description.'</p>
                                        
                                        </div></a></div>';
                }        
                
                if ( $style=='circle' && $circle_effects=='effect16' ){
        
                        $output .= '<div class="ih-item circle effect16 left_to_right '.$css_class.'" style="width:'.$image_width.'px; height:'.$image_width.'px;background:'.$color.'"><a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                                                        <div class="spinner"></div>
                                                                <div class="img" style="box-shadow:none; width:'.$image_width.'px; height:'.$image_width.'px;"><img src="'.$image[0].'"></div>
                                                                        <div class="info" style="background:'.$color.'">
                                                                <h3 style="letter-spacing: 0px; margin-top: '.$move_texts.'px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$title.'</h3>
                                                                <p style="font-family: '.$font.'; border-top: '.$remove_underline.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$description.'</p>
                                        
                                        </div></a></div>';
                }         
                
                if ( $style=='circle' && $circle_effects=='effect17' ){
        
                        $output .= '<div class="ih-item circle effect17 '.$css_class.'" style="width:'.$image_width.'px; height:'.$image_width.'px;background:'.$color.'"><a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                                                        <div class="spinner"></div>
                                                                <div class="img" style="box-shadow:none; width:'.$image_width.'px; height:'.$image_width.'px;"><img src="'.$image[0].'"></div>
                                                                        <div class="info" style="background:'.$color.'">
                                                                <h3 style="letter-spacing: 0px; margin-top: '.$move_texts.'px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$title.'</h3>
                                                                <p style="font-family: '.$font.'; border-top: '.$remove_underline.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$description.'</p>
                                        
                                        </div></a></div>';
                }         
                
                if ( $style=='circle' && $circle_effects=='effect18' ){
        
                        $output .= '<div class="ih-item circle effect18 '.$animation.' '.$css_class.'" style="width:'.$image_width.'px; height:'.$image_width.'px;background:'.$color.'"><a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                                                        <div class="spinner"></div>
                                                                <div class="img" style="width:'.$image_width.'px; height:'.$image_width.'px;"><img src="'.$image[0].'"></div>
                                                                        <div class="info">
                                                                <div class="info-back" style="background:'.$color.'">
                                                                <h3 style="letter-spacing: 0px; margin-top: '.$move_texts.'px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$title.'</h3>
                                                                <p style="font-family: '.$font.'; border-top: '.$remove_underline.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$description.'</p>
                                        
                                        </div></div></a></div>';
                }    
                        
                if ( $style=='circle' && $circle_effects=='effect19' ){
        
                        $output .= '<div class="ih-item circle effect19 '.$animation.' '.$css_class.'" style="width:'.$image_width.'px; height:'.$image_width.'px;background:'.$color.'"><a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                                                        <div class="spinner"></div>
                                                                <div class="img" style="box-shadow:none; width:'.$image_width.'px; height:'.$image_width.'px;"><img src="'.$image[0].'"></div>
                                                                        <div class="info" style="background:'.$color.'">
                                                                <h3 style="letter-spacing: 0px; margin-top: '.$move_texts.'px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$title.'</h3>
                                                                <p style="font-family: '.$font.'; border-top: '.$remove_underline.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$description.'</p>
                                        
                                        </div></a></div>';
                }        

                if ( $style=='circle' && $circle_effects=='effect20' ){
        
                        $output .= '<div class="ih-item circle effect20 '.$animation.' '.$css_class.'" style="width:'.$image_width.'px; height:'.$image_width.'px;background:'.$color.'"><a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                                                        <div class="spinner"></div>
                                                                <div class="img" style="width:'.$image_width.'px; height:'.$image_width.'px;"><img src="'.$image[0].'"></div>
                                                                        <div class="info">
                                                                <div class="info-back" style="background:'.$color.'">
                                                                <h3 style="letter-spacing: 0px; margin-top: '.$move_texts.'px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$title.'</h3>
                                                                <p style="font-family: '.$font.'; border-top: '.$remove_underline.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$description.'</p>
                                        
                                        </div></div></a></div>';
                }        
                
                if ( $style=='square' && $square_effects=='effect1' ){
        
                        $output .= '<div class="ih-item square effect1 left_and_right '.$css_class.'" style="background:'.$color.'; height: '.$image_height.'px; width: '.$image_width.'px;"><a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                                                        <div class="spinner"></div>
                                                                <div class="img"><img style="height: '.$image_height.'px; width: '.$image_width.'px;" src="'.$image[0].'"></div>
                                                                        <div class="info" style="background:'.$color.'">
                                                                <h3 style="font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.'; margin-top: '.$move_texts.'px">'.$title.'</h3>
                                                                <p style="font-family: '.$font.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$description.'</p>
                                        
                                        </div></a></div>';
                }        
                
                if ( $style=='square' && $square_effects=='effect2' ){
        
                        $output .= '<div class="ih-item square effect2 '.$css_class.'" style="background:'.$color.'; height: '.$image_height.'px; width: '.$image_width.'px;"><a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                                                        <div class="spinner"></div>
                                                                <div class="img"><img style="height: '.$image_height.'px; width: '.$image_width.'px;" src="'.$image[0].'"></div>
                                                                        <div class="info" style="background:'.$color.'">
                                                                <h3 style="font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.'; margin-top: '.$move_texts.'px">'.$title.'</h3>
                                                                <p style="font-family: '.$font.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$description.'</p>
                                        
                                        </div></a></div>';
                }        

                if ( $style=='square' && $square_effects=='effect3' ){
        
                        $output .= '<div class="ih-item square effect3 '.$animation.' '.$css_class.'" style="background:'.$color.'; height: '.$image_height.'px; width: '.$image_width.'px;"><a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                                                        <div class="spinner"></div>
                                                                <div class="img"><img style="height: '.$image_height.'px; width: '.$image_width.'px;" src="'.$image[0].'"></div>
                                                                        <div class="info" style="background:'.$color.'">
                                                                <h3 style="font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.'; margin-top: '.$move_texts.'px">'.$title.'</h3>
                                                                <p style="font-family: '.$font.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$description.'</p>
                                        
                                        </div></a></div>';
                }

                if ( $style=='square' && $square_effects=='effect4' ){
        
                        $output .= '<div class="ih-item square effect4 '.$css_class.'" style="background:'.$color.'; height: '.$image_height.'px; width: '.$image_width.'px;"><a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                                                        <div class="spinner"></div>
                                                        <div class="img"><img style="height: '.$image_height.'px; width: '.$image_width.'px;" src="'.$image[0].'"></div>
                                                        <div class="mask1" style="position: absolute; height: '.$image_height.'px; width: '.$image_width.'px;; left: auto; right: 0px; top: 0px;"></div>
                                                        <div class="mask2" style="position: absolute; height: '.$image_height.'px; width: '.$image_width.'px; top: auto; bottom: 0px; left: 0px;"></div>
                                                        <div class="info" style="background:'.$color.'">
                                                            <h3 style="font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.'; margin-top: '.$move_texts.'px">'.$title.'</h3>
                                                            <p style="font-family: '.$font.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$description.'</p>
                                </div></a></div>';
                }

                if ( $style=='square' && $square_effects=='effect5' ){
        
                        $output .= '<div class="ih-item square effect5 '.$animation.' '.$css_class.'" style="background:'.$color.'; height: '.$image_height.'px; width: '.$image_width.'px;"><a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                                                        <div class="spinner"></div>
                                                                <div class="img"><img style="height: '.$image_height.'px; width: '.$image_width.'px;" src="'.$image[0].'"></div>
                                                                        <div class="info" style="background:'.$color.'">
                                                                <h3 style="font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.'; margin-top: '.$move_texts.'px">'.$title.'</h3>
                                                                <p style="font-family: '.$font.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$description.'</p>
                                        
                                        </div></a></div>';
                }

                if ( $style=='square' && $square_effects=='effect6' ){
        
                        $output .= '<div class="ih-item square effect6 from_top_and_bottom '.$css_class.'" style="background:'.$color.'; height: '.$image_height.'px; width: '.$image_width.'px;"><a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                                                        <div class="spinner"></div>
                                                                <div class="img"><img style="height: '.$image_height.'px; width: '.$image_width.'px;" src="'.$image[0].'"></div>
                                                                        <div class="info" style="background:'.$color.'">
                                                                <h3 style="font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.'; margin-top: '.$move_texts.'px">'.$title.'</h3>
                                                                <p style="font-family: '.$font.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$description.'</p>
                                        
                                        </div></a></div>';
                }

                if ( $style=='square' && $square_effects=='effect7' ){
        
                        $output .= '<div class="ih-item square effect7 '.$css_class.'" style="background:'.$color.'; height: '.$image_height.'px; width: '.$image_width.'px;"><a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                                                        <div class="spinner"></div>
                                                                <div class="img"><img style="height: '.$image_height.'px; width: '.$image_width.'px;" src="'.$image[0].'"></div>
                                                                        <div class="info" style="background:'.$color.'">
                                                                <h3 style="font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.'; margin-top: '.$move_texts.'px">'.$title.'</h3>
                                                                <p style="font-family: '.$font.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$description.'</p>
                                        
                                        </div></a></div>';
                }
                
                if ( $style=='square' && $square_effects=='effect8' ){
        
                        $output .= '<div class="ih-item square effect8 scale_up '.$css_class.'" style="background:'.$color.'; height: '.$image_height.'px; width: '.$image_width.'px;"><a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                                                        <div class="spinner"></div>
                                                                <div class="img"><img style="height: '.$image_height.'px; width: '.$image_width.'px;" src="'.$image[0].'"></div>
                                                                        <div class="info" style="background:'.$color.'">
                                                                <h3 style="font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.'; margin-top: '.$move_texts.'px">'.$title.'</h3>
                                                                <p style="font-family: '.$font.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$description.'</p>
                                        
                                        </div></a></div>';
                }
                
                if ( $style=='square' && $square_effects=='effect9' ){
        
                        $output .= '<div class="ih-item square effect9 '.$animation.' '.$css_class.'" style="background:'.$color.'; height: '.$image_height.'px; width: '.$image_width.'px;"><a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                                                        <div class="spinner"></div>
                                                                <div class="img" style="height: '.$image_height.'px; background:'.$color.'"><img style="height: '.$image_height.'px; width: '.$image_width.'px;" src="'.$image[0].'"></div>
                                                                        <div class="info">
                                                                        <div class="info-back"  style="background:'.$color.'">
                                                                <h3 style="font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.'; margin-top: '.$move_texts.'px">'.$title.'</h3>
                                                                <p style="font-family: '.$font.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$description.'</p>
                                        
                                        </div></div></a></div>';
                }
                
                if ( $style=='square' && $square_effects=='effect10' ){
        
                        $output .= '<div class="ih-item square effect10 '.$animation.' '.$css_class.'" style="background:'.$color.'; height: '.$image_height.'px; width: '.$image_width.'px;"><a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                                                        <div class="spinner"></div>
                                                                <div class="img"><img style="height: '.$image_height.'px; width: '.$image_width.'px;" src="'.$image[0].'"></div>
                                                                        <div class="info" style="background:'.$color.'">
                                                                <h3 style="font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.'; margin-top: '.$move_texts.'px">'.$title.'</h3>
                                                                <p style="font-family: '.$font.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$description.'</p>
                                        
                                        </div></a></div>';
                }

                if ( $style=='square' && $square_effects=='effect11' ){
        
                        $output .= '<div class="ih-item square effect11 '.$animation.' '.$css_class.'" style="background:'.$color.'; height: '.$image_height.'px; width: '.$image_width.'px;"><a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                                                        <div class="spinner"></div>
                                                                <div class="img"><img style="height: '.$image_height.'px; width: '.$image_width.'px;" src="'.$image[0].'"></div>
                                                                        <div class="info" style="background:'.$color.'">
                                                                <h3 style="font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.'; margin-top: '.$move_texts.'px">'.$title.'</h3>
                                                                <p style="font-family: '.$font.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$description.'</p>
                                        
                                        </div></a></div>';
                }
                
                if ( $style=='square' && $square_effects=='effect12' ){
        
                        $output .= '<div class="ih-item square effect12 '.$animation.' '.$css_class.'" style="background:'.$color.'; height: '.$image_height.'px; width: '.$image_width.'px;"><a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                                                        <div class="spinner"></div>
                                                                <div class="img"><img style="height: '.$image_height.'px; width: '.$image_width.'px;" src="'.$image[0].'"></div>
                                                                        <div class="info" style="background:'.$color.'">
                                                                <h3 style="font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.'; margin-top: '.$move_texts.'px">'.$title.'</h3>
                                                                <p style="font-family: '.$font.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$description.'</p>
                                        
                                        </div></a></div>';
                }

                if ( $style=='square' && $square_effects=='effect13' ){
        
                        $output .= '<div class="ih-item square effect13 '.$animation.' '.$css_class.'" style="background:'.$color.'; height: '.$image_height.'px; width: '.$image_width.'px;"><a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                                                        <div class="spinner"></div>
                                                                <div class="img"><img style="height: '.$image_height.'px; width: '.$image_width.'px;" src="'.$image[0].'"></div>
                                                                        <div class="info" style="background:'.$color.'">
                                                                <h3 style="font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.'; margin-top: '.$move_texts.'px">'.$title.'</h3>
                                                                <p style="font-family: '.$font.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$description.'</p>
                                        
                                        </div></a></div>';
                }

                if ( $style=='square' && $square_effects=='effect14' ){
        
                        $output .= '<div class="ih-item square effect14 '.$animation.' '.$css_class.'" style="background:'.$color.'; height: '.$image_height.'px; width: '.$image_width.'px;"><a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                                                        <div class="spinner"></div>
                                                                <div class="img"><img style="height: '.$image_height.'px; width: '.$image_width.'px;" src="'.$image[0].'"></div>
                                                                        <div class="info" style="background:'.$color.'">
                                                                <h3 style="font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.'; margin-top: '.$move_texts.'px">'.$title.'</h3>
                                                                <p style="font-family: '.$font.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$description.'</p>
                                        
                                        </div></a></div>';
                }

                if ( $style=='square' && $square_effects=='effect15' ){
        
                        $output .= '<div class="ih-item square effect15 '.$animation.' '.$css_class.'" style="background:'.$color.'; height: '.$image_height.'px; width: '.$image_width.'px;"><a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                                                        <div class="spinner"></div>
                                                                <div class="img"><img style="height: '.$image_height.'px; width: '.$image_width.'px;" src="'.$image[0].'"></div>
                                                                        <div class="info" style="background:'.$color.'">
                                                                <h3 style="font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.'; margin-top: '.$move_texts.'px">'.$title.'</h3>
                                                                <p style="font-family: '.$font.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$description.'</p>
                                        
                                        </div></a></div>';
                }

                if ( $style=='square2' && $square2_effects=='effect1' ){
        
                        $output .= '<a class="square2_link" href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                                                <div id="square-box" class="burst-circle ahe-square-teal '.$css_class.'" style="height: '.$image_height.'px; width: '.$image_width.'px;">
                                                        <div class="ahe-square"></div>
                                                        <img src="'.$image[0].'">
                                                        <h1 style="top: '.$move_texts.'%; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';" >'.$title.'</h1>
                                                </div></a>';
                }

                if ( $style=='square2' && $square2_effects=='effect2' ){
        
                        $output .= '<a class="square2_link" href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                                                <div id="square-box" class="burst-circle strawberry '.$css_class.'" style="height: '.$image_height.'px; width: '.$image_width.'px;">
                                                        <div class="ahe-square"></div>
                                                        <img src="'.$image[0].'">
                                                        <h1 style="top: '.$move_texts.'%; font-family: '.$font.'; font-size: '.$heading_font_size.'px;" >'.$title.'</h1>
                                                </div></a>';
                }

                if ( $style=='square2' && $square2_effects=='effect3' ){
        
                        $output .= '<a class="square2_link" href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                                                <div id="square-box" class="burst-circle grape '.$css_class.'" style="height: '.$image_height.'px; width: '.$image_width.'px;">
                                                        <div class="ahe-square"></div>
                                                        <img src="'.$image[0].'">
                                                        <h1 style="top: '.$move_texts.'%; font-family: '.$font.'; font-size: '.$heading_font_size.'px;" >'.$title.'</h1>
                                                </div></a>';
                }

                if ( $style=='square2' && $square2_effects=='effect4' ){
        
                        $output .= '<a class="square2_link" href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                                                <div id="square-box" class="burst-circle orange '.$css_class.'" style="height: '.$image_height.'px; width: '.$image_width.'px;">
                                                        <div class="ahe-square"></div>
                                                        <img src="'.$image[0].'">
                                                        <h1 style="top: '.$move_texts.'%; font-family: '.$font.'; font-size: '.$heading_font_size.'px;" >'.$title.'</h1>
                                                </div></a>';
                }
                
                if ( $style=='square2' && $square2_effects=='effect5' ){
        
                        $output .= '<a class="square2_link" href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                                                <div id="square-box" class="burst-rumb ahe-square-teal '.$css_class.'" style="height: '.$image_height.'px; width: '.$image_width.'px;">
                                                        <div class="ahe-square"></div>
                                                        <img src="'.$image[0].'">
                                                        <h1 style="top: '.$move_texts.'%; font-family: '.$font.'; font-size: '.$heading_font_size.'px;" >'.$title.'</h1>
                                                </div></a>';
                }
                
                if ( $style=='square2' && $square2_effects=='effect6' ){
        
                        $output .= '<a class="square2_link" href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                                                <div id="square-box" class="burst-rumb strawberry '.$css_class.'" style="height: '.$image_height.'px; width: '.$image_width.'px;">
                                                        <div class="ahe-square"></div>
                                                        <img src="'.$image[0].'">
                                                        <h1 style="top: '.$move_texts.'%; font-family: '.$font.'; font-size: '.$heading_font_size.'px;" >'.$title.'</h1>
                                                </div></a>';
                }
                
                if ( $style=='square2' && $square2_effects=='effect7' ){
        
                        $output .= '<a class="square2_link" href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                                                <div id="square-box" class="burst-rumb grape '.$css_class.'" style="height: '.$image_height.'px; width: '.$image_width.'px;">
                                                        <div class="ahe-square"></div>
                                                        <img src="'.$image[0].'">
                                                        <h1 style="top: '.$move_texts.'%; font-family: '.$font.'; font-size: '.$heading_font_size.'px;" >'.$title.'</h1>
                                                </div></a>';
                }
                
                if ( $style=='square2' && $square2_effects=='effect8' ){
        
                        $output .= '<a class="square2_link" href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                                                <div id="square-box" class="burst-rumb orange '.$css_class.'" style="height: '.$image_height.'px; width: '.$image_width.'px;">
                                                        <div class="ahe-square"></div>
                                                        <img src="'.$image[0].'">
                                                        <h1 style="top: '.$move_texts.'%; font-family: '.$font.'; font-size: '.$heading_font_size.'px;" >'.$title.'</h1>
                                                </div></a>';
                }
                
                if ( $style=='square2' && $square2_effects=='effect9' ){
        
                        $output .= '<a class="square2_link" href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                                                <div id="square-box" class="burst-up ahe-square-teal '.$css_class.'" style="height: '.$image_height.'px; width: '.$image_width.'px;">
                                                        <div class="ahe-square"></div>
                                                        <img src="'.$image[0].'">
                                                        <h1 style="top: '.$move_texts.'%; font-family: '.$font.'; font-size: '.$heading_font_size.'px;" >'.$title.'</h1>
                                                </div></a>';
                }
                
                if ( $style=='square2' && $square2_effects=='effect10' ){
        
                        $output .= '<a class="square2_link" href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                                                <div id="square-box" class="burst-up strawberry '.$css_class.'" style="height: '.$image_height.'px; width: '.$image_width.'px;">
                                                        <div class="ahe-square"></div>
                                                        <img src="'.$image[0].'">
                                                        <h1 style="top: '.$move_texts.'%; font-family: '.$font.'; font-size: '.$heading_font_size.'px;" >'.$title.'</h1>
                                                </div></a>';
                }
                
                if ( $style=='square2' && $square2_effects=='effect11' ){
        
                        $output .= '<a class="square2_link" href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                                                <div id="square-box" class="burst-up grape '.$css_class.'" style="height: '.$image_height.'px; width: '.$image_width.'px;">
                                                        <div class="ahe-square"></div>
                                                        <img src="'.$image[0].'">
                                                        <h1 style="top: '.$move_texts.'%; font-family: '.$font.'; font-size: '.$heading_font_size.'px;" >'.$title.'</h1>
                                                </div></a>';
                }
                
                if ( $style=='square2' && $square2_effects=='effect12' ){
        
                        $output .= '<a class="square2_link" href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                                                <div id="square-box" class="burst-up orange '.$css_class.'" style="height: '.$image_height.'px; width: '.$image_width.'px;">
                                                        <div class="ahe-square"></div>
                                                        <img src="'.$image[0].'">
                                                        <h1 style="top: '.$move_texts.'%; font-family: '.$font.'; font-size: '.$heading_font_size.'px;" >'.$title.'</h1>
                                                </div></a>';
                }
                
                if ( $style=='square2' && $square2_effects=='effect13' ){
        
                        $output .= '<a class="square2_link" href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                                                <div id="square-box" class="burst-side ahe-square-teal '.$css_class.'" style="height: '.$image_height.'px; width: '.$image_width.'px;">
                                                        <div class="ahe-square"></div>
                                                        <img src="'.$image[0].'">
                                                        <h1 style="top: '.$move_texts.'%; font-family: '.$font.'; font-size: '.$heading_font_size.'px;" >'.$title.'</h1>
                                                </div></a>';
                }
                
                if ( $style=='square2' && $square2_effects=='effect14' ){
        
                        $output .= '<a class="square2_link" href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                                                <div id="square-box" class="burst-side strawberry '.$css_class.'" style="height: '.$image_height.'px; width: '.$image_width.'px;">
                                                        <div class="ahe-square"></div>
                                                        <img src="'.$image[0].'">
                                                        <h1 style="top: '.$move_texts.'%; font-family: '.$font.'; font-size: '.$heading_font_size.'px;" >'.$title.'</h1>
                                                </div></a>';
                }
                
                if ( $style=='square2' && $square2_effects=='effect15' ){
        
                        $output .= '<a class="square2_link" href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                                                <div id="square-box" class="burst-side grape '.$css_class.'" style="height: '.$image_height.'px; width: '.$image_width.'px;">
                                                        <div class="ahe-square"></div>
                                                        <img src="'.$image[0].'">
                                                        <h1 style="top: '.$move_texts.'%; font-family: '.$font.'; font-size: '.$heading_font_size.'px;" >'.$title.'</h1>
                                                </div></a>';
                }        
                
                if ( $style=='square2' && $square2_effects=='effect16' ){
        
                        $output .= '<a class="square2_link" href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                                                <div id="square-box" class="burst-side orange '.$css_class.'" style="height: '.$image_height.'px; width: '.$image_width.'px;">
                                                        <div class="ahe-square"></div>
                                                        <img src="'.$image[0].'">
                                                        <h1 style="top: '.$move_texts.'%; font-family: '.$font.'; font-size: '.$heading_font_size.'px;" >'.$title.'</h1>
                                                </div></a>';
                }         
                
                if ( $style=='square2' && $square2_effects=='effect17' ){
        
                        $output .= '<a class="square2_link" href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                                                <div id="square-box" class="triangle ahe-square-teal '.$css_class.'" style="height: '.$image_height.'px; width: '.$image_width.'px;">
                                                        <div class="ahe-square"></div>
                                                        <img src="'.$image[0].'">
                                                        <h1 style="top: '.$move_texts.'%; font-family: '.$font.'; font-size: '.$heading_font_size.'px;" >'.$title.'</h1>
                                                </div></a>';
                }        
                
                if ( $style=='square2' && $square2_effects=='effect18' ){
        
                        $output .= '<a class="square2_link" href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                                                <div id="square-box" class="triangle strawberry '.$css_class.'" style="height: '.$image_height.'px; width: '.$image_width.'px;">
                                                        <div class="ahe-square"></div>
                                                        <img src="'.$image[0].'">
                                                        <h1 style="top: '.$move_texts.'%; font-family: '.$font.'; font-size: '.$heading_font_size.'px;" >'.$title.'</h1>
                                                </div></a>';
                }        
                
                if ( $style=='square2' && $square2_effects=='effect19' ){
        
                        $output .= '<a class="square2_link" href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                                                <div id="square-box" class="triangle grape '.$css_class.'" style="height: '.$image_height.'px; width: '.$image_width.'px;">
                                                        <div class="ahe-square"></div>
                                                        <img src="'.$image[0].'">
                                                        <h1 style="top: '.$move_texts.'%; font-family: '.$font.'; font-size: '.$heading_font_size.'px;" >'.$title.'</h1>
                                                </div></a>';
                }        
                
                if ( $style=='square2' && $square2_effects=='effect20' ){
        
                        $output .= '<a class="square2_link" href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                                                <div id="square-box" class="triangle orange '.$css_class.'" style="height: '.$image_height.'px; width: '.$image_width.'px;">
                                                        <div class="ahe-square"></div>
                                                        <img src="'.$image[0].'">
                                                        <h1 style="top: '.$move_texts.'%; font-family: '.$font.'; font-size: '.$heading_font_size.'px;" >'.$title.'</h1>
                                                </div></a>';
                }        
                
                
                
                
                
                if ( $style=='caption' && $caption_effects=='effect1' ){
        
                        $output .= '<div  class="wcp-caption-plugin '.$css_class.'" style="width:'.$image_width.'px; height:'.$image_height.'px;box-shadow: 1px 2px 2px #cacaca;border-radius: ;">

                <a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                
                        <div class="image-caption-box">
                                <div class="caption spaceoutleft-image captiontext" style="width:'.$image_width.'px; height:'.$image_height.'px; background-color: '.$color.'; color: ; opacity: ;">
                                                <div style="display:table; height:100%; width: 100%;">
                                                        <div style="text-align: center; padding: 5px;" class="centered-text">
                                                                <h3 style="letter-spacing: 0px; margin-top: 0px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$title.'</h3>
                                                                <p style="font-family: '.$font.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$description.'</p>
                                                        </div>
                                                </div>
                                </div>
                                                <img style="width:'.$image_width.'px; height:'.$image_height.'px; transition: all 1s ease; animation-duration: 1s;" src="'.$image[0].'" class="wcp-caption-image">

                                </div>
                        </a>
                </div>';
                }     
                    
                if ( $style=='caption' && $caption_effects=='effect2' ){
        
                        $output .= '<div  class="wcp-caption-plugin '.$css_class.'" style="width:'.$image_width.'px; height:'.$image_height.'px;box-shadow: 1px 2px 2px #cacaca;border-radius: ;">

                <a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                
                        <div class="image-caption-box">
                                <div class="caption spaceoutup-image captiontext" style="width:'.$image_width.'px; height:'.$image_height.'px; background-color: '.$color.'; color: ; opacity: ;">
                                                <div style="display:table; height:100%; width: 100%;">
                                                        <div style="text-align: center; padding: 5px;" class="centered-text">
                                                                <h3 style="letter-spacing: 0px; margin-top: 0px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$title.'</h3>
                                                                <p style="font-family: '.$font.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$description.'</p>
                                                        </div>
                                                </div>
                                </div>
                                                <img style="width:'.$image_width.'px; height:'.$image_height.'px; transition: all 1s ease; animation-duration: 1s;" src="'.$image[0].'" class="wcp-caption-image">

                                </div>
                        </a>
                </div>';
                }        
                
                if ( $style=='caption' && $caption_effects=='effect3' ){
        
                        $output .= '<div  class="wcp-caption-plugin '.$css_class.'" style="width:'.$image_width.'px; height:'.$image_height.'px;box-shadow: 1px 2px 2px #cacaca;border-radius: ;">

                <a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                
                        <div class="image-caption-box">
                                <div class="caption spaceoutdown-image captiontext" style="width:'.$image_width.'px; height:'.$image_height.'px; background-color: '.$color.'; color: ; opacity: ;">
                                                <div style="display:table; height:100%; width: 100%;">
                                                        <div style="text-align: center; padding: 5px;" class="centered-text">
                                                                <h3 style="letter-spacing: 0px; margin-top: 0px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$title.'</h3>
                                                                <p style="font-family: '.$font.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$description.'</p>
                                                        </div>
                                                </div>
                                </div>
                                                <img style="width:'.$image_width.'px; height:'.$image_height.'px; transition: all 1s ease; animation-duration: 1s;" src="'.$image[0].'" class="wcp-caption-image">

                                </div>
                        </a>
                </div>';
                }        
                
                if ( $style=='caption' && $caption_effects=='effect4' ){
        
                        $output .= '<div  class="wcp-caption-plugin '.$css_class.'" style="width:'.$image_width.'px; height:'.$image_height.'px;box-shadow: 1px 2px 2px #cacaca;border-radius: ;">

                <a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                
                        <div class="image-caption-box">
                                <div class="caption spaceoutright-image captiontext" style="width:'.$image_width.'px; height:'.$image_height.'px; background-color: '.$color.'; color: ; opacity: ;">
                                                <div style="display:table; height:100%; width: 100%;">
                                                        <div style="text-align: center; padding: 5px;" class="centered-text">
                                                                <h3 style="letter-spacing: 0px; margin-top: 0px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$title.'</h3>
                                                                <p style="font-family: '.$font.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$description.'</p>
                                                        </div>
                                                </div>
                                </div>
                                                <img style="width:'.$image_width.'px; height:'.$image_height.'px; transition: all 1s ease; animation-duration: 1s;" src="'.$image[0].'" class="wcp-caption-image">

                                </div>
                        </a>
                </div>';
                } 
                
                if ( $style=='caption' && $caption_effects=='effect5' ){
        
                        $output .= '<div  class="wcp-caption-plugin '.$css_class.'" style="width:'.$image_width.'px; height:'.$image_height.'px;box-shadow: 1px 2px 2px #cacaca;border-radius: ;">

                <a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                
                        <div class="image-caption-box" style="perspective: 2500px; perspective-origin: 50% 50%;">
                                <div class="caption flip-image-horizontal captiontext" style="width:'.$image_width.'px; height:'.$image_height.'px; background-color: '.$color.'; color: ; opacity: ;">
                                                <div style="display:table; height:100%; width: 100%;">
                                                        <div style="text-align: center; padding: 5px;" class="centered-text">
                                                                <h3 style="letter-spacing: 0px; margin-top: 0px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$title.'</h3>
                                                                <p style="font-family: '.$font.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$description.'</p>
                                                        </div>
                                                </div>
                                </div>
                                                <img style="width:'.$image_width.'px; height:'.$image_height.'px; transition: all 1s ease; animation-duration: 1s;" src="'.$image[0].'" class="wcp-caption-image">

                                </div>
                        </a>
                </div>';
                }        
                
                if ( $style=='caption' && $caption_effects=='effect6' ){
        
                        $output .= '<div  class="wcp-caption-plugin '.$css_class.'" style="width:'.$image_width.'px; height:'.$image_height.'px;box-shadow: 1px 2px 2px #cacaca;border-radius: ;">

                <a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                
                        <div class="image-caption-box" style="perspective: 2500px; perspective-origin: 50% 50%;">
                                <div class="caption flip-image-horizontal captiontext" style="width:'.$image_width.'px; height:'.$image_height.'px; background-color: '.$color.'; color: ; opacity: ;">
                                                <div style="display:table; height:100%; width: 100%;">
                                                        <div style="text-align: center; padding: 5px;" class="centered-text">
                                                                <h3 style="letter-spacing: 0px; margin-top: 0px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$title.'</h3>
                                                                <p style="font-family: '.$font.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$description.'</p>
                                                        </div>
                                                </div>
                                </div>
                                                <img style="width:'.$image_width.'px; height:'.$image_height.'px; transition: all 1s ease; animation-duration: 1s;" src="'.$image[0].'" class="wcp-caption-image">

                                </div>
                        </a>
                </div>';
                }
                

                if ( $style=='caption' && $caption_effects=='effect7' ){
        
                        $output .= '<div  class="wcp-caption-plugin '.$css_class.'" style="width:'.$image_width.'px; height:'.$image_height.'px;box-shadow: 1px 2px 2px #cacaca;border-radius: ;">

                <a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                
                        <div class="image-caption-box" style="perspective: 2500px; perspective-origin: 50% 50%;">
                                <div class="caption page-turn-from-top captiontext" style="width:'.$image_width.'px; height:'.$image_height.'px; background-color: '.$color.'; color: ; opacity: ;">
                                                <div style="display:table; height:100%; width: 100%;">
                                                        <div style="text-align: center; padding: 5px;" class="centered-text">
                                                                <h3 style="letter-spacing: 0px; margin-top: 0px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$title.'</h3>
                                                                <p style="font-family: '.$font.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$description.'</p>
                                                        </div>
                                                </div>
                                </div>
                                                <img style="width:'.$image_width.'px; height:'.$image_height.'px; transition: all 1s ease; animation-duration: 1s;" src="'.$image[0].'" class="wcp-caption-image">

                                </div>
                        </a>
                </div>';
                }       
                
                                
                if ( $style=='caption' && $caption_effects=='effect8' ){
        
                        $output .= '<div  class="wcp-caption-plugin '.$css_class.'" style="width:'.$image_width.'px; height:'.$image_height.'px;box-shadow: 1px 2px 2px #cacaca;border-radius: ;">

                <a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                
                        <div class="image-caption-box" style="perspective: 2500px; perspective-origin: 50% 50%;">
                                <div class="caption page-turn-from-bottom captiontext" style="width:'.$image_width.'px; height:'.$image_height.'px; background-color: '.$color.'; color: ; opacity: ;">
                                                <div style="display:table; height:100%; width: 100%;">
                                                        <div style="text-align: center; padding: 5px;" class="centered-text">
                                                                <h3 style="letter-spacing: 0px; margin-top: 0px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$title.'</h3>
                                                                <p style="font-family: '.$font.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$description.'</p>
                                                        </div>
                                                </div>
                                </div>
                                                <img style="width:'.$image_width.'px; height:'.$image_height.'px; transition: all 1s ease; animation-duration: 1s;" src="'.$image[0].'" class="wcp-caption-image">

                                </div>
                        </a>
                </div>';
                }        
                
                if ( $style=='caption' && $caption_effects=='effect9' ){
        
                        $output .= '<div  class="wcp-caption-plugin '.$css_class.'" style="width:'.$image_width.'px; height:'.$image_height.'px;box-shadow: 1px 2px 2px #cacaca;border-radius: ;">

                <a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                
                        <div class="image-caption-box">
                                <div class="caption swap-caption captiontext" style="width:'.$image_width.'px; height:'.$image_height.'px; background-color: '.$color.'; color: ; opacity: ;">
                                                <div style="display:table; height:100%; width: 100%;">
                                                        <div style="text-align: center; padding: 5px;" class="centered-text">
                                                                <h3 style="letter-spacing: 0px; margin-top: 0px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$title.'</h3>
                                                                <p style="font-family: '.$font.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$description.'</p>
                                                        </div>
                                                </div>
                                </div>
                                                <img style="width:'.$image_width.'px; height:'.$image_height.'px; transition: all 1s ease; animation-duration: 1s;" src="'.$image[0].'" class="wcp-caption-image">

                                </div>
                        </a>
                </div>';
                }        
                
                if ( $style=='caption' && $caption_effects=='effect10' ){
        
                        $output .= '<div  class="wcp-caption-plugin '.$css_class.'" style="width:'.$image_width.'px; height:'.$image_height.'px;box-shadow: 1px 2px 2px #cacaca;border-radius: ;">

                <a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                
                        <div class="image-caption-box">
                                <div class="caption rotateup-image captiontext" style="width:'.$image_width.'px; height:'.$image_height.'px; background-color: '.$color.'; color: ; opacity: ;">
                                                <div style="display:table; height:100%; width: 100%;">
                                                        <div style="text-align: center; padding: 5px;" class="centered-text">
                                                                <h3 style="letter-spacing: 0px; margin-top: 0px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$title.'</h3>
                                                                <p style="font-family: '.$font.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$description.'</p>
                                                        </div>
                                                </div>
                                </div>
                                                <img style="width:'.$image_width.'px; height:'.$image_height.'px; transition: all 1s ease; animation-duration: 1s;" src="'.$image[0].'" class="wcp-caption-image">

                                </div>
                        </a>
                </div>';
                } 
                
                
                if ( $style=='caption' && $caption_effects=='effect11' ){
        
                        $output .= '<div  class="wcp-caption-plugin '.$css_class.'" style="width:'.$image_width.'px; height:'.$image_height.'px;box-shadow: 1px 2px 2px #cacaca;border-radius: ;">

                <a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                
                        <div class="image-caption-box">
                                <div class="caption rotatedown-image captiontext" style="width:'.$image_width.'px; height:'.$image_height.'px; background-color: '.$color.'; color: ; opacity: ;">
                                                <div style="display:table; height:100%; width: 100%;">
                                                        <div style="text-align: center; padding: 5px;" class="centered-text">
                                                                <h3 style="letter-spacing: 0px; margin-top: 0px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$title.'</h3>
                                                                <p style="font-family: '.$font.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$description.'</p>
                                                        </div>
                                                </div>
                                </div>
                                                <img style="width:'.$image_width.'px; height:'.$image_height.'px; transition: all 1s ease; animation-duration: 1s;" src="'.$image[0].'" class="wcp-caption-image">

                                </div>
                        </a>
                </div>';
                }        
                
                if ( $style=='caption' && $caption_effects=='effect12' ){
        
                        $output .= '<div  class="wcp-caption-plugin '.$css_class.'" style="width:'.$image_width.'px; height:'.$image_height.'px;box-shadow: 1px 2px 2px #cacaca;border-radius: ;">

                <a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                
                        <div class="image-caption-box">
                                <div class="caption fall-down-image captiontext" style="width:'.$image_width.'px; height:'.$image_height.'px; background-color: '.$color.'; color: ; opacity: ;">
                                                <div style="display:table; height:100%; width: 100%;">
                                                        <div style="text-align: center; padding: 5px;" class="centered-text">
                                                                <h3 style="letter-spacing: 0px; margin-top: 0px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$title.'</h3>
                                                                <p style="font-family: '.$font.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$description.'</p>
                                                        </div>
                                                </div>
                                </div>
                                                <img style="width:'.$image_width.'px; height:'.$image_height.'px; transition: all 1s ease; animation-duration: 1s;" src="'.$image[0].'" class="wcp-caption-image">

                                </div>
                        </a>
                </div>';
                }        
                
                if ( $style=='caption' && $caption_effects=='effect13' ){
        
                        $output .= '<div  class="wcp-caption-plugin '.$css_class.'" style="width:'.$image_width.'px; height:'.$image_height.'px;box-shadow: 1px 2px 2px #cacaca;border-radius: ;">

                <a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                
                        <div class="image-caption-box">
                                <div class="caption zoom-image-out-caption-twist captiontext" style="width:'.$image_width.'px; height:'.$image_height.'px; background-color: '.$color.'; color: ; opacity: ;">
                                                <div style="display:table; height:100%; width: 100%;">
                                                        <div style="text-align: center; padding: 5px;" class="centered-text">
                                                                <h3 style="letter-spacing: 0px; margin-top: 0px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$title.'</h3>
                                                                <p style="font-family: '.$font.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$description.'</p>
                                                        </div>
                                                </div>
                                </div>
                                                <img style="width:'.$image_width.'px; height:'.$image_height.'px; transition: all 1s ease; animation-duration: 1s;" src="'.$image[0].'" class="wcp-caption-image">

                                </div>
                        </a>
                </div>';
                }                        

                if ( $style=='caption' && $caption_effects=='effect14' ){
        
                        $output .= '<div  class="wcp-caption-plugin '.$css_class.'" style="width:'.$image_width.'px; height:'.$image_height.'px;box-shadow: 1px 2px 2px #cacaca;border-radius: ;">

                <a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                
                        <div class="image-caption-box">
                                <div class="caption opendoorup-image captiontext" style="width:'.$image_width.'px; height:'.$image_height.'px; background-color: '.$color.'; color: ; opacity: ;">
                                                <div style="display:table; height:100%; width: 100%;">
                                                        <div style="text-align: center; padding: 5px;" class="centered-text">
                                                                <h3 style="letter-spacing: 0px; margin-top: 0px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$title.'</h3>
                                                                <p style="font-family: '.$font.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$description.'</p>
                                                        </div>
                                                </div>
                                </div>
                                                <img style="width:'.$image_width.'px; height:'.$image_height.'px; transition: all 1s ease; animation-duration: 1s;" src="'.$image[0].'" class="wcp-caption-image">

                                </div>
                        </a>
                </div>';
                }        
                
                if ( $style=='caption' && $caption_effects=='effect15' ){
        
                        $output .= '<div  class="wcp-caption-plugin '.$css_class.'" style="width:'.$image_width.'px; height:'.$image_height.'px;box-shadow: 1px 2px 2px #cacaca;border-radius: ;">

                <a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                
                        <div class="image-caption-box">
                                <div class="caption tinright-image captiontext" style="width:'.$image_width.'px; height:'.$image_height.'px; background-color: '.$color.'; color: ; opacity: ;">
                                                <div style="display:table; height:100%; width: 100%;">
                                                        <div style="text-align: center; padding: 5px;" class="centered-text">
                                                                <h3 style="letter-spacing: 0px; margin-top: 0px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$title.'</h3>
                                                                <p style="font-family: '.$font.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$description.'</p>
                                                        </div>
                                                </div>
                                </div>
                                                <img style="width:'.$image_width.'px; height:'.$image_height.'px; transition: all 1s ease; animation-duration: 1s;" src="'.$image[0].'" class="wcp-caption-image">

                                </div>
                        </a>
                </div>';
                }

                if ( $style=='caption' && $caption_effects=='effect16' ){
        
                        $output .= '<div  class="wcp-caption-plugin '.$css_class.'" style="width:'.$image_width.'px; height:'.$image_height.'px;box-shadow: 1px 2px 2px #cacaca;border-radius: ;">

                <a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                
                        <div class="image-caption-box">
                                <div class="caption rotateleft-image captiontext" style="width:'.$image_width.'px; height:'.$image_height.'px; background-color: '.$color.'; color: ; opacity: ;">
                                                <div style="display:table; height:100%; width: 100%;">
                                                        <div style="text-align: center; padding: 5px;" class="centered-text">
                                                                <h3 style="letter-spacing: 0px; margin-top: 0px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$title.'</h3>
                                                                <p style="font-family: '.$font.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$description.'</p>
                                                        </div>
                                                </div>
                                </div>
                                                <img style="width:'.$image_width.'px; height:'.$image_height.'px; transition: all 1s ease; animation-duration: 1s;" src="'.$image[0].'" class="wcp-caption-image">

                                </div>
                        </a>
                </div>';
                }

                if ( $style=='caption' && $caption_effects=='effect17' ){
        
                        $output .= '<div  class="wcp-caption-plugin '.$css_class.'" style="width:'.$image_width.'px; height:'.$image_height.'px;box-shadow: 1px 2px 2px #cacaca;border-radius: ;">

                <a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                
                        <div class="image-caption-box">
                                <div class="caption opendoorleft-image captiontext" style="width:'.$image_width.'px; height:'.$image_height.'px; background-color: '.$color.'; color: ; opacity: ;">
                                                <div style="display:table; height:100%; width: 100%;">
                                                        <div style="text-align: center; padding: 5px;" class="centered-text">
                                                                <h3 style="letter-spacing: 0px; margin-top: 0px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$title.'</h3>
                                                                <p style="font-family: '.$font.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$description.'</p>
                                                        </div>
                                                </div>
                                </div>
                                                <img style="width:'.$image_width.'px; height:'.$image_height.'px; transition: all 1s ease; animation-duration: 1s;" src="'.$image[0].'" class="wcp-caption-image">

                                </div>
                        </a>
                </div>';
                }

                if ( $style=='caption' && $caption_effects=='effect18' ){
        
                        $output .= '<div  class="wcp-caption-plugin '.$css_class.'" style="width:'.$image_width.'px; height:'.$image_height.'px;box-shadow: 1px 2px 2px #cacaca;border-radius: ;">

                <a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                
                        <div class="image-caption-box">
                                <div class="caption simple-fade captiontext" style="width:'.$image_width.'px; height:'.$image_height.'px; background-color: '.$color.'; color: ; opacity: ;">
                                                <div style="display:table; height:100%; width: 100%;">
                                                        <div style="text-align: center; padding: 5px;" class="centered-text">
                                                                <h3 style="letter-spacing: 0px; margin-top: 0px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$title.'</h3>
                                                                <p style="font-family: '.$font.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$description.'</p>
                                                        </div>
                                                </div>
                                </div>
                                                <img style="width:'.$image_width.'px; height:'.$image_height.'px; transition: all 1s ease; animation-duration: 1s;" src="'.$image[0].'" class="wcp-caption-image">

                                </div>
                        </a>
                </div>';
                }

                if ( $style=='caption' && $caption_effects=='effect19' ){
        
                        $output .= '<div  class="wcp-caption-plugin '.$css_class.'" style="width:'.$image_width.'px; height:'.$image_height.'px;box-shadow: 1px 2px 2px #cacaca;border-radius: ;">

                <a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                
                        <div class="image-caption-box">
                                <div class="caption foolish-image captiontext" style="width:'.$image_width.'px; height:'.$image_height.'px; background-color: '.$color.'; color: ; opacity: ;">
                                                <div style="display:table; height:100%; width: 100%;">
                                                        <div style="text-align: center; padding: 5px;" class="centered-text">
                                                                <h3 style="letter-spacing: 0px; margin-top: 0px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$title.'</h3>
                                                                <p style="font-family: '.$font.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$description.'</p>
                                                        </div>
                                                </div>
                                </div>
                                                <img style="width:'.$image_width.'px; height:'.$image_height.'px; transition: all 1s ease; animation-duration: 1s;" src="'.$image[0].'" class="wcp-caption-image">

                                </div>
                        </a>
                </div>';
                }

                if ( $style=='caption' && $caption_effects=='effect20' ){
        
                        $output .= '<div  class="wcp-caption-plugin '.$css_class.'" style="width:'.$image_width.'px; height:'.$image_height.'px;box-shadow: 1px 2px 2px #cacaca;border-radius: ;">

                <a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                
                        <div class="image-caption-box">
                                <div class="caption opendoorright-image captiontext" style="width:'.$image_width.'px; height:'.$image_height.'px; background-color: '.$color.'; color: ; opacity: ;">
                                                <div style="display:table; height:100%; width: 100%;">
                                                        <div style="text-align: center; padding: 5px;" class="centered-text">
                                                                <h3 style="letter-spacing: 0px; margin-top: 0px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$title.'</h3>
                                                                <p style="font-family: '.$font.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$description.'</p>
                                                        </div>
                                                </div>
                                </div>
                                                <img style="width:'.$image_width.'px; height:'.$image_height.'px; transition: all 1s ease; animation-duration: 1s;" src="'.$image[0].'" class="wcp-caption-image">

                                </div>
                        </a>
                </div>';
                }

                if ( $style=='jibon' && $jibon_effects=='effect1' ){
        
                        $output .= '<div class="style4">
                                                        <div style="max-width: '.$image_width.'px; max-height: '.$image_height.'px;" class="pic">
                                                <a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                                                <img src="'.$image[0].'" class="pic-image">
                                                        <span class="pic-caption top-to-bottom">
                                                                <h1 style="font-size: '.$heading_font_size.'px; font-family: '.$font.'; color: '.$heading_color.';" class="pic-title">'.$title.'</h1>
                                                                <p style="font-size: 13px; font-family: '.$font.'; color: '.$desc_color.';">'.$description.'</p>
                                                        </span>
                                                </a>
                                                </div>
                                        </div>';
                }

                if ( $style=='jibon' && $jibon_effects=='effect2' ){
        
                        $output .= '<div class="style4">
                                                        <div style="max-width: '.$image_width.'px; max-height: '.$image_height.'px;" class="pic">
                                                <a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                                                <img src="'.$image[0].'" class="pic-image">
                                                        <span class="pic-caption bottom-to-top">
                                                                <h1 style="font-size: '.$heading_font_size.'px; font-family: '.$font.'; color: '.$heading_color.';" class="pic-title">'.$title.'</h1>
                                                                <p style="font-size: 13px; font-family: '.$font.'; color: '.$desc_color.';">'.$description.'</p>
                                                        </span>
                                                </a>
                                                </div>
                                        </div>';
                                        
                }          

                if ( $style=='jibon' && $jibon_effects=='effect3' ){
        
                        $output .= '<div class="style4">
                                                        <div style="max-width: '.$image_width.'px; max-height: '.$image_height.'px;" class="pic">
                                                <a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                                                <img src="'.$image[0].'" class="pic-image">
                                                        <span class="pic-caption left-to-right">
                                                                <h1 style="font-size: '.$heading_font_size.'px; font-family: '.$font.'; color: '.$heading_color.';" class="pic-title">'.$title.'</h1>
                                                                <p style="font-size: 13px; font-family: '.$font.'; color: '.$desc_color.';">'.$description.'</p>
                                                        </span>
                                                </a>
                                                </div>
                                        </div>';
                                        
                }
                
                if ( $style=='jibon' && $jibon_effects=='effect4' ){
        
                        $output .= '<div class="style4">
                                                        <div style="max-width: '.$image_width.'px; max-height: '.$image_height.'px;" class="pic">
                                                <a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                                                <img src="'.$image[0].'" class="pic-image">
                                                        <span class="pic-caption right-to-left">
                                                                <h1 style="font-size: '.$heading_font_size.'px; font-family: '.$font.'; color: '.$heading_color.';" class="pic-title">'.$title.'</h1>
                                                                <p style="font-size: 13px; font-family: '.$font.'; color: '.$desc_color.';">'.$description.'</p>
                                                        </span>
                                                </a>
                                                </div>
                                        </div>';
                                        
                }

                if ( $style=='jibon' && $jibon_effects=='effect5' ){
        
                        $output .= '<div class="style4">
                                                        <div style="max-width: '.$image_width.'px; max-height: '.$image_height.'px;" class="pic">
                                                <a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                                                <img src="'.$image[0].'" class="pic-image">
                                                        <span class="pic-caption rotate-in">
                                                                <h1 style="font-size: '.$heading_font_size.'px; font-family: '.$font.'; color: '.$heading_color.';" class="pic-title">'.$title.'</h1>
                                                                <p style="font-size: 13px; font-family: '.$font.'; color: '.$desc_color.';">'.$description.'</p>
                                                        </span>
                                                </a>
                                                </div>
                                        </div>';
                                        
                }
                if ( $style=='jibon' && $jibon_effects=='effect6' ){
        
                        $output .= '<div class="style4">
                                                        <div style="max-width: '.$image_width.'px; max-height: '.$image_height.'px;" class="pic">
                                                <a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                                                <img src="'.$image[0].'" class="pic-image">
                                                        <span class="pic-caption rotate-out">
                                                                <h1 style="font-size: '.$heading_font_size.'px; font-family: '.$font.'; color: '.$heading_color.';" class="pic-title">'.$title.'</h1>
                                                                <p style="font-size: 13px; font-family: '.$font.'; color: '.$desc_color.';">'.$description.'</p>
                                                        </span>
                                                </a>
                                                </div>
                                        </div>';
                                        
                }
                if ( $style=='jibon' && $jibon_effects=='effect7' ){
        
                        $output .= '<div class="style4">
                                                        <div style="max-width: '.$image_width.'px; max-height: '.$image_height.'px;" class="pic">
                                                <a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                                                <img src="'.$image[0].'" class="pic-image">
                                                        <span class="pic-caption open-up">
                                                                <h1 style="font-size: '.$heading_font_size.'px; font-family: '.$font.'; color: '.$heading_color.';" class="pic-title">'.$title.'</h1>
                                                                <p style="font-size: 13px; font-family: '.$font.'; color: '.$desc_color.';">'.$description.'</p>
                                                        </span>
                                                </a>
                                                </div>
                                        </div>';
                                        
                }

                if ( $style=='jibon' && $jibon_effects=='effect8' ){
        
                        $output .= '<div class="style4">
                                                        <div style="max-width: '.$image_width.'px; max-height: '.$image_height.'px;" class="pic">
                                                <a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                                                <img src="'.$image[0].'" class="pic-image">
                                                        <span class="pic-caption open-down">
                                                                <h1 style="font-size: '.$heading_font_size.'px; font-family: '.$font.'; color: '.$heading_color.';" class="pic-title">'.$title.'</h1>
                                                                <p style="font-size: 13px; font-family: '.$font.'; color: '.$desc_color.';">'.$description.'</p>
                                                        </span>
                                                </a>
                                                </div>
                                        </div>';
                                        
                }
                if ( $style=='jibon' && $jibon_effects=='effect9' ){
        
                        $output .= '<div class="style4">
                                                        <div style="max-width: '.$image_width.'px; max-height: '.$image_height.'px;" class="pic">
                                                <a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                                                <img src="'.$image[0].'" class="pic-image">
                                                        <span class="pic-caption open-left">
                                                                <h1 style="font-size: '.$heading_font_size.'px; font-family: '.$font.'; color: '.$heading_color.';" class="pic-title">'.$title.'</h1>
                                                                <p style="font-size: 13px; font-family: '.$font.'; color: '.$desc_color.';">'.$description.'</p>
                                                        </span>
                                                </a>
                                                </div>
                                        </div>';
                                        
                }
                if ( $style=='jibon' && $jibon_effects=='effect10' ){
        
                        $output .= '<div class="style4">
                                                        <div style="max-width: '.$image_width.'px; max-height: '.$image_height.'px;" class="pic">
                                                <a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                                                <img src="'.$image[0].'" class="pic-image">
                                                        <span class="pic-caption open-right">
                                                                <h1 style="font-size: '.$heading_font_size.'px; font-family: '.$font.'; color: '.$heading_color.';" class="pic-title">'.$title.'</h1>
                                                                <p style="font-size: 13px; font-family: '.$font.'; color: '.$desc_color.';">'.$description.'</p>
                                                        </span>
                                                </a>
                                                </div>
                                        </div>';
                                        
                }
                if ( $style=='jibon' && $jibon_effects=='effect11' ){
        
                        $output .= '<div class="style4">
                                                        <div style="max-width: '.$image_width.'px; max-height: '.$image_height.'px;" class="pic">
                                                <a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                                                <img src="'.$image[0].'" class="pic-image">
                                                        <span class="pic-caption come-left">
                                                                <h1 style="font-size: '.$heading_font_size.'px; font-family: '.$font.'; color: '.$heading_color.';" class="pic-title">'.$title.'</h1>
                                                                <p style="font-size: 13px; font-family: '.$font.'; color: '.$desc_color.';">'.$description.'</p>
                                                        </span>
                                                </a>
                                                </div>
                                        </div>';
                                        
                }
                if ( $style=='jibon' && $jibon_effects=='effect12' ){
        
                        $output .= '<div class="style4">
                                                        <div style="max-width: '.$image_width.'px; max-height: '.$image_height.'px;" class="pic">
                                                <a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                                                <img src="'.$image[0].'" class="pic-image">
                                                        <span class="pic-caption come-right">
                                                                <h1 style="font-size: '.$heading_font_size.'px; font-family: '.$font.'; color: '.$heading_color.';" class="pic-title">'.$title.'</h1>
                                                                <p style="font-size: 13px; font-family: '.$font.'; color: '.$desc_color.';">'.$description.'</p>
                                                        </span>
                                                </a>
                                                </div>
                                        </div>';
                                        
                }
                
        return $output;
 }




        add_shortcode('asvc-hover', 'asvc_hover_effects');    
    
    
        }
    }
}
