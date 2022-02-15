<?php
session_start();

//print session_id();
//if(isset($_SESSION['something'])) echo $_SESSION['something'];
    //  else echo 'session problem';
//doesnt fuking work , session started at bottom of display.php
//echo $_SESSION["somethings"];
//echo $_SESSION["stop"];
//session_destroy();

include 'header.php' ;
//carousel and bullets div
include 'carousel_test.php'






?>
<?
//echo "here is " $_SESSION["something"];
?>



<!-- THIS IS THE FORM TO POPULATE THE EMAIL TO SEND A VIEWING REQUEST -->

 <div id="accordion">
  <div class="card text-center  ">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link text-secondary" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          View Property
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
       

<div class="container ">
<!-- email mail() code is found on index.php -->
    <form  id="contact" action="index.php" method="POST" class="well form-horizontal"> 


<fieldset>

<!-- Form Name -->
<legend style="float:top" >Register A Viewing Here </legend>


<input type="hidden" name="status" value="0">
<!-- Text input-->

<div class="form-group ">
  <label class="col-md-4 control-label   "></label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">

  <span class="input-group-addon"><i class="glyphicon glyphicon-king"></i></span>
  <select name="client_title" class="form-control selectpicker" >
      <option value=" " >Mr / Mrs / Miss / Ms / Dr </option>
      <option>Mr</option>
      <option>Mr and Mrs</option>
      <option>Miss</option>
<option>Ms</option>
<option>Dr</option>
    </select>
    </div>
  </div>
</div>  




  <div class="form-group">
  <label class="col-md-4 control-label"></label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
 

  <input style="cursor:pointer "   id="client_name" name="client_name" placeholder="Name"  required value=""  class="capitalise form-control"  type="text" 
   
>
  </div>
</div>
</div>




<style>
input[required] {
  outline: #ff69b4;
}
</style>

<div class="form-group">
  <label class="col-md-4 control-label" ></label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>

  <input style="cursor:pointer" name="client_contact" type="text" required  placeholder="Best Phone Number" class="form-control"  >
  
    </div>
  </div>
</div>

<!-- Text input-->
       <div class="form-group">
  <label class="col-md-4 control-label"></label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input style="cursor:pointer" name="client_email" placeholder="E-Mail Address" class="form-control"  type="text">
    </div>
  </div>
</div>


<!-- Text input-->
       <div class="form-group">
  <label class="col-md-4 control-label"></label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input style="cursor:pointer" name="property" placeholder=" <?=$picturess->street ?>,&nbsp;<?=$picturess->price_text?>" class="form-control"  type="text">
    </div>
  </div>
</div>




<!-- Button -->
<form method="post" action="property_display_full.php">


<div class="form-group">
  <label class="col-md-4 control-label "></label>
  <div class="col-md-4">
    <button type="submit" name="submit" class="btn btn-secondary" >Submit <span class="glyphicon glyphicon-send"></span></button>
  </div>
</div>



</fieldset>
</form>



</div></div></div>



<!-- grey border under carousel -->
<div class="container-full text-center" style="background-color:#C0C0C0">
 	
 Advertise your property with us - Free Valuations on request
	</div>
		




<div class="container text-center " style="background-color:">
	

<br>
<h5 style=" color: #000066;"><b>Measurements | Floorplan | EPC | Map</b></h5>

</b>
<br>
<p style=" text-align:center"><?=$picturess->main_advert ?><h6 class="" style=" color: #000066; text-align:center"><b> Directions:</b></h6> <?=$picturess->advert5 ?><br>
	
 </p>

	 <?php
 $measures = $picturess->rooms->room;
	foreach ($measures as $measure) 
	{
  ?>
<br>
	<h6 class="" style=" color: #000066; text-align:center"> <b><?=$measure['name']?> </b></h6>  <h6 style=" color: #dc5191" > <?=$measure->measurement_text ?> </h6> <?=$measure->description ?>
<br>
<br>
<?php
}

?>
</div>

<!-- Floorplans -->
<div class="container " style="background-color:#">
		<div class="row justify-content-center" >
			
	<?php
	 	$floorplans = $picturess->floorplans->floorplan;
			foreach ($floorplans as $floorplan) {
    ?>
		      <img class="img-fluid col-md-6 " src="<?php echo $floorplan->filename ; ?>" alt="Estate Agents Hereford Worcester">
	<?php 
		}; 
    ?>
</div>
</div>


<div class="container " style="background-color:">
		<div class="row justify-content-center" >

<img class="img-thumbnail col-md-6" src="<?php echo $picturess->epc ?>" alt="EPC">


</div>
</div>


<br>

<div class="container " style="background-color:">
		<div class="row justify-content-center" >


 
          <div class="img-thumbnail" id="map" style="width:280px;height:300px;"></div>
    <script>
// Initialize and add the map
function initMap() {
  // The location of Uluru
  var uluru = {lat:<?=$picturess->latitude?>, lng:<?=$picturess->longitude?>};
  // The map, centered at Uluru
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 15, center: uluru});
  // The marker, positioned at Uluru
  var marker = new google.maps.Marker({position: uluru, map: map});
}
  
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCdszPopHfXpo-UlfCueYC0tHRG_LgpXn4&callback=initMap"
    async defer></script>



</div>
</div>



<div class="container " style="background-color:">
		<div class="row justify-content-center " >
<br>
<a target="_blank" href="<?= $picturess->brochure ?>" class="btn btn-secondary">PDF Details</a>
</div>
</div>



<br><br>
<?php

//$_SESSION['location'] = $c;
//$_SESSION['priority'] = $d;
//$_SESSION['pri'] = $e;


//$_SESSION['varname'] = $reference;


//$_SESSION['varname'] ;
//$_SESSION['varname'] = $this;

//$reference = $_REQUEST['varname'];



include 'footer.php' ;


//session_destroy()
?>

<script>$('.carousel').bcSwipe({ threshold: 50 });</script>


<script>
$('#accordion').on('shown.bs.collapse', function(e) {
  var offset = $('.panel.panel-default > .panel-collapse.in').offset().top;
  if (offset > 0) {
    $('html,body').animate({
      scrollTop: $('.panel .active').offset().top - 100
    }, 500);
    // you can chagne 100 value to take distance in pixels from top in page
  }
});
</script>