<?php

/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sport-event-theme
 */

?>

<main class="stad-bg" style="background-image: url(<?php the_field('stad-bg') ?>);">
	<div class="container">
		<h1><?php the_field('title'); ?></h1>
		<h2><?php the_field('subtitle'); ?></h2>
		<div class="cta-button">
			<a href="<?php the_field('cta-link'); ?>" class="cta-link"><?php the_field('cta-text'); ?>
			</a>
		</div>
		<div class="prize">
			<div class="prize-desc-title"><?php the_field('prize-desc-title') ?></div>
			<div class="prize-sum">
				<?php the_field('prize-sum') ?>
				<span><?php the_field('prize-sum') ?></span>
				<i class="prize-cur"><?php the_field('prize-cur') ?></i>
			</div>
			<div class="prize-desc"><?php the_field('prize-desc') ?></div>
		</div>
		<div class="description"><?php the_field('description') ?></div>
		<div class="bet-button">
			<a href="<?php the_field('bet-link'); ?>" class="bet-link"><?php the_field('bet-text'); ?>
			</a>
		</div>
		<div class="green-bg green-bg-d">
			<img src="<?php the_field('green-bg') ?>);" alt="<?php the_field('green-alt') ?>" class="img-responsive">
		</div>
		<div class="player-bg green-bg-d">
			<img src="<?php the_field('player-bg') ?>);" alt="<?php the_field('player-alt') ?>" class="img-responsive">
		</div>
	</div>
	<div class="green-bg green-bg-m">
		<img src="<?php the_field('green-bg') ?>);" alt="<?php the_field('green-alt') ?>" class="img-responsive">
	</div>
	<div class="player-bg player-bg-m">
		<img src="<?php the_field('player-bg') ?>);" alt="<?php the_field('player-alt') ?>" class="img-responsive">
	</div>


	<div class="footer">
		<div class="footer-container">
			<div class="pay-system">
				<?php while (have_rows('pay-system')) : the_row(); ?>
					<a href="<?php the_sub_field('pay-system-link'); ?>" class="pay-system-link"><img src="<?php the_sub_field('pay-system-icon'); ?>" alt="<?php the_sub_field('pay-system-icon-alt'); ?>" class="pay-system-icon"></a>
				<?php
																																																																								endwhile;
				?>
			</div>
			<div class="app">
				<?php while (have_rows('app')) : the_row(); ?>
					<a href="<?php the_sub_field('app-link'); ?>" class="app-link"><img src="<?php the_sub_field('app-icon'); ?>" alt="<?php the_sub_field('app-icon-alt'); ?>" class="app-icon img-responsive"></a>
				<?php
																																																																								endwhile;
				?>
			</div>
			<div class="social">
				<?php while (have_rows('social')) : the_row(); ?>
					<a href="<?php the_sub_field('social-link'); ?>" class="social-link"><img src="<?php the_sub_field('social-icon'); ?>" alt="<?php the_sub_field('social-icon-alt'); ?>" class="social-icon"></a>
				<?php
																																																																								endwhile;
				?>
			</div>
		</div>
	</div>
</main>