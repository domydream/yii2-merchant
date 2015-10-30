<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title                   = Yii::t('merchant', 'Recharge account');
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="row">

    <div class="col-md-4">
        <?php $form = ActiveForm::begin() ?>
            <?= $form->field($model, 'sum') ?>
            <?= Html::submitButton(Yii::t('merchant', 'Proceed'), ['class' => 'btn btn-primary']) ?>
        <?php $form::end() ?>
    </div>

</div>
