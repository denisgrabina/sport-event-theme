<?php

/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sport-event-theme
 */

?>

<main class="main" style="background-image: url(<?php the_field('event-football-bg') ?>);">
	<div class="container">
		<header class="header">
			<h1><?php the_field('title'); ?></h1>
			<h2><?php the_field('subtitle'); ?></h2>
		</header>

		<div class="slogan">
			<?php the_field('slogan'); ?>
		</div>

		<div class="event-data">

			<div class="team-name">
				<div class="team-name-left"><?php the_field('team-name-left'); ?></div>
				<div class="team-name-right"><?php the_field('team-name-right'); ?></div>
			</div>

			<div class="team-flag">
				<div>
					<img src="<?php the_field('team-flag-left'); ?>" class="img-responsive team-name-left" />
				</div>
				<div>
					<div class="vs"><?php the_field('versus-text'); ?></div>
				</div>
				<div>
					<img src="<?php the_field('team-flag-right'); ?>" class="img-responsive team-name-right" />
				</div>
			</div>

			<div class="coef">
				<div class="w1"><?php the_field('w1'); ?></div>
				<div class="x"><?php the_field('x'); ?></div>
				<div class="w2"><?php the_field('w2'); ?></div>
			</div>

			<div class="date">
				<div class="day"><?php the_field('day'); ?></div>
				<div class="time"><?php the_field('time'); ?></div>
			</div>
		</div>

		<div class="cta-button">
			<a href="<?php the_field('cta-link'); ?>" class="cta-link"><?php the_field('cta-link-text'); ?>
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
		<div class="players">
			<img src="<?php the_field('player-left'); ?>" class="img-responsive player player-left" />
			<img src="<?php the_field('player-right'); ?>" class="img-responsive player player-right" />
		</div>
	</div>
</main>