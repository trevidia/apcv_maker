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
(
    function () {
        /*
        *   It gets the location of the element in the
        *   dom and displays the
        *   drawer if it is in the
        *   research directory
         */
        // it gets the reference to the nested list in the drawer in the dom
        let research_nav = document.getElementById("research_nav");

        // gets the parent reference which is the one that expands when the research is clicked
        let research_drawer = document.getElementById("research_drawer");

        // searches for the attributes and checks if the class has a value of non_active
        // if it doesn't it doesn't display the nested list
        let research_drawer_attrib = Array.prototype.slice.call(research_nav.attributes);


        // gets the active child to scroll to its position
        let activePub = document.querySelector('li.nav_box.active');


        if (research_drawer_attrib[0].value.includes("non_active")) {
            research_drawer.style.display = "none";
        } else {
            //  preventing the whole publication drawer from being highlighted id

            research_nav.addEventListener(
                'mouseover',
                function () {
                    research_nav.style.background = "transparent";
                }
            );
            research_nav.style.color = "#212529";

            //  Scrolls to the active publication form

            activePub.scrollIntoView(
                {
                    behavior: "smooth",

                }
            );
        }
    }
)();