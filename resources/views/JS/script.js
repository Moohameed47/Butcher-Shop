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

// Product Menu With Categories
var x = document.getElementsByClassName("AllEl");
function DisplayAll() {
    for (let i = 0; i < x.length; i++) {
        console.log(x[i].classList.remove("d-none"));
    }
    console.log(
        document
            .getElementsByClassName("SecAll")[0]
            .classList.contains("d-none")
    );
    if (
        !document
            .getElementsByClassName("SecAll")[0]
            .classList.contains("d-none")
    )
        console.log("True All");
    else
        document.getElementsByClassName("SecAll")[0].classList.remove("d-none");
    if (
        !document
            .getElementsByClassName("SecMeat")[0]
            .classList.contains("d-none")
    )
        document.getElementsByClassName("SecMeat")[0].classList.add("d-none");
    if (
        !document
            .getElementsByClassName("SecPoultry")[0]
            .classList.contains("d-none")
    )
        document
            .getElementsByClassName("SecPoultry")[0]
            .classList.add("d-none");
    if (
        !document
            .getElementsByClassName("SecSeafood")[0]
            .classList.contains("d-none")
    )
        document
            .getElementsByClassName("SecSeafood")[0]
            .classList.add("d-none");
    Clear();
}
function DisplayMeat() {
    DisplayAll();
    for (let i = 0; i < x.length; i++) {
        if (x[i].classList.contains("MEAT")) console.log(x[i]);
        else x[i].classList.add("d-none");
    }
    if (
        !document
            .getElementsByClassName("SecAll")[0]
            .classList.contains("d-none")
    )
        document.getElementsByClassName("SecAll")[0].classList.add("d-none");
    if (
        !document
            .getElementsByClassName("SecMeat")[0]
            .classList.contains("d-none")
    )
        console.log("True Meat");
    else
        document
            .getElementsByClassName("SecMeat")[0]
            .classList.remove("d-none");
    if (
        !document
            .getElementsByClassName("SecPoultry")[0]
            .classList.contains("d-none")
    )
        document
            .getElementsByClassName("SecPoultry")[0]
            .classList.add("d-none");
    if (
        !document
            .getElementsByClassName("SecSeafood")[0]
            .classList.contains("d-none")
    )
        document
            .getElementsByClassName("SecSeafood")[0]
            .classList.add("d-none");
    Clear();
}
function DisplaySeafood() {
    DisplayAll();
    for (let i = 0; i < x.length; i++) {
        if (x[i].classList.contains("SEAFOOD")) console.log(x[i]);
        else x[i].classList.add("d-none");
    }
    if (
        !document
            .getElementsByClassName("SecAll")[0]
            .classList.contains("d-none")
    )
        document.getElementsByClassName("SecAll")[0].classList.add("d-none");
    if (
        !document
            .getElementsByClassName("SecMeat")[0]
            .classList.contains("d-none")
    )
        document.getElementsByClassName("SecMeat")[0].classList.add("d-none");
    if (
        !document
            .getElementsByClassName("SecPoultry")[0]
            .classList.contains("d-none")
    )
        document
            .getElementsByClassName("SecPoultry")[0]
            .classList.add("d-none");
    if (
        !document
            .getElementsByClassName("SecSeafood")[0]
            .classList.contains("d-none")
    )
        console.log("True Seafood");
    else
        document
            .getElementsByClassName("SecSeafood")[0]
            .classList.remove("d-none");
    Clear();
}
function DisplayPoultry() {
    DisplayAll();
    for (let i = 0; i < x.length; i++) {
        if (x[i].classList.contains("POULTRY")) console.log(x[i]);
        else x[i].classList.add("d-none");
    }
    if (
        !document
            .getElementsByClassName("SecAll")[0]
            .classList.contains("d-none")
    )
        document.getElementsByClassName("SecAll")[0].classList.add("d-none");
    if (
        !document
            .getElementsByClassName("SecMeat")[0]
            .classList.contains("d-none")
    )
        document.getElementsByClassName("SecMeat")[0].classList.add("d-none");
    if (
        !document
            .getElementsByClassName("SecPoultry")[0]
            .classList.contains("d-none")
    )
        console.log("True Poultry");
    else
        document
            .getElementsByClassName("SecPoultry")[0]
            .classList.remove("d-none");
    if (
        !document
            .getElementsByClassName("SecSeafood")[0]
            .classList.contains("d-none")
    )
        document
            .getElementsByClassName("SecSeafood")[0]
            .classList.add("d-none");
    Clear();
}
function DisplayFT(from, to) {
    DisplayAll();
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

// Dissapear ''ORDER SUCCESSFUL''
function Function() {
    document.getElementById("MessageCont").classList.remove("d-none");
    setTimeout(function () {
        document.getElementById("MessageCont").classList.add("d-none");
        window.location.href = "index.html";
    }, 2000);
}

// RemoveItemFromCart
var RemoveCartItem = document.getElementsByClassName("XICON");
for (let i = 0; i < RemoveCartItem.length; i++) {
    var Button = RemoveCartItem[i];
    Button.addEventListener("click", function (event) {
        var ButtonClicked = event.target;
        ButtonClicked.parentElement.parentElement.remove();
    });
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

// UpdateCartTotal
function UpdateCartTotalP() {
    var CartItemContainer = document.getElementsByClassName("Cart-Items")[0];
    // console.log(CartItemContainer);
    var CartRows = CartItemContainer.getElementsByClassName("Cart-row");
    var Total = 0;
    var Final = 0;
    for (var i = 0; i < CartRows.length; i++) {
        var CartRow = CartRows[i];
        var PriceElement = CartRow.getElementsByClassName("Cart-Price")[0];
        var QuantityElement = CartRow.getElementsByClassName("Cart-Quantay")[0];
        var Price = parseFloat(PriceElement.innerText.replace(" E£", ""));
        // console.log(Price);
        var Quantity = 1;
        Quantity += parseInt(QuantityElement.value);
        // console.log(Quantity);
        Total = Price * Quantity;
        document.getElementsByClassName("TotPrice")[0].innerText =
            Total + " E£";
        Final = Final + Total;
    }
    document.getElementsByClassName("Final")[0].innerText = Final + " E£";
}
function UpdateCartTotalM() {
    var CartItemContainer = document.getElementsByClassName("Cart-Items")[0];
    console.log(CartItemContainer);
    var CartRows = CartItemContainer.getElementsByClassName("Cart-row");
    var Total = 0;
    var Final = 0;
    for (var i = 0; i < CartRows.length; i++) {
        var CartRow = CartRows[i];
        var PriceElement = CartRow.getElementsByClassName("Cart-Price")[0];
        var QuantityElement = CartRow.getElementsByClassName("Cart-Quantay")[0];
        var Price = parseFloat(PriceElement.innerText.replace(" E£", ""));
        console.log(Price);
        var Quantity = 1;
        Quantity -= parseInt(QuantityElement.value);
        console.log(Quantity);
        Total = Price * Quantity;
        document.getElementsByClassName("TotPrice")[0].innerText =
            Total + " E£";
        Final = Final + Total;
    }
    document.getElementsByClassName("Final")[0].innerText = Final + " E£";
}

// ------------ Admin Page --------------

var productNameInp = document.getElementById("productNameInp");
var productCatInp = document.getElementById("productCatInp");
var productPriceInp = document.getElementById("productPriceInp");
var productUrlInp = document.getElementById("productUrlInp");

var ProductContainer;

if (localStorage.getItem("ProductData") != null)
    ProductContainer = JSON.parse(localStorage.getItem("ProductData"));
else ProductContainer = [];

//Clear Inputs
function clearlist() {
    productNameInp.value = "";
    productCatInp.value = "";
    productPriceInp.value = "";
    productUrlInp.value = "";
}

//Add Product
DisplayData(ProductContainer);

function AddProduct() {
    var Product = {
        productName: productNameInp.value,
        productPrice: productPriceInp.value,
        productCategory: productCatInp.value,
        productUrl: productUrlInp.value,
    };
    // console.log(Product);
    ProductContainer.push(Product);
    // console.log(ProductContainer);
    DisplayData(ProductContainer);
    clearlist();
}

//Display Product
function DisplayData(list) {
    var cartona = ``;
    for (var i = 0; i < list.length; ++i) {
        // console.log(list[i]);
        cartona += `<div class="card Grap text-center pt-4 m-2 AllEl border-1 MEAT" style="width: 16rem">
                    <img src="${list[i].productUrl}" class="card-img Prod" alt="..." />
                    <div class="card-body mt-2">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <h6 class="Cat-Prod">${list[i].productCategory}</h6>
                        <h5 class="card-def fw-bold mt-3 Name-Prod">
                            ${list[i].productName}
                        </h5>
                        <h5 class="card-def my-0 PRICE Price-Prod">
                            ${list[i].productPrice}E£
                        </h5>
                        <a href="#" class="btn main-btn rounded-pill me-3" onclick="Update(${i})">Update</a>
                        <a href="#" class="btn main-btn rounded-pill" onclick="Del(${i})">Delete</a>
                    </div>
                </div>
            </div>`;
    }
    // console.log(document.getElementById("mytable"));
    document.getElementById("mytable").innerHTML = cartona;
    localStorage.setItem("ProductData", JSON.stringify(ProductContainer));
}

//Delete Product
function Del(ind) {
    ProductContainer.splice(ind, 1);
    DisplayData(ProductContainer);
}

// Update Product
var indd;
function Update(ind) {
    productNameInp.value = ProductContainer[ind].productName;
    productPriceInp.value = ProductContainer[ind].productPrice;
    productCatInp.value = ProductContainer[ind].productCategory;
    productUrlInp.value = ProductContainer[ind].productUrl;
    document
        .getElementById("Upd")
        .classList.replace("d-none", "d-inline-block");
    document.getElementById("Ad").classList.add("d-none");
    indd = ind;
}

function UpdateProduct() {
    ProductContainer[indd].productName =
        document.getElementById("productNameInp").value;
    ProductContainer[indd].productPrice =
        document.getElementById("productPriceInp").value;
    ProductContainer[indd].productCategory =
        document.getElementById("productCatInp").value;
    ProductContainer[indd].productUrl =
        document.getElementById("productUrlInp").value;
    DisplayData(ProductContainer);
    clearlist();
    document
        .getElementById("Upd")
        .classList.replace("d-inline-block", "d-none");
    document.getElementById("Ad").classList.remove("d-none");
}

// Make +  ,  - In Cart
var minusButton = document.getElementById("Minus");
var plusButton = document.getElementById("Plus");
var inputField = document.getElementById("Data");
minusButton.addEventListener("click", (event) => {
    const currentValue = Number(inputField.value) || 1;
    inputField.value = Math.max(currentValue - 1, 1);
});
plusButton.addEventListener("click", (event) => {
    const currentValue = Number(inputField.value) || 1;
    inputField.value = Math.max(currentValue + 1, 1);
});
