<?php
class Yar_Concurrent_Client {
	static $_callstack;
	static $_callback;
	static $_error_callback;
	public static function call($uri, $method, array $parameters, $callback = null);
	public static function loop($callback = null, $error_callback = null);
}