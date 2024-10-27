<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <title>Package Form</title>
  </head>
  <body>
    <div class="container mt-5">
      <h3 class="text-center mb-4">Practice Array - Package Form</h3>

      <form action="" method="post" class="border p-4 shadow-sm rounded">
        <div class="mb-3">
          <input type="text" name="title" class="form-control" placeholder="Package Title">
        </div>
        <div class="mb-3">
          <input type="text" name="price" class="form-control" placeholder="Package Price">
        </div>
        <div class="mb-3">
          <input type="text" name="plane" class="form-control" placeholder="Package Plane">
        </div>
        
        <div class="field_wrapper mb-3">
          <div class="input-group">
            <input type="text" name="field_name[]" class="form-control" placeholder="Add Feature">
            <button class="btn btn-success add_button" type="button" title="Add field">
              <img src="https://img.icons8.com/ios-filled/24/ffffff/plus.png"/>
            </button>
          </div>
        </div>
        
        <button type="submit" class="form-control btn btn-primary d-block mx-auto mt-3">Save</button>
      </form>
    </div>

    <script>
      $(document).ready(function(){
          var maxField = 10; //Input fields increment limitation
          var addButton = $('.add_button'); //Add button selector
          var wrapper = $('.field_wrapper'); //Input field wrapper
          var fieldHTML = '<div class="input-group mb-2"><input type="text" name="field_name[]" class="form-control" placeholder="Add Feature"/><button class="btn btn-danger remove_button" type="button"><img src="https://img.icons8.com/ios-glyphs/24/ffffff/minus.png"/></button></div>'; //New input field html
          var x = 1; //Initial field counter is 1
          
          // Once add button is clicked
          $(addButton).click(function(){
              if(x < maxField){ 
                  x++; 
                  $(wrapper).append(fieldHTML); 
              }else{
                  alert('A maximum of '+maxField+' fields are allowed.');
              }
          });
          
          // Once remove button is clicked
          $(wrapper).on('click', '.remove_button', function(e){
              e.preventDefault();
              $(this).closest('.input-group').remove(); 
              x--; 
          });
      });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
