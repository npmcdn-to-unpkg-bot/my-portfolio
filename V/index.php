<!DOCTYPE html>
<html lang="en">
<head>
<?php
// NOTE: this page must be saved as a .php file.
// And your server must support PHP 5.3+ PHP Mail().
// Define variables and set to empty values
$result = $name = $email = $message = $human = "";
$errName = $errEmail = $errMessage = $errHuman = "";
    if (isset($_POST["submit"])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $human = intval($_POST['human']);
         //valid address on your web server
        $from = 'webmaster@yourdomain.com ';
        //your email address where you wish to receive mail
        $to = 'you@yourdomain.com'; 
        $subject = 'MESSAGE FROM YOUR WEB SITE';
        $headers = "From:$from\r\nReply-to:$email";
        $body = "From: $name\n E-Mail: $email\n Message: $message";
// Check if name is entered
if (empty($_POST["name"])) {
$errName = "Please enter your name.";
} else {
    $name = test_input($_POST["name"]);
}
// Check if email is entered
if (empty($_POST["email"])) {
$errEmail = "Please enter your email address.";
} else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is valid format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $errEmail = "Invalid email format.";
    }
}

//Check if message is entered
if (empty($_POST["message"])) {
$errMessage = "Please enter your message.";
} else {
    $message = test_input($_POST["message"]);
}
//Check if simple anti-bot test is entered
if (empty($_POST["human"])) {
$errHuman = "Please enter the sum.";
} else {
     if ($human !== 12) {
     $errHuman = 'Wrong answer. Please try again.';
        }
}
// If there are no errors, send the email & output results to the form
if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
    if (mail ($to, $subject, $body, $from)) {
        $result='<div class="alert alert-success"><h2><span class="glyphicon glyphicon-ok"></span> Message sent!</h2><h3>Thank you for contacting us. Someone will be in touch with you soon.</h3></div>';
    } else {
        $result='<div class="alert alert-danger"><h2><span class="glyphicon glyphicon-warning-sign"></span> Sorry there was a form processing error.</h2> <h3>Please try again later.</h3></div>';
       }
    }
}
//sanitize data inputs   
function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   $data = (filter_var($data, FILTER_SANITIZE_STRING));
   return $data;
}
//end form processing script
?>
  <title>Background Test</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- Bootstrap CSS -->
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Fonts -->
  <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="fonts/stylesheet.css" type="text/css" charset="utf-8" />
  
  <!-- FAVICON -->  <!-- WILL NEED TO CHANGE DIRECTORY FOLDER LINK -->
  <link rel="shortcut icon" sizes="16x16 24x24 32x32 48x48 64x64" href="img/favicon.ico">

  <!-- Custom CSS -->
  <link rel="stylesheet" type="text/css" href="css/mystyle.css" />
  <!-- <script type="text/javascript" src="js/modernizr.custom.29473.js"></script> -->
</head>

