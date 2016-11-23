<table border='1'>
	<tr>
	<th rowspan="2">INPUT</th>
	<th colspan="5">OUTPUT</th>
</tr>
</tr>
	<th>A</th>
	<th>E</th>
	<th>I</th>
	<th>U</th>
	<th>O</th>
</tr>
<tr>
  <td>
  	<?php
  	$n1="ARINI ULFA RAHMAWATI" ;
  	echo $n1;
  	?>
  	</td>
  	<td>
  	<?php
  	$qA = substr_count($n1,"A") ;
  	echo $qA;
  	?>
  	</td>
  	  <td>
  	<?php
  	$qE = substr_count($n1,"E") ;
  	echo $qE
  	?>
  	</td>
  	  <td>
  	<?php
  	 $qI = substr_count($n1,"I") ;
  	 echo $qI
  	?>
  	</td>
  	  <td>
  	<?php
  	 $qU = substr_count($n1,"U") ;
  	 echo $qU
  	?>
  	</td>
  	  <td>
  	<?php
  	 $qO = substr_count($n1,"O") ;
  	 echo $qO
  	?>
  	</td>
  </tr>
  </table>