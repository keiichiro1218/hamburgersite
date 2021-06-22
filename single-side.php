<?php get_header(); ?>
        <div class="l-contents">
            <div class="contents__left width-pc">
                <div class="p-main-visual">
                    <div class="p-single">
                        <h1><?php the_title(); ?></h1>
                    </div>
                </div>
                <div class="inner-main">
                    <?php if(have_posts()): while(have_posts()): the_post(); ?>
                        <div id="post-<?php the_ID(); ?>"<?php post_class(); ?>>
                            <div class="p-article-tag">
                                <?php the_tags(); ?>
                            </div>
                            <?php the_content(); ?>
                            <div class="p-pagelink">
                                <?php wp_link_pages( 'before=<p>&after=</p>&next_or_number=number&pagelink= %' ); ?>
                            </div>
                        </div>
                    <?php endwhile; 
                    else:
                    ?>
                    <p>表示する記事がありません</p>
                    <?php endif; ?>
                    <div class="p-heading">
                        <h2>見出しh2</h2>
                        <p>Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。</p>
                        <h3 class="p-heading__text">見出しh3</h3>
                        <h4 class="p-heading__text">見出しh4</h4>
                        <h5 class="p-heading__text">見出しh5</h5>
                        <h6 class="p-heading__text">見出しh6</h6>
                    </div>
                    <div class="p-quote">
                        <p class="p-quote__text">
                            Blockquote 引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ
                        </p>
                        <p>出典元：<a href="">○○○○○○○○○○○○</a></p>
                    </div>
                    <div class="p-content-img">
                        <img src="<?php echo esc_url( get_template_directory_uri()); ?>/img/cooked-foods-750073.png" alt="">
                    </div>
                    <div class="p-visual">
                        <div class="p-visual__contents ">
                            <img src="<?php echo esc_url( get_template_directory_uri()); ?>/img/cooked-foods-750073-2.png" alt="">
                            <p>
                                テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります
                            </p>
                        </div>
                        <div class="p-visual__contents row-revers">
                            <img src="<?php echo esc_url( get_template_directory_uri()); ?>/img/cooked-foods-750073-2.png" alt="">
                            <p>
                                テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります
                            </p>
                        </div>
                    </div>
                    <div class="p-img">
                        <img src="<?php echo esc_url( get_template_directory_uri()); ?>/img/cooked-foods-750073-2.png" alt="">
                    </div>
                    <div class="p-flex-container">
                        <div class="p-flex-container__items ">
                            <div class="p-flex-container__item"><img src="<?php echo esc_url( get_template_directory_uri()); ?>/img/cooked-foods-750073-2.png" alt=""></div>
                            <div class="p-flex-container__item"><img src="<?php echo esc_url( get_template_directory_uri()); ?>/img/cooked-foods-750073-2.png" alt=""></div>
                            <div class="p-flex-container__item"><img src="<?php echo esc_url( get_template_directory_uri()); ?>/img/cooked-foods-750073-2.png" alt=""></div>
                            <div class="p-flex-container__item"><img src="<?php echo esc_url( get_template_directory_uri()); ?>/img/cooked-foods-750073-2.png" alt=""></div>
                            <div class="p-flex-container__item"><img src="<?php echo esc_url( get_template_directory_uri()); ?>/img/cooked-foods-750073-2.png" alt=""></div>
                            <div class="p-flex-container__item"><img src="<?php echo esc_url( get_template_directory_uri()); ?>/img/cooked-foods-750073-2.png" alt=""></div>
                            <div class="p-flex-container__item"><img src="<?php echo esc_url( get_template_directory_uri()); ?>/img/cooked-foods-750073-2.png" alt=""></div>
                            <div class="p-flex-container__item"><img src="<?php echo esc_url( get_template_directory_uri()); ?>/img/cooked-foods-750073-2.png" alt=""></div>
                            <div class="p-flex-container__item"><img src="<?php echo esc_url( get_template_directory_uri()); ?>/img/cooked-foods-750073-2.png" alt=""></div>
                        </div>
                    </div>
                    <div class="p-lists">
                        <p class="p-lists__list">
                            1.リストリストリスト <br> 2.リストリストリスト
                        </p>
                        <p class="p-lists__list">
                            1.リスト2リスト2リスト2  <br> 2.リスト2リスト2リスト2
                        </p>
                        <p class="p-lists__list">
                            1.リストリストリスト  <br> 2.リストリストリスト
                        </p>
                    </div>
                    <div class="p-lists">
                        <p class="p-lists__list">
                            リストリストリスト <br> リストリストリスト
                        </p>
                        <p class="p-lists__list">
                            リスト2リスト2リスト2  <br> リスト2リスト2リスト2
                        </p>
                        <p class="p-lists__list">
                            リストリストリスト <br> リストリストリスト
                        </p>
                    </div>
                    <div class="p-html">
                        <div class="p-html__text">
                            <pre>
                                &lt;html&gt;
                                    &lt;head&gt;
                                    &lt;/head&gt;
                                    &lt;body&gt;
                                    &lt;/body&gt;
                                &lt;/html&gt;
                            </pre>
                        </div>
                    </div>
                    <div class="p-table">
                        <table>
                            <tr>
                                <th>テーブル</th>
                                <td>テーブル</td>
                            </tr>
                            <tr>
                                <th>テーブル</th>
                                <td>テーブル</td>
                            </tr>
                            <tr>
                                <th>テーブル</th>
                                <td>テーブル</td>
                            </tr>
                            <tr>
                                <th>テーブル</th>
                                <td>テーブル</td>
                            </tr>
                        </table>
                    </div>
                    <button class="c-button-send">
                        ボタン
                    </button>
                    <div class="p-bold">
                        <p>boldboldboldboldboldboldbold</p>
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
