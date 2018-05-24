<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>

    <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

        <div class="alert alert-success">
            Благодарим Вас за обращение к нам. Мы ответим Вам как можно скорее.
        </div>

        <p>
            Обратите внимание, что если вы включите отладчик Yii, вы сможете
            для просмотра почтового сообщения на панели почта отладчика.
            <?php if (Yii::$app->mailer->useFileTransport): ?>
                Поскольку приложение находится в режиме разработки, сообщение электронной почты не отправляется, а сохраняется как
                файл под <code><?= Yii::getAlias(Yii::$app->mailer->fileTransportPath) ?></code>.
                                                                                                Пожалуйста, настройте <code>useFileTransport</code> Ваш <code>mail</code>
                компонент приложения, чтобы быть ложным, чтобы включить отправку электронной почты.
            <?php endif; ?>
        </p>

    <?php else: ?>

        <p>
            Если у Вас есть деловые вопросы или другие вопросы, пожалуйста, заполните следующую форму, чтобы связаться с нами.
            Благодарим.
        </p>

        <div class="row">
            <div class="col-lg-5">

                <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'email') ?>

                <?= $form->field($model, 'subject') ?>

                <?= $form->field($model, 'body')->textArea(['rows' => 6]) ?>

                <?= $form->field($model, 'verifyCode')->widget(Captcha::class, [
                    'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                ]) ?>

                <div class="form-group">
                    <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                </div>

                <?php ActiveForm::end(); ?>

            </div>
        </div>

    <?php endif; ?>
</div>