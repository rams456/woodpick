<?php
require('conn.php');
if(!isset($_SESSION['name']))
{
	header('location:/woodpick/');
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="/woodpick/assets/header.css">
	<link rel="stylesheet" type="text/css" href="/woodpick/assets/footer.css">
	<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<header id="head">
		<div class="head_section">
			<a class="index" href="/woodpick/"><img src="/woodpick/image/Logo1.png"></a>
			<div class="serach_box">
				<input type="text" placeholder="Search Your Product" name="">
				<button type="submit"><i class="fa fa-search"></i></button>
			</div>
			<ul>	
				<li>
					<a href="logout.php" id="login_btn">
						<i class="fa fa-sign-out" style="font-size:1.5em;"></i><?php echo $_SESSION['name'];?>
					</a>
					<div id="modal_section" class="modal">
						<div class="modal_content">
							<div class="login_box">
								<form name="loginform" method="post" action="login.php" onsubmit="return logindetail()">
									<input type="text" placeholder="Email ID/Mobile Number" name="user">
									<input type="password" placeholder="Enter Password" name="pass">
									<input type="submit" value="Login" name="login-btn">
								</form>
								<hr>
								<button id="reg">New User ? Register Now</button>
							</div>
							<div class="register_box">
								<form method="post" action="register.php" onsubmit="return userdetail()">
									<input type="text" placeholder="First Name" name="user_first_name">
									<input type="text" placeholder="Last Name" name="user_last_name">
									<input type="text" placeholder="Email / Phone Number" name="user_email">
									<input type="password" placeholder="Password" name="user_password">
									<input type="submit" value="Register" name="register-btn">
								</form>
								<hr>
								<button id="lgn">Already User ? Login Now</button>
							</div>
						</div>
					</div>
				</li>

				<li>
					<a href="#">
						<i class='fas fa-shopping-cart'></i>Cart
					</a>
				</li>

				<li>
					<a href="#">
						<i class='fas fa-store-alt'></i>Stores
					</a>
				</li>
			</ul>
		</div>

		<!-- Navigation secion was start---------------- -->
		<nav>
			<ul>
				<li>
					<button>Living Room</button>
					<div class="dropdown-content">
						<div class="row">
							<div class="column">
								<h3>Sofas</h3>
								<a href="#">1 Seater Sofas</a>
								<a href="#">2 Seater Sofas</a>
								<a href="#">3 Seater Sofas</a>
								<a href="#">Sofa Sets</a>
								<a href="#">Sectional Sofas</a>
								<a href="#">Recliners</a>
								<a href="#">Chaise Loungers</a>
								<a href="#">Sofa Cum Beds</a>
								<a href="#">Futons</a>
							</div>
							<div class="column">
								<h3>Seating</h3>
								<a href="#">Settees</a>
								<a href="#">Benches</a>
								<a href="#">Ottomans</a>
								<a href="#">Pouffes</a>
								<a href="#">Recamiers</a>
								<a href="#">Foot Stool</a>
								<a href="#">Seating Stools</a>
								<a href="#">Bean Begs</a>
							</div>
							<div class="column">
								<h3>Chairs</h3>
								<a href="#">Ergonomic Chairs</a>
								<a href="#">Executive Chairs</a>
								<a href="#">Guest Chairs</a>
								<a href="#">Folding Chairs</a>
								<a href="#">Arm Chairs</a>
								<a href="#">Plastic Chairs</a>
								<a href="#">Iconic Chairs</a>
								<a href="#">Cantilever Chairs</a>
							</div>
							<div class="column">
								<h3>Tables</h3>
								<a href="#">Coffee Tables</a>
								<a href="#">Coffee Table Sets</a>
								<a href="#">End Tables</a>
								<a href="#">Nest of Tables</a>
								<a href="#">Trunks</a>
								<a href="#">Console Tables</a>
								<a href="#">Dressing Tables</a>
							</div>
							<div class="column">
								<h3>Cabinetry</h3>
								<a href="#">Wardrobes</a>
								<a href="#">Shoe Racks</a>
								<a href="#">Storage</a>
								<a href="#">Display Units</a>
								<a href="#">Bar</a>
								<a href="#">Kids Storage</a>
							</div>
						</div>
					</div>
				</li>
				<li>
					<button>Bed Room</button>
					<div class="dropdown-content">
						<div class="row">
							<div class="column">
								<h3>Bed</h3>
								<a href="#">King Size Beds</a>
								<a href="#">Queen Size Beds</a>
								<a href="#">Single Beds</a>
								<a href="#">Poster Beds</a>
								<a href="#">Folding Beds</a>
								<a href="#">Upholstered Beds</a>
							</div>
							<div class="column">
								<h3>Mattresses</h3>
								<a href="#">King Size Mattresses</a>
								<a href="#">Queen Size Mattresses</a>
								<a href="#">Single Size Mattresses</a>
								<a href="#">Baby Size Mattresses</a>
								<a href="#">Foldable Size Mattresses</a>
							</div>
							<div class="column">
								<h3>Almirah</h3>
								<a href="#">Steel Almirah</a>
								<a href="#">Wooden Almirah</a>
								<a href="#">Standalone Almirah</a>
								<a href="#">Fitted Almirah</a>
								<a href="#">Sliding Almirah</a>
								<a href="#">Mirror door Almirah</a>
								<a href="#">Open Almirah</a>
							</div>
							<div class="column">
								<h3>Mirror</h3>
								<a href="#">Plain Mirror</a>
								<a href="#">Spherical Mirror</a>
								<a href="#">Non-Reversing Mirror</a>
							</div>
							<div class="column">
								<h3>Compact Deal</h3>
								<a href="#">Cushion/covers</a>
								<a href="#">Pillows</a>
								<a href="#">Tv Units</a>
								<a href="#">Trunks</a>
								<a href="#">Lamps</a>
								<a href="#">Besides Tables</a>
								<a href="#">Chest & Drawers</a>
							</div>
						</div>
					</div>
				</li>
				<li>
					<button>Kitchen</button>
					<div class="dropdown-content">
						<div class="row">
							<div class="column">
								<h3>Sofas</h3>
								<a href="#">1 Seater Sofas</a>
								<a href="#">2 Seater Sofas</a>
								<a href="#">3 Seater Sofas</a>
								<a href="#">Sofa Sets</a>
								<a href="#">Sectional Sofas</a>
								<a href="#">Recliners</a>
								<a href="#">Chaise Loungers</a>
								<a href="#">Sofa Cum Beds</a>
								<a href="#">Futons</a>
							</div>
							<div class="column">
								<h3>Seating</h3>
								<a href="#">Settees</a>
								<a href="#">Benches</a>
								<a href="#">Ottomans</a>
								<a href="#">Pouffes</a>
								<a href="#">Recamiers</a>
								<a href="#">Foot Stool</a>
								<a href="#">Seating Stools</a>
								<a href="#">Bean Begs</a>
							</div>
							<div class="column">
								<h3>Chairs</h3>
								<a href="#">Ergonomic Chairs</a>
								<a href="#">Executive Chairs</a>
								<a href="#">Guest Chairs</a>
								<a href="#">Folding Chairs</a>
								<a href="#">Arm Chairs</a>
								<a href="#">Plastic Chairs</a>
								<a href="#">Iconic Chairs</a>
								<a href="#">Cantilever Chairs</a>
							</div>
							<div class="column">
								<h3>Tables</h3>
								<a href="#">Coffee Tables</a>
								<a href="#">Coffee Table Sets</a>
								<a href="#">End Tables</a>
								<a href="#">Nest of Tables</a>
								<a href="#">Trunks</a>
								<a href="#">Console Tables</a>
								<a href="#">Dressing Tables</a>
							</div>
							<div class="column">
								<h3>Cabinetry</h3>
								<a href="#">Wardrobes</a>
								<a href="#">Shoe Racks</a>
								<a href="#">Storage</a>
								<a href="#">Display Units</a>
								<a href="#">Bar</a>
								<a href="#">Kids Storage</a>
							</div>
						</div>
					</div>
				</li>
				<li>
					<button>Study / Office</button>
					<div class="dropdown-content">
						<div class="row">
							<div class="column">
								<h3>Sofas</h3>
								<a href="#">1 Seater Sofas</a>
								<a href="#">2 Seater Sofas</a>
								<a href="#">3 Seater Sofas</a>
								<a href="#">Sofa Sets</a>
								<a href="#">Sectional Sofas</a>
								<a href="#">Recliners</a>
								<a href="#">Chaise Loungers</a>
								<a href="#">Sofa Cum Beds</a>
								<a href="#">Futons</a>
							</div>
							<div class="column">
								<h3>Seating</h3>
								<a href="#">Settees</a>
								<a href="#">Benches</a>
								<a href="#">Ottomans</a>
								<a href="#">Pouffes</a>
								<a href="#">Recamiers</a>
								<a href="#">Foot Stool</a>
								<a href="#">Seating Stools</a>
								<a href="#">Bean Begs</a>
							</div>
							<div class="column">
								<h3>Chairs</h3>
								<a href="#">Ergonomic Chairs</a>
								<a href="#">Executive Chairs</a>
								<a href="#">Guest Chairs</a>
								<a href="#">Folding Chairs</a>
								<a href="#">Arm Chairs</a>
								<a href="#">Plastic Chairs</a>
								<a href="#">Iconic Chairs</a>
								<a href="#">Cantilever Chairs</a>
							</div>
							<div class="column">
								<h3>Tables</h3>
								<a href="#">Coffee Tables</a>
								<a href="#">Coffee Table Sets</a>
								<a href="#">End Tables</a>
								<a href="#">Nest of Tables</a>
								<a href="#">Trunks</a>
								<a href="#">Console Tables</a>
								<a href="#">Dressing Tables</a>
							</div>
							<div class="column">
								<h3>Cabinetry</h3>
								<a href="#">Wardrobes</a>
								<a href="#">Shoe Racks</a>
								<a href="#">Storage</a>
								<a href="#">Display Units</a>
								<a href="#">Bar</a>
								<a href="#">Kids Storage</a>
							</div>
						</div>
					</div>
				</li>
				<li>
					<button>Dining Room</button>
					<div class="dropdown-content">
						<div class="row">
							<div class="column">
								<h3>Sofas</h3>
								<a href="#">1 Seater Sofas</a>
								<a href="#">2 Seater Sofas</a>
								<a href="#">3 Seater Sofas</a>
								<a href="#">Sofa Sets</a>
								<a href="#">Sectional Sofas</a>
								<a href="#">Recliners</a>
								<a href="#">Chaise Loungers</a>
								<a href="#">Sofa Cum Beds</a>
								<a href="#">Futons</a>
							</div>
							<div class="column">
								<h3>Seating</h3>
								<a href="#">Settees</a>
								<a href="#">Benches</a>
								<a href="#">Ottomans</a>
								<a href="#">Pouffes</a>
								<a href="#">Recamiers</a>
								<a href="#">Foot Stool</a>
								<a href="#">Seating Stools</a>
								<a href="#">Bean Begs</a>
							</div>
							<div class="column">
								<h3>Chairs</h3>
								<a href="#">Ergonomic Chairs</a>
								<a href="#">Executive Chairs</a>
								<a href="#">Guest Chairs</a>
								<a href="#">Folding Chairs</a>
								<a href="#">Arm Chairs</a>
								<a href="#">Plastic Chairs</a>
								<a href="#">Iconic Chairs</a>
								<a href="#">Cantilever Chairs</a>
							</div>
							<div class="column">
								<h3>Tables</h3>
								<a href="#">Coffee Tables</a>
								<a href="#">Coffee Table Sets</a>
								<a href="#">End Tables</a>
								<a href="#">Nest of Tables</a>
								<a href="#">Trunks</a>
								<a href="#">Console Tables</a>
								<a href="#">Dressing Tables</a>
							</div>
							<div class="column">
								<h3>Cabinetry</h3>
								<a href="#">Wardrobes</a>
								<a href="#">Shoe Racks</a>
								<a href="#">Storage</a>
								<a href="#">Display Units</a>
								<a href="#">Bar</a>
								<a href="#">Kids Storage</a>
							</div>
						</div>
					</div>
				</li>
			</ul>
		</nav>
		<!-- Navigation secion was start---------------- -->
	</header>
	<?php
	require('footer.php');
	?>	
</body>
</html>