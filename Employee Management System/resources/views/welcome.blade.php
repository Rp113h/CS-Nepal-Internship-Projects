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
	<title>WELCOME</title>
	<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g="crossorigin="anonymous"></script>
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

   	<script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>

 
<style>
	.alert{
		text-align: center;
	}
.heading{
	display: flex;
	flex-direction: column;
	align-items: center;	
	font-family: 'Bebas Neue', sans-serif;
}
.users{
	background-color: #e2e2e2;
	margin-top: 2%;
	display: flex;
	flex-direction: column;
	align-items: center;	
	font-family: 'Cambria', sans-serif;
	padding: 2%;

}

.table{
	text-align: center;
	border:solid;
	border-color: grey;
	table-layout: auto;
	
}
.table tr{
border: solid;
border-color: grey;
}
.table td{
border: solid;
border-color: grey;
}
.table th{
border: solid;
border-color: grey;
text-align: center;
}
.close-btn {
 
  cursor: pointer;
  color: black;
  align-items: center;
   float: right;
}
.close-btn:hover{
	background-color: green;
}

.alert{
	font-family: Cambria, serif;
}
</style>

</head>

<body>
<div class="all">

		@if(\Session::has('dmsg'))
	<div class="alert alert-danger">
		{!!\Session::get('dmsg')!!}
		 <span class="close-btn">&times;</span>
	</div>	

	@endif

		@if(\Session::has('emsg'))
	<div class="alert alert-success">
		{!!\Session::get('emsg')!!}
		 <span class="close-btn">&times;</span>
	</div>	

	@endif
		
		@if(\Session::has('regs'))
	<div class="alert alert-success">
		{!!\Session::get('regs')!!}
		 <span class="close-btn">&times;</span>
	</div>	

	@endif
	<h1 class="heading">User Details</h1>

	<div class="users">

		<table class="table" name="table" id="table">
			
				<tr>
					<th hidden>ID</th>	
					<th>Full Name</th>
					<th>Email Address</th>
					<th>DOB</th>
					<th>Age</th>
					<th>Gender</th>
					<th>Username</th>
					<th>Action</th>
					
				</tr>
			
				@foreach($crud as $item)
				<tr>
					<td hidden>{{$item->id}}</td>
					<td>{{$item->fname}}</td>
					<td>{{$item->email}}</td>
					<td>{{$item->dob}}</td>
					<td>{{$item->age}}</td>
					<td>{{$item->gender}}</td>
					<td>{{$item->uname}}</td>
					<td>
							<button class="btn btn-success" style="float: left;"><a href="{{url('edit/'.$item->id)}}" style="color: white; ">Edit</a></button>


								<form method="POST" action="{{url('/register/'.$item->id)}}" id="delete_form">
									{{csrf_field()}}
									{{method_field('DELETE')}}
											<button class="btn btn-danger" type="submit" style="float: right;">Delete</button>
								</form>
					</td>	
				</tr>
				@endforeach

				
			
		</table>



		<a href="/register" class="btn btn-primary">Register New User</a>
	</div>

</div>
<script>
$(document).ready(function() {
  $('.close-btn').click(function() {
    $(this).parent('.alert').hide();
  });
});

</script>
</body>
</html>