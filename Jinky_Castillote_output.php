<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<style>
        body {
          background-image: url('./black-myth-wukong_output.jpg');
          background-repeat: no-repeat;
          background-size: 100%;
        }
		.container {
  	padding: 5px 20px 15px 20px;
  	border: 1px dashed lightgrey;
  	border-radius: 3px;
	}
		h1{
            color: #fff;
            text-align: center;
            letter-spacing: 0.5em;
        }
		label{
    font-size: 20px;
    font-weight: 900;
		}
		span{
    font-size: 18px;
	font-weight: 600;
		}
		.box{
	background-color: #ffded3;
    margin: 10px 250px 0px 250px;
    padding: 20px;
    text-align: center;
	opacity: 0.6;
		}
		</style>
</head>
<body>
	<div class="container">
	<h1>Thank you for Purchasing, <?php echo $_POST['FullName']; ?>!</h1>
	<div class="box">
	<pre>
	<?php
	 //customize display after submitting form using post method
		//  foreach ($_POST as $key => $value)
        //  echo $key.': '.$value.'<br />';


		while( list( $field, $value ) = each( $_POST )) {
			echo "<label>" . $field . " : </label> <span>" . $value . "</span>\n";
		 }

		 echo "<br/>";
		 echo "<br/>";
		 echo "//for debugging purposes";
		 echo "<br/>";

		 //for debugging purposes to show how var_dump look likes in web
		var_dump($_POST); 

		?>
	</pre>
		</div>
	</div>
	

</body>
