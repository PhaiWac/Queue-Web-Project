<?php
    $mongkol = 'name';
    $somsri = 90 ;

    switch ($somsri) {
        case ($somsri  < 20) :
            echo "A++" ;
             break; 
        case ($somsri < 50) : 
            echo "A+" ;
            break ;
        default :
            echo "A" ;
            break ;
    } 

    // switch (ture) {
    //     case <100 :
    //     $somsri = "A";
    //     break;
    //     case <50
    //     $somsri = "A+";
    //     break;
    //     case <20
    //     $somsri = "A++":
    //     break;
    // }
?>