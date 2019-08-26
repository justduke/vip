                        <div class="inbox-left-sd">
                        
                            <div class="compose-ml">
                             
                            <a class="btn active" >My Menu</a>
                            
                           
                          
                            </div>
                            
                        <div class="inbox-status">
                            <ul class="inbox-st-nav inbox-ft">
                            <?php if(isset($_GET['mail'])){?>   
                                    <li><a href="index.php?order_place"><i class="notika-icon notika-menus"></i> Place Your Order</a></li>
                                <?php } 
                                else{ ?>
                                 <li>
                                  <a href="index.php?order_place"><i class="notika-icon notika-menus"></i>
                                  Place Your Order</a>
                                </li>
                                <?php }?>
                                <hr>
                                <?php if(isset($_GET['mail'])){?>   
                                    <li><a href="index.php?home"><i class="notika-icon notika-menus"></i> Orders<span class="pull-right">12</span></a></li>
                                <?php } 
                                else{ ?>
                                 <li>
                                  <a href="index.php?home"><i class="notika-icon notika-menus"></i>
                                  Orders<span class="pull-right">12</span></a>
                                </li>
                                <?php }?>
                               
                            </ul>
                        </div>
                        <hr>
                        <div class="inbox-status">
                            <ul class="inbox-st-nav">
                                <li><a href="index.php?myprofile"><i class="notika-icon notika-support"></i> Profile</a></li>
                                <li><a href="index.php?mailbox"><i class="notika-icon notika-mail"></i> Mailbox</a></li>
                                <li><a href="index.php?pay_review"><i class="notika-icon notika-credit-card"></i> Finance</a></li>
                                <li><a href="#"><i class="notika-icon notika-flag"></i> Terms/Rules/Q&A</a></li>
                            </ul>
                        </div>
                        <hr>
                       
                    </div>