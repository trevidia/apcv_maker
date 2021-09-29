<!-- ======== TOP HEADER ======== -->
<?php include('includes/top-header.php'); ?>
<!-- ======== END OF TOP HEADER ======== -->


<header>
    <!-- ======== NAV BAR ======== -->
    <?php include('includes/navbar.php'); ?>
    <!-- ======== END OF NAV BAR ======== -->


    <div class="view"
         style="background-image: url('static/img/address.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">

        <div class="mask rgba-grey-light d-flex justify-content-center align-items-center">

            <div class="container">

                <div class="row pt-lg-5 mt-lg-5 top-space">

                    <div class="col-md-6 mb-5 mt-md-0 mt-5 white-text text-center text-md-left wow fadeInLeft"
                         data-wow-delay="0.3s">
                        <h1 class="title display-4 font-weight-bold">ApcvMaker</h1>

                        <hr class="hr-light">
                        <strong><h5 class="title">College of Medicine, University of Ibadan</h5></strong>

                    </div>

                    <div class="col-md-6 col-xl-5 mb-4">
                        <!--Form-->
                        <div class="card wow fadeInRight" data-wow-delay="0.3s">
                            <div class="card-body z-depth-2">

                                <form name="login" action="" method="post">
                                    <!-- Heading -->
                                    <h3 class="title dark-grey-text text-center">
                                        <strong>Login</strong>
                                    </h3>
                                    <hr>

                                    <!-- Email -->
                                    <div class="md-form">
                                        <i class="fas fa-envelope prefix grey-text"></i>
                                        <input type="email" class="form-control mb-4" name="email" placeholder="E-mail"
                                               required>
                                    </div>

                                    <!-- Password -->
                                    <div class="md-form">
                                        <i class="fas fa-lock prefix grey-text"></i>
                                        <input type="password" class="form-control mb-4" name="password"
                                               placeholder="Password" required>
                                    </div>

                                    <p>Promotion Year</p>
                                    <select class="form-control" name="pyear">
                                        <option name="year">Select year...</option>
                                    </select>

                                    <div class="text-center">
                                        <button class="btn btn-indigo btn-block my-4" type="submit" name="login">Login
                                        </button>
                                        <hr>

                                        <!-- Reset Password -->
                                        <p>Forgot Password?
                                            <a href="reset.php">Reset</a>
                                        </p>

                                    </div>

                                </form>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</header>

<div class="content my-5" style="letter-spacing: 1px; line-height: 2; color: black; font-weight: 400;">
    <h3 class="py-4 pt-5" style="font-weight: 700;">Academic Staff Promotions Solution</h3>
    <p class="text-justify">
        The desire of the University of Ibadan is to be a leading research-intensive university; hence, emphasis has to
        be placed on research and scholarly publications. This is in keeping with the Vision and Mission of the
        University of Ibadan. Overall, the university must aspire to attain and retain globally acceptable standards of
        appraisal for our staff and students (Adebayo, 2005). The on-line application is hereby introduced to enhance
        acceptable standards and ease of application for promotion in the University of Ibadan. Intending applicants are
        therefore encouraged to prepare their cases for promotion in a word document in the first instance for easy
        transfer to the academic staff promotion software.
        <br><br>
        It is also recommended that you read the promotion guidelines document of the University for the promotion year
        you are putting in for.

    </p>

</div>


<!-- ======== FOOTER ======== -->
<?php include('includes/footer.php'); ?>
<!-- ======== END OF FOOTER ======== -->

<script>
    $(function () {
        var start_year = new Date().getFullYear();

        for (var i = start_year; i > start_year - 30; i--) {
            $('select').append('<option value="' + i + '">' + i + '</option>');
        }
    });
</script>