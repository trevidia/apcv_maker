<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>apcv_maker</title>
    <link rel="stylesheet" href="../../css/style.css">
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
        <div class="container">
            <!--Content for books already published-->
        <h1>Book Already Published</h1>
        <h6>Please kindly fill in your Publications</h6><br/>
        <!-- <button style="color: white; font-size: 100%; background-color: black; width: 294; height: 37; padding-right: 15px ">+ Add New Publisher</button><br/> -->
        <div>
            <input type="submit" name="submit" style="color: white; width: 294px; height: 37px; border-radius: 6px; font-family: Roboto; 
            background-color: black; font-size: 150%;" value="+ Add New Publisher"><br/>
        </div><br/>
        <p>Book's Title:</p><br/>

        <div>
        
        <input type="text" name="submit" style="height: 32px; width: 522px; border: 1px solid black;" value=" "><br/>
        </div><br/>


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


        
        
        <p style="color: pink;">Filename.pdf</p><br/>
        <p style="font-size: 150%;">Percentage Contribute:</p><br/>
        <p style="font-size: 90%;">Please input contribution in percentage e.g 20, 50</p><br/>
        <div>
        <input type="text" name="submit" style="height: 32px; width: 522px; border: 1px solid black;" placeholder="20%;" value=" ">
        </div><br/>
        <div>
        <p style="font-size: ">Authors:</p><br/>
        <input type="text" name="submit" style="height: 116px; width: 517px; border: 1px solid black;" value=" ">
        </div><br/>
        <p>Publishers:</p>
        <br/>
        <select style="width: 517px; height: 39px;">
            
        <option value="Wadell, Lagos, Nigeria" selected>Wadell, Lagos, Nigeria<optiion>
        <option></optiion>
        <option></optiion>
        <option></optiion>
        </select><br/>
        <br/>
    <div>
         <p>Pages:</p><br/>
        <input type="text" name="Pages" style="height: 32px; width: 522px; border: 1px solid black;" value=" ">
        <br/>
         <p>ISBN:</p><br/>   
        <input type="text" name="ISBN" style="height: 32px; width: 522px; border: 1px solid black;" value=" "><br/>
    </div><br/>
    <p>Year of Publication:</p>
    <select style="width: 153px; height: 32px;">
            
            <option value="Year" underlined, selected>Year<optiion>
            <option></optiion>
            <option></optiion>
            <option></optiion>
            </select>
            <br/><br/>
        <input type="checkbox" name="prm" value="pub" style="font-size: 30%;"><label for="prm">New Publication after last Promotion or Consideration:</label>
        <br/>
        <br/>
        <select style="width: 153px; height: 32px;">
            
            <option value="Year" underlined, selected>Year<optiion>
            <option></optiion>
            <option></optiion>
            <option></optiion>
            </select>
            <br/><br/>
            <br/>
    <input type="submit" name="submit" style="color: white; width: 431px; height: 38px; background-color: black; font-size: 150%; border-radius: 6px; font-family: Roboto; 
            font-weight: 500" value=" Save and Continue"><br/>


    </div>
<script rel="script" src="../../js/drawer.js"></script>
</body>
</html>