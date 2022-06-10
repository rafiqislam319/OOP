<?php
  
  class Weather{

    public static $weatherConditions = ['Cold', 'Mild', 'Warm'];


    public static function celciusToFahrenhite($c){
      return $c * 9/5 +32;

    }

    public static function determineConditions($f){
      if ($f<30) {
        return self::$weatherConditions[0];
      }elseif ($f<60) {
        return self::$weatherConditions[1];
      }else{
        return self::$weatherConditions[2];
      }

    }


  }

  print_r(Weather::$weatherConditions) . '<br>';// we are accessing property directly through class without class instances
  echo Weather::celciusToFahrenhite(20) . '<br>';  // we are accessing method directly through class without class instances
  echo "The weather is" . ' ' . Weather::determineConditions(10) .  '<br>';

?>
