<?php

abstract class page{
	protected $html;
	public function __construct()
		{
		$this->html .= '<html>';
		$this->html .= '<body>';
		}
	public function __destruct()
		{
		$this->html .= '</html>';
		echo $this->html;
		}

        public function get() {
	        echo 'default get message';
		}
        public function post() {
		print_r($post);
		}
}

?>
