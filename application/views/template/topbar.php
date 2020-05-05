</head>
<body class="skin-blue">
    <!-- Site wrapper -->
    <div class="wrapper">

        <header class="main-header">
            <a href="<?php echo site_url('welcome') ?>" class="logo"><b>ATABA</b></a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-user"></i>
                                <span class="hidden-xs"><b><?php echo strtoupper($this->session->userdata('user')); ?></b></span>
                            </a>
                            
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <!-- =============================================== -->