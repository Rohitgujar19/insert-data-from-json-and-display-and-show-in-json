<?php 
include 'config.php';
function ticket_insert($userdata)
 {
	global $intra;
	global $res;
	$ar1=json_decode($userdata,true);
	// 
	// echo"<pre>";
	// print_r($ar1);
	// echo"</pre>";
	$sql=mysqli_query($intra,"insert into intra_tickets(user_id,ticket_category,ticket_priority,ticket_subject,ticket_summary,ticket_attachments,ticket_updated_by)VALUES(?,?,?,?,?,?,?)");
	$stmt = $intra->prepare($sql);
	 $stmt->bind_param("isssssi",$user_id,$ticket_category,$ticket_priority,$ticket_subject,$ticket_summary,$ticket_attachments,$ticket_updated_by);
	 $user_id = filter_var($ar1['user_id'],FILTER_SANITIZE_STRING);
	$ticket_category=filter_var($ar1['ticket_category'],FILTER_SANITIZE_STRING);
	 $ticket_priority=filter_var($ar1['ticket_priority'],FILTER_SANITIZE_STRING);
	 $ticket_subject=filter_var($ar1['ticket_subject'],FILTER_SANITIZE_STRING);
	$ticket_summary=filter_var($ar1['ticket_summary'],FILTER_SANITIZE_STRING);
	$ticket_attachments=filter_var($ar1['ticket_attachments'],FILTER_SANITIZE_STRING);
	$ticket_updated_by=filter_var($ar1['user_id'],FILTER_SANITIZE_STRING);
	  if($stmt->excuted())
	{
    	 $res=[
		'type'=>'200',
		'msg'=>'data is inserted Successfully'
	];
	}
	 else
	 {
		$res=[
		'type'=>'400',
		'msg'=>$stmt->error
	];
	
 } 

	
	$stmt->close();
	return json_encode($res);
 	
 	
 	
}

?>