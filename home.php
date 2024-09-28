<?php get_header(); ?>
<!-------------------------------

    Main Visual

-------------------------------->
<section class="bg-colored">
    <div class="container bg-colored">
        <div id="main-visual">
            <img src="<?php echo get_template_directory_uri(); ?>/images/main-visual.jpg" alt="">
        </div>
    </div>
</section>
<!-------------------------------

    Whatsnew

-------------------------------->
<section>
    <div class="container">
        <h2 class="section-title">新着情報</h2>
        <?php
            $args = array(
            'post_type' => 'post', /* 投稿タイプ */
            'paged' => $paged,
            'posts_per_page' => 3
            ); 
        ?>
        <?php query_posts( $args ); ?>
        <div class="col-triple gap-narrow">
            <?php if(have_posts()): while(have_posts()): the_post(); ?>
            <div class="tile">
                <?php the_post_thumbnail(); ?>
                <div class="tile-body">
                    <p class="post-date"><?php echo get_the_date('Y年n月j日');?> | <?php the_category(' | '); ?></p>
                    <h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <?php the_excerpt(); ?>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
        <?php endif; ?>
    </div>
    <p class="button"><a href="<?php home_url(); ?>">記事一覧を見る</a></p>
</section>
<!-------------------------------

    Member

-------------------------------->
<section class="bg-colored">
    <div class="container">
        <h2 class="section-title">議員紹介</h2>
        <nav class="nav-members">
            <div>
                <img src="<?php echo get_template_directory_uri(); ?>/images/nav-utsunomiya.png" alt="">
                <p>宇都宮 ゆり</p>
            </div>
            <div>
                <img src="<?php echo get_template_directory_uri(); ?>/images/nav-nagai.png" alt="">
                <p>ながい ともこ</p>
            </div>
            <div>
                <img src="<?php echo get_template_directory_uri(); ?>/images/nav-noguchi.png" alt="">
                <p>野口 まさと</p>
            </div>
            <div>
                <img src="<?php echo get_template_directory_uri(); ?>/images/nav-nonoyama.png" alt="">
                <p>のの山 けん</p>
            </div>
            <div>
                <img src="<?php echo get_template_directory_uri(); ?>/images/nav-honda.png" alt="">
                <p>本田 正則</p>
            </div>
            <div>
                <img src="<?php echo get_template_directory_uri(); ?>/images/nav-yamazaki.png" alt="">
                <p>山崎 たい子</p>
            </div>
        </nav>
    </ddiv>
</section>
</section>
<!-------------------------------

    Category

-------------------------------->
<section class="top-category">
    <div class="container col-triple gap-wide">
        <a href="<?php home_url(); ?>/activity">
            <div>
                <h2 class="section-title">議員団の活動</h2>
                <img src="<?php echo get_template_directory_uri(); ?>/images/activity.jpg" alt="">
            </div>
        </a>
        <a href="<?php home_url(); ?>/activity">
            <div>
                <h2 class="section-title">政策・提言</h2>
                <img src="<?php echo get_template_directory_uri(); ?>/images/policy.jpg" alt="">
            </div>
        </a>
        <a href="<?php home_url(); ?>/activity">
            <div>
                <h2 class="section-title">議員団ニュース</h2>
                <img src="<?php echo get_template_directory_uri(); ?>/images/dan-news.jpg" alt="">
            </div>
        </a>
    </div>
</section>
<!-------------------------------

    Link

-------------------------------->
<section class="bg-colored">
    <div class="container">
        <ul>
            <li>日本共産党</li>
            <li>東京都北区</li>
            <li>東京都北区議会</li>
            <li>田村 智子</li>
            <li>小池 晃</li>
            <li>吉良 よし子</li>
        </ul>
    </div>
</section>
</div>
</body>
<?php get_footer(); ?>