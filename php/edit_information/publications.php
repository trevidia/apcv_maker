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
        echo edit_info_nav('publications');
        /*
        * Todo Make sure to use any style you want for the form labels and input tags
        *  but make sure to save your style in the css directory and make sure not to override
        *  the style.css which is our base style incharge of the fonts and the drawer style
        *  thank you
        */
        ?>

        <div class="info">
            <h1>Publication Info</h1>
            <h3>Articles that have already appeared in learned journals</h3>
            <div class="form_info">
                <p>Abimbola, A. F., Laniyan, T.A., Okunlola, O.W., Odewande, A. A., Ajibade, O.
                    M. and Kolawole, T. (2005). Water Quality Test of Areas Surrounding Selected
                    Refuse Dumpsites in Ibadan, South-western Nigeria. Journal of the Nigerian
                    Association of Hydrogeologists Vol.16:39 -69pp (Nigeria) (Contribution: 20%)</p>
                <a href="appointment_info_edit.php">
                    <div class="edit_button">
                        <img src="../../static/edit_icon.svg" alt="edit icon">
                        <p>Edit</p>
                    </div>
                </a>
            </div>

            <h3>Articles that have appeared in Refereed Conference Proceeding</h3>
            <div class="form_info">
                <p>Abimbola, A. F., Laniyan, T.A., Okunlola, O.W., Odewande, A. A., Ajibade, O.
                    M. and Kolawole, T. (2005). Water Quality Test of Areas Surrounding Selected
                    Refuse Dumpsites in Ibadan, South-western Nigeria. Journal of the Nigerian
                    Association of Hydrogeologists Vol.16:39 -69pp (Nigeria) (Contribution: 20%)</p>
                <a href="appointment_info_edit.php">
                    <div class="edit_button">
                        <img src="../../static/edit_icon.svg" alt="edit icon">
                        <p>Edit</p>
                    </div>
                </a></div>
            <h3>Books already Published</h3>
            <div class="form_info">
                <p>Abimbola, A. F., Laniyan, T.A., Okunlola, O.W., Odewande, A. A., Ajibade, O.
                    M. and Kolawole, T. (2005). Water Quality Test of Areas Surrounding Selected
                    Refuse Dumpsites in Ibadan, South-western Nigeria. Journal of the Nigerian
                    Association of Hydrogeologists Vol.16:39 -69pp (Nigeria) (Contribution: 20%)</p>
                <a href="appointment_info_edit.php">
                    <div class="edit_button">
                        <img src="../../static/edit_icon.svg" alt="edit icon">
                        <p>Edit</p>
                    </div>
                </a>
            </div>
            <h3>Books, Chapters in Books and Articles already accepted for Publication</h3>
            <div class="form_info">
                <p>Abimbola, A. F., Laniyan, T.A., Okunlola, O.W., Odewande, A. A., Ajibade, O.
                    M. and Kolawole, T. (2005). Water Quality Test of Areas Surrounding Selected
                    Refuse Dumpsites in Ibadan, South-western Nigeria. Journal of the Nigerian
                    Association of Hydrogeologists Vol.16:39 -69pp (Nigeria) (Contribution: 20%)</p>
                <a href="appointment_info_edit.php">
                    <div class="edit_button">
                        <img src="../../static/edit_icon.svg" alt="edit icon">
                        <p>Edit</p>
                    </div>
                </a>
            </div>
            <h3>Chapters in Edited Books Revised Chapters in Edited Books</h3>
            <div class="form_info">
                <p>Abimbola, A. F., Laniyan, T.A., Okunlola, O.W., Odewande, A. A., Ajibade, O.
                    M. and Kolawole, T. (2005). Water Quality Test of Areas Surrounding Selected
                    Refuse Dumpsites in Ibadan, South-western Nigeria. Journal of the Nigerian
                    Association of Hydrogeologists Vol.16:39 -69pp (Nigeria) (Contribution: 20%)</p>
                <a href="appointment_info_edit.php">
                    <div class="edit_button">
                        <img src="../../static/edit_icon.svg" alt="edit icon">
                        <p>Edit</p>
                    </div>
                </a></div>
            <h3>Chapters in books already published</h3>
            <div class="form_info">
                <p>Abimbola, A. F., Laniyan, T.A., Okunlola, O.W., Odewande, A. A., Ajibade, O.
                    M. and Kolawole, T. (2005). Water Quality Test of Areas Surrounding Selected
                    Refuse Dumpsites in Ibadan, South-western Nigeria. Journal of the Nigerian
                    Association of Hydrogeologists Vol.16:39 -69pp (Nigeria) (Contribution: 20%)</p>
                <a href="appointment_info_edit.php">
                    <div class="edit_button">
                        <img src="../../static/edit_icon.svg" alt="edit icon">
                        <p>Edit</p>
                    </div>
                </a></div>
            <h3>Patents and Copyrights</h3>
            <div class="form_info">
                <p>Abimbola, A. F., Laniyan, T.A., Okunlola, O.W., Odewande, A. A., Ajibade, O.
                    M. and Kolawole, T. (2005). Water Quality Test of Areas Surrounding Selected
                    Refuse Dumpsites in Ibadan, South-western Nigeria. Journal of the Nigerian
                    Association of Hydrogeologists Vol.16:39 -69pp (Nigeria) (Contribution: 20%)</p>
                <a href="appointment_info_edit.php">
                    <div class="edit_button">
                        <img src="../../static/edit_icon.svg" alt="edit icon">
                        <p>Edit</p>
                    </div>
                </a></div>
            <h3>Technical Reports and Monographs</h3>
            <div class="form_info">
                <p>Abimbola, A. F., Laniyan, T.A., Okunlola, O.W., Odewande, A. A., Ajibade, O.
                    M. and Kolawole, T. (2005). Water Quality Test of Areas Surrounding Selected
                    Refuse Dumpsites in Ibadan, South-western Nigeria. Journal of the Nigerian
                    Association of Hydrogeologists Vol.16:39 -69pp (Nigeria) (Contribution: 20%)</p>
                <a href="appointment_info_edit.php">
                    <div class="edit_button">
                        <img src="../../static/edit_icon.svg" alt="edit icon">
                        <p>Edit</p>
                    </div>
                </a>
            </div>
            <div class="sized_box">

            </div>
        </div>
    </div>
</div>
<script rel="script" src="../../js/drawer.js"></script>
<script rel="script" src="../../js/edit_info_nav_link.js"></script>
</body>
</html>