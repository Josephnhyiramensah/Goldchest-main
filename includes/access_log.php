<?php
			function log_access() 
			{
				global $con;
				if(isset($_SESSION['user_id'])){$user_id = $_SESSION['user_id'];}else{$user_id = 0;};
				// Get access details
				$page_url = $_SERVER['REQUEST_URI'];
				$ip_address = $_SERVER['REMOTE_ADDR'];
				$user_agent = $_SERVER['HTTP_USER_AGENT'];

				// Prepare an SQL statement
				$stmt = $con->prepare("INSERT INTO access_log (user_id, page_url, ip_address, user_agent) VALUES (?, ?, ?, ?)");
				
				// Bind parameters
				$stmt->bind_param("isss", $user_id, $page_url, $ip_address, $user_agent);
				
				// Execute the statement
				$stmt->execute();
				
				// Close the statement
				$stmt->close();
			}