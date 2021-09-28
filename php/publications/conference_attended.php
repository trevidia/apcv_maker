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
    echo drawer($domain, ["publications", "conferenceAttended"]);
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
                    <h1> Conferences Attended With Papers Read (In the last 5 years)</h1>
                    <input type="button" value="+ Add additional Papers" class="black_button" id="new_journal">
                </div>
                <div>
                    <p>
                        <label for="pub_title">
                            Conference's Title:
                        </label>
                    </p>
                    <input type="text" name="pub_title" id="pub_title" placeholder="">
                </div>
                <div>
                    <p>
                        <label for="pub_title">
                            Conference's Host:
                        </label>
                    </p>
                    <input type="text" name="pub_title" id="pub_title" placeholder="">
                </div>
              
                <div>
                    <p>
                        <label for="pub_title">
                            Conference's City:
                        </label>
                    </p>
                    <input type="text" name="pub_title" id="pub_title" placeholder="">
                </div>
                <div>
                    <p>
                        <label for="journals">
                            Country:
                        </label>
                    </p>
                    <select id="journals" name="journals">
                        <option value="1"> Nigeria</option>
                        <option value="2"> Taliban</option>
                    </select>
                </div>
                <div>
                    <p>
                        <label for="pub_title">
                           Period(23rd - 16th):
                        </label>
                    </p>
                    <input type="text" name="pub_title" id="pub_title" placeholder="">
                </div>
                <div>
                    <p>
                        <label for="journals">
                            Conference's month:
                        </label>
                    </p>
                    <select id="journals" name="journals">
                        <option value="1"> January</option>
                        <option value="2">February </option>
                    </select>
                </div>
                <div>
                    <p>
                        <label for="journals">
                            Year:
                        </label>
                    </p>
                    <select id="journals" name="journals">
                        <option value="1"> 2021</option>
                        <option value="2"> 2020</option>
                    </select>
                </div>
                <div>
                    <p>
                        <label for="pub_title">
                            Conference's Paper Title:
                        </label>
                    </p>
                    <input type="text" name="pub_title" id="pub_title" placeholder="">
                </div>
                <div>
                    <p>
                        <label for="percent_contribution">
                            Percentage Contribution:
                        </label>
                    </p>
                    <p style="font-size: 10px">
                        please input contribution in percentage 20, 30, 50
                    </p>
                    <input type="text" name="percent_contribution" id="percent_contribution" placeholder="30">
                </div>
                <div>
                    <p>
                        <label for="authors">
                            Authors:
                        </label>
                    </p>
                    <textarea id="authors" name="authors" required></textarea>
                </div>
               
               
                <input type="submit" name="save_and_continue" value="Save & Continue" class="black_button">

            </form>
        </div>
    </div>
</div>
<script rel="script" src="../../js/drawer.js"></script>
</body>
</html>