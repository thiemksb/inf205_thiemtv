<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\hoadonchitiet */

$this->title = 'Create Hoadonchitiet';
$this->params['breadcrumbs'][] = ['label' => 'Hoadonchitiets', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hoadonchitiet-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
