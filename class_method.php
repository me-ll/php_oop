<?php
/*
    U-L9
    メソッドの宣言
*/

class Cars
{

    //クラスの中にあるときはメソッド（クラスの外にあるときは、関数と呼ぶ）
    function gretting()
    {

    }

    function gretting2()
    {

    }

}

    $the_methods = get_class_methods('Cars');

    foreach($the_methods as $method){
        echo $method.'<br>';
    }


?>