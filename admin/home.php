
    <!-- Start Status area -->
    <div class="notika-status-area">
        <div class="container" id="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                        <div class="website-traffic-ctn" id="widget-prog">
                            <h2><span class="counter">50,000</span></h2>
                            <p>Orders In Progress</p>
                        </div>
                        <div>
                        <ul>
                        <?php
                        if (isset($_GET['progress'])){
                           ?>
                            <li class="img-rounded active"  id="progress" >
                            <a href="index.php?progress"><img src="../img/widgets/file.png" width="54px"alt=""></a>
                             </li>
                        <?php }
                        else{ ?>
                            
                            <li class="img-rounded "  id="progress" >
                            <a href="index.php?progress"><img src="../img/widgets/file.png" width="54px"alt=""></a>
                             </li>
                            <?php
                            }
                            ?>
                        </ul>
                        </div>
                        
                              
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h2><span class="counter">90,000</span>k</h2>
                            <p>Users Online</p>
                        </div>
                        <div>
                        <ul>
                        <?php
                        if (isset($_GET['users'])){
                           ?>
                            <li class="img-rounded active"  id="progress" >
                            <a href="index.php?users"><img src="../img/widgets/Iconshock.ico" width="54px"alt=""></a>
                             </li>
                        <?php }
                        else{ ?>
                            
                            <li class="img-rounded "  id="progress" >
                            <a href="index.php?users"><img src="../img/widgets/Iconshock.ico" width="54px"alt=""></a>
                             </li>
                            <?php
                            }
                            ?>
                        </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30 dk-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h2>$<span class="counter">40,000</span></h2>
                            <p>Orders Completed</p>
                        </div>
                        
                        <div>
                        <ul>
                        <?php
                        if (isset($_GET['complete'])){
                           ?>
                            <li class="img-rounded active"  id="progress" >
                            <a href="index.php?complete"><img src="../img/widgets/file.png" width="54px"alt=""></a>
                             </li>
                        <?php }
                        else{ ?>
                            
                            <li class="img-rounded "  id="progress" >
                            <a href="index.php?complete"><img src="../img/widgets/file.png" width="54px"alt=""></a>
                             </li>
                            <?php
                            }
                            ?>
                        </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30 dk-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h2><span class="counter">1,000</span></h2>
                            <p>Clients</p>
                        </div>
                        <div>
                        <ul>
                        <?php
                        if (isset($_GET['clients'])){
                           ?>
                            <li class="img-rounded active"  id="progress" >
                            <a href="index.php?clients"><img src="../img/widgets/Iconshock.ico" width="54px"alt=""></a>
                             </li>
                        <?php }
                        else{ ?>
                            
                            <li class="img-rounded "  id="progress" >
                            <a href="index.php?clients"><img src="../img/widgets/Iconshock.ico" width="54px"alt=""></a>
                             </li>
                            <?php
                            }
                            ?>
                        </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Status area-->
    <!-- Start Sale Statistic area-->
    <div class="sale-statistic-area">
        <div class="container">
            <div class="row">
                
                
            </div>
        </div>
    </div>
    <br>
    <!-- End Sale Statistic area-->
