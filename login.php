
<!DOCTYPE html>
<html>
    <head>
        <?php include './include/head.php'; ?>
    </head>
    <body>
        <?php include './include/header.php'; ?>
        <!-- Spacer -->
        <!-- <div class="margin-top-90"></div> -->
        <!-- Spacer / End-->
        <section class="gray padding-top-45 job-list">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 offset-xl-3">
                        <div class="login-register-page">
                            <!-- Welcome Text -->
                            <div class="welcome-text">
                                <h3>We're glad to see you!</h3>
                                <span>Don't have an account? <a href="register.php">Register</a></span>
                            </div>
                            <!-- Form -->
                            <form method="post" id="login-form">
                                <div class="input-with-icon-left">
                                    <i class="icon-material-baseline-mail-outline"></i>
                                    <input type="text" class="input-text with-border" name="emailaddress" id="emailaddress" placeholder="Email Address" required/>
                                </div>
                                <div class="input-with-icon-left">
                                    <i class="icon-material-outline-lock"></i>
                                    <input type="password" class="input-text with-border" name="password" id="password" placeholder="Password" required/>
                                </div>
                                <a href="#" class="forgot-password">Forgot Password?</a>
                            </form>
                            <!-- Button -->
                            <button class="button full-width button-sliding-icon ripple-effect margin-top-10" type="submit" form="login-form">Log In <i class="icon-material-outline-arrow-right-alt"></i></button>
                            <!-- Social Login -->

                        </div>
                    </div>
                </div>
                <!-- Spacer -->
                <div class="margin-top-90"></div>
                <!-- Spacer / End-->
            </div>
        </section>
        <?php include './include/footer.php'; ?>
    </body>
</html>
