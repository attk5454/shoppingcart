<?php

class DVD {

	private $name;
	private $price;
    private $time;

	function __construct(string $name, int $price, string $time) {
		$this->name = $name;
		$this->price = $price;
		$this->time = $time;
	}


	function setName(string $name):void {
		$this->name = $name;
	}
	function getName():string {
		return $this->name;
	}
	
	function setPrice(int $price):void {
		$this->price = $price;
	}
	function getPrice():string {
		return number_format($this->price);
	}
	
	function setTime(string $time):void {
		$this->time = $time;
	}
	function getTime():string {
		return $this->time;
	}
}
?>