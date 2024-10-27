<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Array</title>
  </head>
  <body>
    <h3 class="text-center mt-5">Practice Array</h3>
    <?php 
        // start 1st practice
        // $person_name = "Shoriful";
        // $person_email = "shoriful@gmail.com";
        // $person_number = "01791379767";

        // echo  '$person_name' ."</br>";
        // echo  '$person_email'."</br>";
        // echo  '$person_number';

        // $person_infos =array("Shoriful","shoriful@gmail.com","01791379767");
        // var_dump($person_infos);
        // echo "</br>";
        // $info_count = count($person_infos);
        // echo "</br>".$info_count;
        // echo "</br>";
        // echo $person_infos[1];

        // start 2nd practice 
      // start 1st practice
        $product_infos[0] = "Potato";
        $product_infos[1] = 10;
        $product_infos[2] = 2;
        $product_infos[3] = "Banana";
        $product_infos[4] = 20;
        $product_infos[5] = 10;

        $Product_count=count($product_infos);
        echo $Product_count."</br>";
        for($i=0;$i<$Product_count;$i++){
           echo $product_infos[$i]."</br>";
        }

          // start 1st practice

        ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>