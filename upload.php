
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
   $target_file = "Project1/" . $_FILES["fileToUpload"]["name"];
   move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
   header('Location:index.php?page=display&filename='.$_FILES["file"]["name"]);
   }

   }
?>
