<?php 
// $i = 50;
//  while($i<=60){
//  	if ($i % 2 !=0) {
//  		echo $i."<br>";
//  	}
//  	$i++;
//  }
// =====================================
// $i = 50;
// do{
// 	if ($i % 2 !=0) {
// 		echo $i."<br>";
// 	}
// 	$i++;
// // }while ($i <=60);
// ==============================================
// $i = 1;
// for ($j=1; $j <= $i ; $j++){
//     for ($i=1; $i <=5 ; $i++){ 
// 	  echo "*";
// 	  }
// 	  echo"<br>";
// }
// ==============================================
// for ($i=5; $i >=1 ; $i--) { 
// 	  for ($j=1; $j <= $i ; $j++) { 
// 	  echo "*";
// 	  }
// 	  echo"<br>";
// }
// =============================================
echo "<table border='2' style='width:100%;height:60%'>";
	for ($i=1; $i <=6 ; $i++) { 
 	echo"<tr>";
 	 for ($j=1; $j <=6 ; $j++) { 
 	 	if ($j % 2 == 0) {
 	 		echo "<td style = 'background:black'></td>";
 	 	}else{
 	 		echo "<td style = 'background:white'></td>";
 	 	}
 	 	echo"</tr>";
 	 }
 	 	echo"<tr>";
 	 for ($j=1; $j <=6 ; $j++) { 
 	 	if ($j % 2 != 0) {
 	 		echo "<td style = 'background:white'></td>";
 	 	}else{
 	 		echo "<td style = 'background:black'></td>";
 	 	}
 	 
 	 
 	echo"</tr>";
 	}
 	}

 	echo"</table>";
?>
