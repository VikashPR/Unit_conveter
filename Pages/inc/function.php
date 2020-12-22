<?php

//NOTE   LENGTH Convert Function

define('LENGTH_TO_METER',[
    'inches'         => 0.0254, 
    'foots'          => 0.3048,
    'yards'          => 0.9144,
    'miles'          => 1609.344,
    'millimeters'    => 0.001,
    'centimeters'    => 0.01,
    'meters'         => 1,
    'kilometers'     => 1000,
    'acer'              => 63.614907234075,
    'hectare'         => 100,
]);

function conver_to_meters($value , $from_unit)
{
    // This dynamic statment is used insted of Switch statment
    if(array_key_exists($from_unit , LENGTH_TO_METER))
    {
        return $value * LENGTH_TO_METER[$from_unit];
    }
    else
    {
    echo"<br>" .
    '<div class="alert alert-danger" role="alert">
    Invalid Unit
    </div>';
    }
}
function conver_from_meters($value , $to_unit)
{
    // This dynamic statment is used insted of Switch statment
    if(array_key_exists($to_unit , LENGTH_TO_METER))
    {
    return $value / LENGTH_TO_METER[$to_unit];
    }
    else
    {
        echo"<br>" .
        '<div class="alert alert-danger" role="alert">
        Invalid Unit
        </div>';
    }
}
function convert_length($value , $from_unit, $to_unit)
{
    $meter_value = conver_to_meters($value , $from_unit);
    $new_value = conver_from_meters($meter_value , $to_unit);
    return $new_value; 
}

//  NOTE AREA Convert function

function conver_to_Sq_meters($value , $from_unit)
{
    $from_unit = str_replace('Sq_', '' , $from_unit);
    if(array_key_exists($from_unit , LENGTH_TO_METER))
    {
        return $value * pow(LENGTH_TO_METER[$from_unit] , 2) ;
    }
    else
    {
        echo"<br>" .
        '<div class="alert alert-danger" role="alert"> Invalid Unit </div>';
    }
}
function conver_from_Sq_meters($value , $to_unit)
{
    $to_unit = str_replace('Sq_' , '' ,$to_unit);
    if(array_key_exists($to_unit , LENGTH_TO_METER))
    {
        return $value / pow(LENGTH_TO_METER[$to_unit] , 2);
    }
    else
    {
            echo"<br>" .
        '<div class="alert alert-danger" role="alert"> Invalid Unit </div>';
    }
}
function convert_Sq_length($value , $from_unit, $to_unit)
{
    $meter_Sq_value = conver_to_Sq_meters($value , $from_unit);
    $new_Sq_value = conver_from_Sq_meters($meter_Sq_value , $to_unit);
    return $new_Sq_value;
}       

// NOTE volume function

function optionize($string)
{
    return str_replace(' ' , '_' , strToLower($string));
}
define("VOLUME_TO_LITERS",
[
    'cubic_inches'          => 0.0163871,
    'cubic_feet'            => 28.3198,
    'Imperial_gallons'      => 3.78541  ,
    'Imperial_quarts'       => 0.946353  ,
    'Imperial_pints'        => 0.473176 ,
    'Imperial_cups'         => 0.24 , 
    'Imperial_ounces'       => 0.0295735  ,
    'Imperial_tablespoons'  => 0.0147868 ,
    'Imperial_teaspoons'    => 0.00492892,
    'US_gallons'            => 3.78541,
    'US_quarts'             => 0.946353,
    'US_pints'              => 0.473176,
    'US_cups'               => 0.24,
    'US_ounces'             => 0.0295735,
    'US_tablespoons'        => 0.0147868,
    'US_teaspoons'          => 0.00492892,
    'cubic_centimeters'     =>0.001,
    'cubic_meters'          =>1000,
    'liters'                =>1,
    'milliliters'           =>0.001
]);


function convert_to_liter($value , $from_unit)
{
    if(array_key_exists($from_unit , VOLUME_TO_LITERS))
    {
        return $value * VOLUME_TO_LITERS[$from_unit];
    }
    else
    {
        echo"<br>" .
        '<div class="alert alert-danger" role="alert"> Invalid Unit 1 </div>';
    }
}
function convert_from_litter($value , $to_unit )
{
    if(array_key_exists($to_unit , VOLUME_TO_LITERS))
    {
        return $value / VOLUME_TO_LITERS[$to_unit];
    }
    else
    {
        echo"<br>" .
        '<div class="alert alert-danger" role="alert"> Invalid Unit 2 </div>';
    }
}
function convert_volume($value , $from_unit, $to_unit)
{
    $liter_value = convert_to_liter($value , $from_unit);
    $new_value = convert_from_litter($liter_value , $to_unit);
    return $new_value; 
}
?>