<?php
include_once "config.php";

class Crud extends Config
{

	function __construct()
	{
		parent::__construct();
	}


//Display All
	public function displayAll($table)
	{
		$query = "SELECT * FROM {$table}";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$data = array();
			while ($row = $result->fetch_assoc()) {
				$data[] = $row;
			}
			return $data;
		}else{
			return 0;
		}
	}



	public function displayAllWithOr($user_id)
	{
		$query = "SELECT * FROM chat where sender='$user_id' or reciever='$user_id ' order by id desc";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$data = array();
			while ($row = $result->fetch_assoc()) {
				$data[] = $row;
			}
			return $data;
		}else{
			return 0;
		}
	}



	//Display with Order


	public function displayAllWithOrder($table,$orderValue,$orderType)
	{
		$query = "SELECT * FROM {$table} ORDER BY {$orderValue} {$orderType}";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$data = array();
			while ($row = $result->fetch_assoc()) {
				$data[] = $row;
			}
			return $data;
		}else{
			return 0;
		}
	}

		public function displayAllSpecific($table,$value,$item)
	{
		$query = "SELECT * FROM {$table} WHERE $value='$item' ";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$data = array();
			while ($row = $result->fetch_assoc()) {
				$data[] = $row;
			}
			return $data;
		}else{
			return 0;
		}
	}


		public function displayAllSpecificWithOrder($table,$value,$item,$orderValue,$orderType)
	{
		$query = "SELECT * FROM {$table} WHERE $value='$item' ORDER BY {$orderValue} {$orderType}";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$data = array();
			while ($row = $result->fetch_assoc()) {
				$data[] = $row;
			}
			return $data;
		}else{
			return 0;
		}
	}



	public function displayAllWithOrder2($table,$user,$orderValue,$orderType)
	{
		$query = "SELECT * FROM {$table} WHERE user_id='$user' ORDER BY {$orderValue} {$orderType}";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$data = array();
			while ($row = $result->fetch_assoc()) {
				$data[] = $row;
			}
			return $data;
		}else{
			return 0;
		}
	}



		public function displayAllWithOrder3($table,$user,$orderValue,$orderType)
	{
		$query = "SELECT * FROM {$table} WHERE user_id='$user' ORDER BY {$orderValue} {$orderType}";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$data = array();
			while ($row = $result->fetch_assoc()) {
				$data[] = $row;
			}
			return $data;
		}else{
			return 0;
		}
	}



	public function displayUser2($v1,$v2)
	{
		
		$query = "SELECT * FROM user where id='$v1' or id='$v2' ";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			return $row;
		}else{
			return 0;
		}
	}





	//Display with Limit
	public function displayWithLimit($table,$limit)
	{
		$query = "SELECT * FROM {table} limit {$limit}";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$data = array();
			while ($row = $result->fetch_assoc()) {
				$data[] = $row;
			}
			return $data;
		}else{
			return 0;
		}
	}


	//Display Specific
	public function displayOne($table,$value)
	{
		$id = $this->cleanse($value);
		$query = "SELECT * FROM $table where id='$id' ";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			return $row;
		}else{
			return 0;
		}
	}


	public function displayUser($value)
	{
		$id = $this->cleanse($value);
		$query = "SELECT * FROM user where email='$id' ";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			return $row;
		}else{
			return 0;
		}
	}


	public function displayUser3($value)
	{
		$id = $this->cleanse($value);
		$query = "SELECT * FROM user where id='$id' ";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			return $row;
		}else{
			return 0;
		}
	}




	public function displayLoginUser($value)
	{
		$id = $this->cleanse($value);
		$query = "SELECT * FROM login where email='$id' ";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			return $row;
		}else{
			return 0;
		}
	}

	public function displayWasteTypeById($table,$value)
	{
		$id = $this->cleanse($value);
		$query = "SELECT * FROM {$table} where id='$id' ";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			return $row['waste_type'];
		}else{
			return 0;
		}
	}


		public function displayChargeById($table,$value)
	{
		$id = $this->cleanse($value);
		$query = "SELECT * FROM {$table} where id='$id' ";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			return $row['charge'];
		}else{
			return 0;
		}
	}


	public function displayNameById($table,$value)
	{
		$id = $this->cleanse($value);
		$query = "SELECT * FROM {$table} where id='$id' ";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			return $row['name'];
		}else{
			return 0;
		}
	}



	
