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
    include_once "components/drawer.php";
    echo drawer($domain, "edit");
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
            <!--This is the content in the edit_research info-->
            <div class="edit_research">
        <h1 style="font-size: 30px; font-weight: 700; line-height: 35.16px;">Research</h1>
</div>

<div>
<h4 style="font-size: 18px; font-weight: 700; line-height: 21.09px;">Completed Research</h4>
<h2 style="font-size: 25px; font-weight: 700;">Details About Completed Work</h2>
</div>

<div style="font-size: 20px; font-weight: 400; line-height: 23.44px;">Research Title:
<div><input type="text" name="" placeholder="Larynx Cancer" style="width: 258px; height: 36px; border-radius: 5px; border: 1px solid black;"></div>

<div style="padding-top: 18px;">
	<div style="float: left; padding-right: 35.89px;">
<input type="submit" name="submit" value="MORE" style="font-weight: 400; font-size: 25px; line-height: 29.3px; color: #f8f9fa; background: #212529; border-radius: 5px; height: 37px; width: 184.56px; border: none;"></div>

<input type="submit" name="submit" value="SAVE" style="font-weight: 400; font-size: 25px; line-height: 29.3px; color: #f8f9fa; background: #212529; border-radius: 5px; height: 37px; width: 184.56px; border: none;">

</div>
</div>
<!--end of intro to the edit reasearch info-->

<!--research in progress-->
<div style="padding-top: 60px; font-weight: 700; font-size: 18px; line-height: 21px;"><h3>Research In Progress</h3></div>

<div>
	<p style="font-size: 15px; font-weight: 400; float: left; padding-right: 331px;">Liver Cell Growth</p>
<a href="#">
<svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#d8a4b1">
    <path d="M0 0h24v24H0V0z" fill="none"/>
    <path d="M14.06 9.02l.92.92L5.92 19H5v-.92l9.06-9.06M17.66 3c-.25 0-.51.1-.7.29l-1.83 1.83 3.75 3.75 1.83-1.83c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.2-.2-.45-.29-.71-.29zm-3.6 3.19L3 17.25V21h3.75L17.81 9.94l-3.75-3.75z"/>
</svg></a>
<div><a href="#" style="color: #d8a4b1; text-decoration: none;">Edit</a></div>
</div>
<!--end of research in progress-->

<!--Liver cell details-->
<p style="padding-top: 20px; font-weight: 400; font-size: 15px;">Liver Cell Growth Details</p>
<div style="font-size: 15px; width: 400px; float: left; padding-right: 41.81px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised  to make a type. It has survived not only  to make a type. It has survived not only in Ipsum in Ipsum.</div>
<div style="padding-top: 50px;">
<a href="#" style="padding-top: 50px;">
<svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#d8a4b1">
    <path d="M0 0h24v24H0V0z" fill="none"/>
    <path d="M14.06 9.02l.92.92L5.92 19H5v-.92l9.06-9.06M17.66 3c-.25 0-.51.1-.7.29l-1.83 1.83 3.75 3.75 1.83-1.83c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.2-.2-.45-.29-.71-.29zm-3.6 3.19L3 17.25V21h3.75L17.81 9.94l-3.75-3.75z"/>
</svg></a>
<div><a href="#" style="color: #d8a4b1; text-decoration: none;">Edit</a></div><br/><br/>
<br/>
<!--end of liver cell details-->


<!--project and thesis-->
<div>
<h4 style="font-weight: 700; font-size: 18px;">Project, Dissertation and Thesis</h4>
<p style="float: left; padding-right: 123.04px;">Human body and its organs and response to covid
</p>
<div class="column">
	<a href="#">
<svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#d8a4b1">
    <path d="M0 0h24v24H0V0z" fill="none"/>
    <path d="M14.06 9.02l.92.92L5.92 19H5v-.92l9.06-9.06M17.66 3c-.25 0-.51.1-.7.29l-1.83 1.83 3.75 3.75 1.83-1.83c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.2-.2-.45-.29-.71-.29zm-3.6 3.19L3 17.25V21h3.75L17.81 9.94l-3.75-3.75z"/>
</svg></a>
<div class="edit"><a href="#" style="color: #d8a4b1; text-decoration: none;">Edit</a></div>
</div>
</div>
<!--end of project-->


<!--end of form container-->
</div>
    </div>
</div>
</body>
</html>