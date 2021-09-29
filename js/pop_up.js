(
    function () {
        let journal = document.getElementById("new_popup");
        let popUp = document.getElementById("pop_up_container");
        let popUpBox = document.getElementById("popUp");
        let closeButton = document.getElementById('close_pop_up');
        closeButton.addEventListener(
            'click',
            function () {
                popUp.animate(
                    [
                        {background: "rgba(0, 0, 0, 0.4)"},
                        {background: "transparent"}
                    ], {
                        duration: 500,
                        easing: "ease-in-out",
                    }
                );
                popUpBox.animate(
                    [
                        {
                            transform: "scale(1)",
                        },
                        {transform: "scale(1.2)"},
                        {
                            transform: "scale(0.9)",
                        }
                    ],
                    {
                        duration: 500,
                        easing: "ease-in-out"
                    }
                ).onfinish = e => popUp.style.display = "none";
                // popUp.style.display = "none";

            }
        );
        journal.onclick = function () {
            popUp.style.display = "flex";
            popUp.animate(
                [
                    {background: "transparent"},
                    {background: "rgba(0, 0, 0, 0.4)"}
                ], {
                    duration: 500,
                    easing: "ease-in-out",
                }
            );
            // background: "rgba(0, 0, 0, 0.4)",
            popUpBox.animate(
                [
                    {transform: "scale(0.8)",},
                    {transform: "scale(1.2)"},
                    {
                        transform: "scale(1)",
                    }
                ],
                {
                    duration: 500,
                    easing: "ease-in-out"
                }
            );

        };

    }
)();