//Counting All
	public function countAll($table)
	{
		$q=$this->con->query("SELECT id FROM $table");
		return $q->num_rows;
	}


	public function countAllById($table,$id)
	{
		$q=$this->con->query("SELECT id FROM $table where sender='$id' or reciever='$id' ");
		return $q->num_rows;
	}

	public function countAllById2($table,$id)
	{
		$q=$this->con->query("SELECT id FROM $table where (sender='$id' or reciever='$id') AND status='0' ");
		return $q->num_rows;
	}

	public function countAllById3($table,$item,$value)
	{
		$q=$this->con->query("SELECT id FROM $table where $item='$value'");
		return $q->num_rows;
	}


	public function countAllWasteUser($table,$id)
	{
		$q=$this->con->query("SELECT user_id FROM $table where user_id='$id' ");
		return $q->num_rows;
	}



	public function countAllComplain($table,$id)
	{
		$q=$this->con->query("SELECT sender FROM $table where sender='$id' ");
		return $q->num_rows;
	}



//Counting Specific
	
	
// Inserting
	public function insertChat($post,$id)
	{
		$msg = $this->cleanse($post['message']);
		$admin= 'admin';
		$user=$this->displayUser($id);
		$user_id=$user['id'];

		$query="INSERT INTO chat(sender,reciever,message) VALUES('$user_id','$admin','$msg')";
		$sql = $this->con->query($query);
		if ($sql==true) {
			header("Location:chat.php?msg=Data was successfully inserted&type=success");
		}else{
			header("Location:chat.php?msg=Error adding data try again!&type=error");
		}
	}


	public function insertChat2($post,$id)
	{
		$msg = $this->cleanse($post['message']);
		$admin= 'admin';
		$user=$this->displayUser($id);
		$user_id=$user['id'];

		$query="INSERT INTO chat(sender,reciever,message) VALUES('$user_id','$admin','$msg')";
		$sql = $this->con->query($query);
		if ($sql==true) {
			header("Location:chat.php?msg=Data was successfully inserted&type=success");
		}else{
			header("Location:chat.php?msg=Error adding data try again!&type=error");
		}
	}


	public function insertChat3($post)
	{
		$msg = $this->cleanse($post['message']);
		$id= $this->cleanse($post['id']);
		$admin= 'admin';

		$query="INSERT INTO chat(sender,reciever,message) VALUES('$admin','$id','$msg')";
		$sql = $this->con->query($query);
		if ($sql==true) {
			header("Location:reply.php?id=$id&msg=Data was successfully inserted&type=success");
		}else{
			header("Location:reply.php?id=$id&msg=Error adding data try again!&type=error");
		}
	}






	public function insertNewUser($post)
	{
		$name=$this->cleanse($post['name']);
		$address=$this->cleanse($post['address']);
		$gender=$this->cleanse($post['gender']);
		$phone=$this->cleanse($post['phone']);
		$email=$this->cleanse($post['email']);
		$password=$this->cleanse($post['password']);
		$date=date("d-m-y @ g:i A");
		$query="insert into user(fullname,address,gender,phone,email,password,date_created) values('$name','$address','$gender','$phone','$email','$password','$date')";
		$query2="insert into login(name,email,password,role) values('$name','$email','$password',3)";
		$sql = $this->con->query($query);
		if ($sql==true) {
			header("Location:login.php?msg=User account was created successfully, Please login...&type=success");
			$this->con->query($query2);
		}else{
			header("Location:login.php?msg=Error adding data try again!&type=error");
		}
	}



	public function insertTopic($post)
	{
		$name=$this->cleanse($post['name']);
		$date=date("d-m-y @ g:i A");
		$query="insert into topic(name,date_created) values('$name','$date')";
		$sql = $this->con->query($query);
		if ($sql==true) {
			header("Location:view-topic.php?msg=Topic was created successfully&type=success");
		}else{
			header("Location:view-topic.php?msg=Error adding data try again!&type=error");
		}
	}



	public function insertTopicData($post,$file)
	{
		$topic_id=$this->cleanse($post['topic_id']);
		$heading=strtoupper($this->cleanse($post['heading']));
		$info=strtoupper($this->cleanse($post['info']));

		$img1=$file['img1']['name'];
		$temp=$file['img1']['tmp_name'];
		$folder="../3D_images/" ;  
		$pos1=strpos($img1,'.');
		$len1=strlen($img1);
		$ext1=substr($img1, $pos1, $len1); 
		$imgv1=str_replace($img1,'.',uniqid().$ext1 ); 
		$farm='3D_images_'.$imgv1;  

		move_uploaded_file($temp,$folder.$farm)  ;

		$query="insert into topic_data(topic_id,heading,info,image) values('$topic_id','$heading','$info','$farm')";
		$sql = $this->con->query($query);
		if ($sql==true) {
			header("Location:view-topic-data.php?msg=Topic Data was created successfully&type=success");
		}else{
			header("Location:view-topic-data.php?msg=Error adding data try again!&type=error");
		}
	}





	public function insertWaste($post,$id,$ref)
	{
		$user=$this->displayUser($this->cleanse($id));
		$uid=$user['id'];
		$type=$this->cleanse($post['type']);
		$qty=$this->cleanse($post['qty']);
		$payment_ref=$this->cleanse($ref);
		$charge=$this->displayCharge($type,$qty);
		$location_id=$this->cleanse($post['location_id']);
		$location_charge_id=$this->displayChargeId($type);
		$payment_status='0';
		$delivery_status='0';
		

		$query="INSERT into waste_info(user_id,location_id,location_charge_id,qty,charge,payment_ref,payment_status,delivery_status) values('$uid','$location_id','$location_charge_id','$qty','$charge','$payment_ref','$payment_status','$delivery_status')";
		$sql = $this->con->query($query);
		
		if ($sql==true) {
			header("Location:view-waste.php?msg=Waste request was sent successfully&type=success");
		}else{
			header("Location:view-waste.php?msg=Error sending request try again!&type=error");
		}
	}


	public function displayCharge($type,$qty)
	{
		$type = $this->cleanse($type);
		$qty = $this->cleanse($qty);
		$query = "SELECT * FROM location_charge where waste_type='$type' ";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			$val= $qty * $row['charge'];
			return $val;
		}else{
			return 0;
		}
	}


	public function displayChargeId($type)
	{
		$id = $this->cleanse($id);
		$query = "SELECT * FROM location_charge where waste_type='$type' ";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			return $row['id'];
		}else{
			return 0;
		}
	}



