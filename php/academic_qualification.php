<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>apcv_maker</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/mobile_style.css">
</head>
<body>
<div id="pop_up_container">
    <div id="popUp">
        <form>
            <img src="../static/close_icon.svg" alt="close" id="close_pop_up">
            <h1>New Qualification</h1>

            <div>
                <p>
                    <label for="degree">
                        Degree Name:
                    </label>
                </p>
                <input type="text" name="degree" id="degree">
            </div>
            <div>
                <p>
                    <label for="specialisation">
                        Specialisation(e.g Sports):
                    </label>
                </p>
                <input type="text" name="specialisation" id="specialisation">
            </div>
            
            <input type="submit" name="save_and_continue" value="Save & Continue" class="black_button">
        </form>
    </div>
</div>
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
                    <input type="button" value="+ Add New Qualification" class="black_button" id="new_popup" >
                
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
                        <input type="submit" name="save_and_continue" value="+ Add More" class="black_button">
                        <input type="submit" name="save_and_continue" value="Save & Continue" class="black_button">
                </div>


    </div>
</div>
<script rel="script" src="../js/pop_up.js"></script>
<script rel="script" src="../js/drawer.js"></script>
</body>
</html>