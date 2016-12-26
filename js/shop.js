
var shoppingCartItems = [];

$(document).ready(function () {
    // Ki?m tra n?u ?� c� sessionStorage["shopping-cart-items"] hay ch?a?
    if (sessionStorage["shopping-cart-items"] != null) {
        shoppingCartItems = JSON.parse(sessionStorage["shopping-cart-items"].toString());
    }

    // Hi?n th? th�ng tin t? gi? h�ng
    displayShoppingCartItems();
});

// Su kien click c�c button c� class=".add-to-cart"
$(".add-to-cart").click(function () {
    var button = $(this); // Lay button m� nguoi d�ng click
    var id = button.attr("id"); // id c?a s?n ph?m l� id c?a button
    var name = button.attr("data-name"); // name c?a s?n ph?m l� thu?c t�nh data-name c?a button
    var price = button.attr("data-price"); // price c?a s?n ph?m l� thu?c t�nh data-price c?a button
    var author = button.attr("data-author");
    var quantity = 1; // So luong


    var item = {
        id: id,
        name: name,
        price: price,
        author: author,
        quantity: quantity
    };

    var exists = false;
    if (shoppingCartItems.length > 0) {
        $.each(shoppingCartItems, function (index, value) {
            // N?u m?t h�ng ?� t?n t?i trong gi? h�ng th� ch? c?n t?ng s? l??ng m?t h�ng ?� trong gi? h�ng.
            if (value.id == item.id) {
                value.quantity++;
                exists = true;
                return false;
            }
        });
    }

    // N?u m?t h�ng ch?a t?n t?i trong gi? h�ng th� b? sung v�o m?ng
    if (!exists) {
        shoppingCartItems.push(item);
    }

    // L?u th�ng tin v�o sessionStorage
    sessionStorage["shopping-cart-items"] = JSON.stringify(shoppingCartItems); // Chuy?n th�ng tin m?ng shoppingCartItems sang JSON tr??c khi l?u v�o sessionStorage
    // G?i h�m hi?n th? gi? h�ng
    displayShoppingCartItems();
});

// X�a h?t gi? h�ng shoppingCartItems
$("#button-clear").click(function () {
    shoppingCartItems = [];
    sessionStorage["shopping-cart-items"] = JSON.stringify(shoppingCartItems);
    $("#table-products > tbody").html("");
});


// Hi?n th? gi? h�ng ra table
function displayShoppingCartItems() {
    if (sessionStorage["shopping-cart-items"] != null) {
        shoppingCartItems = JSON.parse(sessionStorage["shopping-cart-items"].toString()); // Chuy?n th�ng tin t? JSON trong sessionStorage sang m?ng shoppingCartItems.

        $("#table-products > tbody").html("");
        // Duy?t qua m?ng shoppingCartItems ?? append t?ng item d�ng v�o table
        $.each(shoppingCartItems, function (index, item) {
            var htmlString = "";



            htmlString += "<tr>";
            htmlString += "<td>" + item.id + "</td>";
            htmlString += "<td>" + item.name + "</td>";
            htmlString += "<td>" + item.author + "</td>";
            htmlString += "<td style='text-align: right'>" + item.price + "</td>";
            htmlString += "<td style='text-align: right'>" + item.quantity + "</td>";
            htmlString += "<td style='text-align: right'>" + item.price * item.quantity + "</td>";
            htmlString += "</tr>";




            $("#table-products > tbody:last").append(htmlString);

        });
    }
}
