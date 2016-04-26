<?php 
	include '../../header.php';
	include 'send-application.php';
	$software_questions = file_get_contents("../../partials/software-engineer-questions.json");
	$json = json_decode($software_questions,true);
?>
<body class="main-content"><!--Main content Start Here -->
 <header class="bg-r2">
    <div class="header-content">
        <div class="header-content-inner">
            <h1>So you wanna join the team.</h1>
            <p>Part of our core value is efficiency in everything we do. This includes how we add new members to the team. We built this tool to help us efficiently filter the winners from the posers. Shall we start?</p>
        </div>
    </div>
 </header>

<section class="bg-primary">
	<div class="container">
	    <div class="row">
	        <div class="col-lg-8 col-lg-offset-2 text-center">
	            <h2 class="section-heading dark-text">You applied as a Software Engineer (Web/Mobile).</h2>
	            <hr class="light">
	        </div>
	        
	    </div>
	    <div class="row">
	    	<div class="col-lg-6 col-lg-offset-3 text-center">
	        	 <a href="javascript:void(0)" type="button"  class="btn btn-default btn-xl btn-padding btn-block" data-toggle="modal" data-target=".about">Who we are. What we do.</a>
	            <a href="javascript:void(0)" type="button"  class="btn btn-default btn-xl btn-padding btn-block" data-toggle="modal" data-target=".round-1">Let's Start <i class="fa fa-angle-double-right"></i></a>
	        </div>
	    </div>
	</div>
</section>

<div class="modal fade bs-example-modal-sm about" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
 		<div>
		  <!-- Nav tabs -->
		  <ul class="nav nav-tabs nav-justified" role="tablist">
		    <li role="presentation" class="active tabs-full-width"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">We are FourPoint.Zero</a></li>
		    <li role="presentation" class="tabs-full-width"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">We need a <?php echo $title; ?></a></li>
		  </ul>

		  <!-- Tab Content -->
		  <div class="tab-content">
		    <div role="tabpanel" class="tab-pane active" id="home">
		    	<div class="modal-header">
					<h4>We are FourPoint.Zero</h4>
				</div>
				<div class="modal-body">
					<p class="justified text-sub">Let us first introduce ourselves.</p>
					<p class="justified">We're a small, energetic team that is building products that actually adds value to a lot of people. We're small enough to be focused and effective even while we're growing quickly. We put a lot of effort into making our home base a fun place for working and getting things done; we only hire when the timing and person are right.</p> 
					<p class="justified">FourPoint.Zero is a small technology company, bootstrapped, profitable, and chaotic good. </p>
					<p class="justified">We want someone who loves to do great work, who loves to think, who loves new opportunities, and who wants to change the world.</p>

					<p class="justified text-sub">Our Culture.</p>
					<p class="justified">FourPoint.Zero's culture is focused on entrepreneurship. No matter how good you are when you come in, it is our goal to make every day a day for you to challenge yourself, find opportunities to create new business, and make yourself some money. Coding, programming, marketing, show-and-tell - whatever it takes, we want you to do it to make you a success.</p>
					<p class="justified">We don't offer competitive salaries, and fancy health benefits... but we offer stock options, partnerships, real world learning experience, flexible hours, a fun and revitalizing work place, and opportunities for you to follow your entrepreneurial dreams.</p>
					<p class="justified">
						<ul>
							<li>Work on products that affects people every day.</li>
							<li>Work with a bunch of cool people who love doing what they do.</li>
							<li>Need a break? Get out of the office, swim, jog, play video games, chill.</li>
							<li>Innovation Fridays! Fridays are not normal work days - you can take the half day off, work on your own project/product, or work your sidelines.</li>
						</ul>
					</p>
					<p class="justified">Please DO NOT apply if:</p>
						<ul>
							<li>You'd feel like a fish out of water without a well defined traditional corporate structure.</li>
							<li>If you do not have an entrepreneurial bone in you.</li>
							<li>If you see yourself selling ice cream, instead of changing the world.</li>
							<li>You are not a risk taker. We want the best people that are aggressive, not afraid of taking chances, and play offense all the time.</li>
						</ul>
				</div>
		    </div>
		    <div role="tabpanel" class="tab-pane" id="profile">
		    	<div class="modal-header">
					<h4>We need a Software Engineer</h4>
				</div>
				<div class="modal-body">
					
					<p class="justified">We are looking for Computer Science/Engineering or Information Systems major with a passion for technology, a hunger for knowledge and a desire to work in a startup environment.</p>
					
					<p class="justified">We're seeking our next team member who will build world-class product-oriented systems that will serve as the compass for nearly all strategic company decisions. This individual should have a deep desire to work with new web technologies and processes to guide product decisions and to strengthen the end-user voice within our products.</p>
					
					<p class="justified">As a contributing engineer on the team, you will have a direct impact on development and enhancement of the products that will fulfill FourPointZero's mission to create world-class products.</p>

					<p class="justified text-sub">What you will do includes:</p>
					<ul>
						<li>Web Applications, and Mobile Applications</li>
						<li>Front end/UI development and design</li>
						<li>Systems architecture</li>
						<li>YData gathering and analytics</li>
						<li>Developing cool features for thousands of users</li>
						<li>Debugging interesting problems</li>
						<li>Exploring new technologies</li>
						<li>Other random stuff that we come up with</li>
					</ul>

					<p class="justified text-sub">You will be measured by your ability to:</p>
					<ul>
						<li>Work with a diverse team to cultivate ideas, foster user-centric thinking, and positively influence product direction</li>
						<li>Listen deeply to team, product, and business issues and make data and research suggestions that will best inform strategic-thinking</li>
					</ul>

					<p class="justified text-sub">You should be very familiar with:</p>
					<ul>
						<li>Client-side Javascript</li>
						<li>HTML/CSS</li>
						<li>PHP (or another scripting language, like perl, ruby or python)</li>
						<li>Relational databases (such as MySQL, PostgreSQL, DB2, Oracle)</li>
					</ul>

					<p class="justified text-sub">Ideally, you'll:</p>
					<ul>
						<li>Be able to solve problems in a creative manner</li>
						<li>Be able to get things done</li>
						<li>Be willing to work hard for a huge upside</li>
						<li>Contribute fun to a working environment</li>
						<li>Have good taste in building for the web</li>
						<li>Be willing to work on a variety of projects, platforms and languages</li>
						<li>Be willing to learn new skills</li>
					</ul>

					<p class="justified text-sub">You'll be able to:</p>
					<ul>
						<li>Have a meaningful impact on the company's future, and share in the rewards accordingly</li>
						<li>Create features quickly and without any red tape</li>
						<li>Work on a product that impacts a lot of people</li>
						<li>Work in a fun, fast paced start-up environment</li>
						<li>Be on a smart team that gets a lot done</li>
					</ul>

					<p class="justified">We are committed to rewarding our staff with monthly profit-sharing bonuses that is tied in to performance and project margins. We're looking out for passionate geniuses to form our core team.</p>

					<p class="justified">Bottom line? We're growing fast. Join our crew and have some fun making money with us.</p>

					<p class="justified text-sub">Requirements</p>
					<ul>
						<li>Candidate must possess at least a Bachelor's/College Degree , Computer Science/Information Technology, Engineering (Computer/Telecommunication) or equivalent.</li>
						<li>Must be willing to learn web application development</li>
						<li>Understanding of the internet industry and competing products</li>
						<li>The product and business savvy mindset to pinpoint what metric matters most and the communication skills to convey those thoughts to others</li>
						<li>Ability to communicate design decisions, code walk-throughs, bugs, and what to have for lunch thoroughly, clearly, and concisely</li>
						<li>Outstanding team skills with the desire to work with other engineers to ensure product consistency and maintainability</li>
						<li>A knack for reverse engineering</li>
						<li>Ability to adapt, take critical feedback, and execute quickly on tasks</li>
						<li>Previous experience building a website from start to finish</li>
						<li>Required skill(s): PHP, MySQL, HTML, CSS</li>
						<li>Preferred skill(s): Flash, AJAX, JAVA, C++, C#</li>
						<li>A sense of humo(u)r =p</li>
						<li>Applicants must be willing to work in Taguig City</li>
					</ul>

					<p class="justified text-sub">So, what's next?</p>
					<p class="justified">We are currently filtering applicants for this position. The ensuing questions will help us determine who would best fit the position.</p>
					<a href="javascript:void(0)" type="button"  class="btn btn-default btn-xl btn-padding btn-block" data-toggle="modal" data-target=".round-1" data-dismiss="modal">Let's Start <i class="fa fa-angle-double-right"></i></a>
				</div>
		    </div>
		  </div>
		</div>
 	</div>
  </div>
