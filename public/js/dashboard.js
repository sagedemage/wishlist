$(".delete-product").click(function (event) {
    /* Delete a product */
    const status = confirm("Do you really want to delete the product?")

    if (status === true) {
        const id = event.target.value;

        $.ajax({
            url: "/api/product/" + id,
            type: "DELETE",
            dataType: "json",
        }).done(function (json) {
            location.reload()
        }).fail(function (xhr, status, errorThrown) {
            console.log("Error: " + errorThrown)
            console.log("Status: " + status)
            console.log(xhr)
        })
    }
})

$("#add-product-link").click(function (event) {
    /* Go to the add wishlist form page */
    location.href = "/add-product"
})

$(".edit-product-link").click(function (event) {
    /* Go to the add wishlist form page */
    location.href = "/edit-product?id=" + event.target.value;
})