<body>
	<div class="container">
		<div class="content">
			<!-- <div class="jumbotron"> -->
				<div class=" letters">
					<span class="c">c</span>
					<span class="one">hristine</span>
					<span class="t">t</span>
					<span class="two">rant</span>
				</div>
			<!-- </div> -->
			<div style="clear: both"></div>

			<div class="header header_1">
				<p>"Everything stinks till it's finished." ~ Dr. Seuss</p>
			</div>
			<svg class="slanted" viewbox="0 0 100 5" preserveAspectRatio="none">
				<polygon class="shape1" points="0,0 100,0 0,5, 0,15" /></polygon>
			</svg>

			<div class="section-1">
				<div class="row">
					<div class="col-xs-2">	
						<span class="fa-stack fa-2x">
							<i class="fa fa-square fa-stack-2x"></i>
							<i class="fa fa-user fa-stack-1x fa-inverse"></i>
						</span>
					</div>
					<div class="col-xs-10">
					<h3>Hi there!</h3>
					<p>I'm Christine, I am a web &amp; print designer / front-end developer.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-2">
						<span class="fa-stack fa-2x">
							<i class="fa fa-square fa-stack-2x"></i>
							<i class="fa fa-envelope-o fa-stack-1x fa-inverse"></i>
						</span>
					</div>
					<div class="col-xs-10">
						<h3>christinetrant@gmail.com</h3>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-2">
						<span class="fa-stack fa-2x">
							<i class="fa fa-square fa-stack-2x"></i>
							<i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
						</span>
					</div>
					<div class="col-xs-10">
						<h3>I'm a London-Irish girl based in Perth, Australia.</h3>
						<p>I love books, adore coffee, have a passion for anything creative. I am a Pinterest addict &amp; a gadget junkie.  I have a BSc. in Computer Science and a Higher National Diploma in Digital Media trying to make my imprint on the digital world.</p>
					</div>
				</div>
			</div>

			<div class="section-2">
				<div class="header header_2">
					<p>About Me / My Resume</p>
				</div>
				<svg class="slanted" viewbox="0 0 100 5" preserveAspectRatio="none">
					<polygon class="shape2" points="0,0 100,0 100,5, 0,0" /></polygon>
				</svg>

				<div class="row">
					<div class="col-xs-8">
					<h3>Column 1</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
					<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
					</div>
					<div class="col-xs-4"><h3>CV</h3><p>View my CV PDF link</p></div>
				</div>
			</div>

			<div class="section-3">
				<div class="header header_3">
					<p>Portfolio</p>
				</div>
				<svg class="slanted" viewbox="0 0 100 5" preserveAspectRatio="none">
					<polygon class="shape3" points="0,0 100,0 0,5, 0,15" /></polygon>
				</svg>

				<div class="row">
					<div class="col-lg-12">
					  <nav id="filters" role='navigation'>
						<ul>
						  <li><button class="first-nav" data-filter="*">All</button></li><!--
						  --><li><button  data-filter=".web">Web</button></li><!--
						  --><li><button data-filter=".illustrations">Illustrations</button></li><!--
						  --><li><button class="last-nav" data-filter=".misc">Misc.</button></li>
						</ul>
					  </nav>                  
					</div>   
				</div>

				<div id="container" class="portfolio-thumbs row">
				  <div class="col-md-3 col-xs-6 thumb item illustrations web">
  					<a class="thumbnail" href="#2col" data-toggle="modal" title="your title">
  					  <img class="img-responsive" src="images/400x300.png" alt="fghrthysrtsr">
  					</a>
          </div>
        	<div class="col-md-3 col-xs-6 thumb item illustrations web">
        		<a class="thumbnail" href="#2col" data-toggle="modal" title="your title">
        			<img class="img-responsive" src="images/400x300.png" alt="fghrthysrtsr">
        		</a>
        	</div>
        	<div class="col-md-3 col-xs-6 thumb item illustrations web">
        		<a class="thumbnail" href="#2col" data-toggle="modal" title="your title">
        			<img class="img-responsive" src="images/400x300.png" alt="fghrthysrtsr">
        		</a>
        	</div>
        	<div class="col-md-3 col-xs-6 thumb item misc">
        		<a class="thumbnail" href="#2col" data-toggle="modal" title="your title">
        			<img class="img-responsive" src="images/400x300.png" alt="fghrthysrtsr">
        		</a>
        	</div>
        	<div class="col-md-3 col-xs-6 thumb item misc">
        		<a class="thumbnail" href="#2col" data-toggle="modal" title="your title">
        			<img class="img-responsive" src="images/400x300.png" alt="fghrthysrtsr">
        		</a>
        	</div>
        	<div class="col-md-3 col-xs-6 thumb item illustrations misc">
        		<a class="thumbnail" href="#2col" data-toggle="modal" title="your title">
        			<img class="img-responsive" src="images/400x300.png" alt="fghrthysrtsr">
        		</a>
        	</div>
        	<div class="col-md-3 col-xs-6 thumb item web">
        		<a class="thumbnail" href="#2col" data-toggle="modal" title="your title">
        			<img class="img-responsive" src="images/400x300.png" alt="fghrthysrtsr">
        		</a>
        	</div>
        	<div class="col-md-3 col-xs-6 thumb item web">
        		<a class="thumbnail" href="#2col" data-toggle="modal" title="your title">
        			<img class="img-responsive" src="images/400x300.png" alt="fghrthysrtsr">
        		</a>
        	</div>
        	<div class="col-md-3 col-xs-6 thumb item illustrations">
        		<a class="thumbnail" href="#2col" data-toggle="modal" title="your title">
        			<img class="img-responsive" src="images/400x300.png" alt="fghrthysrtsr">
        		</a>
        	</div>
        	<div class="col-md-3 col-xs-6 thumb item illustrations">
        		<a class="thumbnail" href="#2col" data-toggle="modal" title="your title">
        			<img class="img-responsive" src="images/400x300.png" alt="fghrthysrtsr">
        		</a>
        	</div>
        	<div class="col-md-3 col-xs-6 thumb item web">
        		<a class="thumbnail" href="#2col" data-toggle="modal" title="your title">
        			<img class="img-responsive" src="images/400x300.png" alt="fghrthysrtsr">
        		</a>
        	</div>
        	<div class="col-md-3 col-xs-6 thumb item web">
        		<a class="thumbnail" href="#2col" data-toggle="modal" title="your title">
        			<img class="img-responsive" src="images/400x300.png" alt="fghrthysrtsr">
        		</a>
        	</div>
        	<div class="col-md-3 col-xs-6 thumb item web">
        		<a class="thumbnail" href="#2col" data-toggle="modal" title="your title">
        			<img class="img-responsive" src="images/400x300.png" alt="fghrthysrtsr">
        		</a>
        	</div>
        	<div class="col-md-3 col-xs-6 thumb item web">
        		<a class="thumbnail" href="#2col" data-toggle="modal" title="your title">
        			<img class="img-responsive" src="images/400x300.png" alt="fghrthysrtsr">
        		</a>
        	</div>
        	<div class="col-md-3 col-xs-6 thumb item web">
        		<a class="thumbnail" href="#2col" data-toggle="modal" title="your title">
        			<img class="img-responsive" src="images/400x300.png" alt="fghrthysrtsr">
        		</a>
        	</div>
        </div>

        <div style="clear: both"></div>


        <!-- CONTACT -->
        <div class="section-4">
				  <div class="header header_4">
				    <p>Contact</p>
				  </div>
  				<svg class="slanted" viewbox="0 0 100 5" preserveAspectRatio="none">
  					<polygon class="shape4" points="0,0 100,0 100,5, 0,0" /></polygon>
  				</svg>

          
          <!-- Contact Code -->
          <div class="row omb_row-sm-offset-3">
            <div class="col-xs-12 col-sm-6">  
              <form class="omb_loginForm" action="" autocomplete="off" method="POST">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
                  <input type="text" class="form-control" name="username" placeholder="email address">
                </div>
                
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
                  <input  type="password" class="form-control" name="password" placeholder="Password">
                </div>

                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>
                  <textarea class="form-control" name="comment" placeholder="Project Description"></textarea>
                </div>

                <button type="submit" class="btn btn-warning" >Send <span class="glyphicon glyphicon-send"></span></button>
        
              </form>
            </div>
          </div>
          <!-- /Contact Code -->






















