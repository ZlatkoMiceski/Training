<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Dashboard</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">



  </head>



  <body id="page-top">

  <div class="container">


  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="index.php">N B A</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

        <a class="navbar-brand mr-1" href="index.php">Players</a>
        <a class="navbar-brand mr-1" href="../controllers/teams.php?name=Los Angeles Lakers&id=1">Teams</a>



        <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-primary" type="button">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </form>

      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-bell fa-fw"></i>
            <span class="badge badge-danger">9+</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-envelope fa-fw"></i>
            <span class="badge badge-danger">7</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#">Settings</a>
            <a class="dropdown-item" href="#">Activity Log</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
          </div>
        </li>
      </ul>

    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">


          <!--
        <li class="nav-item active">
          <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Pages</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Login Screens:</h6>
            <a class="dropdown-item" href="login.html">Login</a>
            <a class="dropdown-item" href="register.html">Register</a>
            <a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
            <div class="dropdown-divider"></div>
            <h6 class="dropdown-header">Other Pages:</h6>
            <a class="dropdown-item" href="404.html">404 Page</a>
            <a class="dropdown-item" href="blank.html">Blank Page</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Charts</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-table"></i>
            <span>Tables</span></a>
        </li>
          -->


          <?php foreach ($disp as $user) : ?>
              <li class="nav-item">
                  <a class="nav-link" href="../controllers/Players.php?name=<?= $user->Name?>&TeamId=<?= $user->TeamID?>" title="Bam Abedayo">

                  <?= $user->Name.' '. $user->LastName; ?>

                  </a>
              </li>
          <?php endforeach; ?>

      </ul>







      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->


          <!-- Icon Cards-->


          <!-- Modal for Form (adding Player to the database -->

          <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add new player</button>

          <!-- Modal -->
          <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">New player</h4>
                </div>
                <div class="modal-body">

          <!-- Form for Database insertions for Players-->

          <form method="POST" class="form-horizontal"  action="../controllers/users.php">

            <div class="form-group">
              <label class="control-label col-sm-2" for="name">Player Name:</label>
              <div class="col-sm-10 input-group-sm">
                <input type="text" class="form-control" id="name" placeholder="Enter player name" name="namet">
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-sm-2" for="lastname">Last name:</label>
              <div class="col-sm-10 input-group-sm">
                <input type="text" class="form-control" id="lastname" placeholder="Last name" name="lastname">
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-sm-2" for="JerseyNumber">Jersey Number:</label>
              <div class="col-sm-10 input-group-sm">
                <input type="text" class="form-control" id="JerseyNumber" placeholder="Jersey Number" name="jerseynumber">
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-sm-2" for="Height">Height:</label>
              <div class="col-sm-10 input-group-sm">
                <input type="number" class="form-control" id="Height" placeholder="Enter player height" name="height">
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-sm-2" for="Weight">Weight:</label>
              <div class="col-sm-10 input-group-sm">
                <input type="number" class="form-control" id="Weight" placeholder="Enter player weight" name="weight">
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-sm-2" for="BirthDate">Birth Date:</label>
              <div class="col-sm-10 input-group-sm">
                <input type="date" class="form-control" id="BirthDate" placeholder="Enter player birth date" name="birthdate">
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-sm-2" for="Position">Position:</label>
              <div class="col-sm-10 input-group-sm">
                <input type="text" class="form-control" id="Position" placeholder="Enter player Position" name="positiont">
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-sm-2" for="bio">Short biography:</label>
              <div class="col-sm-10 input-group-sm">
                <input type="text" class="form-control" id="bio" placeholder="Enter player bio" name="bio">
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-sm-2" for="teamID">Team ID:</label>
              <div class="col-sm-10 input-group-sm">
                <input type="text" class="form-control" id="teamID" placeholder="Enter player Team ID" name="teamid">
              </div>
            </div>

            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Submit</button>
              </div>
            </div>

          </form>

                  <!--Form ends here -->
          </div>

        </div>
      </div>
    </div>
            <!--Modal ends here -->

            <!--Trying to show some players with pics and some stats-->

          <!-- Select all Players-->




            <div class="row">

                <?php foreach ($disp as $user) : ?>

                    <section>
                        <figure class="figure">
                            <a href="../controllers/Players.php?name=<?= $user->Name?>&TeamId=<?= $user->TeamID?>" title="<?= $user->Name ?>">
                                <img src="../images/<?= $user->Name ?>.png" class="figure-img img-fluid rounded" alt="<?= $user->Name ?>" width="204" height="154">
                                <p class="text-center"><?= $user->Name ?> <br> <?= $user->LastName ?></p>
                                <div class="text-center">
                                    <span><?= $user->Position ?></span><br>
                                    <span><strong><?= $user->Height ?></strong>cm | <strong><?= $user->Weight ?></strong>kg</span>
                                </div>
                            </a>
                        </figure>
                    </section>

                <?php endforeach; ?>


            </div>




            <!-- Trying to fit some Player data from database to this bootstrap powered table. LOL -->



            <div class="card mb-3">
                <div class="card-header">
                    <i class="fas fa-table"></i>
                    Data Table Example</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Last Name</th>
                                <th>Jersey Number</th>
                                <th>Birth Date</th>
                                <th>Height</th>
                                <th>Weight</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Last Name</th>
                                <th>Jersey Number</th>
                                <th>Birth Date</th>
                                <th>Height</th>
                                <th>Weight</th>
                            </tr>
                            </tfoot>
                            <tbody>

                            <?php foreach ($disp as $user) : ?>

                            <tr>
                                <td> <?= $user->Name ?> </td>
                                <td> <?= $user->LastName ?> </td>
                                <td> <?= $user->JerseyNumber ?> </td>
                                <td> <?= $user->BirthDate ?> </td>
                                <td> <?= $user->Height ?> </td>
                                <td> <?= $user->Weight ?> </td>
                            </tr>
                            <?php endforeach; ?>


                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
            </div>



          <!-- Area Chart Example-->



          <!-- DataTables Example -->



        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Your Website 2018</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>
    <script src="js/demo/chart-area-demo.js"></script>

    </div>

  </body>

</html>
