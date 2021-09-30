<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>apcv_maker</title>
    <link rel="stylesheet" href="../../css/style.css">
    <style>
        ::placeholder{color: #D8A4B1;}
    </style>
</head>
<body>

<div id="pop_up_container">
    <div id="popUp">
        <form>
            <img src="../../static/close_icon.svg" alt="close" id="close_pop_up">
            <h1>New Journal</h1>

            <div>
                <p>
                    <label for="journal_name">
                        Journal name:
                    </label>
                </p>
                <input type="text" name="journal_name" id="journal_name">
            </div>
            <div>
                <p>
                    <label for="dropdown_pop">
                        Country:
                    </label>
                </p>
                <select id="dropdown_pop" name="country">
                    <option value="Nigeria" selected disabled hidden> Nigeria</option>
                    <option value="japan"> Japan</option>
                </select>
            </div>
            <input type="submit" name="save_and_continue" value="Save & Continue" class="black_button">
        </form>
    </div>
</div>
<div id="root">
    <!-- this is the drawer for the apcv maker site -->
    <?php
    include_once "../components/drawer.php";
    echo drawer($domain, ["publications", 'technicalReports']);
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
            <!-- This is the content in technicalReports -->
            <form>
                <div>
                    <h1>Technical Reports</h1>
                    <h5>Please kindly fill in your Publications.</h5>
                </div>
                <div style="padding-top: 18px;">
                    <input type="button" value="+ Add New Journal" class="black_button" id="new_popup">
                </div>
                <div style="padding-top: 27px;">
                    <p>
                        <label for="rep_title">
                            Report's Title:
                        </label>
                    </p>
                    <input type="text" name="rep_title" id="rep_title">
                </div>
                <div class="upload_box" id="uploader">
                    <p>
                        <label for="upload_button">
                            Drop Technical Report to start uploading
                        </label>
                    </p>
                    <input type="file" value="SELECT FILE" id="select_file" class="black_button" hidden>
                    <input type="button" value="SELECT FILE" name="select_file" id="upload_button" class="black_button">
                </div>
                <div id="filename">
                </div>
                <div>
                    <p>
                        <label for="percent_contribution">
                            Percentage Contribution:
                        </label>
                    </p>
                    <p style="font-size: 10px">
                        Please input contribution in percentage e.g 20, 50
                    </p>
                    <input type="text" name="percent_contribution" id="percent_contribution" placeholder="20%">
                </div>
                <div>
                    <p>
                        <label for="authors">
                            Authors:
                        </label>
                    </p>
                    <textarea id="authors" name="authors" required></textarea>
                </div>
                <div>
                    <p>
                        <label for="org_bodies">
                            Organization Bodies:
                        </label>
                    </p>
                    <input type="text" name="org_bodies" id="org_bodies">
                </div>
                <div>
                    <p>
                        <label for="countries">
                            Country:
                        </label>
                    </p>
                    <select id="countries" name="countries">
                        <option value="1">Nigeria</option>
                        <option value="2">Ghana</option>
                        <option value="3">South Africa</option>
                    </select>
                </div>
                <div>
                    <p>
                        <label for="pages">
                            Pages:
                        </label>
                    </p>
                    <input type="text" name="pages" id="pages">
                </div>
                <div>
                    <p>
                        <label for="isbn">
                            ISBN:
                        </label>
                    </p>
                    <input type="text" name="isbn" id="isbn">
                </div>
                <div>
                    <p>
                        <label for="year_of_publication">
                            Year of Publication:
                        </label>
                    </p>
                    <div id="year_of_publication" class="year_of_publication">
                        <select name="year" class="year">
                            <option value="year">
                                Year
                            </option>
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
                <input type="submit" name="save and continue" value="Save & Continue" class="black_button">

        </form>

    </div>
</div>
<script rel="script" src="../../js/drawer.js"></script>
<script rel="script" src="../../js/upload_box.js"></script>
<script rel="script" src="../../js/pop_up.js"></script>
</body>
</html>