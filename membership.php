
<!DOCTYPE html>
<html>
    <head>
        <?php include './include/head.php'; ?>
    </head>
    <body>
        <?php include './include/header_dashboard.php'; ?>
        <!-- Spacer -->
        <div class="margin-top-70"></div>
        <!-- Spacer / End-->
        <section class="gray text-center">
            <div id="titlebar" class="gradient">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2> Try a Wathefa Membership</h2>		
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page Content -->
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <!-- Billing Cycle  -->
                        <div class="billing-cycle-radios margin-bottom-70">
                            <div class="radio billed-monthly-radio">
                                <input id="radio-5" name="radio-payment-type" type="radio" checked>
                                <label for="radio-5"><span class="radio-label"></span> Billed Monthly</label>
                            </div>
                            <div class="radio billed-yearly-radio">
                                <input id="radio-6" name="radio-payment-type" type="radio">
                                <label for="radio-6"><span class="radio-label"></span> Billed Yearly <span class="small-label">Save 10%</span></label>
                            </div>
                        </div>
                        <!-- Pricing Plans Container -->
                        <div class="pricing-plans-container">
                            <!-- Plan -->
                            <div class="pricing-plan">
                                <h3>Basic Plan</h3>
                                <div class="pricing-plan-label billed-monthly-label"><strong>$19</strong>/ monthly</div>
                                <div class="pricing-plan-label billed-yearly-label"><strong>$205</strong>/ yearly</div>
                                <div class="pricing-plan-features">
                                    <strong>Features of Basic Plan</strong>
                                    <ul>
                                        <li>50 Bids Per Month</li>
                                        <li>50 Skills</li>
                                        <li>Highlighted in Search Results</li>
                                    </ul>
                                </div>
                                <a href="checkout.php" class="button full-width margin-top-20">Upgrade</a>
                            </div>
                            <!-- Plan -->
                            <div class="pricing-plan recommended">
                                <div class="recommended-badge">Recommended</div>
                                <h3>Standard Plan</h3>
                                <div class="pricing-plan-label billed-monthly-label"><strong>$49</strong>/ monthly</div>
                                <div class="pricing-plan-label billed-yearly-label"><strong>$529</strong>/ yearly</div>
                                <div class="pricing-plan-features">
                                    <strong>Features of Standard Plan</strong>
                                    <ul>
                                        <li>5 Listings</li>
                                        <li>60 Days Visibility</li>
                                        <li>Highlighted in Search Results</li>
                                    </ul>
                                </div>
                                <a href="checkout.php" class="button full-width margin-top-20">Upgrade</a>
                            </div>
                            <!-- Plan -->
                            <div class="pricing-plan">
                                <h3>Extended Plan</h3>
                                <div class="pricing-plan-label billed-monthly-label"><strong>$99</strong>/ monthly</div>
                                <div class="pricing-plan-label billed-yearly-label"><strong>$1069</strong>/ yearly</div>
                                <div class="pricing-plan-features">
                                    <strong>Features of Extended Plan</strong>
                                    <ul>
                                        <li>Unlimited Listings Listing</li>
                                        <li>90 Days Visibility</li>
                                        <li>Highlighted in Search Results</li>
                                    </ul>
                                </div>
                                <a href="checkout.php" class="button full-width margin-top-20">Upgrade</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Spacer -->
            <div class="margin-top-90"></div>
            <!-- Spacer / End-->
        </section>
        <?php include './include/footer.php'; ?>
    </body>
</html>
