<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Review */
/* @var $form ActiveForm */
?>
<div class="site-reviews">

    <?php $form = ActiveForm::begin(); ?>
    <h1>Add review with criticID.</h1>
    <h1> <?=$progress ?></h1>
        <?= $form->field($model, 'critic_id')->textInput() ?>
        <?= $form->field($model, 'name')->textInput() ?>
        <?= $form->field($model, 'body')->textInput() ?>


        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- site-reviews -->
