<?php
/*
    U-L17
    
*/

class Cars
{


    public $wheel_count = 4;
    static $door_count = 4; //static: stay in one place. keep this value.


    //__construct: クラスが呼び出されるたびに、最初にこのメソッドが実行される
    function __construct()
    {

        echo $this->wheel_count++; //増えない

        echo self::$door_count++; //増える

    }

    function details()
    {

        echo $this->wheel_count;

    }


    //__destruct: クラスの最後に実行される。あんまり使わない。
    function __destruct()
    {

        echo 'aaa';
    }


}

    $a = new Cars();
    $b = new Cars();
    $c = new Cars();
    // $a->details();

?>