<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <title>Array</title>
  </head>
  <body>
    <h3 class="text-center mt-5">Practice Array</h3>
 
    <div class="field_wrapper text-center mt-5">
      <div class="mb-2">
        <input type="text" name="field_name[]" value=""/>
        <a href="javascript:void(0);" class="add_button" title="Add field">
          <img src="https://img.icons8.com/ios-filled/24/00cc00/plus.png" style="margin: 0 10px;"/>
        </a>
      </div>
    </div>

    <script>
      $(document).ready(function(){
          var maxField = 10; //Input fields increment limitation
          var addButton = $('.add_button'); //Add button selector
          var wrapper = $('.field_wrapper'); //Input field wrapper
          var fieldHTML = '<div class="mb-2"><input type="text" name="field_name[]" value=""/><a href="javascript:void(0);" class="remove_button"><img src="https://img.icons8.com/ios-glyphs/24/cc0000/minus.png" style="margin: 0 10px;"/></a></div>'; //New input field html 
          var x = 1; //Initial field counter is 1
          
          // Once add button is clicked
          $(addButton).click(function(){
              //Check maximum number of input fields
              if(x < maxField){ 
                  x++; //Increase field counter
                  $(wrapper).append(fieldHTML); //Add field html
              }else{
                  alert('A maximum of '+maxField+' fields are allowed to be added. ');
              }
          });
          
          // Once remove button is clicked
          $(wrapper).on('click', '.remove_button', function(e){
              e.preventDefault();
              $(this).parent('div').remove(); //Remove field html
              x--; //Decrease field counter
          });
      });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
