<?php get_header() ?>
    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post() ?>

<?php 
    $logo = get_field("logo");
    $intro_text = get_field('intro-text');
    $order_restaurant = get_field('order-restaurant');
    $order_button = get_field('order-button');
    $foodtruck_button = get_field('foodtruck-button');
    $booking_headline = get_field('booking-headline');
    $about_billy_headline = get_field('about-billy-headline');
    $about_billy_about = get_field('about-billy-about');
    $about_billy_text = get_field('about-billy-text');
    $facebook_link = get_field("facebook_link");
    $instagram_link = get_field("instagram_link");
    $contact_email = get_field("contact_email");
    $prices = get_field("prices");
    $background_video_foodtruck = get_field("background_video_foodtruck");
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="description" content="Book our Food Truck! Enjoy our delicious, authentic Greek flavors delivered to right where you call us!">
  <meta name="keywords" content="Esbjerg, Street Food, Delicious, Graesk Mad, Greek, Food Truck, Truck">
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
    <source src='<?php echo $background_video_foodtruck["url"] ?>' type="">
  </video>
     <!-- Navigation bar for mobile (burger menu) -->
  <header>
    <nav class="nav">
      <button class="burger-menu" onclick="toggleMenu()">☰</button>
      
      <div class="mobile-nav" id="mobile-nav">
        <a href="#"><?php pll_e("om us") ?></a>
        <a href="#">Menu</a>
        <a href="<?php echo get_permalink(get_page_by_path("food-truck"))?>">Food Truck</a>
        <div class="polylang-language-container">
  <button class="polylang-language-toggle-button">EN/DK</button>
  <ul class="polylang-language-list">
    <?php pll_the_languages(['show_flags' => 1, 'hide_current' => 0]); ?>
  </ul>
</div>
      </div>
      
      <div class="desktop-nav">
        <a class="menu-nav-a" href="#"><?php pll_e("hovedsiden") ?></a>
        <a class="menu-nav-a" href="<?php echo get_permalink(get_page_by_path("food-truck"))?>">Food truck</a>
        <a class="menu-nav-a" href="#"><?php pll_e("Bestil nu") ?></a>
        
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
      <div class="Order-now-nav-button ">
        <a href="https://login.onlinepos.dk/taw_v3/18947/?page=menukort&pgid=2865385" target="_blank">
          <button class="order-button uppercase-button"><span></span><?php pll_e("Bestil nu") ?></button>
        </a>
      </div>
      
    </nav>
  </header>

<!-- Main content / Where we put everything that goes into the main page -->
<main>
    <div class="main-page-content">
      <div class="main-logo-image"> <img src='http://billythegreek.local/wp-content/uploads/2024/11/Billy.png' alt="Logo"></div>
    <h1><?php echo esc_html($intro_text); ?></h1>
    <div class="main-buttons">
      <div class="button-one">
        <h4><?php echo esc_html($order_restaurant); ?></h4>
      <a href="https://login.onlinepos.dk/taw_v3/18947/?page=menukort&pgid=2865385" target="_blank">
        <button class="order-btn uppercase-button"><span></span><?php echo esc_html($order_button); ?></button>
      </a>
      </div>
      <div class="button-two">
        <h4><?php pll_e("Bestil tid:") ?></h4>
      <a href="<?php echo get_permalink(get_page_by_path("food-truck"))?>" >
        <button class="food-truck-btn uppercase-button"><span></span><?php echo esc_html($foodtruck_button); ?></button>
      </a>
      </div>

    </div>



    </div>

  </div>

  <main>
  <div class="calendar">
    <h1 class="calendar-meander"><?php echo esc_html($booking_headline); ?></h1>
    <p class="price-headline"><?php pll_e("Priser:") ?></p><br><br>
    <p class="price-tag"><?php echo nl2br (esc_html($prices)); ?></p>
  <?php echo do_shortcode("[booking nummonths=1 options='{calendar months_num_in_row=3 width=80% cell_height=50px}']"); ?>
</div>
<div class="top-background-image"></div>
    <div class="about-billy about-billy-desktop">

        <img src='http://billythegreek.local/wp-content/uploads/2024/11/food-truck-white.png' class="food-truck-image">

        <div class="about-content">
            <h1><span class="about-style"><?php echo esc_html($about_billy_about); ?></span> <br> <?php echo esc_html($about_billy_headline); ?><br> food truck</h1>
            <p class="about-text"> <?php echo esc_html($about_billy_text); ?></p>

            <div class="button-group button-group-food-truck">

                <a href="https://login.onlinepos.dk/taw_v3/18947/?page=menukort&pgid=2865385" target="_blank">
                  <button class="btn-primary uppercase-button"><span></span><?php pll_e("reserve:") ?></button>
                </a>
            </div>
        </div>
    </div>
    <div class="bottom-background-image"></div>

  </main>
  <footer class="footer-background footer-food-truck">
  <div class="footer-container">
    
    <div class="footer-left ">
      <p>Esbjerg Street Food, </p>
      <p>Kongesgade 34</p>
      <p>Esbjerg</p>
      <p class="mail-mobile mail-desktop"><a target="_blank" href="mailto:Kontakt@thegreek-sf.dk"><?php echo $contact_email ?></a></p>      
    </div>

    
    <div class="footer-logo">
      <img src="<?php echo $logo["url"] ?>" alt="Logo">
    </div>

    
    <div class="footer-right ">
      <p><?php pll_e("Mandag – torsdag:") ?> <br> 
        <?php pll_e("11:30 – 20:00") ?></p>
      <p><?php pll_e("Fredag – lørdag:") ?> <br>
        <?php pll_e("11:30 – 21:00") ?></p>
      <p> <?php pll_e("Søndag:") ?><br> 
        <?php pll_e("11:30 – 20:00") ?></p>
    </div>
  </div>

  <div class="footer-social">
    <ul>
      <li><a href="<?php echo $facebook_link ?>" target="_blank"><img class="social-icon" src="http://billythegreek.local/wp-content/uploads/2024/11/Facebook.png" alt="Billy the Greek Facebook"></a></li>
      <li><a href="<?php echo $food_inspection_report_link ?>" target="_blank"><img class="social-icon smile" src="http://billythegreek.local/wp-content/uploads/2024/11/Smile.png" alt="Food inspection report"></a></li>
      <li><a href="<?php echo $instagram_link ?>" target="_blank"><img class="social-icon" src="http://billythegreek.local/wp-content/uploads/2024/11/Instagram.png" alt="Billy the Greek Instagram"></a></li>
    </ul>
  </div>

</footer>

<?php endwhile; ?>
    <?php endif; ?>
<?php get_footer() ?>