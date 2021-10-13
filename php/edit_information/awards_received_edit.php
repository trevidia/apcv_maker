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
                <h1><b>Awards received</b></h1></br></br>
                <h2>Scholarships, Fellowships and Prizes</h2>
                <h5>With respect to Undergraduate and Postgraduate work</h5>
                <br>
                <p>Award : </p></br>
                <input type="text" name="Award" placeholder="Best Graduating Student"></br>
                </br>
                <p>Year: </p></br>
                <select>
                    <option>2005</option>
                    <option>2006</option>
                    <option>2007</option>
                    <option>2008</option>
                    <option>2009</option>
                </select></br>
                </br>
                <p>Awarding institute: </p>
                </br>
                <input type="text" name="Institution" placeholder="University of Ibadan">
                </br>
                </br>
                <div class="buttons">

                    <div class="action_btn">

                        <button name="submit" class="action_btn submit" type="submit" value="SAVE CHANGES" onclick="myFunction()">SAVE CHANGES</button>
                        <button name="submit" class="action_btn cancel" type="submit" value="CANCEL" onclick="myFunction2()">CANCEL</button>

                    </div>

                </div>
            </div>
        </div>


    </div>
    <script rel="script" src="../../js/drawer.js"></script>
    <script rel="script" src="../../js/edit_info_nav_link.js"></script>
</body>

</html>