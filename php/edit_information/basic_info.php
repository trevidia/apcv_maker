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
        echo edit_info_nav();
        /*
        * Todo Make sure to use any style you want for the form labels and input tags
        *  but make sure to save your style in the css directory and make sure not to override
        *  the style.css which is our base style incharge of the fonts and the drawer style
        *  thank you
        */
        ?>
        <div class="form-container">
            <!--This is the content in the basic info-->
            <div class="basic" style="padding-bottom: 18px;">
        <h1>Basic info</h1>
</div>
<div class="row">
    <div class="column" style="float: left; padding-right: 136px;">
        <div class="label">
    <div style="padding-bottom: 16px;">Name:</div><br/>
    <div style="padding-bottom: 16px;">GSM Number:</div><br/>
    <div style="padding-bottom: 16px;">Date of Birth:</div><br/>
    <div style="padding-bottom: 16px;">Faculty:</div><br/>
    <div>Department:</div>
    </div>
</div>

    <div class="column" style="float: left; padding-right: 101px;">
        <div class="label">
    <div style="padding-bottom: 16px;">Adediran Opeyemi Adetoun</div><br/>
    <div style="padding-bottom: 16px;">09032797132</div><br/>
    <div style="padding-bottom: 16px;">24/10/1985</div><br/>
    <div style="padding-bottom: 16px;">Clinical Sciences</div><br/>
    <div>Nursing</div>
    </div>
</div>

<div class="column" style="float: left; padding-top: 113px;">
    <a href="http://localhost/apcv_maker/php/edit_information/basic_info_edit.php">
<svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#d8a4b1">
    <path d="M0 0h24v24H0V0z" fill="none"/>
    <path d="M14.06 9.02l.92.92L5.92 19H5v-.92l9.06-9.06M17.66 3c-.25 0-.51.1-.7.29l-1.83 1.83 3.75 3.75 1.83-1.83c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.2-.2-.45-.29-.71-.29zm-3.6 3.19L3 17.25V21h3.75L17.81 9.94l-3.75-3.75z"/>
</svg></a>
<div class="edit"><a href="#" style="color: #d8a4b1;">Edit</a></div>
</div>




    </div>
</div>
<script rel="script" src="../../js/drawer.js"></script>
</body>
</html>