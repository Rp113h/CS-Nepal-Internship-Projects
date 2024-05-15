<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
	<title>User Entry</title>		

<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g="crossorigin="anonymous"></script>
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js" integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<style>
	.heading{
		text-align: center;
		font-family: 'Bebas Neue', sans-serif;
	}
.gap{
	content: '';
	visibility: hidden;
	float: right;
}
.here{
	float: right;
	margin-top: 4%;
	border: solid;
	border-color:whitesmoke;
  	  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

	border-radius: 15px;
	text-align: center;
	padding: 1.5%;
	font-family: Cambria, serif;
	font-size: 16px;
}
.parsley-errors-list {
  list-style-type: none;
  color: red;
  margin: 0;
  padding: 0;
  font-size: 12px;
}

.parsley-errors-list li {
  margin-bottom: 5px;
}

.parsley-error {
  border-color: red !important;
  background-color: #ffeeee !important;
}
.alert{
	font-size: 15px;
}
.pass{
	background-color: #4fb13c9c;
	color:white;
}
.fail{
	background-color: #ff0000ba;
	color: beige;
}
.repeat{
	background-color: #ff0000ba;
	color: beige;
}

.close-btn {
 
  cursor: pointer;
  color: white;
  align-items: center;
   float: right;
}
.close-btn:hover{
	background-color: green;
}


</style>
</head>
<body>
<div class="grid-continer">
	<h1 class="heading col-sm-12">User Entry</h1>
	<div class="gap col-sm-2">
	</div>
		<div class="here col-sm-8">

			<form class="cisco" method="POST" id="cisco" method="POST" novalidate>
				@csrf

				@if(\Session::has('regs'))
				<div class="alert pass">
					{!! \Session::get('regs')!!}
					<span class="close-btn">&times;</span>
				</div>
				@endif

				@if(\Session::has('regf'))
				<div class="alert fail">
					{!! \Session::get('regf')!!}
					<span class="close-btn">&times;</span>
				</div>
				@endif

				@if(\Session::has('regr'))
				<div class="alert repeat">
					{!! \Session::get('regr')!!}
					 <span class="close-btn">&times;</span>
				</div>
				@endif

				<div class="name col-sm-6">
				<label name="name">Full Name</label><br>
				<input type="text" id="name" name="name" class="form-control" required placeholder="Full Name">
				</div>
				<div class="email col-sm-6">
				<label name="email">Email Address</label><br>
				<input type="email" id="email" name="email" class="form-control" required placeholder="Email Address">
				</div>
				<div class="dob col-sm-6">
				<label name="dob">Date of Birth</label><br>
				<input type="date" id="dob" name="dob" class="form-control" required placeholder="Date of Birth">
				</div>
				<div class="age col-sm-6">
				<label name="age">Age</label><br>
				<input type="text" id="age" name="age" class="form-control" required placeholder="Age">
				</div>
				<div class="gender col-sm-6">
				<label for="gender">Gender</label>

				<select name="gender" id="gender" class="form-control" required>
					
				  <option disabled selected>Select an option</option>
				  <option value="male">Male</option>
				  <option value="female">Female</option>
				  <option value="others">Others</option>
				</select>
				</div>
				<div class="uname col-sm-6">
				<label name="uname">Username</label><br>
				<input type="text" id="uname" name="uname" class="form-control" required placeholder="Username">
				</div>
				<div class="password col-sm-12" style="display: flex; flex-direction: column; align-items:center; ">
				<label name="password">Password</label>
				<input type="password" id="password" name="password" class="form-control" required placeholder="Password" width="auto">
				</div>
				<div class="submit col-sm-12" style="	display: flex; flex-direction: column;  align-items: center; margin-top: 20px;" >
				<input type="submit" class="btn btn-primary" value="Register" id="submit"> <br>
					<a href="/welcome" class="btn btn-primary">View Users</a>
				</div>
		
			</form>	
		</div>	
		<div class="gap col-sm-2">
		</div>	
</div>
<script>
	  $(document).ready(function(){
        $("#dob").change(function(){
           var value = $("#dob").val();
            var dob = new Date(value);
            var today = new Date();
            var age = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000));
             if (isNaN(age) || age < 0) {

  
             age=0;

            }
            else{
              age=age;
            }
            $('#age').val(age);

        });

    });


	  $(document).ready(function(){
	  	$('#submit').click(function(){
	  		var form = $("#cisco");
	  		form.parsley().validate();

    });
	});
	</script>

</body>




</html>