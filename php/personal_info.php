<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>apcv_maker</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/personal_info_style.css">
</head>
<body>
<div id="root">
    <!-- this is the drawer for the apcv maker site -->
    <?php
    include_once "components/drawer.php";
    echo drawer($domain, "personal")
    ?>
    <?php
    /* TODO form container for the apcv site
     *  write all your code inside the div with id of form-container
     */
    ?>
    <div id="form-container">
        <?php
        /*
        * Todo Make sure to use any style you want for the form labels and input tags
        *  but make sure to save your style in the css directory and make sure not to override
        *  the style.css which is our base style incharge of the fonts and the drawer style
        *  thank you
        */
        ?>
        <div class="form">

            <!-- The Personal Information contents  -->
            <div class="Personal_Info" style="padding-bottom: 18px;">
                <h1>Personal Information</h1>
            </div>
            <div class="personal_info_container">
                <div class="table_plus_button">
                    <table class="personal_info_table">

                        <tr>
                            <td>Name:</td>
                            <td>Adeniran Opeyemi Adetoun</td>
                        </tr>
                        <tr>
                            <td>GSM Number:</td>
                            <td>09032797132</td>
                        </tr>
                        <tr>
                            <td>Date of Birth:</td>
                            <td>24/10/1985</td>
                        </tr>
                        <tr>
                            <td>Faculty:</td>
                            <td>Clinical Sciences</td>
                        </tr>
                        <tr>
                            <td>Department:</td>
                            <td>Nursing</td>
                        </tr>
                        <tr>
                            <td>First Academic Appointment:</td>
                            <td>Lecturer II</td>
                        </tr>
                        <tr>
                            <td>Date of First Academic Appointment:</td>
                            <td>01/06/2018</td>
                        </tr>
                        <tr>
                            <td>Present Appointment:</td>
                            <td>Lecturer I</td>
                        </tr>
                        <tr>
                            <td>Date of Present Academic Appointment:</td>
                            <td>01/06/2018</td>
                        </tr>
                        <tr>
                            <td>Date of Last Promotion:</td>
                            <td>01/06/2018</td>
                        </tr>
                        <tr>
                            <td>Date of Last Considered:</td>
                            <td>01/06/2018</td>
                        </tr>

                    </table>
                    <input type="button" class="black_button" value="Edit Info"
                           onclick="location.href = 'edit_information/basic_info_edit.php'">
                </div>


                <div id="image-box">
                    <div class="image-container">
                        <?php
                        /*
                         *  The database checks for the passport and then gets an image and supplies the url
                         */
                        $image = null;
                        if ($image != null) {
                            echo "<img src=\"" . $image . "\" alt=\"Passport\">";
                        } else {
                            echo "<p> Passport </p>";
                        }
                        ?>
                    </div>
                    <input type="file" accept="image/png, image/jpeg" name="passport" id="passport" hidden>
                    <div id="edit_passport">
                        Edit Passport
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script rel="script" src="../js/drawer.js"></script>
<script rel="script" src="../js/edit_passport.js"></script>
</body>
</html>