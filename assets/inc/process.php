<div style="display: flex; justify-content: center; align-items: center; height: 100vh; width: 100vw;" >
			<h3 style="background: #00800005; padding: 20px; color: #000;">
				<?php 
					if (isset ($_POST["number_email"])) {  
						$errMsg = "Error! You didn't enter the Name.";  
								 echo $errMsg;  
					} else {  
						$name = $_POST["name"];  
					}  
				?>
			</h3>
</div>
