(
    function () {
        /*
        *   It gets the location of the element in the
        *   dom and displays the
        *   drawer if it is in the
        *   publications directory
         */
        let pub_drawer = document.getElementById("pub_drawer");
        let pub_nav = document.getElementById("publication_nav");
        let pub_drawer_attrib = Array.prototype.slice.call(pub_nav.attributes);
        let activePub = document.querySelector('a.nav_box.active');
        if (pub_drawer_attrib[0].value.includes("non_active")) {
            pub_drawer.style.display = "none";
            console.log("true");
        } else {

            //  preventing the whole publication drawer from being highlighted id

            pub_nav.addEventListener(
                'mouseover',
                function () {
                    pub_nav.style.background = "transparent";
                }
            );
            pub_nav.style.color = "#212529";

            //  Scrolls to the active publication form

            activePub.scrollIntoView(
                {
                    behavior: "smooth",

                }
            );
        }
    }
)();