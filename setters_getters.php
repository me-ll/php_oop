<?php
/*
    U-L15
    SetterとGetter
*/

class Cars
{

    private $door_count = 4; //アクセスできるのクラスの中だけ


    function get_values()
    {

        echo $this->door_count;


    }

    function set_values()
    {
        $this->door_count = 10;
    }



}

    $bmw = new Cars();
    $bmw->get_values(); //4

    $bmw->set_values(); //10をprivateのdoor_countプロパティに代入している
    $bmw->get_values(); //10

?>