<?php
/*
Sri Lanka vehicle number validation using php regular expressions
Sumith Harshan
*/


function is_vehicle_num_valid($vehicle_number) {
    if (preg_match("/(?:[A-Z]{2,3}|(?!0*-)[0-9]{1,3})-[0-9]{4}(?<!0{4})/", $vehicle_number)) {
        return true;
    }
    return false;
}

// USAGE
$vehicle_number = 'CBA-2746';
$res = is_vehicle_num_valid($vehicle_number); 
echo ($res !='' ? 'Valid Number' : 'Invalid Number');
?>
