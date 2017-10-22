<?

class hompepage extends page
{
public function get()
	{
        echo "welcom!";	
	header('Location:index.php?page=upload');
	
	}
}
?>
