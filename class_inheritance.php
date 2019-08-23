<?
/*
    U-L12
    クラスの継承
*/

class Cars
{

    var $wheels = 4;

    function greeting()
    {
        echo "Hi";
    }

}

//Carsクラスを継承して、Trucksクラス作成
class Trucks extends Cars{

    //Carsクラスのwheelを引き継いでいたので、デフォルトは4だったが
    //上書きして10
    var $wheels = 10;

}

$bmw = new Cars();
echo $bmw->wheels; //4
echo $bmw->greeting(); //Hi

$tacoma = new Trucks();
echo $tacoma->wheels; //4 -(上書き)-> 10
echo $tacoma->greeting(); //Hi


?>