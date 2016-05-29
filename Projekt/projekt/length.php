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
  
  $to_value = convert_length($from_value, $from_unit, $to_unit);
}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Pikkuse teisendamine</title>
    <link href="styles.css" rel="stylesheet" type="text/css">
  </head>
  <body>

    <div id="main-content">

      <h1>Pikkuse teisendamine</h1>
    
      <form action="" method="post">
              
        <div class="entry">
          <label>Ühikust:</label>&nbsp;
          <input type="text" name="from_value" value="<?php echo $from_value; ?>" />&nbsp;
           <select name="from_unit">
           <option value="jalg"<?php if($from_unit == 'jalg') { echo " selected"; } ?>>jalg</option>
           <option value="jard"<?php if($from_unit == 'jard') { echo " selected"; } ?>>jard</option>
           <option value="kaabeltau"<?php if($from_unit == 'kaabeltau') { echo " selected"; } ?>>kaabeltau</option>
           <option value="kilomeeter"<?php if($from_unit == 'kilomeeter') { echo " selected"; } ?>>kilomeeter</option>
           <option value="küünar"<?php if($from_unit == 'küünar') { echo " selected"; } ?>>küünar</option>
           <option value="meeter"<?php if($from_unit == 'meeter') { echo " selected"; } ?>>meeter</option>
           <option value="meremiil"<?php if($from_unit == 'meremiil') { echo " selected"; } ?>>meremiil</option>
           <option value="miil"<?php if($from_unit == 'miil') { echo " selected"; } ?>>miil</option>
           <option value="millimeeter"<?php if($from_unit == 'millimeeter') { echo " selected"; } ?>>millimeeter</option>
           <option value="penikoorem"<?php if($from_unit == 'penikoorem') { echo " selected"; } ?>>penikoorem</option>
           <option value="sentimeeter"<?php if($from_unit == 'sentimeeter') { echo " selected"; } ?>>sentimeeter</option>
           <option value="süld"<?php if($from_unit == 'süld') { echo " selected"; } ?>>süld</option>
           <option value="toll"<?php if($from_unit == 'toll') { echo " selected"; } ?>>toll</option>
           <option value="verst"<?php if($from_unit == 'verst') { echo " selected"; } ?>>varst</option>
           </select>
        </div>
        
        <div class="entry">
          <label>Ühikusse:</label>&nbsp;
          <input type="text" name="to_value" value="<?php echo float_to_string($to_value); ?>" />&nbsp;
          <select name="to_unit">
           <option value="jalg"<?php if($to_unit == 'jalg') { echo " selected"; } ?>>jalg</option>
           <option value="jard"<?php if($to_unit == 'jard') { echo " selected"; } ?>>jard</option>
           <option value="kaabeltau"<?php if($to_unit == 'kaabeltau') { echo " selected"; } ?>>kaabeltau</option>
           <option value="kilomeeter"<?php if($to_unit == 'kilomeeter') { echo " selected"; } ?>>kilomeeter</option>
           <option value="küünar"<?php if($to_unit == 'küünar') { echo " selected"; } ?>>küünar</option>
           <option value="meeter"<?php if($to_unit == 'meeter') { echo " selected"; } ?>>meeter</option>
           <option value="meremiil"<?php if($to_unit == 'meremiil') { echo " selected"; } ?>>meremiil</option>
           <option value="miil"<?php if($to_unit == 'miil') { echo " selected"; } ?>>miil</option>
           <option value="millimeeter"<?php if($to_unit == 'millimeeter') { echo " selected"; } ?>>millimeeter</option>
           <option value="penikoorem"<?php if($to_unit == 'penikoorem') { echo " selected"; } ?>>penikoorem</option>
           <option value="sentimeeter"<?php if($to_unit == 'sentimeeter') { echo " selected"; } ?>>sentimeeter</option>
           <option value="süld"<?php if($to_unit == 'süld') { echo " selected"; } ?>>süld</option>
           <option value="toll"<?php if($to_unit == 'toll') { echo " selected"; } ?>>toll</option>
           <option value="verst"<?php if($to_unit == 'verst') { echo " selected"; } ?>>varst</option>
          </select>
          
        </div>
        
        <input type="submit" name="submit" value="Arvuta" />
      </form>
  
      <br />
      <a href="index.php">Tagasi menüüsse</a>
      
    </div>
  </body>
</html>
