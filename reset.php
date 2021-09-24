<!-- ======== TOP HEADER ======== -->
<?php include('includes/top-header.php'); ?>
<!-- ======== END OF TOP HEADER ======== -->


<!-- ======== NAV BAR ======== -->
<?php include('includes/navbar.php'); ?>
<!-- ======== END OF NAV BAR ======== -->


<div class="col-md-8 col-lg-7 mx-auto float-none white z-depth-1 my-5">

    <!--Naked Form-->
    <div class="card-body">
        <h2 class="h2-responsive"><strong>Security Questions</strong></h2>
        <p class="pb-4">Please fill out the question correctly</p>

        <!--Body-->
        <form action="" method="post">
            <!--Email validation-->
            <h5 class="h5-responsive">E-mail validation</h5>
            <div class="md-form">
                <i class="fas fa-envelope prefix"></i>
                <input type="email" id="form9" name="email" class="form-control validate" placeholder="Your email"
                       required>
            </div>

            <h5 class="h5-responsive">Question</h5>
            <div class="md-form">
                <select class="form-control" required>
                    <option>Select question...</option>
                    <option>What is your oldest cousin’s first name?</option>
                    <option>What is the title and artist of your favorite song?</option>
                    <option>What is your oldest sibling’s middle name?</option>
                    <option>What month and day is your anniversary?</option>
                    <option>What is the middle name of your oldest child?</option>
                </select>
            </div>

            <h5 class="h5-responsive">Answer</h5>
            <div class="my-4">
                <input type="text" id="form1" class="form-control" name="answer">
            </div>

            <h5 class="h5-responsive">Confirm Answer</h5>
            <div class="my-4">
                <input type="text" id="form1" class="form-control" name="confirm">
            </div>

            <div class="text-xs-left">
                <button class="btn btn-primary" type="submit" name="submit">Submit</button>
            </div>
        </form>

    </div>
    <!--Naked Form-->

</div>


<!-- ======== FOOTER ======== -->
<?php include('includes/footer.php'); ?>
<!-- ======== END OF FOOTER ======== -->
