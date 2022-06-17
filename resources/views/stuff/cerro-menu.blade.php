<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Multi R</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!--boostrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        <!-- App favicon -->
        <link rel="shortcut icon" href="../assets/images/favicon.ico">

        <!-- plugin css -->
        <link href="../assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />

        <!-- App css -->
        <link href="../assets/css/config/default/bootstrap.min.css" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
        <link href="../assets/css/config/default/app.min.css" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

        <link href="../assets/css/config/default/bootstrap-dark.min.css" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" />
        <link href="../assets/css/config/default/app-dark.min.css" rel="stylesheet" type="text/css" id="app-dark-stylesheet" />

        <!-- icons -->
        <link href="../assets/css/icons.min.css" rel="stylesheet" type="text/css" />

    </head>

    <!-- body start -->
    <body background="https://www.alqueria.com.co/sites/default/files/styles/1327_612/public/hamburguesa-con-amigos-y-salsa-de-champinones_0.jpg?h=2dfa7a18&itok=hLxehdIa" class="loading" data-layout='{"mode": "light", "width": "fluid", "menuPosition": "fixed", "sidebar": { "color": "light", "size": "default", "showuser": false}, "topbar": {"color": "dark"}, "showRightSidebarOnPageLoad": true}'>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Topbar Start -->

<div class="navbar-custom">
    <div class="container-fluid">
        <ul class="list-unstyled topnav-menu float-end mb-0">

            <li class="d-none d-lg-block">
                <form class="app-search">
                    <div class="app-search-box dropdown">
                        <div class="input-group">
                            <input type="search" class="form-control" placeholder="Search..." id="top-search">
                            <button class="btn input-group-text" type="submit">
                                <i class="fe-search"></i>
                            </button>
                        </div>
                        <div class="dropdown-menu dropdown-lg" id="search-dropdown">
                            <!-- item-->
                            <div class="dropdown-header noti-title">
                                <h5 class="text-overflow mb-2">Found 22 results</h5>
                            </div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-home me-1"></i>
                                <span>Analytics Report</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-aperture me-1"></i>
                                <span>How can I help you?</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-settings me-1"></i>
                                <span>User profile settings</span>
                            </a>

                            <!-- item-->
                            <div class="dropdown-header noti-title">
                                <h6 class="text-overflow mb-2 text-uppercase">Users</h6>
                            </div>
                        </div>
                    </div>
                </form>
            </li>
<!-- ================================ search bar ==================================== -->
            <li class="dropdown d-inline-block d-lg-none">

                    <i class="fe-search noti-icon"></i>
                </a>
                <div class="dropdown-menu dropdown-lg dropdown-menu-end p-0">
                    <form class="p-3">
                        <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                    </form>
                </div>
            </li>

<!-- =================================  end search bar =================================-->
            <li class="dropdown d-none d-lg-inline-block topbar-dropdown">

                    <i class="fe-grid noti-icon"></i>
                </a>
                <div class="dropdown-menu dropdown-lg dropdown-menu-end">


                        <div class="row g-0">
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="../assets/images/brands/bitbucket.png" alt="bitbucket">
                                    <span>Bitbucket</span>
                                </a>
                            </div>
                    </div>

                </div>
            </li>

            <li class="dropdown d-none d-lg-inline-block topbar-dropdown">

                <div class="dropdown-menu dropdown-menu-end">
                </div>
            </li>

            <li class="dropdown notification-list topbar-dropdown">

                    <i class="fe-bell noti-icon"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-lg">

                    <!-- item-->
                    <div class="dropdown-item noti-title">
                        <h5 class="m-0">
                            <span class="float-end">
                                <a href="" class="text-dark">
                                    <small>Clear All</small>
                                </a>
                            </span>Notification
                        </h5>
                    </div>
                    <div class="noti-scroll" data-simplebar>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item active">
                            <div class="notify-icon">
                                <img src="../assets/images/users/user-1.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                            <p class="notify-details">Cristina Pride</p>
                            <p class="text-muted mb-0 user-msg">
                                <small>Hi, How are you? What about our next meeting</small>
                            </p>
                        </a>
                        <i class="fe-arrow-right"></i>
                    </a>
                </div>
            </li>

            <li class="dropdown notification-list">
                <a href="javascript:void(0);" class="nav-link right-bar-toggle waves-effect waves-light">
                    <i class="fe-settings noti-icon"></i>
                </a>
            </li>
        </ul>
        <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
            <li>
                <!-- Mobile menu toggle (Horizontal Layout)-->

