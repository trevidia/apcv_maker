<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>apcv_maker</title>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/best_pub.css">
    <link rel="stylesheet" href="../../css/mobile_style.css">
</head>

<body>

    <div id="pop_up_container">
        <div id="popUp">
            <form>
                <img src="../../static/close_icon.svg" alt="close" id="close_pop_up">
                <h1>Add Publication</h1>

                <div id="search_box">
                    <input type="text" name="publication" id="journal_name" placeholder="Publication" class="search_input">
                    <div class="search">

                        <img class="search_btn" src="../../static/search_icon.svg" alt="search">
                    </div>
                </div>
                <div id="pub_box">
                    <div class="child_pub">
                        publication 1
                    </div>
                    <div class="child_pub">
                        publication 2
                    </div>
                    <div class="child_pub">
                        publication 3
                    </div>
                    <div class="child_pub">
                        publication 4
                    </div>
                    <div class="child_pub">
                        publication 5
                    </div>
                    <div class="child_pub">
                        publication 6
                    </div>
                    <div class="child_pub">
                        publication 7
                    </div>
                    <div class="child_pub">
                        publication 8
                    </div>
                    <div class="child_pub">
                        publication 9
                    </div>
                    <div class="child_pub">
                        publication 10
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div id="root">
        <!-- this is the drawer for the apcv maker site -->
        <?php
        include_once "../components/drawer.php";
        echo drawer($domain, ["publications", 'bestPub']);
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
                <header>
                    <h1>
                        Ten best publications
                    </h1>
                </header>
                <div class="selector_row">
                    <span id="delete" hidden>
                        Delete
                    </span>
                    <span id="cancel" hidden>
                        Cancel
                    </span>
                    <span id="select">
                        Select
                    </span>


                    <div id="new_popup">
                        <span id="addBestPub">
                            Add Publication
                        </span>
                    </div>
                </div>
                <table class="pub_table">
                    <tr>
                        <td>
                            <input type="checkbox" name="pub1" id="pub-0" hidden>
                            Publication 1
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="pub1" id="pub-1" hidden>
                            Publication 2
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="pub1" id="pub-2" hidden>
                            Publication 3
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <script rel="script" src="../../js/drawer.js"></script>
    <script>
        (
            function() {
                var amountChecked = 0;
                var checkedBoxes = [];
                var addBestPub = document.getElementById("addBestPub");
                var table = document.querySelector('.pub_table');
                var deleteBtn = document.getElementById('delete');
                var rows = table.rows;
                var cancel = document.getElementById('cancel');
                for (var i = 0; i < rows.length; i++) {
                        checkedBoxes[i] = document.getElementById(`pub-${i}`);
                        checkedBoxes[i].onchange = function(e){
                            // console.log(e.srcElement.checked);
                            if (e.srcElement.checked){
                                amountChecked++;
                                console.log(`yes checked ${e.srcElement.id}, amount checked = ${amountChecked}`);
                            } else{
                                amountChecked--;
                            }
                            if(amountChecked != 0){
                                deleteBtn.hidden = false;
                            } else{
                                deleteBtn.hidden = true;
                            }
                        } 
                    }
                var searchTables = (bool) => {
                    for (var i = 0; i < rows.length; i++) {
                        document.getElementById(`pub-${i}`).hidden = bool;
                    }
                }
                var selectBtn = document.getElementById("select");
                selectBtn.addEventListener(
                    'click',
                    function() {
                        addBestPub.hidden = true;
                        selectBtn.hidden = true;
                        cancel.hidden = false;
                        searchTables(false);

                    }
                );
                cancel.onclick = () => {
                    addBestPub.hidden = false;
                    selectBtn.hidden = false;
                    cancel.hidden = true;
                    searchTables(true);
                    checkedBoxes.forEach(e=>{
                        e.checked = false;
                        amountChecked = 0;
                        deleteBtn.hidden = true;
                    })
                }
            }
        )()
    </script>
    <script rel="script" src="../../js/pop_up.js"></script>
</body>

</html>