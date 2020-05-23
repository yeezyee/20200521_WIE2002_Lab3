<table>
<?php
$movie = array('Movie Title'=> 'Slumdog Millionaire', 'Directed by'=> 'Danny Boyle', 'Awards'=> 'Nominated for 10 Oscars');

foreach($movie as $key =>$name){
    echo "<tr><td>";
    echo $key."&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;";
    echo "</td><td>";
    echo $name;
    echo "</td></tr>";
}
?>
</table>