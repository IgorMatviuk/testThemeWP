<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <?php wp_head(); ?>
    <!--
    <link rel="stylesheet" href="/plugins/fm.revealator.jquery.min.css">
    <link rel="stylesheet" type="text/css" href="styles.css" />
-->
  </head>
  <body>
    <header class="header">
      <div class="header__container">
        <div class="header__logo"><img src="<?php bloginfo('template_url'); ?>/assets/img/logo.svg" alt="" /></div>
        <div class="header__menu">
          <ul>
            <li class="menu"> <img class="menu-list-close" src="<?php bloginfo('template_url'); ?>/assets/img/close.svg" alt="">Меню</li>
            <li>портфолио</li>
            <li>цены</li>
            <li>схема работы</li>
            <li>отзывы</li>
            <li>контакты</li>
            <li>Гарантия</li>
          </ul>
          <div class="menu-list">
            <ul>
              <li>услуги</li>
              <li>статьи</li>
              <li>вакансии</li>
              <li>франшиза</li>
            </ul>
          </div>
        </div>
        <div class="btn header__btn">
          <button>Обратный звонок</button>
        </div>
        <div class="header-menu-mob">
          <div class="header-menu-mob__call">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/call-mob.svg" alt="">
          </div>
          <div class="header-menu-mob__btn-menu">
          </div>
        </div>
      </div>
    </header>