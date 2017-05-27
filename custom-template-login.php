<?php
/* Template Name: Login
 */
get_header();
?>
    <section class="inner_banner">
        <img src="<?php the_post_thumbnail_url('full'); ?>" alt="" class="img-responsive"/>
    </section>
    <section class="signup_wrap">
        <div class="container">
            <div class="row">
                <div class="signup_box">
                    <div class="col-lg-8">
                        <div class="signup_mainbox">
                            <h3>login</h3>
                            <hr/>
                            <!--Facebook login button hook-->
                            <?php do_action('woocommerce_login_form'); ?>
                            <!-- <h4>sign up with email</h4>-->
                            <form class="form-horizontal" method="post" action="<?php bloginfo('template_directory'); ?>/login.php"> 
                                <div class="row">
                                    <div class="col-lg-12">
                                        <label>Email:</label>
                                        <input type="email" name="email" required>
                                    </div>
                                    <div class="col-lg-12">
                                        <label>Password:</label>
                                        <input type="password" name="password" required>
                                    </div>
                                    <div class="col-lg-12">
                                        <a href="#">Forgot Password?</a>
                                    </div>
                                    <div class="col-lg-12">
                                        <input type="submit" value="login"/>
                                    </div>
                                    <div class="col-lg-12">
                                        <p>Not a registered user? <a href="<?php the_permalink(page number); ?>" style="color:#7DB0B7;">Sign Up now.</a></p>
                                    </div>
                                </div>                               
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
<?php
get_footer();
?>