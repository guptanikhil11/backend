<!-- how to prevent class inheritance -->
<?php
final class Fruit {
}

class Strawberry extends Fruit {
}

?>

<!-- method overriding -->
<?php
class Fruit {
  final public function intro() {
  }
}

class Strawberry extends Fruit {
  // will result in error
  public function intro() {
  }
}
?>