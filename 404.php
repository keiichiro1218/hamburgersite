<?php get_header(); ?>
    <div class="l-contents">
        <div class="contents__left width-pc">
            <div class="inner p-404">
                <div class="p-404__entry">
                    <h1 class="p-404__head"><span>404</span>Not Found</h1><!-- /entry-404-head -->
                <div class="p-404__lead">お探しのページが見つかりませんでした</div><!-- /entry-404-head -->
                    <p class="p-404__lead2">申し訳ありませんが、お探しのページが存在しないか、アクセスできません。入力されたURLが正しいかご確認ください。</p>
                    <div class="p-404__button">
                        <a class="" href="<?php echo esc_url( home_url()); ?>">トップページに戻る</a>
                    </div>
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
