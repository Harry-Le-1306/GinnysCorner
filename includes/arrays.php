<?php

    // Nav Menu Items
    
    $navItems = array(
        array(
            slug => "index.php",
            title => "Home"
        ),
        array(
            slug => "team.php",
            title => "Team"
        ),
        array(
            slug => "menu.php",
            title => "Menu"
        ),
        array(
            slug => "contact.php",
            title => "Contact"
        )
    );

    $teamMembers = array(
        array(
            name => "Ginny",
            position => "Owner",
            bio => "My name is Ginny - the owner of Ginny's Corner Coffee & Dessert. I hope this shop will give you a flavour of the modern and healthy Australian lifestyle, “an experience for all your senses”!",
            img => "ginny"
        ),
        array(
            name => "Harry",
            position => "Head Chef",
            bio => "Harry is the head chef. He is the epitome of the phrase &ldquo;Don't judge a book by it's cover&rdquo; &mdash; You simply cannot find a better chef.",
            img => "harry"
        ),
        array(
            name => "Amy",
            position => "Baker",
            bio => "Amy has a huge passion of sweets and dessert. Let try her Chocolate Brownie, you will never forget!",
            img => "amy"
        )    
    );

    $menuItems = array(
        "chocolate-orange" => array(			
            title	=> "Chocolate Orange",
            price	=> 15,
            blurb	=> "Valencian orange oil is added to tray bake before baking. Decorated with segments of real orange slices.",
            drink	=> "Macchiato",
            image   => "chocolate-orange"            
        ),   
        "chocolate-brownie" => array(
            title	=> "Chocolate Brownie",
            price	=> 18,
            blurb	=> "The Classic Tray bake. Made with smooth dark chocolate giving this brownie a rich, gooey texture. Everyone will love this brownie!",
            drink	=> "Cappuccino",
            image   => "chocolate-brownie"
        ),     
        "white-chocolate-mud-cake" => array(            
            title	=> "White Chocolate Mud Cake",
            price	=> 20,
            blurb	=> "This soft and tender White Chocolate Mud Cake includes two layers of white chocolate mud cake covered in creamy white chocolate buttercream. .",
            drink	=> "Flat White",
            image   => "white-chocolate-mud-cake"           
        ),        
        "opera-cake" => array(            
            title	=> "Opera Cake",
            price	=> 24,
            blurb	=> "Opera cake is a classic french pastry that combines a delicate almond sponge cake with the silkiest coffee butter cream and chocolate ganache. it is topped with chocolate glaze for the final touch up.",
            drink	=> "Cafe Latte",
            image   => "opera-cake"            
        ),
        "baileys-mousse-cake" => array(            
            title	=> "Baileys Mousse Cake",
            price	=> 26,
            blurb	=> "This Baileys mousse cake is our chocolate and baileys cake dreams come true,with a dense delicious crust on the bottom and smooth baileys chocolate mousse on top,you wont be abel to stop eating it.",
            drink	=> "Macchiato",
            image   => "baileys-mousse-cake"            
        ),
        "panna-cotta" => array(            
            title	=> "Panna Cotta",
            price	=> 15,
            blurb	=> "Panna cotta, a moulded chilled dessert popular throughout Italy, served with raspberries, strawberries and strawberry syrup.",
            drink	=> "Cafe Latte",
            image   => "panna-cotta"            
        ),
        "gelato-flavours" => array(            
            title	=> "Gelato Flavours",
            price	=> 10,
            blurb	=> "All our gelato is made with our own jersey milk from our farm in Toowoomba, Country Queensland. You can choose from a wide range of flavours, apple pie, blood orange, chocolate chip, chocolate sorbet, coconut & lychee, coffee, cookies & cream, hazelnut, lemon, macadamia crunch, mango, passion fruit, strawberry, rasberry, tiramisu, and vanila.",
            drink	=> "Esspreso",
            image   => "gelato-flavours"            
        )
    );
?>