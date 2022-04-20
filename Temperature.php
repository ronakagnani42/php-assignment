<?php

$convertedTemperature = 0;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $temperature = $_POST['temperature'];
    $fromConvertionUnit = $_POST['fromConvertionUnit'];
    $toConvertionUnit = $_POST['toConvertionUnit'];

    if ($fromConvertionUnit == $toConvertionUnit) {
        $convertedTemperature = $temperature;
    } else if ($fromConvertionUnit == 'fahrenheit' && $toConvertionUnit == 'celcius') {

        $convertedTemperature = ($temperature - 32) * 0.5556;
    } else if ($fromConvertionUnit == 'celcius' && $toConvertionUnit == 'fahrenheit') {

        $convertedTemperature = ($temperature * 1.8) + 32;
    } else if ($fromConvertionUnit == 'Kelvin' && $toConvertionUnit == 'fahrenheit') {

        $convertedTemperature = ($temperature - 273.15) * 1.8 + 32;
    } else if ($fromConvertionUnit == 'Kelvin' && $toConvertionUnit == 'celcius') {

        $convertedTemperature = ($temperature - 273.15);
    } else if ($fromConvertionUnit == 'fahrenheit' && $toConvertionUnit == 'Kelvin') {

        $convertedTemperature = ($temperature - 32) * 0.5556 + 273.15;
    } else if ($fromConvertionUnit == 'celcius' && $toConvertionUnit == 'Kelvin') {

        $convertedTemperature = $temperature + 273.15;
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Temperature Converter</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="style1.css">
</head>

<body>
    <h1 style="text-align:center">Convertion Of Temperature</h1>
    <div class="container">
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <div class="set">
            <label for="fromConvertionUnit">From:</label>
            <input class="form-control" type="number" name="temperature" id="temperature"
                value="<?php echo (!empty($temperature)) ? $temperature : '' ?>">
            <select class="form-control" name="fromConvertionUnit" id="fromConvertionUnit">
                <option value="celcius"
                    <?php if (isset($temperature) && $fromConvertionUnit == "celcius") {echo "selected";}?>>celcius
                </option>
                <option value="fahrenheit"
                    <?php if (isset($temperature) && $fromConvertionUnit == "fahrenheit") {echo "selected";}?>>
                    fahrenheit</option>
                <option value="Kelvin"
                    <?php if (isset($temperature) && $fromConvertionUnit == "Kelvin") {echo "selected";}?>>Kelvin
                </option>
            </select>
        </div>


        <div class="toset">
            <label for="toConvertionUnit">To:</label>
            <input class="form-control" type="number" class="myname"
                value="<?php echo (!empty($convertedTemperature)) ? $convertedTemperature : '0' ?>">
            <select class="form-control" name="toConvertionUnit" id="toConvertionUnit">
                <option value="celcius"
                    <?php if (isset($temperature) && $toConvertionUnit == "celcius") {echo "selected";}?>>celcius
                </option>
                <option value="fahrenheit"
                    <?php if (isset($temperature) && $toConvertionUnit == "fahrenheit") {echo "selected";}?>>fahrenheit
                </option>
                <option value="Kelvin"
                    <?php if (isset($temperature) && $toConvertionUnit == "Kelvin") {echo "selected";}?>>Kelvin</option>
            </select>
            <input class="btn btn-primary" type="submit" id="sub" value="Convert">
        </div>
       
        <div>
           
        </div>
    </form>
    </div>
  
</body>

</html>