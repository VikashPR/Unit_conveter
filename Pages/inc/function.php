<?php
function conver_to_meters($value , $from_unit)
{
    
    switch($from_unit)
    {
        case "inches":
            return $value = $value * 0.0254;
            break;
        case "foots":
            return $value = $value * 0.3048;

            break;
        case "yards":
            return $value = $value * 0.9144;

            break;
        case "miles":
            return $value = $value * 1609.344;

            break;
        case "millimeters":
            return $value = $value * 0.001;

            break;
        case "centimeters":
            return $value = $value * 0.01;

            break;
        case "meters":
            return $value = $value * 1;

            break;
        case "kilometers":
            return $value = $value * 1000;
            break;
        
        default:
            echo"<br>" .
        '<div class="alert alert-danger" role="alert">
        Invalid Unit
        </div>';
    }

}
function conver_from_meters($value , $to_unit)
{
    
    switch($to_unit)
    {
        case "inches":
            return $value = $value / 0.0254;
            break;
        case "foots":
            return $value = $value / 0.3048;

            break;
        case "yards":
            return $value = $value / 0.9144;

            break;
        case "miles":
            return $value = $value / 1609.344;

            break;
        case "millimeters":
            return $value = $value / 0.001;

            break;
        case "centimeters":
            return $value = $value / 0.01;

            break;
        case "meters":
            return $value = $value / 1;

            break;
        case "kilometers":
            return $value = $value / 1000;
            break;
        
        default:
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

?>