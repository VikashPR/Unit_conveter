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

    $to_value = convert_volume($from_value , $from_unit , $to_unit);


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
$volume_options = array(
    'cubic inches',
    'cubic feet',
    'Imperial gallons',
    'Imperial quarts',
    'Imperial pints',
    'Imperial cups',
    'Imperial ounces',
    'Imperial tablespoons',
    'Imperial teaspoons',
    'US gallons',
    'US quarts',
    'US pints',
    'US cups',
    'US ounces',
    'US tablespoons',
    'US teaspoons',
    'cubic centimeters',
    'cubic meters',
    'liters',
    'milliliters'
);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>VOLUME</title>
</head>

<body>
    <br>
    <div class="container">
        <a href="/PHP/Unit_conveter/index.php" class="btn btn-success">GO BACK</a>
        <hr>
        <h1 class="text-center">------*Volume Converter*------</h1>
        <form action="" method="post" class="jumbotron">

            <div class="form-row align-items-center">
                <div class="col-auto">
                    <label>FROM:</label>&nbsp;
                </div>
                <div class="col-auto">
                    <input type="text" class="form-control mb-2" type="text" placeholder="Value-1" name="from_value" value="<?php
                    echo $from_value;
                    ?>">
                </div>
                <div class="col-auto">
                    <select name="from_unit">
                        <?php
                        foreach($volume_options as $unit)
                        {
                            $opt = optionize($unit);
                            echo "<option value=\"{$unit}\"";
                            if($from_unit == "$unit")
                            {
                                echo " selected";
                            }
                            echo ">{$unit}</option>";
                        }
                        ?>
                    </select>
                </div>
            </div>

            <div class="form-row align-items-center">
                <div class="col-auto">
                    <label>___TO:</label>
                </div>
                <div class="col-auto">
                    <input type="text" class="form-control mb-2" type="text" placeholder="Value-2" name="to_value" value="<?php
                    echo $to_value;
                    ?>">
                </div>
                <div class="col-auto">
                <select name="to_unit">
                        <?php
                        foreach($volume_options as $unit)
                        {
                            $opt = optionize($unit);
                            echo "<option value=\"{$opt}\"";
                            if($to_unit == "$opt")
                            {
                                echo " selected";
                            }
                            echo ">{$unit}</option>";
                        }
                        ?>
                    </select>
                </div>
            </div>
            <hr>
            <input type="submit" class="btn btn-success" name="submit" value="submit">
        </form>
    </div>
</body>
</html>