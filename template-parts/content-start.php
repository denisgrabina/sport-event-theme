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
		<div class="container">
			<h1><?php the_field('title'); ?></h1>
			<div class="benefits">
				<?php while (have_rows('benefits')) : the_row(); ?>
					<div class="benefit">
						<img src="<?php the_sub_field('ben-icon'); ?>" class="benefit-icon" />
						<div class="benefit-text"><?php the_sub_field('ben-text'); ?></div>
					</div>
				<?php
				endwhile;
				?>
			</div>
			<h2><?php the_field('subtitle'); ?></h2>
			<h3><?php the_field('subtitle-accent'); ?></h3>
			<img src="<?php the_field('players'); ?>" alt="" class="img-responsive players">
			<div class="cta-button">
				<a href="<?php the_field('cta-link'); ?>" class="cta-link"><?php the_field('cta-text'); ?>
				</a>
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
