<?php

//NOTE   LENGTH Convert Function

define('LENGTH_TO_METER',[
    'inches'            => 0.0254, 
    'foots'             => 0.3048,
    'yards'             => 0.9144,
    'miles'             => 1609.344,
    'millimeters'       => 0.001,
    'centimeters'       => 0.01,
    'meters'            => 1,
    'kilometers'        => 1000,
    // !Sq_meter values
    'Sq_inches'         => pow(0.0254 , 2),
    'Sq_foots'          => pow(0.3048 , 2),
    'Sq_yards'          => pow(0.9144 , 2),
    'Sq_miles'          => pow(1609.344 , 2),
    'Sq_millimeters'    => pow(0.001 , 2),
    'Sq_centimeters'    => pow(0.01 , 2),
    'Sq_meters'         => pow(1 , 2),
    'Sq_kilometers'     => pow(1000 , 2),
    'Sq_acer'           => 4046.8564224,
    'Sq_inches'         => 10000,
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
    if(array_key_exists($from_unit , LENGTH_TO_METER))
    {
        return $value * LENGTH_TO_METER[$from_unit];
    }
    else
    {
        echo"<br>" .
        '<div class="alert alert-danger" role="alert">Invalid Unit </div>';
    }
}
function conver_from_Sq_meters($value , $to_unit)
{
    if(array_key_exists($to_unit , LENGTH_TO_METER))
    {
        return $value / LENGTH_TO_METER[$to_unit];
    }
    else
    {
            echo"<br>" .
        '<div class="alert alert-danger" role="alert">Invalid Unit</div>';
    }
}
function convert_Sq_length($value , $from_unit, $to_unit)
{
    $meter_Sq_value = conver_to_Sq_meters($value , $from_unit);
    $new_Sq_value = conver_from_Sq_meters($meter_Sq_value , $to_unit);
    return $new_Sq_value;
}                                                                       

?>