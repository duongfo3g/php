<?php
class Category {
	public $id;
	public $name;

	public function display() {
		printf("<br/>".$this->id.", ".$this->name."<br/>");
	}
}

class Product {
	id, cat_id, title, thumbnail, price
	public $id;
	public $cat_id;
	public $title;
	public $thumbnail;
	public $price;


	public function display() {
	printf("<br/>".$this->id.",".$this->cat_id.",".$this->title.",".$this->thumbnail.",".$this->price.",");
}


$catA = new Category();
$catA->id = 1;
$catA->name = A;
$catA->display();

$catB = new Category();
$catB->id = 2;
$catB->name = B;
$catB->display();

$productA = new Product();
$productA->id = 1;
$productA->cat_id = 1;
$productA->title = "Sneaker";
$productA->thumbnail = "url1";
$productA->price = "100";
$productA->display();

$productB = new Product();
$productB->id = 2;
$productB->cat_id = 2;
$productB->title = "Hoodies";
$productB->thumbnail = "url2";
$productB->price = "200";
$productB->display();


