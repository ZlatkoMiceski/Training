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
    <link href="../admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="../admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="../admin/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../admin/css/sb-admin.css" rel="stylesheet">




</head>

<body id="page-top">


<nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="../admin/index.php">N B A</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
    </button>

    <a class="navbar-brand mr-1" href="../admin/index.php">Players</a>
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
            <p>New Player</p>

            <p><?php var_dump($disppl) ?></p>

            <p><?php echo $disppl[0]->LastName; ?></p>
            <p><?php echo $dispplyrteam[0]->TeamName; ?></p>



            <?php foreach ($dispplyrteam as $user) : ?>
            <a href="../controllers/teams.php?name=<?= $user->TeamName;?>&id=<?= $user->id;?>">
            <img src="../images/<?php echo $user->TeamName; ?>.svg" class="img-fluid" alt="<?php echo $disptm[0]->TeamName; ?>">
            </a>

            <?php endforeach; ?>

            <!-- Displaying Player Name LastName and BirthDate -->

                <?php foreach ($disppl as $user) : ?>
                <li><?= $user->Name.' '. $user->LastName.' '.$user->BirthDate; ?></li>

            <?php endforeach; ?>

            <img src="../images/<?php echo $disppl[0]->Name; ?>.png" class="img-fluid" alt="<?php echo $disppl[0]->Name; ?>">




            <table class="table table-borderless table-sm">
                <thead>
                <tr>
                    <th scope="col">Height<br><?php echo $disppl[0]->Height; ?>cm</th>
                    <th scope="col">Weight<br><?php echo $disppl[0]->Weight; ?>kg</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">BORN</th>
                    <td><?php echo $disppl[0]->BirthDate; ?></td>
                </tr>
                <tr>
                    <th scope="row">Position</th>
                    <td><?php echo $disppl[0]->Position; ?></td>
                </tr>
                <tr>
                    <th scope="row">Team</th>
                    <td><?php echo $disppl[0]->TeamID; ?></td>
                </tr>
                <tr>
                    <th scope="row">Jersey Number</th>
                    <td><?php echo $disppl[0]->JerseyNumber; ?></td>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td>Larry the Bird</td>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td>Larry the Bird</td>
                </tr>

                <tr>
                    <th scope="row">5</th>
                    <td>Larry the Bird</td>
                </tr>


                </tbody>
            </table>


        </div>
    </div>

</div>



</body>