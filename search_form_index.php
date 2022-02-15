<!-- ////////////////SEARCH fORM /////////////// -->


<div class="container search-form search-form-mobile col-xs-12">
  <div class="row justify-content-center ">
    <div class="form-inline" >

   <form class="form-group"   action="display.php" method="post">
      
    <div>
      <select class="form-control "   name="location" required>
  	   <option  value=""  selected>Choose A Location</option>
  	       <option value="Herefordshire">Herefordshire</option>
  	         <option value="Worcestershire">Worcestershire</option>
  	           <option value="Monmouthshire">Monmouthshire</option>
               <option value="Monmouthshire">Forest of Dean</option>
     </select> 
    </div>
   &nbsp;&nbsp;
        <div>      
          <select class="form-control"  name="priority">

             <option value="On Market">For Sale</option>
               <option value="Sold STC">Sold Stc</option>
          </select> 
        </div>


  
        <div class="form-check ">
         &nbsp;&nbsp;
          <input type="hidden" name="pri" value="" />

            <label class="form-check-label"> </label>

                <input class="form-check-input  form-check-text"  name="pri" type="checkbox" checked value="Sold STC" > Include Sold Property </input>
        </div>

     

        <div>    &nbsp;&nbsp;
         <button type="submit" name="submit" class="btn btn-danger ">Search Properties</button>
        </div>


      
   
   </form>
   
  </div> <!--row -->


</div>  <!--container -->