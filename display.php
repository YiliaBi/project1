<?php

class  display extends page
{

	public function get()
	{
	echo "<html><body><table>\n\n"
	
	$fh = fopen("./project1/".$_GET['filename']', 'r');
	while (($line = fgetcsv($fh))!==flase){
	$row=$line[0];
	$cells=explode(" ",$row);
	echo"<tr>";
	foreach($cell as $cell){
		echo "<td>" . htmlspecialchars($cell). "</td>";

	}
	echo "</tr>\n";
}
fclose($fh);
echo "\n</table></body></html>";
}
}



        print '</table>';

?>
