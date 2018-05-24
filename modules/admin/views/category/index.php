<?php

use yii\helpers\Html;
use yii\grid\GridView;

$this->title = 'Категории';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="category-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Создать категорию', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',

            [
                'attribute' => 'parent_id',
                'value' => function($data){
                    return $data->category->name ? $data->category->name : 'Подкатегория';
                },
            ],
            'name',
            'keywords',
            'description',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
