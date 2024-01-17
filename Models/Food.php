<?php
require_once __DIR__ . '/Product.php';

class Food extends Product
{
  private $ingredients;
  private $expiration_date;
  private $is_gluten_free;

  // getter
  public function get_ingredients()
  {
    $this->ingredients;
  }
  public function get_expiration_date()
  {
    $this->expiration_date;
  }
  public function get_is_gluten_free()
  {
    $this->is_gluten_free;
  }

  // setter

  public function set_ingredients($_ingredients)
  {
    $this->ingredients = $_ingredients;
  }

  public function set_expiration_date($_expiration_date)
  {
    $this->expiration_date = $_expiration_date;
  }

  public function set_is_gluten_free($_is_gluten_free)
  {
    $this->is_gluten_free = $_is_gluten_free;
  }


}