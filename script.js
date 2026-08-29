document.addEventListener("DOMContentLoaded", function () {

    const loginButton = document.getElementById("btn-login");
    const loginWrapper = document.getElementById("loginWrapper");
    const closeLogin = document.getElementById("closeLogin");

    const loginForm = document.getElementById("loginForm");
    const usernameInput = document.getElementById("username");
    const passwordInput = document.getElementById("password");

    const message = document.getElementById("message");

    const loginPage = document.getElementById("loginPage");
    const productPage = document.getElementById("productPage");

    const logoutBtn = document.getElementById("logoutBtn");


    // CHECK KUNG NAKA-LOGIN NA
    if (localStorage.getItem("isLoggedIn") === "true") {

        loginPage.style.display = "none";
        productPage.classList.add("active");

    }


    // OPEN LOGIN BOX
    loginButton.addEventListener("click", function () {

        loginWrapper.classList.add("active");

    });


    // CLOSE LOGIN BOX
    closeLogin.addEventListener("click", function () {

        loginWrapper.classList.remove("active");

    });


    // LOGIN FUNCTION
    loginForm.addEventListener("submit", function (event) {

        event.preventDefault();


        const username = usernameInput.value.trim();
        const password = passwordInput.value.trim();


        // CHECK USERNAME AT PASSWORD
        if (username === "-... .-.. .- -.-. -.- .-- .. -. --. ..." && password === ".--- ..- -. -- ---") {

            // SAVE LOGIN STATUS
            localStorage.setItem("isLoggedIn", "true");


            // ITAGO LOGIN PAGE
            loginPage.style.display = "none";


            // IPAKITA PRODUCT PAGE
            productPage.classList.add("active");

        } else {

            message.style.color = "red";
            message.textContent = "Wrong username or password!";

        }

    });


    // LOGOUT
    logoutBtn.addEventListener("click", function () {

        // DELETE LOGIN STATUS
        localStorage.removeItem("isLoggedIn");


        // ITAGO PRODUCT PAGE
        productPage.classList.remove("active");


        // IPAKITA LOGIN PAGE
        loginPage.style.display = "block";


        // ITAGO LOGIN BOX
        loginWrapper.classList.remove("active");


        // CLEAR INPUTS
        usernameInput.value = "";
        passwordInput.value = "";
        message.textContent = "";

    });

});


let cart = [];

const addCartButtons = document.querySelectorAll(".add-cart");

const cartBtn = document.getElementById("cartBtn");
const cartCount = document.getElementById("cartCount");

const cartPanel = document.getElementById("cart");
const cartOverlay = document.getElementById("cartOverlay");
const closeCart = document.getElementById("closeCart");

const cartItems = document.getElementById("cartItems");
const cartTotal = document.getElementById("cartTotal");


// OPEN CART
cartBtn.addEventListener("click", function () {

    cartPanel.classList.add("active");
    cartOverlay.classList.add("active");

});


// CLOSE CART
closeCart.addEventListener("click", closeCartPanel);

cartOverlay.addEventListener("click", closeCartPanel);


function closeCartPanel() {

    cartPanel.classList.remove("active");
    cartOverlay.classList.remove("active");

}


// ADD TO CART
addCartButtons.forEach(function (button) {

    button.addEventListener("click", function () {

        const productCard = button.closest(".product-card");

        const name = productCard
            .querySelector(".product-name")
            .textContent;

        const price = Number(
            productCard
                .querySelector(".product-price")
                .textContent
        );

        const image = productCard
            .querySelector("img")
            .src;


        const existingProduct = cart.find(function (product) {

            return product.name === name;

        });


        if (existingProduct) {

            existingProduct.quantity++;

        } else {

            cart.push({

                name: name,
                price: price,
                image: image,
                quantity: 1

            });

        }


        updateCart();

    });

});


