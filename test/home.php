<?php
/*
Template Name: home

*/
?>

<?php get_header() ?>

<div class="menu-burger">
      <ul>
        <li>портфолио</li>
        <li>цены</li>
        <li>схема работы</li>
        <li>отзывы</li>
        <li>контакты</li>
        <li>Гарантия</li>
        <li>услуги</li>
        <li>статьи</li>
        <li>вакансии</li>
        <li>франшиза</li>
      </ul>
    </div>
    <section class="main">
      <div
        class="main__background revealator-slideleft revealator-delay4 revealator-once revealator-below"
      >
        <img src="<?php bloginfo('template_url'); ?>/assets/img/backImage.png" alt="" />
      </div>
      <div class="main__container">
        <div
          class="main__description revealator-slideright revealator-delay4 revealator-once revealator-below"
        >
          <h1>Ремонт под ключ от 2900 руб/м<sup>2</sup>.</h1>
          <h2>При заказе ремонта делаем дизайн-проект в подарок</h2>
          <div class="main__line"></div>
          <div class="main__description__blocks">
            <div class="main__description__blocks__block">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/car.svg" alt="" />
              <p>Бесплатный выезд в день обращения</p>
            </div>
            <div class="main__description__blocks__block">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/medal.svg" alt="" />
              <p>Гарантия на работу до 5 лет</p>
            </div>
            <div class="main__description__blocks__block">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/head-time.svg" alt="" />
              <p>Жесткое соблюдение сроков</p>
            </div>
          </div>
        </div>
        <div
          class="main__count revealator-slideleft revealator-delay4 revealator-once revealator-below"
        >
          <div class="main__count__container">
            <h2>Рассчитайте стоимость ремонта</h2>
            <div class="main__count__meters-title">
              <h3>Площадь квартиры:</h3>
              <p><span class="value">0</span>м<sup>2</sup></p>
            </div>
            <div class="main__count__rage">
              <input type="range" min="10" max="1000" value="0" id="range" />
            </div>
            <h3>Тип жилья:</h3>
            <div class="main__count__checks">
              <div class="main__count__checks__item">
                <label for="twoCheck">
                  <input type="checkbox" id="twoCheck" />
                  <div></div>
                </label>
                <p>Вторичное жилье</p>
              </div>
              <div class="main__count__checks__item">
                <label for="newCheck">
                  <input type="checkbox" id="newCheck" />
                  <div></div>
                </label>
                <p>Новостройка</p>
              </div>
              <div class="main__count__checks__item">
                <label for="officeCheck">
                  <input type="checkbox" id="officeCheck" />
                  <div></div>
                </label>
                <p>Офис</p>
              </div>
            </div>
            <h3>Кол-во комнат:</h3>
            <div class="main__count__checks">
              <div
                class="main__count__checks__item main__count__checks__item-num"
              >
                <label for="CheckK1">
                  <input type="checkbox" id="CheckK1" />
                  <div></div>
                </label>
                <p>1</p>
              </div>
              <div
                class="main__count__checks__item main__count__checks__item-num"
              >
                <label for="CheckK2">
                  <input type="checkbox" id="CheckK2" />
                  <div></div>
                </label>
                <p>2</p>
              </div>
              <div
                class="main__count__checks__item main__count__checks__item-num"
              >
                <label for="CheckK3">
                  <input type="checkbox" id="CheckK3" />
                  <div></div>
                </label>
                <p>3+</p>
              </div>
              <div
                class="main__count__checks__item main__count__checks__item-num"
              >
                <label for="CheckKs">
                  <input type="checkbox" id="CheckKs" />
                  <div></div>
                </label>
                <p>Студия</p>
              </div>
            </div>
            <div class="main__count__btn">
              <div class="btn">
                <button>Отправить</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="main__container__down">
        <div class="main__container__down__btn">
          <img src="<?php bloginfo('template_url'); ?>/assets/img/down.svg" alt="" />
          <p>Scroll</p>
        </div>
      </div>
    </section>


    <style>
        label > div {
  display: block;
  width: 31px;
  height: 31px;
  background-image: url("<?php bloginfo('template_directory'); ?>/assets/img/checkbox.svg");
  background-repeat: no-repeat;
  background-position: center center;
  background-size: contain;
}

label input:checked ~ div {
  background-image: url("<?php bloginfo('template_directory'); ?>/assets/img/checkbox-active.svg");
}

@media (max-width: 1200px) {
    .header-menu-mob__btn-menu{
    display: flex;
    width: 32px;
    height: 32px;
    background-image: url(<?php bloginfo('template_directory'); ?>/assets/img/menu-mob.svg);
    background-size: cover;
    cursor: pointer;
  }

  .menu-burger-close {
    display: flex;
    width: 38px;
    height: 38px;
    background-image: url(<?php bloginfo('template_directory'); ?>/assets/img/menu-mob-close.svg);
    background-size: cover;
    cursor: pointer;
  }
}


    </style>

<?php get_footer() ?>
