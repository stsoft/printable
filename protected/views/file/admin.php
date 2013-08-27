<?php
/* @var $this FileController */
/* @var $model File */

$this->breadcrumbs=array(
	'Files'=>array('index'),
	'Manage',
);
/*
$this->menu=array(
	array('label'=>'List My Files', 'url'=>array('files')),
	array('label'=>'Create File', 'url'=>array('create')),
);
 * 
 */

?>

<div class="well pull-right menu-printable">
<?php
/*
$this->menu=array(
	array('label'=>'Create File', 'url'=>array('create')),
	array('label'=>'Manage File', 'url'=>array('admin')),
);
  
 */
    $this->widget('bootstrap.widgets.TbMenu', array(
        'type'=>'list',
        'items' => array(
            array('label'=>'Meine Dateien', 'itemOptions'=>array('class'=>'nav-header')),
            array('label'=>'Dateien anzeigen', 'url'=>array('file/files')),
            array('label'=>'Create File', 'url'=>array('file/create')),
            array('label'=>'Manage File', 'url'=>array('file/admin')),
        )
    ));
?>
</div>

<?php

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#file-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Files</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'file-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'name',
		'description',
		'creation_date',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
