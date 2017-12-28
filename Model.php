<?php
    class Model{
        //通过数组模拟从数据库读取数据
        public static function getUser(){
            $data = [
                ['id'=>11,'name'=>'xiaojing','age'=>25],
                ['id'=>22,'name'=>'haining','age'=>23],
                ['id'=>33,'name'=>'lanpei','age'=>22]
            ];
            return $data;
        }

        //通过数组模拟从数据库读取数据
        public static function getFruit(){
            $data = [
                ['id'=>31,'fruit'=>'apple','color'=>'red'],
                ['id'=>32,'fruit'=>'pear','color'=>'yellow'],
                ['id'=>33,'fruit'=>'peach','color'=>'pink']
            ];
            return $data;
        }
    }