// UPDATE CART
function updateCart() {

    cartItems.innerHTML = "";


    let total = 0;
    let totalQuantity = 0;


    if (cart.length === 0) {

        cartItems.innerHTML = `
            <p class="empty-cart">
                Your cart is empty.
            </p>
        `;

    }


    cart.forEach(function (product, index) {

        total += product.price * product.quantity;

        totalQuantity += product.quantity;


        const item = document.createElement("div");

        item.classList.add("cart-item");


        item.innerHTML = `

            <img src="${product.image}">

            <div class="cart-details">

                <h3>${product.name}</h3>

                <p class="cart-price">
                    ₱${product.price}
                </p>


                <div class="quantity-control">

                    <button onclick="decreaseQuantity(${index})">
                        −
                    </button>

                    <span>
                        ${product.quantity}
                    </span>

                    <button onclick="increaseQuantity(${index})">
                        +
                    </button>

                </div>


                <button
                    class="remove-item"
                    onclick="removeItem(${index})"
                >
                    Remove
                </button>

            </div>

        `;


        cartItems.appendChild(item);

    });


    cartCount.textContent = totalQuantity;

    cartTotal.textContent = "₱" + total;

}


// INCREASE QUANTITY
function increaseQuantity(index) {

    cart[index].quantity++;

    updateCart();

}


// DECREASE QUANTITY
function decreaseQuantity(index) {

    if (cart[index].quantity > 1) {

        cart[index].quantity--;

    } else {

        cart.splice(index, 1);

    }

    updateCart();

}


// REMOVE ITEM
function removeItem(index) {

    cart.splice(index, 1);

    updateCart();

}

const checkoutPage = document.getElementById("checkoutPage");

const checkoutItems =
    document.getElementById("checkoutItems");

const checkoutTotal =
    document.getElementById("checkoutTotal");

const checkoutQuantity =
    document.getElementById("checkoutQuantity");

const checkoutBtn =
    document.getElementById("checkoutBtn");

const backToCart =
    document.getElementById("backToCart");

const placeOrder =
    document.getElementById("placeOrder");

function showCheckoutProducts() {

    checkoutItems.innerHTML = "";

    let total = 0;
    let quantity = 0;


    cart.forEach(function (product) {

        total += product.price * product.quantity;

        quantity += product.quantity;


        const item = document.createElement("div");

        item.className = "checkout-item";


        item.innerHTML = `
            
            <input type="checkbox" checked>

            <img src="${product.image}" alt="${product.name}">

            <div class="checkout-item-info">

                <h3>${product.name}</h3>

                <p>₱${product.price}</p>

                <span>
                    Quantity: ${product.quantity}
                </span>

            </div>

        `;


        checkoutItems.appendChild(item);

    });


    checkoutQuantity.textContent = quantity;

    checkoutTotal.textContent = "₱" + total;

}




function updateCheckout() {

    checkoutItems.innerHTML = "";

    let total = 0;

    let quantity = 0;


    cart.forEach(function (product, index) {

        const itemTotal =
            product.price * product.quantity;


        total += itemTotal;

        quantity += product.quantity;


        const item =
            document.createElement("div");

        item.className = "checkout-item";


        item.innerHTML = `

            <input
                type="checkbox"
                checked
                onchange="updateCheckoutTotal()"
            >

            <img src="${product.image}">


            <div class="checkout-item-info">

                <h3>
                    ${product.name}
                </h3>

                <p>
                    ₱${product.price}
                </p>

                <span>
                    Quantity: ${product.quantity}
                </span>

            </div>

        `;


        checkoutItems.appendChild(item);

    });


    checkoutTotal.textContent =
        "₱" + total;

    checkoutQuantity.textContent =
        quantity;

}

placeOrder.addEventListener("click", function () {

    const name =
        document.getElementById("customerName").value.trim();

    const address =
        document.getElementById("customerAddress").value.trim();


    const payment =
        document.querySelector(
            'input[name="payment"]:checked'
        ).value;


    if (name === "" || address === "") {

        alert(
            "Please enter your name and address."
        );

        return;

    }


    alert(
        "Order placed successfully!\n\n" +
        "Name: " + name + "\n" +
        "Payment: " + payment + "\n" +
        "Total: " + checkoutTotal.textContent
    );


    // Clear cart
    cart = [];

    updateCart();


    // Back to products
    checkoutPage.classList.remove("active");

    productPage.classList.add("active");

});

backToCart.addEventListener("click", function () {

    checkoutPage.classList.remove("active");

    productPage.classList.add("active");

    cartPanel.classList.add("active");

    cartOverlay.classList.add("active");

});

function changeProductImage(mainImageId, newImage) {

    document.getElementById(mainImageId).src = newImage;

}