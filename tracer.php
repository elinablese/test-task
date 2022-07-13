<?php
class Tracer{
    static function trace($name)
    {
      echo "<pre>";
      var_dump($name);
      echo "</pre>";
    }
    static function traceAndExit($variable)
    {
      Tracer::trace($variable);
      exit;
    }
}
//Tracer::trace($_SERVER['PHP_SELF']); 
//Tracer::trace($_SERVER); 
?>