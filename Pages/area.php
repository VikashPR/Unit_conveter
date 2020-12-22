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

$length_options = [
    'Sq_inches', 
    'Sq_foots',
    'Sq_yards',
    'Sq_miles',
    'Sq_millimeters',
    'Sq_centimeters',
    'Sq_meters',  
    'Sq_kilometers',
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
    <title>AREA</title>
</head>

<body>
    <br>
    <div class="container">
        <a href="/PHP/Unit_conveter/index.php" class="btn btn-success">GO BACK</a>
        <hr>
        <h1 class="text-center">------*Area Converter*------</h1>
        <form action="" method="post"  class="jumbotron">

            <div class="form-row align-items-center">
                <div class="col-auto">
                    <label>FROM:</label>&nbsp;
                </div>
                <div class="col-auto">
                    <input type="text" required class="form-control mb-2" type="text" name="from_value" value="<?php
                    echo $from_value;
                    ?>">
                </div>
                <div class="col-auto">
                    <select  name="from_unit">
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
            <noscript><input type="submit" name="submit" value="Submit"></noscript>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

</body>
</html>