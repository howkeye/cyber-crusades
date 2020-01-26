<?php


function send_email($EMAIL, $NAME, $CONTACT, $COLLEGE, $game)
{
	$replyto = $EMAIL;
    $replysubject = "CYBER CRUSADES | ALMA FIESTA '19";

	// Set content-type header for sending HTML email
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= 'From: Alma Fiesta <donotreply@almafiesta.com>'."\r\n";
	
	 
	 $replymessage .= '
    <html>
    <head>
        <title>Congratulations!</title>
	    <link href="https://fonts.googleapis.com/css?family=Raleway:300" rel="stylesheet">

    </head>
    <body style="font-family:"Raleway"">';
		$replymessage .= 'Hello there ';
		$replymessage .= $NAME;
		$replymessage .= ',<br><br>';
   $replymessage .= 'You have successfully registered for event - ';
   $replymessage .= $game;
   $replymessage .= ' in Cyber Crusades.<br><br>';
  	$replymessage .= 'You have successfully signed up for three of the most fun filled and enthralling days of your college life! You can check all the latest updates and happening at  http://almafiesta.com . You can also register for other exciting events, workshops and more at http://register.almafiesta.com. <br>"Talent wins games, but teamwork and intelligence wins championships." Cyber Crusades, the gaming event of Alma Fiesta awaits you to experience the fun and excitement that lay ahead.<br><br>';
	 $replymessage .= '</b><br><br>';
	 $replymessage .=  '<center><table style="border: 2px dashed #FB4314; width: 100%; height: 200px; margin:20px;" cellspacing="10px">
			<tr align="center">
				<th colspan="2">Registration Confirmation Cyber Crusades | ALMA FIESTA 2019</th>
			</tr>
			
            <tr align="center">
                <th>Name:</th><td>';
		$replymessage .=  $NAME;
		$replymessage .='</td>
            </tr>
            <tr align="center" >
                <th>Email:</th><td>';
		$replymessage .= $EMAIL;
		$replymessage .= '</td>
            </tr>
			<tr align="center">
                <th>CONTACT:</th><td>';
		$replymessage .= $CONTACT;
		$replymessage .= '</td>
            </tr>
			<tr align="center">
                <th>Event:</th><td>';
		$replymessage .= $game;
		$replymessage .= '</td>
            </tr>
			
            <tr align="center">
                <th>Facebook Page:</th><td><a href="https://www.facebook.com/almafiesta/">ALMA FIESTA, IIT Bhubaneswar</a></td>
            </tr>
			<tr align="center">
				<th colspan="2">All the Best !</th>
			</tr>
        </table></center>';
		$replymessage .= "<br>You can contact Shivam - 9810130365 for any event related queries. <br>";
		$replymessage .= "For doubts regarding registration fee or the payment procedure, feel free to contact Shivam or Manish : +91 9401140388  <br>";
		$replymessage .= "We are eagerly waiting to be your hosts in our beautiful campus. See you on 11th!<br>";
		
		$replymessage .= "Cheers! <br>";
		$replymessage .= "Regards <br>";
		$replymessage .= "Team Alma Fiesta <br>";
		$replymessage .= "IIT Bhubaneswar <br>";
		$replymessage .= "Follow our Facebook page for further updates : https://www.facebook.com/almafiesta/ <br>";
	$replymessage .= 'This e-mail is automated, so please DO NOT reply';
	$replymessage .= '
    </body>
    </html>';
   
   
 mail($replyto, $replysubject, $replymessage, $headers);
}
?>