<?php get_header() ?>
<?php if(have_posts()): ?>
    <?php while(have_posts()): the_post() ?>
   <?php 
   $logo = get_field("logo");
   $order_in_restaurant_link = get_field("order_in_restaurant_link");
   $about_billy_the_greek_text_area = get_field("about_billy_the_greek_text_area");
   $about_the_food_truck_description = get_field("about_the_food_truck_description");
   $facebook_link = get_field("facebook_link");
   $instagram_link = get_field("instagram_link");
   $contact_email = get_field("contact_email");
   $background_video = get_field("background_video");
   $about_billy_the_greek_image = get_field("about_billy_the_greek_image");
   $food_inspection_report_link = get_field("food_inspection_report_link");
   $billy_the_greek_catch_phrase = get_field("billy_the_greek_catch_phrase");
   $big_image = get_field("big_image");
   $sides_headline = get_field("sides_headline");
   $small_image_1 = get_field("small_image_1");
   $small_image_2 = get_field("small_image_2");
   $small_image_3 = get_field("small_image_3");

   ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="description" content="Experience authentic Greek flavors at Esbjerg Street Food! Enjoy tzatziki, gyros, and other delicious traditional meals in a buzzing food court.">
  <meta name="keywords" content="Esbjerg, Street Food, Delicious, Graesk Mad, Greek">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Zilla+Slab:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Zilla+Slab:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">


  <title>Billy The Greek</title>

  <?php wp_head() ?>
</head>
<body>
  <div class="header-main-background">
  <video autoplay loop muted playsinline class="background-video">
      <source src='<?php echo $background_video["url"] ?>' type="">
    </video>
     <!-- Navigation bar for mobile (burger menu) -->
  <header>
    <nav class="nav">
      <button class="burger-menu" onclick="toggleMenu()">☰</button>
      
      <div class="mobile-nav" id="mobile-nav">
        <a href="<?php echo site_url('main/#about-billy'); ?>"><?php pll_e("Om us") ?></a>
        <a href="<?php echo site_url('main/#menu'); ?>"><?php pll_e("Menu") ?></a>
        <a href="<?php echo get_permalink(get_page_by_path("food-truck"))?>"><?php pll_e("Food Truck") ?></a>
        <div class="polylang-language-container">
  <button class="polylang-language-toggle-button">EN/DK</button>
  <ul class="polylang-language-list">
    <?php pll_the_languages(['show_flags' => 1, 'hide_current' => 0]); ?>
  </ul>
</div>
      </div>
      
      <div class="desktop-nav">
        <a class="menu-nav-a" href="<?php echo site_url('main/#about-billy'); ?>"><?php pll_e("Om us") ?></a>
        <a class="menu-nav-a" href="<?php echo site_url('main/#menu'); ?>">Menu</a>
        <a class="menu-nav-a" href="<?php echo get_permalink(get_page_by_path("food-truck"))?>">Food truck</a>
        
      </div>
      <div class="logo">
        <a href="<?php echo get_permalink(get_page_by_path("main"))?>">
        <img src='http://billythegreek.local/wp-content/uploads/2024/11/Billy.png' alt="Logo">        </a>
      </div>
      
      <div class="polylang-language-container-desktop">
  <button class="polylang-language-toggle-button-desktop">EN/DK</button>
  <ul class="polylang-language-list-desktop">
    <?php pll_the_languages(['show_flags' => 1, 'hide_current' => 0]); ?>
  </ul>
</div>
      <div class="Order-now-nav-button">
        <a id="order-btn-a" href="https://login.onlinepos.dk/taw_v3/18947/?page=menukort&pgid=2865385" target="_blank">
          <button class="order-button uppercase-button"><span></span><?php pll_e("Bestil nu") ?></button>
        </a>
      </div>
      
    </nav>
  </header>
<!-- Main content / Where we put everything that goes into the main page -->
<main>
    <div class="main-page-content">
      <div class="main-logo-image"><img src="<?php echo $logo["url"] ?>" alt="<?php echo $logo ["alt"] ?>"></div>
    <h1><?php echo $billy_the_greek_catch_phrase ?></h1>
    <div class="main-buttons">
      <div class="button-one uppercase-button">
        <h4><?php pll_e("bestil i restauranten:") ?></h4>
      <a href="<?php echo $order_in_restaurant_link ?>" target="_blank">
        <button class="order-btn uppercase-button"><span></span><?php pll_e("Bestil nu") ?></button>
      </a>
      </div>
      <div class="button-two uppercase-button">
        <h4><?php pll_e("book en tid:") ?></h4>
      <a href="<?php echo get_permalink(get_page_by_path("food-truck"))?>">
        <button class="food-truck-btn uppercase-button"><span></span>Food truck</button>
      </a>
      </div>
      
    </div>
    
    </div>
  </main>
  </div>
  <div class="menu-section" id="menu">
    <h2 class="menu-meander">Menu:</h2>
    <div class="card-container">
        <!-- Reusable Menu Card -->
        <?php
        $loop = new WP_Query(array(
            "post_type" => "menu-item",
            "posts_per_page" => -1
         ));
          ?>
          <?php if($loop->have_posts()): ?>
                    <?php while($loop->have_posts()): $loop->the_post() ?>

                        <?php
                        $menu_item_name = get_field("menu_item_name");
                        $menu_item_price = get_field("menu_item_price");
                        $menu_item_image = get_field("menu_item_image");
                        $food_item_description = get_field("food_item_description")
                        ?>
        <div class="menu-card">
            <div class="image-wrapper">
                <img src="<?php echo $menu_item_image["url"] ?>" alt="<?php echo $menu_item_image ["alt"] ?>">
            </div>
            <div class="details">
                <p class="item-name"><?php echo $menu_item_name ?></p>
                <p><?php echo $food_item_description ?></p>
                <p class="item-price"><?php echo $menu_item_price ?></p>
            </div>
        </div>
          <?php endwhile; ?>
        <?php endif; ?>

        <!-- End of Reusable Menu Card -->
        <!-- Duplicate the above block for additional menu items -->
        

