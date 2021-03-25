<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tnew */

$this->title = 'Изменить новость: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Tnews', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tnew-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
