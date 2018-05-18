<?php
/*
YARPP Template: Lubbock Lights
Description: Custom related posts template for Lubbock Lights
Author: Kuhrt.Codes
*/ ?>
<?php if (have_posts()):?>
<h3>Related Stories</h3>
<div class="related-posts__slider">
	<?php while (have_posts()) : the_post(); ?>

		<article>
			<?php $imageUrl = get_the_post_thumbnail_url(get_the_ID(), 'full') ?>
		  <a class="entry-content__image" style="background-image: url('<?php echo $imageUrl ?>');" href="<?php the_permalink() ?>"></a>
		  <p class="entry-category"><a href="<?php get_category_link(get_cat_ID( get_the_category()[0]->cat_name )) ?>"><?php echo get_the_category()[0]->cat_name ?></a></p>
			<header>
				<h2 class="entry-title"><a href="<?php the_permalink() ?>"><?php echo get_the_title() ?></a></h2>
			</header>
		</article>

	<?php endwhile; ?>
</div>

<?php else: ?>
<?php endif; ?>
