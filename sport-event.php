<?php
/*
* Template name: sport-event
*/
?>

<?php get_header(); ?>

    <main class="main">
      <header class="header">
        <h1>Bazabet</h1>
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
              <img
                src="img/bor.png"
                alt="Флаг левой команды"
                class="img-responsive team-name-left"
              />
            </div>
            <div>
              <div class="vs">vs</div>
            </div>
            <div>
              <img
                src="img/bav.png"
                alt="Флаг правой команды"
                class="img-responsive team-name-right"
              />
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
            <a href="https://bookmakers.bazabet.com.ua/" target="_blank"
              >Сделать ставку
              <svg>
                <polyline
                  class="o1"
                  points="2 2, 368 2, 368 77, 2 77, 2 2"
                ></polyline>
              </svg>
            </a>
          </div>
        </div>

        <div class="player-container">
          <img
            src="img/player-left.png"
            alt="player-left"
            class="img-responsive player player-left"
          />
          <img
            src="img/player-right.png"
            alt="player-right"
            class="img-responsive player player-right"
          />
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






		 <!-- <main class="event-football main-bg" style="background-image: url(<?php echo get_field( 'event-football-bg' ) ?>)">
        <section class="event-footbal-content" id="event-footbal-content">
            <div class="container">
                <div class="row justify-content-between row-event-football__header">
                    <div class="col col-lg-3">
                        <div class="header-logo">
                            <h1 class="header-logo__title"><?php echo get_field( 'title' ) ?></h1>
                            <h4 class="header-logo__subtitle"><?php echo get_field( 'subtitle' ) ?></h4>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="header-benefits">
                            <div class="header-benefits__benefit">
                                <img src="<?php echo get_template_directory_uri();
								?>/img/event-football/ben-licence-icon.png"
                                     height="58">
                                <span class="header-benefits__benefit_text">ЛИЦЕНЗИЯ МИНИСТЕРСТВА<br> ФИНАНСОВ УКРАИНЫ</span>
                            </div>
                            <div class="header-benefits__benefit">
                                <img src="<?php echo get_template_directory_uri();
								?>/img/event-football/ben-stream-icon.png"
                                     height="43">
                                <span class="header-benefits__benefit_text">ОНЛАЙН<br> ТРАНСЛЯЦИЯ<br> МАТЧЕЙ</span>
                            </div>
                            <div class="header-benefits__benefit">
                                <img src="<?php echo get_template_directory_uri();
								?>/img/event-football/ben-withdrawal-icon.png"
                                     height="45">
                                <span class="header-benefits__benefit_text">МГНОВЕННЫЕ<br> ВЫПЛАТЫ</span>
                            </div>
                            <div class="header-benefits__benefit">
                                <img src="<?php echo get_template_directory_uri();
								?>/img/event-football/ben-point-icon.png"
                                     height="8">
                                <span class="header-benefits__benefit_text">ЛУЧШИЕ<br> КОЭФФИЦИЕНТЫ</span>
                            </div>
                            <div class="header-benefits__benefit">
                                <img src="<?php echo get_template_directory_uri();
								?>/img/event-football/ben-point-icon.png"
                                     height="8">
                                <span class="header-benefits__benefit_text">LIVE<br> СТАВКИ</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row row-event-football__main-content">
                    <div class="col-3 col-md-3">
                        <div class="player-left">
                            <img src="<?php echo get_field( 'player-left' ) ?>" class="img-responsive">
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-main-content">
                        <div class="main-content">
                            <div class="row justify-content-between">
                                <div class="col-5 col-md-5">
                                    <div class="main-content__team">
                                        <h2><?php echo get_field( 'team-name-left' ) ?></h2>
                                        <img src="<?php echo get_field( 'team-flag-left' ) ?>" class="img-responsive">
                                        <img src="<?php echo get_field( 'player-left' ) ?>" class="img-responsive
                                        player-responsive player-responsive-left">

                                    </div>
                                </div>
                                <div class="col-2 col-md-2">
                                    <div class="main-content__versus-text"><?php echo get_field( 'versus-text' ) ?></div>
                                </div>
                                <div class="col-5 col-md-5">
                                    <div class="main-content__team">
                                        <h2><?php echo get_field( 'team-name-right' ) ?></h2>
                                        <img src="<?php echo get_field( 'team-flag-right' ) ?>" class="img-responsive">
                                        <img src="<?php echo get_field( 'player-right' ) ?>" class="img-responsive
                                        player-responsive player-responsive-right">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="main-content__date">
                                        <div class="main-content__date_day"><?php echo get_field( 'day' ) ?></div>
                                        <div class="main-content__date_time"><?php echo get_field( 'time' ) ?></div>
                                    </div>
                                    <div class="main-content__cta">
                                        <a href="<?php echo get_field( 'cta-link' ) ?>">
                                            <span class="cta-link-text">
                                                <?php echo get_field( 'cta-link-text' ) ?>
                                            </span>
                                            <span class="cta-link-icon">
                                                <svg class="icon-arrow-right-mini" width="14" height="19">
                                                    <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                         xlink:href="#arrow-right-mini">
                                                        <svg id="arrow-right-mini" viewBox="-100.9 99.1 61.9 105.9"
                                                             width="100%" height="100%"><path
                                                                    d="M-41.7 145.3l-43.5-43.5c-1.7-1.7-4-2.7-6.5-2.7s-4.8 1-6.5 2.7c-1.7 1.7-2.7 4-2.7 6.5s1 4.8 2.7 6.5L-61 152l-37.2 37.2c-1.7 1.7-2.7 4-2.7 6.5s1 4.8 2.6 6.5c1.8 1.9 4.2 2.8 6.6 2.8 2.3 0 4.6-.9 6.5-2.6 11.5-11.4 41.2-41 43.3-43l.2-.2c3.6-3.6 3.6-10.4 0-13.9z"></path></svg>
                                                    </use>
                                                </svg>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 col-md-3">
                        <div class="player-right">
                            <img src="<?php echo get_field( 'player-right' ) ?>" class="img-responsive">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="event-footbal-footer" id="event-footbal-footer">
            <div class="container">
                <div class="row justify-content-center justify-content-sm-between event-football-footer-row">
                    <div class="col-auto col-md-3">
                        <div class="footer-steps">
                            <div class="footer-steps__step">
                                <span class="footer-steps__step_digit">1</span>
                                <span class="footer-steps__step_text">РЕГИСТРИРУЙСЯ</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto col-md-3">
                        <div class="footer-steps">
                            <div class="footer-steps__step">
                                <span class="footer-steps__step_digit">2</span>
                                <span class="footer-steps__step_text">ПОПОЛНИ СЧЕТ</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto col-md-3">
                        <div class="footer-steps">
                            <div class="footer-steps__step">
                                <span class="footer-steps__step_digit">3</span>
                                <span class="footer-steps__step_text">СТАВКА БЕЗ РИСКА</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </main> -->


<?php get_footer(); ?>
