$("#edit-product").on("submit", function (event) {
    /* Add a product */
    event.preventDefault()

    const url_params = new URLSearchParams(location.search)

    const id = url_params.get('id');
    const name = event.target[0].value;
    const price = event.target[1].value;

    if (name !== "" && price !== "") {
        if (Number.isFinite(parseInt(price))) {
            $.ajax({
                url: "/api/product/",
                data: {
                    id: id,
                    name: name,
                    price: price
                },
                type: "PATCH",
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

$(document).ready(function () {
    /* Make edit product page inaccessible if the
    id query parameter is not defined */

    const url_params = new URLSearchParams(location.search)

    const id = url_params.get('id');

    if (id === null) {
        location.href = "/dashboard"
    }
    else {
        /* Fill the form input with product information */
        $.ajax({
            url: "/api/product/" + id,
            type: "GET",
            dataType: "json",
        }).done(function (json) {
            $("#name").val(json.name)
            $("#price").val(json.price)
        }).fail(function (xhr, status, errorThrown) {
            console.log("Error: " + errorThrown)
            console.log("Status: " + status)
            console.log(xhr)
        })
    }
})
