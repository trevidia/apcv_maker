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
        }
    }
)();