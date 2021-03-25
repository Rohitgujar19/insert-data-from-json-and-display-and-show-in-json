<?php
include 'config.php';
function ticket_insert($ticketdata)
{ 
	
	global $intra;
	global $res;
	$data=json_decode($ticketdata,true);
	// echo"<pre>";
	// print_r($data);
	// echo"<pre>";
	$user_id=$data['user_id'];
	$ticket_category=$data['ticket_category'];
	$ticket_priority=$data['ticket_priority'];
	$ticket_subject=$data['ticket_subject'];
	$ticket_summary=$data['ticket_summary'];
	$ticket_attachments=$data['ticket_attachments'];
	$ticket_updated_by=$data['ticket_updated_by'];
	$sql=mysqli_query($intra,"insert into intra_tickets(user_id,ticket_category,ticket_priority,ticket_subject,ticket_summary,ticket_attachments,ticket_updated_by)VALUES('$user_id','$ticket_category','$ticket_priority','$ticket_subject','$ticket_summary','$ticket_attachments','$ticket_updated_by')");
	if($sql)
	{
		
		// $intra->close();
		return $message="Insertion Successfuly..";
	}

	
}
function ticket_show()
{
	global $intra;
	global $res;
	$empty_array=[];
	$show_query=mysqli_query($intra,"select * from intra_tickets");
	while($x=mysqli_fetch_assoc($show_query))
	{
       $empty_array[]=$x;	;
       
	}
	
		// $all_data=array("id"=>$x[0],"user_id"=>$x[1],"ticket_category"=>$x[2],"ticket_priority"=>$x[3],"ticket_subject"=>$x[4],"ticket_summary"=>$x[5],"ticket_attachments"=>$x[6],"ticket_thread"=>$x[7],"ticket_updated_by",$x[8]);
	$show_data=json_encode($empty_array,JSON_PRETTY_PRINT);
	//file_put_contents('form.json',$show_data);	
	return $show_data;
}
?>
 <?php
/*inser data from pdo


$sql=mysqli_query($intra,"insert into intra_tickets(user_id,ticket_category,ticket_priority,ticket_subject,ticket_summary,ticket_attachments,ticket_updated_by)VALUES(?,?,?,?,?,?,?)");
	$stmt=$intra->prepare($sql);
	$stmt->bind_param("isssssi",$user_id,$ticket_category,$ticket_priority,$ticket_subject,$ticket_summary,$ticket_attachments,$ticket_updated_by);
	$user_id=filter_var($data['user_id'],FILTER_SANITIZE_STRING);
	$ticket_category=filter_var($data['ticket_category'],FILTER_SANITIZE_STRING);
	$ticket_priority=filter_var($data['ticket_priority'],FILTER_SANITIZE_STRING);
	$ticket_subject=filter_var($data['ticket_subject'],FILTER_SANITIZE_STRING);
	$ticket_summary=filter_var($data['ticket_summary'],FILTER_SANITIZE_STRING);
	$ticket_attachments=filter_var($data['ticket_attachments'],FILTER_SANITIZE_STRING);
	$ticket_updated_by=filter_var($data['ticket_updated_by'],FILTER_SANITIZE_STRING);

	$stmt->execute();
	if($stmt->execute())
	{
		echo"data is inserted Successfully";
	}
	else
	{
		echo"data is not inserted..";
	}

*/
?>