
var shoppingCartItems = [];

$(document).ready(function () {
    // Ki?m tra n?u ?ã có sessionStorage["shopping-cart-items"] hay ch?a?
    if (sessionStorage["shopping-cart-items"] != null) {
        shoppingCartItems = JSON.parse(sessionStorage["shopping-cart-items"].toString());
    }

    // Hi?n th? thông tin t? gi? hàng
    displayShoppingCartItems();
});

// Su kien click các button có class=".add-to-cart"
$(".add-to-cart").click(function () {
    var button = $(this); // Lay button mà nguoi dùng click
    var id = button.attr("id"); // id c?a s?n ph?m là id c?a button
    var name = button.attr("data-name"); // name c?a s?n ph?m là thu?c tính data-name c?a button
    var price = button.attr("data-price"); // price c?a s?n ph?m là thu?c tính data-price c?a button
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
            // N?u m?t hàng ?ã t?n t?i trong gi? hàng thì ch? c?n t?ng s? l??ng m?t hàng ?ó trong gi? hàng.
            if (value.id == item.id) {
                value.quantity++;
                exists = true;
                return false;
            }
        });
    }

    // N?u m?t hàng ch?a t?n t?i trong gi? hàng thì b? sung vào m?ng
    if (!exists) {
        shoppingCartItems.push(item);
    }

    // L?u thông tin vào sessionStorage
    sessionStorage["shopping-cart-items"] = JSON.stringify(shoppingCartItems); // Chuy?n thông tin m?ng shoppingCartItems sang JSON tr??c khi l?u vào sessionStorage
    // G?i hàm hi?n th? gi? hàng
    displayShoppingCartItems();
});

// Xóa h?t gi? hàng shoppingCartItems
$("#button-clear").click(function () {
    shoppingCartItems = [];
    sessionStorage["shopping-cart-items"] = JSON.stringify(shoppingCartItems);
    $("#table-products > tbody").html("");
});


// Hi?n th? gi? hàng ra table
function displayShoppingCartItems() {
    if (sessionStorage["shopping-cart-items"] != null) {
        shoppingCartItems = JSON.parse(sessionStorage["shopping-cart-items"].toString()); // Chuy?n thông tin t? JSON trong sessionStorage sang m?ng shoppingCartItems.

        $("#table-products > tbody").html("");
        // Duy?t qua m?ng shoppingCartItems ?? append t?ng item dòng vào table
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
