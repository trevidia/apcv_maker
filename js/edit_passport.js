(
    function () {
        let edit_passport = document.getElementById('edit_passport');
        let input_passport = document.getElementById('passport');
        edit_passport.addEventListener(
            'click',
            function () {
                input_passport.click();
            }
        );
    }
)();