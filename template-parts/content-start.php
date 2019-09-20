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
		<div class="social">
			<?php while (have_rows('social')) : the_row(); ?>
				<a href="<?php the_sub_field('soc-link'); ?>" class="social-link"><img src="<?php the_sub_field('soc-icon'); ?>" alt="" class="social-icon"></a>
			<?php
			endwhile;
			?>
		</div>
		<div class="container">
			<h1><?php the_field('title'); ?></h1>
			<div class="benefits">
				<?php while (have_rows('benefits')) : the_row(); ?>
					<div class="benefit">
						<a href="<?php the_sub_field('ben-link'); ?>" class="benefit-icon"><img src="<?php the_sub_field('ben-icon'); ?>" class="benefit-icon" /></a>
						<div class="benefit-text"><?php the_sub_field('ben-text'); ?></div>
					</div>
				<?php
				endwhile;
				?>
			</div>
			<h2><?php the_field('subtitle'); ?></h2>
			<h3><?php the_field('subtitle-accent'); ?></h3>

			<div class="players-button">
				<img src="<?php the_field('players'); ?>" alt="" class="players">
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