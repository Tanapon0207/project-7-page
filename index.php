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
    <script src="เข้าสู่ระบบ.js"></script>
    <script src="api_facebook.js"></script>
    <title>เข้าสู่ระบบ</title>

</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark " style="height: 15%; background-color:RGB(255, 140, 0);">
            <div class="mx-auto order-0">
                <a href="https://home-main2.herokuapp.com/">
                    <img src="https://scontent.furt2-1.fna.fbcdn.net/v/t1.15752-9/270242207_1008296189759019_4358413855295773765_n.png?_nc_cat=108&ccb=1-5&_nc_sid=ae9488&_nc_ohc=uyrLkkFBVJkAX8ztm-v&_nc_ht=scontent.furt2-1.fna&oh=03_AVJhJihfOtEQpdhPOa17f_Q_xBzcD-OzRscgIpoN7ePYBg&oe=61F48E5D"
                        alt="logo" style="width: 150px; height: 65px; text-align: center;">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
    </header>
    <br />

    <div class="container">
        <div class="row">
            <div class="col-md-7" style="background-color: #f3e2bf; width: 00px; height: 400px; margin: 15px -155px;">
                <img src="https://eatfoodpungpondhome.files.wordpress.com/2019/01/cok2-1.jpg" alt=""
                    style="width: 150px; height: 150px; margin: 10px; margin-top: 30px; border-radius: 95%; border: white 1px; ">
                <br>
                <img src="https://img.kapook.com/u/2017/sarinee/July/week3/cok5.jpg" alt=""
                    style="width: 200px; height: 200px; margin: 400px; margin-top: -150px; border-radius: 95%; border: white 1px;">
                <br>
                <img src="https://img.kapook.com/u/2017/sarinee/July/week3/cok6.jpg" alt=""
                    style="width: 110px; height: 110px; margin: 245px ; margin-top: -750px; border-radius: 95%; border: white 1px;">
                <br>
                <img src="https://d1sag4ddilekf6.azureedge.net/compressed/items/THITE2021050316094268339/photo/menueditor_item_b011f341b0cf487b960093f1f4a8485d_1620058015841599526.jpg"
                    alt=""
                    style="width: 185px; height: 200px; margin: 90px ; margin-top: -700px; border-radius: 95%; border: white 1px;">
                <br>
                <img src="https://food.mthai.com/app/uploads/2017/07/Chicken-wings-fried-fish-sauce.jpg" alt=""
                    style="width: 116px; height: 125px; margin: 500px ; margin-top: -430px; border-radius: 95%; border: white 1px;">
                <br>
                <img src="https://food.mthai.com/app/uploads/2017/02/Spicy-fish-2.jpg" alt=""
                    style="width: 100px; height: 100px; margin: 320px ; margin-top: -847px; border-radius: 95%; border: white 1px;">
                <br>
            </div>
        </div>
    </div>

    <div class="login-page col-sm-3 container">
        <form>
            <div style="width: 500px; margin-top: -370px; margin-left: 250px">
                <div class="form-group">
                    <button id="login">Login with Facebook</button>
                    <button style="display: none;" id="logout">Logout</button>
                    <br />
                    <br>
                    <p style="text-align: center;"> หรือ </p>
                    <label for="exampleInputEmail1">User name</label>
                    <input type="text" class="form-control" id="username1" aria-describedby="emailHelp"
                        placeholder="ชื่อผู้ใช้" required maxlength="30">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="Password1" placeholder="รหัสผ่าน" required
                        maxlength="16">
                </div>
                <div class="text-center p-1">
                    คุณคือผู้ใช้ใหม่ ?
                    <a class="text-primary" href="https://sheltered-bayou-62694.herokuapp.com/?fbclid=IwAR1ebWP_gieUxBN2-D-fsKlqrVfIRF62ssT7wZQL2sMcB8TxHDAEi-rPaTg
                    "> ลงทะเบียน</a>
                </div>
                <div class="form-check" style="text-align: center;">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">จดจำรหัสผ่านของฉัน</label>
                </div>
                
                <a class="btn btn-primary col text-center;" href="https://again-loginmain3.herokuapp.com/" role="button" style="margin-top: 2%;">เข้าสู่ระบบ</a>
            </div>
        </form>
    </div>
</body>
<br />
<!--footer-->
<footer class=" text-center text-white  fixed-bottom" style="background-color:#FF8C00; ">
    <!-- Grid container -->
    <div class="container p-0 pb-0" style="padding-top: 500px;">
        <img src="https://scontent.furt2-1.fna.fbcdn.net/v/t1.15752-9/264188773_896935050965530_2711615664391408306_n.png?_nc_cat=103&ccb=1-5&_nc_sid=ae9488&_nc_ohc=ud-yoNNHsfsAX_Nfmio&_nc_ht=scontent.furt2-1.fna&oh=03_AVLyCbyhL2Q2gjgtPMsDuVfb6ZCAefoFZeROh45XeOstzw&oe=61F56A69"
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
                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-instagram" viewBox="0 0 16 16">
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

<script>
    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "https://connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));

    // initialize the facebook sdk

    window.fbAsyncInit = function () {
        FB.init({
            appId: '259407919479322',
            cookie: true,  // enable cookies to allow the server to access 
            // the session
            xfbml: true,  // parse social plugins on this page
            version: 'v3.1' // The Graph API version to use for the call
        });

    }

    $(document).ready(function () {
        $("#login").click(function () {
            facebookLogin();
        });

        $("#logout").click(function () {
            $("#logout").hide();
            $("#login").show();
            $("#status").empty();
            facebookLogout();
        });

        function facebookLogin() {
            FB.getLoginStatus(function (response) {
                console.log(response);
                statusChangeCallback(response);
            });
        }
        function statusChangeCallback(response) {
            if (response.status === "connected") {
                $("#login").hide();
                $("#logout").show();

                fetchUserprofile();
            } else {
                // Logging the user to Facebook by a Dialog Window
                facebookLoginByDialog();
            }
        }

        function fetchUserprofile() {
            console.log("Welcome!  Fetching your information.... ");
            FB.api("/me?fields=id,name,email", function (response) {
                console.log(response);
                console.log("Successful login for: " + response.name);
                var profile = `<h1>Welcome ${response.name}<h1>
      <h2>Your email is ${response.email}</h2>`;
                $("#status").append(profile);
            });
        }

        function facebookLoginByDialog() {
            FB.login(
                function (response) {
                    statusChangeCallback(response);
                },
                { scope: "public_profile,email" }
            );
        }

        function facebookLogout() {
            FB.logout(function (response) {
                statusChangeCallback(response);
            });
        }
    });
</script>

</html>
