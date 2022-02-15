<?php
session_start();
//XML FEED FROM EXPERT AGENT IS FOUND ON   xml_feed.php with a manual upload button  // this wil be CRON job . not sure if cron_xml now doing this automatically. 
include 'cron_xml.php';

//includes NAVBAR
include 'header.php';
?>

<?php 

if(isset($_POST['submit'])){


    $to = "richwilliamsea@live.com"; // this is your Email address
  

  //  $from = $_POST['client_email']; 
  $from= filter_var($_POST['client_email'], FILTER_SANITIZE_EMAIL); 


        $subject = $_POST['propertytoview'];
           //$subject = $_POST['client_name'];
  $message = $_POST['client_name'];
  // $message = "fuking work ";

   //$headers = $_POST['client_contact '];
 //  $headers = $_POST['client_name '];
    $headers = "From:" . $from;
   // $headers2 = "From:" . $to;

    mail($to, $subject, $message, $headers);
    
    echo "Viewing Request Sent. Thank you " ;
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>

<img style="width:100%;" class="img-main" src="/xml_files1/xmlimages/architecture-2mb">


<!-- ////////////////SEARCH fORM /////////////// -->
<div class="container search-form search-form-mobile col-xs-12">
  <div class="row justify-content-center ">
    <div class="form-inline" >

      <form class="form-group"   action="display.php" method="post">
      
    <div class= "dropdown">

    <select class="form-control"   name="location" >
         <option  value="Herefordshire"  selected>Herefordshire</option>
          <option value="Herefordshire">Herefordshire</option>
           <option value="Herefordshire">Leominster</option>
             <option value="Worcestershire">Worcestershire</option>
               <option value="Monmouthshire">Monmouthshire</option>
                <option value="Monmouthshire">Malvern</option>
               
     </select> 
    </div>

   &nbsp;&nbsp;

        <div class= "dropdown">

          <select class="form-control"  name="priority">
             <option value="On Market">For Sale</option>
               <option value="Sold STC">Sold Stc</option>
                
          </select> 
        </div>
  
        <div class="form-check ">
         &nbsp;&nbsp;
          <input type="hidden" name="pri" value="" />

            <label class="form-check-label"> </label>

                <input class="form-check-input  form-check-text"  name="pri" type="checkbox" checked value="Sold STC" > Include Sold Property &nbsp; </input>
        </div>
&nbsp;&nbsp;
        <div>    
         <button name="submit" type="submit"  class="center btn btn-danger ">Search Properties</button>
        </div>

   </form>

</div>
  </div> <!--row -->
</div>  <!--container -->



<?php
  include 'typewriter.php';
?>
 

<!--   <br><br><br><br><br>   -->

    <!-- anchor tags 'chapters' for navbar -->
      <a class="container anchor1" name="chapter2"></a>
    


<?php    //'dedicated to ensuring' images 
  include 'cards.php';
//include 'slideshow_bootstrap.php';
?>

      <a name="chapter3"></a>
         <hr width="95%">

<?php    
  include 'whyWilliams.php';
?>

<hr width="95%">
<br>

<?php    
  include 'property.php';
?>

<!-- anchor free valuations / mailing list -->
      <a name="chapter4"></a>
        <hr width="95%">

<?php    
  include 'contact_form.php';
  include 'footer.php' ;
?>

