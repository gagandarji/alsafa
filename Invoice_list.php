
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
                    <h3> Invoice </h3>
                </div>
                <!-- Row -->
                <div class="row">
                    <!-- Dashboard Box -->
                    <div class="col-xl-12">
                        <div class="dashboard-box margin-top-0">
                            <div class="content">
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
                        </div>
                    </div>
                </div>
                <!-- Row / End -->
                <!-- Spacer -->
                <div class="margin-top-90"></div>
                <!-- Spacer / End-->
            </div>
        </section>
        <?php include './include/footer.php'; ?>
    </body>
</html>
