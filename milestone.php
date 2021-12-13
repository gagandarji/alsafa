
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
                    <h3> Milestone </h3>
                    <a href="#small-dialog-1"  class="popup-with-zoom-anim button createmilestone margin-top-20 ripple-effect"> Create Milestone </a>
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
                        </div>
                    </div>
                </div>
                <!-- Row / End -->
                <!-- Spacer -->
                <div class="margin-top-90"></div>
                <!-- Spacer / End-->
            </div>
        </section>
        <!-- Milestone Popup  -->
        <div id="small-dialog-1" class="zoom-anim-dialog mfp-hide dialog-with-tabs">
            <!--Tabs -->
            <div class="sign-in-form">
                <ul class="popup-tabs-nav">
                    <li><a href="#tab1"> Create Milestone Payment </a></li>
                </ul>
                <div class="popup-tabs-container">
                    <!-- Tab -->
                    <div class="popup-tab-content" id="tab">
                        <form id="terms">
                            <div class="col-xl-12">
                                <div class="submit-field">
                                    <h5>Project Name</h5>
                                    <input type="text" class="with-border" placeholder="e.g. build me a website">
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="submit-field">
                                    <h5> Amount </h5>
                                    <input type="text" class="with-border" placeholder="$ 0.00 ">
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="submit-field">
                                    <h5>Describe Your Project</h5>
                                    <textarea cols="30" rows="4" class="with-border"></textarea>
                                </div>
                            </div>
                        </form>
                        <!-- Button -->
                        <button class="margin-top-15 button full-width button-sliding-icon ripple-effect" type="submit" form="terms"> Submit  <i class="icon-material-outline-arrow-right-alt"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <?php include './include/footer.php'; ?>
    </body>
</html>
