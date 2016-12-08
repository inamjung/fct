<?php
use kartik\tabs\TabsX;
use yii\helpers\Url;

//$this->title = $user->name .' profile';
//$this->registerMetaTag(['name' => 'keywords', 'content' => $user->shortDescription]);
?>
<?php


 
$items = [
    [
        'label'=>'<i class="glyphicon glyphicon-home"></i> Home',
       'content' => $this->render('_form'),
        'active'=>true
    ],
    [
        'label'=>'<i class="glyphicon glyphicon-user"></i> Profile',
        //'content'=>$content2,
        'linkOptions'=>['data-url'=>\yii\helpers\Url::to(['/site/tabs-data'])]
    ],
    [
        'label'=>'<i class="glyphicon glyphicon-list-alt"></i> Dropdown',
        'items'=>[
             [
                 'label'=>'Option 1',
                 'encode'=>false,
                // 'content'=>$content3,
             ],
             [
                 'label'=>'Option 2',
                 'encode'=>false,
                 //'content'=>$content4,
             ],
        ],
    ],
    [
        'label'=>'<i class="glyphicon glyphicon-king"></i> Disabled',
        'headerOptions' => ['class'=>'disabled']
    ],
];
// Above
echo TabsX::widget([
    'items' => $items,
    'position' => TabsX::POS_ABOVE,
    'encodeLabels' => false
]);
// Below

