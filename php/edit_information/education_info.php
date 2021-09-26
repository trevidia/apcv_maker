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
        echo edit_info_nav('education');
        /*
        * Todo Make sure to use any style you want for the form labels and input tags
        *  but make sure to save your style in the css directory and make sure not to override
        *  the style.css which is our base style incharge of the fonts and the drawer style
        *  thank you
        */
        ?>

<form action="form-container">
        <div><h1>Apointment info</h1></div>
        <div class="first-academic">
            <label for="lecturer">first Academic Appointment</label>
            <select name="lecturer" id="" style="width: 40%; padding: 10px; border-radius: 5px"></select>
                <option value="text">Lecturer 11</option>
                <option value="text">Lecturer 1</option>
        </div>
        <div>
            <label for="date">Date of First Academic Appointmnent</label>
            <select name="date" id=""> </select>
                <option value="text" >01</option>
                
        </div>
    </form>
    </div>
 
</div>
<script rel="script" src="../../js/drawer.js"></script>
<script rel="script" src="../../js/edit_info_nav_link.js"></script>
</body>
</html>