<?php
    class View{
        public static function showUser($data){
            foreach($data as $value){
                echo "id={$value['id']} the name is {$value['name']} and his age is {$value['age']}<br>";
            }
        }

        public static function showFruit($data){
            foreach($data as $value){
                echo "The id of the {$value['id']} name is {$value['fruit']} and its color is {$value['color']}.<br>";
            }
        }    
    }
