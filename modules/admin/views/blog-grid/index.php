<?php
/**
 * Created by PhpStorm.
 * User: developer
 * Date: 13.04.18
 * Time: 16:15
 */
use \app\modules\admin\models\Blog;
use yii\bootstrap\Html;
use yii\data\ActiveDataProvider;
use yii\grid\GridView;
use yii\web\View;
use yii\widgets\Pjax;

$this->title = 'Blog-Grid';
?>

<?php Pjax::begin(); ?>
<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'columns' => [
        'id_tag',
        'idAuthor',
        'id_category',
        [
            'attribute' => 'dateCreated',
            'label' => 'Date of Created',
            'value' => 'dateCreated',
        ],
        [
            'attribute' => 'summary',
            'label' => 'Summary',
            'value'=>function($model, $key, $index){
                $res='';
                foreach ( $model->translate as $k=>$l ){
                            $res .= $l->summary;
                }
            return $res;
            },
        ],
        [
            'class' => 'yii\grid\ActionColumn',
            'template' => '{update} {delete}',
        ],
    ],
]); ?>
<?php Pjax::end(); ?>
<p><a href='<?php echo \yii\helpers\Url::to(['/admin/blog/add']) ?>'>Add</a></p>