
  <meta name="description" content="Responsive HTML5 E-Commerce Template" />
  <meta name="keywords" content="responsive html5 template, e-commerce, shop, bootstrap 3.0, css, jquery, flat, modern" />
  <meta name="author" content="8Guild" />
  <!--Mobile Specific Meta Tag-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <!--Favicon-->
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <link rel="icon" href="favicon.ico" type="image/x-icon">
  <!--Master Slider Styles-->

  <!--Adding Media Queries Support for IE8-->
    <!--[if lt IE 9]>
      <script src="js/plugins/respond.js"></script>
      <![endif]-->
      <!--Google Analytics-->
      <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-46803427-2']);
      _gaq.push(['_trackPageview']);
      (function () {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';

        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
      })();
      </script>


      <!--Body-->
      <body style="padding:0px;">

        <!--Color Switcher-->
        <div class="color-switcher group animated">
          <div class="toggle"><i class="fa fa-cog"></i></div>

        </div><!--Color Switcher End-->

        <!--Login Modal-->
        <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h2>Login or <a href="register.html">Register</a></h2>
                <p class="large">Use social accounts</p>
                <div class="social-login">
                  <a class="facebook" href="#"><i class="fa fa-facebook-square"></i></a>
                  <a class="google" href="#"><i class="fa fa-google-plus-square"></i></a>
                  <a class="twitter" href="#"><i class="fa fa-twitter-square"></i></a>
                </div>
              </div>
              <div class="modal-body">
                <form class="login-form">
                  <div class="form-group group">
                    <label for="log-email">Email</label>
                    <input type="email" class="form-control" name="log-email" id="log-email" placeholder="Enter your email" required>
                    <a class="help-link" href="#">Forgot email?</a>
                  </div>
                  <div class="form-group group">
                    <label for="log-password">Password</label>
                    <input type="text" class="form-control" name="log-password" id="log-password" placeholder="Enter your password" required>
                    <a class="help-link" href="#">Forgot password?</a>
                  </div>
                  <div class="checkbox">
                    <label><input type="checkbox" name="remember"> Remember me</label>
                  </div>
                  <input class="btn btn-success" type="submit" value="Login">
                </form>
              </div>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <!--Header-->
        <header data-offset-top="500" data-stuck="600"><!--data-offset-top is when header converts to small variant and data-stuck when it becomes visible. Values in px represent position of scroll from top. Make sure there is at least 100px between those two values for smooth animation-->

          <!--Search Form-->
          <form class="search-form closed" method="get" role="form" autocomplete="off">
            <div class="container">
              <div class="close-search"><i class="fa fa-times"></i></div>
              <div class="form-group">
                <label class="sr-only" for="search-hd">Search for procuct</label>
                <input type="text" class="form-control" name="search-hd" id="search-hd" placeholder="Search for procuct">
                <button type="submit"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
              </div>
            </div>
          </form>

          <!--Split Background-->
          <div class="left-bg"></div>
          <div class="right-bg"></div>

          <div class="container">
            <!-- <a class="logo" href="index.html"><img src="img/logo.png" alt="Bushido"/></a> -->

            <!--Language / Currency Switchers-->
            <ul class="switchers">
              <li>$
                <ul class="dropdown">
                  <li><a href="#">&euro;</a></li>
                  <li><a href="#">$</a></li>
                </ul>
              </li>
              <li>En
                <ul class="dropdown">
                  <li><a href="#">En</a></li>
                  <li><a href="#">Fr</a></li>
                  <li><a href="#">Gr</a></li>
                </ul>
              </li>
            </ul>

            <!--Mobile Menu Toggle-->
            <div class="menu-toggle"><i class="fa fa-list"></i></div>
            <div class="mobile-border"><span></span></div>

            <!--Main Menu-->
            <nav class="menu">
              <ul class="main">
                <li class="has-submenu"><a href='<?php echo base_url()."index.php/"?>'>Home</a><!--Class "has-submenu" for proper highlighting and dropdown-->

                </li>
                <li class="has-submenu"><a href='<?php echo base_url()."index.php/". "thriftshop"?>'>Shop<i class="fa fa-chevron-down"></i></a>
                <!--   <ul class="submenu">
                    <li><a href='<?php echo base_url()."index.php/". "thriftshop/wishlist"?>'>Wishlist</a></li>
                    <li><a href='<?php echo base_url()."index.php/". "thriftshop/shop"?>'>Store</a></li>
                  </ul> -->
                </li>
                <li class="has-submenu"><a href='<?php echo base_url()."index.php/". "thriftshop/support"?>'>Support<i class="fa fa-chevron-down"></i></a>

                </li>

                 <li class="has-submenu"><a href='<?php echo base_url()."index.php/". "user/signup"?>'>Signup<i class="fa fa-chevron-down"></i></a>

                </li>
           <!--  <li class="has-submenu"><a href="#">Pages<span class="label">NEW</span><i class="fa fa-chevron-down"></i></a>
              <ul class="submenu">
                <li><a href="register.html">Login / Registration</a></li>
                <li><a href="account-personal-info.html">Account: Personal Info<span class="label">NEW</span></a></li>
                <li><a href="account-addresses.html">Account: Addresses<span class="label">NEW</span></a></li>
                <li><a href="order-history.html">Orders History<span class="label">NEW</span></a></li>
                <li><a href="order-tracking.html">Order Tracking<span class="label">NEW</span></a></li>
                <li><a href="delivery-info.html">Delivery Info<span class="label">NEW</span></a></li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="contacts.html">Contacts</a></li>
                <li><a href="coming-soon.html">Coming Soon</a></li>
                <li><a href="404.html">404 Page</a></li>
                <li><a href="support.html">Support Page</a></li>
                <li><a href="cs-page.html">Components &amp; Styles</a></li>
              </ul>
            </li> -->

          </ul>
          <ul class="catalog">
            <li class="has-submenu"><a href="shop-filters-left-3cols.html">Phones<i class="fa fa-chevron-down"></i></a>
              <ul class="submenu">
                <li><a href="#">Nokia</a></li>
                <li class="has-submenu"><a href="#">iPhone</a><!--Class "has-submenu" for adding carret and dropdown-->
                  <ul class="sub-submenu">
                    <li><a href="#">iPhone 4</a></li>
                    <li><a href="#">iPhone 4s</a></li>
                    <li><a href="#">iPhone 5c</a></li>
                    <li><a href="#">iPhone 5s</a></li>
                  </ul>
                </li>
                <li><a href="#">HTC</a></li>
                <li class="has-submenu"><a href="#">Samsung</a>
                  <ul class="sub-submenu">
                    <li><a href="#">Galaxy Note 3</a></li>
                    <li><a href="#">Galaxy S5</a></li>
                    <li><a href="#">Galaxy S3 Neo</a></li>
                    <li><a href="#">Galaxy Gear</a></li>
                    <li><a href="#">Galaxy S Duos 2</a></li>
                  </ul>
                </li>
                <li><a href="#">BlackBerry</a></li>
                <li class="offer">
                  <div class="col-1">
                    <p class="p-style2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  </div>
                  <div class="col-2">
                    <img src='<?php echo base_url()."assets/ThriftshopTheme/img/LoginCover.jpg"?>' alt="Special Offer"/>
                    <a class="btn btn-block" href="#"><span>584$</span>Special offer</a>
                  </div>
                </li>
              </ul>
            </li>
            <li><a href="shop-filters-left-3cols.html">Cameras</a></li>
            <li><a href="shop-filters-left-3cols.html">Personal computers</a></li>
            <li><a href="shop-filters-left-3cols.html">Gaming consoles</a></li>
            <li><a href="shop-filters-left-3cols.html">TV sets</a></li>
          </ul>
        </nav>
        
        <!--Toolbar-->
        <div class="toolbar group">
          <button class="search-btn btn-outlined-invert"><i class="glyphicon glyphicon-search"></i></button>
          <div class="middle-btns">
            <a class="btn-outlined-invert" href='<?php echo base_url()."index.php/". "thriftshop/wishlist"?>'><i class="fa fa-heart"></i> <span>Wishlist</span></a>
            <a class="login-btn btn-outlined-invert" href="#" data-toggle="modal" data-target="#loginModal"><i class="glyphicon glyphicon-user"></i> <span>Login</span></a>
          </div>
          <div class="cart-btn">
            <a class="btn btn-outlined-invert" href='<?php echo base_url()."index.php/". "user/signup"?>'><i class="glyphicon glyphicon-user"></i></a>
            
            <!--Cart Dropdown-->
            <div class="cart-dropdown">
              <span></span><!--Small rectangle to overlap Cart button-->
              <div class="body">
                
               <?php if($user_me['name'] or $this->session->userdata('id')) {?>

              
                <a href='<?php echo base_url()."index.php/". "user/profile"?>' style=" border-radius:0px;">View Profile <i style="text-align:right" class="fa fa-user"></i></a>
             

            </div>
            <div class="footer group">
              <div class="buttons">
                <a class="btn btn-outlined-invert" href='<?php echo base_url()."index.php/". "user/logout"?>' style=" border-radius:0px;"><i class="fa fa-sign-out"></i>Logout</a>
                <a class="btn btn-outlined-invert" href='<?php echo base_url()."index.php/". "user/myStore"?>' style=" border-radius:0px;"><i class="fa fa-building-o"></i>My Store</a>
              </div>
            </div>

            <?php } else {?>

            <h1>Login With:</h1>

            <div class="social-login"> 
                  <a class="facebook" href='<?php echo $login_url; ?>'><i class="fa fa-facebook-square"></i></a>
                  <a class="buttonText customGPlusSignIn" href="#"><i class="fa fa-google-plus-square"></i></a>
                  <a class="twitter" data-toggle="modal" data-target="#myModallogin" href="#"> <i class="fa fa-sign-in"></i></a>
                </div>

           <!--  <li>
              <a href='<?php echo $login_url; ?>' class="btn-facebook"style="">Login with <i class="fa fa-facebook"></i></a>
            </li>  

            <li>
              <a  href="#" data-toggle="modal" data-target="#myModallogin" style=" border-radius:0px;">Login with Thrift  <i class="fa fa-sign-in"></i></a>
            </li>    -->

          </div>
          <div class="footer group">
            
          </div>

          <script type="text/javascript">
  /**
   * Handler for the signin callback triggered after the user selects an account.
   */
  function onSignInCallback(resp) {
    gapi.client.load('plus', 'v1', apiClientLoaded);
    console.log("here");
  }

  function insertGoogle(googleId)
  {


    console.log (googleId);

  }

  /**
   * Sets up an API call after the Google API client loads.
   */
  function apiClientLoaded() {
    gapi.client.plus.people.get({userId: 'me'}).execute(handleEmailResponse);
  }

  /**
   * Response callback for when the API client receives a response.
   *
   * @param resp The API response object with the user email and profile information.
   */
  function handleEmailResponse(resp) {
    var primaryEmail;
    for (var i=0; i < resp.emails.length; i++) {
      if (resp.emails[i].type === 'account') 
        primaryEmail = resp.emails[i].value;

    }

   // document.getElementById('responseContainer').value = 'Primary email: ' +
      //  primaryEmail + '\n\nFull Response:\n' + JSON.stringify(resp);
    var googleData = JSON.stringify(resp);
    var googleId= resp.id;
    var gender= resp.gender;
    var age= resp.ageRange.min;
    var pUser = resp.isPlusUser;
    var fName = resp.name.givenName;
    var lName = resp.name.familyName;
    var pic = resp.image.url;

    console.log (pic);
     insertGoogle(pic);
     $('.img-thumbnail').attr('src', pic);
       $('.google_name').html(' ' + fName +' '+lName + '    ');
     // check if user is registered here
      $.ajax({
      url: "<?=base_url()?>.index.php/user/gmail_exists",
       type: 'POST',
       data: {"googleId":googleId},
      // dataType:"json", 
       success: function(data){
      // alert(pic);;
           //if true
         //  get details
// if false
//redirect
 
       // window.location = "http://localhost:90/thriftShop_Iteration2/index.php/user/googleLogin/gId/"+<?php echo("googleId") ?>+"/gMail/"+<?php echo("fName") ?>;

       },
       error: function(){
       //    alert("Fail");
       }
   });
  
   e.preventDefault();

   //Register new user
   
  }



  </script> <!--Google button !-->    

<?php } ?>

        </div><!--Cart Dropdown Close-->
      </div>
    </div><!--Toolbar Close-->
  </div>
