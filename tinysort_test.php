

  <!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">

      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    



      <script src="https://cdnjs.cloudflare.com/ajax/libs/tinysort/3.2.5/tinysort.min.js "></script>

  </head> 
<body>

<!-- 
<div>
<ul id="xnum">
    <li>
        10
    </li>
    <li>
        1
    </li>
    <li>
        100
    </li>
</ul>

-->


<div>


<button class="sort" onclick="myFunctionz()">Lowest First</button> 
<button class="reset" onclick="myFunctionsz()">Highest First</button>



</div> 

<div>

<button class="sort" onclick="myFunction()">Sort</button> 
<button class="reset" onclick="myFunctions()">Reset</button>

<div>
<ul id="xnum" >

<li>31.6</li><li>33</li><li>52.29</li><li>673</li><li>1795</li><li>849.27</li><li>873.14</li><li>76</li><li>976</li><li>976</li>

</ul>
</div>

<div>

<button class="sort" onclick="myFunctionz()">High Sort</button> 
<button class="reset" onclick="myFunctionsz()">Low Sort </button>

<div id="xmix" >

<p1>2</p1><p1>1</p1><p1>6</p1><p1>5</p1><p1>7</p1><p1>3</p1>



</div>


</div> 


<script>



function myFunction() {
 tinysort('ul#xnum>li');
}


function myFunctions() {
 tinysort('ul#xnum>li' ,{order:'desc'});
}


//sorts numbers and letters. 
function myFunctionz() {
 tinysort('div#xmix>p1');
}


function myFunctionsz() {
 tinysort('div#xmix>p1' ,{order:'desc'});
}

</script>





cool jquery to sort   -   i think cos used php its going to be hard to use the php array to sort order
(although... it works ok for the genrral search...said would have to use ajax to call it from another page so still hassle... )

<button onclick="myFunction()">Try it</button>

<p id="demo"></p>

<script>
var points = [40, 100, 1, 5, 25, 10];
document.getElementById("demo").innerHTML = points;

function myFunction() {
  points.sort(function(a, b){return a-b});
  document.getElementById("demo").innerHTML = points;
}
</script>







	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>