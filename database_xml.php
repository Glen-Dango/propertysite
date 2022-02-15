<?php
//include 'dbh.php';

$conn = mysqli_connect("localhost", "root", "", "xml");



?>

<?php

$affectedRow = 0;
//$i = ++
//'SET @property_id := LAST_INSERT_ID()';

$xml = simplexml_load_file('propertiesshort.xml') or die("can not find it");


foreach ($xml->branches->branch->properties->property as $row){
	


 $instructedDate = (string)$row->instructedDate;
$price_text = (string)$row->numeric_price;
$bedrooms = (int)$row->bedrooms;
$priority =(string)$row->priority;
$advert_heading = (string)$row->advert_heading;
$brochure = (string)$row->brochure;



$sql = "INSERT INTO properties( instructedDate, price_text, bedrooms, priority,  advert_heading, brochure) VALUES ('". $instructedDate ."','". $price_text ."','". $bedrooms ."','". $priority ."','". $advert_heading ."','". $brochure ."')";


//foreach ($row as $pictures){

	 $picture0 = (string)$row->pictures->picture[0]->filename  ;


	 $picture1 = (string)$row->pictures->picture[1]->filename ;

      


	$picture2 = (string)$row->pictures->picture[2]->filename ;
	$picture3 = (string)$row->pictures->picture[3]->filename ;
//if ($picturess = "NULL" = NULL)
//foreach ($row->pictures->picture->filename as $picss){

//LAST_INSERT_ID(),$prop_id    mysqli_insert_id($conn)  '". $row1 ."',

//$count = 0; $count++; 


	// foreach ((array) $picturess as $picturesss) {
    


$sql2 = "INSERT pictures(property_ids, filename, filename1, filename2, filename3) VALUES (LAST_INSERT_ID() , '". $picture0 ."', '". $picture1 ."' , '". $picture2 ."', '". $picture3 ."' )";

//print_r($sql);
echo"<br><br>", print_r($sql2);echo"<br><br>";

$result = mysqli_query($conn, $sql);

 $result = mysqli_query($conn, $sql2);

if (! empty($result )) {
      $affectedRow ++;
  } else {
       $error_message = mysqli_error($conn) . "\n";

      // error_reporting(E_ALL); ini_set('display_errors', 1);
   }
}


?>





<h2>Insert XML Data to MySql Table Output</h2>
<?php
if ($affectedRow > 0) {
    $message = $affectedRow . " records inserted";
} else {
    $message = "No records inserted";

} 
 

//echo $price_text;

?>

<style>
body {
	max-width: 550px;
	font-family: Arial;
}

.affected-row {
	background: #cae4ca;
	padding: 10px;
	margin-bottom: 20px;
	border: #bdd6bd 1px solid;
	border-radius: 2px;
	color: #6e716e;
}

.error-message {
	background: #eac0c0;
	padding: 10px;
	margin-bottom: 20px;
	border: #dab2b2 1px solid;
	border-radius: 2px;
	color: #5d5b5b;
}
</style>
<div class="affected-row">
    <?php  echo $message; ?>
</div>
<?php if (! empty($error_message)) { ?>
<div class="error-message">
    <?php echo nl2br($error_message); ?>
</div>
<?php } ?>



<?

