<?xml version="1.0" encoding="UTF-8"?>
<!-- populates stylesheet into properties2_1.xml -->
<xsl:stylesheet version="1.0"
xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:template match="/">
  <html>

  <body>

    <script type="text/javascript" src="SomePath/SomeFileName.js">&#160;</script> 




  <h2>Property Available With Williams Estate Agents</h2>
  <table >




    <tr bgcolor="#DCDCDC">
      <th>Address</th>
     
      <th>Bedrooms</th>
      <th>Price</th>
      <th>Picture</th>
      <th>Picture 1</th>
    </tr>

    <xsl:for-each match="priority/for sale" select="agency/branches/branch/properties/property[position() &lt; 9]">



      <xsl:sort position=""  order="descending" select="numeric_price" data-type="number"/>  



    <tr>
      <td><xsl:value-of select="advert_heading"/></td>
      
      <td><xsl:value-of select="bedrooms"/></td>
      <td><xsl:value-of select="numeric_price"/></td>



      <td><img src="{pictures/picture[1]/filename}" width="99px"></img></td>
   <!--   <td><img src="{pictures/picture[2]/filename}" width="99px"></img></td>  -->


    </tr>

    </xsl:for-each>

  </table>

  </body>

  </html>

</xsl:template>

</xsl:stylesheet>