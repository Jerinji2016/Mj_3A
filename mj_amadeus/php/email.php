<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phn = $_POST['phn_no'];
    $project = $_POST['project'];

	//$to = 'sales@mjinfrastructure.com, enquiry@mjinfrastructure.com';
    $to = 'codemechanic2019@gmail.com, it@mjinfrastructure.com';
    $subject = "Enquiry on MJ Lifestyle ".$project;
    $frm = $email;
    //$from = "jerinji2016@gmail.com";

    $headers = "From: " . $frm . "\r\n";
    $headers .= "Reply-To: ". $frm . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    // PREPARE THE BODY OF THE MESSAGE
	$message = "
    <html>
        <body style='font-family: Helvetica'>
            <p> 
                We would like to know more about the <b> MJ Lifestyle ".$project."<br> </b> 
            </p>
            <div>
                <table>
                    <tr>
                        <td> <b>Name</b> </td>
                        <td> : </td>
                        <td> ".$name." </td>
                    </tr>
                    <tr>
                        <td> <b>Email</b> </td>
                        <td> : </td>
                        <td> ".$email." </td>
                    </tr>
                    <tr>
                        <td> <b>Phone No</b> </td>
                        <td> : </td>
                        <td> ".$phn." </td>
                    </tr>
                </table>
            </div>
            <div style='padding: 20px'>
                <i>Thanks & Regarrds</i>
                <br> <b> ".$name." </b>
            </div>
        </body>
    </html> ";

	//   CHANGE THE BELOW VARIABLES TO YOUR NEEDS
    if( mail($to, $subject, $message, $headers))
       echo "<div class='success'>Your mail is successfully send</div>";       
    else 
        echo "<div class='error'>There was a problem sending the email</div>";
?>