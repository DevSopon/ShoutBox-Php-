<?php
include 'class/shout.php';
	$shout = new Shout();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Basic Shout Box</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="wrapper clr">
		<header class="header clr">
			<h2>Basic Shout Box</h2>
		</header>
		<section class="content clr">
			<div class="box">
				<ul>
					<?php
						$getData= $shout->getAllData();
						if (isset($getData)) {
							while ($data= $getData->fetch_assoc()) { ?>
								<li><span><?php echo $data['time']; ?> </span> - <b> <?php echo $data['name']; ?> </b><?php echo $data['body']; ?></li>
							<?php }
						}

					?>
					

				</ul>
			</div>
			<?php
			if ($_SERVER ['REQUEST_METHOD']=='POST' ){
    				$shoutData= $shout->insertData ($_POST);
  				}
			?>
			<div class="shoutform">
				<form action="" method="post">
					<table>
						<tr>
							<td>Name</td>
							<td>:</td>
							<td><input style="padding: 5px; width: 400px; margin-bottom: 10px" type="text" name="name" placeholder="Please Enter your message" required=""></td>
						</tr>
						<tr>
							<td>Body</td>
							<td>:</td>
							<td><input placeholder="Please Enter your text" style="padding: 5px; width: 400px; margin-bottom: 10px" type="text" name="body" required=""></td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td><input style="background-color: #666; cursor:poiter;padding: 5px  20px; font-size: 20px; color: #fff; border: 1px solid #fff;" type="submit" value="Shout It" ></td>
						</tr>
					</table>
				</form>
			</div>
		</section>
		<footer class="footer clr">
			<h2>&copy; Copyright Sopon</h2>
		</footer>
	</div>

</body>
</html>