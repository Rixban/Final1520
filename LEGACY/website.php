<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>How To Get Out of Elo Hell</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/scrolling-nav.css" rel="stylesheet">
	
	<!-- Custom CSS -->
	<link href="css/custom.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("#tophide").click(function(){
        $("top").hide();
    });
    $("#topshow").click(function(){
        $("top").show();
    });
	    $("#midhide").click(function(){
        $("mid").hide();
    });
    $("#midshow").click(function(){
        $("mid").show();
    });
	    $("#jghide").click(function(){
        $("jg").hide();
    });
    $("#jgshow").click(function(){
        $("jg").show();
    });
	    $("#supphide").click(function(){
        $("supp").hide();
    });
    $("#suppshow").click(function(){
        $("supp").show();
    });
	    $("#adchide").click(function(){
        $("adc").hide();
    });
    $("#adcshow").click(function(){
        $("adc").show();
    });
});
</script>


</head>

<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Top</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a class="page-scroll" href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#introduction">Introduction</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#mechanics">Mechanics</a>
                    </li>
					<li>
                        <a class="page-scroll" href="#lanes">Lanes</a>
                    </li>
					<li>
                        <a class="page-scroll" href="#phases">Game Phases</a>
                    </li>
					<li>
                        <a class="page-scroll" href="#closing">Closing Remarks</a>
                    </li>
					<li>
                        <a class="page-scroll" href="#links">Links</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Section -->
    <section id="introduction" class="intro-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
				<?php 
					include 'php/intro.php';
				?>   
				 <!-- Intro Section
                    <h1>Scrolling Nav</h1>
                    <p><strong>Usage Instructions:</strong> Make sure to include the <code>scrolling-nav.js</code>, <code>jquery.easing.min.js</code>, and <code>scrolling-nav.css</code> files. To make a link smooth scroll to another section on the page, give the link the <code>.page-scroll</code> class and set the link target to a corresponding ID on the page.</p>
                    <a class="btn btn-default page-scroll" href="#about">Click Me to Scroll Down!</a>
					-->
                </div>
            </div>
        </div>
    </section>

    <!-- Mechanics Section -->
    <section id="mechanics" class="mechanics-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
				<?php
					include 'php/mechanics.php';
				?>
                </div>
            </div>
        </div>
    </section>

    <!-- Lanes Section -->
    <section id="lanes" class="lanes-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <?php
						include 'php/lanes.php';
						?>
                </div>
            </div>
        </div>
    </section>
	
    <!-- Phases Section -->
    <section id="phases" class="phases-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <?php 
					include 'php/phases.php';
					?>
                </div>
            </div>
        </div>
    </section>
	
    <!-- Closing Section -->
    <section id="closing" class="closing-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <?php
					include 'php/closing.php';
					?>
                </div>
            </div>
        </div>
    </section>
	
    <!-- Links Section -->
    <section id="links" class="links-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <?php
					include 'php/references.php';
					?>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="cont-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
					<h1>Contact Section</h1>
					<p>If you'd like to receive updates from the site, enter your e-mail below</p>
					<?php
					include 'php/createdb.php';
					?>
                    <form action = "website.php"
									method = "POST">
	
						<b><p>What is your e-mail?</b>
						<input type = "text" name = "femail" size = "50" maxlength = "50"></p>
						<br/>
						<input type = "submit" value = "Submit">
					</form>
					<?php
						if ($_SERVER["REQUEST_METHOD"] == "POST"){
							$email = $_POST['femail'];
							if(strlen($email) == 0){
								header("Refresh:0");
							}
							else{
								// Create connection
								$db = new mysqli('localhost', 'albert', 'albert', 'albert');
								// Check connection
								if ($db->connect_error) {
									die("Connection failed: " . $db->connect_error);
								} 

								$query = "SELECT * FROM EMail WHERE email.email = '$email'";
								$result = $db->query($query);
								if($result->num_rows == 0){
									$sql = "INSERT INTO `EMail` (`email`) VALUES ('$email')";
								$db->query($sql);
								}
								$db->close();
							}
						}
					?>
                </div>
            </div>
        </div>
    </section>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Scrolling Nav JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/scrolling-nav.js"></script>

</body>

</html>
