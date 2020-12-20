<?php

require_once('inc/function.php');

$from_value = '';
$from_unit  = '';
$to_value   = '';
$to_unit    ='';

if($_POST['submit'])
{

    if($_POST['from_value'] != 0) 
    {
    $from_value =  $_POST['from_value'];
    $from_unit  =  $_POST['from_unit'];
    $to_value   =  $_POST['to_value'];
    $to_unit    =  $_POST['to_unit'];

    $to_value = convert_Sq_length($from_value , $from_unit , $to_unit);


    echo "<br>".
        '<div class="alert alert-Success" role="alert">
        The value is = '. $to_value . 
        '</div>';
    }
    else
    {
        echo "<br>".
        '<div class="alert alert-danger" role="alert">
        Enter The Values
        </div>';
    }
} 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>AREA</title>
</head>

<body>
    <br>
    <div class="container">
        <a href="/PHP/Unit_conveter/index.php" class="btn btn-success">GO BACK</a>
        <hr>
        <h1 class="text-center">------*Area Converter*------</h1>
        <form action="" method="post" class="jumbotron">

            <div class="form-row align-items-center">
                <div class="col-auto">
                    <label>FROM:</label>&nbsp;
                </div>
                <div class="col-auto">
                    <input type="text" class="form-control mb-2" type="text" name="from_value" value="<?php
                    echo $from_value;
                    ?>">
                </div>
                <div class="col-auto">
                    <select name="from_unit">
                        <option value="Sq_inches" <?php 
                        if($from_unit == 'Sq_inches')
                        {
                            echo " selected";
                        }
                        ?>>Sq_inches</option>
                        <option value="Sq_foots" <?php 
                        if($from_unit == 'Sq_foots')
                        {
                            echo " selected";
                        }
                        ?>>Sq_foots</option>
                        <option value="Sq_yards" <?php 
                        if($from_unit == 'Sq_yards')
                        {
                            echo " selected";
                        }
                        ?>>Sq_yards</option>
                        <option value="Sq_miles" <?php 
                        if($from_unit == 'Sq_miles')
                        {
                            echo " selected";
                        }
                        ?>>Sq_miles</option>
                        <option value="Sq_millimeters" <?php 
                        if($from_unit == 'Sq_millimeters')
                        {
                            echo " selected";
                        }
                        ?>>Sq_millimeters</option>
                        <option value="Sq_centimeters" <?php 
                        if($from_unit == 'Sq_centimeters')
                        {
                            echo " selected";
                        }
                        ?>>Sq_centimeters</option>
                        <option value="Sq_meters" <?php 
                        if($from_unit == 'Sq_meters')
                        {
                            echo " selected";
                        }
                        ?>>Sq_meters</option>
                        <option value="Sq_kilometers" <?php 
                        if($from_unit == 'Sq_kilometers')
                        {
                            echo " selected";
                        }
                        ?>>Sq_kilometer</option>
                        <option value="Sq_acer" <?php 
                        if($from_unit == 'Sq_acer')
                        {
                            echo " selected";
                        }
                        ?>>Sq_acer</option>
                        <option value="Sq_hectare" <?php 
                        if($from_unit == 'Sq_hectare')
                        {
                            echo " selected";
                        }
                        ?>>Sq_hectare</option>
                    </select>
                </div>
            </div>

            <div class="form-row align-items-center">
                <div class="col-auto">
                    <label>___TO:</label>
                </div>
                <div class="col-auto">
                    <input type="text" class="form-control mb-2" type="text" name="to_value" value="<?php
                    echo $to_value;
                    ?>">
                </div>
                <div class="col-auto">
                    <select name="to_unit">
                        <option value="Sq_inches" <?php 
                        if($to_unit == 'Sq_inches')
                        {
                            echo " selected";
                        }
                        ?>>Sq_inches</option>
                        <option value="Sq_foots" <?php 
                        if($to_unit == 'Sq_foots')
                        {
                            echo " selected";
                        }
                        ?>>Sq_foots</option>
                        <option value="Sq_yards" <?php 
                        if($to_unit == 'Sq_yards')
                        {
                            echo " selected";
                        }
                        ?>>Sq_yards</option>
                        <option value="Sq_miles" <?php 
                        if($to_unit == 'Sq_miles')
                        {
                            echo " selected";
                        }
                        ?>>Sq_miles</option>
                        <option value="Sq_millimeters" <?php 
                        if($to_unit == 'Sq_millimeters')
                        {
                            echo " selected";
                        }
                        ?>>Sq_millimeters</option>
                        <option value="Sq_centimeters" <?php 
                        if($to_unit == 'Sq_centimeters')
                        {
                            echo " selected";
                        }
                        ?>>Sq_centimeters</option>
                        <option value="Sq_meters" <?php 
                        if($to_unit == 'Sq_meters')
                        {
                            echo " selected";
                        }
                        ?>>Sq_meters</option>
                        <option value="Sq_kilometers" <?php 
                        if($to_unit == 'Sq_kilometers')
                        {
                            echo " selected";
                        }
                        ?>>Sq_kilometers</option>
                        <option value="Sq_acer" <?php 
                        if($to_unit == 'Sq_acer')
                        {
                            echo " selected";
                        }
                        ?>>Sq_acer</option>
                        <option value="Sq_hectare" <?php 
                        if($to_unit == 'Sq_hectare')
                        {
                            echo " selected";
                        }
                        ?>>Sq_hectare</option>
                        
                    </select>
                </div>
            </div>
            <hr>
            <input type="submit" class="btn btn-success" name="submit" value="submit">
        </form>
    </div>
</body>
</html>