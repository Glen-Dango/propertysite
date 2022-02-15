<?php

//populates table to display search results across site. 


echo "<table border: 1px solid transparent id='myTable'; >";
echo "<tr>";
echo "<th>" . ' ' ,$elements->price_text. "</th>" ;
echo "<th>" ." " , $elements->advert_heading.  "</th>" ;


//echo "<th>" . 'Tenure: ' , $elements->tenure.  "</th>" ;

echo "<th>" . 'Position:'." ",$elements->priority.  "</th>" ;
echo "</tr>";
echo "<tr>";
echo "<th>";
echo  "<img height='240px' width='340px' src= " .$elements->pictures->picture[0]->filename ."   />"  ;
echo "</th>";
//echo "<th>";
//echo  "<img height='240px' width='340px' src= " .$elements->pictures->picture[1]->filename ."   />"  ;
//echo "</th>";

echo "</tr>";
echo "</table>";


//echo count($result)."/";
//echo $i ;

//echo       "<br>";   echo  'Address:'." " , $elements->advert_heading." / ";  "\n";
//echo      'Priority:'." ",$elements->priority. "\n";

?>


