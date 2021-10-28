<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>apcv_maker</title>
    <link rel="stylesheet" href="../../css/pub_nav.css">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/mobile_style.css">
</head>

<body>

    <div id="pop_up_container">
        <div id="popUp" style="height: 390px">
            <form>
                <img src="../../static/close_icon.svg" alt="close" id="close_pop_up">
                <h1>New Publisher</h1>

                <div>
                    <p>
                        <label for="publisher">
                            Publisher's Name:
                        </label>
                    </p>
                    <input type="text" name="publisher" id="publisher">
                </div>
                <div>
                    <p>
                        <label for="publisher">
                            Publisher's City:
                        </label>
                    </p>
                    <input type="text" name="publishersCity" id="publishersCity">
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
        echo drawer($domain,  'articlesRefereedConf');
        ?>
        <?php
        /* TODO form container for the apcv site
     *  write all your code inside the div with id of form-container
     */
        ?>
        <div id="form-container">
        <?php
        include_once "../../php/components/pub_nav.php";
        echo pub_nav('confPro');
        /*
        * Todo Make sure to use any style you want for the form labels and input tags
        *  but make sure to save your style in the css directory and make sure not to override
        *  the style.css which is our base style incharge of the fonts and the drawer style
        *  thank you
        */

        ?>
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
                        <h1> Articles Published in Conference Proceedings:</h1>

                        <input type="button" value="+ Add new Journal" class="black_button" id="new_popup">

                        <p style="font-size: 10px">
                    </div>
                    <div>
                        <p>
                            <label for="pub_title">
                                Publication title:
                            </label>
                        </p>
                        <input type="text" name="pub_title" id="pub_title" placeholder="">
                    </div>
                    <div>
                        <p>
                            <label for="pub_title">
                                Title of the proceedings/ conferences:
                            </label>
                        </p>
                        <input type="text" name="pub_title" id="pub_title" placeholder="">
                    </div>
                    <div>
                        <p>
                            <label for="pub_title">
                                Conference Name:
                            </label>
                        </p>
                        <input type="text" name="pub_title" id="pub_title" placeholder="">
                    </div>
                    <div class="upload_box" id="uploader">
                        <p>
                            <label for="upload_button">
                                Drop Publications here to start uploading
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
                            <label for="pub_title">
                                Editors <span style="color: pink;">optional</span>
                            </label>
                        </p>
                        <input type="text" name="pub_title" id="pub_title" placeholder="">
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
                    <div>
                        <p>
                            <label for="pub_title">
                                URL: <span style="color: pink;">optional</span>
                            </label>
                        </p>
                        <input type="text" name="pub_title" id="pub_title" placeholder="">
                    </div>
                    <div>
                    <input type="submit" name="save_and_continue" value="Save & Continue" class="black_button">
                    <div class="sized_box"></div>
                    </div>
                  
            </div>
            </form>
        </div>



    </div>
    </div>
    </div>
    <script rel="script" src="../../js/pub_nav_links.js"></script>
    <script rel="script" src="../../js/drawer.js"></script>
    <script rel="script" src="../../js/pop_up.js"></script>
    <script rel="script" src="../../js/upload_box.js"></script>
</body>

</html>