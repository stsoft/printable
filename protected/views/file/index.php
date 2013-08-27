<?php
/* @var $this FileController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Files',
);
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
<h1>Files</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
