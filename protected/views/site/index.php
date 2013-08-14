<?php
/* @var $this SiteController */
$this->pageTitle=Yii::app()->name;
?>
<div id="main-content">
    <div class="row">
        <div class="span10">
            <?php
            $this->widget('bootstrap.widgets.TbCarousel', array(
              'items'=>array(
                  array(
                            'image'=>'http://placehold.it/830x400&text=First+thumbnail',
                            'label'=>'First Thumbnail label',
                            'caption'=>'Cras justo odio, dapibus ac facilisis in, egestas eget quam. ' .
                                    'Donec id elit non mi porta gravida at eget metus. ' .
                                    'Nullam id dolor id nibh ultricies vehicula ut id elit.'),
                  array(
                            'image'=>'http://placehold.it/830x400&text=Second+thumbnail',
                            'label'=>'Second Thumbnail label',
                            'caption'=>'Cras justo odio, dapibus ac facilisis in, egestas eget quam. ' .
                                    'Donec id elit non mi porta gravida at eget metus. ' .
                                    'Nullam id dolor id nibh ultricies vehicula ut id elit.'),
                  array(
                            'image'=>'http://placehold.it/830x400&text=Third+thumbnail',
                            'label'=>'Third Thumbnail label',
                            'caption'=>'Cras justo odio, dapibus ac facilisis in, egestas eget quam. ' .
                                    'Donec id elit non mi porta gravida at eget metus. ' .
                                    'Nullam id dolor id nibh ultricies vehicula ut id elit.'),
              ),
            ));
        ?>
        </div>
    </div>
    <div class="row">
        <div class="span7">
        <?php
            $this->widget('bootstrap.widgets.TbBox', array(
                'title' => 'Featured Categories',
                'headerIcon' => 'icon-list',
                'content' => '<ul class="thumbnails">
                                <li class="span4">
                                  <div class="thumbnail">
                                    <img data-src="holder.js/300x200" alt="">
                                    <h3>Thumbnail label</h3>
                                    <p>Thumbnail caption...</p>
                                  </div>
                                </li>
                              </ul>' // $this->renderPartial('_view')
            ));
            ?>
           
        </div>
        
         <div class="span3">
        <?php
            $this->widget('bootstrap.widgets.TbBox', array(
                'title' => 'Top Rated',
                'headerIcon' => 'icon-star',
                'content' => 'Am Besten bewertet' // $this->renderPartial('_view')
            ));
            ?>
           
        </div>
        
    </div>
</div>