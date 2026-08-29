<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <title>BLACKWINGS</title>
</head>
<body>

    <!-- LOGIN PAGE -->
    <div id="loginPage">

        <header>
            <h1>BLACKWINGS</h1>
            <button type="button" id="btn-login" class="btn-login">
                Login
            </button>
        </header>


        <!-- LOGIN BOX -->
        <div class="wrapper" id="loginWrapper">

            <span class="icon-close" id="closeLogin">
                <ion-icon name="close-outline"></ion-icon>
            </span>

            <div class="form-box login">

                <h2>Login</h2>

                <form id="loginForm">

                    <div class="input-box">
                        <input type="text" id="username" required>
                        <label>Username</label>
                    </div>

                    <div class="input-box">
                        <input type="password" id="password" required>
                        <label>Password</label>
                    </div>
                    <div class="remember-forget">
                        <label><input type="checkbox">Remember me
                        </label>
                        <div class="login-register">
                            <a href="#">Register</a>
                        </div>
                    </div>

                    <button type="submit" class="btn">
                        Login
                    </button>

                    <p id="message"></p>

                </form>

            </div>

        </div>

    </div>


    <!-- PRODUCT PAGE -->
    <div id="productPage">

        <header class="product-header">
            <h1 class="blackwings">BLACKWINGS STORE</h1>
            
            <div class="junmo">
                <p>By JUNMO</p>
            </div>

            <div>
                <button type="button" id="cartBtn" class="cart-button">
                    <ion-icon name="basket-outline"></ion-icon> 
                    <span id="cartCount">0</span>
                </button>
            </div>
            <button type="button" id="logoutBtn" class="logoutBtn">
                Logout
            </button>
        </header>


        <main class="products">

            <div class="product-card">
                <div class="product-card">

    <div class="product-gallery">

        <!-- MAIN IMAGE -->
        <img
            id="mainProduct1"
            class="main-product-image"
            src="IMG_0959.JPG"
            alt="Product 1"
        >

        <!-- 5 PICTURES -->
        <div class="product-thumbnails">

            <img
                src="IMG_0960.JPG"
                onclick="changeProductImage('mainProduct1', this.src)"
            >

            <img
                src="IMG_0959.JPG"
                onclick="changeProductImage('mainProduct1', this.src)"
            >

        </div>

    </div>


    <h2 class="product-name">
        357 Magnum
    </h2>

    <p class="product-price">
        ₱20,000
    </p>

    <button class="add-cart">
        Add to Cart
    </button>

</div>
            </div>

            <div class="product-card">

    <div class="product-galleri">

        <!-- MAIN IMAGE -->
        <img
            id="mainProduct2"
            class="main-product-image"
            src="IMG_0964.JPG"
            alt="Product 2"
        >

        <!-- 5 PICTURES -->
        <div class="product-thumbnails">

            <img
                src="IMG_0965.JPG"
                onclick="changeProductImage('mainProduct2', this.src)"
            >

            <img
                src="IMG_0964.JPG"
                onclick="changeProductImage('mainProduct2', this.src)"
            >


        </div>

    </div>


    <h2 class="product-name">
        45
    </h2>

    <p class="product-price">
        ₱25,000
    </p>

    <button class="add-cart">
        Add to Cart
    </button>

</div>

        
            <div class="product-card">

    <div class="product-galleri">

        <!-- MAIN IMAGE -->
        <img
            id="mainProduct3"
            class="main-product-image"
            src="flipper zero.jpg"
            alt="Product 2"
        >

        <!-- 5 PICTURES -->
        <div class="product-thumbnails">

            <img
                src="flipper zero2.jpg"
                onclick="changeProductImage('mainProduct3', this.src)"
            >

            <img
                src="flipper zero3.jpg"
                onclick="changeProductImage('mainProduct3', this.src)"
            >

            <img
                src="flipper zero.jpg" 
                onclick="changeProductImage('mainProduct3', this.src)"
                >


        </div>

    </div>


    <h2 class="product-name">
        Flipper zero
    </h2>

    <p class="product-price">
        ₱1,236
    </p>

    <button class="add-cart">
        Add to Cart
    </button>

</div>


