<?php

$this->title = 'Cozy brand shop';
?>

<?php

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\assets\ltAppAsset;

AppAsset::register($this);
ltAppAsset::register($this);
?>

<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>

        <link rel="shortcut icon" href="images/ico/favicon.jpg">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
    </head>

    <body>
    <?php $this->beginBody() ?>
    <header id="header">
        <div class="header_top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="contactinfo">
                            <ul class="nav nav-pills">
                                <li><a href="#"><i class="fa fa-phone"></i> +7 902 641 11 40</a></li>
                                <li><a href="#"><i class="fa fa-envelope"></i> alyona.andreeva.16@yandex.ru </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="social-icons pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="header-middle">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="logo pull-left">
                            <a href="<?= \yii\helpers\Url::home()?>"><?= Html::img('@web/images/home/logo.jpg', ['alt' => 'Cozy brand shop'])?></a>
                        </div>
                        <div class="btn-group pull-right">
                            <div class="btn-group">
                                <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                    Россия
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Москва</a></li>
                                    <li><a href="#">Санкт-Петербург</a></li>
                                </ul>
                            </div>

                            <div class="btn-group">
                                <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                    Рубль
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Доллар</a></li>
                                    <li><a href="#">Биткоин</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="shop-menu pull-right">
                            <ul class="nav navbar-nav">
                                <?php if(!Yii::$app->user->isGuest): ?>
                                    <li><a href="<?= \yii\helpers\Url::to(['/site/logout'])?>"><i class="fa fa-user"></i> <?= Yii::$app->user->identity['username']?> (Выход)</a></li>
                                <?php endif;?>
                                <li><a href="#"><i class="fa fa-star"></i> Мои желания</a></li>

                                <li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Отслеживания</a></li>

                                <li><a href="#" onclick="return getCart()"><i class="fa fa-shopping-cart"></i> Корзина</a></li>

                                <li><a href="<?= \yii\helpers\Url::to(['/admin'])?>"><i class="fa fa-lock"></i> Войти</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="header-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Навигация</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="mainmenu pull-left">
                            <ul class="nav navbar-nav collapse navbar-collapse">
                                <li><a href="index.html" class="active">На главную</a></li>

                                 <li class="dropdown"><a href="#">Магазин<i class="fa fa-angle-down"></i></a>

                                            <ul role="menu" class="sub-menu">
                                                <li><a href="shop.html">Товары</a></li>
                                        <li><a href="product-details.html">Подробнее о товарах</a></li>

                                        <li><a href="checkout.html">Сравнить</a></li>

                                        <li><a href="cart.html">Корзина</a></li>

                                        <li><a href="login.html">Логин</a></li>
                                    </ul>
                                </li>

                                 <li><a href="contact-us.html">Связь</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="search_box pull-right">
                            <form method="get" action="<?= \yii\helpers\Url::to(['category/search'])?>">
                                <input type="text" placeholder="Search" name="q">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <?= $content ?>

    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="companyinfo">
                            <h2><span>Cozy</span>brand shop</h2>
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                        <img src="/images/home/iframe1.jpg" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p>Почему выбирают Нас?</p>
                                <h2>01.05.2018</h2>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                        <img src="/images/home/iframe2.jpg" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p>Как совершать покупки?</p>
                                <h2>18.05.2018</h2>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                        <img src="/images/home/iframe3.jpg" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p>Как найти нужный товар?</p>
                                <h2>27.05.2018</h2>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                        <img src="/images/home/iframe4.jpg" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p>Отзывы Наших покупателей</p>
                                <h2>01.06.2018</h2>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="footer-widget">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Услуги</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Онлайн помощь</a></li>
                                <li><a href="#">Наши контакты</a></li>
                                <li><a href="#">Статус заказа</a></li>
                                <li><a href="#">Изменить местоположение</a></li>
                                <li><a href="#">Часто задаваемые вопросы</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Круглосуточный магазинчик</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Футболки</a></li>
                                <li><a href="#">Мужчинам</a></li>
                                <li><a href="#">Женщинам</a></li>
                                <li><a href="#">Подарочные карты</a></li>
                                <li><a href="#">Обувь</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Политика</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Условия использования</a></li>
                                <li><a href="#">Политика конфиденциальности</a></li>
                                <li><a href="#">Правила возмещения</a></li>
                                <li><a href="#">Биллинговая система</a></li>
                                <li><a href="#">Билетная система</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Консультации</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Информация о компании</a></li>
                                <li><a href="#">Карьера</a></li>
                                <li><a href="#">Расположение магазина</a></li>
                                <li><a href="#">партнёрская программа</a></li>
                                <li><a href="#">Авторское право</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3 col-sm-offset-1">
                        <div class="single-widget">
                            <h2>Консультации</h2>
                            <form action="#" class="searchform">
                                <input type="text" placeholder="Введите ваш email" />
                                <button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
                                <p>Отправьте письмо и мы <br />свяжемся с Вами :)</p>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <p class="pull-left">Авторское право © 2018 Cozy brand shop</p>
                    <p class="pull-right">Разработал студент колледжа КПК Андреева Алёна группа ИС-149</p>
                </div>
            </div>
        </div>

    </footer>

    <?php
    \yii\bootstrap\Modal::begin([
        'header' => '<h2>Корзина</h2>',
        'id' => 'cart',
        'size' => 'modal-lg',
        'footer' => '<button type="button" class="btn btn-default" data-dismiss="modal">Продолжить покупки</button>
        <a href="' . \yii\helpers\Url::to(['cart/view']) . '" class="btn btn-success">Оформить заказ</a>
        <button type="button" class="btn btn-danger" onclick="clearCart()">Очистить корзину</button>'
    ]);
    \yii\bootstrap\Modal::end();
    ?>

    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>