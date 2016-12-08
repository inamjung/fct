<?php

use kartik\tabs\TabsX;
use yii\helpers\Url;

echo TabsX::widget([
    'position' => TabsX::POS_ABOVE,
    'align' => TabsX::ALIGN_LEFT,
    'items' => [
        [
            'label' => 'One',
            //'content' => 'ww',
           'content' => $this->render('_form',['model'=>$model]),
            'active' => true,
             'options' => ['id' => 'form1'],
            'linkOptions'=>['data-url'=>Url::to(['/fct/fetch-tab?tab=1'])]
        ],
        [
             'label' => 'Two',
            //'content' => 'ww',
             'content' => $this->render('_formcase',['model'=>$model]),            
             'options' => ['id' => 'form2'],
            'linkOptions'=>['data-url'=>Url::to(['/fct/fetch-tab?tab=2'])]
        ],
        [
            'label' => 'Dropdown',
            'items' => [
                 [
                     'label' => 'DropdownA',
                     'content' => 'DropdownA, Anim pariatur cliche...',
                 ],
                 [
                     'label' => 'DropdownB',
                     'content' => 'DropdownB, Anim pariatur cliche...',
                 ],
            ],
        ],
    ],
]);

