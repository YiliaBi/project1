<?php

abstract class page{
	protected $html;
	public function _construct()
		{
		$this->html .= '<html>';
		$this->html .='<link rel="stylesheet" href="styles.css">';
		$this->html .= '<body>';
		}
	public function _destruct()
		{
		$this->html .= '</html>';
		stringfunctions::printThis($this->html);
		}

        public function get() {
	        echo 'default get message';
		}
        public function post() {
		print_r($_post);
		}
}

?>
