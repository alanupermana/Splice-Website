<nav class="navbar navbar-expand-md" style="background-color:#ffffff; padding-top:66px" >
   <!-- <div class="profil_conn container"> -->
         <div class="profil_head navbar-header mr-5 ml-2">
            <a href="#" class="navbar-brand">Settings</a>
         </div>

         <div  class="nav_head collapse navbar-collapse ml-5" id="collapse-1">
            <ul class="nav navbar-nav">
               <li >
                     <a style="text-decoration:none;"class="mr-5" href="#">Account</a>
                     <a style="text-decoration:none;"class="mr-5" href="#">Billing</a>
                     <a style="text-decoration:none;"href="#">Notifications</a>
               </li>
            </ul>
         </div>
   <!-- </div> -->
</nav>

<?php foreach ($dataProfile as $d ) {?>
    <div class="row" style=" background-color:#edeff0;min-height:100vh" id="row-body">

          <div class="profil_isi container mt-5">
                <!-- col-lg-7 -->
                <div class="col-lg-7 mx-auto" >
                   <label for="" class="col-lg-12 mx-auto" id="profile">PROFIL</label>
                   <!-- card -->
                   <div class="card" >
                      <!-- card-body -->
                      <div class="card-body col-lg-12" >
                         <div class="row" >
                            <div class="col-md-9">
                               <form action="<?php echo site_url('UserController/editProfileNonPass'); ?>" method="POST">
                                  <!-- Username -->
                                  <div class="form-group row">
                                     <label for="username" id="usnm"class="col-xs-3 col-form-label ml-auto">USERNAME</label>
                                     <div class="col-sm-10">
                                        <input name="Username" type="text"  class="form-control" placeholder="" value="<?php echo $d->Username?>">
                                     </div>
                                  </div>
                                  <!-- end username -->
                                  <!-- email -->
                                  <div class="form-group row">
                                     <label for="email" id="email" class="col-xs-3 col-form-label ml-auto">EMAIL</label>
                                     <div class="col-sm-10">
                                        <input name="Email" type="email" class="form-control" placeholder="" value="<?php echo $d->Email?>">
                                     </div>
                                  </div>
                                  <!-- end email -->
                                  <!-- name -->
                                  <div class="form-group row">
                                     <label for="nama" id="nama" class="col-xs-3 col-form-label ml-auto">NAME</label>
                                     <div class="col-sm-10">
                                        <input name="Name" type="text" class="form-control" placeholder="" value="<?php echo $d->Name?>">
                                     </div>
                                  </div>
                                  <!-- end name -->
                                  <!-- bio -->
                                  <div class="form-group row">
                                     <label for="biog"  id="biog"class="col-xs-3 col-form-label ml-auto">BIO</label>
                                     <div class="col-sm-10">
                                        <input name="Bio" type="text" class="form-control" placeholder="" value="<?php echo $d->Bio?>">
                                     </div>
                                  </div>
                                  <!-- end bio -->
                                  <!-- button -->
                                  <div class="form-group row" >
                                     <div class="col-sm-12 text-right" >
                                        <button id="update" type="submit" class="btn btn-primary " >Update</button>
                                     </div>
                                  </div>


                               </form>
                            </div>
                            <!-- side -->

                            <div class="col-sm-3">
                                <?php echo form_open_multipart('UserController/do_upload'); ?>
                                  <div class="form-group ">
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                                <span class="btn btn-default btn-file">
                                                    <img width="110"class="img-circle " src="<?php echo base_url('assets/img/') . $d->avatar; ;?>" alt="">
                                                    <input name="userfile" type="file" id="imgInp">
                                                </span>
                                            </span>

                                        </div>
                                        <div class="form-group row" >
                                           <div class="col-sm-11 text-right" >
                                              <button id="update" type="submit" class="btn btn-primary ">Change</button>
                                           </div>
                                        </div>
                                        <img id='img-upload'/>
                                    </div>


                                </form>
                            </div>
                            <!-- end side -->
                         </div>
                      <!-- end row inline -->
                      </div>
                      <!-- end col card body -->
                   </div>
                   <!-- end card -->
                   <label for="" class="col-lg-12 mx-auto mt-4" id="security">SECURITY</label>
                   <div class="samping_card card">
                         <div class="card-body col-lg-12">
                               <div class="row">
                                  <div class="col-sm-8">
                                     <form action="<?php echo site_url('UserController/editProfilePass'); ?>">
                                        <div class="form-group row">
                                              <label for="pass"  id="paswd"class="col-xs-3 col-form-label">PASSWORD</label>
                                              <div class="col-sm-9">
                                                    <input name="Password" type="password" class="form-control" value="<?php echo $d->Password?>">
                                              </div>

                                        </div>
                                        </form>
                                        <div class="form-group row">
                                           <label for="deleteAcc" id="deleteAcc" class="col-xs-3 col-form-label ml-3">Delete Splice Account</label>
                                        </div>

                                  </div>

                                  <div class="split_card row">
                                     <div class="col-sm-12 text-right">
                                        <a id="changePswd" href="#"style="text-decoration:none;" class="text-primary">Change Password</a>
                                     </div>
                                     <div class="col-sm-12 text-right">
                                           <a id="del" href=""style="text-decoration:none;" class="text-danger">Delete</a>
                                     </div>
                                  </div>

                                  <!-- end button -->
                                  <!-- <div class="split_card row-sm-12">
                                        <form action="#">
                                           <div class="form-group col-sm-12 text-right">
                                              <a id="changePswd" href="#"style="text-decoration:none;" class="text-primary">Change Password</a>
                                           </div>
                                           <div class="form-group col-sm-12 text-right">
                                              <a id="del" href=""style="text-decoration:none;" class="text-danger">Delete Account</a>
                                           </div>
                                        </form>
                                     </div> -->

                               </div>
                         </div>
                   </div>


                </div>
                <!-- end col-lg-7 -->

          </div>

    </div>
<?php } ?>
