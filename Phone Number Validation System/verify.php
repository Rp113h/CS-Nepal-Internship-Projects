<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js" integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

	<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
	<title></title>
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
.check{
		background-color: #adb5bd !important;
		width: 41.5%;
		padding: 10px;
		margin-left: 29.75%;
		margin-top: 7%;
		text-align: center;

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

<div class= "check">
	
	<div class="checkbody">
	<form name="checkform" id="checkform">
		<label><h4>Give your Phone Number:</h4></label><br><br>
		<input type="number" name="checknum" id="checknum" required class="form-control"><br><br>
		<input type="submit" name="submit_btn">

	</form>
</div>	<br>
<table id="example" class="display" style="width:100%">
        <thead>
            <tr>
               
                <th>Customer Name</th>
                <th>Operator</th>
               
            </tr>
        </thead>
       
    </table>
</div>	
</div>





<script>
$(document).ready(function() {
        $("#checkform").on('submit', function(e){
            e.preventDefault();
            var form = $(this);

            form.parsley().validate();

            if (form.parsley().isValid()){
                $.ajax({
  url:'check.php',
  data: $("#checkform").serialize(),
  type:'POST',	

      success: function(data) {

        var dataTable = $("#example").DataTable();







$.each(JSON.parse(data), function(index, value) {
    
dataTable.row.add([value.name,value.operator_name]).draw();








  });


        




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