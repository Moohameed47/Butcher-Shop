// Dissapear ''ORDER SUCCESSFUL''
function Function() {
    document.getElementById("MessageCont").classList.remove("d-none");
    setTimeout(function () {
        document.getElementById("MessageCont").classList.add("d-none");
        window.location.href = "home";
    }, 2000);
}

// RemoveItemFromCart

var RemoveCartItem = document.getElementsByClassName("XICON");
for (let i = 0; i < RemoveCartItem.length; i++) {
    var Button = RemoveCartItem[i];
    Button.addEventListener("click", async function (event) {
        var ButtonClicked = event.target;
        ButtonClicked.parentElement.parentElement.parentElement.parentElement.remove();
        let id = event.target.id;
        await fetch(`cart/delete`, {
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
        CalcTot();
    });
}

// UpdateCartTotal
CalcTot();
async function setQuantity(upordown, Pro, id) {
    var quantity = "#";
    quantity += Pro;
    quantity += " #quantity";
    var Quan = document.querySelector(quantity);

    if (Quan.value > 1) {
        if (upordown == "up") {
            ++Quan.value;
        } else if (upordown == "down") {
            --Quan.value;
        }
    } else if (Quan.value == 1) {
        if (upordown == "up") ++Quan.value;
    } else {
        Quan.value = 1;
    }
    var ProdCart_Price = "#";
    ProdCart_Price += Pro;
    ProdCart_Price += " .Cart-Price";
    var ProdTotPrice = "#";
    ProdTotPrice += Pro;
    ProdTotPrice += " .TotPrice";

    var PriceElement = document.querySelector(ProdCart_Price);

    var QuantityElement = Quan;
    var Price = parseFloat(PriceElement.innerText.replace(" E£", ""));
    var Quantity = parseInt(QuantityElement.value);

    Total = Price * Quantity;
    document.querySelector(ProdTotPrice).innerText = Total + "";

    const response = await fetch(upordown == "up" ? "cart" : "cart/minus", {
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
    alertify.success(
        upordown == "up"
            ? "Done, your product added to your cart."
            : "Done, your product removed to your cart."
    );
    CalcTot();
}

function CalcTot() {
    var CartItemContainer = document.getElementsByClassName("Cart-Items")[0];
    var CartRows = CartItemContainer.getElementsByClassName("Cart-row");
    var TOTAL = 0;
    var TOTAL = 0;
    for (var i = 0; i < CartRows.length; i++) {
        var CartRow = CartRows[i];
        var Price = parseFloat(
            CartRow.getElementsByClassName("TotPrice")[0].innerText.replace(
                " E£",
                ""
            )
        );
        console.log(Price);
        TOTAL += Price;
    }
    document.getElementsByClassName("Final")[0].innerText = TOTAL + " E£";
    document.getElementsByClassName("Final")[1].innerText = TOTAL + " E£";
}
