<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Publicacion */

$this->title = $model->id_publicacion;
$this->params['breadcrumbs'][] = ['label' => 'Publicacions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="publicacion-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <!--Solo se modifican desde el controller de Expericiencia, por eso //publicacion para ir al controller de publicacion-->
        <?= Html::a('Update', ['//publicacion/update', 'id' => $model->id_publicacion], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['//publicacion/delete', 'id' => $model->id_publicacion], [
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
            //'id_publicacion',
            'titulo',
            'fecha',
            //'id_usuario',
        ],
    ]) ?>

</div>
