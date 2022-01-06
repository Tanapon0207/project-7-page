<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styleลงทะเบียน.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
  <link rel="icon"
    href="https://scontent.furt2-1.fna.fbcdn.net/v/t1.15752-9/264188773_896935050965530_2711615664391408306_n.png?_nc_cat=103&ccb=1-5&_nc_sid=ae9488&_nc_ohc=ud-yoNNHsfsAX_Nfmio&_nc_ht=scontent.furt2-1.fna&oh=03_AVLyCbyhL2Q2gjgtPMsDuVfb6ZCAefoFZeROh45XeOstzw&oe=61F56A69">
  <title>สั่งอาหาร</title>
  <link rel="stylesheet" href="ใหม่.css">
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
</head>
<style>
  header {
    position: fixed;
    top: 0;
    right: 0;
    width: 100%;
    background: RGB(255, 140, 0);
    z-index: 100;
  }

  section {
    padding: 4rem 0 3rem;
  }

  .nav {
    display: flex;
    align-items: center;
    justify-content: space-between;

  }

  .container {
    max-width: 1068px;
    margin: auto;
    width: 100%;
  }

  .cart-icon {
    cursor: pointer;
  }

  .section-title {
    font-size: 1.5rem;
    text-align: center;
    margin-bottom: 1.5rem;
  }

  .cart {
    position: fixed;
    top: 0;
    right: -100%;
    width: 360px;
    min-height: 100vh;
    padding: 20px;
    background: rgb(250, 236, 210);
    transition: 0.3s;

  }

  .cart.active {
    right: 0;
  }

  .cart-title {
    text-align: center;
    font-size: 1.5rem;
    margin-top: 1.5rem;
  }

  .cart-box {
    display: flex;
    grid-template-columns: 32% 50% 18%;
    align-items: center;
    gap: 2rem;
    margin-top: 1rem;
  }

  .cart-remove {
    font-size: 24px;
    color: red;
    cursor: pointer;
  }

  .cart-img {
    width: 100px;
    height: 100px;
    object-fit: contain;
    padding: 10px;
  }

  .total {
    display: flex;
    justify-content: flex-start;
    margin-top: 1.5rem;
    border-top: 1px solid black;
  }

  .total-title {
    font-size: 1rem;

  }

  .total-price {
    margin-left: 12rem;
  }

  .detail {
    display: grid;
    row-gap: 0.5rem;
  }

  .cart-food-title {
    font-size: 1rem;
    text-transform: uppercase;
  }

  .cart-quantity {
    border: 1px black;
    outline-color: black;
    width: 2.4rem;
    font-size: 1rem;
  }

  .btn-buy {
    display: flex;
    border-radius: 30px;
    margin: 1.5rem auto;
    padding: 12px 20px;
    border: none;
    background: rgb(252, 137, 36);
    color: white;
    font-size: 1rem;
    cursor: pointer;
  }

  .btn-buy:hover {
    background: tomato;
  }

  .food {
    margin-top: 1.5rem;
  }

  .food-img {
    width: 235px;
    height: 150px;
    margin-bottom: 0.5rem;
  }

  .food-content {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, auto));
    gap: 1.5rem;
  }

  .food-box {
    position: relative;
  }

  .food-box:hover {
    padding: 10px;
    border: 1px solid black;
    transition: 0.4s;
  }

  .food-title {
    font-size: 1.1rem;
    text-transform: uppercase;
    margin-bottom: 1rem;
  }

  .cart-price {
    font-weight: 500;
  }

  .add-cart {
    position: absolute;
    bottom: 0;
    right: 0;
    background: coral;
    color: white;
    padding: 10px;
    cursor: pointer;
  }

  .add-cart:hover {
    background: tomato;
  }
</style>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
  <span class="navbar-toggler-icon"></span>
</button>
</div>

