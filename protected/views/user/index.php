<?php
/* @var $this UserController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Users',
);
?>
<div class="row">
 

    <div class="users well-small pull-left span7">
        <?php $this->widget('zii.widgets.CListView', array(
                'dataProvider'=>$dataProvider,
                'itemView'=>'_view',
        )); ?>
    </div>

    <div class="well pull-right">
        <?php
        $this->widget('bootstrap.widgets.TbMenu', array(
            'type'=>'list',
            'items' => array(
                    array('label'=>'Administration', 'itemOptions'=>array('class'=>'nav-header')),
                    array('label'=>'Benutzer anzeigen', 'url'=>array('index'), 'itemOptions'=>array('class'=>'active')),
                    array('label'=>'Benutzer erstellen', 'url'=>array('create')),
                    array('label'=>'Benutzer verwalten', 'url'=>array('admin')),
            )
        ));
        ?>
    </div>
</div>