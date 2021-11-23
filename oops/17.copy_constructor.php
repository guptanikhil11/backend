<?php
    class CopyConstructor {
        public $name;
        public $food_type;
        public function __construct() { } //default constructor
        public function copyCon(CopyConstructor $o) // working as copy constructor
        {
        }
    }
    $obj1 = new CopyConstructor();
    $obj2 = $obj1; //both hold the same reference, so if we change in obj2 then it reflect also obj1. so this method is not good.
     $obj2->name='h';
     $obj1->show();
?>
