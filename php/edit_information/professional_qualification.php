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
        echo edit_info_nav('professional');
        /*
        * Todo Make sure to use any style you want for the form labels and input tags
        *  but make sure to save your style in the css directory and make sure not to override
        *  the style.css which is our base style incharge of the fonts and the drawer style
        *  thank you
        */
        ?>
        <div class="column" style="float: left; padding-right: 120px;">
            <h1>Professional Qualifications and Diploma</h1><br/>
            <div class="label">
                <div style="padding-bottom: 18px; float: left;">B.sc.(Agr.)(Bachelors Degree in Agriculture 2005)</div>
                <div class="column" style="padding-top: 0px; padding-left: 420px;">
                    <a href="professional_qualification_edit.php">
                        <img src="../../static/edit_icon.svg" alt="edit">
                    </a>
                    <div class="edit"><a href="#" style="color: #d8a4b1;">Edit</a></div>
                </div>

            </div>

        </div>

    </div>
</div>
<script rel="script" src="../../js/drawer.js"></script>
<script rel="script" src="../../js/edit_info_nav_link.js"></script>
</body>
</html>