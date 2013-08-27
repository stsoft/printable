<?php
/* @var $this FileController */
/* @var $model File */

$this->breadcrumbs=array(
	'Files'=>array('index'),
	'Create',
);
/*
$this->menu=array(
	array('label'=>'List My Files', 'url'=>array('files')),
	array('label'=>'Manage File', 'url'=>array('admin')),
);
 * 
 */
?>

<div class="well pull-right menu-printable">
<?php
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

<h1>Create File</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>