(
    function () {
        let selector = document.querySelectorAll('.edit');
        let setupEvents = Array.from(selector);
        setupEvents.forEach(
            function (e) {
                function click() {
                    e.firstElementChild.click();
                }

                e.addEventListener(
                    'click',
                    function () {
                        click()
                    }
                )
            }
        )
    }
)();