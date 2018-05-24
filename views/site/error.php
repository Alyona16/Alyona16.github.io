<?php

use yii\helpers\Html;

$this->title = $name;
?>
<div class="site-error container">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="alert alert-danger">
        <?= nl2br(Html::encode($message)) ?>
    </div>

    <p>Произошла ошибка во время обработки веб-сервером Вашего запроса.</p>
    <p>Пожалуйста, свяжитесь с нами, если Вы думаете, что это ошибка сервера.</p>

</div>