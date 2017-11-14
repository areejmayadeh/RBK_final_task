<?php
//this function load web page, retrieve the contents, print it out 
function curl($url){
    $ch= curl_init(); //initialize Curl
    //set URL we want to load
    curl_setopt($ch, CURLOPT_URL, $url); 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    //retrieve the URL
    $data= curl_exec($ch);
    //close Curl
    curl_close($ch);
    return $data;
}
 
 if($_GET["city"]){
 $test="https://api.openweathermap.org/data/2.5/weather?q=".$_GET['city']."&appid=e479529dac7be51182459664fd6ea1de";
    $message=curl($test);
    $messageArray=json_decode($message,true);
    $temp=$messageArray['main']['temp']-273.15;
    $desc=$messageArray['weather'][0]['description'];
    $info='The weather is '.$desc.' TEMP is:'.$temp;
    
  
}

?>

<!doctype html>
<html lang="en">
  <head>
    <title>Hello, world!</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <style type="text/css">
        html{
            background-size: cover;
            background-image: url(https://images.unsplash.com/photo-1468956332313-2dcf1542828f?auto=format&fit=crop&w=1500&q=60&ixid=dW5zcGxhc2guY29tOzs7Ozs%3D) ;
            background-repeat: no-repeat;
            background-attachment: fixed;

        }
        body{
            background:none;
        }

        .container{
            text-align: center;
            margin-top: 300px;
            width: 450px
        }
    </style>
  </head>
  <body>  
    <div class="container">
        <h1>Weather</h1>
        <form>
  <div class="form-group row">
    <div class="col-sm-10">
      <input type="text" name="city" class="form-control" id="city" placeholder="city">
    </div>
  </div>

 
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>

<div id="info">
          
          <?php 
            
            if($info) {
                
                echo '<div class="alert alert-success" role="alert">'.$info.'</div>';
                
            } else {
                
                if ($_GET['city'] !="") {
                    
                    echo '<div class="alert alert-danger" role="alert">Sorry, that city could not be found.</div>';
                }
            }
          
          ?>
      
      </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>

