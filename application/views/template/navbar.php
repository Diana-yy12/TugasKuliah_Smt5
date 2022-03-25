<body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Header Area Start -->
		<header class="top">
                  <div class="fixedArea">
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12 noPadding">
                            <div class="content-wrapper one">
                                <!-- Main Menu Start -->
                                <!-- Navbar-->
                                <header class="header">
                                    <nav class="navbar navbar-default myNavBar">
                                        <div class="container">

                                             <!-- Brand and toggle get grouped for better mobile display -->
                                            <div class="navbar-header">
                                                <div class="row">
                                                    <div class="col-md-9 col-sm-9 col-xs-9">
                                                        <div class="row">
                                                            <div class="col-md-3 col-xs-3 col-sm-3">
                                                                <a style="padding-top:0px;" class="navbar-brand navBrandText text-uppercase font-weight-bold" href="index.php"><img src="<?php echo base_url() ?>assets/img/logo/logo-text-new.png" alt="restorant" width="200" height="47"></a>
                                                                
                                                            </div>
                                                            <!-- <div class="col-md-9 col-sm-9 col-xs-9">
                                                                <a href="index.php"><img class="img-responsive logo" src="img/logo/cemrebakerytextlogolight.png" alt="restorant" /></a>
                                                                
                                                            </div> -->
                                                        </div>

                                                    </div>
                                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                                            <span class="sr-only">Toggle navigation</span>
                                                            <span class="icon-bar"></span>
                                                            <span class="icon-bar"></span>
                                                            <span class="icon-bar"></span>
                                                        </button>
                                                    </div>
                                                </div>

                                            </div>
                                                     
                                            <!-- Collect the nav links, forms, and other content for toggling -->
                                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                            <ul class="nav navbar-nav navbar-right navBar">
                                                    <li class="nav-item"><a href="<?php echo base_url('home') ?>" class="nav-link text-uppercase font-weight-bold js-scroll-trigger" id="home">Home<span class="sr-only">(current)</span></a></li>
                                                    <li class="nav-item"><a href="<?php echo base_url('menu') ?>" class="nav-link text-uppercase font-weight-bold js-scroll-trigger" id="menu">Menu</a></li>
                                                    <li class="nav-item"><a href="<?php echo base_url('about') ?>" class="nav-link text-uppercase font-weight-bold js-scroll-trigger" id="about">About Us</a></li>
                                                    <li class="nav-item"><a href="<?php echo base_url('order') ?>" class="nav-link text-uppercase font-weight-bold js-scroll-trigger" id="order">Order</a></li>
                                                    <li class="nav-item"><a href="<?php echo base_url('login/logout') ?>" class="nav-link text-uppercase font-weight-bold js-scroll-trigger">Logout</a></li>

                                                </ul>
                                            </div>
                                        </div>
                                    </nav>
                                </header>
                                <!-- Main Menu End -->
                            </div>
						</div>
                  </div>
			</div>
		</header>
		<!-- Header Area End -->

        <script type="text/javascript">
            if (document.URL == "<?php echo base_url('home') ?>"){
                $('#home').addClass('active');
            }else if (document.URL == "<?php echo base_url('menu') ?>")
            {
                $('#menu').addClass('active');
            }else if (document.URL == "<?php echo base_url('about') ?>")
            {
                $('#about').addClass('active');
            }else if (document.URL == "<?php echo base_url('order') ?>")
            {
                $('#order').addClass('active');
            }else if (document.URL == "<?php echo base_url('blog') ?>")
            {
                $('#blog').addClass('active');
            }
        </script>