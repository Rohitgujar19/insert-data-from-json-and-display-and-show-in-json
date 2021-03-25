<?php
function show()
{
	echo"Hello Rohit Gujar";
}
/*

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="container">
	 <div class="row">
    <div class="col-md-6">
    	<h3>Candidate Info</h3>
    </div>
  </div>
  
  	<form method="post">
  		<div class="row">
  	<div class="col-md-6 form-group">
  		<label  class="h4">Email Address</label>
  	</div>
  	<div class="col-md-6 form-group">
  		<label class="h4">Full Name</label>
  	</div>
  	</div>
  	<div class="row">
  		<div class="col-md-6 form-group">
  			<input type="text"name="email"placeholder="Email"class="form-control">
  		</div>
  		<div class="col-md-6 form-group">
  			<input type="text"name="fullname"placeholder="Full Name"class="form-control">
  		</div>
  	</div>
  		<div class="row">
  	<div class="col-md-6 form-group">
  		<label  class="h4">* Priority</label>
  	</div>
  	<div class="col-md-6 form-group">
  		<label class="h4">Subject</label>
  	</div>
  	</div>
  	<div class="row">
  		<div class="col-md-6 form-group">
  			<select name="priority"class="form-control">
  				<option value="low">Low</option>
  				<option value="Normal">Normal</option>
  				<option value="High">High</option>
  				<option value="Urgent">Urgent</option>
  			</select>

  		</div>
  		<div class="col-md-6 form-group">
  			<input type="text"name="subject"placeholder="subject"class="form-control">
  		</div>
  	</div>
  	<div class="row">
  		<div class="col-md-6">
  		<label class="h4">Summary</label>
  	</div>
  	 </div>
  	 <div class="row">
  		<div class="col-md-12 form-group">
  	 <textarea  name="summary" rows="4" cols="50"class="form-control"></textarea>
  	</div>
  </div>
  	 <div class="row">
  		<div class="col-md-8 form-group">
  	 <input type="file" name="f"class="form-control btn btn-light">
  	</div>
  </div>
  <div class="row">
  		<div class="col-md-8 form-group">
  	 <input type="submit" name="submit"value="Submit"class="btn  btn-warning bg-warning txt-white">
  	</div>
  </div>

</div>
</body>
</html>
<?php
 //include '../inc/demo1.php';
//include 'config.php';



if(isset($_POST['submit']))
{
	$user_id=1;
	$ticket_category="Hardware";
	$ticket_priority=$_POST['priority'];
	$ticket_subject=$_POST['subject'];
	$ticket_summary=$_POST['summary'];
	$ticket_attachments=$_POST['f'];
	$ticket_updated_by=$user_id;
	$userdata=array("user_id"=>$user_id,"ticket_category"=>$ticket_category,"ticket_priority"=>$ticket_priority,"ticket_subject"=>$ticket_subject,"ticket_summary"=>$ticket_summary,"ticket_attachments"=>$ticket_attachments,"ticket_updated_by"=>$ticket_updated_by);
	echo"<pre>";
	print_r($userdata);
	echo"</pre>";
$userdata=json_encode($userdata,JSON_PRETTY_PRINT);
file_put_contents('form.json',$userdata);
}

?>
*/
?>