<body>
  <header>
    <div class="nav container">
      <img
        src="https://scontent.furt2-1.fna.fbcdn.net/v/t1.15752-9/270242207_1008296189759019_4358413855295773765_n.png?_nc_cat=108&ccb=1-5&_nc_sid=ae9488&_nc_ohc=uyrLkkFBVJkAX8ztm-v&_nc_ht=scontent.furt2-1.fna&oh=03_AVJhJihfOtEQpdhPOa17f_Q_xBzcD-OzRscgIpoN7ePYBg&oe=61F48E5D"
        width="200px">
      <a class="nav-link" href="https://home-main2.herokuapp.com/"
        style="color: white; margin-left: 50%;  ">หน้าหลัก</a>
      <a class="nav-link" href="#" style="color: white; margin-left: 1%;">จองโต๊ะ</a>
      <i class='bx bx-shopping-bag' id="cart-icon" style="font-size: 1.5rem;cursor: pointer; "></i>

    </div>

    <div class="cart">
      <i class='bx bx-x' id="close-cart" style="margin-left: 300px; font-size: 2rem; cursor: pointer;"></i>
      <h2 class="cart-title">Your Cart</h2>
      <div class="cart-content">

      </div>
      <div class="total">
        <div class="total-title">ราคารวม</div>
        <div class="total-price">0บาท</div>
      </div>
      <button type="button" class="btn-buy">ยืนยันการสั่งอาหาร</button>
    </div>
    </div>
  </header>
  <section class="food container">
    <h2 class="section-title">เลือกซื้ออาหาร</h2>
    <div class="food-content">
      <!--อาหาร1-->
      <div class="food-box">
        <img
          src="https://www.proudofficials.com/application/files/cache/thumbnails/11379623aad9ff6a00488535f149d32d.jpg"
          alt="" class="food-img">
        <h2 class="food-title">ปูผัดผงกระหรี่</h2>
        <span class="price">260 บาท</span>
        <i class='bx bx-basket add-cart'></i>
      </div>
      <!--อาหาร2-->
      <div class="food-box">
        <img src="https://img.wongnai.com/p/1968x0/2020/05/27/5fc43389ce4640988abae922c1239c34.jpg" alt=""
          class="food-img">
        <h2 class="food-title">กุ้งอบวุ้นเส้น</h2>
        <span class="price">160 บาท</span>
        <i class='bx bx-basket add-cart'></i>
      </div>
      <!--อาหาร3-->
      <div class="food-box">
        <img src="https://f.ptcdn.info/881/044/000/ob9m1dh4s72DDCo6J4I-o.jpg" alt="" class="food-img">
        <h2 class="food-title">ต้มยำปลากระพง</h2>
        <span class="price">100 บาท</span>
        <i class='bx bx-basket add-cart'></i>
      </div>
      <!--อาหาร4-->
      <div class="food-box">
        <img src="https://img.kapook.com/u/pirawan/Cooking1/streamed-fish-pudding.jpg" alt="" class="food-img">
        <h2 class="food-title">ห่อหมกทะเล</h2>
        <span class="price">60 บาท</span>
        <i class='bx bx-basket add-cart'></i>
      </div>
      <!--อาหาร5-->
      <div class="food-box">
        <img src="https://s.isanook.com/gu/0/ui/1/8294/266728__06092012104554.jpg" alt="" class="food-img">
        <h2 class="food-title">ข้าวสวย</h2>
        <span class="price">10 บาท</span>
        <i class='bx bx-basket add-cart'></i>
      </div>
      <!--อาหาร6-->
      <div class="food-box">
        <img src="https://img.wongnai.com/p/400x0/2019/06/07/51b24812de864e1f884b580ff68101cf.jpg" alt=""
          class="food-img">
        <h2 class="food-title">ผัดไทยไก่ย่าง</h2>
        <span class="price">120 บาท</span>
        <i class='bx bx-basket add-cart'></i>
      </div>
      <!--อาหาร7-->
      <div class="food-box">
        <img
          src="https://f4610.files.wordpress.com/2015/12/772.jpg?w=2500&h&fbclid=IwAR2_dtY-SjFGHRpgf76OilZrn_obe_nMiNBWQPRri20oI1J3xBv6M8SjKwA"
          alt="" class="food-img">
        <h2 class="food-title">น้ำพริกปลาทู</h2>
        <span class="price">120 บาท</span>
        <i class='bx bx-basket add-cart'></i>
      </div>

      <!--อาหาร6-->
      <div class="food-box">
        <img src="https://gangtravel.com/uppic/2020-03/17/dd3856e7b.jpg.webp" alt="" class="food-img">
        <h2 class="food-title">กุ้งเผา</h2>
        <span class="price">600 บาท</span>
        <i class='bx bx-basket add-cart'></i>
      </div>
    </div>
  </section>
  <!--footer-->
  <footer class=" text-center text-white " style="background-color:#FF8C00;">

    <!-- Grid container -->
    <div class="container p-0 pb-0" style="padding-top: 500px;">
      <img
        src="https://scontent.furt2-1.fna.fbcdn.net/v/t1.15752-9/264188773_896935050965530_2711615664391408306_n.png?_nc_cat=103&ccb=1-5&_nc_sid=ae9488&_nc_ohc=ud-yoNNHsfsAX_Nfmio&_nc_ht=scontent.furt2-1.fna&oh=03_AVLyCbyhL2Q2gjgtPMsDuVfb6ZCAefoFZeROh45XeOstzw&oe=61F56A69"
        alt="logoร้าน" style="width: 100px; height: 100px; padding-top: 10px;">
      <section class="mb-4" style="margin-left: 65px;">
        <!-- Facebook -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><svg
            xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook"
            viewBox="0 0 16 16">
            <path
              d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
          </svg></a>

        <!-- Twitter -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><svg
            xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter"
            viewBox="0 0 16 16">
            <path
              d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
          </svg></a>

        <!-- Google -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><svg
            xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram"
            viewBox="0 0 16 16">
            <path
              d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
          </svg></a>


        <p class="float-right" style="margin-right: 25px; ">
          <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
              class="bi bi-arrow-up-circle" viewBox="0 0 16 16" style="color: white;">
              <path fill-rule="evenodd"
                d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z" />
            </svg></a>
        </p>
      </section>
    </div>



    <!-- Copyright -->
    <div class="text-center p-1" style="background-color:RGB(255, 140, 0);">
      © 2021 Copyright:
      <a class="text-white" href="https://informatics.wu.ac.th/?page_id=30340">informatics.wu.ac.th</a>
    </div>
    <!-- Copyright -->
    <!---->
  </footer>
