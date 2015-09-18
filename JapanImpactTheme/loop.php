<div class="container">
	<div class="leftPoster">
			
	</div>
	<div class="rightContent">
		<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
			<div class="post">
				<h3 class="post-title">
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					<span class="post-info">Posté le <?php the_date(); /* Avec qTranslate : echo qtrans_formatPostDateTime('%d.%m.%y'); */ ?> dans <?php the_category(', '); ?> par <?php the_author(); ?>.</span>
				</h3>
				<div class="post-content">
					<?php the_content(); ?>
				</div>
			</div>
		<?php endwhile; ?>
	<?php else : ?>
		<p class="nothing">
			Il n'y a pas de Post à afficher !
		</p>
	<?php endif; ?>
	</div>
</div>