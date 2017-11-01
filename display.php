<?php

class display1 extends page
{
public function get(){

$f = fopen("./upload/".$_GET['filename'], "r");
          
echo '<table border="1">';
echo '<thead>';
         
while (($line = fgetcsv($f)) !== false) {
        
        //$cell = explode(" ",$row);
        echo "<tr>";
        foreach ($line as $cell) {
        echo "<td>" . htmlspecialchars($cell) ."</td>";
        }
        echo "</tr>\n";
        }
fclose($f); 
echo "\n</table></body></html>";
}   
}

?>
