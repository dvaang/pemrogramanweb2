<?php

require_once "orang.php";

class oranginggris extends orang{
     
    // override
    public function ucapSalam()
    {
        echo "Hello my name is " . $this->nama . "<br>";
    }
}