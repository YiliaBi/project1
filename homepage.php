<?

class homepage extends page
{
public function get()
	{
        $this->html .=stringfunction::printThis("BYY Homework!");
	header('Location:index.php?page=upload');
	
	}
}
?>
