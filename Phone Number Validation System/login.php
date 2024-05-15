<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<script
  src="https://code.jquery.com/jquery-3.7.0.min.js"
  integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g="
  crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js" integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

	<title>Verify Details</title>
</head>
<body>
	<style>
.header{
    background-color: #737b87;
    height: 150px;
}
.notice{
    background:beige ;
}


.head{
		background-color: #adb5bd !important;
		width: 40.5%;
		padding: 10px;
		margin-left: 29.75%;
		margin-top: 6%;
		text-align: center;
}
.divhead{

		margin-top: 10%s;
		width: 100%;
		text-align: 50%;
	}

	</style>
	<div class="header">
    <br>
    <h1 style="font-family: Cambria, serif; text-align: center; margin-top: 2px;">
    <img src="https://creazilla-store.fra1.digitaloceanspaces.com/cliparts/7817069/telephone-icon-clipart-md.png" height="100px" width="100px" >
PHONE NUMBER VALIDATION SYSTEM</h1>
    </div>
    <div class="notice">
    <marquee><h4>Check the user registered details.</h4></marquee></div>
<div class= "head" 	>

	<div class="divhead" hidden ></div>
	<div class="verify">

	<form name="verifyform" id="verifyform" method="POST">

		<label><h4>User Name</h4></label><br>
		
		<input type="username" name="username" id= "username" required class="form-control" ><br>
		
		<label><h4>Phone Number</h4></label><br>
		
		<input type="number" name="phnumber" id= "phnumber" required  class="form-control"><br><br>
		<input type="submit" name="forsubmit" id= "for submit" class="btn btn-primary">
	</form>
	<br><button style="background-color: grey; border-radius: 12px;border: none;	">
		
	<a href="verify.php" style="color: white;text-decoration: none;"><b>Check your Phone Number</b></a><br>

</button><br><br>
<button style="background-color: grey;  border-radius: 12px; border: none;">
	<a href="index.php" style="color: white;text-decoration: none;"><b>Register your Sim Service Provider</b></a>

	</button>	
</div>
</div>	 
<script>
$(document).ready(function() {
        $("#verifyform").on('submit', function(e){
            e.preventDefault();
            var form = $(this);

            form.parsley().validate();

            if (form.parsley().isValid()){
                $.ajax({
  url:'data.php',
  data: $("#verifyform").serialize(),
  type:'POST',
  
      success: function(response) {
     	 
      		$(".divhead").html(response);
      		$(".divhead").attr('hidden',false);

        




      },
      error: function() {
        alert('There was some error performing the AJAX call!');
      }
   
});
            }
       
    });
        });
</script>









</body>
</html>