<?php
if($_SESSION['user_type'] == 'customer'){
?>
						<ul class="tm-main-nav-ul">
                            <li class="tm-nav-item" ><a href="<?php echo WEB_ROOT;?>" class="tm-nav-item-link tm-button">
                                Welcome</a>
                            </li>
                            <li class="tm-nav-item" ><a href="<?php echo WEB_ROOT; ?>view.php?mod=customer&view=makeComplain" class="tm-nav-item-link tm-button">
                             Make Complains</a>
                            </li>
                            <li class="tm-nav-item" ><a href="<?php echo WEB_ROOT; ?>view.php?mod=customer&view=compDetails" class="tm-nav-item-link tm-button">
                               View Complains Details</a>
							 </li>
							<li class="tm-nav-item"><a href="<?php echo $self; ?>?logOut" class="tm-nav-item-link tm-button">
                               Logout</a>
                            </li>
                        </ul>
<?php 
}else if($_SESSION['user_type'] == 'employee'){
?>
						<ul class="tm-main-nav-ul">
                            <li class="tm-nav-item" ><a href="<?php echo WEB_ROOT;?>" class="tm-nav-item-link tm-button">
                                Welcome</a>
                            </li>
                            <li class="tm-nav-item" ><a href="<?php echo WEB_ROOT; ?>view.php?mod=employee&view=viewComplain" class="tm-nav-item-link tm-button">
                             View Assign Complains</a>
                            </li>
                            <li class="tm-nav-item"><a href="<?php echo WEB_ROOT; ?>view.php?mod=employee&view=viewComplainClose" class="tm-nav-item-link tm-button">
                                Close Complains</a>
                            </li>
                            <li class="tm-nav-item" ><a href="<?php echo WEB_ROOT; ?>view.php?mod=admin&view=compCloseDetails" class="tm-nav-item-link tm-button">
                               View Closed Complains</a>
							  </li>
							<li class="tm-nav-item"><a href="<?php echo $self; ?>?logOut" class="tm-nav-item-link tm-button">
                               Logout</a>
                            </li>
                        </ul>
	 
<?php 
}else if($_SESSION['user_type'] == 'admin'){
?>

                        <ul class="tm-main-nav-ul">
                            <li class="tm-nav-item" ><a href="<?php echo WEB_ROOT;?>" class="tm-nav-item-link tm-button">
                                Welcome</a>
                            </li>
                            <li class="tm-nav-item" ><a href="<?php echo WEB_ROOT; ?>view.php?mod=admin&view=compDetails" class="tm-nav-item-link tm-button">
                              Assign Complains</a>
                            </li>
                            <li class="tm-nav-item"><a href="<?php echo WEB_ROOT; ?>view.php?mod=admin&view=vDetails" class="tm-nav-item-link tm-button">
                                View Complains</a>
                            </li>
                            <li class="tm-nav-item" ><a href="<?php echo WEB_ROOT; ?>view.php?mod=admin&view=compCloseDetails" class="tm-nav-item-link tm-button">
                               View Closed Complains</a>
                            </li>
                            <li class="tm-nav-item" ><a href="<?php echo WEB_ROOT; ?>view.php?mod=admin&view=enggDetails" class="tm-nav-item-link tm-button">
                                Engineer Details</a>
                            </li>
							<li class="tm-nav-item" ><a href="<?php echo WEB_ROOT; ?>view.php?mod=admin&view=custDetails" class="tm-nav-item-link tm-button">
                               Customer Details</a>
                            </li>
							<li class="tm-nav-item"><a href="<?php echo $self; ?>?logOut" class="tm-nav-item-link tm-button">
                               Logout</a>
                            </li>
                        </ul>
<?php 
}
?>