<?php e
session_start();
include('header.php');
include_once("db_connect.php");
    
    $query = "SELECT * FROM users";
    
    
    
    
    
    
?>
<style>
table, th, td {
border: 1px solid black;
    border-collapse: collapse;
}
th, td {
padding: 15px;
}
</style>
<title>webdamn.com : Demo Login and Registration Script with PHP, MySQL</title>
<script type="text/javascript" src="script/ajax.js"></script>
<?php include('container.php');?>

<div class="container">
	<h2>Example: Login and Registration Script with PHP, MySQL</h2>	
		
		<br>
		<br>
		<div class="collapse navbar-collapse" id="navbar1">
			<ul class="nav navbar-nav navbar-left">
				<?php if ((isset($_SESSION['user_id'])) && (isset($_SESSION['email']))) { ?>
				<li><p class="navbar-text"><strong>Welcome!</strong> You're signed in as <strong><?php echo $_SESSION['user_name']; ?></strong></p></li>
                <li><p class="navbar-text"><strong>Welcome!</strong> You're signed in as <strong><?php echo $_SESSION['email']; ?></strong></p></li>
				<li><a href="logout.php">Log Out</a></li>
				<?php } else { ?>
				<li><a href="login.php">Login</a></li>
				<li><a href="register.php">Sign Up</a></li>
				<?php } ?>
			</ul>
		</div>
        <div>
<h2>Lista użytkowików:</h2>




<?php   if ($result = $conn->query($query)) {
    
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["uid"];
        $field2name = $row["user"];
        $field3name = $row["email"];
        ?>

<table style="width:100%">
<thead>
<tr>
<th>ID</th>
<th>Użytkownik</th>
<th>E-mail</th>
</tr>
</thead>
<tbody>
<tr>
<td><?php echo $field1name ?></td>
<td><?php echo $field2name ?></td>
<td><?php echo $field3name ?></td>
</tr>
</tbody>
</table>
<?php
    }
    
    /*freeresultset*/
    $result->free();
}
?>
</div>
		
		
		
		<div style="margin:50px 0px 0px 0px;">
<a class="btn btn-default read-more" style="background:#3399ff;color:white" href="#" title="">Back to Tutorial</a>			
		</div>	
</div>	
<?php include('footer.php');?> 
