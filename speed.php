<?php

$ConvertSpeed = 0;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $Speed = $_POST['Speed'];
    $fromConvertionUnit = $_POST['fromConvertionUnit'];
    $toConvertionUnit = $_POST['toConvertionUnit'];

    if ($fromConvertionUnit == $toConvertionUnit) {
        $ConvertSpeed = $Speed;
    } else if ($fromConvertionUnit == 'Km/hr' && $toConvertionUnit == 'm/s') {
        $ConvertSpeed = $Speed / 3.6;
    } else if ($fromConvertionUnit == 'm/s' && $toConvertionUnit == 'Km/hr') {

        $ConvertSpeed = $Speed * 3.6;
    } else if ($fromConvertionUnit == 'Km/hr' && $toConvertionUnit == 'Foot/s') {

        $ConvertSpeed = $Speed / 1.097;
    } else if ($fromConvertionUnit == 'Km/hr' && $toConvertionUnit == 'Mile/hr') {

        $ConvertSpeed = $Speed / 1.609;
    } else if ($fromConvertionUnit == 'Km/hr' && $toConvertionUnit == 'Knot') {

        $ConvertSpeed = $Speed / 1.852;
    } else if ($fromConvertionUnit == 'm/s' && $toConvertionUnit == 'Foot/s') {

        $ConvertSpeed = $Speed * 3.281;
    } else if ($fromConvertionUnit == 'm/s' && $toConvertionUnit == 'Mile/hr') {

        $ConvertSpeed = $Speed * 2.237;
    } else if ($fromConvertionUnit == 'm/s' && $toConvertionUnit == 'Knot') {

        $ConvertSpeed = $Speed * 1.944;
    } else if ($fromConvertionUnit == 'Foot/s' && $toConvertionUnit == 'm/s') {

        $ConvertSpeed = $Speed / 3.281;
    } else if ($fromConvertionUnit == 'Foot/s' && $toConvertionUnit == 'Km/hr') {

        $ConvertSpeed = $Speed * 1.097;
    } else if ($fromConvertionUnit == 'Foot/s' && $toConvertionUnit == 'Mile/hr') {

        $ConvertSpeed = $Speed / 1.467;
    } else if ($fromConvertionUnit == 'Foot/s' && $toConvertionUnit == 'Knot') {

        $ConvertSpeed = $Speed / 1.688;
    } else if ($fromConvertionUnit == 'Mile/hr' && $toConvertionUnit == 'Knot') {

        $ConvertSpeed = $Speed / 1.151;
    } else if ($fromConvertionUnit == 'Mile/hr' && $toConvertionUnit == 'Km/hr') {

        $ConvertSpeed = $Speed * 1.609;
    } else if ($fromConvertionUnit == 'Mile/hr' && $toConvertionUnit == 'm/s') {

        $ConvertSpeed = $Speed / 2.237;
    } else if ($fromConvertionUnit == 'Mile/hr' && $toConvertionUnit == 'Foot/s') {

        $ConvertSpeed = $Speed * 1.467;
    } else if ($fromConvertionUnit == 'Knot' && $toConvertionUnit == 'Km/hr') {

        $ConvertSpeed = $Speed * 1.852;
    } else if ($fromConvertionUnit == 'Knot' && $toConvertionUnit == 'm/s') {

        $ConvertSpeed = $Speed / 1.944;
    } else if ($fromConvertionUnit == 'Knot' && $toConvertionUnit == 'Mile/hr') {

        $ConvertSpeed = $Speed * 1.151;
    } else if ($fromConvertionUnit == 'Knot' && $toConvertionUnit == 'Foot/s') {

        $ConvertSpeed = $Speed * 1.688;
    } else {
        echo "Not vaild Input";
    }

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="style1.css">
    <title>Speed</title>
</head>

<body>
    <h1 style="text-align:center">Convertion Of Speed</h1>
    <div class="container">
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">

<div class="set">
    <label for="fromConvertionUnit">From:</label>
    <input class="form-control" type="number" name="Speed" id="Speed" value="<?php echo (!empty($Speed)) ? $Speed : '' ?>">

    <select class="form-control" name="fromConvertionUnit" id="fromConvertionUnit">
        <option value="Km/hr" <?php if (isset($Speed) && $fromConvertionUnit == "Km/hr") {echo "selected";}?>>
            Km/hr</option>
        <option value="m/s" <?php if (isset($Speed) && $fromConvertionUnit == "m/s") {echo "selected";}?>> m/s
        </option>
        <option value="Foot/s" <?php if (isset($Speed) && $fromConvertionUnit == "Foot/s") {echo "selected";}?>>
            Foot/s</option>
        <option value="Mile/hr"
            <?php if (isset($Speed) && $fromConvertionUnit == "Mile/hr") {echo "selected";}?>>Mile/hr </option>
        <option value="Knot" <?php if (isset($Speed) && $fromConvertionUnit == "Knot") {echo "selected";}?>>
            Knot</option>
    </select>
</div>
<div class="toset">
    <label for="toConvertionUnit">To:</label>
    <input class="form-control" type="number" class="myname" value="<?php echo (!empty($ConvertSpeed)) ? $ConvertSpeed : '0' ?>">
    <select class="form-control" name="toConvertionUnit" id="toConvertionUnit">
        <option value="Km/hr" <?php if (isset($Speed) && $toConvertionUnit == "Km/hr") {echo "selected";}?>>
            Km/hr</option>
        <option value="m/s" <?php if (isset($Speed) && $toConvertionUnit == "m/s") {echo "selected";}?>>m/s
        </option>
        <option value="Foot/s" <?php if (isset($Speed) && $toConvertionUnit == "Foot/s") {echo "selected";}?>>
            Foot/s</option>
        <option value="Mile/hr" <?php if (isset($Speed) && $toConvertionUnit == "Mile/hr") {echo "selected";}?>>
            Mile/hr</option>
        <option value="Knot" <?php if (isset($Speed) && $toConvertionUnit == "Knot") {echo "selected";}?>> Knot
        </option>
    </select>
    <input type="submit"  class="btn btn-primary"  id="sub" value="Convert">
</div>

<div>
    
</div>
</form>
    </div>
    
</body>

</html>