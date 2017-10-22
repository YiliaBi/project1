
<?php 
class upload extends page
{ 
    public function get()
    	{
	$form = '<form action="index.php?page=upload" method="post" enctype =
	"multipart/form-data">';
	$form .= '<label for = "file">filename:</label>';
	$form .= '<input type="file" name="file" id="file" >';
	$form .= '<br>';
	$form .= '<input type="submit" name="submit" id="file"><br>';
	$form .= '</form> ';
	$this->html .= $form;
	}

    public function post()
    {
   $target_dir = "upload/";
   $target_file = $traget_dir.$_FILES["file"]["name"];
   move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
   header('Location:index.php?page=display&filename='.$_FILES["file"]["name"]);
   //header('Location:index.php?page=display');
   }

   }
?>