<br>
    <!-- Start Status area -->
    <div class="notika-status-area">
        <div class="container" id="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h2><span class="counter">50,000</span></h2>
                            <p>Orders Under Review</p>
                        </div>
                        <div class="sparkline">
                        <ul>
                        <?php
                        if (isset($_GET['review'])){
                           ?>
                            <li class="img-rounded active"  id="progress" >
                            <a href="index.php?review"><img src="../img/widgets/file.png" width="54px"alt=""></a>
                             </li>
                        <?php }
                        else{ ?>
                            
                            <li class="img-rounded "  id="progress" >
                            <a href="index.php?review"><img src="../img/widgets/file.png" width="54px"alt=""></a>
                             </li>
                            <?php
                            }
                            ?>
                        </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h2><span class="counter">90,000</span>k</h2>
                            <p>Orders In Revision</p>
                        </div>
                        <div>
                        <ul>
                        <?php
                        if (isset($_GET['revision'])){
                           ?>
                            <li class="img-rounded active"  id="progress" >
                            <a href="index.php?revision"><img src="../img/widgets/file.png" width="54px"alt=""></a>
                             </li>
                        <?php }
                        else{ ?>
                            
                            <li class="img-rounded "  id="progress" >
                            <a href="index.php?revision"><img src="../img/widgets/file.png" width="54px"alt=""></a>
                             </li>
                            <?php
                            }
                            ?>
                        </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30 dk-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h2>$<span class="counter">40,000</span></h2>
                            <p>Reassigned Orders</p>
                        </div>
                        <div>
                        <ul>
                        <?php
                        if (isset($_GET[''])){
                           ?>
                            <li class="img-rounded active"  id="progress" >
                            <a href="index.php?reassign"><img src="../img/widgets/file.png" width="54px"alt=""></a>
                             </li>
                        <?php }
                        else{ ?>
                            
                            <li class="img-rounded "  id="progress" >
                            <a href="index.php?reassign"><img src="../img/widgets/file.png" width="54px"alt=""></a>
                             </li>
                            <?php
                            }
                            ?>
                        </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30 dk-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h2><span class="counter">1,000</span></h2>
                            <p>Support</p>
                        </div>
                        <div>
                        <ul>
                        <?php
                        if (isset($_GET['support'])){
                           ?>
                            <li class="img-rounded active"  id="progress" >
                            <a href="index.php?support"><img src="../img/widgets/Iconshock.ico" width="54px"alt=""></a>
                             </li>
                        <?php }
                        else{ ?>
                            
                            <li class="img-rounded "  id="progress" >
                            <a href="index.php?support"><img src="../img/widgets/Iconshock.ico" width="54px"alt=""></a>
                             </li>
                            <?php
                            }
                            ?>
                        </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Status area-->
    <!-- Start Sale Statistic area-->
    <div class="sale-statistic-area">
        <div class="container">
            <div class="row">
                
                
            </div>
        </div>
    </div>
    <br>
    <!-- End Sale Statistic area-->

    <!-- Start Email Statistic area-->
    <div class="notika-email-post-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="email-statis-inner notika-shadow">
                        <div class="email-ctn-round">
                            <div class="email-rdn-hd">
								<h2>Email Statistics</h2>
							</div>
                            <div class="email-statis-wrap">
                                <div class="email-round-nock">
                                    <input type="text" class="knob" value="0" data-rel="55" data-linecap="round" data-width="130" data-bgcolor="#E4E4E4" data-fgcolor="#00c292" data-thickness=".10" data-readonly="true">
                                </div>
                                <div class="email-ctn-nock">
                                    <p>Total Emails Sent</p>
                                </div>
                            </div>
                            <div class="email-round-gp">
                                <div class="email-round-pro">
                                    <div class="email-signle-gp">
                                        <input type="text" class="knob" value="0" data-rel="75" data-linecap="round" data-width="90" data-bgcolor="#E4E4E4" data-fgcolor="#00c292" data-thickness=".10" data-readonly="true" disabled>
                                    </div>
                                    <div class="email-ctn-nock">
                                        <p>Bounce Rate</p>
                                    </div>
                                </div>
                                <div class="email-round-pro">
                                    <div class="email-signle-gp">
                                        <input type="text" class="knob" value="0" data-rel="35" data-linecap="round" data-width="90" data-bgcolor="#E4E4E4" data-fgcolor="#00c292" data-thickness=".10" data-readonly="true" disabled>
                                    </div>
                                    <div class="email-ctn-nock">
                                        <p>Total Opened</p>
                                    </div>
                                </div>
                                <div class="email-round-pro sm-res-ds-n lg-res-mg-bl">
                                    <div class="email-signle-gp">
                                        <input type="text" class="knob" value="0" data-rel="45" data-linecap="round" data-width="90" data-bgcolor="#E4E4E4" data-fgcolor="#00c292" data-thickness=".10" data-readonly="true" disabled>
                                    </div>
                                    <div class="email-ctn-nock">
                                        <p>Total Ignored</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="recent-post-wrapper notika-shadow sm-res-mg-t-30 tb-res-ds-n dk-res-ds">
                        <div class="recent-post-ctn">
                            <div class="recent-post-title">
                                <h2>Admin Desktop</h2>
                            </div>
                        </div>
                        <div class="recent-post-items">
                            <div class="recent-post-signle rct-pt-mg-wp">
                                <a href="#">
                                    <div class="recent-post-flex">
                                        <div class="recent-post-img">
                                            <img src="../img/post/2.jpg" alt="" />
                                        </div>
                                        <div class="recent-post-it-ctn">
                                            <h2>Smith</h2>
                                            <p>Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="recent-post-signle">
                                <a href="#">
                                    <div class="recent-post-flex rct-pt-mg">
                                        <div class="recent-post-img">
                                            <img src="../img/post/1.jpg" alt="" />
                                        </div>
                                        <div class="recent-post-it-ctn">
                                            <h2>John Deo</h2>
                                            <p>Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="recent-post-signle">
                                <a href="#">
                                    <div class="recent-post-flex rct-pt-mg">
                                        <div class="recent-post-img">
                                            <img src="../img/post/4.jpg" alt="" />
                                        </div>
                                        <div class="recent-post-it-ctn">
                                            <h2>Malika</h2>
                                            <p>Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="recent-post-signle">
                                <a href="#">
                                    <div class="recent-post-flex rct-pt-mg">
                                        <div class="recent-post-img">
                                            <img src="../img/post/2.jpg" alt="" />
                                        </div>
                                        <div class="recent-post-it-ctn">
                                            <h2>Smith</h2>
                                            <p>Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="recent-post-signle">
                                <a href="#">
                                    <div class="recent-post-flex rct-pt-mg">
                                        <div class="recent-post-img">
                                            <img src="../img/post/1.jpg" alt="" />
                                        </div>
                                        <div class="recent-post-it-ctn">
                                            <h2>John Deo</h2>
                                            <p>Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="recent-post-signle">
                                <a href="#">
                                    <div class="recent-post-flex rc-ps-vw">
                                        <div class="recent-post-line rct-pt-mg">
                                            <p>View All</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="recent-items-wp notika-shadow sm-res-mg-t-30">
                        <div class="rc-it-ltd">
                            <div class="recent-items-ctn">
                                <div class="recent-items-title">
                                    <h2>Admin Desktop</h2>
                                </div>
                            </div>
                            <div class="recent-items-inn">
                                <table class="table table-inner table-vmiddle">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th ></th>
                                        </tr>
                                    </thead>
                                    <tbody class="button-icon-btn">
                                        <tr>
                                            <?php if(isset($_GET['mail'])){?>
                                            <td class="f-500 c-cyan">
                                           <a href="index.php?mail">  <button class="btn btn-primary primary-icon-notika "><i class="notika-icon notika-mail"></i> Mailing </button></a>
                                            </td>
                                            <?php }
                                             else{
                                                ?>
                                            <td class="f-500 c-cyan">
                                           <a href="index.php?mail">  <button class="btn btn-primary primary-icon-notika"><i class="notika-icon notika-mail"></i> Mailing </button></a>
                                            </td>
                                            <?php }?>
                                           
                                            <?php if(isset($_GET['qa'])){?>
                                            <td class="f-500 c-cyan">
                                           <a href="index.php?qa">  <button class="btn btn-primary primary-icon-notika"><i class="notika-icon notika-chat"></i>Q & A</button></a>
                                            </td>
                                            <?php }
                                             else{
                                                ?>
                                            <td class="f-500 c-cyan">
                                           <a href="index.php?qa">   <button class="btn btn-primary primary-icon-notika"><i class="notika-icon notika-chat"></i>Q & A</button></a>
                                            </td>
                                            <?php }?>

                                            <?php if(isset($_GET['o-placement'])){?>
                                            <td class="f-500 c-cyan">
                                           <a href="index.php?o-placement">  <button class="btn btn-primary primary-icon-notika"><i class="notika-icon notika-support"></i>O-Placement</button></a>
                                            </td>
                                            <?php }
                                             else{
                                                ?>
                                            <td class="f-500 c-cyan">
                                           <a href="index.php?o-placement">  <button class="btn btn-primary primary-icon-notika"><i class="notika-icon notika-support"></i>O-Placement</button></a>
                                            </td>
                                            <?php }?>


                                                 <td class="f-500 c-cyan"><button class="btn btn-primary primary-icon-notika"><i class="notika-icon notika-support"></i>O-Placement</button></td>
                                        </tr>
                                        <tr>
                                            <td class="f-500 c-cyan">
                                            <button class="btn btn-default btn-icon-notika"><i class="notika-icon notika-house"></i> Home</button>
                                            </td>
                                            <td> <button class="btn btn-default btn-icon-notika"><i class="notika-icon notika-search"></i> Search</button></td>
                                            <td class="f-500 c-cyan"><button class="btn btn-default btn-icon-notika"><i class="notika-icon notika-menu"></i> More</button></td>
                                        </tr>
                                        <tr>
                                            <td class="f-500 c-cyan">
                                            <button class="btn btn-default btn-icon-notika"><i class="notika-icon notika-house"></i> Home</button>
                                            </td>
                                            <td> <button class="btn btn-default btn-icon-notika"><i class="notika-icon notika-search"></i> Search</button></td>
                                            <td class="f-500 c-cyan"><button class="btn btn-default btn-icon-notika"><i class="notika-icon notika-menu"></i> More</button></td>
                                        </tr>
                                        <tr>
                                            <td class="f-500 c-cyan">
                                            <button class="btn btn-default btn-icon-notika"><i class="notika-icon notika-house"></i> Home</button>
                                            </td>
                                            <td> <button class="btn btn-default btn-icon-notika"><i class="notika-icon notika-search"></i> Search</button></td>
                                            <td class="f-500 c-cyan"><button class="btn btn-default btn-icon-notika"><i class="notika-icon notika-menu"></i> More</button></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
							<div id="recent-items-chart" class="flot-chart-items flot-chart vt-ct-it tb-rc-it-res"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Email Statistic area-->
    
    
   