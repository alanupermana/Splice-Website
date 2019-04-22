
<div class="kotakPembatas">
<!-- Start Sidebar -->
    <nav class="navbar navbar-expand-lg navbar-light"style="border-bottom:1px solid white">
        <div class="navbar-header" >
         <a class="navbar-brand"  href="#">
           <span class="textP-2">Studio</span>
         </a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <!-- <div class="subnav__back-button">
                <img style="margin:auto" width="10px" src="http://cdn.onlinewebfonts.com/svg/img_343367.png" alt="">
            </div> -->
            <form class="navbar-form navbar-left" style="margin-left:-30px" action="">
                <div class="input-group">
                <input type="search" class="form-control" placeholder="Search public releases" name="search">
                <!-- <i class="glyphicon glyphicon-search"></i> -->

                </div>
            </form>
        </div>

        <div class="nav justify-content-end">
           <div class="navbar-nav">

                    <a data-toggle="modal" data-target="#edit1" href="#" style="border-radius:30px; width:auto;height:auto; box-sizing:border-box" class="btn btn-primary">New Project</a>

           </div>

        </div>
    </nav>


    <div class="row" id="body-row">
        <div id="sidebar-container" class="sidebar-expanded d-none d-md-block">
            <!-- <ul class="list-group">
                <a href="#submenu1" data-toggle="collapse" aria-expanded="false" class="list-group-item">
                    <div class="d-flex w-100 justify-content-start align-items-center">

                        <span class="menu-collapsed">Dashboard</span>

                    </div>
                </a>
                <a href="#submenu2" data-toggle="collapse" aria-expanded="false" class="list-group-item">
                    <div class="d-flex w-100 justify-content-start align-items-center">
                        <span class="menu-collapsed">Profile</span>

                    </div>
                </a>
            </ul> -->
            <div class="row content" style="padding-left:8px;">
                <div class="col-xs-2 sidenav ml-3">
                  <p><a href="#"style="text-decoration:none ">All Projects</a></p>
                  <p><a href="#"style="text-decoration:none ">Solo</a></p>
                  <p><a href="#"style="text-decoration:none ">Collaborations</a></p>
                  <p><a href="#"style="text-decoration:none ">Spliced</a></p>
                </div>

            </div>
            <div class="row content" style="padding-left:8px;">


            <div class="col-xs-2 sidenav ml-3">
                <p><a href="#" style="text-decoration:none">Collections</a></p>
                <ul class="">
                    <li class="">
                        <a class="" href="" style="margin-left: 12px;">Add new collection</a>
                    </li>
                </ul>
            </div>
            </div>
        </div>

        <!-- INI ADALAH ISI KONTEN ATAU MAIN -->
        <div class="col">
                &nbsp;
            <div class="container mb-5">
                <div class="card col-10 mx-auto" style="border-left:5px solid #4f16db">
                    <!-- <h5 class="card-header">Featured</h5> -->
                    <!-- <div class="card-header  vertical-scrolling bg-primary">


                    </div> -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-9">
                                    <h5 class="card-title" style="">Install the Splice desktop app"</h5>
                                    <p class="card-text" >Studio backs up your projects to the cloud for free. Install the Splice desktop app to sync your first project, add collaborators, and more.
                                    </p>
                            </div>
                            <div class="col-md-2" style="margin:auto">
                                    <a href="#" style="border-radius:30px; width:150px;height:40px; box-sizing:border-box" class="btn btn-primary">Install Splice</a>
                            </div>
                        </div>


                    </div>
                </div>
                &nbsp;

                <?php foreach ($dataProject as $d ) {?>

                        <div class="card col-10 mx-auto">
                            <div class="card-body" id="body">
                                <div class="row">
                                    <div class="contents">
                                        <span class="art-wrapper">
                                            <a href="">
                                                <span class="art">
                                                    <img src="https://splice-res.cloudinary.com/image/upload/f_auto,q_auto,w_auto/t_cover/app-assets/general/defaultavatarhuge.jpg" width="40px"alt="">
                                                </span>
                                            </a>
                                        </span>
                                    </div>
                                    <div class="card-text col-7">
                                        <span class="project-name"><?php echo $d->project_name ?></span>
                                        <p class="card-text" id="day"><?php echo $d->deskripsi ?></p>
                                    </div>
                                    <div class="card-text col-xs-2 mt-1 ml-auto" >
                                            <input type="submit" class="btn btn-primary" value="Play" style="border-style:solid">
                                            <input type="submit" class="btn btn-warning" value="Edit" data-toggle="modal" data-target="#edit<?php echo $d->NoPro ?>">
                                            <a href="<?php echo site_url('UserController/deleteProject/<?php echo $d->NoPro ?>;'); ?>">
                                                <input type="submit" class="btn btn-danger"  value="Delete">
                                            </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                <?php } ?>

                <!-- Akhir card -->


            </div>



        </div>
    </div>

    <!-- EDIT PROJECT -->
    <?php foreach ($dataProject as $d ) {?>
      <div class="modal fade" id="edit<?php echo $d->NoPro ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
            <center><h2>Edit Project <?php echo $d->Username ?> </h2></center>
            </div>
            <div class="modal-body">
            <!-- isi form ini -->
            <form method="post" action="<?php echo site_url('UserController/editProject'); ?>">
                <div class="form-group">
                    <label for="formGroupExampleInput">Nomor Project</label>
                    <input type="number" class="form-control" id="formGroupExampleInput" placeholder="Nomor project" name="NoPro" value="<?php echo $d->NoPro?>" required>
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput">Username</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Username" name="Username" value="<?php echo $d->Username?>" required>
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput">Project Name</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Project Name" name="project_name"  value="<?php echo $d->project_name ?>" required>
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Deskripsi</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Description" name="deskripsi" value="<?php echo $d->deskripsi ?>" required>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <input  type="submit" class="btn btn-primary" id="hapus" value="Apply" placeholder="Simpan">
            </div>
            </form>
          </div>
        </div>
      </div>
    <?php } ?>

    <!-- NEW PROJECT -->
    <div class="modal fade" id="edit1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
          <center><h2>NEW PROJECT</h2></center>
          </div>
          <div class="modal-body">
          <!-- isi form ini -->
          <form method="POST" action="<?php echo base_url('UserController/newProject'); ?>">
              <div class="form-group">
                  <label for="formGroupExampleInput">Nomor Project</label>
                  <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nomor project" name="NoPro" value="<?php echo $d->NoPro?>" required>
              </div>
            <div class="form-group">
                <label for="formGroupExampleInput">Username</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Username" name="Username" value="<?php echo $d->Username?>" required>
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput">Project Name</label>
              <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Project Name" name="project_name" required >
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput">Deskripsi</label>
              <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Deskripsi" name="deskripsi"required>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <input  type="submit" class="btn btn-primary" id="hapus" value="Create" placeholder="Simpan">
          </form>
          </div>
        </div>
      </div>
    </div>






  </div>
