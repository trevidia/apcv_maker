<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>apcv_maker</title>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/edit_info_nav.css">
    <link rel="stylesheet" href="../../css/mobile_style.css">
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
            echo edit_info_nav('awards');
            /*
        * Todo Make sure to use any style you want for the form labels and input tags
        *  but make sure to save your style in the css directory and make sure not to override
        *  the style.css which is our base style incharge of the fonts and the drawer style
        *  thank you
        */
            ?>
            <div class="form-container">
                <form action="">

                <h2>Honours Distinctions and Membership</h2>
                <h5>of Learned Society</h5></br>

                <br>

                <div>
                    Distinguish Honours, Distinctions & Membership of Learned Societies:
                </div>
                <div><input type="text" name="best" placeholder="Best Graduating Student">
                </div>
                <br>

                <div class="date">
                    <label>Date:</label> <span style="color: #d8a4b1;">optional</span><br />
                </div>

                <div style="padding-bottom: 40px;">
                    <select style="width: 155.06px; height: 32px; border-radius: 5px; font-weight: 400; font-size: 20px; padding-left: 10px;">
                        <option>Day</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>

                    <select style="width: 155.06px; height: 32px; border-radius: 5px; font-weight: 400; font-size: 20px; padding-left: 10px;">
                        <option>Month</option>
                        <option></option>
                        <option></option>
                        <option></option>
                    </select>

                    <select style="width: 155.06px; height: 32px; border-radius: 5px; font-weight: 400; font-size: 20px; padding-left: 10px;">
                        <option>Year</option>
                        <option></option>
                        <option></option>
                        <option></option>
                    </select>
                </div>


                <div style="float: left; padding-right: 35.89px;">
                    <input type="submit" name="submit" value="MORE" class="black_button">
                </div>

                <input type="submit" name="submit" value="SAVE" class="black_button">
                </form>
            </div>
        </div>
    </div>


    </div>
    <script rel="script" src="../../js/drawer.js"></script>
    <script rel="script" src="../../js/edit_info_nav_link.js"></script>
</body>

</html>