<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	'Create',
);
?>
<div class="well pull-right">
    <?php
    $this->widget('bootstrap.widgets.TbMenu', array(
        'type'=>'list',
        'items' => array(
                array('label'=>'Administration', 'itemOptions'=>array('class'=>'nav-header')),
                array('label'=>'Benutzer anzeigen', 'url'=>array('index')),
                array('label'=>'Benutzer erstellen', 'url'=>array('create'), 'itemOptions'=>array('class'=>'active')),
                array('label'=>'Benutzer verwalten', 'url'=>array('admin')),
        )
    ));
    ?>
</div>


<h1>Create User</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>