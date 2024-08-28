<!DOCTYPE html>
<?php
	$myName='Malachi Nance';
	/* 
		Relates to this class, and might be something that I have to 
		consider in terms of cybersecurity.
		I would first consider an intership application first
	*/
	$goalJob='System Administrator';
	$myEmail='nancem1@mymail.nku.edu';
	$myPhone='+1 (502) 537-4840';
	// I don't have a linked in set up, so this is a placeholder
	$myLinkedin='MNance701';
	// This is my actual Git account that I will be using for the class
	$myGit='MNance701';
	// I don't have a personal website, but if this website exists it would be interesting
	$myWebsite='www.Malachi\'sMagicalMansion.com';
	// I made the profile picture into a variable so that it can be edited
	$profilePict="assets/images/profile.jpg";
	// Summary
	/*
		I'm slightly tempted to include my graduation from (insert all 8 Ivy league colleges)
		all in the same year, as well as my 50 years experience in 5 different jobs at once
		to appeal to employers.
	*/
	$experienceSummary='I am currently enrolled in Northern Nentucky University studying for a BSc in Cyber security. I am currently in my second year at Northern Kentucky University. I have no experience in working in IT jobs, but I am active in two clubs at my college: NUKE Robotics and NKCyber. I have some experience in customer service working at a part-time job at Wendy\'s, where I would be put on orders and spend most of my time interacting with customers.';
	// Work experience
	$jobTitle1='Lead Developer';
	$jobDesc1='Job 1 description goes here ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Donec pede justo, fringilla vel.';
	$company1='Startup Hub';
	// Job 1 achievements
	$achieveDesc1='List the achievements here';
	$achieve1='Achievement 1';
	$achieve2='Achievement 2';
	$achieve3='Achievement 3';
	$achieve4='Achievement 4';
	// Other jobs
	$jobTitle2='Senior Software Developer';
	$jobDesc2='Job 2 description goes here ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Donec pede justo, fringilla vel.';
	$company2='Google';
	$achieveDesc2='Achievements for job 2. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.';
	$jobTitle3='Co-Founder & Lead Developer';
	$jobDesc3='Job 3 description goes here ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes.';
	$company3='To-Do Lists';
	$jobTitle4='Web Developer';
	$jobDesc4='Job 4 description goes here ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec. Fusce vulputate eleifend sapien. Vestibulum purus quam, scelerisque ut, mollis sed, nonummy id, metus. Nullam accumsan lorem in dui. Cras ultricies mi eu turpis hendrerit fringilla. Vestibulum.';
	$company4='Amazon';
	// Project 1
	$project1='Creating a dynamic API-Driven eCommerce website';
	$projectImg1='assets/images/Online_Website.png';
	$projectDesc1='I created a website that takes data from an API and injects it into a html skeleton. There are CSS styling issues that I need to fix in order for the application to work on mobile devices.';
	$projectLink1='Link';
	// Project 2
	$project2='Troubleshooting errors with my laptop';
	$projectImg2='assets/images/trojan_screenshot.png';
	$projectDesc2='I have been attempting to fix several issues that have occurred with my laptop. The most recent fix is using the Windows 11 command prompt to fix corrupted files in the laptop\'s camera. Currently I am trying to fix an isssue with my "C" key.';
	$projectLink2='Link';
	// Project 3
	$project3='Creating mods for video games';
	$projectImg3='assets/images/New_Char_1.png';
	$projectDesc3='I have been researching into mod creation for several video games, including Guilty Gear Strive and Rivals of Aether. I have not started on the actual creation of a mod, I have only worked on some set up for the mods.';
	$projectLink3='Link';
	// Languages
	// Unfortunately, I only really know how to speak English
	// I took some Spanish classes in high school though
	$lang1='English';
	$lang2='';
	$lang3='';
	// Interests
	$interest1='Playing the Double Bass';
	$interest2='Dungeons & Dragons';
	$interest3='Videogames';
	// Awards
	// I don't really have too many relevant awards to mention, but I am in some clubs
	$awardName1='NUKE robotics 7th place in the VEXU world conference';
	$awardDesc1='I am part of the NUKE Robotics club, and our team placed 7th in skills at VEXU worlds.';
	$awardName2='Award 2';
	$awardDesc2='Second spot for an award desription';
