<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->id,
);

?>
<div class="row">
 
    <div class="span7">
        <div class="pull-left">
            <img src="<?php echo Yii::app()->homeUrl.'/../images/profilepictures/'.$model->id.'.png'; ?>" class="thumbnail user-profile">
        </div>
        <div>
            <h4><?php echo $model->username; ?></h4>
            <h5><?php echo $model->email; ?></h5>
        </div>
    </div>
    
     <div class="well pull-right">
        <?php
        $this->widget('bootstrap.widgets.TbMenu', array(
            'type'=>'list',
            'items' => array(
                    array('label'=>'Administration', 'itemOptions'=>array('class'=>'nav-header')),
                    array('label'=>'Profil anzeigen', 'url'=>array('view&id='.$model->id), 'itemOptions'=>array('class'=>'active')),
                    array('label'=>'Profil bearbeiten', 'url'=>array('update&id='.$model->id)),
            )
        ));
        ?>
    </div>

</div>
