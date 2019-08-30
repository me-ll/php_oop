<?php
/*
    U-L16
    静的プロパティでの親クラスの参照
*/

class Cars
{


    static $wheel_count = 4; //このスクリプトのどこからでもアクセスできる


    function car_detail()
    {

        return self::$wheel_count;

    }


}

class Trucks extends Cars
{

    static function display()
    {
        echo parent::car_detail();
    }

}

    Trucks::display();



?>