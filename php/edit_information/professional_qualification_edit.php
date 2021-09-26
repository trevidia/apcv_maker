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
                    <select class="select" style=" width : 300px; "> id="Qualifications"
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
                    <select class="select" style=" width : 100px; "> id="Years"
                        <option value="2005">2005</option>
                        <option value="2006">2006</option>
                        <option value="2007">2007</option>
                        <option value="2008">2008</option>
                        <option value="2009">2009</option>
                        <option value="2010">2010</option>
                        <option value="2011">2011</option>
                        <option value="2012">2012</option>
                        <option value="2013">2013</option>
                        <option value="2014">2014</option>
                        <option value="2015">2015</option>
                        <option value="2016">2016</option>
                        <option value="2017">2017</option>
                        <option value="2018">2018</option>
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                    </select>
                </div>
                <br/>
                <div class="row mb-4"> Granting Body:
                    <br/>
                    <label class="visually-hidden" for="Granting Body"></label>
                    <select class="select" style=" width : 300px; "> id="Granting Body"
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