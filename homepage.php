<?

class homepage extends page
{
public function get()
	{
        $this->html .='BYY Homework!';
	header('Location:index.php?page=upload');
	
	}
}
?>
