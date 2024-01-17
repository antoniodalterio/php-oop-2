<?php

require_once __DIR__ . '/Category.php';
class Product
{
  private $id;
  private $name;
  private $category;
  private $price;
  private $image;

  // getters
  public function __construct($_id, $_name, Category $_category, int $_price, $_image)
  {
    $this->set_id($_id);
    $this->set_name($_name);
    $this->set_category($_category);
    $this->set_price($_price);
    $this->set_image($_image);
  }

  public function get_id()
  {
    return $this->id;
  }

  public function get_name()
  {
    return $this->name;
  }

  public function get_category()
  {
    return $this->category;
  }
  public function get_price()
  {
    return $this->price;
  }
  public function get_image()
  {
    return $this->image;
  }

  // setters

  public function set_id($_id)
  {
    $this->id = $_id;
  }
  public function set_name($_name)
  {
    $this->name = $_name;
  }
  public function set_category($_category)
  {
    $this->category = $_category;
  }
  public function set_price($_price)
  {
    $this->price = $_price;
  }
  public function set_image($_image)
  {
    $this->image = $_image;
  }
}