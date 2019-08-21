<?php
/*
    U-L11
    プロパティ
*/

class Cars
{
    //プロパティ
    //クラスの中にあるときは、varで定義する。クラスの外にあるときは、$マークで変数とわかる。
    var $wheel_count = 4;
    var $door_count = 4;

    //クラスの中にあるときはメソッド（クラスの外にあるときは、関数と呼ぶ）
    function car_detail()
    {
        //クラス内で宣言したプロパティを使用する場合、$this->プロパティとかく。
        return "This car has ".$this->wheel_count;

    }

}

    //bmwインスタンス
    $bmw = new Cars();

    //mercedesインスタンス
    $mercedes = new Cars();

    echo $bmw->wheel_count; //4
    echo $bmw->wheel_count = 10; //10

    echo $mercedes->wheel_count; //4

    echo $mercedes->car_detail(); //This car has 4

    echo $bmw->car_detail(); //This car has 10
?>