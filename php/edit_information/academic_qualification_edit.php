<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>apcv_maker</title>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/edit_info_nav.css">
    <link rel="stylesheet" href="../../css/mobile_style.css">

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
        echo edit_info_nav('academic');
        /*
        * Todo Make sure to use any style you want for the form labels and input tags
        *  but make sure to save your style in the css directory and make sure not to override
        *  the style.css which is our base style incharge of the fonts and the drawer style
        *  thank you
        */

        ?>
        <div>
                <h1>Academic Qualifications (With Dates and Grantings)</h1>
                <h5>Please kindly fill the institutions attended. (Added new Qualification)</h5>
                <br>
            <div>
                <p>
                    <label for="qualification">Qualification</label>
                </p>
                <select name="qualification" id="qualification">
                    <option >Select...</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>

            <div>
                <p>
                    <label for="award_institution">Award Institution</label>
                </p>
                <select name="institution" id="award_institution">
                    <option >Select...</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div>
                <p>
                    <label for="date_accepted">
                        Date Accepted
                    </label>
                </p>
                <div id="date_accepted" class="date_accepted">
                    <select name="day" class="day">
                        <option value="1">
                            1
                        </option>
                    </select>
                    <select name="month" class="month">
                        <option value="january">
                            January
                        </option>
                    </select>

                    <select name="year" class="year">
                        <option value="2021">
                            2021
                        </option>
                        <option value="2020">
                            2020
                        </option>
                    </select>
                </div>
            </div>

            <button>save</button>
                <button>Add New Qualification</button>
        </div>
        </div>
    </div>       


<script rel="script" src="../../js/drawer.js"></script>
<script rel="script" src="../../js/edit_info_nav_link.js"></script>
</body>
</html>