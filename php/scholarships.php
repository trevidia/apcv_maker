<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>apcv_maker</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/mobile_style.css">
    <style>
        p {
            text-align: center;
        }
    </style>
</head>

<body>
    <div id="root">
        <!-- this is the drawer for the apcv maker site -->
        <?php
        include_once "components/drawer.php";
        echo drawer($domain, "scholarships") ?>
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
                <form action="">
                    <div>
                        <div>
                            <h1>Scholarships and Prizes</h1>
                            <h3>Please kindly copy and paste your documents here</h3>
                            <br>
                            <label for="awards">Awards or prizes received:</label><br>
                            <input type="text" name="" id="" placeholder="">
                            <div>
                                <br>
                                <label for="date_accepted">
                                    Granting date
                                </label>
                            </div>
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
                            <br>
                            <label for="awards">Awarding Institute:</label><br>
                            <input type="text" name="institute" id="" placeholder="University of ibadan">

                        </div>
                    </div>
                    <br>
                    <div>
                        <input type="submit" name="save_and_continue" value="+ Add More" class="black_button">
                        <input type="submit" name="save_and_continue" value="Save & Continue" class="black_button">
                    </div>

                </form>
            </div>
        </div>
    </div>
    <script rel="script" src="../js/drawer.js"></script>
</body>

</html>