<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Critic */
/* @var $form ActiveForm */
?>
<div class="site-critics">

    <?php $form = ActiveForm::begin(); ?>
    <h1>Add critic.</h1>
    <h1>critic id: <?=$critic_id ?></h1>
        <?= $form->field($model, 'username')->textInput()?>
        <?= $form->field($model, 'email')->textInput()?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- site-critics -->
