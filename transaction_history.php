<!DOCTYPE html>
<html>
    <head>
        <?php include './include/head.php'; ?>
    </head>
    <body>
        <?php include './include/header_dashboard.php'; ?>
        <!-- Spacer -->
        <div class="margin-top-90"></div>
        <!-- Spacer / End-->
        <section class="gray padding-top-45 job-list">
            <div class="container">
                <!-- Dashboard Headline -->
                <div class="dashboard-headline">
                    <h3> Transaction History </h3>
                    <a href="checkout.php"  class="button dark  margin-top-20 ripple-effect"> Deposite Funds </a>
                </div>
                <!-- Container -->
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12 col-md-12">
                            <!-- Tabs Container -->
                            <div class="tabs">
                                <div class="tabs-header">
                                    <ul>
                                        <li class="active"><a href="#tab-1" data-tab-id="1"> All Transaction </a></li>
                                        <li><a href="#tab-2" data-tab-id="2"> Invoice </a></li>
                                        <li><a href="#tab-3" data-tab-id="3"> Milestone </a></li>
                                        <li><a href="#tab-4" data-tab-id="4"> Pending Funds </a></li>
                                    </ul>
                                    <div class="tab-hover"></div>
                                </div>
                                <!-- Tab Content -->
                                <div class="tabs-content">
                                    <div class="tab active" data-tab-id="1">						 					 					
                                        <table>
                                            <thead>
                                                <tr> 
                                                    <td> Date </td> 
                                                    <td> Transaction </td>
                                                    <td> Invoice </td>
                                                    <td> Amount	</td>
                                                    <td> Balance </td>						 
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr> 
                                                    <td> 12 Mar 2018, 10:30 </td>
                                                    <td> Done payment for responsive website </td>
                                                    <td> <a href=""> PDF </a> </td>
                                                    <td> $4500 </td>
                                                    <td> $2500 </td>						 
                                                </tr>
                                            </tbody>
                                        </table>
                                        <!-- Pagination -->
                                        <div class="clearfix"></div>
                                        <div class="pagination-container margin-top-40 margin-bottom-10">
                                            <nav class="pagination">
                                                <ul>
                                                    <li class="pagination-arrow"><a href="#" class="ripple-effect"><i class="icon-material-outline-keyboard-arrow-left"></i></a></li>
                                                    <li><a href="#" class="ripple-effect">1</a></li>
                                                    <li><a href="#" class="ripple-effect current-page">2</a></li>
                                                    <li><a href="#" class="ripple-effect">3</a></li>
                                                    <li><a href="#" class="ripple-effect">4</a></li>
                                                    <li class="pagination-arrow"><a href="#" class="ripple-effect"><i class="icon-material-outline-keyboard-arrow-right"></i></a></li>
                                                </ul>
                                            </nav>
                                        </div>
                                        <div class="clearfix"></div>
                                        <!-- Pagination / End -->
                                    </div>
                                    <div class="tab" data-tab-id="2">
                                        <table>
                                            <thead>
                                                <tr> 
                                                    <td> Employer </td> 
                                                    <td> Project Name </td>
                                                    <td> Invoice Ref </td>
                                                    <td> Invoice Amount	 </td>
                                                    <td> Paid Amount </td>
                                                    <td> Status </td>
                                                    <td> Actions </td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr> 
                                                    <td> Amazon </td>
                                                    <td> AWS Website </td>
                                                    <td> 464646</td>
                                                    <td> $4500 </td>
                                                    <td> $2500 </td>						 
                                                    <td> In Progress  </td>
                                                    <td>  
                                                        <div class="">
                                                            <select class="selectpicker hide-tick">
                                                                <option> View  </option>
                                                                <option> Send Mail </option>									 
                                                            </select>
                                                        </div> </td>
                                                </tr>
                                            </tbody>					
                                        </table>
                                        <!-- Pagination -->
                                        <div class="clearfix"></div>
                                        <div class="pagination-container margin-top-40 margin-bottom-10">
                                            <nav class="pagination">
                                                <ul>
                                                    <li class="pagination-arrow"><a href="#" class="ripple-effect"><i class="icon-material-outline-keyboard-arrow-left"></i></a></li>
                                                    <li><a href="#" class="ripple-effect">1</a></li>
                                                    <li><a href="#" class="ripple-effect current-page">2</a></li>
                                                    <li><a href="#" class="ripple-effect">3</a></li>
                                                    <li><a href="#" class="ripple-effect">4</a></li>
                                                    <li class="pagination-arrow"><a href="#" class="ripple-effect"><i class="icon-material-outline-keyboard-arrow-right"></i></a></li>
                                                </ul>
                                            </nav>
                                        </div>
                                        <div class="clearfix"></div>
                                        <!-- Pagination / End -->
                                    </div>
                                    <div class="tab" data-tab-id="3">
                                        <table>
                                            <thead>
                                                <tr> 
                                                    <td> Employer </td> 
                                                    <td> Project Name </td>
                                                    <td> Amount </td>
                                                    <td> Description </td>
                                                    <td> Status </td>
                                                    <td> Actions </td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr> 
                                                    <td> Amazon </td>
                                                    <td> AWS Website </td>
                                                    <td> $4500 </td>
                                                    <td> make it Responsive  </td>
                                                    <td> In Progress  </td>
                                                    <td>  
                                                        <div class="">
                                                            <select class="selectpicker hide-tick">
                                                                <option> Request Releace </option>
                                                                <option> Cancel </option>
                                                                <option> Dispute </option>
                                                            </select>
                                                        </div> </td>
                                                </tr>
                                            </tbody>						
                                        </table>
                                        <!-- Pagination -->
                                        <div class="clearfix"></div>
                                        <div class="pagination-container margin-top-40 margin-bottom-10">
                                            <nav class="pagination">
                                                <ul>
                                                    <li class="pagination-arrow"><a href="#" class="ripple-effect"><i class="icon-material-outline-keyboard-arrow-left"></i></a></li>
                                                    <li><a href="#" class="ripple-effect">1</a></li>
                                                    <li><a href="#" class="ripple-effect current-page">2</a></li>
                                                    <li><a href="#" class="ripple-effect">3</a></li>
                                                    <li><a href="#" class="ripple-effect">4</a></li>
                                                    <li class="pagination-arrow"><a href="#" class="ripple-effect"><i class="icon-material-outline-keyboard-arrow-right"></i></a></li>
                                                </ul>
                                            </nav>
                                        </div>
                                        <div class="clearfix"></div>
                                        <!-- Pagination / End -->
                                    </div>
                                    <div class="tab" data-tab-id="4">
                                        <table>
                                            <thead>
                                                <tr> 
                                                    <td> Date </td> 
                                                    <td> Transaction </td>
                                                    <td> Reasons </td>
                                                    <td> Currency </td>
                                                    <td> Amount	</td>
                                                    <td> Expected time of resolution </td>						 
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr> 
                                                    <td> 12 Mar 2018, 10:30 </td>
                                                    <td> Done payment for responsive website </td>
                                                    <td> Work pending  </td>
                                                    <td> $ </td>
                                                    <td> $4500 </td>
                                                    <td> 10 Days </td>						 
                                                </tr>
                                            </tbody>
                                        </table>
                                        <!-- Pagination -->
                                        <div class="clearfix"></div>
                                        <div class="pagination-container margin-top-40 margin-bottom-10">
                                            <nav class="pagination">
                                                <ul>
                                                    <li class="pagination-arrow"><a href="#" class="ripple-effect"><i class="icon-material-outline-keyboard-arrow-left"></i></a></li>
                                                    <li><a href="#" class="ripple-effect">1</a></li>
                                                    <li><a href="#" class="ripple-effect current-page">2</a></li>
                                                    <li><a href="#" class="ripple-effect">3</a></li>
                                                    <li><a href="#" class="ripple-effect">4</a></li>
                                                    <li class="pagination-arrow"><a href="#" class="ripple-effect"><i class="icon-material-outline-keyboard-arrow-right"></i></a></li>
                                                </ul>
                                            </nav>
                                        </div>
                                        <div class="clearfix"></div>
                                        <!-- Pagination / End -->
                                    </div>
                                </div>
                            </div>
                            <!-- Tabs Container / End -->
                        </div>	
                    </div>
                </div>
                <!-- Container / End -->			 
                <!-- Spacer -->
                <div class="margin-top-90"></div>
                <!-- Spacer / End-->
            </div>
        </section>
        <?php include './include/footer.php'; ?>
    </body>
</html>
