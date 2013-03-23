<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Your Page Title Here :)</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="stylesheets/base.css">
	<link rel="stylesheet" href="stylesheets/skeleton.css">
	<link rel="stylesheet" href="stylesheets/layout.css">

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

</head>
<body>
<?php
$questions = array(
                "emergency" => array( 
                                 "question" => "Is it an Emergency",
                                  "answers" => array(array("Yes", "selfambulance"), array("No", "name2"))
                                ),
                "selfambulance" => array( 
                                 "question" => "Can you get yourself to A&E?",
                                 "answers" => array(array("Yes", "selfdriveyes"), array("No", "ambulance"))
                                ),
                "selfdriveyes" => array( 
                                 "question" => "Is the patient aged under 13 or 13 and older?",
                                 "answers" => array(array("Under 13", "selfdriveunder13"), array("13 and Older", "selfdriveover13"))
                                ),
                "selfdriveunder13" => array( 
                                 "question" => "Go to sick kids?  Map",
                                 //"answers" => array(array("Under 13", "selfdriveunder13"), array("13 and Older", "selfdriveover13"))
                                ),
                "selfdriveover13" => array( 
                                 "question" => "Go to A&E  Map",
                                 //"answers" => array(array("Under 13", "selfdriveunder13"), array("13 and Older", "selfdriveover13"))
                                ),
             );
if ($_GET['number']) {
  $question_no = $_GET['number'];
} else {
  $question_no = "emergency";
}
//print("question_no: " . $question_no);
//print("the question:" . $questions[$question_no]["question"]) . "<<";
?>


	<!-- Primary Page Layout
	================================================== -->

	<!-- Delete everything in this .container and get started on your own site! -->

	<div class="container">
		<div class="sixteen columns">
			<h1 class="remove-bottom" style="margin-top: 40px">NHS Quick Help</h1>
			<h5>from NHS Hack Scotland</h5>
			<hr />
		</div>
		<div class="one-third column">
			<h3><?php print($questions[$question_no]["question"]) ?></h3>
		
<?php

foreach($questions[$question_no]["answers"] as $value) {
  print('<a href="?number='.$value[1].'" class="button">'.$value[0].'</a>');
}
?>
		</div>
<!--
		<div class="one-third column">
			<h3>Three Core Principles</h3>
			<p>Skeleton is built on three core principles:</p>
			<ul class="square">
				<li><strong>A Responsive Grid Down To Mobile</strong>: Elegant scaling from a browser to tablets to mobile.</li>
				<li><strong>Fast to Start</strong>: It's a tool for rapid development with best practices</li>
				<li><strong>Style Agnostic</strong>: It provides the most basic, beautiful styles, but is meant to be overwritten.</li>
			</ul>
		</div>
		<div class="one-third column">
			<h3>Docs &amp; Support</h3>
			<p>The easiest way to really get started with Skeleton is to check out the full docs and info at <a href="http://www.getskeleton.com">www.getskeleton.com.</a>. Skeleton is also open-source and has a <a href="https://github.com/dhgamache/skeleton">project on git</a>, so check that out if you want to report bugs or create a pull request. If you have any questions, thoughts, concerns or feedback, please don't hesitate to email me at <a href="mailto:hi@getskeleton.com">hi@getskeleton.com</a>.</p>
		</div>
-->
	</div><!-- container -->


<!-- End Document
================================================== -->
</body>
</html>
