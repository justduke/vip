                        <div class="inbox-left-sd">
                        
                            <div class="compose-ml">
                            <?php if(isset($_GET['compose'])){?>   
                            <a class="btn active" href="#">My Menu</a>
                            <?php } 
                            else{ ?>
                            <a class="btn" href="#">My Menu</a>
                            <?php }?>
                            </div>
                            
                        <div class="inbox-status">
                            <ul class="inbox-st-nav inbox-ft">
                                <?php if(isset($_GET['mail'])){?>   
                                    <li><a href="index.php?available"><i class="notika-icon notika-menus"></i> Avilable<span class="pull-right">12</span></a></li>
                                <?php } 
                                else{ ?>
                                 <li>
                                  <a href="index.php?available"><i class="notika-icon notika-menus"></i>
                                  Available<span class="pull-right">12</span></a>
                                </li>
                                <?php }?>
                                <?php if(isset($_GET['mail'])){?>   
                                    <li><a class="active" href="index.php?reassign"><i class="notika-icon notika-refresh"></i> Reassigned<span class="pull-right">12</span></a></li>
                                <?php } 
                                else{ ?>
                                 <li>
                                  <a  class="" href="index.php?reassign"><i class="notika-icon notika-refresh"></i> Reassigned<span class="pull-right">12</span></a></li>
                                </li>
                                <?php }?>
                                
                                
                                <li><a href="index.php?mybid"><i class="notika-icon notika-sent"></i> Bidding <span class="pull-right">12</span></a></li>
                                <li><a href="index.php?current"><i class="notika-icon notika-menus"></i> Current <span class="pull-right">12</span></a></li>
                                <li><a href="index.php?revision"><i class="notika-icon notika-refresh"></i> Under Revision<span class="pull-right">12</span></a></li>
                                <li><a href="index.php?review"><i class="notika-icon notika-refresh"></i> Under Review<span class="pull-right">12</span></a></li>
                                <li><a href="index.php?completed"><i class="notika-icon notika-success"></i> Completed<span class="pull-right">12</span></a></li>
                            </ul>
                        </div>
                        <hr>
                        <div class="inbox-status">
                            <ul class="inbox-st-nav">
                                <li><a href="#"><i class="notika-icon notika-support"></i> Profile</a></li>
                                <li><a href="index.php?mailbox"><i class="notika-icon notika-mail"></i> Mailbox</a></li>
                                <li><a href="#"><i class="notika-icon notika-finance"></i> Finance</a></li>
                                <li><a href="#"><i class="notika-icon notika-flag"></i> Updates</a></li>
                            </ul>
                        </div>
                        <hr>
                       
                    </div>