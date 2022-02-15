  <!DOCTYPE html>

<!--/////////////// This is  the search by keyword option on display.php page. ////////////////-->
<script  

  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>

 <!-- <div class="center-div">  -->

<div class= "container " >
  <div class= "row " >

<div style="">	
<form  method="post" action="index.php" >
<input  type="submit" name="submit" value="New Location"  />
</form>
</div>

<div style="">
<form   method="post" action="xml_low2high.php">
<input type="submit" name="submit" value="Lowest First" />
</form>
</div>

<div style="">
<form  method="post" action="xml_high2low.php"  >    
<input class="buttton" type="submit" name="submit" value="Highest First" />
</form>
</div>


<div>
<form>
<input id="myInput" type="text" placeholder=" Search Area Keyword..">
</form>
</div>

</div>
<!--container end-->
</div>


<script>   ////this controls and sorts the search bar out with jquery, targets the myTable id on container and affects all the div names. 

//  https://www.w3schools.com/jquery/tryit.asp?filename=tryjquery_filters_anything
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable div").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>















