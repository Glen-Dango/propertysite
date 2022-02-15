<?
session_start();
?>

<!-- goes to display.php  -->

<div  class=" col-md-4 mt-3 " >
<div  class="card-deck border-light  " >

 
<div  class="card   bg-light  "   >

  <img class="card-img-top" height='240px' width='340px' src=" <?php echo $elements->pictures->picture[0]->filename  ; ?> " alt="Card image"    >
<br>
  <div  class="card-body ">  
    <h6  class="title"><b> <?=$elements->street ?>, <?=$elements->district?>,<?=$elements->town?></b></h6>

     <p1 class="price"><b><?= $elements->price_text ?> <br> <?= $elements->tenure ?></b></p1>

      <p1 hidden class="price"><b><?= $elements->numeric_price ?></b></p1> <br>
       <p class="card-text"><?= $elements->bedrooms ?> Bedrooms</p>
       
          <div class="ribbon-wrapper-corner  "> <!-- class in the williamswebsite.css file  -->
            <h6 style="font-size:10px; " class="card-text   ribbon-corner"><strong><?= 
            $elements->priority;//['Sold stc']     ; ?></strong></h6> 
          </div>

 <!--   <p class="card-text" name="ref" ><?= $elements->property_reference ?></p>    -->
<form method="post" action="property_display_full.php">
    <input type="hidden" name="varname" value="<?= $elements->property_reference ?>">


    <input type="submit" class="btn btn-secondary" value="More Details">   

   <!--  <a  target="_blank" type="submit" class="btn btn-secondary">More Details</a>   -->

</form>


 </div></div></div></div>



