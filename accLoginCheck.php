<?php 
	session_start();

	if(isset($_POST['submit'])){

		$accountNo 	= $_POST['accountNo'];
		$pin	= $_POST['pin'];

		if($accountNo != ""){
			if($pin != ""){
				
				$myfile = fopen('accView.txt', 'r');
				
				
				while(!feof($myfile))
				{
					
					$data = fgets($myfile);
					$user = explode('|', $data);		
					
					if($accountNo == trim($user[0]) && $pin == trim($user[1])){
						setcookie('flag', 'true', time()+3600, '/');
						header('location: accountPage.html');
					}
				}

				echo "invalid accountNo/pin";

			}else{
				echo "invalid pin....";
			}
		}else{
			echo "invalid accountNo....";
		}
	}
?>