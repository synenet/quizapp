
	<div class="header">

		<nav class="navbar   navbar-dark navbar-default ">

			<a href="index.php" class="navbar-brand text-primary">QuizApp</a>
			<ul class="nav navbar navbar-right">
				
				<?php
				if(!empty($_SESSION['user_id']))
				{echo '<li class="nav-item"><a href="register.php?att=logout" class="nav-link" >Log Out</a></li>';}else{?>
				
				
				<li class="nav-item"><a href="register.php?att=register" class="nav-link">Register</a></li>
				<?php
				}if(!empty($_SESSION['user_id']))
				{echo '<li class="nav-item"><a href="#" class="nav-link" >'.$username.'</a></li>';}else{ ?>
				<li class="nav-item"><a href="register.php?att=login" class="nav-link">Login</a></li>
				<?php 

				}
				?>
			</ul>
			
		</nav>
	</div>