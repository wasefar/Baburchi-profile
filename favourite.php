<?php $header_class="profilepage"; ?>
<?php include"inc/header_three.php";?>

<section class="baburchi-profile-full-information">
	<div class="container_box">
		<div class="row">
			<div class="col-md-12">

				

					<div class="box-shadow border-user-box favourite">
					<div class="tittle-favourite text-center">
						<h4>Favourite Babaurchi</h4>
					</div>
					<div class="main-item-list">
						<ul>
							<li><a href="#">Baburchi</a></li>
							<li><a href="#">Mobile No</a></li>
							<li><a href="#">Address</a></li>
							<li><a href="#">Point of contact</a></li>
							<li><a href="#">Program city</a></li>
							<li class="top"><a href="#">Maximum capacity <br>(person)</a></li>
							<li><a href="#">Ratings</a></li>
						</ul>
					</div>

					<?php for($i = 0; $i <= 3; $i++){?>

						<div class="baburchi_all_document">
						<div class="profile-name image">
							<div class="item-image">
			                     <img src="image/baburchi.png" alt="baburchi">
			                     <div class="profile-popup">
			                         <p> <a href="#" data-toggle="modal" data-target="#baburchi-popup">view profile</a></p>
			                     </div>
			                 </div>
						</div>
						<div class="profile-name position">
							<div class="description">
			                 <h5>Md.Akter</h5>
			                 <p>Biriyani Specalist</p>
			             </div>
						</div>
						<div class="profile-name mobile">
							<p>01991-988236</p>
						</div>
						<div class="profile-name address">
							<p>Road no. 1 TNT, Mohakhali, dhaka-1213.</p>
						</div>
						<div class="profile-name contact">
							<p>Rita <br> Decorato</p>
						</div>
						<div class="profile-name Program">
							<p>8</p>
						</div>
						<div class="profile-name capacity-parson">
							<p>2500</p>
						</div>
						<div class="profile-name ratings">
							<span class="font-icon_5star">
			                <i class="fas fa-star"></i>
			                <i class="fas fa-star"></i>
			                <i class="fas fa-star"></i>
			                <i class="fas fa-star"></i>
			                <i class="fas fa-star"></i>
			                </span>
						</div>
					</div>

					<?php }?>
					
				</div>

			

			</div>
		</div>
		
		
	</div>
</section>



<?php include"inc/footer.php";?>