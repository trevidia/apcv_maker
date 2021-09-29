<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>apcv_maker</title>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/edit_info_nav.css">
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
        <h1>Appointment Info</h1>
        <div style="margin-top:15px; position:relative;">
            <p>First Academic Appointment: </p><br/>
            <p>Date of First Academic Appointment: </p><br/>
            <p>Present Appointment: </p><br/>
            <p>Date of Present Academic Appointment: </p><br/>
            <p>Date of Last Promotion: </p><br/>
        </div>
        <br/>
        <div style="position:absolute;">
            <img src="../../static/edit_icon.svg" alt="edit icon"><a>Edit</a>
        </div>
    </div>
</div>
<script rel="script" src="../../js/drawer.js"></script>
<script rel="script" src="../../js/edit_info_nav_link.js"></script>
</body>
</html>