<div class="product-card">

    <div class="product-gallery">

        <!-- MAIN IMAGE -->
        <img
            id="mainProduct4"
            class="main-product-image"
            src="esp.jpg"
            alt="Product 4"
        >

        <!-- 5 PICTURES -->
        <div class="product-thumbnails">

            <img
                src="esp2.jpg"
                onclick="changeProductImage('mainProduct4', this.src)"
            >

            <img
                src="esp3.jpg"
                onclick="changeProductImage('mainProduct4', this.src)"
            >

            <img
                src="esp.jpg"
                onclick="changeProductImage('mainProduct4', this.src)"
            >

        </div>

    </div>


    <h2 class="product-name">
        ESP32 marauder
    </h2>

    <p class="product-price">
         ₱1,358
    </p>

    <button class="add-cart">
        Add to Cart
    </button>

</div>

<div class="product-card">

    <div class="product-gallery">

        <!-- MAIN IMAGE -->
        <img
            id="mainProduct5"
            class="main-product-image"
            src="m5shark.jpg"
            alt="Product 5"
        >

        <!-- 5 PICTURES -->
        <div class="product-thumbnails">

            <img
                src="m5shark2.jpg"
                onclick="changeProductImage('mainProduct5', this.src)"
            >

            <img
                src="m5shark3.jpg"
                onclick="changeProductImage('mainProduct5', this.src)"
            >

            <img
                src="m5shark4.jpg"
                onclick="changeProductImage('mainProduct5', this.src)"
            >

            <img
                src="m5shark.jpg"
                onclick="changeProductImage('mainProduct5', this.src)"
            >

        </div>

    </div>


    <h2 class="product-name">
        M5 Shark device
    </h2>

    <p class="product-price">
        ₱2,135
    </p>

    <button class="add-cart">
        Add to Cart
    </button>

</div>


            <!-- CHECKOUT PAGE -->
<div id="checkoutPage">

    <div class="checkout-header">
        <button id="backToCart">
            <ion-icon name="arrow-back-outline"></ion-icon>
        </button>

        <h1>Checkout</h1>
    </div>


    <div class="checkout-container">

        <!-- CUSTOMER INFORMATION -->
        <section class="checkout-box">

            <h2>Delivery Information</h2>

            <div class="form-group">
                <label>Full Name</label>
                <input
                    type="text"
                    id="customerName"
                    placeholder="Enter your name"
                    required
                >
            </div>

            <div class="form-group">
                <label>Address</label>
                <textarea
                    id="customerAddress"
                    placeholder="Enter your complete address"
                    required
                ></textarea>
            </div>

        </section>


        <!-- SELECTED PRODUCTS -->
        <section class="checkout-box">

            <h2>Selected Products</h2>

            <div id="checkoutItems">
                <p>No products selected.</p>
            </div>

        </section>


        <!-- PAYMENT -->
        <section class="checkout-box">

            <h2>Payment Method</h2>

            <label class="payment-option">
                <input
                    type="radio"
                    name="payment"
                    value="Cash on Delivery"
                    checked
                >

                Cash on Delivery
            </label>

            <label class="payment-option">
                <input
                    type="radio"
                    name="payment"
                    value="GCash"
                >

                GCash
            </label>

            <label class="payment-option">
                <input
                    type="radio"
                    name="payment"
                    value="Bank Transfer"
                >

                Bank Transfer
            </label>

        </section>


        <!-- ORDER SUMMARY -->
        <section class="checkout-box order-summary">

            <h2>Order Summary</h2>

            <div>
                <span>Items:</span>
                <span id="checkoutQuantity">0</span>
            </div>

            <div>
                <span>Total:</span>
                <strong id="checkoutTotal">₱0</strong>
            </div>

            <button id="placeOrder">
                Place Order
            </button>

        </section>

    </div>

</div>

        </main>

        <!-- CART OVERLAY -->
<div id="cartOverlay"></div>

<!-- CART PANEL -->
<div id="cart">

    <div class="cart-header">
        <h2>Shopping Cart</h2>

        <button id="closeCart">
            <ion-icon name="close-outline"></ion-icon>
        </button>
    </div>

    <div id="cartItems">
        <p class="empty-cart">Your cart is empty.</p>
    </div>

    <div class="cart-footer">

        <div class="cart-total">
            <span>Total:</span>
            <strong id="cartTotal">₱0</strong>
        </div>

        <button id="checkoutBtn">
            Checkout
        </button>

    </div>

</div>




    </div>


    <script src="script.js"></script>

    
</body>
</html>