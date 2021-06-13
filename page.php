    <?php get_header(); ?>
        <div class="l-contents">
            <div class="l-contents__left width-pc">
                <div class="p-main-visual">
                    <h1><?php the_title(); ?></h1>
                </div>
                <div class="inner-main">
                    <?php if(have_posts()): while(have_posts()): the_post(); ?>
                        <div id="post-<?php the_ID(); ?>"<?php post_class(); ?>>
                            <?php the_content(); ?>
                        </div>
                    <?php endwhile; 
                    else:
                    ?>
                    <p>表示する記事がありません</p>
                
                    <?php endif; ?>
                </div>
            </div>
            <div class="l-contents__right">
                <?php get_sidebar(); ?>
            </div>
        </div>
    <?php get_footer(); ?>
    </body>
</html>
