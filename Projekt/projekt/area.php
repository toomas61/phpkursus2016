<?php

require_once('includes/functions.php');

$from_value = '';
$from_unit = '';
$to_unit = '';
$to_value = '';

if($_POST['submit']) {
  $from_value = $_POST['from_value'];
  $from_unit = $_POST['from_unit'];
  $to_unit = $_POST['to_unit'];
  
  $to_value = convert_area($from_value, $from_unit, $to_unit);
}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Pindala teisendamine</title>
    <link href="styles.css" rel="stylesheet" type="text/css">
  </head>
  <body>

    <div id="main-content">

      <h1>Pindala teisendamine</h1>
  
      <form action="" method="post">
        
        <div class="entry">
          <label>Ühikust:</label>&nbsp;
          <input type="text" name="from_value" value="<?php echo $from_value; ?>" />&nbsp;
          <select name="from_unit">
            <option value="square_inches"<?php if($from_unit == 'square_inches') { echo " selected"; } ?>>ruuttoll</option>
            <option value="square_feet"<?php if($from_unit == 'square_feet') { echo " selected"; } ?>>ruutjalg</option>
            <option value="square_yards"<?php if($from_unit == 'square_yards') { echo " selected"; } ?>>ruutjard</option>
            <option value="square_miles"<?php if($from_unit == 'square_miles') { echo " selected"; } ?>>ruutmiil</option>
            <option value="square_millimeters"<?php if($from_unit == 'square_millimeters') { echo " selected"; } ?>>ruutmillimeeter</option>
            <option value="square_centimeters"<?php if($from_unit == 'square_centimeters') { echo " selected"; } ?>>ruutsentimeeter</option>
            <option value="square_meters"<?php if($from_unit == 'square_meters') { echo " selected"; } ?>>ruutmeeter</option>
            <option value="square_kilometers"<?php if($from_unit == 'square_kilometers') { echo " selected"; } ?>>ruutkilomeeter</option>
            <option value="acres"<?php if($from_unit == 'acres') { echo " selected"; } ?>>aaker</option>
            <option value="hectares"<?php if($from_unit == 'hectares') { echo " selected"; } ?>>hektar</option>
          </select>
        </div>
        
        <div class="entry">
          <label>Ühikusse:</label>&nbsp;
          <input type="text" name="to_value" value="<?php echo float_to_string($to_value); ?>" />&nbsp;
          <select name="to_unit">
            <option value="square_inches"<?php if($to_unit == 'square_inches') { echo " selected"; } ?>>ruuttoll</option>
            <option value="square_feet"<?php if($to_unit == 'square_feet') { echo " selected"; } ?>>ruutjalg</option>
            <option value="square_yards"<?php if($to_unit == 'square_yards') { echo " selected"; } ?>>ruutjard</option>
            <option value="square_miles"<?php if($to_unit == 'square_miles') { echo " selected"; } ?>>ruutmiil</option>
            <option value="square_millimeters"<?php if($to_unit == 'square_millimeters') { echo " selected"; } ?>>ruutmillimeeter</option>
            <option value="square_centimeters"<?php if($to_unit == 'square_centimeters') { echo " selected"; } ?>>ruutsentimeeter</option>
            <option value="square_meters"<?php if($to_unit == 'square_meters') { echo " selected"; } ?>>ruutmeeter</option>
            <option value="square_kilometers"<?php if($to_unit == 'square_kilometers') { echo " selected"; } ?>>ruutkilomeeter</option>
            <option value="acres"<?php if($to_unit == 'acres') { echo " selected"; } ?>>aaker</option>
            <option value="hectares"<?php if($to_unit == 'hectares') { echo " selected"; } ?>>hektar</option>
          </select>
          
        </div>
        
        <input type="submit" name="submit" value="Arvuta" />
      </form>
  
      <br />
      <a href="index.php">Tagasi menüüsse</a>
      
    </div>
  </body>
</html>
