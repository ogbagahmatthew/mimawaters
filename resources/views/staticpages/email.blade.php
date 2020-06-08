<form method="POST" name="email_form_with_php"
action="php-form-action.php" enctype="multipart/form-data"> 

<label for='name'>Name: </label>
<input type="text" name="name" >
<br>

<label for='email'>Email: </label>
<input type="text" name="email" >
<br>
<label for='message'>Message:</label>
<textarea name="message"></textarea>
<br>

<label for='uploaded_file'>Select A File To Upload:</label>
<input type="file" name="uploaded_file">
<br>
<input type="submit" value="Submit" name='submit'>
</form>

<?php
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $subject=$_POST['subject'];
    $mailFrom=$_POST['mail'];
    $message=$_POST['message'];

    $mailTo ="";
    $headers ="from: " .$mailfrom;
    $txt ="" .$name. "\n\n".$message;
    mail($mailTo, $subject, $txt, $headers);
    header("email.blade.php?.mailsec");
}
