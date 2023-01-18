<?php
require 'layout/header.php';
require 'config/veritaban.php';

$name = "";
$msg = "";

$email = "";
$msg1 = "";

$message = "";
$msg2 = "";

$msg3 = "";

if (isset($_POST['submit'])) {

	if (empty($_POST['cName'])) {
		$msg = "Lutfen isminizi giriniz";
	} elseif (strlen($_POST['cName']) < 3 || strlen($_POST['cName']) > 20) {
		$msg = "isminiz 3 ile 20 karakter arasinda olmalidir";
	} else {
		$name = $_POST['cName'];
	}

	if (empty($_POST['cEmail'])) {
		$msg1 = "Lutfen emailinizi giriniz";
	} else if (!filter_var($_POST['cEmail'], FILTER_VALIDATE_EMAIL)) {
		$msg1 = "Lutfen gecerli bir email giriniz";
	} else {
		$email = $_POST['cEmail'];
	}

	if (empty($_POST['cMessage'])) {
		$msg2 = "Lutfen mesajinizi giriniz";
	} else {
		$message = $_POST['cMessage'];
	}
	if (!empty($name) && !empty($email) && !empty($message)) {
		$result = $connection->query("INSERT INTO geribildirim VALUES (null, '$name', '$email', '$message')");

		if ($result) {
			echo "<script> alert('mesajiniz iletildi')</script>";
		} else {
			echo "<script> alert('mesajiniz iletilemedi')</script>";
		}
	}else{
		$msg3 = "Lutfen bos alan birakmayiniz";
	}
}

?>

<section id="content-wrap" class="site-page">
	<div class="row">
		<div class="col-twelve">
			<section>
				<div class="primary-content">
					<h1 class="entry-title add-bottom">Get In Touch With Us.</h1>
				</div>
				<span class="text-danger"><?php echo $msg3; ?></span>

				<form name="cForm" id="cForm" method="post" action="">
					<fieldset>

						<div class="form-field">
							<input name="cName" type="text" id="cName" class="full-width" placeholder="Your Name" value="">
							<span class="text-danger"><?php echo $msg; ?></span>
						</div>

						<div class="form-field">
							<input name="cEmail" type="text" id="cEmail" class="full-width" placeholder="Your Email" value="">
							<span class="text-danger"><?php echo $msg1; ?></span>

						</div>

						<div class="message form-field">
							<textarea name="cMessage" id="cMessage" class="full-width" placeholder="Your Message"></textarea>
							<span class="text-danger"><?php echo $msg2; ?></span>

						</div>

						<button type="submit" name="submit" class="submit button-primary full-width-on-mobile">Submit</button>

					</fieldset>
				</form> <!-- end form -->
			</section>
		</div> <!-- end col-twelve -->
	</div> <!-- end row -->
</section> <!-- end content -->


<?php require 'layout/footer.php'; ?>