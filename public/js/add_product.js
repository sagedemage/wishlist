$("#add-product").on("submit", function (event) {
    /* Add a product */
    event.preventDefault()

    const name = event.target[0].value;
    const price = event.target[1].value;

    if (name !== "" && price !== "") {
        if (Number.isFinite(parseInt(price))) {
            $.ajax({
                url: "/api/product/",
                data: {
                    name: name,
                    price: price
                },
                type: "POST",
                dataType: "json",
            }).done(function (json) {
                location.href = "/dashboard"
            }).fail(function (xhr, status, errorThrown) {
                console.log("Error: " + errorThrown)
                console.log("Status: " + status)
                console.log(xhr)
            })
        }
        else {
            alert("Price must be a number!")
        }
    }



})
