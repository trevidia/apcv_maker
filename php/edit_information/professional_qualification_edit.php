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
        <form action="">
            <h1> Professional Qualifications and Diplomas </h1>
            <br/>
            <div class="row mb-4"> Qualifications:
                <br/>
                <div class="col-23">
                    <label class="visually-hidden" for="Qualifications"></label><br/>
                    <select class="select"> id="Qualifications"
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                        <option value="4">Four</option>
                        <option value="5">Five</option>
                        <option value="6">Six</option>
                        <option value="7">Seven</option>
                        <option value="8">Eight</option>
                    </select>
                </div>
                <br/>
                <div class="row mb-4"> Years:
                    <br/>
                    <label class="visually-hidden" for="Years"></label><br/>

                    <select name="year" class="year" id="Years">
                        <option value="2021">
                            2021
                        </option>
                        <option value="2020">
                            2020
                        </option>
                    </select>
                </div>
                <br/>
                <div class="row mb-4"> Granting Body:
                    <br/>
                    <label class="visually-hidden" for="Granting Body"></label>
                    <select class="select" id="Granting Body">
                        <option value="1">National Postgraduate College Of Physicians</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                        <option value="4">Four</option>
                        <option value="5">Five</option>
                        <option value="6">Six</option>
                        <option value="7">Seven</option>
                        <option value="8">Eight</option>
                    </select>
                </div>
                <br/>
        </form>
        <br/>
        <button class="btn" style="width: 300px; height:30px;">
            <left>SAVE CHANGES
        </button>
        <button class="btn" style="width: 200px; height:30px;">
            <right>CANCEL
        </button>
    </div>

    <script rel="script" src="../../js/drawer.js"></script>
    <script rel="script" src="../../js/edit_info_nav_link.js"></script>
</body>
</html>