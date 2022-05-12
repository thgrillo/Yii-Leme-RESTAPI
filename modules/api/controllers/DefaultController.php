<?php

namespace app\modules\api\controllers;

use yii\rest\ActiveController; //linha adicionada


class DefaultController extends ActiveController // alterad pra ActiveController
{
   public $modelClass = 'app\models\Noticia'; // Todas requisioes vai usar o models Noticia


   // essa função proibe a criação e delete via API
   // public function actions(){
   //    $actions = parent::actions(); 

   //    unset($actions['create'], $actions['delete']);

   //    return $actions;
   // }
}
