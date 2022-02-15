<!-- feeds into property_display_full.php -->

<div class="container-fluid" style="background-color:#C0C0C0">
<br>
	</div>

<br><br>

<div class="container-fluid" style="background-color:#C0C0C0">

<?php 
	$reference  = $_POST['varname'];
	$xml = simplexml_load_file('save.xml') or die("can not find file");
	$pictures = $xml->xpath("//property[property_reference='$reference']/floorplans/floorplan");
	?>

	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	  <ol class="carousel-indicators">
	<?php
	$i =0; ?>
	<?php foreach ($pictures as $pictured) { ?>
	   <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo  $i ?>" class=" <?php if($i ===0):?>active <?php endif; ?>" > 	
	 <?php $i++; } ?>
	   </li>
	</ol>

	 <div class="carousel-inner">
	<?php
	$counter =1;
	foreach ($pictures as $picture) { ?>

	 <div class="carousel-item  <?php if($counter <=1){echo "active";}?>">
	      <img class="d-block w-100 " src="<?php echo $picture->filename ; ?>" alt="Estate Agents Hereford Worcester">

	     
	    </div>

	<?php $counter++; } ?>  
	  </div>
	  <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>
	</div>



