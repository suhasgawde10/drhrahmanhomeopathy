<?php
include 'assets/common-includes/Constants.php';

define("MAIL_FROM_NAME", "Dr Habibur Rahman");
define("MAIL_FROM_EMAIL", "drrahman7@gmail.com");
require 'sendMail/sendMail.php';


$alert_status = false;
$failed_status = false;

function sendMail($toName, $toEmail, $subject, $message)
{
    $sendMail = new sendMailSystem();
    $status = false;
    $sendMailStatus = $sendMail->sendMail($toName, $toEmail, MAIL_FROM_NAME, MAIL_FROM_EMAIL, $subject, $message);
    if ($sendMailStatus) {
        $status = true;
    } else {
        $status = false;
    }
    return $status;
}

if (isset($_POST['btn_submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['contact_no'];
    $form_message = $_POST['form_message'];
    $address = $_POST['address'];
    $subject = $_POST['subject'];
    if($subject ==''){
        $subject ="Enquiry From Website.";
    }
    $message = '<html><body>';
    $message .= '<table style="border-collapse: collapse;" cellpadding="10" border="1">';
    $message .= '<tr style="background: #eee; text-align: center;" ><td colspan="2">';
    $message .= '<b>Enquiry Form</b>';
    $message .= '</td></tr>';
    $message .= "<tr style='background: #eee;'><td>Name:- </td>";
    $message .= "<td>" . $name . "</td></tr>";
    $message .= "<tr style='background: #eee;'><td>Number:- </td>";
    $message .= "<td>" . $phone . "</td></tr>";
    $message .= "<tr style='background: #eee;'><td>Email:- </td>";
    $message .= "<td>" . $email . "</td></tr>";
    $message .= "<tr style='background: #eee;'><td>Problem Or Message:- </td>";
    $message .= "<td>" . $form_message . "</td></tr>";
    $message .= "<tr style='background: #eee;'><td>Address:- </td>";
    $message .= "<td>" . $address . "</td></tr>";
    $message .= "</table>";
    $message .= "</body></html>";

    $from = MAIL_FROM_EMAIL;
    $to = MAIL_FROM_EMAIL;


   /* $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= 'From: '.MAIL_FROM_NAME.'<'.$from.'>' . "\r\n";

    $sendMail = mail($to, $subject, $message, $headers);*/
     $sendMail = sendMail(MAIL_FROM_NAME, MAIL_FROM_EMAIL, $subject, $message);
    if ($sendMail) {
        $alert_status = true;
    } else {
        $failed_status = true;
    }

}

?>

<!doctype html>
<html class="no-js" lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Contact |Dr. Habibur Rahman </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/favicon.ico">

    <!-- all css here -->
    <?php
    include 'assets/common-includes/header_includes.php'
    ?>
</head>
<body>

<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<?php
include 'assets/common-includes/header.php'
?>


<div class="page-area">
    <div class="breadcumb-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="breadcrumb text-center">
                    <div class="section-headline white-headline text-center">
                        <h2>Contact us</h2>
                    </div>
                    <ul>
                        <li class="home-bread">Home</li>
                        <li>Contact us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End breadcumb Area -->
<!-- Start contact Area -->
<div class="contact-page area-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="contact-head">
                    <h3>Contact us</h3>
                    <p>Please feel free to fill up the form given below in case you wish us to assist you with any cure for any problems you may be having.</p>
                    <div class="contact-icon">
                        <div class="contact-inner">
                            <h5>Address :</h5>
                            <a href="#"><i class="fa fa-map"></i><span>3A Natore Park,2nd Road Kolkata 700039 India.</span></a>
                            <a href="#"><i class="fa fa-phone"></i><span>9432211889 / 9875681382 / 9331077599</span></a>
                            <a href="mailto:drrahman7@gmail.com"><i class="fa fa-envelope"></i><span>drrahman7@gmail.com</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End contact icon -->
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="contact-form">
                    <div class="row">
                        <form method="POST" action="" class="contact-form">
                            <?php if ($alert_status) {
                                ?>
                                <div class="alert alert-success">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    <strong>Success!</strong> Message Sent Successfully!
                                </div>
                            <?php }
                            if ($failed_status) {
                                ?>
                                <div class="alert alert-danger">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    <strong>Failed!</strong> Issue while sending mail please try after some time!
                                </div>
                            <?php } ?>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Name</label>
                                <input type="text" id="name" name="name" class="form-control" placeholder="Name" required data-error="Please enter your name">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Email</label>
                                <input type="email" class="email form-control" name="email" id="email" placeholder="Email" required data-error="Please enter your email">
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Contact Number</label>
                                <input type="number" class="email form-control" name="contact_no"  id="email" placeholder="Contact Number" required data-error="Please enter your email">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Subject</label>
                                <input type="text" id="msg_subject" name="subject" class="form-control" placeholder="Subject" required data-error="Please enter your message subject">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <label>Problem or Message</label>
                                <textarea id="message" rows="3" name="form_message" placeholder="Please elaborate on your physical and mental condition as much as you can" class="form-control" required data-error="Please elaborate on your physical and mental condition as much as you can"></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <label>Address</label>
                                <textarea id="message" rows="3" name="address" placeholder="Enter Address" class="form-control" required data-error="Please elaborate on your physical and mental condition as much as you can"></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                <button type="submit" name="btn_submit" class="contact-btn">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- End contact Form -->
        </div>
    </div>
</div>
<!-- Start contact Area -->
<div class="map-area">
    <div class="container-full">
        <div class="row">
            <!-- Start contact icon column -->
            <div class="col-md-12 col-sm-12 col-xs-12">
                <!-- Start Map -->
                <div class="map-area">
                    <iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1842.726593207!2d88.37695891515804!3d22.524690317533786!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a0276c83ae864a9%3A0x1c6e995604e7f96d!2sBedia%20Danga%202nd%20Ln%2C%20Nator%20Park%2C%20Kasba%2C%20Kolkata%2C%20West%20Bengal!5e0!3m2!1sen!2sin!4v1599892839605!5m2!1sen!2sin"  height="450" frameborder="0" style="border:0;width: 100%" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
                <!-- End Map -->
            </div>
        </div>
    </div>
</div>
<!-- Start Footer bottom Area -->
<?php
include 'assets/common-includes/footer.php'
?>


<!-- all js here -->
<?php
include 'assets/common-includes/footer_includes.php'
?>
</body>


</html>
