<?php

namespace App\Assets;

class AssetsAdmin
{

	public $_css_path = '/public/css/';

	public function __construct()
	{
		$this->_route_name = Route::current()->getName();
		$this->setStyleSheet($this->_route_name);
	}

	public function setStyleSheet($name)
	{
		$css = [];

		switch ($name) {

			case '/':
				$css[] = $this->_css_path . 'index.css';
				break;

			default:
				break;
		}

		$this->_css = $css;
		return $this->_css;
	}

	public function getStyleSheet()
	{
		return $this->_css;
	}

	public function getAssets()
	{
		foreach ($this->getStyleSheet() as $val) {
			echo '<link rel="stylesheet" href="' . $val . '" async>';
		}
	}
}