<!--END OF ALL OF THE REUSABLE CARDS-->
    </div>
</div>

<!--START OF THE SIDE DISH PNG -->
<div class="Side-dish-menu side-dish-menu-mobile">
  <h3 class="sides-text"><?php echo $sides_headline ?></h3>
 
  <img src="<?php echo $big_image["url"] ?>" class="menu-desktop" alt="<?php echo $big_image ["alt"] ?>">
  <!--MENU IMAGES FOR MOBILE-->
  <img src="<?php echo $small_image_1["url"] ?>" class="menu-mobile" alt="<?php echo $small_image_1 ["alt"] ?>">
  <img src="<?php echo $small_image_2["url"] ?>" class="menu-mobile" alt="<?php echo $small_image_2 ["alt"] ?>">
  <img src="<?php echo $small_image_3["url"] ?>" class="menu-mobile" alt="<?php echo $small_image_3 ["alt"] ?>">
</div>

  <div class="Order-now-nav-button-body">
    <a href="https://login.onlinepos.dk/taw_v3/18947/?page=menukort&pgid=2865385" target="_blank">
      <button class="order-menu-button uppercase-button"><span></span><?php pll_e("Bestil nu") ?></button>
    </a>
</div>


<!--END OF THE SIDE DISH PNG-->
    </div>
</div>


<div class="about-and-food-truck-section" id="about-billy">
  <div class="top-background-image"></div>
    <div class="about-billy about-billy-desktop">
        <!-- Image for Desktop -->
        <img src="<?php echo $about_billy_the_greek_image["url"] ?>" alt="<?php echo $about_billy_the_greek_image ["alt"] ?>" class="about-image">
        
        <!-- Text Content -->
        <div class="about-content">
            <h1><span class="about-style"><?php pll_e("Om") ?></span> <br> Billy The Greek</h1>
            <p class="about-text"> <?php echo $about_billy_the_greek_text_area ?></p>
            
            <!-- Buttons -->
            <div class="button-group">

                <a href="<?php echo $order_in_restaurant_link ?>" target="_blank">
                  <button class="btn-primary uppercase-button"><span></span><?php pll_e("Bestil nu") ?></button>
                </a>
                <a href="<?php echo $food_inspection_report_link ?>" target="_blank">
                  <button class="btn-secondary uppercase-button"><span></span><?php pll_e("inspektion") ?></button>
                </a>
            </div>
        </div>
    </div>
    <div class="bottom-background-image"></div>

    <div class="food-truck-intro">
      <img src="http://billythegreek.local/wp-content/uploads/2024/11/food-truck-index.svg" alt="Billy The Greek Food truck" class="food-truck-image" />
      <div class="text-content">
        <h2><span class="about-style"><?php pll_e("om vores") ?></span><br>Food Truck</h2>
        <p><?php echo $about_the_food_truck_description ?></p>
        <p><span class="line-break"><?php pll_e("Find ud af mere:") ?></span></p>
        <a href="<?php echo get_permalink(get_page_by_path("food-truck"))?>">
        <button class="btn-food-truck uppercase-button"><span></span>reserve</button>
          </a>
      </div>
    </div>

</div>
<footer class="footer-background footer-index">
  <div class="footer-container">
    <!-- Left Text -->
    <div class="footer-left left-index">
      <p>Esbjerg Street Food, </p>
      <p>Kongesgade 34</p>
      <p>Esbjerg</p>
      <p class="mail-mobile mail-desktop"><a target="_blank" href="mailto:Kontakt@thegreek-sf.dk"><?php echo $contact_email ?></a></p>      
    </div>

    <!-- Center Logo -->
    <div class="footer-logo">
      <img src="<?php echo $logo["url"] ?>" alt="<?php echo $logo ["alt"] ?>">
    </div>

    <!-- Right Text -->
    <div class="footer-right right-index">
      <p><?php pll_e("Mandag – torsdag:") ?> <br> 
        <?php pll_e("11:30 – 20:00") ?></p>
      <p><?php pll_e("Fredag – lørdag:") ?> <br>
        <?php pll_e("11:30 – 21:00") ?></p>
      <p><?php pll_e("Søndag:") ?> <br> 
        <?php pll_e("11:30 – 20:00") ?></p>
    </div>
  </div>

  <div class="footer-social">
    <ul>
      <li><a href="<?php echo $facebook_link ?>" target="_blank"><img class="social-icon" src="http://billythegreek.local/wp-content/uploads/2024/11/Facebook-white.png" alt="Billy the Greek Facebook"></a></li>
      <li><a href="<?php echo $food_inspection_report_link ?>" target="_blank"><img class="social-icon smile" src="http://billythegreek.local/wp-content/uploads/2024/11/Smile-white.png" alt="Food inspection report"></a></li>
      <li><a href="<?php echo $instagram_link ?>" target="_blank"><img class="social-icon" src="http://billythegreek.local/wp-content/uploads/2024/11/Instagram-white.png" alt="Billy the Greek Instagram"></a></li>
    </ul>
  </div>
</footer>

<?php endwhile; ?>
    <?php endif; ?>
<?php get_footer() ?>