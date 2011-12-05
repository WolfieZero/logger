<?php

define('LOG_FILE',	'log');
define('MODE',		'a');
define('DATE',		'H:i:s/m.d.y - ');

class logger {

	private $fp;

	function __construct($location='') {
		$this->fp = fopen($location.LOG_FILE, MODE);
	}

	function log($log) {
		$write = date(DATE).$log."\r\n";
		fwrite($this->fp, $write);
	}

	function logVar($log) {
		$write = date(DATE).print_r($log, true)."\r\n";
		fwrite($this->fp, $write);
	}


	function close() {
		fclose($this->fp);
	}

}