<?php

/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sport-event-theme
 */

?>

<main class="main" style="background-image: url(<?php the_field('start-bg') ?>);">
	<div class="stad-bg" style="background-image: url(<?php the_field('stad-bg') ?>);">
	<div class="app">
			<?php while (have_rows('app')) : the_row(); ?>
				<a href="<?php the_sub_field('app-link'); ?>" class="app-link"><img src="<?php the_sub_field('app-icon'); ?>" alt="<?php the_sub_field('app-icon-alt'); ?>" class="app-icon"></a>
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
		<div class="container">
			<h1><?php the_field('title'); ?></h1>
			<div class="benefits">
				<?php while (have_rows('benefits')) : the_row(); ?>
					<div class="benefit">
						<a href="<?php the_sub_field('benefits-link'); ?>" class="benefit-icon"><img src="<?php the_sub_field('benefits-icon'); ?>" alt="<?php the_sub_field('benefits-icon-alt'); ?>" class="benefit-icon" /></a>
						<div class="benefit-text"><?php the_sub_field('benefits-text'); ?></div>
					</div>
				<?php
				endwhile;
				?>
			</div>
			<h2><?php the_field('subtitle'); ?></h2>
			<a href="<?php the_field('cta-link'); ?>" class="subtitle-accent"><?php the_field('subtitle-accent'); ?></a>

			<div class="players-button">
				<img src="<?php the_field('players'); ?>" alt="<?php the_sub_field('players-alt'); ?>" class="players">
				<div class="cta-button">
					<a href="<?php the_field('cta-link'); ?>" class="cta-link"><?php the_field('cta-text'); ?>
					</a>
				</div>
			</div>
			<div class="steps">
				<?php while (have_rows('steps')) : the_row(); ?>
					<div class="step">
						<div class="step-number"><?php the_sub_field('step-num'); ?></div>
						<div class="step-text"><?php the_sub_field('step-text'); ?></div>
					</div>
				<?php
				endwhile;
				?>
			</div>
		</div>
	</div>
</main>