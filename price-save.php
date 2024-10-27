<?php

   $title = $_POST['title'];
   $price = $_POST['price'];
   $plane = $_POST['plane'];
   $featurelist = $_POST['featurelist'];

//    var_dump($featurelist);
$feature_count = count( $featurelist);

for($i =0;$i<$feature_count;$i++){
    echo $featurelist[$i];
}


  ?>