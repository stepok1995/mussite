<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tproduct */

$this->title = 'Добавление товара:';
$this->params['breadcrumbs'][] = ['label' => 'Tproducts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tproduct-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
