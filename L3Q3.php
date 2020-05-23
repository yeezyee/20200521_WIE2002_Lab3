<table>
    <?php
    function getTotal($arr){
        $total = 0;
        foreach($arr as $key => $val){
            $val = preg_replace('/[^a-z0-9]+/i', '', $val);
            $total += $val;
        }
        echo $total;
    }

    $cities = array(
        'New York, NY'=> '8,008,278',
        'Los Angeles, CA'=> '3,694,820',
        'Chicago, IL' => '2,896,016',
        'Houston, TX '=> '1,953,631',
        'Philadelphia, PA'=> '1,517,550',
        'Phoenix, AZ' => '1,321,045',
        'San Diego, CA'=> '1,223,400',
        'Dallas, TX'=> '1,188,580',
        'San Antonio, TX' => '1,144,646',
        'Detroit, MI'=> '951,270'
    );
    echo "<tr><th align='center'>City</th><th align='center'>Population</th></tr>";
    foreach($cities as $key =>$name){
        echo "<tr><td align='center'>";
        echo $key."&emsp;&emsp;";
        echo "</td><td>";
        echo $name;
        echo "</td></tr>";
    }
    echo "<tr><td align='center'>";
    echo "Total"."&emsp;&emsp;";
    echo "</td><td>";
    echo getTotal($cities);
    echo "</td></tr>";
    ?>
</table>