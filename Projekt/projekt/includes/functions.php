<?php

const LENGTH_TO_METER = array(

  "millimeeter" => 0.001,
  "sentimeeter" => 0.01,
  "toll" => 0.0254,
  "jalg" => 0.3048,
  "küünar" => 0.5333,
  "jard" => 0.9144,
  "meeter" => 1,
  "süld" => 2.1335808,
  "kaabeltau" => 185.2,
  "kilomeeter" => 1000,
  "verst" => 1066.783,
  "miil" => 1609.344,
  "meremiil" => 1852,
  "penikoorem" => 7467.53,

);

const VOLUME_TO_LITER = array(

  "milliliiter" => 0.001,
  "sentiliiter" => 0.01,
  "detsiliiter" => 0.1,
  "liiter" => 1,
  "kuupmeeter" => 1000,
  "gallon" => 4.54609,
  "kvart" => 1.13652,
  "pint" => 0.568261,
  "klaas" => 0.284131,
  "supilusikas" => 0.0177582,
  "teelusikas" => 0.00591939,  
  "barrel" => 119.240471,
);  

// Using const with arrays requires PHP 5.6 or higher
const MASS_TO_KILOGRAM = array(
  "unts" =>	0.0283495,
  "nael" =>	0.453592,
  "milligramm" =>	0.000001,
  "gramm" =>	0.001,
  "kilogramm" =>	1,
  "tsentner" => 100,
  "tonn" =>	1000
);


function optionize($string) {
  return str_replace(' ', '_', strtolower($string));
}

// The function float_to_string formats a float into a string 
// while also avoiding default use of scientific notation.
// Rounds to $precision and trims extra trailing zeros.
function float_to_string($float, $precision=10) {
  // Typecast to insure value is a float
  $float = (float) $float;
  $string = number_format($float, $precision, '.', '');
  $string = rtrim($string, '0');
  $string = rtrim($string, '.');
  return $string;
}

// Length
function convert_to_meters($value, $from_unit) {
  if(array_key_exists($from_unit, LENGTH_TO_METER)) {
    return $value * LENGTH_TO_METER[$from_unit];
  } else {
    return "Unsupported unit.";
  }
}
  
function convert_from_meters($value, $to_unit) {
  if(array_key_exists($to_unit, LENGTH_TO_METER)) {
    return $value / LENGTH_TO_METER[$to_unit];
  } else {
    return "Unsupported unit.";
  }
}

function convert_length($value, $from_unit, $to_unit) {
  $meter_value = convert_to_meters($value, $from_unit);
  $new_value = convert_from_meters($meter_value, $to_unit);
  return $new_value;
}

// Area
function convert_to_square_meters($value, $from_unit) {
  $from_unit = str_replace('square_', '', $from_unit);
  if(array_key_exists($from_unit, LENGTH_TO_METER)) {
    return $value * pow(LENGTH_TO_METER[$from_unit], 2);
  } else {
    return "Unsupported unit.";
  }
}
  
function convert_from_square_meters($value, $to_unit) {
  $to_unit = str_replace('square_', '', $to_unit);
  if(array_key_exists($to_unit, LENGTH_TO_METER)) {
    return $value / pow(LENGTH_TO_METER[$to_unit], 2);
  } else {
    return "Unsupported unit.";
  }
}

function convert_area($value, $from_unit, $to_unit) {
  $meter_value = convert_to_square_meters($value, $from_unit);
  $new_value = convert_from_square_meters($meter_value, $to_unit);
  return $new_value;
}


// Volume
function convert_to_liters($value, $from_unit) {
  if(array_key_exists($from_unit, VOLUME_TO_LITER)) {
    return $value * VOLUME_TO_LITER[$from_unit];
  } else {
    return "Unsupported unit.";
  }
}
  
function convert_from_liters($value, $to_unit) {
  if(array_key_exists($to_unit, VOLUME_TO_LITER)) {
    return $value / VOLUME_TO_LITER[$to_unit];
  } else {
    return "Unsupported unit.";
  }
}

function convert_volume($value, $from_unit, $to_unit) {
  $liter_value = convert_to_liters($value, $from_unit);
  $new_value = convert_from_liters($liter_value, $to_unit);
  return $new_value;
}

// Mass
function convert_to_kilograms($value, $from_unit) {
  if(array_key_exists($from_unit, MASS_TO_KILOGRAM)) {
    return $value * MASS_TO_KILOGRAM[$from_unit];
  } else {
    return "Unsupported unit.";
  }
}
  
function convert_from_kilograms($value, $to_unit) {
  if(array_key_exists($to_unit, MASS_TO_KILOGRAM)) {
    return $value / MASS_TO_KILOGRAM[$to_unit];
  } else {
    return "Unsupported unit.";
  }
}

function convert_mass($value, $from_unit, $to_unit) {
  $kg_value = convert_to_kilograms($value, $from_unit);
  $new_value = convert_from_kilograms($kg_value, $to_unit);
  return $new_value;
}

// Speed
function convert_speed($value, $from_unit, $to_unit) {
  if($from_unit == 'knots') { $from_unit = 'nautical_miles_per_hour'; }
  if($to_unit == 'knots') { $to_unit = 'nautical_miles_per_hour'; }

  list($from_dist, $from_time) = explode('_per_', $from_unit);
  list($to_dist, $to_time) = explode('_per_', $to_unit);
  
  if($from_time == 'hour') { $value /= 3600; }
  $value = convert_length($value, $from_dist, $to_dist);
  if($to_time == 'hour') { $value *= 3600; }

  return $value;
}

// Temperature
function convert_to_celsius($value, $from_unit) {
  switch($from_unit) {
    case 'celsius':
      return $value;
      break;
    case 'fahrenheit':
      return ($value - 32) / 1.8;
      break;
    case 'kelvin':
      return $value - 273.15;
      break;
    default:
      return "Unsupported unit.";
  }
}

function convert_from_celsius($value, $to_unit) {
  switch($to_unit) {
    case 'celsius':
      return $value;
      break;
    case 'fahrenheit':
      return ($value * 1.8) + 32;
      break;
    case 'kelvin':
      return $value + 273.15;
      break;
    default:
      return "Unsupported unit.";
  }
}

function convert_temperature($value, $from_unit, $to_unit) {
  $celsius_value = convert_to_celsius($value, $from_unit);
  $new_value = convert_from_celsius($celsius_value, $to_unit);
  return $new_value;
}

?>
