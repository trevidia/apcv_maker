<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>apcv_maker</title>
    <link rel="stylesheet" href="../../css/style.css">
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
        /*
        * Todo Make sure to use any style you want for the form labels and input tags
        *  but make sure to save your style in the css directory and make sure not to override
        *  the style.css which is our base style incharge of the fonts and the drawer style
        *  thank you
        */
        ?>
        <div class="form-container">
            <div class="for" style="float: left; padding-right: 79px;">
             <h1>Award Received</h1></br>
             <h2>Scholarships, Fellowships and Prizes</h2>
             <h5>With respect to Undergraduate and Postgraduate work</h5></br>
             <h2>Best Graduating Student 2005</h2>
             <h5>University of Ibadan</h5></br>
             <h2>Honours Distinctions and Membership</h2>
             <h5>of Learned Society</h5></br>
             <h4>Not Available</h4>
</div>
<a href="#">
    <div class="column" style="padding-top: 79px; padding-right: 79px;">
             <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
    <path d="M0 0h24v24H0V0z" fill="none"/>
    <path d="M14.06 9.02l.92.92L5.92 19H5v-.92l9.06-9.06M17.66 3c-.25 0-.51.1-.7.29l-1.83 1.83 3.75 3.75 1.83-1.83c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.2-.2-.45-.29-.71-.29zm-3.6 3.19L3 17.25V21h3.75L17.81 9.94l-3.75-3.75z"/>
</svg></a>
             <div><a href="#">Edit</a></div>
    </div>    
    </div>
</div>
<script rel="script" src="../../js/drawer.js"></script>
</body>
</html>