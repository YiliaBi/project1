<?php

class main {
    public function __construct()
        {
	//header('Location:index.php?page=upload');
        $pageRequest = 'homepage';
	if(isset($_REQUEST['page'])) {
           $pageRequest=$_REQUEST['page'];
	 }
       // $page=new $pageRequest;
       // if($_SERVER['REQUEST_METHOD'] =='GET'){
	// $page->get();
        // } else {
        // $page->post();}
         }
}

?>

