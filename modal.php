<?php $header_class="profilepage"; ?>
<?php include"inc/header.php";?>

<div class="extra_modal text-center">
    <h2>MODAL BOX</h2>
</div>

<div class="container_box padding">
    <!-- modal SING UP baburchi -->

     <button type="button" class="btn btn-warning recipe text-center" data-toggle="modal" data-target="#baburchimodal">SINGUP BABURCHI</button>

            <div class="modal fade" id="baburchimodal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
               <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                     <button type="button" class="close right" data-dismiss="modal" aria-label="Close">
                     <i class="fa fa-times cross" aria-hidden="true"></i>
                     </button>
                     <div class="header-area-singup-body text-center">
                        <div class="tittle-popup">
                           <h4>Sing Up as baburchi</h4>
                        </div>
                        <p class="popup-text-item">
                           with your social network
                        </p>
                        <div class="social-link">
                           <i class="fab fa-facebook-f bg-blue"></i>
                           <i class="fab fa-google-plus-g bg-red"></i>
                        </div>
                        <div class="row">
                           <div class="col-md-11 bdr-btm">
                              <span class="or-before-item"> or </span>
                           </div>
                        </div>
                     </div>
                     <div class="padding-area-input">
                        <form action="" method="POST">
                           <div class="row">
                              <div class="col-md-2 none_tab"> 
                              <div class="uplode-img-area destop_none">
                              <div class="main-man-img">
                              <img src="image/man.png" class="pd-up-img" alt="man">
                              </div>
                              <p>Uplode picture</p>
                              </div>
                              </div>
                              <div class="col-md-9">
                                 <div class="header-modal-area">
                        <form action="" method="POST">
                        <div class="input-area-sc">
                        <div class="main-input">
                        <label for="name" class="name-fled">Name:</label>
                        <input type="text" placeholder="Enter name" id="name" class="form-control" name="">
                        </div>
                        <div class="row">
                        <div class="col-md-6">
                        <div class="dpr-item-age">
                        <div class="main-input">
                        <label for="age" class="name-fled">Age:</label>
                        <select class="custom-select item-dpr">
                        <option selected>0</option>
                        <option value="1">01</option>
                        <option value="2">02</option>
                        <option value="3">03</option>
                        </select>
                        </div>
                        </div>
                        </div>
                        <div class="col-md-6 col-sm-8">
                        <div class="pull-gender">
                        <label for="gender-item">GENDER:</label>
                        <input type="radio" id="gender-item" name="gender" value="male"> <span>Male</span> 
                        <input type="radio" id="gender-item" class="left-pul" name="gender" value="female"> <span>Female</span>
                        </div>
                        </div>
                        </div>
                        <div class="main-input">
                        <label for="name" class="name-fled">Mobile No:</label>
                        <div class="midile-wdt">
                        <input type="text" placeholder="Enter name" id="name" class="form-control" name="">
                        </div>
                        </div>
                        </div>
                        </form>
                        </div>
                        </div>
                        <div class="col-md-3"> 
                        <div class="uplode-img-area mobile_none">
                        <div class="main-man-img">
                        <img src="image/man.png" class="pd-up-img" alt="man">
                        </div>
                        <p>Uplode picture</p>
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="main-input">
                        <label for="name" class="name-fled">Email:</label>
                        <input type="text" placeholder="Enter email address" id="name" class="form-control" name="">
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="main-input">
                        <label for="name" class="name-fled">Social link: <br><span class="style_italic">(if any)</span></label>
                        <input type="text" placeholder="Enter Social link" id="name" class="form-control" name="">
                        </div>
                        </div>
                        <div class="col-md-12">
                        <label for="name" class="name-fled">Work Address:</label>
                        </div>
                        <div class="col-md-4">
                        <select class="custom-select item-dpr wdt">
                        <option selected>Select Devition</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                        </select>
                        </div>
                        <div class="col-md-4">
                        <select class="custom-select item-dpr wdt">
                        <option selected>Select sub-devition</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                        </select>
                        </div>
                        <div class="col-md-4">
                        <select class="custom-select item-dpr wdt">
                        <option selected>Select Zip code</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                        </select>
                        </div>
                        <div class="col-md-6">
                        <div class="main-input">
                        <!--  <label for="name" class="name-fled">Email</label> -->
                        <input type="text" placeholder="Enter full address" id="name" class="form-control wdt" name="">
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="main-input">
                        <label for="name" class="name-fled">Shop name <br><span class="style_italic">(if any)</span></label> 
                        <input type="text" placeholder="Enter shop name" id="name" class="form-control" name="">
                        </div>
                        </div>
                        <div class="col-md-10">
                        <div class="main-input top">
                        <div class="row">
                        <div class="col-md-5">
                        <label for="name" class="name-fled wdt">No.of programee arrange:</label>
                        </div>
                        <div class="col-md-4">
                        
                        <div class="input-area">             
                        <span class="btn btn-info sine">-</span>
                        <input type="text" class="form-control bag_add" placeholder="0" name="">
                        <span class="btn btn-info sine right">+</span>
                        </div>
                        
                        </div>
                        </div>
                        </div>
                        </div>
                        <div class="col-md-10">
                        <div class="main-input">
                        <div class="row">
                        <div class="col-md-5">
                        <label for="name" class="name-fled wdt">Type of programee arrange:</label>
                        </div>
                        <div class="col-md-5">
                        <select class="custom-select item-dpr wdt">
                        <option selected>Select programe type</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                        </select>
                        </div>
                        </div>
                        </div>
                        </div>
                        <div class="col-md-10">
                        <div class="main-input">
                        <div class="row">
                        <div class="col-md-5">
                        <label for="name" class="name-fled wdt">Maximum arrangement capacity:</label>
                        </div>
                        <div class="col-md-4">
                        <div class="input-area">             
                        <span class="btn btn-info sine">-</span>
                        <input type="text" class="form-control bag_add" placeholder="0" name="">
                        <span class="btn btn-info sine right">+</span>
                        </div>
                        </div>
                        <div class="col-md-2">
                        <div class="text-people">
                        people
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>
                        <div class="col-md-10">
                        <div class="main-input">
                        <div class="row">
                        <div class="col-md-5">
                        <label for="name" class="name-fled wdt">No. of Team member:</label>
                        </div>
                        <div class="col-md-4">
                        <div class="input-area">             
                        <span class="btn btn-info sine">-</span>
                        <input type="text" class="form-control bag_add" placeholder="0" name="">
                        <span class="btn btn-info sine right">+</span>
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>
                        <div class="col-md-10">
                        <div class="main-input">
                        <div class="row">
                        <div class="col-md-5">
                        <label for="name" class="name-fled wdt">Average Fece:</label>
                        </div>
                        <div class="col-md-5">
                        <input type="text" placeholder="Enter amount of fece" id="name" class="form-control wdt" name="">
                        </div>
                        <div class="col-md-2">
                        <div class="text-people">
                        BDT/programee
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>
                        <div class="col-md-10">
                        <div class="main-input">
                        <div class="row">
                        <div class="col-md-5">
                        <label for="name" class="name-fled wdt">Speciality on:</label>
                        </div>
                        <div class="col-md-5">
                        <input type="text" placeholder="Enter amount of fece" id="name" class="form-control wdt" name="">
                        </div>
                        </div>
                        </div>
                        </div>
                        <div class="col-md-10">
                        <div class="main-input">
                        <div class="row">
                        <div class="col-md-5">
                        <label for="name" class="name-fled wdt">Password:</label>
                        </div>
                        <div class="col-md-5">
                        <input type="text" placeholder="Enter Password" id="name" class="form-control wdt" name="">
                        </div>
                        <div class="col-md-2">
                        <div class="text-people">
                        Maximum 8 digit
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>
                        <div class="col-md-10">
                        <div class="main-input">
                        <div class="row">
                        <div class="col-md-5">
                        <label for="name" class="name-fled wdt">Confirm password:</label>
                        </div>
                        <div class="col-md-5">
                        <input type="text" placeholder="Enter confirm password" id="name" class="form-control wdt" name="">
                        </div>
                        </div>
                        </div>
                        </div>
                        <div class="col-md-12">
                        <div class="text-center">
                        <a href="" class="btn btn-warning singup">
                        SING UP
                        </a>
                        </div>
                        </div>
                        </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>


      <!-- end modal SING UP baburchi -->


      <!-- modal SING UP costomar -->

     <button type="button" class="btn btn-warning recipe text-center" data-toggle="modal" data-target="#baburchimodalcustomar">SINGUP COSTOMER</button>

            <div class="modal fade" id="baburchimodalcustomar" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
               <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                     <button type="button" class="close right" data-dismiss="modal" aria-label="Close">
                     <i class="fa fa-times cross" aria-hidden="true"></i>
                     </button>
                     <div class="header-area-singup-body text-center">
                        <div class="tittle-popup">
                           <h4>Sing Up as Customer</h4>
                        </div>
                        <p class="popup-text-item">
                           with your social network
                        </p>
                        <div class="social-link">
                           <i class="fab fa-facebook-f bg-blue"></i>
                           <i class="fab fa-google-plus-g bg-red"></i>
                        </div>
                        <div class="row">
                           <div class="col-md-11 bdr-btm">
                              <span class="or-before-item"> or </span>
                           </div>
                        </div>
                     </div>
                     <div class="padding-area-input">
                        <form action="" method="POST">
                           <div class="row">
                              <div class="col-md-2 none_tab"> 
                              <div class="uplode-img-area destop_none">
                              <div class="main-man-img">
                              <img src="image/man.png" class="pd-up-img" alt="man">
                              </div>
                              <p>Uplode picture</p>
                              </div>
                              </div>
                              <div class="col-md-9">
                                 <div class="header-modal-area">
                        <form action="" method="POST">
                        <div class="input-area-sc">
                        <div class="main-input">
                        <label for="name" class="name-fled">Name:</label>
                        <input type="text" placeholder="Enter name" id="name" class="form-control" name="">
                        </div>
                        <div class="row">
                        <div class="col-md-6">
                        <div class="dpr-item-age">
                        <div class="main-input">
                        <label for="age" class="name-fled">Age:</label>
                        <select class="custom-select item-dpr">
                        <option selected>0</option>
                        <option value="1">01</option>
                        <option value="2">02</option>
                        <option value="3">03</option>
                        </select>
                        </div>
                        </div>
                        </div>
                        <div class="col-md-6 col-sm-8">
                        <div class="pull-gender">
                        <label for="gender-item">GENDER:</label>
                        <input type="radio" id="gender-item" name="gender" value="male"> <span>Male</span> 
                        <input type="radio" id="gender-item" class="left-pul" name="gender" value="female"> <span>Female</span>
                        </div>
                        </div>
                        </div>
                        <div class="main-input">
                        <label for="name" class="name-fled">Mobile No:</label>
                        <div class="midile-wdt">
                        <input type="text" placeholder="Enter name" id="name" class="form-control" name="">
                        </div>
                        </div>
                        </div>
                        </form>
                        </div>
                        </div>
                        <div class="col-md-3"> 
                        <div class="uplode-img-area mobile_none">
                        <div class="main-man-img">
                        <img src="image/man.png" class="pd-up-img" alt="man">
                        </div>
                        <p>Uplode picture</p>
                        </div>
                        </div>
                        <div class="col-md-9">
                        <div class="main-input">
                        <label for="name" class="name-fled">Email:</label>
                        <input type="text" placeholder="Enter email address" id="name" class="form-control" name="">
                        </div>
                        </div>
                        
                        <div class="col-md-12">
                        <label for="name" class="name-fled">Work Address:</label>
                        </div>
                        <div class="col-md-4">
                        <select class="custom-select item-dpr wdt">
                        <option selected>Select Devition</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                        </select>
                        </div>
                        <div class="col-md-4">
                        <select class="custom-select item-dpr wdt">
                        <option selected>Select sub-devition</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                        </select>
                        </div>
                        <div class="col-md-4">
                        <select class="custom-select item-dpr wdt">
                        <option selected>Select Zip code</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                        </select>
                        </div>
                        <div class="col-md-12">
                        <div class="main-input">
                        <!--  <label for="name" class="name-fled">Email</label> -->
                        <input type="text" placeholder="Enter full address" id="name" class="form-control wdt" name="">
                        </div>
                        </div>
                        
                       
                        <div class="col-md-10">
                        <div class="main-input">
                        <div class="row">
                        <div class="col-md-5">
                        <label for="name" class="name-fled wdt">Password:</label>
                        </div>
                        <div class="col-md-5">
                        <input type="text" placeholder="Enter Password" id="name" class="form-control wdt" name="">
                        </div>
                        <div class="col-md-2">
                        <div class="text-people">
                        Maximum 8 digit
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>
                        <div class="col-md-10">
                        <div class="main-input">
                        <div class="row">
                        <div class="col-md-5">
                        <label for="name" class="name-fled wdt">Confirm password:</label>
                        </div>
                        <div class="col-md-5">
                        <input type="text" placeholder="Enter confirm password" id="name" class="form-control wdt" name="">
                        </div>
                        </div>
                        </div>
                        </div>
                        <div class="col-md-12">
                        <div class="text-center">
                        <a href="" class="btn btn-warning singup">
                        SING UP
                        </a>
                        </div>
                        </div>
                        </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>


      <!-- end modal SING UP baburchi -->

      <!-- MODAL LOG IN -->

      <button type="button" class="btn btn-warning recipe text-center" data-toggle="modal" data-target="#loginmodal" data-whatever="@mdo">LOGIN</button>

            <div class="modal fade" id="loginmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
               <div class="modal-dialog" role="document">
                  <div class="modal-content login">
                     <button type="button" class="close right" data-dismiss="modal" aria-label="Close">
                     <i class="fa fa-times cross" aria-hidden="true"></i>
                     </button>
                     <div class="header-area-singup-body text-center">
                        <div class="tittle-popup">
                           <h4>Login</h4>
                        </div>
                        <p class="popup-text-item">
                           with your social network
                        </p>
                        <div class="social-link">
                           <i class="fab fa-facebook-f bg-blue"></i>
                           <i class="fab fa-google-plus-g bg-red"></i>
                        </div>
                        <div class="row">
                           <div class="col-md-11 bdr-btm login">
                              <span class="or-before-item"> or </span>
                           </div>
                        </div>
                     </div>
                     <div class="modal-body">
                        <form action="" method="POST">
                           <div class="main-input">
                              <label for="name-or-email" class="name-fled wdt">Name or email address:</label>
                              <input type="text" class="form-control wdt" placeholder="wasefahmed.dyd@gmail.com" id="name-or-email" name="">
                           </div>
                           <div class="main-input">
                              <label for="password" class="name-fled wdt">Password:</label>
                              <input type="text" class="form-control wdt" placeholder="******" id="password" name="">
                           </div>
                           <div class="main-input f-left">
                              <div class="form-check">
                                 <input class="form-check-input" type="checkbox" id="autoSizingCheck2">
                                 <label class="form-check-label" for="autoSizingCheck2">
                                 Remember me
                                 </label>
                              </div>
                           </div>
                           <div class="main-input f-right">
                              <p>Forget your password?</p>
                           </div>
                           <div class="itm-log">
                              <a href="" class="btn btn-warning singup">
                              Login
                              </a>
                           </div>
                           <div class="row">
                              <div class="col-md-11 bdr-btm login">
                                 <span class="or-before-item"> or </span>
                              </div>
                           </div>
                           <div class="itm-log mbt-30">
                              <a href="" class="btn btn-warning singup">
                              Register 
                              </a>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>

      <!-- ENE MODAL LOG IN -->


      <!-- VIEW FULL RECIPE -->

          <!-- recipe -->

          <button type="button" class="btn btn-warning recipe text-center" data-toggle="modal" data-target="#recipe">View Full Recipe</button>

            <div class="modal fade" id="recipe" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content pd">
                <button type="button" class="close right" data-dismiss="modal" aria-label="Close">
                     <i class="fa fa-times cross" aria-hidden="true"></i>
                     </button>
                  <div class="header-area popup">
                      <div class="row">
                          <div class="col-md-5">
                            <div class="recipe-area-header leftside">
                                <div class="recipe-item-img">
                                  <a href="#"><img class="modal_img" src="image/recipe_11.png" alt="recipe"></a>
                              </div>
                            </div>
                          </div>
                           <div class="col-md-6">
                               <div class="recipe-area-header rightside popup">
                                   <div class="recipe-item-tittle">
                                       <h4>Fride Basmati Brown rice <br> with checken and vegitable</h4>
                                       <span class="event-date">
                                           07 JANUARY, 2019
                                       </span>
                                   </div>
                                   <div class="tittle-bottom-uplode-area">
                                       <a href="#"><i class="fas fa-share-alt"></i></a>
                                       <a href="#"><i class="far fa-heart"></i></a>
                                       <a href="#"><i class="fas fa-comment-alt"></i></a>
                                   </div>
                                   <div class="button-area">
                                       <a href="#" data-toggle="modal" data-target="#mealrecipe" class="btn btn-warning recipe">Meal Calculate</a>
                                   </div>
                               </div>
                           </div>

                      </div>
                  </div>
                  <div class="main-item-popup">
                      <div class="row">
                          <div class="col-md-7">
                              <div class="ingredients-list">
                                <h4>Ingredients</h4>
                                  <ol>
                                      <li>2 heaped cups broccoli florets </li>
                                      <li>2 tablespoons canola or vegetable oil</li>
                                      <li>3/4 pound chicken breast, sliced nthin across the grain</li>
                                      <li>Salt and ground black pepper  to taste </li>
                                      <li>1 bunch scallions, both white and green parts, chopped</li>
                                      <li>4 gralic cloves, minced</li>
                                      <li>1 tablespoon finely chopped gresh ginger </li>
                                      <li>1 or 2 serrano chilies. minced (seeded for a milder dish)</li>
                                      <li>1 large carrot, peeled and diced small or cut in 2-inch matchssticks</li>
                                      <li>2 eggs, beaten and seasoned with salt and pepper </li>
                                      <li>6 cups cooked basmati brown rice (1 1/2 cups uncooked)</li>
                                      <li>1 tp 2 tablespoons Thai or vvientnamese fish sauce (to taste)</li>
                                      <li>1/4 cup copped cilantro </li>
                                      <li>Lime wedges and sliced cucumber for seving (optional)</li>
                                      <li>soy sauce or ffish sauce for  serving.</li>
                                  </ol>
                              </div>
                          </div>
                          
                      </div>
                      <div class="main-paragrap-item">
                          <div class="row">
                              <div class="col-md-8">
                                <h4 class="tittle-pra">
                                    Procedure
                                </h4>
                                  <p class="paragrap-text-recipi">
                                      While powdered hot cocoa mix may be more convenient and less messy,there’s nothing quite as good as homemade <br> hot chocolate. The rich and decadent flavor of real chocolate mixed with creamy, frothy milk will blow your fuzzy slippers off! And if you really want to warm up quickly, add a bit of your favorite booze. 
                                      While powdered hot cocoa mix may be more convenient and less messy, there’s nothing quite as good as homemade hot chocolate. The rich and decadent flavor of real chocolate mixed with creamy, frothy milk will blow your fuzzy slippers off! And if you really want to warm up quickly, add a bit of your favorite booze. 
                                      homemade hot chocolate. The rich and decadent flavor of real chocolate mixed with creamy, frothy milk will blow your fuzzy slippers off! And if you really want to warm up quickly, add a bit of your favorite booze. 
                                  </p>
                                  <div class="iframe-youtube">
                                      <iframe width="400" height="250" src="https://www.youtube.com/embed/tpsp08JiToc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                  </div>
                                  <div class="comment-area">
                                      <h4>Comments</h4>
                                     <div class="bdr-bttom"></div>   
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                </div>
              </div>
            </div>


       <!-- end full  view recipe -->

      <!-- END VIEW FULL RECIPE -->


      <!-- MEAL CALCULATE RECIPE -->
      <button type="button" class="btn btn-warning recipe text-center" data-toggle="modal" data-target="#mealrecipe">Meal Recipe</button>

            <div class="modal fade" id="mealrecipe" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content pd">
                <button type="button" class="close right" data-dismiss="modal" aria-label="Close">
                     <i class="fa fa-times cross" aria-hidden="true"></i>
                     </button>
                  <div class="header-area popup">
                      <div class="row">
                          <div class="col-md-5">
                            <div class="recipe-area-header leftside">
                                <div class="recipe-item-img">
                                  <a href="#"><img class="modal_img" src="image/recipe_11.png" alt="recipe"></a>
                              </div>
                            </div>
                          </div>
                           <div class="col-md-6">
                               <div class="recipe-area-header rightside popup">
                                   <div class="recipe-item-tittle">
                                       <h4>Fride Basmati Brown rice <br> with checken and vegitable</h4>
                                       <span class="event-date">
                                           07 JANUARY, 2019
                                       </span>
                                   </div>
                                   <div class="tittle-bottom-uplode-area">
                                       <a href="#"><i class="fas fa-share-alt"></i></a>
                                       <a href="#"><i class="far fa-heart"></i></a>
                                       <a href="#"><i class="fas fa-comment-alt"></i></a>
                                   </div>
                                   <div class="button-area">
                                       <a href="#" class="btn btn-warning recipe">Meal Calculate</a>
                                   </div>
                               </div>
                           </div>

                      </div>
                  </div>
                  <div class="main-item-popup mobile_none top_mobile">
                      <div class="row">
                        <div class="col-md-5 none">
                              <div class="calculate-recipe-item destop_none">
                                  <div class="box-shadow border">
                                      <h4 class="tittle-calculate-recipe">
                                          For how many people do you want to cook?
                                      </h4>
                                      <div class="form-group row">
                                        <label for="" class="col-sm-3 col-form-label">Adults</label>
                                        <div class="col-sm-7">


                                        <div class="input-area">
                                          
                                          <span class="btn btn-info sine">-</span>

                                          <input type="text" class="form-control" placeholder="0" name="">
                                        
                                          <span class="btn btn-info sine right">+</span>
                                          
                                      </div>

                                        </div>
                                      </div>
                                      <div class="form-group row">
                                        <label for="" class="col-sm-3 col-form-label">Childreen</label>
                                        <div class="col-sm-7">


                                        <div class="input-area">
                                          
                                          <span class="btn btn-info sine">-</span>

                                          <input type="text" class="form-control" placeholder="0" name="">
                                        
                                          <span class="btn btn-info sine right">+</span>
                                          
                                      </div>

                                        </div>
                                      </div>
                                      <div class="button-area text-center">
                                           <a href="#" data-toggle="modal" data-target="#afterrecipe" class="btn btn-warning recipe calculate">Calculate</a>
                                       </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-7">
                              <div class="ingredients-list">
                                <h4>Ingredients</h4>
                                  <ol>
                                      <li>2 heaped cups broccoli florets </li>
                                      <li>2 tablespoons canola or vegetable oil</li>
                                      <li>3/4 pound chicken breast, sliced nthin across the grain</li>
                                      <li>Salt and ground black pepper  to taste </li>
                                      <li>1 bunch scallions, both white and green parts, chopped</li>
                                      <li>4 gralic cloves, minced</li>
                                      <li>1 tablespoon finely chopped gresh ginger </li>
                                      <li>1 or 2 serrano chilies. minced (seeded for a milder dish)</li>
                                      <li>1 large carrot, peeled and diced small or cut in 2-inch matchssticks</li>
                                      <li>2 eggs, beaten and seasoned with salt and pepper </li>
                                      <li>6 cups cooked basmati brown rice (1 1/2 cups uncooked)</li>
                                      <li>1 tp 2 tablespoons Thai or vvientnamese fish sauce (to taste)</li>
                                      <li>1/4 cup copped cilantro </li>
                                      <li>Lime wedges and sliced cucumber for seving (optional)</li>
                                      <li>soy sauce or ffish sauce for  serving.</li>
                                  </ol>
                              </div>
                          </div>
                          <div class="col-md-5 show">
                              <div class="calculate-recipe-item mobile_none">
                                  <div class="box-shadow border">
                                      <h4 class="tittle-calculate-recipe">
                                          For how many people do you want to cook?
                                      </h4>
                                      <div class="form-group row">
                                        <label for="" class="col-sm-3 col-form-label">Adults</label>
                                        <div class="col-sm-7">


                                        <div class="input-area">
                                          
                                          <span class="btn btn-info sine">-</span>

                                          <input type="text" class="form-control" placeholder="0" name="">
                                        
                                          <span class="btn btn-info sine right">+</span>
                                          
                                      </div>

                                        </div>
                                      </div>
                                      <div class="form-group row">
                                        <label for="" class="col-sm-3 col-form-label">Childreen</label>
                                        <div class="col-sm-7">


                                        <div class="input-area">
                                          
                                          <span class="btn btn-info sine">-</span>

                                          <input type="text" class="form-control" placeholder="0" name="">
                                        
                                          <span class="btn btn-info sine right">+</span>
                                          
                                      </div>

                                        </div>
                                      </div>
                                      <div class="button-area text-center">
                                           <a href="#" data-toggle="modal" data-target="#afterrecipe" class="btn btn-warning recipe calculate">Calculate</a>
                                       </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="main-paragrap-item">
                          <div class="row">
                              <div class="col-md-8">
                                <h4 class="tittle-pra">
                                    Procedure
                                </h4>
                                  <p class="paragrap-text-recipi">
                                      While powdered hot cocoa mix may be more convenient and less messy,there’s nothing quite as good as homemade <br> hot chocolate. The rich and decadent flavor of real chocolate mixed with creamy, frothy milk will blow your fuzzy slippers off! And if you really want to warm up quickly, add a bit of your favorite booze. 
                                      While powdered hot cocoa mix may be more convenient and less messy, there’s nothing quite as good as homemade hot chocolate. The rich and decadent flavor of real chocolate mixed with creamy, frothy milk will blow your fuzzy slippers off! And if you really want to warm up quickly, add a bit of your favorite booze. 
                                      homemade hot chocolate. The rich and decadent flavor of real chocolate mixed with creamy, frothy milk will blow your fuzzy slippers off! And if you really want to warm up quickly, add a bit of your favorite booze. 
                                  </p>
                                  <div class="iframe-youtube">
                                      <iframe width="400" height="250" src="https://www.youtube.com/embed/tpsp08JiToc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                  </div>
                                  <div class="comment-area">
                                      <h4>Comments</h4>
                                     <div class="bdr-bttom"></div>   
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                </div>
              </div>
            </div>

      <!-- END MEAL CALCULATE RICEIPE -->
     



      <!-- AFTER MEAL CALCULATE RICEPE -->

      <button type="button" class="btn btn-warning recipe text-center" data-toggle="modal" data-target="#afterrecipe">Meal Recipe</button>

            <div class="modal fade" id="afterrecipe" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content pd">
                <button type="button" class="close right" data-dismiss="modal" aria-label="Close">
                     <i class="fa fa-times cross" aria-hidden="true"></i>
                     </button>
                  <div class="header-area popup">
                      <div class="row">
                          <div class="col-md-5">
                            <div class="recipe-area-header leftside">
                                <div class="recipe-item-img">
                                  <a href="#"><img class="modal_img" src="image/recipe_11.png" alt="recipe"></a>
                              </div>
                            </div>
                          </div>
                           <div class="col-md-6">
                               <div class="recipe-area-header rightside popup">
                                   <div class="recipe-item-tittle">
                                       <h4>Fride Basmati Brown rice <br> with checken and vegitable</h4>
                                       <span class="event-date">
                                           07 JANUARY, 2019
                                       </span>
                                   </div>
                                   <div class="tittle-bottom-uplode-area">
                                       <a href="#"><i class="fas fa-share-alt"></i></a>
                                       <a href="#"><i class="far fa-heart"></i></a>
                                       <a href="#"><i class="fas fa-comment-alt"></i></a>
                                   </div>
                                   <div class="button-area">
                                       <a href="#" class="btn btn-warning recipe">Meal Calculate</a>
                                   </div>
                               </div>
                           </div>

                      </div>
                  </div>
                  <div class="main-item-popup">
                      <div class="row">
                        <div class="col-md-5 none">
                              <div class="calculate-recipe-item destop_none">
                                  <div class="box-shadow border">
                                      <h4 class="tittle-calculate-recipe">
                                          For how many people do you want to cook?
                                      </h4>
                                      <div class="form-group row">
                                        <label for="" class="col-sm-3 col-form-label">Adults</label>
                                        <div class="col-sm-7">


                                        <div class="input-area">
                                          
                                          <span class="btn btn-info sine">-</span>

                                          <input type="text" class="form-control" placeholder="0" name="">
                                        
                                          <span class="btn btn-info sine right">+</span>
                                          
                                      </div>

                                        </div>
                                      </div>
                                      <div class="form-group row">
                                        <label for="" class="col-sm-3 col-form-label">Childreen</label>
                                        <div class="col-sm-7">


                                        <div class="input-area">
                                          
                                          <span class="btn btn-info sine">-</span>

                                          <input type="text" class="form-control" placeholder="0" name="">
                                        
                                          <span class="btn btn-info sine right">+</span>
                                          
                                      </div>

                                        </div>
                                      </div>
                                      <div class="button-area text-center">
                                           <a href="#" data-toggle="modal" data-target="#afterrecipe" class="btn btn-warning recipe calculate">Calculate</a>
                                       </div>
                                       <div class="description-list-after-recipe">
                                  <div class="description-item-name">
                                      <p>1. Rice</p>
                                      <p>2. Chicken</p>
                                      <p>3. Vegetable</p>
                                  </div>
                                  <div class="description-item-name quantity">
                                      <p>500g</p>
                                       <p>500g</p>
                                        <p>2 Cups</p>
                                  </div>
                              </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-7">
                              <div class="ingredients-list">
                                <h4>Ingredients</h4>
                                  <ol>
                                      <li>2 heaped cups broccoli florets </li>
                                      <li>2 tablespoons canola or vegetable oil</li>
                                      <li>3/4 pound chicken breast, sliced nthin across the grain</li>
                                      <li>Salt and ground black pepper  to taste </li>
                                      <li>1 bunch scallions, both white and green parts, chopped</li>
                                      <li>4 gralic cloves, minced</li>
                                      <li>1 tablespoon finely chopped gresh ginger </li>
                                      <li>1 or 2 serrano chilies. minced (seeded for a milder dish)</li>
                                      <li>1 large carrot, peeled and diced small or cut in 2-inch matchssticks</li>
                                      <li>2 eggs, beaten and seasoned with salt and pepper </li>
                                      <li>6 cups cooked basmati brown rice (1 1/2 cups uncooked)</li>
                                      <li>1 tp 2 tablespoons Thai or vvientnamese fish sauce (to taste)</li>
                                      <li>1/4 cup copped cilantro </li>
                                      <li>Lime wedges and sliced cucumber for seving (optional)</li>
                                      <li>soy sauce or ffish sauce for  serving.</li>
                                  </ol>
                              </div>
                          </div>
                          <div class="col-md-5 show">
                              <div class="calculate-recipe-item mobile_none">
                                  <div class="box-shadow border">
                                      <h4 class="tittle-calculate-recipe">
                                          For how many people do you want to cook?
                                      </h4>
                                      <div class="form-group row">
                                        <label for="" class="col-sm-3 col-form-label">Adults</label>
                                        <div class="col-sm-7">


                                        <div class="input-area">
                                          
                                          <span class="btn btn-info sine">-</span>

                                          <input type="text" class="form-control" placeholder="0" name="">
                                        
                                          <span class="btn btn-info sine right">+</span>
                                          
                                      </div>

                                        </div>
                                      </div>
                                      <div class="form-group row">
                                        <label for="" class="col-sm-3 col-form-label">Childreen</label>
                                        <div class="col-sm-7">


                                        <div class="input-area">
                                          
                                          <span class="btn btn-info sine">-</span>

                                          <input type="text" class="form-control" placeholder="0" name="">
                                        
                                          <span class="btn btn-info sine right">+</span>
                                          
                                      </div>

                                        </div>
                                      </div>
                                      <div class="button-area text-center">
                                           <a href="#" data-toggle="modal" data-target="#afterrecipe" class="btn btn-warning recipe calculate">Calculate</a>
                                       </div>
                                       <div class="description-list-after-recipe">
                                  <div class="description-item-name">
                                      <p>1. Rice</p>
                                      <p>2. Chicken</p>
                                      <p>3. Vegetable</p>
                                  </div>
                                  <div class="description-item-name quantity">
                                      <p>500g</p>
                                       <p>500g</p>
                                        <p>2 Cups</p>
                                  </div>
                              </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="main-paragrap-item">
                          <div class="row">
                              <div class="col-md-8">
                                <h4 class="tittle-pra">
                                    Procedure
                                </h4>
                                  <p class="paragrap-text-recipi">
                                      While powdered hot cocoa mix may be more convenient and less messy,there’s nothing quite as good as homemade <br> hot chocolate. The rich and decadent flavor of real chocolate mixed with creamy, frothy milk will blow your fuzzy slippers off! And if you really want to warm up quickly, add a bit of your favorite booze. 
                                      While powdered hot cocoa mix may be more convenient and less messy, there’s nothing quite as good as homemade hot chocolate. The rich and decadent flavor of real chocolate mixed with creamy, frothy milk will blow your fuzzy slippers off! And if you really want to warm up quickly, add a bit of your favorite booze. 
                                      homemade hot chocolate. The rich and decadent flavor of real chocolate mixed with creamy, frothy milk will blow your fuzzy slippers off! And if you really want to warm up quickly, add a bit of your favorite booze. 
                                  </p>
                                  <div class="iframe-youtube">
                                      <iframe width="400" height="250" src="https://www.youtube.com/embed/tpsp08JiToc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                  </div>
                                  <div class="comment-area">
                                      <h4>Comments</h4>
                                     <div class="bdr-bttom"></div>   
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                </div>
              </div>
            </div>


      <!--END  AFTER MEAL CALCULATE RICEPE -->


       <!-- LIST BABURCHI -->

      <!--  list baurchii -->
       
            <button type="button" class="btn btn-warning recipe text-center bdr" data-toggle="modal" data-target="#listbaburchi">List of baburchii</button>

            <div class="modal fade" id="listbaburchi" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
               <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                     <button type="button" class="close right" data-dismiss="modal" aria-label="Close">
                     <i class="fa fa-times cross" aria-hidden="true"></i>
                     </button>
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
                     <div class="list_of_baburchi_name section-padding">
                        <div class="owl-carousel list-baburchi-single owl-theme">
                            <div class="item">
                                <div class="row">
                                 <div class="col-md-3">
                                     <div class="list-baburchi text-center">
                                         <div class="item-image">
                                             <img src="image/baburchi.png" alt="baburchi">
                                             <div class="profile-popup">
                                                 <p> <a href="https://fontawesome.com/v4.7.0/icon/arrow-left" ></a>view profile</p>
                                             </div>
                                         </div>
                                         <div class="description">
                                             <h5>Md.Akter</h5>
                                             <p>Biriyani Specalist</p>
                                         </div>
                                         <span class="font-icon_5star baburchi-review">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star" class="bg-none"></i>
                                        </span>
                                     </div>
                                 </div>
                                 <div class="col-md-3">
                                     <div class="list-baburchi text-center">
                                         <div class="item-image">
                                             <img src="image/baburchi.png" alt="baburchi">
                                         </div>
                                         <div class="description">
                                             <h5>Md.Akter</h5>
                                             <p>Biriyani Specalist</p>
                                         </div>
                                         <span class="font-icon_5star baburchi-review">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star" class="bg-none"></i>
                                        </span>
                                     </div>
                                 </div>
                                 <div class="col-md-3">
                                     <div class="list-baburchi text-center">
                                         <div class="item-image">
                                             <img src="image/baburchi.png" alt="baburchi">
                                         </div>
                                         <div class="description">
                                             <h5>Md.Akter</h5>
                                             <p>Biriyani Specalist</p>
                                         </div>
                                         <span class="font-icon_5star baburchi-review">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star" class="bg-none"></i>
                                        </span>
                                     </div>
                                 </div>
                                 <div class="col-md-3">
                                     <div class="list-baburchi text-center">
                                         <div class="item-image">
                                             <img src="image/baburchi.png" alt="baburchi">
                                         </div>
                                         <div class="description">
                                             <h5>Md.Akter</h5>
                                             <p>Biriyani Specalist</p>
                                         </div>
                                         <span class="font-icon_5star baburchi-review">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star" class="bg-none"></i>
                                        </span>
                                     </div>
                                 </div>
                                 <div class="col-md-3">
                                     <div class="list-baburchi text-center">
                                         <div class="item-image">
                                             <img src="image/baburchi.png" alt="baburchi">
                                         </div>
                                         <div class="description">
                                             <h5>Md.Akter</h5>
                                             <p>Biriyani Specalist</p>
                                         </div>
                                         <span class="font-icon_5star baburchi-review">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star" class="bg-none"></i>
                                        </span>
                                     </div>
                                 </div>
                                 <div class="col-md-3">
                                     <div class="list-baburchi text-center">
                                         <div class="item-image">
                                             <img src="image/baburchi.png" alt="baburchi">
                                         </div>
                                         <div class="description">
                                             <h5>Md.Akter</h5>
                                             <p>Biriyani Specalist</p>
                                         </div>
                                         <span class="font-icon_5star baburchi-review">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star" class="bg-none"></i>
                                        </span>
                                     </div>
                                 </div>
                                 <div class="col-md-3">
                                     <div class="list-baburchi text-center">
                                         <div class="item-image">
                                             <img src="image/baburchi.png" alt="baburchi">
                                         </div>
                                         <div class="description">
                                             <h5>Md.Akter</h5>
                                             <p>Biriyani Specalist</p>
                                         </div>
                                         <span class="font-icon_5star baburchi-review">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star" class="bg-none"></i>
                                        </span>
                                     </div>
                                 </div>
                                 <div class="col-md-3">
                                     <div class="list-baburchi text-center">
                                         <div class="item-image">
                                             <img src="image/baburchi.png" alt="baburchi">
                                         </div>
                                         <div class="description">
                                             <h5>Md.Akter</h5>
                                             <p>Biriyani Specalist</p>
                                         </div>
                                         <span class="font-icon_5star baburchi-review">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star" class="bg-none"></i>
                                        </span>
                                     </div>
                                 </div>
                                 <div class="col-md-3">
                                     <div class="list-baburchi text-center">
                                         <div class="item-image">
                                             <img src="image/baburchi.png" alt="baburchi">
                                         </div>
                                         <div class="description">
                                             <h5>Md.Akter</h5>
                                             <p>Biriyani Specalist</p>
                                         </div>
                                         <span class="font-icon_5star baburchi-review">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star" class="bg-none"></i>
                                        </span>
                                     </div>
                                 </div>
                                 <div class="col-md-3">
                                     <div class="list-baburchi text-center">
                                         <div class="item-image">
                                             <img src="image/baburchi.png" alt="baburchi">
                                         </div>
                                         <div class="description">
                                             <h5>Md.Akter</h5>
                                             <p>Biriyani Specalist</p>
                                         </div>
                                         <span class="font-icon_5star baburchi-review">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star" class="bg-none"></i>
                                        </span>
                                     </div>
                                 </div>
                                 <div class="col-md-3">
                                     <div class="list-baburchi text-center">
                                         <div class="item-image">
                                             <img src="image/baburchi.png" alt="baburchi">
                                         </div>
                                         <div class="description">
                                             <h5>Md.Akter</h5>
                                             <p>Biriyani Specalist</p>
                                         </div>
                                         <span class="font-icon_5star baburchi-review">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star" class="bg-none"></i>
                                        </span>
                                     </div>
                                 </div>
                                 <div class="col-md-3">
                                     <div class="list-baburchi text-center">
                                         <div class="item-image">
                                             <img src="image/baburchi.png" alt="baburchi">
                                         </div>
                                         <div class="description">
                                             <h5>Md.Akter</h5>
                                             <p>Biriyani Specalist</p>
                                         </div>
                                         <span class="font-icon_5star baburchi-review">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star" class="bg-none"></i>
                                        </span>
                                     </div>
                                 </div>

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
                            <div class="item"></div>
                            <div class="item"></div>
                            <div class="item"></div>
                            <div class="item"></div>
                            <div class="item"></div>
                            <div class="item"></div>
                        </div> 
                         <div class="">
                             
                         </div>
                     </div>
                  </div>
               </div>
            </div>
         
      
      <!--  list baurchii -->

      <!-- END LIST BAABURCHI -->


       <!-- SING UP FIRST MODAL -->

      <button type="button" class="btn btn-warning recipe text-center" data-toggle="modal" data-target="#firstsingup">
          singup first
        </button>

        <!-- Modal -->
        <div class="modal fade" id="firstsingup" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content singup-popup">
                <button type="button" class="close right" data-dismiss="modal" aria-label="Close">
                     <i class="fa fa-times cross" aria-hidden="true"></i>
                     </button>
                <div class="modal-body">
                <div class="main-area-option-checkbox">
                    <div class="pul-search-item">
                        <input type="radio" name="gender" id="r1" value="location"> <label for="r1">Register As Baburchi</label>
                        <input type="radio" name="gender" id="r2" value="chef"><label for="r2">Register As Cutomer</label>
                     </div>
                     <div class="button-area next text-center">
                       <a href="#" class="btn btn-warning next">Next</a>
                   </div>
                </div>
              </div>
            </div>
          </div>
        </div>


      <!--END SING UP FIRST MODAL -->



      <!-- BABURCHI PROFILE SORT -->


      <!-- profile-baburchi -->
        
           <button type="button" class="btn btn-warning recipe text-center" data-toggle="modal" data-target="#baburchi-popup">
            Baburchi Profile
        </button>
            <div class="modal fade" id="baburchi-popup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
               <div class="modal-dialog" role="document">
                  <div class="modal-content login">
                     <button type="button" class="close right" data-dismiss="modal" aria-label="Close">
                     <i class="fa fa-times cross" aria-hidden="true"></i>
                     </button>
                     <div class="header-area-singup-body text-center">
                        <div class="tittle-popup baburchi-pro">
                           <h4>Baburchi profile</h4>
                        </div>
                     </div>
                     <div class="modal-body">
                        <div class="popup_baburchi_profile">
                            <div class="section-padding profile-item">
                            <div class="profile-top-area">
                                <div class="list-baburchi profile text-left">
                                 <div class="popup_profile_img profile">
                                     <img src="image/baburchi.png" alt="baburchi">
                                 </div>
                                 <div class="description">
                                     <h5>Md. Akter</h5>
                                     <p>Biriyani Specalist</p>
                                
                                 <span class="font-icon_5star baburchi-review">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star" class="bg-none"></i>
                                </span>
                                <div class="love-fav">
                                    <img src="image/like.png"> <span>Make as Favourte</span>
                                     </div>
                                </div>
                             </div>
                            </div>
                            <div class="profile-all-list">
                                <div class="profile-name-baburchi-popup">
                                <p>Shop No</p>
                                <p>Location</p>
                                <p>Mobile No</p>
                                <p>No. of programe arranged</p>
                                <p>Type of programe arranged</p>
                                <p>Maximum arranged capacity</p>
                                <p>No. of team member</p>
                                <p>Avarage fecs</p>
                                <p>Email</p>
                                <p>Social network</p>

                            </div>
                            <div class="profile-description-baburchi-popup">
                                <p>Rita Biriyani house</p>
                                <p>73/1 Elephent road, dhaka</p>
                                <p>02-9664096</p>
                                <p>65</p>
                                <p>Wedding</p>
                                <p>1000 people</p>
                                <p>10</p>
                                <p>10000 - 50000 <span>(depend on amount of people)</span></p>
                                <p>akter@gmail.com</p>
                                <p><a href="#"><img src="image/facebook.png"></a></p>

                            </div>
                            </div>
                            <div class="profile-baburchii-footer text-center">
                                <h4>Want to Rate him?</h4>
                                <div class="font-icon_5star baburchi-review footer">
                                <a href="#"><i class="far fa-star"></i></a>   <a href="#"><i class="far fa-star"></i></a> 
                                     <a href="#"><i class="far fa-star"></i></a> 
                                      <a href="#"><i class="far fa-star"></i></a> 
                                       <a href="#"><i class="far fa-star"></i></a> 
                                </div>
                            </div>
                        </div>
                        </div>
                        
                     </div>
                  </div>
               </div>
            </div>

       <!-- end profile-baburchi -->

       <!-- BABURCHI PROFILE SORT -->
</div>
	





<?php include"inc/footer.php";?>