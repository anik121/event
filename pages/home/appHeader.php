<?php $base_url= "http://localhost/Project/static/event/"?>


<div class="collapse" id="searcharea">
    <!-- top search -->
    <div class="input-group">
        <input type="text" class="form-control" placeholder="Search for...">
        <span class="input-group-btn">
              <button class="btn btn-primary" type="button">Search</button>
        </span>
    </div>
</div>

<!-- /.top search -->
<div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-6 top-message">
                    <p>Welcome to Wedding Vendor.</p>
                </div>
                <div class="col-md-6 top-links">
                    <ul class="listnone">
                        <li><a href="faq.html"> Help </a></li>
                        <li><a href="pricing-plan.html">Pricing</a></li>
                        <li><a href="signup-couple.html" class=" ">I m couple</a></li>
                        <li><a href="signup-vendor.html">Are you vendor?</a></li>
                        <li><a href="login-page.html">Log in</a></li>
                        <li>
                            <a role="button" data-toggle="collapse" href="#searcharea" aria-expanded="false" aria-controls="searcharea"> <i class="fa fa-search"></i> </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
</div>
<!-- End Top Bar -->
<div class="header">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-12 logo">
                    <div class="navbar-brand">
                        <a href="<?php echo $base_url?>"><img src="<?php echo $base_url ?>assets/images/logo.png" alt="Wedding Vendors" class="img-responsive"></a>
                    </div>
                </div>
                <div class="col-md-9 col-sm-12">
                    <div class="navigation" id="navigation">
                        <ul>
                            <li>
                                <a href="<?php echo $base_url; ?>">Home</a>
                            </li>
                            <li>
                                <a href="<?php echo $base_url; ?>pages/contact/index.php">Contact</a>
                            </li>
                            <li class="active"><a href="index.html">Dropdown</a>
                                <ul>
                                    <li><a href="javascript:void(0)" title="Home" class="animsition-link">Menu 1</a></li>
                                    <li><a href="javascript:void()" title="Home v.2" class="animsition-link">Menu 2</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                
                </div>
            </div>
        </div>
</div>
<!-- End Main Header -->
