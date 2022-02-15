<?php
session_start();
//header("Cache-Control: no cache");

//var_dump($_SESSION);
include 'header.php' ;
//related to location_search.php
?>
<!--
<div class="center-div">
-->
<background class="  bg-light"  >

<?php

//include 'williams_functions.php ';
//echo search_high();

if(isset($_POST["submit"])){

$c = $_REQUEST['location'];
$d = $_REQUEST['priority'];
$e = $_REQUEST['pri'];

  ?>

  <div class="container  ">

   <br><br><br><br>
<h3>  Properties for Sale in <?php echo $c ?> </h3>

<!--
<br><h5> You have selected <?php echo $d ." and ".  $e ?> property to view.</h5>
-->
  <h6 class="d-none d-md-block"><a href="http://localhost/xml_files1/index.php#chapter4" style="color:darkblue ; text-decoration: none"> Advertise Your Property In <?php echo $c ?> with Williams Estate Agents. <button class="btn-sm btn-secondary"> Value My Property </button></a></h6> <br>

<?php 
include 'search_bar.php';
//echo "<br>", " You have selected $d , $e property to view. <br>";
?>
</div>


<div  id="myTable"  class="container"> 
	<div class="row">

<?php        //xml_feed.php   =   gets the xml data and inserts it into save.xml file to keep it updated from expert agent//////////
$a = 100.0000; $b = 500000.0000; 

$xml =  simplexml_load_file('save.xml') or die("can not find file");

$result = $xml->xpath("//property[county='$c'][priority = '$d' or priority = '$e' ][department='Residential Sales']
");
//$result = $xml->property->xpath("//property[(numeric_price> '" . $a . "'  ) and (numeric_price< '" . $b . "')]  ");
usort($result, function ($a, $b) { return (int) $b->numeric_price - (int) $a->numeric_price; });


if (!$result){
    echo "Williams Estate Agents require property for waiting Buyers in $c Area. Do you have a property to sell in $c? <br><br> Call Us On 0333 30 50 70 For Your Free Valuation. <br><br> ";
}
//$i = 0;
foreach ( $result as $elements){
// $i++;

include 'property_display.php';
// holds the card details of the property. also holds variable to pass to property_display_full.php
};

?>

<?php
//}
}

?>

</div>

</div><!--container -->

<br>


 <?php



$_SESSION['location'] = $c;
$_SESSION['priority'] = $d;
$_SESSION['pri'] = $e;



include 'footer.php' ;
//session_destroy()
?>