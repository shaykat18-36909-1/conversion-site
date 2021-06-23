<?php
$a=3;
$b=(12*$a);
?>
<html>
<head><title> First Page </title>  </head>
<body>
<fieldset>
 <font color="red"><h2><b>Page 1 [Home]</b></h1></font>
 <a  target="_blank" href="Page1.php">1.Home</a>
 <a  target="_blank" href="Page2.php">2.Conversion Rate</a>
 <a  target="_blank" href="Page3.php">3.History</a>
 

  <font color="red"><h2>Conversion Site</h1></font>
 <select>
 <option value="0" style ="display:none" selected> feet to inch</option>
 <option>3</option>
 <option>4</option>
 <option>5</option>
 </select><br><br>
 
<b>value:</b><span><?php echo "$a";?></span><br>
<b>result:</b> <span><?php echo "$b";?></span><br>

 </fieldset>
 </body>
 </html>