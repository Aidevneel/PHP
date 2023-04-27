<?php


class abc{

    private static function print($name){
        echo "this is private static function, called by call_user_func_array([__CLASS__,'method'],'args') <br> Hi : $name";
    }
    public static function __callStatic($method, $args){
        if(method_exists(__CLASS__, $method)){
            call_user_func_array([__CLASS__,$method],$args);

        }else{
        echo "you are trying to call non-exist static method : " . $method;
        }
    }

}

abc::print("Neel");

?>