</header><!--Header Close-->


<script>
gapi.client.load('plus','v1', function(){
    var request = gapi.client.plus.people.get({
        'userId': 'me'
    });
    request.execute(function(resp) {
        console.log('Retrieved profile for:' + resp.displayName);
    });
});
</script>
<script>
function render() {
    gapi.signin.render('customBtn', {
        'callback': 'onSignInCallback',
        'clientid': '668784135808-461oqhniijb05dp1s5gf9gt7tboq0d4m.apps.googleusercontent.com',
        'cookiepolicy': 'single_host_origin',
        'requestvisibleactions': 'http://schema.org/AddAction',
        'scope': 'https://www.googleapis.com/auth/plus.login'
    });
}
</script>

<!--Page Content-->
<div class="page-content">
    
    <!--Hero Slider-->
    <section class="hero-slider" style="padding:0px">
        <div class="master-slider" id="hero-slider">
            
            <!--Slide 1-->
            <div class="ms-slide" data-delay="7">
                <div class="overlay"></div>
                <img src='<?php echo base_url()."assets/ThriftshopTheme/img/LoginCover.jpg"?>' data-src='<?php echo base_url()."assets/ThriftshopTheme/img/LoginCover.jpg"?>' alt="Nikon D4S"/>
                <h2 style="width: 456px; left: 110px; top: 110px;" class="light-color ms-layer" data-effect="top(50,true)" data-duration="700" data-delay="250" data-ease="easeOutQuad">Nikon D4S</h2>
                <p style="width: 456px; left: 110px; top: 210px;" class="light-color ms-layer" data-effect="back(500)" data-duration="700" data-delay="500" data-ease="easeOutQuad">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea.</p>
                <div style="left: 110px; top: 300px;" class="ms-layer button" data-effect="bottom(50,true)" data-duration="600" data-delay="950" data-ease="easeOutQuad"><a class="btn btn-primary" href="#"><span>1845$</span>Buy it now</a></div>
            </div>
            
            <!--Slide 2-->
            <div class="ms-slide" data-delay="7">
                <span class="overlay"></span>
                <img src="masterslider/blank.gif" data-src='<?php echo base_url()."assets/ThriftshopTheme/img/LoginCover.jpg"?>' alt="Nest"/>
                <h2 style="width: 456px; left: 110px; top: 110px;" class="light-color ms-layer" data-effect="bottom(50,true)" data-duration="700" data-delay="250" data-ease="easeOutQuad">Nest</h2>
                <p style="width: 456px; left: 110px; top: 210px;" class="light-color ms-layer" data-effect="bottom(50,true)" data-duration="700" data-delay="500" data-ease="easeOutQuad">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea.</p>
                <div style="left: 110px; top: 300px;" class="ms-layer button" data-effect="rotatebottom(30|90,long,br,true)" data-duration="600" data-delay="950" data-ease="easeOutQuad"><a class="btn btn-primary" href="#"><span>1640$</span>Buy it now</a></div>
            </div>
            
            <!--Slide 3-->
            <div class="ms-slide" data-delay="7">
                <div class="overlay"></div>
                <img src="masterslider/blank.gif" data-src='<?php echo base_url()."assets/ThriftshopTheme/img/LoginCover.jpg"?>' alt="3D Printer"/>
                <h2 style="width: 456px; left: 110px; top: 110px;" class="light-color ms-layer" data-effect="left(50,true)" data-duration="700" data-delay="250" data-ease="easeOutQuad">3D Printer</h2>
                <p style="width: 456px; left: 110px; top: 210px;" class="light-color ms-layer" data-effect="left(50,true)" data-duration="700" data-delay="500" data-ease="easeOutQuad">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea.</p>
                <div style="left: 110px; top: 300px;" class="ms-layer button" data-effect="left(50,true)" data-duration="600" data-delay="950" data-ease="easeOutQuad"><a class="btn btn-primary" href="#"><span>2500$</span>Buy it now</a></div>
            </div>
            
        </div>
    </section><!--Hero Slider Close-->
    
    <!--Categories-->
    <section class="cat-tiles">
        <div class="container">
            <h2>Browse categories</h2>
            <div class="row">
                <!--Category-->
                <div class="category col-lg-2 col-md-2 col-sm-4 col-xs-6">
                    <a href="#">
                        <img src='<?php echo base_url()."assets/ThriftshopTheme/img/LoginCover.jpg"?>' alt="1"/>
                        <p>Category name</p>
                    </a>
                </div>
                <!--Category-->
                <div class="category col-lg-2 col-md-2 col-sm-4 col-xs-6">
                    <a href="#">
                        <img src='<?php echo base_url()."assets/ThriftshopTheme/img/LoginCover.jpg"?>' alt="2"/>
                        <p>Category name</p>
                    </a>
                </div>
                <!--Category-->
                <div class="category col-lg-2 col-md-2 col-sm-4 col-xs-6">
                    <a href="#">
                        <img src='<?php echo base_url()."assets/ThriftshopTheme/img/LoginCover.jpg"?>' alt="3"/>
                        <p>Category name</p>
                    </a>
                </div>
                <!--Category-->
                <div class="category col-lg-2 col-md-2 col-sm-4 col-xs-6">
                    <a href="#">
                        <img src='<?php echo base_url()."assets/ThriftshopTheme/img/LoginCover.jpg"?>' alt="4"/>
                        <p>Category name</p>
                    </a>
                </div>
                <!--Category-->
                <div class="category col-lg-2 col-md-2 col-sm-4 col-xs-6">
                    <a href="#">
                        <img src='<?php echo base_url()."assets/ThriftshopTheme/img/LoginCover.jpg"?>' alt="5"/>
                        <p>Category name</p>
                    </a>
                </div>
                <!--Category-->
                <div class="category col-lg-2 col-md-2 col-sm-4 col-xs-6">
                    <a href="#">
                        <img src='<?php echo base_url()."assets/ThriftshopTheme/img/LoginCover.jpg"?>' alt="5"/>
                        <p>Category name</p>
                    </a>
                </div>
            </div>
        </div>
    </section><!--Categories Close-->
    
    <!--Catalog Grid-->
    <section class="catalog-grid">
        <div class="container">
            <h2 class="primary-color">Catalog picks</h2>
            <div class="row">
                <!--Tile-->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="tile">
                        <div class="badges">
                            <span class="sale"></span>
                        </div>
                        <div class="price-label">715,00 $</div>
                        <a href="#"><img src='<?php echo base_url()."assets/ThriftshopTheme/img/LoginCover.jpg"?>' alt="1"/></a>
                        <div class="footer">
                            <a href="#">Nikon D5300</a>
                            <span>by Pirate3d</span>
                            <div class="tools">
                                <div class="rate">
                                    <span class="active"></span>
                                    <span class="active"></span>
                                    <span class="active"></span>
                                    <span></span>
                                    <span></span>
                                </div>
                                <!--Add To Cart Button-->
                                <a class="add-cart-btn" href="#"><span>To cart</span><i class="fa fa-shopping-cart"></i></a>
                                <!--Share Button-->
                                <div class="share-btn">
                                    <div class="hover-state">
                                        <a class="fa fa-facebook-square" href="#"></a>
                                        <a class="fa fa-twitter-square" href="#"></a>
                                        <a class="fa fa-google-plus-square" href="#"></a>
                                    </div>
                                    <i class="fa fa-share"></i>
                                </div>
                                <!--Add To Wishlist Button-->
                                <a class="wishlist-btn" href="#">
                                    <div class="hover-state">Wishlist</div>
                                    <i class="fa fa-plus"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Tile-->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="tile">
                        <div class="badges">
                            <span class="out"></span>
                        </div>
                        <div class="price-label">715,00 $</div>
                        <div class="price-label old-price">920,00 $</div>
                        <a href="#"><img src='<?php echo base_url()."assets/ThriftshopTheme/img/LoginCover.jpg"?>' alt="2"/></a>
                        <div class="footer">
                            <a href="#">Nikon Coolpix</a>
                            <span>by Pirate3d</span>
                            <div class="tools">
                                <div class="rate">
                                    <span class="active"></span>
                                    <span class="active"></span>
                                    <span class="active"></span>
                                    <span></span>
                                    <span></span>
                                </div>
                                <!--Add To Cart Button-->
                                <a class="add-cart-btn" href="#"><span>To cart</span><i class="fa fa-shopping-cart"></i></a>
                                <!--Share Button-->
                                <div class="share-btn">
                                    <div class="hover-state">
                                        <a class="fa fa-facebook-square" href="#"></a>
                                        <a class="fa fa-twitter-square" href="#"></a>
                                        <a class="fa fa-google-plus-square" href="#"></a>
                                    </div>
                                    <i class="fa fa-share"></i>
                                </div>
                                <!--Add To Wishlist Button-->
                                <a class="wishlist-btn" href="#">
                                    <div class="hover-state">Wishlist</div>
                                    <i class="fa fa-plus"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Tile-->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="tile">
                        <div class="badges">
                            <span class="best-seller"></span>
                        </div>
                        <div class="price-label">715,00 $</div>
                        <a href="#"><img src='<?php echo base_url()."assets/ThriftshopTheme/img/LoginCover.jpg"?>' alt="3"/></a>
                        <div class="footer">
                            <a href="#">Nikon WP-N3</a>
                            <span>by Pirate3d</span>
                            <div class="tools">
                                <div class="rate">
                                    <span class="active"></span>
                                    <span class="active"></span>
                                    <span class="active"></span>
                                    <span></span>
                                    <span></span>
                                </div>
                                <!--Add To Cart Button-->
                                <a class="add-cart-btn" href="#"><span>To cart</span><i class="fa fa-shopping-cart"></i></a>
                                <!--Share Button-->
                                <div class="share-btn">
                                    <div class="hover-state">
                                        <a class="fa fa-facebook-square" href="#"></a>
                                        <a class="fa fa-twitter-square" href="#"></a>
                                        <a class="fa fa-google-plus-square" href="#"></a>
                                    </div>
                                    <i class="fa fa-share"></i>
                                </div>
                                <!--Add To Wishlist Button-->
                                <a class="wishlist-btn" href="#">
                                    <div class="hover-state">Wishlist</div>
                                    <i class="fa fa-plus"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Tile-->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="tile">
                        <div class="price-label">715,00 $</div>
                        <a href="#"><img src='<?php echo base_url()."assets/ThriftshopTheme/img/LoginCover.jpg"?>' alt="4"/></a>
                        <div class="footer">
                            <a href="#">Nikkor 10-30 VR</a>
                            <span>by Pirate3d</span>
                            <div class="tools">
                                <div class="rate">
                                    <span class="active"></span>
                                    <span class="active"></span>
                                    <span class="active"></span>
                                    <span></span>
                                    <span></span>
                                </div>
                                <!--Add To Cart Button-->
                                <a class="add-cart-btn" href="#"><span>To cart</span><i class="fa fa-shopping-cart"></i></a>
                                <!--Share Button-->
                                <div class="share-btn">
                                    <div class="hover-state">
                                        <a class="fa fa-facebook-square" href="#"></a>
                                        <a class="fa fa-twitter-square" href="#"></a>
                                        <a class="fa fa-google-plus-square" href="#"></a>
                                    </div>
                                    <i class="fa fa-share"></i>
                                </div>
                                <!--Add To Wishlist Button-->
                                <a class="wishlist-btn" href="#">
                                    <div class="hover-state">Wishlist</div>
                                    <i class="fa fa-plus"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Tile-->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="tile">
                        <div class="price-label">715,00 $</div>
                        <div class="price-label old-price">920,00 $</div>
                        <a href="#"><img src='<?php echo base_url()."assets/ThriftshopTheme/img/LoginCover.jpg"?>' alt="5"/></a>
                        <div class="footer">
                            <a href="#">Nikon WU 1b</a>
                            <span>by Pirate3d</span>
                            <div class="tools">
                                <div class="rate">
                                    <span class="active"></span>
                                    <span class="active"></span>
                                    <span class="active"></span>
                                    <span></span>
                                    <span></span>
                                </div>
                                <!--Add To Cart Button-->
                                <a class="add-cart-btn" href="#"><span>To cart</span><i class="fa fa-shopping-cart"></i></a>
                                <!--Share Button-->
                                <div class="share-btn">
                                    <div class="hover-state">
                                        <a class="fa fa-facebook-square" href="#"></a>
                                        <a class="fa fa-twitter-square" href="#"></a>
                                        <a class="fa fa-google-plus-square" href="#"></a>
                                    </div>
                                    <i class="fa fa-share"></i>
                                </div>
                                <!--Add To Wishlist Button-->
                                <a class="wishlist-btn" href="#">
                                    <div class="hover-state">Wishlist</div>
                                    <i class="fa fa-plus"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Tile-->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="tile">
                        <div class="price-label">715,00 $</div>
                        <a href="#"><img src='<?php echo base_url()."assets/ThriftshopTheme/img/LoginCover.jpg"?>' alt="6"/></a>
                        <div class="footer">
                            <a href="#">Nikon V3</a>
                            <span>by Pirate3d</span>
                            <div class="tools">
                                <div class="rate">
                                    <span class="active"></span>
                                    <span class="active"></span>
                                    <span class="active"></span>
                                    <span></span>
                                    <span></span>
                                </div>
                                <!--Add To Cart Button-->
                                <a class="add-cart-btn" href="#"><span>To cart</span><i class="fa fa-shopping-cart"></i></a>
                                <!--Share Button-->
                                <div class="share-btn">
                                    <div class="hover-state">
                                        <a class="fa fa-facebook-square" href="#"></a>
                                        <a class="fa fa-twitter-square" href="#"></a>
                                        <a class="fa fa-google-plus-square" href="#"></a>
                                    </div>
                                    <i class="fa fa-share"></i>
                                </div>
                                <!--Add To Wishlist Button-->
                                <a class="wishlist-btn" href="#">
                                    <div class="hover-state">Wishlist</div>
                                    <i class="fa fa-plus"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Tile-->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="tile">
                        <div class="price-label">715,00 $</div>
                        <a href="#"><img src='<?php echo base_url()."assets/ThriftshopTheme/img/LoginCover.jpg"?>' alt="7"/></a>
                        <div class="footer">
                            <a href="#">Nikon J4</a>
                            <span>by Pirate3d</span>
                            <div class="tools">
                                <div class="rate">
                                    <span class="active"></span>
                                    <span class="active"></span>
                                    <span class="active"></span>
                                    <span></span>
                                    <span></span>
                                </div>
                                <!--Add To Cart Button-->
                                <a class="add-cart-btn" href="#"><span>To cart</span><i class="fa fa-shopping-cart"></i></a>
                                <!--Share Button-->
                                <div class="share-btn">
                                    <div class="hover-state">
                                        <a class="fa fa-facebook-square" href="#"></a>
                                        <a class="fa fa-twitter-square" href="#"></a>
                                        <a class="fa fa-google-plus-square" href="#"></a>
                                    </div>
                                    <i class="fa fa-share"></i>
                                </div>
                                <!--Add To Wishlist Button-->
                                <a class="wishlist-btn" href="#">
                                    <div class="hover-state">Wishlist</div>
                                    <i class="fa fa-plus"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Tile-->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="tile">
                        <div class="price-label">715,00 $</div>
                        <a href="#"><img src='<?php echo base_url()."assets/ThriftshopTheme/img/LoginCover.jpg"?>' alt="8"/></a>
                        <div class="footer">
                            <a href="#">Nikkor AF-S</a>
                            <span>by Pirate3d</span>
                            <div class="tools">
                                <div class="rate">
                                    <span class="active"></span>
                                    <span class="active"></span>
                                    <span class="active"></span>
                                    <span></span>
                                    <span></span>
                                </div>
                                <!--Add To Cart Button-->
                                <a class="add-cart-btn" href="#"><span>To cart</span><i class="fa fa-shopping-cart"></i></a>
                                <!--Share Button-->
                                <div class="share-btn">
                                    <div class="hover-state">
                                        <a class="fa fa-facebook-square" href="#"></a>
                                        <a class="fa fa-twitter-square" href="#"></a>
                                        <a class="fa fa-google-plus-square" href="#"></a>
                                    </div>
                                    <i class="fa fa-share"></i>
                                </div>
                                <!--Add To Wishlist Button-->
                                <a class="wishlist-btn" href="#">
                                    <div class="hover-state">Wishlist</div>
                                    <i class="fa fa-plus"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--Catalog Grid Close-->
    
    <!--Tabs Widget-->
    <section class="tabs-widget">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs">
            <li class="active"><a href="#bestsel" data-toggle="tab">Bestseller items</a></li>
            <li><a href="#onsale" data-toggle="tab">Items on sale</a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade in active" id="bestsel">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 col-md-7 col-sm-7">
                            <a class="media-link" href="#">
                                <div class="overlay">
                                    <div class="descr"><div>X-MAS LIGHT IPHONE LENS<span>$14.95</span></div></div>
                                </div>
                                <img src='<?php echo base_url()."assets/ThriftshopTheme/img/LoginCover.jpg"?>' alt="1"/>
                            </a>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-5">
                            <a class="media-link" href="#">
                                <div class="overlay">
                                    <div class="descr"><div>Hedadset for iPhone<span>$19.40</span></div></div>
                                </div>
                                <img src='<?php echo base_url()."assets/ThriftshopTheme/img/LoginCover.jpg"?>' alt="2"/>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <a class="media-link" href="#">
                                <div class="overlay">
                                    <div class="descr"><div>Product Name<span>$24.15</span></div></div>
                                </div>
                                <img src='<?php echo base_url()."assets/ThriftshopTheme/img/LoginCover.jpg"?>' alt="3"/>
                            </a>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-5">
                            <a class="media-link" href="#">
                                <div class="overlay">
                                    <div class="descr"><div>Product Name<span>$24.15</span></div></div>
                                </div>
                                <img src='<?php echo base_url()."assets/ThriftshopTheme/img/LoginCover.jpg"?>' alt="4"/>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <a class="media-link" href="#">
                                <div class="overlay">
                                    <div class="descr"><div>Product Name<span>$24.15</span></div></div>
                                </div>
                                <img src='<?php echo base_url()."assets/ThriftshopTheme/img/LoginCover.jpg"?>' alt="5"/>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="onsale">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <a class="media-link" href="#">
                                <div class="overlay">
                                    <div class="descr"><div>Product Name<span>$14.95</span></div></div>
                                </div>
                                <img src='<?php echo base_url()."assets/ThriftshopTheme/img/LoginCover.jpg"?>' alt="6"/>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <a class="media-link" href="#">
                                <div class="overlay">
                                    <div class="descr"><div>Product Name<span>$19.40</span></div></div>
                                </div>
                                <img src='<?php echo base_url()."assets/ThriftshopTheme/img/LoginCover.jpg"?>' alt="7"/>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <a class="media-link" href="#">
                                <div class="overlay">
                                    <div class="descr"><div>Product Name<span>$19.40</span></div></div>
                                </div>
                                <img src='<?php echo base_url()."assets/ThriftshopTheme/img/LoginCover.jpg"?>' alt="8"/>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <a class="media-link" href="#">
                                <div class="overlay">
                                    <div class="descr"><div>Product Name<span>$14.95</span></div></div>
                                </div>
                                <img src='<?php echo base_url()."assets/ThriftshopTheme/img/LoginCover.jpg"?>' alt="9"/>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <a class="media-link" href="#">
                                <div class="overlay">
                                    <div class="descr"><div>Product Name<span>$19.40</span></div></div>
                                </div>
                                <img src='<?php echo base_url()."assets/ThriftshopTheme/img/LoginCover.jpg"?>' alt="10"/>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <a class="media-link" href="#">
                                <div class="overlay">
                                    <div class="descr"><div>Product Name<span>$19.40</span></div></div>
                                </div>
                                <img src='<?php echo base_url()."assets/ThriftshopTheme/img/LoginCover.jpg"?>' alt="11"/>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--Tabs Widget Close-->
    
    <!--Posts/Twitter Widget-->
    <section class="posts-widget">
        <div class="tw-bg"></div>
        <div class="container">
            <div class="row">
                <div class="latest-posts col-lg-8 col-md-8">
                    <div class="row">
                        <div class="col-lg-3">
                            <h2 class="extra-bold">Latests posts</h2>
                            <a class="btn btn-success btn-block" href="#">To blog</a>
                        </div>
                        <div class="col-lg-9">
                            <!--Post-->
                            <div class="post row">
                                <div class="col-lg-6 col-sm-6">
                                    <a href="#"><img src='<?php echo base_url()."assets/ThriftshopTheme/img/LoginCover.jpg"?>' alt="1"/></a>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <h3><a href="#">Another Title</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                                    <div class="author"><i class="fa fa-user"></i><a href="#">By Bedismo</a></div>
                                    <div class="comments"><i class="fa fa-comment"></i><a href="#">Comments (34)</a></div>
                                </div>
                            </div><!--Post End-->
                            <!--Post-->
                            <div class="post row">
                                <div class="col-lg-6 col-sm-6">
                                    <a href="#"><img src='<?php echo base_url()."assets/ThriftshopTheme/img/LoginCover.jpg"?>' alt="2"/></a>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <h3><a href="#">Awesome Title</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                                    <div class="author"><i class="fa fa-user"></i><a href="#">By Jeddah</a></div>
                                    <div class="comments"><i class="fa fa-comment"></i><a href="#">Comments (101)</a></div>
                                </div>
                            </div><!--Post End-->
                        </div>
                    </div>
                </div>
                <div class="twitter-feed col-lg-4 col-md-4">
                    <a class="tw-follow" href="https://twitter.com/8Guild" target="_blank">
                        <div class="button">Follow us<i class="fa fa-twitter"></i></div>
                        <h2 class="extra-bold">On Twitter <i class="fa fa-twitter"></i></h2>
                    </a>
                    <!--Tweet-->
                    <div class="tweet">
                        <a href="#">@Bedismo</a>
                        <p class="p-style3">Uberly impressed with the AMAZING support I constantly get from awesome!!!</p>
                        <div class="group">
                            <div class="actions">
                                <a href="#">Reply</a>
                                <a href="#">Retweet</a>
                                <a href="#">Favorite</a>
                            </div>
                            <span class="date">5 Mar 2014</span>
                        </div>
                    </div><!--Tweet Close-->
                    <!--Tweet-->
                    <div class="tweet">
                        <a href="#">@Bedismo</a>
                        <p class="p-style3">Uberly impressed with the AMAZING support I constantly get from awesome!!!</p>
                        <div class="group">
                            <div class="actions">
                                <a href="#">Reply</a>
                                <a href="#">Retweet</a>
                                <a href="#">Favorite</a>
                            </div>
                            <span class="date">5 Mar 2014</span>
                        </div>
                    </div><!--Tweet Close-->
                </div>
            </div>
        </div>
    </section>
    
    <!--Gallery Widget-->
    <section class="gray-bg gallery-widget">
        <div class="container">
            <h2>Product gallery</h2>
            <div class="filters">
                <a class="active" href="#" data-group="all">All</a>
                <a href="#" data-group="camera">Camera</a>
                <a href="#" data-group="flash">Flash</a>
                <a href="#" data-group="lenses">Lenses</a>
                <a href="#" data-group="video">Video</a>
            </div>
            <div class="gallery-grid">
                <!--Item-->
                <div class="gallery-item" data-groups='["camera"]' data-src="img/gallery-widget/1.jpg">
                    <a href="img/gallery-widget/1.jpg">
                        <div class="overlay"><span><i class="icon-expand"></i></span></div>
                        <img src='<?php echo base_url()."assets/ThriftshopTheme/img/LoginCover.jpg"?>' alt="1"/>
                    </a>
                </div>
                <!--Item-->
                <div class="gallery-item" data-groups='["camera"]' data-src="img/gallery-widget/2.jpg">
                    <a href="img/gallery-widget/2.jpg">
                        <div class="overlay"><span><i class="icon-expand"></i></span></div>
                        <img src='<?php echo base_url()."assets/ThriftshopTheme/img/LoginCover.jpg"?>' alt="2"/>
                    </a>
                </div>
                <!--Item-->
                <div class="gallery-item" data-groups='["video"]' data-src="https://www.youtube.com/watch?v=hdEAWW7tZSA">
                    <a href="https://www.youtube.com/watch?v=hdEAWW7tZSA">
                        <div class="overlay"><span><i class="icon-music-play"></i></span></div>
                        <img src='<?php echo base_url()."assets/ThriftshopTheme/img/LoginCover.jpg"?>' alt="3"/>
                    </a>
                </div>
                <!--Item-->
                <div class="gallery-item" data-groups='["lenses"]' data-src="img/gallery-widget/4.jpg">
                    <a href="img/gallery-widget/4.jpg">
                        <div class="overlay"><span><i class="icon-expand"></i></span></div>
                        <img src='<?php echo base_url()."assets/ThriftshopTheme/img/LoginCover.jpg"?>' alt="4"/>
                    </a>
                </div>
                <!--Item-->
                <div class="gallery-item" data-groups='["flash"]' data-src="img/gallery-widget/5.jpg">
                    <a href="img/gallery-widget/5.jpg">
                        <div class="overlay"><span><i class="icon-expand"></i></span></div>
                        <img src='<?php echo base_url()."assets/ThriftshopTheme/img/LoginCover.jpg"?>' alt="5"/>
                    </a>
                </div>
                <!--Item-->
                <div class="gallery-item" data-groups='["flash"]' data-src="img/gallery-widget/6.jpg">
                    <a href="img/gallery-widget/6.jpg">
                        <div class="overlay"><span><i class="icon-expand"></i></span></div>
                        <img src='<?php echo base_url()."assets/ThriftshopTheme/img/LoginCover.jpg"?>' alt="6"/>
                    </a>
                </div>
            </div>
        </div>
    </section><!--Gallery Widget Close-->
    
    <!--Brands Carousel Widget-->
    <!-- <section class="brand-carousel">
        <div class="container">
            <h2>Brands in our shop</h2>
            <div class="inner">
                <a class="item" href="#"><img src="img/brands/jquery.png" alt="jQuery"/></a>
                <a class="item" href="#"><img src="img/brands/wp.png" alt="WordPress"/></a>
                <a class="item" href="#"><img src="img/brands/woo.png" alt="WooCommerce"/></a>
                <a class="item" href="#"><img src="img/brands/android.png" alt="Android"/></a>
                <a class="item" href="#"><img src="img/brands/macgasm.png" alt="Macgasm"/></a>
                <a class="item" href="#"><img src="img/brands/dropbox.png" alt="Dropbox"/></a>
            </div>
        </div>
    </section> --><!--Brands Carousel Close-->
    
