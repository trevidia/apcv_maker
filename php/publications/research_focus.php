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
    echo drawer($domain, ["publications", 'researchFocus']);
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
        <form>
        <div class="container">
        <!--Contents for research focus-->
        <h1>Research Focus</h1>
        <h5>Please kindly fill in your Publications</h5><br/></br>
        <p>Research focus: </p><br/>
        <textarea style="height: 272px"></textarea>
        
    </div>
<div style="padding-left: 140px; padding-top: 20px;">
    <input type="submit" name="save_and_continue" style="font-size: 130%;" value="Save & Continue" class="black_button">
</div>
</form>
    </div>
    
</div>
<script rel="script" src="../../js/drawer.js"></script>
</body>
</html>