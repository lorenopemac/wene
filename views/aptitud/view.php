<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Aptitud */

$this->title = $model->id_aptitud;
$this->params['breadcrumbs'][] = ['label' => 'Aptituds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="aptitud-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_aptitud], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_aptitud], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_aptitud',
            'tipo',
            'nivel',
            'id_usuario',
        ],
    ]) ?>

</div>
