<?php
/*
    U-L13
    クラスの継承
*/

class Cars
{


    // var $wheels = 4;
    // var $door_count = 4;

    public $wheel_count = 4; //このスクリプトのどこからでもアクセスできる
    private $door_count = 4; //このクラスからのみ
    protected $seat_count = 2; //このクラス・サブクラス（継承したもの）からのみ


    function car_detail()
    {

        echo $this->wheel_count;
        echo $this->door_count;
        echo $this->seat_count;

    }
}

    $bmw = new Cars();

    // echo $bmw->wheel_count; //4

    // echo $bmw->door_count; //アクセスできない
    // echo $bmw->seat_count; //アクセスできない

    $bmw->car_detail();

?>