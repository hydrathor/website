
<?php
if(!empty($_POST["send"])) {
	$Name = $_POST["Name"];
  $Email = $_POST["Email"];
	$Phone = $_POST["Phone"];
    $optradio = $_POST["optradio"];
    $Address = $_POST["Address"];
	$Address2 = $_POST["Address2"];
    $City = $_POST["City"];
    $State = $_POST["State"];
    $Zip = $_POST["Zip"];
	$toEmail = "hydrathor510@gmail.com";
  
	$mailHeaders = "Name: " . $Name .
	"\r\n Email: ". $Email  . 
	"\r\n Phone: ". $Phone  . 
	"\r\n Gender: " . $optradio . 
    "\r\n Address: ". $Address  . 
	"\r\n Address2: ". $Address2  . 
	"\r\n City: " . $City .
    "\r\n State: ". $Address  . 
	"\r\n Zip: ". $Address2  . ;

	if(mail($toEmail, $userName, $mailHeaders)) {
	    $message = "Your contact information is received successfully.";
	}
}
?>


      <?php if (! empty($message)) {?>
      <div class='success'>
        <strong><?php echo $message; ?>	</strong>
      </div>
      <?php } ?>
    </div>
  </form>
</div>

</body>
</html>


