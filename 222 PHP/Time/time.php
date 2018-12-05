<?php
    $start_date = new DateTime('09/05/2018');
    $date = new DateTime('09/05/2018');
    $end_date = new DateTime('12/12/2018');

    echo "<table border='1'><tr>";

    for ($i=0; $i < 4; $i++)
    {
        echo "<th>".$date->format('d/M')."</th>";
        $date->add(new DateInterval('P1D'));
    }

echo "</tr><tr>";
$i = 0;
    do{
        echo "<th>".$date->format('d/M')."</th>";
        $date->add(new DateInterval('P1D'));

        $i++;

        if($i == 7)
        {
            $i = 0;
            echo "</tr><tr>";
        }

    }while ($date <= $end_date) ;

    echo "</tr></table>";
