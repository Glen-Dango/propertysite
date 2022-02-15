<!-- Feeds into property_display_full -->

<div  class=" car container-full">
<div  class="row">

<!-- makes images 8 out 12 width leaving 4 for text row -->
<div class="col-lg-8">

  <?php 

//if(isset($_POST["submit"])){




//$_SESSION['varname'] = $reference;

// $any = $_REQUEST['varname']; 
//$references = $reference;
$reference = $_REQUEST['varname'];


  //$reference  = $_POST['varname'];

  $xml = simplexml_load_file('save.xml') or die("can not find file");
  $pictures = $xml->xpath("//property[property_reference='$reference']/pictures/picture");
  ?>

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
  <?php
  $i =0; ?>
  <?php foreach ($pictures as $pictured) { ?>
     <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo  $i ?>" class=" <?php if($i ===0):?>active <?php endif; ?>" >   
   <?php $i++;
// counts 10 bullets 
//if ($i == 15) break; 

    } ?>
     </li>
  </ol>

   <div class="carousel-inner">
  <?php
  $counter =1; 
  foreach ($pictures as $picture)   {  ?>
 
   <div class="carousel-item  <?php if($counter <=1){echo "active";}?>">
        <img class="d-block w-100 img-fluid " src="<?php echo $picture->filename ; ?>" alt="Estate Agents Hereford Worcester">
      </div>


  <?php  $counter++;
// counts 10 pictures 
  //if ($counter == 10) break; 
   }

   ?>  
    </div>


    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>

</div></div>


<!-- side text of carousel--> 

  <div class="col-lg-4 text-center ">
  <?php 
  $pictures = $xml->xpath("//property[property_reference='$reference']");
  foreach ($pictures as $picturess); {
  ?>

    <br><br><br><br><br><br>
    <h4 class="title" style=" color: #000066; text-align:center"></b> <?=$picturess->street ?>, <?=$picturess->district ?>,<br><?=$picturess->postcode ?> </b> </h4>

    <h4 class="bed" style="color: #000066; text-align:center"><br> <i class="fa fa-bed"></i> <?=$picturess->bedrooms ?> </h4>

    <h6 class="bullets" style=" color: #666666; padding: 35px; text-align:center"> <?=$picturess->bullet1 ?> &middot; <?=$picturess->bullet2 ?> &middot; <?=$picturess->bullet3 ?> &middot; <?=$picturess->bullet4 ?> &middot; <?=$picturess->bullet5 ?> </h6>

    <hr style="margin-top: -15px; width:50%;">

    <a  type="button" href="index.php"class="btn btn-secondary text-center">Back To  Search </a>


    <h4 class="price" style="color: #000066; text-align:center"><br>  <?=$picturess->price_text?> </h4>

     

        <h6 class="tenure" style=" color: #dc5191" >Tenure: <?=$picturess->tenure ?> </h6><br>

       
       


      </div>
    </div>
  </div>

   
 
</div>

  
  <?php    }; ?> 
  </div>


</div row>
</div container>