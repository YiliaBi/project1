<?php

abstract class page  {
	protected $html;

	public function __construct()
		{
		$this->html .= '<html>';
		$this->html .= '<link rel="stylesheet" href="styles.css">';
		$this->html .= '<body>';
		}
	public function __destruct()
		{
		$this->html .= '</body>';
		$this->html .= '</html>';
		stringfunction::printThis($this->html);
		}
}

?>
