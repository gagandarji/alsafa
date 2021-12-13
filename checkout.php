<!DOCTYPE html>
<html>
    <head>
        <?php include './include/head.php'; ?>
    </head>
    <body>
        <?php include './include/header_dashboard.php'; ?>
        <div class="margin-top-70"></div>
        <section class="gray">
            <!-- Titlebar  -->
            <div id="titlebar" class="gradient">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2>Payment</h2>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container -->
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-8 content-right-offset">		  
                        <!-- Payment Methods Accordion -->
                        <div class="payment">
                            <div class="payment-tab payment-tab-active">
                                <div class="payment-tab-trigger">
                                    <input checked id="paypal" name="cardType" type="radio" value="paypal">
                                    <label for="paypal">PayPal</label>
                                    <img class="payment-logo paypal" src="./images/paypal.png" alt="">
                                </div>
                                <div class="payment-tab-content">
                                    <p>You will be redirected to PayPal to complete payment.</p>
                                </div>
                            </div>
                            <div class="payment-tab">
                                <div class="payment-tab-trigger">
                                    <input type="radio" name="cardType" id="creditCart" value="creditCard">
                                    <label for="creditCart">Credit / Debit Card</label>
                                    <img class="payment-logo" src="./images/card.png" alt="">
                                </div>
                                <div class="payment-tab-content">
                                    <div class="row payment-form-row">
                                        <div class="col-md-6">
                                            <div class="card-label">
                                                <input id="nameOnCard" name="nameOnCard" required type="text" placeholder="Cardholder Name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="card-label">
                                                <input id="cardNumber" name="cardNumber" placeholder="Credit Card Number" required type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card-label">
                                                <input id="expiryDate" placeholder="Expiry Month" required type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card-label">
                                                <label for="expiryDate">Expiry Year</label>
                                                <input id="expirynDate" placeholder="Expiry Year" required type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card-label">
                                                <input id="cvv" required type="text" placeholder="CVV">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Payment Methods Accordion / End -->
                        <a href="order_confirm.php" class="button big ripple-effect margin-top-40 margin-bottom-65">Proceed Payment</a>
                    </div>
                    <!-- Summary -->
                    <div class="col-xl-4 col-lg-4 margin-top-0 margin-bottom-60">			
                        <!-- Summary -->
                        <div class="boxed-widget summary margin-top-0">
                            <div class="boxed-widget-headline">
                                <h3>Summary</h3>
                            </div>
                            <div class="boxed-widget-inner">
                                <ul>
                                    <li>Standard Plan <span>$49.00</span></li>
                                    <li>VAT (20%) <span>$9.80</span></li>
                                    <li class="total-costs">Final Price <span>$58.80</span></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Summary / End -->
                        <!-- Checkbox -->
                        <div class="checkbox margin-top-30">
                            <input type="checkbox" id="two-step">
                            <label for="two-step"><span class="checkbox-icon"></span>  I agree to the <a href="#">Terms and Conditions</a> and the <a href="#">Automatic Renewal Terms</a></label>
                        </div>
                    </div>	</div>
            </div>
            <!-- Container / End -->   
            <div class="margin-top-90"></div>
        </section>
        <?php include './include/footer.php'; ?>       
    </body>
</html>
