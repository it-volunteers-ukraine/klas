<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <?php wp_head(); ?>
    <title>It-volunteers</title>
</head>
<body>  
<header class="header">
    <div class="container">
        <div class="header-inner">
           <div class="header-logo-div">
               <?php the_custom_logo() ?>
           </div>
            <?php wp_nav_menu( [
                                'theme_location'       => 'header',                          
                                'container'            => false,                           
                                'menu_class'           => 'menu__list',
                                'menu_id'              => false,    
                                'echo'                 => true,                            
                                'items_wrap'           => '<ul id="%1$s" class="header-inner__list %2$s">%3$s</ul>',  
                                ] ); 
                            ?>   
            <button class="header-inner__btn-burger js-open-menu" data-modal-open="">
                <svg xmlns="http://www.w3.org/2000/svg" width="31" height="32" viewBox="0 0 31 32" fill="none">
                    <path d="M3.875 8.00195H27.125M3.875 16.002H27.125M3.875 24.002H27.125" stroke="#070707"
                          stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </button>
            <button class="header-inner__btn-close-menu js-open-menu" data-modal-close="">
                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewBox="0 0 17 16" fill="none">
                    <path d="M1.729 14.9911L8.50121 8.00043L15.2734 14.9911M15.2734 1.00977L8.49992 8.00043L1.729 1.00977" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </button>
            <button class="header-inner__btn">
                Підтримати нас
            </button>
        </div>
    </div>
    <div class="mobile-menu js-menu-container is-hidden" data-modal="">
        <div class="container">
        <div class="mobile-menu-container">       
            <?php wp_nav_menu( [
                                    'theme_location'       => 'mob-header',                          
                                    'container'            => false,                           
                                    'menu_class'           => 'menu__list',
                                    'menu_id'              => false,    
                                    'echo'                 => true,                            
                                    'items_wrap'           => '<ul id="%1$s" class="mobile-menu__list %2$s">%3$s</ul>',  
                                    ] ); 
                                ?>   

            <button class="mobile-menu__btn">
                Підтримати нас
            </button>
        </div>
        </div>
    </div>
</header>
    









	