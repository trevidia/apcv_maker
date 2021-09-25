<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>apcv_maker</title>
    <link rel="stylesheet" href="../../css/style.css">
    <style>
        ::placeholder{
            color: #d8a4b1;
        }
    </style>
</head>
<body>
<div id="root">
    <!-- this is the drawer for the apcv maker site -->
    <?php
    include_once "../components/drawer.php";
    echo drawer($domain, "publications");
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
        <div class="form-container">
        <div><h3 style="font-size: 25px; font-weight: 700; line-height: 29.3px;">Articles that have already appeared in Learned Journals</h3></div>
        <h5 style="padding-bottom: 20px; font-weight: 700; font-size: 12px; line-height: 27.72px;">Please kindly fill your Publications</h5>
        <div style="float: left; padding-right: 35.89px;">
<input type="submit" name="submit" value="+  Add New Journal" style="font-weight: 400; font-size: 25px; line-height: 29.3px; color: #f8f9fa; background: #212529; border-radius: 5px; height: 37px; width: 294px; border: none;"></div>



<div style="font-size: 15px; font-weight: 400; line-height: 17.58px; padding-top: 60px;"><p>Publication Title:</p>
<div><input type="text" name="" placeholder="" style="width: 522px; height: 32px; border-radius: 5px; border: 1px solid black;"></div>
    </div>
    <div style="padding-top: 11px; font-weight: 400; font-size: 15px; line-height: 17.58px;">
    List of Journals:
</div>
<div style="padding-bottom: 27px; padding-top: 15px;">
<select style="height: 39px; width: 517px; font-size: 15px; font-weight: 400;">
    <option><span style="">Nauru</span></option>
    <option>...</option>
    <option>...</option>
    <option>...</option>
    <option>...</option>
</select></div>

<div class="select" style="border: 1px solid black; width: 517px; height: 116px; border-radius: 5px; text-align: center;">
<div style="font-size: 15px; font-weight: 400; line-height: 17.58px; padding-bottom: 17px; padding-top: 20px;">Drop Publication here to start uploading</div>
<div class="row upload" style="padding-right: 43px; padding-left: 43px;">
    <form enctype="multipart/form-data" action="" method="post" class="col-md-12">
    <div style="border: none; width: 431px; height: 38px; background: #1f1f1f; border-radius: 5px; text-align: center; font-weight: 400; font-size: 25px; color: #f8f9fa; line-height: 29.3px;">
    <label for="file" class="filebutton"><div style="text-transform: uppercase; padding-top: 5px; line-height: 29.9px;">Select File</div></label>
</div>


  </div>


</form>
</div>
<div>
<input id="uploadFile" placeholder="Filename.pdf" style="color: #d8a4b1; font-size: 15px; font-weight: 400; padding-top: 9px; line-height: 17.58px; border: none; outline: none;">
       
        <input style="opacity:0; " type="file" name="file" id="file" /></div>

        <div style="font-size: 15px; font-weight: 400; line-height: 17.58px; padding-top: 60px;"><p>Percentage Contribution:</p>
        <p style="font-size: 13how to style placeholder
        px; font-weight: 400; line-height: 4.72;">Please input contribution in percentage e.g 20, 50.</p>
<div><input type="text" name="" placeholder="20%" style="width: 522px; height: 32px; border-radius: 5px; padding-left: 19px; font-size: 20px; border: 1px solid black;"></div>
    </div>
    <div style="padding-top: 11px; padding-bottom: 15px; font-weight: 400; font-size: 15px; line-height: 17.58px;">
   Authors:
</div>
<div><textarea class="select" style="border: 1px solid black; width: 517px; height: 116px; border-radius: 5px; outline: none;"></textarea></div>
<div style="font-size: 15px; font-weight: 400; line-height: 17.58px; padding-top: 20px;"><p style="padding-bottom: 15px;">Journals Volume:</p>
<div><input type="text" name="" placeholder="" style="width: 522px; height: 32px; border-radius: 5px; border: 1px solid black;"></div>
    </div>
    <div style="font-size: 15px; font-weight: 400; line-height: 17.58px; padding-top: 20px;"><p style="padding-bottom: 15px;">Journals Number:</p>
<div><input type="text" name="" placeholder="" style="width: 522px; height: 32px; border-radius: 5px; border: 1px solid black;"></div>
    </div>
    <div style="font-size: 15px; font-weight: 400; line-height: 17.58px; padding-top: 20px;"><p style="padding-bottom: 15px;">Pages:</p>
<div><input type="text" name="" placeholder="" style="width: 522px; height: 32px; border-radius: 5px; border: 1px solid black;"></div>
    </div>
    <div style="font-size: 15px; font-weight: 400; line-height: 17.58px; padding-top: 20px;"><p style="padding-bottom: 15px;">Year of Publication:</p>
    <div>
    <select style="width: 155.06px; height: 32px; border-radius: 5px; font-weight: 400; font-size: 20px; padding-left: 10px; text-decoration: underline;">
                <option>Year</option>
                <option></option>
                <option></option>
                <option></option>
            </select>
    </div>
    </div>

    <div style="font-size: 15px; font-weight: 400; line-height: 17.58px; padding-top: 20px;"><p style="padding-bottom: 15px; padding-right: 29.97px;">Date Accepted:</p>
    <div style="padding-right: 40px;">
    <select style="width: 155.06px; height: 32px; border-radius: 5px; font-weight: 400; margin-right: 30px; font-size: 20px; padding-left: 10px; text-decoration: underline;">
                <option value="day">Day</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
    
            <select style="width: 155.06px; height: 32px; border-radius: 5px; font-weight: 400; margin-right: 30px; font-size: 20px; padding-left: 10px; text-decoration: underline;">
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
    </div>
<div style="padding-top: 55px; padding-left: 34px;">
    <input type="submit" name="submit" value="Save & Continue" style="font-weight: 400; font-size: 25px; line-height: 29.3px; color: #f8f9fa; background: #1f1f1f; border-radius: 5px; height: 38px; width: 431px; border: none;"></div>
    </div>


</div>
<script type="text/javascript">document.getElementById("file").onchange = function () {
    document.getElementById("uploadFile").value = this.value;
};</script>
<script rel="script" src="../../js/drawer.js"></script>
</body>
</html>