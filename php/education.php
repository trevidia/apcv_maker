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
            <h1>New Institution</h1>

            <div>
                <p>
                    <label for="institution_name">
                        Institutions name:
                    </label>
                </p>
                <input type="text" name="institution" id="institution_name">
            </div>
            <div>
                <p>
                    <label for="dropdown_pop">
                        State:
                    </label>
                </p>
                <select id="dropdown_pop" name="state">
                    <option value="International" selected> International</option>
                    <option value="Bodies"> Bodies</option>
                </select>
            </div>
            <input type="submit" name="save_and_continue" value="Save & Continue" class="black_button">
        </form>
    </div>
</div>
<div id="root">
    <!-- this is the drawer for the apcv maker site -->
    <?php
    include_once "components/drawer.php";
    echo drawer($domain, "education")
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
            <div style="margin-bottom: 9px">
                <h1>
                    University Education
                </h1>
                <input type="button" value="+ Add new institute" class="black_button" id="new_popup">
            </div>
            <div style="margin-bottom: 9px">
                <p>
                    <label for="university">
                        University name:
                    </label>
                </p>
                <input type="text" name="university" id="university">
            </div>
            <div style="margin-bottom: 9px">
                <p>
                    <label for="date_accepted">
                        Start Date:
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
            <div>
                <p>
                    <label for="date_accepted">
                        End Date:
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
            <div class="sized_box"></div>
            <input type="submit" name="save_and_continue" value="Save & Continue" class="black_button">

        </form>
    </div>
</div>
<script rel="script" src="../js/drawer.js"></script>
<script rel="script" src="../js/pop_up.js"></script>
</body>
</html>