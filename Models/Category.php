<?php

class Category
{
  public $name;
  public $icon;

  public function __construct($_name, $_icon)
  {
    $this->name = $_name;
    $this->icon = $_icon;
  }

  // getter
  public function get_name()
  {
    return $this->name;
  }

  public function get_icon()
  {
    return $this->icon;
  }

  // setter

  public function set_name($_name)
  {
    $this->name = $_name;
  }
  public function set_icon($_icon)
  {
    $this->icon = $_icon;
  }
}

