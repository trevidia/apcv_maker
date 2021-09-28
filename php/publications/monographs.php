<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>apcv_maker</title>
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
    
<div id="pop_up_container" hidden>
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
                    <label for="country">
                        Country:
                    </label>
                </p>
                <select id="country" name="country">
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
    echo drawer($domain, ["publications", 'monographs']);
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
                    <h1> Monograph's Reports</h1>
                    <input type="button" value="+ Add new Publisher" class="black_button" id="new_journal">
                </div>
                <div>
                    <p>
                        <label for="pub_title">
                            Monograph's title:
                        </label>
                    </p>
                    <input type="text" name="pub_title" id="pub_title" placeholder="monograph's title">
                </div>
                <div class="upload_box" id="uploader">
                    <p>
                        <label for="upload_button">
                            Drop Book Published here to start uploading
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
                <div>
                    <p>
                        <label for="journals">
                            Publishers:
                        </label>
                    </p>
                    <select id="journals" name="journals">
                        <option value="1"> Wadell, Lagos, Nigeria</option>
                        <option value="2"> meat</option>
                    </select>
                </div>
                <div>
                    <p>
                        <label for="pub_title">
                            Pages:
                        </label>
                    </p>
                    <input type="text" name="pub_title" id="pub_title" placeholder="Phylogenetics">
                </div>
                <div>
                    <p>
                        <label for="pub_title">
                            ISBN:
                        </label>
                    </p>
                    <input type="text" name="pub_title" id="pub_title" placeholder="Phylogenetics">
                </div>
                <div>
                    <p>
                        <label for="pub_title">
                            Year of Publication:
                        </label>
                    </p>
                    <select name="year" class="year">
                            <option value="2021">
                                2021
                            </option>
                            <option value="2020">
                                2020
                            </option>
                        </select>
                </div>
                <input type="submit" name="save_and_continue" value="Save & Continue" class="black_button">

            </form>
        </div>
    </div>
</div>
<script rel="script" src="../../js/drawer.js"></script>
</body>
</html>