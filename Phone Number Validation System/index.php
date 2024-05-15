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

	<title>NUMBER VALIDATION SYSTEM</title>
	<style>
	.header{
    background-color: #737b87;
    height: 150px;
}
.notice{
    background:beige ;
}
.card{
			background-color: #adb5bd !important;
}
		.parsley-errors-list li.parsley-required {
    background: #861a52;
    padding: 10px;
    color: #fff;
}
.chain{
		background-color: #adb5bd !important;
		width: 40.5%;
		margin-left: 29.75%;

		text-align: center;
		}



	</style>

</head>
<body>
<div class="header">
    <br>
    <h1 style="font-family: Cambria, serif; text-align: center; margin-top: 2px;">
    <img src="https://creazilla-store.fra1.digitaloceanspaces.com/cliparts/7817069/telephone-icon-clipart-md.png" height="100px" width="100px" >
PHONE NUMBER VALIDATION SYSTEM</h1>
    </div>
    <div class="notice">
    <marquee><h4>Give the operator Details Below.</h4></marquee></div>
	<div class="container">
		<div class="card" style="margin-top:8%; margin-left:25%; width: 50%; text-align: center;">
			<div class="card-header" hidden>
				</div>
				<div class="card-body">
	<form name="phone-form" id="phone-form" method="POST" data-parsley-validate>
		<label><h4>Operator Name</h4></label><br>
		<div class="form-group">
		<input type="text" id="name_operator" name= "name_operator" class="form-control" required data-parsley-required-message="Please enter the operator name">
		<br>
		<label><h4>Operator Code</h4></label><br>
		<input type="text" id="operator_code" name="operator_code" class="form-control" required data-parsley-required-message="Please enter your operater code">
		<br>
	
		<input type="submit" name="submit_btn" value="Submit" class="btn btn-primary">
		</div>	
	</form>
</div>
</div>
</div>

<script>
$(document).ready(function() {
        $("#phone-form").on('submit', function(e){
            e.preventDefault();
            var form = $(this);

            form.parsley().validate();

            if (form.parsley().isValid()){
                $.ajax({
  url:'insert.php',
  data: $("#phone-form").serialize(),
  type:'POST',
  
      success: function(response) {

        
      		$(".card-header").html(response);
      		$(".card-header").attr('hidden',false);


        




      },
      error: function() {
        alert('There was some error performing the AJAX call!');
      }
   
});
            }
       
    });
        });
</script>
<div class="chain">
	<button style="background-color: grey; border: none; border-radius: 12px;">
<a href="login.php" class="link"  style="color: white;text-decoration: none;"><b>User Registration</b></a>
</button>
</div>









</body>
</html>