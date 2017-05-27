<?php 
global $woocommerce;
/* Template Name: Registration
 */
get_header();
    //print_r($_POST);
    $firstname = $_REQUEST['firstname'];
    $lastname = $_REQUEST['lastname'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
    $conpassword = $_REQUEST['confirmpassword'];
        if($password==$conpassword){
        //echo "Password Matched";
           $user_id = wc_create_new_customer( $email, $email, $conpassword );
          if ( is_wp_error( $user_id ) ) {
                $error_string = $user_id->get_error_message();
                //echo '<div id="message" class="error"><p>' . $error_string . '</p></div>';
           }else{
               update_user_meta($user_id,'first_name',$firstname);
               update_user_meta($user_id,'last_name',$lastname);
           }
        }else{
            echo "Password Not Matched";
        } 
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
                            <h3>sign up</h3>
                            <hr/>
                            <!--Facebook login button register hook-->
                            <?php do_action( 'register_form' ); ?>
                            <h4>sign up with email</h4>
                            <form class="form-horizontal" method="post" action=""> 
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label>First Name:</label>
                                        <input type="text" name="firstname" required>
                                    </div>
                                    <div class="col-lg-6">
                                        <label>Last Name:</label>
                                        <input type="text" name="lastname" required>
                                    </div>
                                    <div class="col-lg-12">
                                        <label>Email:</label>
                                        <input type="email" name="email" required>
                                    </div>
                                    <div class="col-lg-12">
                                        <label>Password:</label>
                                        <input type="password" name="password" minlength="6" required>
                                    </div>
                                    <div class="col-lg-12">
                                        <label>Confirm Password:</label>
                                        <input type="password" name="confirmpassword" minlength="6" required>
                                    </div>
                                </div>                               
                                <input type="submit" value="sign up"/>
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
