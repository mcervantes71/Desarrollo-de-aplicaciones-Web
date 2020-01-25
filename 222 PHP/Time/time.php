<?php
    $date = $_POST["date"];
    $date = new DateTime($date);

    $end_date = new DateTime('05/29/2020');

    $off = array("03/Feb", "16/Mar", "06/Apr", "07/Apr", "08/Apr", "09/Apr", "10/Apr", "13/Apr", "14/Apr", "15/Apr", "16/Apr", "17/Apr", "01/May", "15/May", );

    echo "<style>#off{color:red;} th{width:100px;} td,th{text-align:center;}</style>
          <table border='1'>
             <tr>
                 <th></th>
                 <th>Lunes</th>
                 <th>Martes</th>
                 <th>Miercoles</th>
                 <th>Jueves</th>
                 <th>Viernes</th>
             </tr>
             <tr>";

//     for ($i=0; $i < 4; $i++)
//     {
//         echo "<th>".$date->format('d/M')."</th>";
//         $date->add(new DateInterval('P1D'));
//     }
//
// echo "</tr><tr>";
$i = 0;
$week = 1;
    do{
        if($date->format('D') == 'Sun' || $date->format('D') == 'Sat')
            $date->add(new DateInterval('P1D'));
        else
        {
            if($i == 0)
                echo "<td>$week</td>";

            echo "<td id='";

            foreach($off as $value)
            {
                if($value == $date->format('d/M'))
                {
                    echo "off";
                    break;
                }
            }
            echo "'>".$date->format('d/M')."</td>";
            $date->add(new DateInterval('P1D'));
            $i++;
        }

        if($i == 5)
        {
            $i = 0;
            echo "</tr><tr>";
            $week = $week + 1;
        }

    }while ($date <= $end_date) ;

    echo "</tr></table>";
