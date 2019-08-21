<?php
/*
    U-L10
    インスタンス
*/

class Cars
{

    //クラスの中にあるときはメソッド（クラスの外にあるときは、関数と呼ぶ）
    function gretting()
    {
        echo "Hello :D";

    }

}

    //インスタンスの作成

    //bmwインスタンス
    $bmw = new Cars();

    //mercedesインスタンス
    $mercedes = new Cars();

    $bmw->gretting();
?>