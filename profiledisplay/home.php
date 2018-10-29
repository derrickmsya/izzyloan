

<!DOCTYPE html>
<html>

	<head>
		<title>Welcome  To IzzyLoan - Sign up, Log in, Post </title>
		<link rel="stylesheet" type="text/css" href="css/home.css">
	</head>

<body>
<?php include ('session.php');?>

	<div id="header">
		<div class="head-view">
			<ul>
				<li><a href="home.php" title="Izzyloan"><b>Izzyloan</b></a></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li><a href="timeline.php" title="<?php echo $username ?>"><label><?php echo $username ?></label></a></li>
				
				<li><a href="profile.php" title="Home"><label>Profile</label></a></li>
				
				<li><a href="logout.php" title="Log out"><button class="btn-sign-in" value="Log out">Log out</button></a></li>
			</ul>
		</div>
	</div>

	<div id="container">
	
		<div id="left-nav">
				
				<div class="clip1">

				<a href="updatephoto.php" title="Change Profile Picture"><img src="<?php echo $row['profile_picture'] ?>"></a>
				</div>
				
				<div class="user-details">
					<h3><?php echo $firstname ?>&nbsp;<?php echo $lastname ?></h3>
					<h2><?php echo $username ?></h2>
				</div>
		</div>
		
		
		
		<div id="right-nav">
			
<?php
	include("includes/database.php");
			$query=mySQL_query("SELECT * from user where user_id='$id' order by user_id DESC") or die(mySQL_error());
			while($row=mySQL_fetch_array($query)){
				$id = $row['user_id'];
?>	
		<div id="left-nav1">
			<h2>Personal Info</h2>
			<table>
				<tr>
					<td><label>Username</label></td>
					<td width="20"></td>
					<td><b><?php echo $row['username']; ?></b></td>
				</tr>
				<tr>
					<td><label>Birthday</label></td>
					<td width="20"></td>
					<td><b><?php echo $row['birthday']; ?></b></td>
				</tr>
				<tr>
					<td><label>Gender</label></td>
					<td width="20"></td>
					<td><b><?php echo $row['gender']; ?></b></td>
				</tr>
				<tr>
					<td><label>Contact</label></td>
					<td width="20"></td>
					<td><b><?php echo $row['number']; ?></b></td>
				</tr>
				<tr>
					<td><label>Email</label></td>
					<td width="20"></td>
					<td><b><?php echo $row['email']; ?></b></td>
				</tr>
				<tr>
					<td><label>Image</label></td>
					<td width="20"></td>
					<td><img src="<?php echo $row['profile_picture']; ?>"></td>
				</tr>
			</table>
		</div>
<?php
}
?>
		

<?php
	include("includes/database.php");
			$query=mySQL_query("SELECT * from post LEFT JOIN user on user.user_id = post.user_id order by post_id DESC") or die(mySQL_error());
			while($row=mySQL_fetch_array($query)){
				$posted_by = $row['firstname']." ".$row['lastname'];
				$location = $row['post_image'];
				$profile_picture = $row['profile_picture'];
				$content=$row['content']; 
				$post_id = $row['post_id'];
				$time=$row['created'];	
?>
		

<?php
	include("includes/database.php");
			$comment=mySQL_query("SELECT * from comments where post_id='$post_id' order by post_id DESC") or die(mySQL_error());
			while($row=mySQL_fetch_array($comment)){
			$comment_id=$row['comment_id'];
			$content_comment=$row['content_comment'];
				$time=$row['created'];	
			$post_id=$row['post_id'];
			$user=$_SESSION['id'];
			
?>			
			
<?php
}
?>
			

			
						<?php $image=mysql_query("select * from user where user_id='$id'")or die(mysql_error());
							while($row=mysql_fetch_array($image)){
							

							?>
						
						<?php } ?>
			
			
			
			</div>
		</form>

			
		</div>
	<?php
	}
	?>
	
		
	</div>

</body>

</html>