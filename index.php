<?php get_header(); ?>
<div id="main">
<?php if(have_posts()): while(have_posts()): the_post(); ?>
	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	<p class="post-date"><?php echo get_the_date('Y年n月j日');?> | <?php the_category(' | '); ?></p>
	<?php the_content(); ?>
	<?php endwhile; ?>
	<?php else: ?>
	<p>記事がありませんでした。</p>
	<?php endif; ?>
</div>    
</body>
<?php get_footer(); ?>