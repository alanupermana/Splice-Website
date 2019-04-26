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
                           <form action="#">
                              <!-- Username -->
                              <div class="form-group row">
                                 <label for="username" id="usnm"class="col-xs-3 col-form-label ml-auto">USERNAME</label>
                                 <div class="col-sm-10">
                                    <input type="text"  class="form-control" placeholder="">
                                 </div>
                              </div>
                              <!-- end username -->
                              <!-- email -->
                              <div class="form-group row">
                                 <label for="email" id="email" class="col-xs-3 col-form-label ml-auto">EMAIL</label>
                                 <div class="col-sm-10">
                                    <input type="email" class="form-control" placeholder="">
                                 </div>
                              </div>
                              <!-- end email -->
                              <!-- name -->
                              <div class="form-group row">
                                 <label for="nama" id="nama" class="col-xs-3 col-form-label ml-auto">NAME</label>
                                 <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="">
                                 </div>
                              </div>
                              <!-- end name -->
                              <!-- loaction -->
                              <div class="form-group row">
                                 <label for="location"  id="location"class="col-xs-3 col-form-label ml-auto">LOCATION</label>
                                 <div class="col-sm-10">
                                       <input type="text" class="form-control">
                                 </div>
                              </div>
                              <!-- end location -->
                              <!-- bio -->
                              <div class="form-group row">
                                 <label for="biog"  id="biog"class="col-xs-3 col-form-label ml-auto">BIO</label>
                                 <div class="col-sm-10">
                                    <textarea class="form-control" name="" id="" cols="10" rows="3"></textarea>
                                 </div>
                              </div>
                              <!-- end bio -->
                              <!-- button -->
                              <div class="form-group row">
                                 <div class="col-sm-12 text-right" >
                                    <button id="update"type="button" class="btn btn-primary" >Update</button>
                                 </div>
                              </div>
                              <!-- end button -->

                           </form>
                        </div>
                        <!-- side -->
                        <div class="col-sm-3">
                              <div class="form-group ">
                                    <div class="input-group">
                                        <span class="input-group-btn">
                                            <span class="btn btn-default btn-file">
                                                <img width="110"class="img-circle " src="https://cdn.pixabay.com/photo/2016/01/03/00/43/upload-1118929_960_720.png" alt="">
                                                <input type="file" id="imgInp" placeholder="inputgambar">
                                            </span>
                                        </span>

                                    </div>
                                    <img id='img-upload'/>
                                </div>
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
                                 <form action="#">
                                    <div class="form-group row">
                                          <label for="pass"  id="paswd"class="col-xs-3 col-form-label">PASSWORD</label>
                                          <div class="col-sm-9">
                                                <input type="password" class="form-control">
                                          </div>

                                    </div>
                                    <div class="form-group row">
                                       <label for="deleteAcc" id="deleteAcc" class="col-xs-3 col-form-label ml-3">Delete Splice Account</label>
                                    </div>
                                 </form>
                              </div>

                              <div class="split_card row">
                                 <div class="col-sm-12 text-right">
                                    <a id="changePswd" href="#"style="text-decoration:none;" class="text-primary">Change Password</a>
                                 </div>
                                 <div class="col-sm-12 text-right">
                                       <a id="del" href=""style="text-decoration:none;" class="text-danger">Delete</a>
                                 </div>
                              </div>
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
