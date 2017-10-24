<?php
echo "1233";
class main {
   
    public function _construct()
        {
        echo "5678";
        $pageRequest = 'homepage';
	if(isset($_REQUEST['page'])) {
           $pageRequest=$_REQUEST['page'];
	 }
        $page = new $pageRequest;
	echo $pageRequest;

      if($_SERVER['REQUEST_METHOD'] == 'GET'){
	   $page->get();
         } else {
           $page->post();
         }
}
}

?>

