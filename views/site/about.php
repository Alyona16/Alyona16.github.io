<?php

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        Эта страница о программе. Вы можете изменить следующий файл, чтобы настроить его содержимое:
    </p>

    <code><?= __FILE__ ?></code>
</div>