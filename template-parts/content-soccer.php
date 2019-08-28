<?php

/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sport-event-theme
 */

?>

<main class="main">
	<header class="header">
		<h1><?php the_field('event-football-bg'); ?></h1>
		<h2>База ставок на спорт</h2>
	</header>
	<div class="event-data">
		<div class="container">
			<div class="team-name">
				<div class="team-name-left">Боруссия Д.</div>
				<div class="team-name-right">Бавария</div>
			</div>

			<div class="team-flag">
				<div>
					<img src="<?php echo get_template_directory_uri() . '/src/img/bor.png'?>" alt="Флаг левой команды" class="img-responsive team-name-left" />
				</div>
				<div>
					<div class="vs">vs</div>
				</div>
				<div>
					<img src="<?php echo get_template_directory_uri() . '/src/img/bav.png'?>" alt="Флаг правой команды" class="img-responsive team-name-right" />
				</div>
			</div>

			<div class="coef">
				<div class="w1">3.1</div>
				<div class="x">3.5</div>
				<div class="w2">2.0</div>
			</div>

			<div class="date">
				<div class="day">3 августа</div>
				<div class="time">21:30</div>
			</div>

			<div class="cta-button">
				<a href="https://bookmakers.bazabet.com.ua/" target="_blank">Сделать ставку
					<!-- <svg>
						<polyline class="o1" points="2 2, 368 2, 368 77, 2 77, 2 2"></polyline>
					</svg> -->
				</a>
			</div>
		</div>

		<div class="player-container">
			<img src="<?php echo get_template_directory_uri() . '/src/img/player-left.png'?>" alt="player-left" class="img-responsive player player-left" />
			<img src="<?php echo get_template_directory_uri() . '/src/img/player-right.png'?>" alt="player-right" class="img-responsive player player-right" />
		</div>
	</div>
</main>

<footer class="footer">
	<div class="steps">
		<div class="step">
			<div class="step-number">1</div>
			<div class="step-text">регистрируйся</div>
		</div>
		<div class="step">
			<div class="step-number">2</div>
			<div class="step-text">пополняй счет</div>
		</div>
		<div class="step">
			<div class="step-number">3</div>
			<div class="step-text">ставь без риска</div>
		</div>
	</div>
</footer>