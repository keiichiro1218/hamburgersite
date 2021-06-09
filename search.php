    <?php get_header(); ?>
    <div class="l-contents">
        <div class="l-contents__left width-pc">
            <div class="inner">
                    <div class="">
                        <h2>Search:</h2>
                        <p><?php single_cat_title(); ?></p>
                    </div>
                    <div class="p-archive-text inner ">
                        <h3>小見出しが入ります</h3>
                        <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                    </div>
                    <div class="c-wrap__search-result">
                        <?php
                        if (isset($_GET['s']) && empty($_GET['s'])) { 
                            echo '検索キーワード未入力'; 
                        } else { 
                            echo $_GET['s'] .'の検索結果は'.$wp_query->found_posts .'件です'; 
                        }
                        ?>
                    </div>
                    <div class="p-archive-visual__wrap">
                        <?php
                        //記事があればentriesブロック以下を表示
                        if ( have_posts() ) :
                        ?>
                        <?php
                        //記事数ぶんループ
                        while ( have_posts() ) :
                        the_post();
                        ?>
                        <div class="p-menu-card inner-main" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('large'); ?>
                            <?php else : ?>
                                
                                <img src="<?php  echo esc_url( get_template_directory_uri() ) ?>/img/archive.png" alt="デフォルト画像" />

                                
                        <?php endif ; ?>
                        
                        <div class="p-menu-card__text">
                        
                        <h4><?php the_title(); ?></h4>
                        <?php the_excerpt(); ?>
                        
                        <div class="p-menu-card__button">
                            <a class="c-button-detail" href="<?php the_permalink(); ?>">詳しく見る</a> 
                        </div>
                    </div>
                </div>
                <?php endwhile;
                    else :
                ?><p>表示する記事がありません</p>
                <?php endif; ?>
            </div>
            <div class="p-pagenation">
                        <?php if( function_exists("the_pagenation") ) the_pagenation(); ?>
            </div>
            </div> 
        </div>
        <div class="l-contents__right">
            <?php get_sidebar(); ?>
        </div>
    </div>
    <?php get_footer(); ?>
</body>
</html>