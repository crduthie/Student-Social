<?php
	include 'includes/dbh.php';
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Social Media Website</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link id="pagestyle" rel="stylesheet" type="text/css" href="css/style.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
<script src="http://code.jquery.com/jquery-latest.js"></script>	
<script src="js/script.js"></script>
<script>	
	WebFont.load({
    google: {
      families: ['Droid Sans', 'Droid Serif']
    }
	});
</script>
</head>

<body>

	<div id="wrapper">

        <div class="cover">
        
            <div class="loader"></div>
        
        </div>
	
		<div id="home">	
			
			<div class="button_container index_button" id="navigation">
		
			<div class="color_container">
			
				<p class="main_color_title">Background Color</p>
				
				<div class="color_box">
				
					<div class="color beige"></div>
					
					<div class="color_title">Beige</div>
					
				</div>
				
				<div class="color_box">
				
					<div class="color grey"></div>
					
					<div class="color_title">Dark Grey</div>
					
				</div>
				
				<div class="color_box">
				
					<div class="color sage_green"></div>
					
					<div class="color_title">Green</div>
					
				</div>
				
				<div class="color_box">
				
					<div class="color peach"></div>
					
					<div class="color_title">Peach</div>
					
				</div>
				
				<div class="color_box">
				
					<div class="color orange"></div>
					
					<div class="color_title">Orange</div>
					
				</div>
				
				<div class="color_box">
				
					<div class="color yellow"></div>
					
					<div class="color_title">Yellow</div>
					
				</div>
			
			</div>
			
			<div class="font_color_container">
			
				<p class="main_color_title_2">Font Color</p>
				
				<div class="color_box_2">
				
					<div class="color black"></div>
					
					<div class="color_title">Black</div>
					
				</div>
				
				<div class="color_box_2">
				
					<div class="color white"></div>
					
					<div class="color_title">White</div>
					
				</div>
				
				<div class="color_box_2">
				
					<div class="color light_grey"></div>
					
					<div class="color_title">Grey</div>
					
				</div>
				
				<div class="color_box_2">
				
					<div class="color dark_grey"></div>
					
					<div class="color_title">Dark Grey</div>
					
				</div>
			
			</div>
			
		</div>
				
			<header>

				<div class="nav_container">
					
					<div class="button">
						
							<div class="button_text" onClick="swapStyleSheet('css/dys_style.css')">Original Page</div>
							<div class="button_text_2" onClick="swapStyleSheet('css/style.css')">Dyslexic Friendly</div>
						
							<span class="button_press_2"></span>
							<span class="button_press"></span>
							
					</div>

					<img class="logo" src="img/student_social_logo.png" alt="Student Blog">
						
						<form class="search_box" action="search.php" method="POST">

							<input type="text" name="search" class="search" placeholder="Search" autocomplete="off" >

								<button type="submit" class="search_btn" name="submit-search">

									<i class="fas fa-search"></i>

								</button>

						</form>
						
						<div class="nav">

							<ul>

								<li><a class="active" href="index.php">Home</a></li>
                                <li><a class="active" href="my_posts.php">My Posts</a></li>
								<li><a class="active" href="events.html">Events</a></li>

							</ul>

						</div>

				</div>

			</header>
			
			<div class="main_content_container">
			
				<div class="left_column">
				
					<div class="profile_container">
						
						<img class="profile_picture" src="img/Connor.png" alt="Profile Picture">
						
						<div class="word_container">
						
							<p class="name">Connor Duthie</p>

							<p class="course">Web Design and Development</p>
							
						</div>
					
					</div>
				
				</div>
				
				<div class="middle_column">
					
					<div class="form_container">
				
						<form name="myForm" action="includes/uploading.php" method="POST" class="upload_input">
					
							<div class="upload_container">

								<div class="profile_indicator">

									<img class="post_thumbnail" src="img/Connor.png" alt="Profile Picture">

								</div>


								<div class="input_text">

									<div class="upload_box">

										<input type="text" name="post_descriptor" class="upload" placeholder="Say Something.." autocomplete="off" required>

									</div>

								</div>

							</div>	

							<button type="submit" name="submit" class="upload_btn"><p class="upload_text">Post</p></button>

						</form>
					
					</div>
					
<?php
					
					if (get_magic_quotes_gpc()) {
						function undoMagicQuotes($array, $topLevel=true) {
							$newArray = array();
							foreach($array as $key => $value) {
								if (!$topLevel) {
									$key = stripslashes($key);
								}
								if (is_array($value)) {
									$newArray[$key] = undoMagicQuotes($value, false);
								}
								else {
									$newArray[$key] = stripslashes($value);
								}
							}
							return $newArray;
						}
						$_GET = undoMagicQuotes($_GET);
						$_POST = undoMagicQuotes($_POST);
						$_COOKIE = undoMagicQuotes($_COOKIE);
						$_REQUEST = undoMagicQuotes($_REQUEST);
					}
						
					$sql = "SELECT * FROM social_table ORDER BY id DESC";
					$stmt = mysqli_stmt_init($conn);
					if (!mysqli_stmt_prepare($stmt, $sql)){
						echo "SQL statement failed";
					} else {
						mysqli_stmt_execute($stmt);
						$result = mysqli_stmt_get_result($stmt);
		
					while ($row = mysqli_fetch_assoc($result)){

					  echo "<div class='post'>
					
								<div class='post_container'>

									<div class='profile_indicator'>

										<img class='post_thumbnail' src='img/Connor.png' alt='Profile Picture'>

									</div>


									<div class='post_information'>

										<p class='post_name'>Connor Duthie</p>
										<p class='post_subject'>Web Design and Development</p>

									</div>

								</div>	

								<p class='post_descriptor'>".stripslashes($row['post_descriptor'])."</p>

							</div>";
			
						}
					}
				
                    $sql_2 = "SELECT * FROM other_students ORDER BY id DESC";
					if (!mysqli_stmt_prepare($stmt, $sql_2)){
						echo "SQL statement failed";
					} else {
						mysqli_stmt_execute($stmt);
						$result = mysqli_stmt_get_result($stmt);
		
					while ($row = mysqli_fetch_assoc($result)){
                        
					  echo "<div class='post'>
					
								<div class='post_container'>

									<div class='profile_indicator'>

										<img src='data:image/jpeg;base64,".base64_encode($row['images'])."' class='post_thumbnail'>

									</div>


									<div class='post_information'>

										<p class='post_name'>".stripslashes($row['name'])."</p>
										<p class='post_subject'>".stripslashes($row['course'])."</p>

									</div>

								</div>	

								<p class='post_descriptor'>".stripslashes($row['post_descriptor'])."</p>

							</div>";
			
						}
					}
					
?>
			</div>
				
				<div class="right_column">
				
					<a href="https://www.gillette.co.uk/fusion5-power-razor-for-men/10547323.html"><div class="first_advert"></div></a>
					
					<a href="https://www.dior.com/en_gb/fragrance/mens-fragrance/sauvage"><div class="second_advert"></div></a>
					
					<a href="https://www.prada.com/gb/en/women/bags.html?utm_campaign=GoogleSearch_UK&utm_medium=CPC&utm_source=Google&utm_content=Product&s_kwcid=AL!8549!3!407239095325!e!!g!!prada%20bags&gclid=Cj0KCQiAtOjyBRC0ARIsAIpJyGNRhvV_eLNkC6I-R91tqSlws3J3L4wlEw93B4-EUFkjsY1ashxOAJYaAtGNEALw_wcB&gclsrc=aw.ds"><div class="third_advert"></div></a>
				
				</div>
			
			
			</div>
			
		</div>
	
	</div>

</body>



</html>