<div class="col-md-8 center-block">

<h3>Responsive Contact Form</h3>
<p class="required small">* = Required fields</p>


<!--begin HTML Form-->
<form class="form-horizontal" role="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" autocomplete="off">

<div class="form-group">
<!-- <label for="name" class="col-sm-3 control-label"><span class="required">*</span> Name:</label> -->
<div class="col-sm-12 contact-style">
<input type="text" class="form-control" id="name" name="name" placeholder="First & Last" value="<?php echo $name;?>">
<span class="required small"><?php echo $errName;?></span> 
</div>
</div>

<div class="form-group">
<!-- <label for="email" class="col-sm-3 control-label"><span class="required">*</span> Email: </label> -->
<div class="col-sm-12 contact-style">
<input type="email" class="form-control" id="email" name="email" placeholder="you@domain.com" value="<?php echo $email;?>">
<span class="required small"><?php echo $errEmail;?></span>
</div>
</div>


<div class="form-group">
<!-- <label for="message" class="col-sm-3 control-label"><span class="required">*</span> Message:</label> -->
<div class="col-sm-12 contact-style">
<textarea class="form-control" row="4" name="message" placeholder="Tell us your story"><?php echo $message;?></textarea>
<span class="required small"><?php echo $errMessage;?></span>
</div>
</div>

<div class="form-group">
<label for="human" class="col-sm-3 control-label"><span class="required">*</span> Human Test:</label>
<div class="col-sm-4">
<h3 class="human">6 + 6 = ?</h3>
<input type="text" class="form-control" id="human" name="human" placeholder="Your Answer" value="<?php echo $human;?>">
<span class="required small"><?php echo $errHuman;?></span>
</div>
</div>

<div class="form-group">
<div class="col-sm-offset-3 col-sm-6 col-sm-offset-3">

<button type="submit" id="submit" name="submit" class="btn btn-warning">Send<span class="glyphicon glyphicon-send"></span></button>


</div>
</div>
<!--end Form--></form>
<!--when submit button is clicked, show results here-->
<div class="form-group">
<div class="col-sm-10 col-sm-offset-2">
<?php echo $result;?>
</div>
</div>
<!--end col block--></div>

























  				
  			</div>

		    <footer>
				  <p class="text-muted">All images &copy; Christine Trant | <a class="text-muted" href="http://ie.linkedin.com/in/christinetrant">LinkedIn</a> | <a class="text-muted" href="http://www.pinterest.com/christinetrant/">Pinterest</a></p>
        </footer>
      </div>

      <!--##### Bootstrap Core Javascript ##### -->
      <!-- Placed at the end of the document so the pages load faster -->


      <!-- #2 column test dialog box Script -->
      <div class="modal fade" id="2col" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-body">
		          <a class="btn btn-portfolio-modal pull-right" data-dismiss="modal">X</a>
		          <div class="row portfolio-modal">
  		          <!-- Column 1 -->
  		          <div class="col-xs-5 portfolio-modal-text">
  		            <h1>Title</h1>
                  <hr>
                  <p>My text goes here. Cupcake ipsum dolor sit amet sweet. Sugar plum topping gummies I love chupa chups.</p>
  		          </div>
  		          <!-- Column 2 -->
  		          <div class="col-xs-7">
                  <img class="img-responsive" src="images/400x300.png" alt="">
                </div>
            </div>
          </div>
        </div>
      <!-- End #2 column Dialog Box Script -->
    </div>



    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/2.2.0/isotope.pkgd.min.js'></script>
    <script src="js/isotope.js"></script>
  </div>
</body>
</html>