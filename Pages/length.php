<?php

require_once ('inc/function.php');

$from_value = '';
$from_unit  = '';
$to_value   = '';
$to_unit    = '';


if($_POST['submit'])
{

    if($_POST['from_value'] != 0) 
    {
    $from_value =  $_POST['from_value'];
    $from_unit  =  $_POST['from_unit'];
    $to_value   =  $_POST['to_value'];
    $to_unit    =  $_POST['to_unit'];

    $to_value = convert_length($from_value , $from_unit , $to_unit);


    echo "<br>".
        '<div class="alert alert-Success" role="alert">
        The value is      '.$to_value. 
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
$length_options = [
    'inches', 
    'foots',
    'yards',
    'miles',
    'millimeters',
    'centimeters',
    'meters',  
    'kilometers',
    'acer',
    'hectare'    
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>LENGTH</title>
</head>

<body>
    <br>
    <div class="container">
        <a href="/PHP/Unit_conveter/index.php" class="btn btn-success">GO BACK</a>
        <hr>
        <h1 class="text-center">------*Length Converter*------</h1>
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
                    <?php
                        foreach($length_options as $unit)
                        {
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
                    <input type="text" class="form-control mb-2" type="text" name="to_value" value="<?php
                    echo $to_value;
                    ?>">
                </div>
                <div class="col-auto">
                    <select name="to_unit">
                    <?php
                        foreach($length_options as $unit)
                        {
                            echo "<option value=\"{$unit}\"";
                            if($to_unit == "$unit")
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