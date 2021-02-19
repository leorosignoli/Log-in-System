  
  <?php
  require_once('config.php');
  ?>
  <?php
  
		if(isset($_POST['submit'])){
			$name		 = $_POST['name'];
			$last_name   = $_POST['last_name'];
			$email 		 = $_POST['email'];
			$password 	 = $_POST['password'];
			$reason 	 = $_POST['reason'];

			$sql = "INSERT INTO info (TYPE_OF_CLIENT, FIRST_NAME, LAST_NAME, EMAIL, PSSWRD ) VALUES (?,?,?,?,?)";
			$stmtinsert = $db->prepare($sql);
			$result = $stmtinsert ->execute([$reason,$name,$last_name,$email,$password]);
			
			if($result){
				echo 'Saved.';
			}else{
				echo "ERRORS OCURRED";
			}
		}