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
                <h1>New Qualification</h1>

                <div>
                    <p>
                        <label for="degree">
                            Degree Name:
                        </label>
                    </p>
                    <input type="text" name="degree" id="degree">
                </div>
                <div>
                    <p>
                        <label for="specialisation">
                            Specialisation(e.g Sports):
                        </label>
                    </p>
                    <input type="text" name="specialisation" id="specialisation">
                </div>

                <input type="submit" name="save_and_continue" value="Save & Continue" class="black_button">
            </form>
        </div>
    </div>
    <div id="root">
        <!-- this is the drawer for the apcv maker site -->
        <?php
        include_once "components/drawer.php";
        echo drawer($domain, "professional");
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
                <h1>Professional Qualifications</h1>
                <div style="padding-top: 20px;">
                    <input type="button" name="submit" class="black_button" value="+ Add New Qualification" id="new_popup"><br />
                </div>
                <div id="forms">
                    <div class="form-1">
                        <div style="padding-top: 40px;">
                            <p>
                                <label for="journals">
                                    Qualifications:
                                </label>
                            </p>
                            <select id="journals" name="journals">
                                <option value="1" selected>Select...</option>
                                <option value="2"> meat</option>
                            </select>
                            <br />
                        </div>
                        <div style="display: flex; align-items: baseline; "><input type="checkbox" style="margin-right: 6px;"> Awarding Institution: </div>
                        <div>
                            <select id="university" name="university">
                                <option value="1" selected>University of Ibadan</option>
                                <option value="2"> Unilag</option>
                            </select>

                        </div>

                        <div style="display: flex; align-items: baseline; "><input type="checkbox" style="margin-right: 6px"> Awarding Bodies: </div>
                        <select id="awardingBodies" name="awardingBodies">
                            <option value="1" selected>FRCOG</option>
                            <option value="2"> gotv</option>
                        </select>

                        <div style="padding-top: 20px;">
                            <p>
                                <label for="date_accepted">
                                    Granting date:
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
                    </div>
                </div>
                <div style="padding-top: 20px;">
                    <input type="button" name="save_and_continue" id="add_more" value="+ Add More" class="black_button">
                    <input type="submit" name="save_and_continue" value="Save & Continue" class="black_button">
                </div>
            </div>


        </div>
    </div>
    <!-- <script>
        var addMore = document.getElementById("add_more");


        var forms = document.getElementById("forms");

        addMore.onclick = function() {
            var id = forms.lastElementChild.className;
            var lsi = id.split("-");
            var formNumber = Number.parseInt(lsi[1]) + 1;
            var formFormat = forms.lastElementChild.outerHTML;
            var newFormat = formFormat.replace(id, `form-${formNumber}`)
            forms.insertAdjacentHTML("beforeend", newFormat);
        }
    </script> -->
    <script rel="script" src="../js/add_more.js"></script>
    <script rel="script" src="../js/drawer.js"></script>
    <script rel="script" src="../js/pop_up.js"></script>
</body>

</html>