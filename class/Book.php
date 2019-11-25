<?php

class Book {

	private $name;
	private $author;
	private $price;
    private $code;

	function __construct(string $name, string $author, int $price, string $code) {
		$this->name = $name;
		$this->author = $author;
		$this->price = $price;
		$this->code = $code;
	}


	function setName(string $name):void {
		$this->name = $name;
	}
	function getName():string {
		return $this->name;
	}

	function setAuthor(string $author):void {
		$this->author = $author;
	}
	function getAuthor():string {
		return $this->author;
	}
	
	function setPrice(int $price):void {
		$this->price = $price;
	}
	function getPrice():string {
		return number_format($this->price);
	}
	
	function setCode(string $code):void {
		$this->code = $code;
	}
	function getCode():string {
		return $this->code;
	}
}
?>