//Delete Items
	public function delete($id, $table,$url) 
	{ 
		$id = $this->cleanse($id);
		$query = "DELETE FROM $table WHERE id = $id";

		$result = $this->con->query($query);

		if ($result == true) {
			header("Location:$url?msg=Data was successfully deleted&type=success");
		} else {
			header("Location:$url?msg=Error deleting data&type=error");
		}
	}


	public function delete2($id,$id2,$table,$url) 
	{ 
		$id = $this->cleanse($id);
		$id2 = $this->cleanse($id2);
		$query = "DELETE FROM $table WHERE id = $id2";

		$result = $this->con->query($query);

		if ($result == true) {
			header("Location:$url?id=$id&msg=Data was successfully deleted&type=success");
		} else {
			header("Location:$url?msg=Error deleting data&type=error");
		}
	}


	public function deleteAll($id, $table,$url) 
	{ 
		$email= $this->cleanse($id);
		$query = "DELETE FROM $table WHERE email = '$email' ";
		$query2 = "DELETE FROM login WHERE email = '$email' ";

		$result = $this->con->query($query);

		if ($result == true) {
			$this->con->query($query2);
			header("Location:$url?msg=Data was successfully deleted&type=success");
		} else {
			header("Location:$url?msg=Error deleting data&type=error");
		}
	}


	public function deleteTopic($id,$url) 
	{ 
		$email= $this->cleanse($id);
		$query = "DELETE FROM topic WHERE id = '$id' ";
		$query2 = "DELETE FROM topic_data WHERE topic_id = '$id' ";

		$result = $this->con->query($query);

		if ($result == true) {
			$this->con->query($query2);
			header("Location:$url?msg=Data was successfully deleted&type=success");
		} else {
			header("Location:$url?msg=Error deleting data&type=error");
		}
	}






	//Delete Items
	public function deleteTwoTable($email,$table,$table2,$url) 
	{ 
		$email = $this->cleanse($email);
		$query = "DELETE FROM {$table} WHERE email= '$email'";
		$query2 = "DELETE FROM {$table2} WHERE email= '$email'";

		$result = $this->con->query($query);

		if ($result == true) {
			header("Location:$url?msg=Data was successfully deleted&type=success");
			$this->con->query($query2);
		} else {
			header("Location:$url?msg=Error deleting Data&type=error");
		}
	}


	public function updateAdmin($post)
	{
		
		$email=$this->cleanse($post['email']);
		$password=$this->cleanse($post['password']);
		$query="UPDATE login SET password='$password' WHERE email='$email' ";
		$sql=$this->con->query($query);
		if ($sql==true) {
			header("Location:profile.php?msg=Account was updated successfully&type=success");
		}else{
			header("Location:profile.php?msg=Error updating account try again!&type=error");
		}
	}


	public function updateUser($post)
	{
		
		$email=$this->cleanse($post['email']);
		$password=$this->cleanse($post['password']);
		$query="UPDATE login SET password='$password' WHERE email='$email' ";
		$query2="UPDATE user SET password='$password' WHERE email='$email' ";
		$sql=$this->con->query($query);
		if ($sql==true) {
			$this->con->query($query2);
			header("Location:profile.php?msg=Account was updated successfully&type=success");
		}else{
			header("Location:profile.php?msg=Error updating account try again!&type=error");
		}
	}



	public function updateWasteInfoPay($value,$url)
	{
		$check=$this->displayOne('waste_info',$value);
		$pay=$check['payment_status'];
		if ($pay === '0') {
			$query="UPDATE waste_info SET payment_status='1' WHERE id='$value' ";
		} else {
			$query="UPDATE waste_info SET payment_status='0' WHERE id='$value' ";
		}

		$sql=$this->con->query($query);
		if ($sql==true) {
			header("Location:$url?msg=Payment was updated successfully&type=success");
		}else{
			header("Location:$url?msg=Error updating account try again!&type=error");
		}
	}
	

	public function updateWasteInfoDelivery($value,$url)
	{
		$check=$this->displayOne('waste_info',$value);
		
		$delivery=$check['delivery_status'];
		if ($delivery === '0') {
			$query="UPDATE waste_info SET delivery_status='1' WHERE id='$value' ";
		} else {
			$query="UPDATE waste_info SET delivery_status='0' WHERE id='$value' ";
		}

		$sql=$this->con->query($query);
		if ($sql==true) {
			header("Location:$url?msg=Delivery was updated successfully&type=success");
		}else{
			header("Location:$url?msg=Error updating account try again!&type=error");
		}
	}

	public function updateStatus($id)
	{
		$q=$this->con->query("UPDATE chat SET status='1' WHERE sender='$id' or reciever='$id' ");
	}


	//Search
	public function displaySearch($value)
	{
	//Search box value assigning to $Name variable.
		$Name = $this->cleanse($value);
		$query = "SELECT * FROM product WHERE pid LIKE '%$Name%'";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			return $row;
		}else{
			return false;
		}
	}


