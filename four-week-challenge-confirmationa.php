<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<title>
		Fancy Email
	</title>
</head>
<body>
	<?php

$to=$_POST['to'];
$recipient=$to;
$from="contact@shelinspires.com";
$subject="Hi Precious Steps To Life";
$message="
<div style='font-family:arial;color:#ff3948;max-width:95%;padding:10px;'>
<div id='header' style='position:relative;max-width:95%'>
    <img src='http://www.stepstolifeclasses.com/images/steps-to-life-logo.png' style='vertical-align:bottom;max-width:17%;'>
        <span id='slogan' style='font-family:arial;color:#2e3e4c;font-size:x-large;max-width;'>SWEAT, PRAY, LEARN, CHANGE</span><br />
        <a href='http://www.stepstolifeclasses.com' style='text-decoration:none;color:#ff3948;font-size:medium;font-family:arial;'>www.stepstolifeclasses.com</a>
</div><br />
<hr style='max-width:95%;'>
    
    <div id='me-row' style='background-color:#ff3948;padding:20px;width:15%;'>
        <img src='http://www.stepstolifeclasses.com/images/precious-head-shot.jpg'
             style='position:relative; vertical-align:top;max-width:100%;float:left;margin-right:25px;'><br />
            
    </div>
    <div style='max-width:80%;'>
    <span style='font-size:xx-large;font-weight:normal;color:#ff3948;'>
             STEPS TO LIFE IS BACK !</span><br />
    Winter Session Starts January 13th, 2014<br />
    <b>Introducing: 'The 90 Day Braekthrough Program'</b><br/>
    <span style='color:#2e3e4c'>Registration Deadline: January 10th
    
    
    </div>
	  
	  <div id='vip-section' >
	      <div id='vip-image' style='width:95%;float:left;'>
	      <img src='http://www.stepstolifeclasses.com/images/new-year-fitness-promo-email.jpg' style='position:relative;max-width:100%;float:left;'>
              </div>
	      <br />
	      <div id='vip-offer' style='color:#ff3948;font-size:x-large;float:left;position:relative;top:0;font-family:arial;'>
	      $100 off New Year Promo
	      
	      </div>
	  </div>
	  <div style='clear:both;'></div>
	  <div id='email-body' style='font-family:arial;color:#2e3e4c;font-size:medium'>
	  Hey guys,<br />
	  How have you been? It's been a while since I've held classes.  I took time off to really take
	  the time to build a solid foundation, as well as to find a place that was more secure and
	  consistent.  I've always had a clear vision of how Steps To Life should operate and the services
	  it should offer.  I'm excited that taking the time to rebuild has allowed me to build a
	  program that models the vision in my head.<br /><br />
	  I think you guys are going to love the new format.<br /><br />
	  
	  <h3 style='color:#ff3948;'>
	  Physical, Mental &amp; Spiritual
	  </h3>
	  <p>The new Steps To Life&trade; incorporates physical, mental &amp; spiritual well being.  Not only will
	  we work out, we will also work through the 'Achieve!' curriculum and workbook.</p>
	  
	  <h3 style='color:#ff3948;'>
	  New 3 Month Program Format
	  </h3>
	  <p>
	  The program is now formatted as 3 month graduating sessions. We are currently recruiting for
	  'The 90 Day Breakthrough' winter/spring sessions. The session starts January 13th, 2013 and
	  ends April 11th, 2013.
	  </p>
	  
	  <h3 style='color:#ff3948;'>
	  New Year Promo - $100 off
	  </h3>
	  <p>
	  <b>
	  Sign Up for the '90 DAY BREAKTHROUGH PROGRAM'
	  </b><br />
	  Reg.<strike>$449</strike> Special Promo $349<br/>
          Offer good until January, 3rd
	  <ul>
	  <li> 90 Day Enrollment in the winter session- January 13th - April 11th</li>
	  <li> Body Redefining Workouts 5-6 days/week</li>
	  <li> Fat Burning Meal Plan </li>
	  <li> Achieve Curriculum &amp; Workbook</li>
	  <li> Weekly Empowerment Sessions </li>
	  </ul>
	  <br />
          </p>
	  
	  
          <div id='signup'style='position:relative;margin-bottom:15px;'>
            <p>
	  <a href='http://www.stepstolifeclasses.com/cleveland-weight-loss-program.html#signup'
	  style='background-color:#ff3948;padding:15px;height:60px;text-decoration:none;color:#ffffff;'>
	  SIGN UP NOW</a>
            </p>
            <br />
            
          </div>
          
          
          
          <div>
            <p>
	    <a href='http://www.stepstolifeclasses.com/cleveland-weight-loss-program.html'
	  style='text-decoration:none;background-color:#2e3e4c;padding:15px;color:#ffffff;'>
	  LEARN MORE</a>
            </p>
	  <br />
	  <br />
          </div>
	  
	            <div>
            <p>
	    <a href='http://www.stepstolifeclasses.com'
	  style='text-decoration:none;background-color:#2e3e4c;padding:15px;color:#ffffff;'>
	  Visit the New Steps To Life</a>
            </p>
	  
          </div>
	  
	  
	  
          </div>
	  
	  </div>
	 

	 ";



$headers="MIME-Version: 1.0\r\n";
$headers .="Content-type:text/html;charset=iso-8859-1\r\n";
$headers .="Content-Transfer-Encoding:7bit\r\n";
$headers .="From:" . $from."\r\n";


//$mailsent=
 mail($recipient,$subject,$message,$headers);

{
	echo "Mail sent to $recipient yay";
}
else
{
	echo "error";
}
?>
                                
</body>
</html>

