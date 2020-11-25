<?php

class Item
{
// Свойства
    public int $id;
    public string $name; 
    public int $status;
    public bool $changed;
    
// Метод init
   
    function init() {
        $name = mysql_query("SELECT name FROM objects WHERE name = '$name'");
        $status = mysql_query("SELECT status FROM objects WHERE status = '$status'");
     return array($name,$status);
    }
    
//   Получение свойств с помощью __get  
    
    function __get($name) {
		return $this->$name;
	}
  
// Присвоение свойств с помощью __set

// $id  
    
    public function __set($id, $value) {
    if (is_int($value)) {
      return $this->{$id} = $value;
    } elseif (empty($value)) {
    echo 'enter val';
    } else {
    echo "error"
    }

// $name

  public function __set($name, $value) {
    if (is_string($value)) {
      return $this->{$name} = $value;
    } elseif (empty($value)) {
    echo 'enter val';
    } else {
    echo "error"
    }
    
// $status   
    
    public function __set($status, $value) {
    if (is_int($value)) {
      return $this->{$status} = $value;
    } elseif (empty($value)) {
    echo 'enter val';
    } else {
    echo "error"
    }
    
//  $changed 
    
    public function __set($changed, $value) {
    if (is_bool($value)) {
      return $this->{$changed} = $value;
    } elseif (empty($value)) {
    echo 'enter val';
    } else {
    echo "error"
    }
    
}

?>
