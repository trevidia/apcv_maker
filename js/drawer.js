(
    function () {
        let pub_drawer = document.getElementById("pub_drawer");
        let pub_nav = document.getElementById("publication");
        let pub_drawer_attrib = Array.prototype.slice.call(pub_nav.attributes);
        if (pub_drawer_attrib[0].value.includes("non_active")) {
            pub_drawer.style.display = "none";
            console.log("true");
        } else {
            pub_nav.style.color = "#212529";
            pub_drawer.scrollIntoView(
                {
                    behavior: "smooth",

                }
            );
            // setTimeout(
            //     function () {
            //         pub_drawer.animate([
            //             // keyframes
            //             { height: '0px' },
            //             { height: '676px' }
            //         ], {
            //             // timing options
            //             duration: 1000,
            //             easing: 'ease-in-out'
            //         });
            //     },
            //     1000
            // )

        }
    }
)();