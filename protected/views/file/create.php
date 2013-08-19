<?php
/* @var $this FileController */
/* @var $model File */

$this->breadcrumbs=array(
	'Files'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List My Files', 'url'=>array('files')),
	array('label'=>'Manage File', 'url'=>array('admin')),
);
?>

<h1>Create File</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>