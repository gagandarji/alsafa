
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
                    <h3>My Active Bids</h3>
                </div>
                <!-- Row -->
                <div class="row">
                    <!-- Dashboard Box -->
                    <div class="col-xl-12">
                        <div class="dashboard-box margin-top-0">
                            <!-- Headline -->
                            <div class="headline">
                                <h3><i class="icon-material-outline-gavel"></i> Bids List</h3>
                            </div>
                            <div class="content">
                                <ul class="dashboard-box-list">
                                    <li>
                                        <!-- Job Listing -->
                                        <div class="job-listing width-adjustment">
                                            <!-- Job Listing Details -->
                                            <div class="job-listing-details">
                                                <!-- Details -->
                                                <div class="job-listing-description">
                                                    <h3 class="job-listing-title"><a href="#">WordPress Guru Needed</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Task Details -->
                                        <ul class="dashboard-task-info">
                                            <li><strong>$40</strong><span>Hourly Rate</span></li>
                                            <li><strong>2 Days</strong><span>Delivery Time</span></li>
                                        </ul>
                                        <!-- Buttons -->
                                        <div class="buttons-to-right always-visible">
                                            <a href="#small-dialog" class="popup-with-zoom-anim button dark ripple-effect ico" title="Edit Bid" data-tippy-placement="top"><i class="icon-feather-edit"></i></a>
                                            <a href="#" class="button red ripple-effect ico" title="Cancel Bid" data-tippy-placement="top"><i class="icon-feather-trash-2"></i></a>
                                        </div>
                                    </li>
                                    <li>
                                        <!-- Job Listing -->
                                        <div class="job-listing width-adjustment">
                                            <!-- Job Listing Details -->
                                            <div class="job-listing-details">
                                                <!-- Details -->
                                                <div class="job-listing-description">
                                                    <h3 class="job-listing-title"><a href="#">Build me a website in Angular JS</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Task Details -->
                                        <ul class="dashboard-task-info">
                                            <li><strong>$2,550</strong><span>Fixed price</span></li>
                                            <li><strong>14 Days</strong><span>Delivery Time</span></li>
                                        </ul>
                                        <!-- Buttons -->
                                        <div class="buttons-to-right always-visible">
                                            <a href="#small-dialog" class="popup-with-zoom-anim button dark ripple-effect ico" title="Edit Bid" data-tippy-placement="top"><i class="icon-feather-edit"></i></a>
                                            <a href="#" class="button red ripple-effect ico" title="Cancel Bid" data-tippy-placement="top"><i class="icon-feather-trash-2"></i></a>
                                        </div>
                                    </li>
                                    <li>
                                        <!-- Job Listing -->
                                        <div class="job-listing width-adjustment">
                                            <!-- Job Listing Details -->
                                            <div class="job-listing-details">
                                                <!-- Details -->
                                                <div class="job-listing-description">
                                                    <h3 class="job-listing-title"><a href="#">Android and iOS React Appe</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Task Details -->
                                        <ul class="dashboard-task-info">
                                            <li><strong>$3,000</strong><span>Fixed Price</span></li>
                                            <li><strong>21 Days</strong><span>Delivery Time</span></li>
                                        </ul>
                                        <!-- Buttons -->
                                        <div class="buttons-to-right always-visible">
                                            <a href="#small-dialog" class="popup-with-zoom-anim button dark ripple-effect ico" title="Edit Bid" data-tippy-placement="top"><i class="icon-feather-edit"></i></a>
                                            <a href="#" class="button red ripple-effect ico" title="Cancel Bid" data-tippy-placement="top"><i class="icon-feather-trash-2"></i></a>
                                        </div>
                                    </li>
                                    <li>
                                        <!-- Job Listing -->
                                        <div class="job-listing width-adjustment">
                                            <!-- Job Listing Details -->
                                            <div class="job-listing-details">
                                                <!-- Details -->
                                                <div class="job-listing-description">
                                                    <h3 class="job-listing-title"><a href="#">Write Simple Python Script</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Task Details -->
                                        <ul class="dashboard-task-info">
                                            <li><strong>$30</strong><span>Hourly Rate</span></li>
                                            <li><strong>1 Day</strong><span>Delivery Time</span></li>
                                        </ul>
                                        <!-- Buttons -->
                                        <div class="buttons-to-right always-visible">
                                            <a href="#small-dialog" class="popup-with-zoom-anim button dark ripple-effect ico" title="Edit Bid" data-tippy-placement="top"><i class="icon-feather-edit"></i></a>
                                            <a href="#" class="button red ripple-effect ico" title="Cancel Bid" data-tippy-placement="top"><i class="icon-feather-trash-2"></i></a>
                                        </div>
                                    </li>
                                </ul>
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
        <!-- Bid Acceptance Popup
       ================================================== -->
        <div id="small-dialog-1" class="zoom-anim-dialog mfp-hide dialog-with-tabs">
            <!--Tabs -->
            <div class="sign-in-form">
                <ul class="popup-tabs-nav">
                    <li><a href="#tab1">Accept Offer</a></li>
                </ul>
                <div class="popup-tabs-container">
                    <!-- Tab -->
                    <div class="popup-tab-content" id="tab">
                        <!-- Welcome Text -->
                        <div class="welcome-text">
                            <h3>Accept Offer From David</h3>
                            <div class="bid-acceptance margin-top-15">
                                $3200
                            </div>
                        </div>
                        <form id="terms">
                            <div class="radio">
                                <input id="radio-1" name="radio" type="radio" required>
                                <label for="radio-1"><span class="radio-label"></span>  I have read and agree to the Terms and Conditions</label>
                            </div>
                        </form>
                        <!-- Button -->
                        <button class="margin-top-15 button full-width button-sliding-icon ripple-effect" type="submit" form="terms">Accept <i class="icon-material-outline-arrow-right-alt"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bid Acceptance Popup / End -->
        <!-- Send Direct Message Popup
        ================================================== -->
        <div id="small-dialog-2" class="zoom-anim-dialog mfp-hide dialog-with-tabs">
            <!--Tabs -->
            <div class="sign-in-form">
                <ul class="popup-tabs-nav">
                    <li><a href="#tab2">Send Message</a></li>
                </ul>
                <div class="popup-tabs-container">
                    <!-- Tab -->
                    <div class="popup-tab-content" id="tab2">
                        <!-- Welcome Text -->
                        <div class="welcome-text">
                            <h3>Direct Message To David</h3>
                        </div>
                        <!-- Form -->
                        <form method="post" id="send-pm">
                            <textarea name="textarea" cols="10" placeholder="Message" class="with-border" required></textarea>
                        </form>
                        <!-- Button -->
                        <button class="button full-width button-sliding-icon ripple-effect" type="submit" form="send-pm">Send <i class="icon-material-outline-arrow-right-alt"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Send Direct Message Popup / End -->
        <!-- Edit Bid Popup
        ================================================== -->
        <div id="small-dialog" class="zoom-anim-dialog mfp-hide dialog-with-tabs">
            <!--Tabs -->
            <div class="sign-in-form">
                <ul class="popup-tabs-nav">
                    <li><a href="#tab">Edit Bid</a></li>
                </ul>
                <div class="popup-tabs-container">
                    <!-- Tab -->
                    <div class="popup-tab-content" id="tab">
                        <!-- Bidding -->
                        <div class="bidding-widget">
                            <!-- Headline -->
                            <span class="bidding-detail">Set your <strong>minimal hourly rate</strong></span>
                            <!-- Price Slider -->
                            <div class="bidding-value">$<span id="biddingVal"></span></div>
                            <input class="bidding-slider" type="text" value="" data-slider-handle="custom" data-slider-currency="$" data-slider-min="10" data-slider-max="60" data-slider-value="40" data-slider-step="1" data-slider-tooltip="hide" />
                            <!-- Headline -->
                            <span class="bidding-detail margin-top-30">Set your <strong>delivery time</strong></span>
                            <!-- Fields -->
                            <div class="bidding-fields">
                                <div class="bidding-field">
                                    <!-- Quantity Buttons -->
                                    <div class="qtyButtons with-border">
                                        <div class="qtyDec"></div>
                                        <input type="text" name="qtyInput" value="2">
                                        <div class="qtyInc"></div>
                                    </div>
                                </div>
                                <div class="bidding-field">
                                    <select class="selectpicker default with-border">
                                        <option selected>Days</option>
                                        <option>Hours</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- Button -->
                        <button class="button full-width button-sliding-icon ripple-effect" type="submit">Save Changes <i class="icon-material-outline-arrow-right-alt"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Edit Bid Popup / End -->
        <?php include './include/footer.php'; ?>
    </body>
</html>
