<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>apcv_maker</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div id="root">
        <!-- this is the drawer for the apcv maker site -->
        <?php
        include_once "components/drawer.php";
        echo drawer($domain, "honors")
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
            <form action="">
            <div class="form">
                
                <div>
                    <h3 style="font-size: 25px; font-weight: 700; line-height: 29.3px;">Distinguish Honours, Distinctions &
                        Membership of Learned Societies</h3>
                </div>
                <h5 style="padding-bottom: 20px; font-weight: 700; font-size: 12px; line-height: 27.72px;">Please kindly
                    fill this form</h5>

                <div>
                    Distinguish Honours, Distinctions & Membership of Learned Societies:
                </div>
                <div><input type="text" name="best" placeholder="Best Graduating Student">
                </div>

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
        <script rel="script" src="../js/drawer.js"></script>
</body>

</html>

<!--
<div class="form-container" style="padding-top: 20px;">
        <div><h3 style="font-size: 25px; font-weight: 700; line-height: 29.3px;">Distinguish Honours, Distinctions & Membership of Learned Societies</h3></div>
        <h5 style="padding-bottom: 20px; font-weight: 700; font-size: 12px; line-height: 27.72px;">Please kindly fill this form</h5>

        <div class="dis" style="font-size: 15px; font-weight: 400; line-height: 17.58.44px; padding-bottom: 8px;">Distinguish Honours, Distinctions & Membership of Learned Societies:</div>
        <div><input type="text" name="best" placeholder="Best Graduating Student" style="height: 45px; width: 572px; border: 2px solid #1f1f1f; font-size: 15px; font-weight: 400; border-radius: 5px; padding-left: 11px;"></div>

        <div class="date" style="padding-top: 8px; padding-bottom: 10px; font-size: 15px;">
            <label>Date:</label> <span style="color: #d8a4b1;">optional</span><br/></div>

            <div style="padding-bottom: 20px;">
            <select style="width: 155.06px; height: 32px; border-radius: 5px; font-weight: 400; font-size: 20px; padding-left: 10px; text-decoration: underline;">
                <option>Day</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>

            <select style="width: 155.06px; height: 32px; border-radius: 5px; font-weight: 400; font-size: 20px; padding-left: 10px; text-decoration: underline;">
                <option>Month</option>
                <option></option>
                <option></option>
                <option></option>
            </select>

            <select style="width: 155.06px; height: 32px; border-radius: 5px; font-weight: 400; font-size: 20px; padding-left: 10px; text-decoration: underline;">
                <option>Year</option>
                <option></option>
                <option></option>
                <option></option>
            </select>
        </div>


        <div><input type="text" name="best" placeholder="" style="height: 45px; width: 572px; border: 2px solid #1f1f1f; font-size: 15px; font-weight: 400; border-radius: 5px; padding-left: 11px;"></div>

        <div class="date" style="padding-top: 8px; padding-bottom: 10px; font-size: 15px;">
    <label>Date:</label> <span style="color: #d8a4b1;">optional</span><br/></div>

    <div style="padding-bottom: 40px;">
            <select style="width: 155.06px; height: 32px; border-radius: 5px; font-weight: 400; font-size: 20px; padding-left: 10px; text-decoration: underline;">
        <option>Day</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
    </select>

    <select style="width: 155.06px; height: 32px; border-radius: 5px; font-weight: 400; font-size: 20px; padding-left: 10px; text-decoration: underline;">
        <option>Month</option>
        <option></option>
        <option></option>
        <option></option>
    </select>

    <select style="width: 155.06px; height: 32px; border-radius: 5px; font-weight: 400; font-size: 20px; padding-left: 10px; text-decoration: underline;">
        <option>Year</option>
        <option></option>
        <option></option>
        <option></option>
    </select>
</div>


<div style="float: left; padding-right: 35.89px;">
<input type="submit" name="submit" value="MORE" style="font-weight: 400; font-size: 25px; line-height: 29.3px; color: #f8f9fa; background: #212529; border-radius: 5px; height: 37px; width: 180px; border: none;"></div>

<input type="submit" name="submit" value="SAVE" style="font-weight: 400; font-size: 25px; line-height: 29.3px; color: #f8f9fa; background: #212529; border-radius: 5px; height: 37px; width: 180px; border: none;">

</div>
-->