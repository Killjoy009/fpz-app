<?php 
include 'header.php';
include 'validate-application.php';
?>
<body class="main-content">
 <header>
    <div class="header-content">
        <div class="header-content-inner">
            <h1>We Are Hiring</h1>
        </div>
    </div>
 </header>

<section class="bg-primary">
	<div class="container">
	    <div class="row">
	        <div class="col-lg-8 col-lg-offset-2 text-center">
	            <h2 class="section-heading dark-text">Jobs at FourPointZero, Inc.</h2>
	            <hr class="light">
	            <p class="dark-text">We want someone who loves to do great work, who loves to think, who loves new opportunities, and wants to change the world.</p>
	            <hr class="light">
	            <a href="javascript:void(0)" class="btn btn-default btn-xl btn-padding open-jobs">Oppenings &amp; Opportunities</a>
	        </div>
	    </div>
	</div>
</section>

	<div class="cd-user-modal"> <!-- this is the entire modal form, including the background -->
		<div class="cd-user-modal-container"> <!-- this is the container wrapper -->
			<div class="modal-header">
				<h4>Hello! What position are you applying for?</h4>
			</div>
			<ul>
				<li><a href="javascript:void(0)" class="btn btn-default btn-xl btn-padding">Management Trainee</a></li>
				<li><a href="javascript:void(0)" class="btn btn-default btn-xl btn-padding">Marketing Executive</a></li>
				<li><a href="javascript:void(0)" class="btn btn-default btn-xl btn-padding">Marketing Intern</a></li>
				<li><a href="javascript:void(0)" class="btn btn-default btn-xl btn-padding">Product Manager</a></li>
				<li><a href="javascript:void(0)" class="btn btn-default btn-xl btn-padding">Research Analyst</a></li>
				<li><a href="http://localhost/fpz-app/position/Software-engineer/" class="btn btn-default btn-xl btn-padding">Software Engineer (Web/Mobile)</a></li>
				<li><a href="javascript:void(0)" class="btn btn-default btn-xl btn-padding">Software Engineer Intern</a></li>
				<li><a href="javascript:void(0)" class="btn btn-default btn-xl btn-padding">UI/UX Designer</a></li>
				<li><a href="javascript:void(0)" class="btn btn-default btn-xl btn-padding">UI/UX Designer Intern</a></li>
			</ul>
		</div> <!-- cd-user-modal-container -->
	</div> <!-- cd-user-modal -->
	 <?php include 'footer.php'; ?>
</body>
</html>
