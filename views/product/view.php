<?php

use yii\helpers\Html;
?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Категории</h2>
                    <ul class="catalog category-products">
                        <?= \app\components\MenuWidget::widget(['tpl' => 'menu'])?>
                    </ul>

                    <div class="brands_products">
                        <h2>Бренды</h2>
                        <div class="brands-name">
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href=""> <span class="pull-right">(50)</span>Acne</a></li>
                                <li><a href=""> <span class="pull-right">(56)</span>Grune Erde</a></li>
                                <li><a href=""> <span class="pull-right">(27)</span>Albiro</a></li>
                                <li><a href=""> <span class="pull-right">(32)</span>Ronhill</a></li>
                                <li><a href=""> <span class="pull-right">(5)</span>Oddmolly</a></li>
                                <li><a href=""> <span class="pull-right">(9)</span>Boudestijn</a></li>
                                <li><a href=""> <span class="pull-right">(4)</span>Rosch creative culture</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="shipping text-center">
                        <img src="/images/home/shippinng1.jpg" alt="" />
                    </div>

                </div>
            </div>

            <?php
            $mainImg = $product->getImage();
            $imgPath =  preg_replace('/[0-9]+/','yii2images', $mainImg->getUrl(), 1);
            $gallery = $product->getImages();
            ?>

            <div class="col-sm-9 padding-right">
                <div class="product-details">
                    <div class="col-sm-5">
                        <div class="view-product">
                            <?= Html::img($imgPath, ['alt' => $product->name])?>
                            <h3>Открыть</h3>
                        </div>
                        <div id="similar-product" class="carousel slide" data-ride="carousel">

                            <div class="carousel-inner">
                                <?php $count = count($gallery); $i = 0; foreach($gallery as $img): ?>
                                    <?php if($i % 3 == 0):?>
                                        <div class="item <?php if($i == 0) echo ' active'?>">
                                    <?php endif;?>
                                    <?php $imgPath =  preg_replace('/[0-9]+/','yii2images', $img->getUrl('85x85'), 1); ?>
                                    <a href=""><?= Html::img($imgPath, ['alt' => ''])?></a>
                                    <?php $i++; if($i % 3 == 0 || $i == $count):?>
                                        </div>
                                    <?php endif;?>
                                <?php endforeach;?>
                            </div>

                            <a class="left item-control" href="#similar-product" data-slide="prev">
                                <i class="fa fa-angle-left"></i>
                            </a>
                            <a class="right item-control" href="#similar-product" data-slide="next">
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </div>

                    </div>
                    <div class="col-sm-7">
                        <div class="product-information">
                            <?php if($product->new): ?>
                                <?= Html::img("@web/images/home/new.jpg", ['alt' => 'Новинка', 'class' => 'newarrival'])?>
                            <?php endif?>
                            <?php if($product->sale): ?>
                                <?= Html::img("@web/images/home/sale.jpg", ['alt' => 'Распродажа', 'class' => 'newarrival'])?>
                            <?php endif?>
                            <h2><?= $product->name?></h2>
                            <p>Web ID: 1089772</p>
                            <img src="/images/product-details/rating.png" alt="" />
                            <span>
									<span>US $<?= $product->price?></span>
									<label>Количество</label>
									<input type="text" value="1" id="qty" />
									<a href="<?= \yii\helpers\Url::to(['cart/add', 'id' => $product->id])?>" data-id="<?= $product->id?>" class="btn btn-fefault add-to-cart cart">
                                        <i class="fa fa-shopping-cart"></i>
                                        Добавить в корзину
                                    </a>
								</span>
                            <p><b>Наличие</b> Есть</p>
                            <p><b>Состояние</b> Новое</p>
                            <p><b>Бренд</b> <a href="<?= \yii\helpers\Url::to(['category/view', 'id' => $product->category->id]) ?>"><?= $product->category->name?></a></p>
                            <a href=""><img src="/images/product-details/share.png" class="share img-responsive"  alt="" /></a>
                            <?= $product->content?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>