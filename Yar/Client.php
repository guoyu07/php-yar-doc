<?php
class Yar_Client {
	protected $_protocol;
	protected $_uri;
	protected $_options;
	protected $_running;
	public function __call($method, array $parameters);
	public final function __construct($url);
	public function setOpt($name, $value);
}