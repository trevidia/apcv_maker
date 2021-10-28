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
        <div id="popUp" style="height: 550px">
            <form>
                <img src="../../static/close_icon.svg" alt="close" id="close_pop_up">
                <h1>Add Additional Papers</h1>
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
    <div id="root">
        <!-- this is the drawer for the apcv maker site -->
        <?php
        include_once "../components/drawer.php";
        echo drawer($domain,  "conferenceAttended");
        ?>
        <?php
        /* TODO form container for the apcv site
     *  write all your code inside the div with id of form-container
     */
        ?>
        <div id="form-container">
        <?php
        include_once "../../php/components/pub_nav.php";
        echo pub_nav('confAt');
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
                        <h1> Conferences Attended With Papers Read (In the last 5 years)</h1>
                        <input type="button" value="+ Add additional Papers" class="black_button" id="new_popup">
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
                    <div id="questionPaper">
                        Did you present a paper at the Conference?
                        <span style="margin: 0 6px;">
                            <input type="radio" name="boolAttended" id="boolAttendedyes">
                            <label for="boolAttendedyes">yes</label>
                        </span>
                        <span>
                            <input type="radio" name="boolAttended" id="boolAttendedno" checked>
                            <label for="boolAttendedno">no</label>
                        </span>

                    </div>
                    <div id="paperPresented" hidden>
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
                    </div>



                    <input type="submit" name="save_and_continue" value="Save & Continue" class="black_button">

                </form>
            </div>
        </div>
    </div>
    <script>
        (
            function() {
                var yes = document.getElementById('boolAttendedyes');
                var no = document.getElementById('boolAttendedno');
                var attended = document.getElementById('paperPresented')
                yes.onclick = (e) => {
                    attended.hidden = false;
                }
                no.onclick = () => {
                    attended.hidden = true;
                }
            }
        )()
    </script>
    <script rel="script" src="../../js/pub_nav_links.js"></script>
    <script rel="script" src="../../js/drawer.js"></script>
    <script rel="script" src="../../js/pop_up.js"></script>
</body>

</html>