?>
<html lang="en"> 
	<head>
		<title>
			<?php echo $myName?>'s Resume
		</title>
		
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Your name's resume">
		<meta name="author" content="Your name">    
		<link rel="shortcut icon" href="favicon.ico"> 
		
		<!-- Google Font -->
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
		
		<!-- FontAwesome JS-->
		<script defer src="assets/fontawesome/js/all.min.js"></script>
		
		<!-- Theme CSS -->  
		<link id="theme-style" rel="stylesheet" href="assets/css/pillar-1.css">


	</head> 

	<body>
		<article class="resume-wrapper text-center position-relative">
			<div class="resume-wrapper-inner mx-auto text-start bg-white shadow-lg">
				<header class="resume-header pt-4 pt-md-0">
					<div class="row">
						<div class="col-block col-md-auto resume-picture-holder text-center text-md-start">
							<img class="picture" src=<?php echo $profilePict?> alt="">
						</div><!--//col-->
						<div class="col">
							<div class="row p-4 justify-content-center justify-content-md-between">
								<div class="primary-info col-auto">
									<h1 class="name mt-0 mb-1 text-white text-uppercase text-uppercase"><?php echo $myName?></h1>
									<div class="title mb-3"><?php echo $goalJob?></div>
									<ul class="list-unstyled">
										<li class="mb-2"><a class="text-link" href="#"><i class="far fa-envelope fa-fw me-2" data-fa-transform="grow-3"></i><?php echo $myEmail?></a></li>
										<li><a class="text-link" href="#"><i class="fas fa-mobile-alt fa-fw me-2" data-fa-transform="grow-6"></i><?php echo $myPhone?></a></li>
									</ul>
								</div><!--//primary-info-->
								<div class="secondary-info col-auto mt-2">
									<ul class="resume-social list-unstyled">
										<li class="mb-3"><a class="text-link" href="#"><span class="fa-container text-center me-2"><i class="fab fa-linkedin-in fa-fw"></i></span>linkedin.com/in/<?php echo $myLinkedin?></a></li>
										<li class="mb-3"><a class="text-link" href="#"><span class="fa-container text-center me-2"><i class="fab fa-github-alt fa-fw"></i></span>github.com/<?php echo $myGit?></a></li>
										<li><a class="text-link" href="#"><span class="fa-container text-center me-2"><i class="fas fa-globe"></i></span><?php echo $myWebsite?></a></li>
									</ul>
								</div><!--//secondary-info-->
							</div><!--//row-->
							
						</div><!--//col-->
					</div><!--//row-->
				</header>
				<div class="resume-body p-5">
					<section class="resume-section summary-section mb-5">
						<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Summary</h2>
						<div class="resume-section-content">
							<p class="mb-0"><?php echo $experienceSummary?></p>
						</div>
					</section><!--//summary-section-->
					<div class="row">
						<div class="col-lg-9">
							<section class="resume-section experience-section mb-5">
								<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Work Experience</h2>
								<div class="resume-section-content">
									<div class="resume-timeline position-relative">
										<article class="resume-timeline-item position-relative pb-5">
											
											<div class="resume-timeline-item-header mb-2">
												<div class="d-flex flex-column flex-md-row">
													<h3 class="resume-position-title font-weight-bold mb-1"><?php echo $jobTitle1?></h3>
													<div class="resume-company-name ms-auto"><?php echo $company1?></div>
												</div><!--//row-->
												<div class="resume-position-time">2023 - Present</div>
											</div><!--//resume-timeline-item-header-->
											<div class="resume-timeline-item-desc">
												<p><?php echo $jobDesc1?></p>
												<h4 class="resume-timeline-item-desc-heading font-weight-bold">Achievements:</h4>
												<p><?php echo $achieveDesc1?></p>
												<ul>
													<li><?php echo $achieve1?></li>
													<li><?php echo $achieve2?></li>
													<li><?php echo $achieve3?></li>
													<li><?php echo $achieve4?></li>
												</ul>
												<h4 class="resume-timeline-item-desc-heading font-weight-bold">Technologies used:</h4>
												<ul class="list-inline">
													<li class="list-inline-item"><span class="badge bg-secondary badge-pill">Angular</span></li>
													<li class="list-inline-item"><span class="badge bg-secondary badge-pill">Python</span></li>
													<li class="list-inline-item"><span class="badge bg-secondary badge-pill">jQuery</span></li>
													<li class="list-inline-item"><span class="badge bg-secondary badge-pill">Webpack</span></li>
													<li class="list-inline-item"><span class="badge bg-secondary badge-pill">HTML/SASS</span></li>
													<li class="list-inline-item"><span class="badge bg-secondary badge-pill">PostgresSQL</span></li>
												</ul>
											</div><!--//resume-timeline-item-desc-->

										</article><!--//resume-timeline-item-->
										
										<article class="resume-timeline-item position-relative pb-5">
											
											<div class="resume-timeline-item-header mb-2">
												<div class="d-flex flex-column flex-md-row">
													<h3 class="resume-position-title font-weight-bold mb-1"><?php echo $jobTitle2?></h3>
													<div class="resume-company-name ms-auto"><?php echo $company2?></div>
												</div><!--//row-->
												<div class="resume-position-time">2019 - 2023</div>
											</div><!--//resume-timeline-item-header-->
											<div class="resume-timeline-item-desc">
												<p><?php echo $jobDesc2?></p>
												<h4 class="resume-timeline-item-desc-heading font-weight-bold">Achievements</h4>
												<p><?php echo $achieveDesc2?></p>
												<h4 class="resume-timeline-item-desc-heading font-weight-bold">Technologies used:</h4>
												<ul class="list-inline">
													<li class="list-inline-item"><span class="badge bg-secondary badge-pill">React</span></li>
													<li class="list-inline-item"><span class="badge bg-secondary badge-pill">Redux</span></li>
													<li class="list-inline-item"><span class="badge bg-secondary badge-pill">Django</span></li>
													<li class="list-inline-item"><span class="badge bg-secondary badge-pill">Webpack</span></li>
													<li class="list-inline-item"><span class="badge bg-secondary badge-pill">HTML/SASS</span></li>
													<li class="list-inline-item"><span class="badge bg-secondary badge-pill">MySQL</span></li>
												</ul>
											</div><!--//resume-timeline-item-desc-->

										</article><!--//resume-timeline-item-->
										
										<article class="resume-timeline-item position-relative pb-5">
											
											<div class="resume-timeline-item-header mb-2">
												<div class="d-flex flex-column flex-md-row">
													<h3 class="resume-position-title font-weight-bold mb-1"><?php echo $jobTitle3?></h3>
													<div class="resume-company-name ms-auto"><?php echo $company3?></div>
												</div><!--//row-->
												<div class="resume-position-time">2015 - 2019</div>
											</div><!--//resume-timeline-item-header-->
											<div class="resume-timeline-item-desc">
												<p><?php echo $jobDesc3?></p>
												<h4 class="resume-timeline-item-desc-heading font-weight-bold">Technologies used:</h4>
												<ul class="list-inline">
													<li class="list-inline-item"><span class="badge bg-secondary badge-pill">Django</span></li>
													<li class="list-inline-item"><span class="badge bg-secondary badge-pill">JavaScript</span></li>
													<li class="list-inline-item"><span class="badge bg-secondary badge-pill">Node.js</span></li>
													<li class="list-inline-item"><span class="badge bg-secondary badge-pill">Require.js</span></li>
													<li class="list-inline-item"><span class="badge bg-secondary badge-pill">HTML/SASS</span></li>
												</ul>
											</div><!--//resume-timeline-item-desc-->

										</article><!--//resume-timeline-item-->
										
										<article class="resume-timeline-item position-relative">
											
											<div class="resume-timeline-item-header mb-2">
												<div class="d-flex flex-column flex-md-row">
													<h3 class="resume-position-title font-weight-bold mb-1"><?php echo $jobTitle4?> <small class="text-muted">(Intern)</small></h3>
													<div class="resume-company-name ms-auto"><?php echo $company4?></div>
												</div><!--//row-->
												<div class="resume-position-time">2014 - 2015</div>
											</div><!--//resume-timeline-item-header-->
											<div class="resume-timeline-item-desc">
												<p><?php echo $jobDesc4?></p>
												<h4 class="resume-timeline-item-desc-heading font-weight-bold">Technologies used:</h4>
												<ul class="list-inline">
													<li class="list-inline-item"><span class="badge bg-secondary badge-pill">Ruby on Rails</span></li>
													<li class="list-inline-item"><span class="badge bg-secondary badge-pill">jQuery</span></li>
													<li class="list-inline-item"><span class="badge bg-secondary badge-pill">HTML/LESS</span></li>
													<li class="list-inline-item"><span class="badge bg-secondary badge-pill">MongoDB</span></li>
												</ul>
											</div><!--//resume-timeline-item-desc-->

										</article><!--//resume-timeline-item-->
										
										
									</div><!--//resume-timeline-->
									
									
									
									
									
									
								</div>
							</section><!--//projects-section-->
						</div>
						<div class="col-lg-3">
							<section class="resume-section skills-section mb-5">
								<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Skills &amp; Tools</h2>
								<div class="resume-section-content">
									<div class="resume-skill-item">
										<ul class="list-unstyled mb-4">
											<li class="mb-2">
												<div class="resume-skill-name">Angular</div>
												<div class="progress resume-progress">
													<div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 98%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</li>
											<li class="mb-2">
												<div class="resume-skill-name">React</div>
												<div class="progress resume-progress">
													<div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 94%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</li>
											<li class="mb-2">
												<div class="resume-skill-name">JavaScript</div>
												<div class="progress resume-progress">
													<div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 96%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</li>
											
											<li class="mb-2">
												<div class="resume-skill-name">Node.js</div>
												<div class="progress resume-progress">
													<div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 92%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</li>
											<li class="mb-2">
												<div class="resume-skill-name">HTML/CSS/SASS/LESS</div>
												<div class="progress resume-progress">
													<div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 96%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</li>
										</ul>
									</div><!--//resume-skill-item-->
									<div class="resume-skill-item">
										<h4 class="resume-skills-cat font-weight-bold">Others</h4>
										<ul class="list-inline">
											<li class="list-inline-item"><span class="badge badge-light">DevOps</span></li>
											<li class="list-inline-item"><span class="badge badge-light">Code Review</span></li>
											<li class="list-inline-item"><span class="badge badge-light">Git</span></li>
											<li class="list-inline-item"><span class="badge badge-light">Unit Testing</span></li>
											<li class="list-inline-item"><span class="badge badge-light">Wireframing</span></li>
											<li class="list-inline-item"><span class="badge badge-light">Sketch</span></li>
											<li class="list-inline-item"><span class="badge badge-light">Balsamiq</span></li>
											<li class="list-inline-item"><span class="badge badge-light">WordPress</span></li>
											<li class="list-inline-item"><span class="badge badge-light">Shopify</span></li>
										</ul>
									</div><!--//resume-skill-item-->
								</div><!--resume-section-content-->
							</section><!--//skills-section-->
							<section class="resume-section education-section mb-5">
								<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Education</h2>
								<div class="resume-section-content">
									<ul class="list-unstyled">
										<li class="mb-2">
											<div class="resume-degree font-weight-bold">MSc in Computer Science</div>
											<div class="resume-degree-org">University College London</div>
											<div class="resume-degree-time">2013 - 2014</div>
										</li>
										<li>
											<div class="resume-degree font-weight-bold">BSc Maths and Physics</div>
											<div class="resume-degree-org">Imperial College London</div>
											<div class="resume-degree-time">2010 - 2013</div>
										</li>
									</ul>
								</div>
							</section><!--//education-section-->
							<section class="resume-section reference-section mb-5">
								<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Awards</h2>
								<div class="resume-section-content">
									<ul class="list-unstyled resume-awards-list">
										<li class="mb-2 ps-4 position-relative">
											<i class="resume-award-icon fas fa-trophy position-absolute" data-fa-transform="shrink-2"></i>
											<div class="resume-award-name"><?php echo $awardName1?></div>
											<div class="resume-award-desc"><?php echo $awardDesc1?></div>
										</li>
										<li class="mb-0 ps-4 position-relative">
											<i class="resume-award-icon fas fa-trophy position-absolute" data-fa-transform="shrink-2"></i>
											<div class="resume-award-name"><?php echo $awardName2?></div>
											<div class="resume-award-desc"><?php echo $awardDesc2?></div>
										</li>
									</ul>
								</div>
							</section><!--//interests-section-->
							<section class="resume-section language-section mb-5">
								<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Languages</h2>
								<div class="resume-section-content">
									<ul class="list-unstyled resume-lang-list">
										<li class="mb-2"><span class="resume-lang-name font-weight-bold"><?php echo $lang1?></span> <small class="text-muted font-weight-normal">(Native)</small></li>
										<li class="mb-2 align-middle"><span class="resume-lang-name font-weight-bold"><?php echo $lang2?></span> <small class="text-muted font-weight-normal">(Professional)</small></li>
										<li><span class="resume-lang-name font-weight-bold"><?php echo $lang3?></span> <small class="text-muted font-weight-normal">(Professional)</small></li>
									</ul>
								</div>
							</section><!--//language-section-->
							<section class="resume-section interests-section mb-5">
								<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Interests</h2>
								<div class="resume-section-content">
									<ul class="list-unstyled">
										<li class="mb-1"><?php echo $interest1?></li>
										<li class="mb-1"><?php echo $interest2?></li>
										<li class="mb-1"><?php echo $interest3?></li>
									</ul>
								</div>
							</section><!--//interests-section-->
							
						</div>
					</div><!--//row-->
					<section class="resume-section experience-section mb-5">
						<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Projects</h2>
						<div class="row mt-4">
							<div class="col-md-4">
								<div class="card">
									<img src=<?php echo $projectImg1?> alt="Project 1" class="card-img-top">
									<div class="card-body">
										<h5 class="card-title"><?php echo $project1?></h5>
										<p class="card-text"><?php echo $projectDesc1?></p>
										<a href="btn btn-outline-primary" href="#"><?php echo $projectLink1?></a>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="card">
									<img src=<?php echo $projectImg2?> alt="Project 2" class="card-img-top">
									<div class="card-body">
										<h5 class="card-title"><?php echo $project2?></h5>
										<p class="card-text"><?php echo $projectDesc2?></p>
										<a href="btn btn-outline-primary" href="#"><?php echo $projectLink2?></a>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="card">
									<img src=<?php echo $projectImg3?> alt="Project 3" class="card-img-top">
									<div class="card-body">
										<h5 class="card-title"><?php echo $project3?></h5>
										<p class="card-text"><?php echo $projectDesc3?></p>
										<a href="btn btn-outline-primary" href="#"><?php echo $projectLink3?></a>
									</div>
								</div>
							</div>
						</div>
					</section><!--//projects-section-->
				</div><!--//resume-body-->
				
				
			</div>
		</article> 

		
		<footer class="footer text-center pt-2 pb-5">
			<!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
			<small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart"></i> by <?php echo $myName?></small>
		</footer>

		

	</body>
</html> 