//Mailing Function
	public function mailing($post)
	{
		$name=$this->cleanse($post['name']);
		$email=$this->cleanse($post['email']);
		$phone=$this->cleanse($post['phone']);
		$subject=$this->cleanse($post['subject']);
		$text=$this->cleanse($post['message']);

		$headers = 'MIME-Version: 1.0' . "\r\n";
		$headers .= "From: " . $email . "\r\n"; // Sender's E-mail  ---charset=iso-8859-1
		$headers .= 'Content-type: text/html; charset=utf8_encode' . "\r\n";

		$message ='<table style="width:100%">
		<tr>
		<td>'.$name.'  '.$subject.'</td>
		</tr>
		<tr><td>Email: '.$email.'</td></tr>
		<tr><td>phone: '.$subject.'</td></tr>
		<tr><td>Text: '.$text.'</td></tr>

		</table>';
		$to='support@dilproperty.com';

		if (@mail($to, $subject, $message, $headers))
		{
			header("Location:contact.php?msg=Your message has been sent, we will contact you in a moment&type=success");
		}else{
			header("Location:contact.php?msg=message failed sending, please try again later!&type=error");
		}

	}



	public function cleanse($str)
	{
   #$Data = preg_replace('/[^A-Za-z0-9_-]/', '', $Data); /** Allow Letters/Numbers and _ and - Only */
		$str = htmlentities($str, ENT_QUOTES, 'UTF-8'); /** Add Html Protection */
		$str = stripslashes($str); /** Add Strip Slashes Protection */
		if($str!=''){
			$str=trim($str);
			return mysqli_real_escape_string($this->con,$str);
		}
	}


}

?>

