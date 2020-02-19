<?php $header_class="profilepage"; ?>
<?php include"inc/header.php";?>
<section class="main_baburchi_page sc-padding">
   <div class="profile_banner bg-profile">
      <div class="container_box">
         <div class="bg-profile-padding">
            <div class="row">
               <div class="col-md-7">
                  <div class="single-profile-banner text-baburchi">
                     <div class="banner-profile-text text-left">
                        <h4 class="middile-text">Find Your Desire <br> Baburchi</h4>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="single-profile-banner img-baburchi">
                     <div class="png_image-baburchi">
                        <img src="image/baburchi-image-1.png" alt="baburchi">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="main_baburchi_page baburchi_list">
      <div class="container_box">
         <h3 class="title_sc_center_item_heading">
            Baburchi
         </h3>
         <div class="baburchi_list_sc">
            <div class="header-area-singup-body bdr-bottom">
               <div class="tittle-popup list-baburchi f-left">
                  <h4>List of Baburchi</h4>
               </div>
               <div class="input-area-baburchi f-right">
                  <form action="" method="POST" class="hdr-form">
                     <div class="pul-search-item">
                        <label for="gender-item">Search baburchi by:</label>
                        <input type="radio" name="gender" id="r1" value="location"> <label for="r1">Location</label>
                        <input type="radio" name="gender" id="r2" value="chef"><label for="r2">Chef's Name</label>
                     </div>
                     <div class="input_sc_area_select_loc">
                        <div class="form-group">
                           <select class="location-area-sc form-control">
                              <option value="select location">select location</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                           </select>
                        </div>
                        <a href="#"><button><i class="fas fa-search"></i></button></a>
                     </div>
                  </form>
               </div>
            </div>
         </div>
         <div class="baburchi_page_slide_list">
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
            <div class="slider-slide sc-padding-area">
               <div class="owl-carousel list-baburchi-recipe owl-theme">
               		<div class="item">
                     <div class="single-recipe-item single_baburchi_slide_item">
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
                        <div class="add_area_recipe add_item_baburchi">
                           <div class="row">
                              <div class="col-md-12">
                                 <div class="sc_advise_area text-center">
                                    <img src="image/addvise.png">
                                 </div>
                              </div>
                           </div>
                        </div>
                        <?php for($i = 0; $i <= 5; $i++){?>
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
                     <div class="next-item-namber text-center">
                        <p class="active bg"><span>1</span></p>
                        <p><span>2</span></p>
                        <p><span>3</span></p>
                        <p><span>4</span></p>
                        <p><span>5</span></p>
                        <p><span>6</span></p>
                        <p><span>7</span></p>
                        <p><span>8</span></p>
                        <p><span>9</span></p>
                        <p><span>10</span></p>
                     </div>
                  </div>
                  <div class="item">
                     <div class="single-recipe-item single_baburchi_slide_item">
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
                        <div class="add_area_recipe add_item_baburchi">
                           <div class="row">
                              <div class="col-md-12">
                                 <div class="sc_advise_area text-center">
                                    <img src="image/addvise.png">
                                 </div>
                              </div>
                           </div>
                        </div>
                        <?php for($i = 0; $i <= 5; $i++){?>
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
                     <div class="next-item-namber text-center">
                        <p class="active bg"><span>1</span></p>
                        <p><span>2</span></p>
                        <p><span>3</span></p>
                        <p><span>4</span></p>
                        <p><span>5</span></p>
                        <p><span>6</span></p>
                        <p><span>7</span></p>
                        <p><span>8</span></p>
                        <p><span>9</span></p>
                        <p><span>10</span></p>
                     </div>
                  </div>
                  <div class="item">
                     <div class="single-recipe-item single_baburchi_slide_item">
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
                        <div class="add_area_recipe add_item_baburchi">
                           <div class="row">
                              <div class="col-md-12">
                                 <div class="sc_advise_area text-center">
                                    <img src="image/addvise.png">
                                 </div>
                              </div>
                           </div>
                        </div>
                        <?php for($i = 0; $i <= 5; $i++){?>
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
                     <div class="next-item-namber text-center">
                        <p class="active bg"><span>1</span></p>
                        <p><span>2</span></p>
                        <p><span>3</span></p>
                        <p><span>4</span></p>
                        <p><span>5</span></p>
                        <p><span>6</span></p>
                        <p><span>7</span></p>
                        <p><span>8</span></p>
                        <p><span>9</span></p>
                        <p><span>10</span></p>
                     </div>
                  </div>

               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<?php include"inc/footer.php";?>

