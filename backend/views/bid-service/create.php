<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\BidService */

$this->title = 'Create Bid Service';
$this->params['breadcrumbs'][] = ['label' => 'Bid Services', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bid-service-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
