// Scrolling between first section
function Prev() {
    var H_1 = document.getElementById("H1").classList;
    var H_2 = document.getElementById("H2").classList;
    var H_3 = document.getElementById("H3").classList;
    if (H_1.contains("d-none") && H_2.contains("d-none")) {
        document.getElementById("H3").classList.add("d-none");
        document.getElementById("H2").classList.remove("d-none");
    } else if (H_1.contains("d-none") && H_3.contains("d-none")) {
        document.getElementById("H2").classList.add("d-none");
        document.getElementById("H1").classList.remove("d-none");
    } else {
        document.getElementById("H1").classList.add("d-none");
        document.getElementById("H3").classList.remove("d-none");
    }
}
function Next() {
    var H_1 = document.getElementById("H1").classList;
    var H_2 = document.getElementById("H2").classList;
    var H_3 = document.getElementById("H3").classList;
    if (H_1.contains("d-none") && H_2.contains("d-none")) {
        document.getElementById("H3").classList.add("d-none");
        document.getElementById("H1").classList.remove("d-none");
    } else if (H_1.contains("d-none") && H_3.contains("d-none")) {
        document.getElementById("H2").classList.add("d-none");
        document.getElementById("H3").classList.remove("d-none");
    } else {
        document.getElementById("H1").classList.add("d-none");
        document.getElementById("H2").classList.remove("d-none");
    }
}

// Change Color Of two defferent element
function chg_col1(Color) {
    document.getElementById("a1").style.color = Color;
    document.getElementById("a1").style.transition = "all 0.3s ease-in-out";
}
function chg_col2(Color) {
    document.getElementById("a2").style.color = Color;
    document.getElementById("a2").style.transition = "all 0.3s ease-in-out";
}
function chg_col3(Color) {
    document.getElementById("a3").style.color = Color;
    document.getElementById("a3").style.transition = "all 0.3s ease-in-out";
}
function chg_col4(Color) {
    document.getElementById("a4").style.color = Color;
    document.getElementById("a4").style.transition = "all 0.3s ease-in-out";
}

// Scrolling left - right between divs
var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 30,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    breakpoints: {
        600: {
            slidesPerView: 4,
        },
    },
});
async function AddToCart(id) {
    const response = await fetch("cart", {
        method: "POST", // *GET, POST, PUT, DELETE, etc.
        mode: "cors", // no-cors, *cors, same-origin
        cache: "no-cache", // *default, no-cache, reload, force-cache, only-if-cached
        credentials: "same-origin", // include, *same-origin, omit
        headers: {
            "Content-Type": "application/json",
        },
        redirect: "follow", // manual, *follow, error
        referrerPolicy: "no-referrer", // no-referrer, *no-referrer-when-downgrade, origin, origin-when-cross-origin, same-origin, strict-origin, strict-origin-when-cross-origin, unsafe-url
        body: JSON.stringify({
            id,
        }), // body data type must match "Content-Type" header
    });
    alertify.set("notifier", "position", "top-right");
    alertify.success("Done, your product added to your cart.");
}
