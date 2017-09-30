<body>
    <div id="preloader">
        <div class="preloader bg--color-1--b" data-preloader="1">
            <div class="preloader--inner"></div>
        </div>
    </div>
    <div class="wrapper">
        <header class="header--section header--style-1">
            <div class="header--topbar bg--color-2">
                <div class="container">
                    <div class="float--left float--xs-none text-xs-center">
                        <ul class="header--topbar-info nav">
                            <li><i class="fa fm fa-map-marker"></i>New York</li>
                            <li><i class="fa fm fa-mixcloud"></i>21<sup>0</sup> C</li>
                            <li><i class="fa fm fa-calendar"></i>Today (Sunday 19 April 2017)</li>
                        </ul>
                    </div>
                    <div class="float--right float--xs-none text-xs-center">
                     
                        <ul class="header--topbar-social nav hidden-sm hidden-xxs">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="header--mainbar">
                <div class="container">
                    <div class="header--logo float--left float--sm-none text-sm-center">
                        <h1 class="h1"> <a href="home-1.html" class="btn-link"> <img width="250px" src="<?=base_url();?>assets/img/logo.jpg" alt="USNews Logo"> <span class="hidden">USNews Logo</span> </a> </h1> </div>
                    <div class="header--ad float--right float--sm-none hidden-xs">
                        <a href="#"> <img src="<?=base_url();?>assets/img/ads-img/ad-728x90-01.jpg" alt="Advertisement"> </a>
                    </div>
                </div>
            </div>
            <div class="header--navbar style--1 navbar bd--color-1 bg--color-1" data-trigger="sticky">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#headerNav" aria-expanded="false" aria-controls="headerNav"> <span class="sr-only">Toggle Navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                    </div>
                    <div id="headerNav" class="navbar-collapse collapse float--left">
                        <ul class="header--menu-links nav navbar-nav" data-trigger="hoverIntent">
                            <?php 
                                if($aktif==1){$a1="active";}else{$a1="";}
                                if($aktif==2){$a2="active";}else{$a2="";}
                                if($aktif==3){$a3="active";}else{$a3="";}
                                if($aktif==4){$a4="active";}else{$a4="";}
                                if($aktif==5){$a5="active";}else{$a5="";}
                                if($aktif==6){$a6="active";}else{$a6="";}
                                if($aktif==7){$a7="active";}else{$a7="";}
                                if($aktif==8){$a8="active";}else{$a8="";}
                                if($aktif==9){$a9="active";}else{$a9="";}
                                if($aktif==10){$a10="active";}else{$a10="";}
                                
                            ?>
                            <li class="dropdown <?=$a1;?>"> <a href="<?=base_url();?>frontend"  >Beranda<i ></i></a>
                                
                            </li>
                            <li class="dropdown  filter <?=$a2;?>"> <a href="<?=base_url();?>frontend/home/selebriti"  >Selebriti<i class=""></i></a>
                                
                            </li>
                            <li class="dropdown <?=$a3;?>"><a href="<?=base_url();?>frontend/home/gayahidup">Gaya Hidup</a></li>
                            <li class="dropdown <?=$a4;?>"><a href="<?=base_url();?>frontend/home/kesehatan">Kesehatan</a></li>
                            <li class="dropdown <?=$a5;?>"><a href="<?=base_url();?>frontend/home/kuliner">Kuliner</a></li>
                            <li class="dropdown <?=$a6;?>"><a href="<?=base_url();?>frontend/home/insani">Insani</a></li>
                            <li class="dropdown <?=$a7;?>"><a href="<?=base_url();?>frontend/home/solusi">Solusi</a></li>
                        
                            <li class="dropdown  <?=$a10;?>"> <a href="<?=base_url();?>frontend/home/senyum"  >Senyum Cempaka<i class=""></i></a>
                                
                            </li>
                            
                        </ul>
                    </div>
                    <form action="#" class="header--search-form float--right" data-form="validate">
                        <input type="search" name="search" placeholder="Search..." class="header--search-control form-control" required>
                        <button type="submit" class="header--search-btn btn"><i class="header--search-icon fa fa-search"></i></button>
                    </form>
                </div>
            </div>
        </header>