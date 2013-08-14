<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->

	<div>
            <?php 
                $user = User::model()->findByAttributes( array( 'username' => Yii::app()->user->name));
                $this->widget('bootstrap.widgets.TbNavbar', array(
                        'items' => array(
                                array(
                                        'class' => 'bootstrap.widgets.TbMenu',
                                        'items' => array(
                                                array('label'=>'Home', 'url'=>array('/site/index')),
                                                array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
                                                array('label'=>'Contact', 'url'=>array('/site/contact')),
                                        )
                                ),
                            array(
                                    'class'=>'bootstrap.widgets.TbMenu',
                                    'htmlOptions'=>array('class'=>'pull-right'),
                                    'encodeLabel'=>false,
                                    'items'=>array(
                                            array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                                            array('label'=>'<img class="img-rounded mini-thumb" src="/' . Yii::app()->name . '/images/profilepictures/' . $user->id . '.png"/>' . $user->username, 'url'=>'#', 'visible'=>!Yii::app()->user->isGuest, 'items'=>array(
                                                        array('label'=>'Administration','visible'=>$user->admin),
                                                        array('label'=>'Benutzer anzeigen', 'url'=>array('/user'), 'visible'=>$user->admin),
                                                        '---',
                                                        array('label'=>'Mein Account'),
                                                        array('label'=>'Profil anzeigen', 'url'=>array('/user/view&id='.$user->id)),
                                                        array('label'=>'Meine Dateien', 'url'=>'#'),
                                                        array('label'=>'Datei hochladen', 'url'=>'#'),
                                                        '---',
                                                        array('label'=>'Logout', 'url'=>array('/site/logout'))                
                                            )),
                                    ),
                            ),
                            '<form class="navbar-search pull-right" action=""><input type="text" class="search-query span2" placeholder="Search"></form>'

                        )
                ));
            ?>
	</div><!-- mainmenu -->
	<?php 
        /*
            if(isset($this->breadcrumbs)):?>
                <?php 
                     $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
                     'links'=>$this->breadcrumbs,
                     ));
                ?>
         
     
	<?php endif     */?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
