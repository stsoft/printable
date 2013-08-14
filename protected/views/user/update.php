<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);
?>
<div class="row">
 
    <div class="span7">

    <?php $this->renderPartial('_form', array('model'=>$model)); ?>

    </div>
    <div class="well pull-right">
        <?php
        $this->widget('bootstrap.widgets.TbMenu', array(
            'type'=>'list',
            'items' => array(
                    array('label'=>'Administration', 'itemOptions'=>array('class'=>'nav-header')),
                    array('label'=>'Profil anzeigen', 'url'=>array('view&id='.$model->id)),
                    array('label'=>'Profil bearbeiten', 'url'=>array('update&id='.$model->id), 'itemOptions'=>array('class'=>'active')),
            )
        ));
        ?>
    </div>
</div>