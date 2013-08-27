<?php
/* @var $this FileController */
/* @var $model File */

$this->breadcrumbs=array(
	'Files'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);
/*
$this->menu=array(
	array('label'=>'List File', 'url'=>array('index')),
	array('label'=>'Create File', 'url'=>array('create')),
	array('label'=>'View File', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage File', 'url'=>array('admin')),
);
 
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
            array('label'=>'View File', 'url'=>array('file/view', 'id'=>$model->id)),
            array('label'=>'Manage File', 'url'=>array('file/admin')),
        )
    ));
?>
</div>

<h1>Update File <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>