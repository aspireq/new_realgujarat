<html>
<body>
	<h1>Activate account for <?php echo $identity;?></h1>
	<p>Please click this link to <?php echo anchor('auth/activate_account/'. $user_id .'/'. $activation_token, 'Activate Your Account');?>.</p>
        <p>Contact us immediately if you did not authorize this registration.</p>
        <p>Thank you.</p>
</body>
</html>