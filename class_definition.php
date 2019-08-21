<?
/*
    U-L6
    クラスの宣言
*/

class Car
{

}

    //get_declared_classes : 定義済のクラスの名前を配列として返す
    $my_classes = get_declared_classes();

    print_r($my_classes);

    /*
    Output:
    Array
    (
        [0] => stdClass
        [1] => Exception
        [2] => ErrorException
        ~ 省略 ~
        [128] => XSLTProcessor
        [129] => ZipArchive
        [130] => Car ★
    )
    */

?>