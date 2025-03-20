<?php


if(!isset($_GET['day']) && !isset($_GET['month']) && !isset($_GET['year'])){

  die("nie wprowadzono danyych") ; 
}

    $day = $_GET['day'];
    $month = $_GET['month'];
    $year = $_GET['year'];
    
    $date = mktime(0,0,0, $month, $day, $year);

    $dayOfWeek = date('w', $date);

    $days = floor((time() - $date)/(60*60*24));

    switch($dayOfWeek){
        case 0:
            echo "niedziela"."<br>";
            break; 
        case 1:
            echo "poniedziałek"."<br>";
            break;
        case 2:
            echo "wtorek"."<br>";
            break;
        case 3:
            echo "środa"."<br>";
            break;
        case 4:
            echo "czwartek"."<br>";
            break;
        case 5:
            echo "piątek"."<br>";
            break;
        case 6:
            echo "sobota"."<br>";
            break;
    } 
    echo "Dni: ".$days;
    if($days / 365 >= 18){
        echo "<br>Kup se piwko";
    }
    else 
    {
        echo "<br>Nie kupuję piwka";
    }
?>