</div><!--Page Content Close-->

<!--Sticky Buttons-->
<div class="sticky-btns">
    <form class="quick-contact ajax-form" method="post" name="quick-contact">
        <h3>Contact us</h3>
        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</p>
        <div class="form-group">
            <label for="qc-name">Full name</label>
            <input class="form-control input-sm" type="text" name="name" id="qc-name" placeholder="Enter full name">
        </div>
        <div class="form-group">
            <label for="qc-email">Email</label>
            <input class="form-control input-sm" type="email" name="email" id="qc-email" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="qc-message">Your message</label>
            <textarea class="form-control input-sm" name="message" id="qc-message" placeholder="Enter your message"></textarea>
        </div>
        <!-- Validation Response -->
        <div class="response-holder"></div>
        <!-- Response End -->
        <input class="btn btn-success btn-sm btn-block" type="submit" value="Send">
    </form>
    <span id="qcf-btn"><i class="fa fa-envelope"></i></span>
    <span id="scrollTop-btn"><i class="fa fa-chevron-up"></i></span>
</div><!--Sticky Buttons Close-->

<!--Subscription Widget-->
<section class="subscr-widget">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-8 col-sm-8">
                <h2 class="light-color">Subscribe to our news</h2>
                
                <!--Mail Chimp Subscription Form-->
                <form class="subscr-form" role="form" action="//8guild.us3.list-manage.com/subscribe/post?u=168a366a98d3248fbc35c0b67&amp;id=d704057a31" target="_blank" method="post" autocomplete="off">
                    <div class="form-group">
                        <label class="sr-only" for="subscr-name">Enter name</label>
                        <input type="text" class="form-control" name="FNAME" id="subscr-name" placeholder="Enter name" required>
                        <button class="subscr-next"><i class="fa fa-arrow-circle-o-right"></i></button>
                    </div>
                    <div class="form-group fff" style="display: none">
                        <label class="sr-only" for="subscr-email">Enter email</label>
                        <input type="email" class="form-control" name="EMAIL" id="subscr-email" placeholder="Enter email" required>
                        <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                        <div style="position: absolute; left: -5000px;"><input type="text" name="b_168a366a98d3248fbc35c0b67_d704057a31" tabindex="-1" value=""></div>
                        <button type="submit" id="subscr-submit"><i class="icon-check"></i></button>
                    </div>
                </form>
                <!--Mail Chimp Subscription Form Close-->
                <p class="p-style2">Please fill the field before continuing</p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-lg-offset-1">
                <p class="p-style3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
            </div>
        </div>
    </div>
</section><!--Subscription Widget Close-->