</div>

<!-- Appication Form  --> 
<div class="modal fade bs-example-modal-sm round-1" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      	<div class="modal-header">
			<h4><?php echo $title; ?> Initial Questionnaire</h4>
		</div>
		<div class="round-2-form">
			<form id="apply-form" class="form" method="post"  action="<?php echo $_SERVER['PHP_SELF'];?>">
				<fieldset class="form-group">
					<input class="form-control" type="text" placeholder="First name" name="firstname" required></input>
					<input class="form-control" type="text" placeholder="Last name" name="lastname" required></input>
					<input class="form-control" type="email" placeholder="Email Address" name="email" required></input>
					<input class="form-control" type="text" placeholder="Contact Number" name="contact" required></input>
					<p>Resume(PDF, DOC, DOCX)</p>
					<input class="form-control" type="file" accept="application/vnd.openxmlformats-officedocument.wordprocessingml.document"></input>
				</fieldset>
			
				<hr/>
				 <fieldset class="form-group">
	    			<label for="exampleTextarea">Try to answer as many as you can.</label>
	    			<?php
	    				$output = "";
	    				foreach ($json['questions'] as $questions) {
	    					$output .= "<p>".$questions['question']."</p>";
	    					$output .= $questions['answer'];
	    				}
	    				$output .= "";
	    				echo $output;
	    			?>
	  			</fieldset>
	  			<fieldset class="form-group">
	  				<input type="submit" class="btn btn-default col-lg-offset-3 btn-submit" name="apply" value="Submit"></input>
	  			</fieldset>
  			</form>
		</div>
    </div>
  </div>
</div>


<?php include '../../footer.php'; ?>
</body>	