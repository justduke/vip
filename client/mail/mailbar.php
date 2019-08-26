                        <div class="inbox-left-sd">
                        
                            <div class="compose-ml">
                            <?php if(isset($_GET['compose'])){?>   
                            <a class="btn active" href="index.php?compose">Compose</a>
                            <?php } 
                            else{ ?>
                            <a class="btn" href="index.php?compose">Compose</a>
                            <?php }?>
                            </div>
                            
                        <div class="inbox-status">
                            <ul class="inbox-st-nav inbox-ft">
                                <?php if(isset($_GET['mail'])){?>   
                                    <li><a class="active" href="index.php?mailbox"><i class="notika-icon notika-mail"></i> Inbox<span class="pull-right">12</span></a></li>
                                <?php } 
                                else{ ?>
                                 <li>
                                  <a class="active" href="index.php?mailbox"><i class="notika-icon notika-mail"></i>
                                  Inbox<span class="pull-right">12</span></a>
                                </li>
                                <?php }?>
                               
                                <li><a href="#"><i class="notika-icon notika-sent"></i> Sent</a></li>
                                
                            </ul>
                        </div>
                        <hr>
                        <div class="inbox-status">
                            <ul class="inbox-st-nav">
                                
                                <li><a href="#"><i class="notika-icon notika-finance"></i> Finance</a></li>
                                <li><a href="#"><i class="notika-icon notika-social"></i> Support</a></li>
                                <li><a href="#"><i class="notika-icon notika-promos"></i> Order</a></li>
                                
                            </ul>
                        </div>
                        
                    </div>