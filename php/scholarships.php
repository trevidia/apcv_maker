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
                    <div>
                        <div>
                            <h1>Scholarships and Prizes</h1>
                            <h4>Please kindly copy and paste your documents here</h4>
                            <br>
                            <br>
                          <div id="forms">
                            <div class="form-1">
                            <label for="awards">Awards or prizes received:</label><br>
                            <input type="text" name="" id="" placeholder="">
                            <div>
                                <br>
                                <label for="date_accepted">
                                    Starting date:
                                </label>
                            </div>
                            <div id="Starting_date" class="Starting_date">
                                <label>
                                <input type="date" name="date">
                                </label>
                    </div>
                            <br>
                            <label for="awards">Awarding Institute:</label><br>
                            <input type="text" name="institute" id="" placeholder="University of Ibadan">

                        </div>
                    </div>
                    <br>
                            </div>

                          </div>
                    <div>
                        <input type="submit" name="save_and_continue" id="add_more" value="+ Add More" class="black_button">
                        <input type="submit" name="save_and_continue" value="Save & Continue" class="black_button">
                    </div>
            </div>
        </div>
    </div>
    <script rel="script" src="../js/add_more.js"></script>
    <script rel="script" src="../js/drawer.js"></script>
</body>

</html>