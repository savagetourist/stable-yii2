<?php

namespace app\controllers;
use yii\web\Controller;

class AppController extends Controller{

    protected function setMeta($title = Null, $keywords = Null, $description = Null){
        $this->view->title = $title;
        $this->view->registerMetaTag(['name' => 'keywords', 'content' => "$keywords"]);
        $this->view->registerMetaTag(['name' => 'description', 'content' => "$description"]);
    }

}

?>