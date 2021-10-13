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
            echo edit_info_nav('education');
            /*
        * Todo Make sure to use any style you want for the form labels and input tags
        *  but make sure to save your style in the css directory and make sure not to override
        *  the style.css which is our base style incharge of the fonts and the drawer style
        *  thank you
        */
            ?>
            <div id="education_edit">
                <form action="" id="">
                    <div>
                        <h1>Education Info</h1>
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
                    <input type="submit" name="save_and_continue" value="Save & Continue" class="black_button">
                </form>
            </div>
        </div>

    </div>
    <script rel="script" src="../../js/drawer.js"></script>
    <script rel="script" src="../../js/edit_info_nav_link.js"></script>
</body>

</html>