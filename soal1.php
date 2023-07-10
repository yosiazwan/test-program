<?php
//Perbaiki kode dibawah sehingga bisa dijalankan

class Fruit {
  // Properties
  public $name;
  public $color;

  // Methods
  static function set_name($name) {
    $this->name = $name;
  }

  function getName() {
    return $this->name;
  }

  function set_color($color) {
    $this->color = $color;
  }

  function getColor() {
    return $this->color;
  }
}

$apple = new Fruit();
$apple->set_name('Apple');
$apple->set_color('Red');
echo "Name: " . $apple->get_name();
echo "<br>";
echo "Color: " . $apple->get_color();
?>