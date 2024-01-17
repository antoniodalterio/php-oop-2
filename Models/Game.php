<?php
require_once __DIR__ . '/Product.php';

class Game extends Product
{
  private $material;
  private $age;
  private $size;

  // getter
  public function get_material()
  {
    $this->material;
  }
  public function get_age()
  {
    $this->age;
  }
  public function size()
  {
    $this->size;
  }

  // setter

  public function set_material($_material)
  {
    $this->material = $_material;
  }

  public function set_age($_age)
  {
    $this->age = $_age;
  }

  public function set_size($_size)
  {
    $this->size = $_size;
  }



}


