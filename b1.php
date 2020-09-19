<?php

    function P2_5($a){
     $b = "red";
     $k = array_search($b,$a);
     return $k;
    }
    $a = ["1"=>"red","2"=>"green","3"=>"blue"];
    echo P2_5($a);
 ?>