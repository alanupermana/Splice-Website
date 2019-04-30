        <?php foreach ($dataProfile as $d ) {?>
            <div class="main">

                <!-- COVER -->
                <div class="navigasi">
                    <div class="nav navbar-header" style="margin-bottom:0"></div>
                </div>
                <!-- END COVER -->

                <!-- NAVBAR -->
                <div class="nav1">
                    <nav class="navbar navbar-expand-sm  navbar-light">
                        <div class="conn container">
                            <div class="navbar-brand ml-auto">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">Releases</a>
                                    </li>
                                        <li class="nav-item">
                                    <a href="#" class="nav-link">Followers</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">Following</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
                <!-- END NAVBAR -->

                <!-- KONTENT ALL  -->
                <div class="konten content">
                    <div class="kolom row">

                        <!-- SIDE PROFILE -->
                        <div class="kartu card">
                            <!-- PROFILE PICURE -->
                            <div class="d-flex justify-content-center">
                                <div class="brand_logo_container">
                                    <img src="<?php echo base_url('assets/img/') . $d->avatar; ;?>" class="brand_logo" alt="Logo">
                                </div>
                            </div>
                            <!-- END PROFILE PICTURE -->

                            <!-- USERNAME -->
                            <div class="card-title col-xs-5 mx-auto mt-5 ">
                                <h5 class="card-title" >
                                    <?php echo $d->Username?>
                                </h5>
                            </div>
                            <!-- END USERNAME -->

                            <!-- BTN EDIT PROGILE -->
                            <div class="card-text col-7 mx-auto">
                                <a href="<?php echo site_url('Splice/EditProfile') ?>" id="editBtn" class="btn btn-primary" style="border-radius:30px;">Edit Profile</a>
                            </div>
                            <!-- END BTN EDIT PROGILE -->

                            <hr class="horizontal">

                            <!-- FOLLOWING & FOLLOWERS -->
                            <div class="KartuB card-body col-xs-5">
                                <ul class="ul-kartu">
                                    <li class="li-kartu" style="list-style-type:none" >
                                        <strong>0 Plays</strong>
                                    </li>

                                    <hr class="horizontal">

                                    <li style="list-style-type:none">
                                        <strong>0 Likes</strong>
                                    </li>

                                    <hr class="horizontal">

                                    <li style="list-style-type:none">
                                        <a  href="#">0 Followers</a>
                                    </li>

                                    <hr class="horizontal">

                                    <li style="list-style-type:none">
                                        <a href="#">0 Following</a>
                                    </li>

                                    <hr class="horizontal">

                                    <li class="bio" style="list-style-type:none;border-bottom:2px solid rgb(245, 238, 238)">
                                        <strong>Bio</strong>
                                    </li>
                                </ul>
                            </div>
                            <!-- END FOLLOWING & FOLLOWERS -->

                            <!-- BIO -->
                            <div class="foot card-text col-md-12 ">
                                <strong class="akhir"><?php echo $d->Bio ?></strong>
                            </div>
                            <!-- END BIO -->

                            &nbsp;
                        </div>
                        <!-- END SIDE PROFILE -->

                        <!-- KONTENT -->
                        <div class="newCol card col-md-6 ">
                            <div class="KartuC card-body col-xs-5" id="body">
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
                                        <span class="project-name">coba</span>
                                        <p class="card-text" id="day">a day ago</p>
                                    </div>
                                    <div class="card-text col-xs-2 mt-1 ml-auto" >
                                        <input type="submit" class="btn btn-primary" value="Play" style="border-style:solid">
                                        <input type="submit" class="btn btn-warning" value="Edit">
                                        <a href=""></a><input type="submit" class="btn btn-danger"  value="Delete">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END KONTENT -->

                    </div>
                </div>
                <!-- END KONTENT ALL -->

            </div>
        <?php } ?>
