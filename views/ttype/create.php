<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Ttype */

$this->title = 'Добавление типа товара: ';
$this->params['breadcrumbs'][] = ['label' => 'Ttypes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ttype-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