<style type="text/css">
body {
  position: top;
}
.nav-item-left{
    position: relative;
    float: left;
    width: 108px;
    background-color: gray;
}
.nav-item{
    position: relative;
    float: left;
    width: 790px;
    background-color: gray;
}
</style>
<header>
    <body data-bs-spy="scroll" data-bs-target="#navbar-example">
    <div id="navbar-example">
      <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
            <a > <h2>Cerro e maco</h2></a>
          </li>
        <li class="nav-item-left">
            <a class="nav-link" href="menu">Menu</a>
          </li>
          <li class="nav-item-left">
            <a class="nav-link" href="facturacion">Facturacion</a>
          </li>
      </ul>
    </div>
    <br />
  </body>
</header>

                <!-- End mobile menu toggle-->
                <div class="container">
                    <div class="row">
                      <div class="col">
                       <div><div class="b-example-divider"></div>
                       <style type="text/css">
                       .back{
                           background-color: gray;

                       }
                       .back2{
                           background-color: gray;
                       }
                       </style>

                         <div class="back p-3" style="width: 280px; height:540px">
                           <a href="/" class="d-flex align-items-left pb-3 mb-3 link-dark text-decoration-none border-bottom">
                             <svg class="bi me-2" width="30" height="24"><use xlink:href="#bootstrap"/></svg>
                             <span class="fs-5 fw-semibold">Barra de opciones</span>
                           </a>
                           <ul class="list-unstyled ps-0">
                             <li class="mb-1">
                               <li class="mb-1">
                                   <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
                                     Home
                                     </button>
                                     <div class="collapse" id="dashboard-collapse">
                                       <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                         <li><a href="dashboard" class="link-dark rounded">Home</a></li>
                                        <li><a href="reservas" class="link-dark rounded">reservas</a></li>
                                        </ul>
                                     </div>

                             </li>
                             <li class="mb-1">
                               <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
                                 Proveedores
                               </button>
                               <div class="collapse" id="dashboard-collapse">
                                 <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                   <li><a href="proveedores" class="link-dark rounded">proveedores</a></li>
                                 </ul>
                               </div>
                             </li>
                             <li class="mb-1">
                               <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
                                 Direccion
                               </button>
                               <div class="collapse" id="orders-collapse">
                                 <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                   <li><a href="direccion" class="link-dark rounded">direccion</a></li>
                                 </ul>
                               </div>
                             </li>
                             <li class="border-top my-3"></li>
                             <li class="mb-1">
                               <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
                                 Account
                               </button>
                               <div class="collapse" id="account-collapse">
                                 <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                   <li><a href="#" class="link-dark rounded">New...</a></li>
                                   <li><a href="#" class="link-dark rounded">Profile</a></li>
                                   <li><a href="#" class="link-dark rounded">Settings</a></li>
                                   <li><a href="register" class="link-dark rounded">Salir</a></li>
                                 </ul>
                               </div>
                             </li>
                           </ul>
                         </div></div>
                      </div>

                      <div class="col">
                        <div class="back2"><ul class="list-group">
            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->
                    </div>
                    <table>
                        <tr>
                            <th><img style="height: 270px"; style="width: 100px" src="https://i.pinimg.com/474x/22/2a/d2/222ad2b4bbd4546ed5db499656cf0d8f.jpg"></th>

                            <th><img style="height: 270px"; style="width: 100px" src="https://i.pinimg.com/474x/d0/2d/5c/d02d5c685eb872c49dccf81204a32a97.jpg"></th>

                            <th><img style="height: 270px"; style="width: 100px" src="https://i.pinimg.com/474x/20/18/60/201860a77415ff853086a28005ea36db.jpg"> </th>

                            <th><img style="height: 270px"; style="width: 100px" src="https://i.pinimg.com/474x/22/2a/d2/222ad2b4bbd4546ed5db499656cf0d8f.jpg"></th>
                         </tr>
                    </table><!-- container -->

                </div> <!-- content -->

                <!-- Footer Start -->
                <footer class="footer">
                            <div class="col-md-6">
                                <div class="text-md-end footer-links d-none d-sm-block">
                                    <a href="javascript:void(0);">About Us</a>
                                    <a href="javascript:void(0);">Help</a>
                                    <a href="javascript:void(0);">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->
            </div>
            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->
    </body>
</html>
