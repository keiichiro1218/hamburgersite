</div>    
    <div class="l-footer width-pc" >
        <div class="l-footer__contents">
            <?php
                if (has_nav_menu( 'footer_nav' )){
                    echo '<div class="l-footer__content">';
                    wp_nav_menu( array( 
                        'theme_location' => 'footer_nav' 
                        ) ); 
                        echo '</div>';
                    }
                    ?>
                <p> 
                    <small>Copyright : <?php bloginfo( 'name' ); ?> 2021</small>
                </p>
        </div>
    </div>
<?php wp_footer(); ?>
