<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>apcv_maker</title>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/edit_info_nav.css">
    <link rel="stylesheet" href="../../css/personal_info_style.css">
    <link rel="stylesheet" href="../../css/mobile_style.css">
</head>
<body>
<div id="root">
    <!-- this is the drawer for the apcv maker site -->
    <?php
    include_once "../components/drawer.php";
    echo drawer($domain, "edit");
    ?>
    <?php
    /* TODO form container for the apcv site
     *  write all your code inside the div with id of form-container
     */
    ?>
    <div id="form-container">
        <?php
        include_once "../../php/components/edit_info_nav.php";
        echo edit_info_nav('appointment');
        /*
        * Todo Make sure to use any style you want for the form labels and input tags
        *  but make sure to save your style in the css directory and make sure not to override
        *  the style.css which is our base style incharge of the fonts and the drawer style
        *  thank you
        */
        ?>
        <div class="info">
            <h1>Appointment Info</h1>
            <div class="form_info">
                <table class="personal_info_table">
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
                </table>
                <a href="appointment_info_edit.php">
                    <div class="edit_button">
                        <img src="../../static/edit_icon.svg" alt="edit icon">
                        <p>Edit</p>
                    </div>
                </a>

            </div>
        </div>
    </div>
</div>
<script rel="script" src="../../js/drawer.js"></script>
<script rel="script" src="../../js/edit_info_nav_link.js"></script>
</body>
</html>