</body>
<script>
  let cartIcon = document.querySelector("#cart-icon");
  let cart = document.querySelector(".cart");
  let closecart = document.querySelector("#close-cart");

  cartIcon.onclick = () => {
    cart.classList.add("active");
  };

  closecart.onclick = () => {
    cart.classList.remove("active");
  };

  if (document.readyState == "loading") {
    document.addEventListener("DOMContentLoaded", ready);
  } else {
    ready();
  }

  function ready() {
    var removeCartButtons = document.getElementsByClassName("cart-remove");
    console.log(removeCartButtons);
    for (var i = 0; i < removeCartButtons.length; i++) {
      var button = removeCartButtons[i];
      button.addEventListener("click", removeCartItem);
    }

    //จำนวน//
    var quantityInputs = document.getElementsByClassName("cart-quantity");
    for (var i = 0; i < quantityInputs.length; i++) {
      var input = quantityInputs[i];
      input.addEventListener("change", quantitychanged);

    }
    //เพิ่มอาหาร//
    var addCart = document.getElementsByClassName("add-cart");
    for (var i = 0; i < addCart.length; i++) {
      var button = addCart[i];
      button.addEventListener("click", addCartclicked);
    }
  }

  function removeCartItem(event) {
    var buttonClicked = event.target;
    buttonClicked.parentElement.remove();
    updatetotal();
  }

  function quantitychanged(event) {
    var input = event.target;
    if (isNaN(input.value) || input.value <= 0) {
      input.value = 1;
    }
    updatetotal();
  }
  function addCartclicked(event) {
    var button = event.target;
    var shopfood = button.parentElement;
    var title = shopfood.getElementsByClassName("food-title")[0].innerText;
    var price = shopfood.getElementsByClassName("price")[0].innerText;
    var foodimg = shopfood.getElementsByClassName("food-img")[0].src;

    addfoodtocart(title, price, foodimg);
    updatetotal();
  }

  function addfoodtocart(title, price, foodimg) {
    var cartshopBox = document.createElement("div");
    cartshopBox.classList.add("food-box");
    var cartItmes = document.getElementsByClassName("food-content")[0];
    var cartItmesNames = cartItmes.getElementsByClassName("food-title");
    for (var i = 0; i < cartItmesNames.length; i++) {
      alert("คุณได้เพิ่มรายการอาหาร");
      return;

    }
  }

  var cartBoxContent = `
                        <img src="${foodimg}"class="cart-img">
                        <div class="detail">
                          <div class="cart-food-title">${title}</div>
                          <div class="cart-price">${price}</div>
                          <input type="number" value="1" class="cart-quantity">
                        </div>
                        <i class='bx bx-trash cart-remove'></i>`;
  cartshopBox.innerHTML = cartBoxContent;
  cartItmes.append(cartshopBox);
  cartshopBox.getElementsByClassName("cart-remove")[0].addEventListener("click", removeCartItem);
  cartshopBox.getElementsByClassName("cart-quantity")[0].addEventListener("change", quantitychanged);




  function updatetotal() {
    var cartContent = document.getElementsByClassName("cart-content")[0];
    var cartBoxes = cartContent.getElementsByClassName("cart-box");
    var total = 0;
    for (var i = 0; i < cartBoxes.length; i++) {
      var cartBox = cartBoxes[i];
      var priceElement = cartBox.getElementsByClassName("cart-price")[0];
      var quantityElement = cartBox.getElementsByClassName("cart-quantity");
      var price = parseFloat(priceElement.innerText.replace("", "บาท"));
      var quantity = quantityElement.value;
      total = total + price * quantity;
      document.getElementsByClassName("total-price")[0].innerText = total + "บาท";

    }
  }
</script>

</html>
