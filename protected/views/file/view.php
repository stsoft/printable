<?php
/* @var $this FileController */
/* @var $model File */

$this->breadcrumbs=array(
	'Files'=>array('index'),
	$model->name,
);

/*
$this->menu=array(
	array('label'=>'List My Files', 'url'=>array('files')),
	array('label'=>'Create File', 'url'=>array('create')),
	array('label'=>'Update File', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete File', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
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
            array('label'=>'Update File', 'url'=>array('file/update', 'id'=>$model->id)),
            array('label'=>'Create File', 'url'=>array('file/create')),
            array('label'=>'Delete File', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
            array('label'=>'View File', 'url'=>array('file/view', 'id'=>$model->id)),
            array('label'=>'Manage File', 'url'=>array('file/admin')),
        )
    ));
?>
</div>

<h1>View File #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'description',
	),
)); ?>
