<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>apcv_maker</title>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/edit_info_nav.css">
</head>

<body>
    <div id="education_edit" hidden>
        <form action="" id="educationEditForm">

       
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

            <div>
                <h1> Education Info</h1>
                <div id="info-1">
                    <div id="education">
                        University of Ibadan
                    </div>
                    <p>
                    1/10/1990 - 1/10/1994
                    </p>
                    <div>
                        <img src="../../static/edit_icon.svg" alt="edit" style="cursor: pointer;" class="editbtn">
                        <img src="../../static/delete_icon.svg" alt="delete" style="cursor: pointer;" class="delete">
                    </div>

                </div>
                <div id="info-2">
                    <div id="education">
                        University of Lagos
                    </div>
                    <p>
                    1/10/1995 - 1/10/2000
                    </p>
                    <div>
                        <img src="../../static/edit_icon.svg" alt="edit" style="cursor: pointer;" class="editbtn">
                            <img src="../../static/delete_icon.svg" alt="delete" style="cursor: pointer;" class="delete">
                    </div>

                </div>
                <div id="info-3">
                    <div id="education">
                        University of Lagos
                    </div>
                    <p>
                        1/10/1995 - 1/10/2000
                    </p>
                    <div>
                        <img src="../../static/edit_icon.svg" alt="edit" style="cursor: pointer;" class="editbtn">
                        <img src="../../static/delete_icon.svg" alt="delete" style="cursor: pointer;" class="delete">
                    </div>

                </div>
            </div>
        </div>

    </div>
    <script rel="script" src="../../js/drawer.js"></script>
    <script rel="script" src="../../js/edit_info_nav_link.js"></script>
    <script>
        var edit = document.querySelectorAll("img.editbtn");
        var formFormat = document.getElementById("education_edit");
        var educationEditForm = document.getElementById("educationEditForm");
        var editbuttons = Array.from(edit)
        editbuttons.forEach(
            (i)=>{
                
                i.onclick = (e) => {
                    i.parentElement.parentElement.innerHTML = formFormat.innerHTML;
                    console.log(i.parentElement.parentElement);
                }
            }
        );
    </script>
</body>

</html>