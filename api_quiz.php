<!DOCTYPE html>
<html>
<head>
	<title>API Quiz</title>
	<script src= "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>

	<?php

//predefined php -- add this to your code
	function i0(){if(!empty($_SERVER[base64_decode('U0VSVkVSX05BTUU=')])){$m1=$_SERVER[base64_decode('U0VSVkVSX05BTUU=')];}else{$m1=$_SERVER[base64_decode('U0VSVkVSX05BTUU=')];}return base64_encode($m1);}

	//To use the function above, just call it. e.g.
	$secretkey = i0();
	echo "Secret Key: " .$secretkey;

//add the return value to post parameters
//userid, amount and secretkey (the echo value/content on line 7 above)

?>

<form>
	<input type="text" id = "user_id" placeholder = "user_id">
	<input type="text" id = "amount" placeholder = "amount">
	<!-- <input type="text" id = "sc" value = "<?php  $sk?>"> -->
	<input type="button" value = "Submit"
	onclick= "addPayment( <?php echo "'". $secretkey. "'" ?>)">
</form>

<script>
	function addPayment(secretkey){
		userID = document.getElementById('user_id').value

		amount = document.getElementById('amount').value


		$.ajax({
			url: "https://apps.ashesi.edu.gh/e-com/",
			type: 'post',
			data:{
				userid:userID,
			amt:amount,
			secretkey:secretkey	
			},
			success: function(responseFromtheServer){
				alert(responseFromtheServer)
			},

			error: function(){
				alert('error')
			}


		})
	}
</script>






</body>

</html>