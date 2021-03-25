<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Ttype */

$this->title = 'Изменение типа товара: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Ttypes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ttype-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
