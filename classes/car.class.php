<?php
class car{
  public $id;
  public $manufacturer_id;
  public $colour_id;
  public $model;
  public $description;
  public $price;
  public $regNumber;
  public $regDate;
  
  public function __construct($id, $manufacturer_id, $colour_id,$model, $description, $price, $regNumber, $regDate){
    $this->id = $id;
    $this->manufacturer_id = $manufacturer_id;
    $this->colour_id = $colour_id;
    $this->model = $model;
    $this->description = $description;
    $this->price = $price;
    $this->regNumber = $regNumber;
    $this->regDate = $regDate;
  }
?>
// car class for part 1