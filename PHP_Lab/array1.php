<?php
$arrs=Array(
   Array(1=>100, 2=>200, 3=>300),
   Array(1=>"aa", 2=>"bb", 3=>"cc"),
);
foreach ($arrs as $arr){
   foreach ($arr as $i=>$j){
      echo $i . "->" .$j . " ";
   }
   echo "\n";
}



echo "<br>";
for ($row=0; $row < count($arrs); $row++){
   foreach ($arrs[$row] as $i=>$j){
      echo $i . "->" .$j . " ";
   }
   echo "\n";
}
?>
