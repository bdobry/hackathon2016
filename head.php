<!DOCTYPE html>
<html>
	<head>	
		<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Classmate</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
   		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
   		<link rel="stylesheet" href="css/style.css">

          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
          <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.js"></script>
          <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/additional-methods.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
      <script src="js/main.js"></script>
		<script>
			var clicks = 0;
			function myFunction() {

				clicks += 1;
				document.getElementById("demo").innerHTML = clicks;
        changeColor();


			}
			function myFunctionminus() {

				clicks -= 1;
				document.getElementById("demo").innerHTML = clicks;
        changeColor();

			}
      function changeColor(){
        console.log($("#demo"));
        if (clicks > 0) {
          $("#demo").addClass('plus').removeClass('minus');
        }else if(clicks < 0){
        $("#demo").addClass('minus').removeClass('plus');
        }else{
      $("#demo").removeClass('plus minus');
      }

        
      }


		</script>
	</head>
	<body>