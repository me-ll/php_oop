<?php
/*
    U-L14
    静的プロパティ
*/

class Cars
{

    //普通のプロパティ
    //インスタンスと紐づいている

    //静的プロパティ
    //インスタンス必要ない


    public $wheel_count = 4; //このスクリプトのどこからでもアクセスできる
    static $door_count = 2; //このクラス・サブクラス（継承したもの）からのみ


    static function car_detail()
    {

        //インスタンスから呼び出すときはこの書き方
        // echo $this->wheel_count;
        // echo $this->door_count;

        //メソッドを静的にしている場合この書き方
        // echo Cars::$wheel_count; //これはstaticにしていないので、この書き方ではアクセスできない
        echo Cars::$door_count;


    }
}

    $bmw = new Cars();

    echo $bmw->wheel_count; //4

    // echo $bmw->door_count; //アクセスできない
    echo Cars::$door_count;

    Cars::car_detail();
?>