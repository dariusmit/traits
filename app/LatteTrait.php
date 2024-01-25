<?php

namespace App;

//Objects cant be created from traits. Trait can be used by other traits or classes.

trait LatteTrait {

   public function makeLatte() {

      echo static::class . ' is making Latte Coffee' . '<br />';

   }

}

?>
