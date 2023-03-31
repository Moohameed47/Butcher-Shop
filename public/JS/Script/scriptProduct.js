// Product Menu With Categories
var x = document.getElementsByClassName("AllEl");

function DNone(ggg) {
    var x = document.getElementsByClassName("WD");
    for (let i = 0; i < x.length; i++) {
        x[i].classList.add("d-none");
    }
}

function Display(Cat) {
    var x = document.getElementsByClassName("AllEl");
    for (let i = 0; i < x.length; i++) {
        x[i].classList.remove("d-none");
    }
    console.log(Cat);

    if (Cat == "All")
        for (let i = 0; i < x.length; i++) {
            x[i].classList.remove("d-none");
        }
    else {
        for (let i = 0; i < x.length; i++) {
            if (x[i].classList.contains(Cat)) x[i].classList.remove("d-none");
            else x[i].classList.add("d-none");
        }
    }

    var SecName = "Sec";
    SecName += Cat;
    DNone();
    if (
        document.getElementsByClassName(SecName)[0].classList.contains("d-none")
    )
        document.getElementsByClassName(SecName)[0].classList.remove("d-none");
    Clear();
}
function DisplayFT(from, to) {
    Display("All");
    for (let i = 0; i < document.getElementsByClassName("PRICE").length; i++) {
        var z = parseInt(
            document.getElementsByClassName("PRICE")[i].querySelector("span")
                .innerText
        );
        console.log(z);
        if (z >= from && z <= to) console.log("true");
        else x[i].classList.add("d-none");
    }
}
function Apply() {
    var From = document.getElementById("From").value;
    var To = document.getElementById("To").value;
    DisplayFT(From, To);
}

function Clear() {
    var From = (document.getElementById("From").value = "");
    var To = (document.getElementById("To").value = "");
}

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
