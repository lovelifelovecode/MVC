<?php
class Controller{
    public function displayInfo(){
        //从模型中获取数据
        $data = Model::getUser();        
        
        //展示数据
        echo View::showUser($data); 

    }

    public function displayFruit(){
        //从模型中获取数据
        $data = Model::getFruit();        
        
        //展示数据
        echo View::showFruit($data); 

    }
}
