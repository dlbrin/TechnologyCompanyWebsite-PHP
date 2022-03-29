<?php include "includes/nav.php" ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>EasyTech Company</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>
<body>
	<div class="banner">
		<div class="details">
			<center><img src="assets/img/EasyTechLogos.png" data-aos="flip-left" data-aos-duration="1500"></center>
			<h1 data-aos="zoom-in" data-aos-duration="1500">Start your businesses with us</h1>
			<center><button><a href="#contact">Contact Us</a></button></center>
		</div>
	</div>
	<div class="container">
		<br>
		<br>
		<div class="about-text">
			<h1 data-aos="zoom-in" data-aos-duration="1500">About Easy Tech</h1>
			<h2 data-aos="fade-right" data-aos-duration="1500">EasyTech (ET) is a software company that works in all software fields, based in Kurdistan.</h2>
		</div>
		<div class="about-card">
			<div class="about-card-details" data-aos="zoom-in" data-aos-duration="1500">
				<center><img src="assets/img/UI-XI-Design.svg"></center>
				<h1>UX / UI Design</h1>
				<p>Build the product you need on time with an experienced team that uses a clear and effective design process.</p>
			</div>
			<div class="about-card-details" data-aos="zoom-in" data-aos-duration="1500">
				<center><img src="assets/img/mobile.svg"></center>
				<h1>MOBILE APPLICATIONS DEVELOPMENT</h1>
				<p>Create an impactful mobile app that fits your brand and industry within a shorter time frame.</p>
			</div>
			<div class="about-card-details" data-aos="zoom-in" data-aos-duration="1500">
				<center><img src="assets/img/Dedicated Development.svg"></center>
				<h1>Dedicated Development Team</h1>
				<p>here a loyal software development team with niche skills and deep expertise.</p>
			</div>
		</div>
		<div class="about-card-button">
			<center><a href="#"><button>About Us</button></a></center>
		</div>
	</div>


	<div class="news">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="white" fill-opacity="1" d="M0,288L1440,160L1440,0L0,0Z"></path></svg>
		<h1 data-aos="fade-right" data-aos-duration="1500">News</h1>
		<div class="card">
			<?php
			$query = mysqli_query($db , "SELECT * FROM `news`");
			while($row = mysqli_fetch_assoc($query)){ ?>
			<div class="card-details" data-aos="fade-right" data-aos-duration="1500">
				<center><img src="assets/img/<?php echo $row['image']; ?>"></center>
				<h1><?php echo $row['title']; ?></h1>
				<h2><?php echo $row['date']; ?></h2>
				<center><a href="view-news.php?NewsName=<?php echo $row['title']; ?>"><button>READ MORE</button></a></center>
			</div>
		    <?php } ?>
		</div>
		<center><a href="news.php"><button>SEE ALL</button></a></center>
	</div>
	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffde17" fill-opacity="1" d="M0,32L1440,320L1440,0L0,0Z"></path></svg>

	<div class="our-service" id="service">
		<h2 data-aos="fade-right" data-aos-duration="1500">Our Service</h2>
		<div class="our-service-card">
		<?php
		$query = mysqli_query($db , "SELECT * FROM `our-service`");
		while($row = mysqli_fetch_assoc($query)){ ?>
			<div class="our-service-card-details" data-aos="zoom-in" data-aos-duration="1500">
				<center>
					<img src="assets/img/<?php echo $row['images']; ?>">
					<h1><?php echo $row['title']; ?></h1>
					<p><?php echo $row['content']; ?></p>
				</center>
			</div>
		    <?php } ?>
		</div>
	</div>


	<div class="coustom-app-development">
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="white" fill-opacity="1" d="M0,160L80,154.7C160,149,320,139,480,144C640,149,800,171,960,170.7C1120,171,1280,149,1360,138.7L1440,128L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z"></path></svg>
		<h2 data-aos="fade-right" data-aos-duration="1500">CUSTOM APP DEVELOPMENT</h2>
		<h3>Build a solid app faster with our mobile platform that has pre-made feature modules. Leverage our extensive expertise for an industry-specific solution, or an enterprise suite. More so, add technologies like Blockchain and Augmented Reality to elevate your business security, key operations, and employee productivity.</h3>

		<center>
        <div class="coustom-app-development-details">
    	    <?php
		    $query = mysqli_query($db , "SELECT * FROM `custom-app-development`");
		    while($row = mysqli_fetch_assoc($query)){ ?>
    	    <div class="coustom-app-development-details-images">
    		    <img src="assets/img/<?php echo $row['images']; ?>" data-aos="fade-right" data-aos-duration="1500">
    	    </div>
    	    <div class="coustom-app-development-details-text">
    		    <h1><?php echo $row['title']; ?></h1>
    		    <p><?php echo $row['content']; ?></p>
    		    <a href="view-coustom-app.php?name=<?php echo $row['title']; ?>"><button>READ MORE</button></a>
    	    </div>
            <?php } ?>
        </div>
	</div>

	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffde17" fill-opacity="1" d="M0,96L48,128C96,160,192,224,288,224C384,224,480,160,576,117.3C672,75,768,53,864,85.3C960,117,1056,203,1152,250.7C1248,299,1344,309,1392,314.7L1440,320L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>

	<div class="easy-tech-info">
		<div class="info-text">
			<center><img src="assets/img/love.gif"></center>
			<h1 data-aos="zoom-in" data-aos-duration="1500">180</h1>
			<h2>Happy Client</h2>
		</div>
		<div class="info-text">
			<center><img src="assets/img/complete.gif"></center>
			<h1 data-aos="zoom-in" data-aos-duration="1500">119</h1>
			<h2>Completed Project</h2>
		</div>
		<div class="info-text">
			<center><img src="assets/img/download.jpg"></center>
			<h1 data-aos="zoom-in" data-aos-duration="1500">348782K</h1>
			<h2>Apps Download</h2>
		</div>
		<div class="info-text">
			<center><img src="assets/img/trophy.gif"></center>
			<h1 data-aos="zoom-in" data-aos-duration="1500">17</h1>
			<h2>Our Award</h2>
		</div>
	</div>
	<div class="work-with-us">
		<h1 data-aos="zoom-in" data-aos-duration="1500">Why work with us?</h1>
		<p>Our in house team of experts will plan, design and build you a website and application that works beautifully on every device. Find out more about us. getting your business online and see what works best for you.</p>
		<div class="work-with-us-details">
			<div class="work-with-us-app">
				<center>
				<a href="https://play.google.com/store/apps/developer?id=EasyTech+Company&hl=en"><button><i class="fab fa-android"></i> &nbsp Available On
                Android Store</button></a>
				<a href="https://apps.apple.com/ae/developer/avraz-ibrahim/id1369014437"><button><i class="fab fa-apple"></i> &nbsp Available On
                Apple Store</button></a>
				<a href="#"><button><i class="fab fa-windows"></i> &nbsp Available On
                Windows Store</button></a>
                </center>
			</div>
		</div>
	</div>

	<div class="courses">
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="white" fill-opacity="1" d="M0,96L80,85.3C160,75,320,53,480,85.3C640,117,800,203,960,208C1120,213,1280,139,1360,101.3L1440,64L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z"></path></svg>
		<div class="courses-details">
			<h1 data-aos="zoom-in" data-aos-duration="1500">Learn Software Development and Benefits</h1>
			<p>The benefits of learning to code can be surprisingly wide-ranging. Here are a few of the ways learning to code can benefit you:Coding and programming careers have great earning potential,Demand remains strong for coding-related jobs,Coding ability gives new perspective to problem solving,Learning to code offers career flexibility,Learning to code can be a fun bonding opportunity for families,Coding can be useful in jobs you might not expect.</p>
		</div>
	
		<div class="courses-card">
		<?php
		$query = mysqli_query($db, "SELECT * FROM `courses` WHERE `num` = 0");
		while($row = mysqli_fetch_assoc($query)){?>
			<div class="courses-card-details">
				<img src="assets/img/<?php echo $row['images']; ?>" data-aos="zoom-in" data-aos-duration="1500">
				<h1><?php echo $row['title']; ?></h1>
				<p><?php echo $row['content']; ?></p>
				<a href="view-course.php?name=<?php echo $row['title']; ?>"><button>READ MORE</button></a>
			</div>
		<?php } ?>
		</div>
		<br>
		<center><a href="courses.php"><button>SEE ALL</button></a></center>
	</div>
	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffde17" fill-opacity="1" d="M0,288L120,256C240,224,480,160,720,144C960,128,1200,160,1320,176L1440,192L1440,0L1320,0C1200,0,960,0,720,0C480,0,240,0,120,0L0,0Z"></path></svg>

	<div class="projects" id="projects">
		<h1 data-aos="zoom-in" data-aos-duration="1500">The last project</h1>
		<p data-aos="zoom-in" data-aos-duration="1500">The last project created by team of easy tech company.</p>
	<div id="slideshow">
		<?php
	    $sql = mysqli_query($db, "SELECT * FROM `projects`");
	    while($row = mysqli_fetch_assoc($sql)){
	    	$web = $row['website_link'];
	    	$ios = $row['apple_link'];
	    	$android = $row['android_link'];
	    	?>
        <div class="slide">
            <img src="assets/img/<?php echo $row['images']; ?>">
            <?php 
            if($ios == null){
            }else{?>
            <a href="<?php echo $row['apple_link']; ?>">ios</a>
            <?php } ?>
            <?php 
            if($web == null){
            }else{?>
            	 <a href="<?php echo $row['website_link']; ?>">web</a>
            <?php } ?>
            <?php 
            if($android == null){
            }else{?>
            <a href="<?php echo $row['android_link']; ?>">android</a>
            <?php } ?>
        </div>
        <?php } ?>
    </div>
    </div>
    <?php include "includes/footer.php" ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script>
	$("#slideshow > div:gt(0)").hide();

setInterval(function() { 
  $('#slideshow > div:first')
  .fadeOut(1000)
  .next()
  .fadeIn(1000)
  .end()
  .appendTo('#slideshow');
}, 3000);
</script>
<script>
  AOS.init();
</script>

</body>
</html>