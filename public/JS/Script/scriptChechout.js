// Dissapear ''ORDER SUCCESSFUL''
async function Function() {
    var InNum = document.getElementById("PhoneNum").value;
    var InFN = document.getElementById("FName").value;
    var InAdd = document.getElementById("Address").value;
    var InCity = document.getElementById("City").value;

    console.log(InNum);
    console.log(InFN);
    console.log(InAdd);
    console.log(InCity);

    let _b = $("form").serializeArray();
    let body = {};
    _b = _b.forEach((_) => {
        body[_["name"]] = _["value"];
    });
    const response = await fetch("checkout", {
        method: "POST", // *GET, POST, PUT, DELETE, etc.
        mode: "cors", // no-cors, *cors, same-origin
        cache: "no-cache", // *default, no-cache, reload, force-cache, only-if-cached
        credentials: "same-origin", // include, *same-origin, omit
        headers: {
            "Content-Type": "application/json",
        },
        redirect: "follow", // manual, *follow, error
        referrerPolicy: "no-referrer", // no-referrer, *no-referrer-when-downgrade, origin, origin-when-cross-origin, same-origin, strict-origin, strict-origin-when-cross-origin, unsafe-url
        body: JSON.stringify(body), // body data type must match "Content-Type" header
    });
    if (InNum && InFN && InAdd && InCity) {
        document.getElementById("MessageCont").classList.remove("d-none");
        setTimeout(function () {
            document.getElementById("MessageCont").classList.add("d-none");
            window.location.href = "home";
        }, 2000);
    }
}
