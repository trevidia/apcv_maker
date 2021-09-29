<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>apcv_maker</title>
    <link rel="stylesheet" href="../../css/style.css">
    <!-- CSS only -->
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
        <div>
            <form action="post">
                <h1>Editorial Work</h1><br>
                <h5>Please kindly fill in your publication</h5><br>
                <button>Add new Publisher</button>
                <br>
                <h4>Book Title:</h4>
                <input type="text">
                <br>
                <div style = "border:1px solid black; height:116px; width:500px; align-items:center;  justify-content:center; display:flex;">
                    <h5>Drop chapter published here to start uploading</h5><br>
                    <button type="button" class="btn btn-secondary">SELECT FILE</button>
                </div >
                <span>Filename.pdf</span>
                <br>
                <label for="percentage_contribution">Percentage Contribution:</label>
                <h6>Please input Contribution in percentage e.g 20, 30</h6><br>
                <input type="text">
                
                

            </form>
        </div>
    </div>
</div>
<script rel="script" src="../../js/drawer.js"></script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>