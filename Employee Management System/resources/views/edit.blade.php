<!DOCTYPE html>
<html>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
	<title>EDIT DETAILS</title>		

<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g="crossorigin="anonymous"></script>
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js" integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  	<style>
  .all h1{
		text-align: center;
		font-family: 'Bebas Neue', sans-serif;

}

.here{
  	display: flex;
  	flex-direction:column ;
  	align-items: center;
  	padding: 5%;
  	text-align:auto;
  		}
 .password{
 	visibility: hidden;

 }

  	</style>
</head>
<body>
<div class="all">
	<h1>Edit Details</h1>

		<div class="here">

			<form class="cisco" method="POST" id="cisco" action="{{ url('/update/'.$crud->id) }}">
				@csrf
				@method('patch')

				<div class="name col-sm-6">
				<label name="name">Full Name</label><br>
				<input type="text" id="name" name="name" class="form-control" value="{{$crud->fname}}" required>
				</div>
				<div class="email col-sm-6">
				<label name="email">Email Address</label><br>
				<input type="email" id="email" name="email" value="{{$crud->email}}" class="form-control" required ="Email Address">
				</div>
				<div class="dob col-sm-6">
				<label name="dob">Date of Birth</label><br>
				<input type="date" id="dob" name="dob" value="{{$crud->dob}}" class="form-control" required >
				</div>
				<div class="age col-sm-6">
				<label name="age">Age</label><br>
				<input type="text" id="age" name="age"  class="form-control" value="{{$crud->age}}" required >
				</div>
				<div class="gender col-sm-6">
				<label for="gender">Gender</label>

				<select name="gender" id="gender" value="{{$crud->gender}}" class="form-control" required>
					
				  <option disabled selected >Select an option</option>
				  <option value="male" @if($crud !== null) : @if($crud->gender =='male') : selected @endif @else selected @endif >Male</option>
				  <option value="female" @if($crud !== null) : @if($crud->gender =='female') : selected @endif @else selected @endif >Female</option>
				  <option value="others" @if($crud !== null) : @if($crud->gender =='others') : selected @endif @else selected @endif >Others</option>
				</select>
				</div>
				<div class="uname col-sm-6">
				<label name="uname">Username</label><br>
				<input type="text" id="uname" name="uname" value="{{$crud->uname}}" class="form-control" required >
				</div>
				<div class="submit col-sm-12" style="	display: flex; flex-direction: column;  align-items: center; margin-top: 20px;" >
				<input type="submit" class="btn btn-success" value="Apply Changes" id="submit">
				
				</div>
				<div class="password col-sm-12" style="display: flex; flex-direction: column; align-items:center;" >
							<label name="password" >Password</label>
							<input type="password" id="password" name="password" class="form-control" required  value="{{$crud->password}}" width="auto">
				</div>
				
		
			</form>	
		</div>
</div>
</body>
</html>