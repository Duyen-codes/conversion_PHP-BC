<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Conversions</title>
  </head>
  <body>
    <h2>Conver temperature form Celcius to F/K</h2>
    <form action="index.php" method="GET">
      <label for="temp">What is the temp?</label>
      <input name="temp" type="text" id="temp" placeholder="Temperature in Celcius..." />
      <select name="unit" id="unit">
        <option value="K">Kelvin</option>
        <option value="F">Fahrenheit</option>
      </select>
      <button>Calculate</button>
    </form>

    <h2>Conver Speed</h2>
    <form action="index.php" method="GET">
      <label for="speed">What is the speed?</label>
      <input name="speed" type="text" id="speed" placeholder="Kilometer per hour..." />
      <select name="speedUnit" id="speedUnit">
        <option value="ms">Meter per second</option>
        <option value="knot">Knot</option>
      </select>
      <button>Calculate</button>
    </form>

    <h2>Conver Mass</h2>
    <form action="index.php" method="GET">
      <label for="mass">What is the mass of body?</label>
      <input name="mass" type="text" id="mass" placeholder="Type your mass..." />
      <select name="massUnit" id="massUnit">
          <option value="">Unit</option>
        <option value="kg">Kilograms</option>
        <option value="g">Grams</option>
      </select>
      <button>Calculate</button>
    </form>
  </body>
</html>

<?php 

if (isset($_GET['temp']) || isset($_GET['target_unit'])) {
    $temp = $_GET["temp"] ?? 0;
    $target_unit = $_GET["unit"] ?? '';
   
    if ($target_unit == "F") {
        $fahrenheit = ($temp * 9/5) + 32;
        echo $fahrenheit . "F";
    }
    if($target_unit == "K") {
        $kelvin = ($temp + 273.15);
        echo $kelvin . "K";
  } 
} 

if (isset($_GET['speed']) || isset($_GET['speedUnit'])) {
    $speed = $_GET["speed"] ?? 0;
    $target_unit = $_GET["speedUnit"] ?? '';
   
    if ($target_unit == "ms") {
        $ms = round(($speed / 3.6), 2);
        echo $ms . " m/s";
    }
    if ($target_unit == "knot") {
        $knot  = round(($speed / 1.852),2);
        echo $knot . " knot";
  } 
} 

// MASS Calculation 
if (isset($_GET['mass']) || isset($_GET['massUnit'])) {
    $mass = $_GET["mass"] ?? 0;
    $massUnit = $_GET["massUnit"] ?? '';

    if ($massUnit == "kg") {
        echo ($mass * 1000 !== 1) ?  $mass * 1000 . " Grams" :  $mass * 1000 . " Gram";
    }

    if ($massUnit== "g") {
        echo ($mass / 1000 !== 1) ?  $mass / 1000 . " Kilograms" :  $mass / 1000 . " Kilogram";
    } 
} 

// Test comment
?>
