<?php get_header(); ?>
<div class="container">
	<!-------------------------------
		Breadcrumb
	-------------------------------->
	<div id="breadcrumb">
		<ul>
			<li><a href="<?php echo home_url('/'); ?>">ホーム</a></li>
			<li>&raquo;</li>
			<li><?php echo get_the_title(); ?></li>
		</ul>
	</div><!-- #breadcrumb -->
	
	<?php
	if(is_page('activity')):
	?>
	<h2 class="section-title">議員団の活動</h2>
	<?php
		$args = array(
			'post_type' => 'post', /* 投稿タイプ */
			'category_name' => 'activities',
			'paged' => $paged,
			'posts_per_page' => 12
		); 
	?>
	
	<?php elseif(is_page('policy')): ?>
	<h2 class="section-title">政策・提言</h2>
	<?php
		$args = array(
			'post_type' => 'post', /* 投稿タイプ */
			'category_name' => 'policies',
			'paged' => $paged,
			'posts_per_page' => 12
		); 
	?>
	<?php elseif(is_page('dan-news')):
	?>
		<h2 class="section-title">議員団ニュース</h2>
		<?php
		$args = array(
			'post_type' => 'post', /* 投稿タイプ */
			'category_name' => 'dan-news',
			'paged' => $paged,
			'posts_per_page' => 12
		); 
	?>
	<?php else: ?>
		<h2 class="section-title">記事一覧</h2>
		<?php
		$args = array(
			'post_type' => 'post', /* 投稿タイプ */
			'paged' => $paged,
			'posts_per_page' => 12
		); 
	?>
	<?php endif; ?>
	<?php query_posts( $args ); ?>

    <div class="col-triple gap-narrow">
        <?php if(have_posts()): while(have_posts()): the_post(); ?>
        <div class="tile">
            <a href="<?php the_permalink(); ?>">
                <?php if (has_post_thumbnail()): ?>
					<?php the_post_thumbnail(); ?>
				<?php else: ?>
					<img src="<?php echo get_template_directory_uri(); ?>/images/no-image.jpg" />
				<?php endif; ?>
    <div class="article-card-body">
        <p class="post-date"><?php echo get_the_date('Y.m.d');?> / <?php the_category(' / '); ?></p>
    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
<?php the_excerpt(); ?>
</div>
</a>
</div>
<?php endwhile; endif; ?>
</div>
	</div>
		<!-------------------------------
			pagenavi
		-------------------------------->
		<div id="pagenavi">
			<?php wp_pagenavi(); ?>
		</div>
</div>
<?php wp_reset_query(); ?>
<?php get_footer(); ?>
