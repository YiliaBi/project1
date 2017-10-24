<?php

class upload extends page
{ 
    public function get()
    	{
	$form = '<form action="index.php?page=upload" method="post" enctype =
	"multipart/form-data">';
	$form .= '<label for = "file">filename:</label>';
	$form .= '<input type="file" name="fileToUpload" id="fileToUpload" >';
	$form .= '<br>';
	$form .= '<input type="submit" name="submit" id="submit"><br>';
	$form .= '</form> ';
	$this->html .= '<h1>Upload Form<h1>';
	$this->html .= $form;
	}

    public function post()
    {
	 $target_dir = "upload/";
	 $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
 	 $uploadOk = 1;
 	 $csvfileType = pathinfo($target_file,PATHINFO_EXTENSION);

 	 if($csvfileType != "csv") {
     		echo "Please upload csv files";
     		}
     		// Check if file already exists
         if (file_exists($target_file)) {
         	echo "Sorry, file already exists.";
	        }else {
	             move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$target_file); 
		     header('Location:index.php?page=display&filename='. $_FILES["fileToUpload"]["name"]);	
                       } 
   }

   }
?>
