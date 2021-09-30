<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>apcv_maker</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<div id="root">
    <!-- this is the drawer for the apcv maker site -->
    <?php
    include_once "components/drawer.php";
    echo drawer($domain, "academic");
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
            <form>
                <div>
                    <h1> Academic Qualifications (With Dates and Grantings)</h1>
                    <p>Please kindly fill the institutions attended. (Added new Qualification)</p></br>
                    <input type="button" value="+ Add New Qualification" class="black_button" id="new_qualificaion" style="padding-style: 16px;">
                
                </div>    
                <div style="padding-top: 32px;">
                    <p>
                        <label for="qualifications">
                            Qualification:
                        </label>
                    </p>
                    <select id="qualifications" name="qualifications">
                        <option value="1"> Select...</option>
                        <option value="2"> </option>
                        <option value="3"> </option>
                        <option value="4"> </option>
                    </select>
                </div>
                <div style="padding-top: 22px;">
                    <p>
                        <label for="awarding_institution">
                            Awarding Institution:
                        </label>
                    </p>
                    <select id="awarding_institutions" name="awarding_institutions">
                        <option value="1"> University of Ibadan</option>
                        <option value="2"> </option>
                        <option value="3"> </option>
                        <option value="4"> </option>
                    </select>
                </div>

                <div style="padding-top: 19px;">
                    <p>
                        <label for="granting_date">
                            Granting Date:
                        </label>
                    </p>
                    <div id="granting_date" class="granting_date">
                        <select name="day" class="day">
                            <option value="01">
                                01
                            </option>
                        </select>
                        <select name="month" class="month">
                            <option value="june">
                                June
                            </option>
                        </select>

                        <select name="year" class="year">
                            <option value="2021">
                                2021
                            </option>
                            <option value="2020">
                                2020
                            </option>
                            <option value="2019">
                                2019
                            </option>
                            <option value="2018">
                                2018
                            </option>
                        </select>
                    </div>
                </div>

                <div style="padding-top: 35px;">
                    <input type="submit" name="save" value="SAVE" class="black_button">
                    <input type="submit" name="add_qualifications" value="+ Add Qualifications" class="black_button">
                </div>


    </div>
</div>
<script rel="script" src="../js/drawer.js"></script>
</body>
</html>