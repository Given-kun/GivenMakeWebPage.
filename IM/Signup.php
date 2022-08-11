<?php
?>
<!Doctype>
<html>

<head>
    <title>CREATE NEW ACCOUNT</title>
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="Logo.png">
</head>
<style>
    *{font-family: 'Oswald', sans-serif;}body { background-color: #212121 ;}.login-div {margin: 100px auto;width: 350px;background-color: #fff;padding: 60px;}.logo{background-color: #212121;width: 150px;height: 150px;border-radius: 50%;margin: 0 auto;margin-buttom: 10px;}.logo img{width: 100%;}.title, .sub-title {color: #212121;}.title{font-weight: bolder;font-size: 35px;text-align: center;}.sub-title{font-size: 10px;}.form {width: 100%margin-top: 30px;}.form-input {font-size: 10px;padding: 10px 20px 10px 5px;border: none;outline: none;background: none;align-self: center;}.username .password {display: block;border-radius: 30px;border: 1px solid rgb(0, 0, 0, 0, 2);margin: 10px 0;}.form svg{height: 25px;margin-bottom: -5;margin-left: 10px;margin-right: 5px;}.option{display: flex;flex-direction: row;justify-content: space-between;padding: 5px 0px;margin-bottom: 30px;}input.signin-btn{width: 100%;padding: 12px 10px;border: none;font-size: 10px;border-radius: 30px;background-color: #720e9e;color: #FFF;margin-bottom: 5px;
cursor: pointer;

    }
</style>

<body>
    <div class="login-div">
        <div class="logo"><img src="logo.png" alt="" width="150"></div>
        <div class="title">SIGN-UP</div>
        <div class="sub-title">To Create an account Fill-up this form</div>
        <div class="form">
        	<form method="post" action="connect.php">
            <div class="email">
                <svg class="svg-icon" viewBox="0 0 20 20">
                    <path d="M17.388,4.751H2.613c-0.213,0-0.389,0.175-0.389,0.389v9.72c0,0.216,0.175,0.389,0.389,0.389h14.775c0.214,0,0.389-0.173,0.389-0.389v-9.72C17.776,4.926,17.602,4.751,17.388,4.751 M16.448,5.53L10,11.984L3.552,5.53H16.448zM3.002,6.081l3.921,3.925l-3.921,3.925V6.081z M3.56,14.471l3.914-3.916l2.253,2.253c0.153,0.153,0.395,0.153,0.548,0l2.253-2.253l3.913,3.916H3.56z M16.999,13.931l-3.921-3.925l3.921-3.925V13.931z"></path>
                </svg>
                <input type="text" placeholder="Email" name="email"></input> </div>
            <div class="fullname">
                <svg class="svg-icon" viewBox="0 0 20 20">
                    <path d="M12.075,10.812c1.358-0.853,2.242-2.507,2.242-4.037c0-2.181-1.795-4.618-4.198-4.618S5.921,4.594,5.921,6.775c0,1.53,0.884,3.185,2.242,4.037c-3.222,0.865-5.6,3.807-5.6,7.298c0,0.23,0.189,0.42,0.42,0.42h14.273c0.23,0,0.42-0.189,0.42-0.42C17.676,14.619,15.297,11.677,12.075,10.812 M6.761,6.775c0-2.162,1.773-3.778,3.358-3.778s3.359,1.616,3.359,3.778c0,2.162-1.774,3.778-3.359,3.778S6.761,8.937,6.761,6.775 M3.415,17.69c0.218-3.51,3.142-6.297,6.704-6.297c3.562,0,6.486,2.787,6.705,6.297H3.415z"></path>
                </svg>
                <input type="text" placeholder="Fullname" name="fullname"></input> </div>
            <div class="username">
                <svg class="svg-icon" viewBox="0 0 20 20">
                    <path d="M12.075,10.812c1.358-0.853,2.242-2.507,2.242-4.037c0-2.181-1.795-4.618-4.198-4.618S5.921,4.594,5.921,6.775c0,1.53,0.884,3.185,2.242,4.037c-3.222,0.865-5.6,3.807-5.6,7.298c0,0.23,0.189,0.42,0.42,0.42h14.273c0.23,0,0.42-0.189,0.42-0.42C17.676,14.619,15.297,11.677,12.075,10.812 M6.761,6.775c0-2.162,1.773-3.778,3.358-3.778s3.359,1.616,3.359,3.778c0,2.162-1.774,3.778-3.359,3.778S6.761,8.937,6.761,6.775 M3.415,17.69c0.218-3.51,3.142-6.297,6.704-6.297c3.562,0,6.486,2.787,6.705,6.297H3.415z"></path>
                </svg>
                <input type="text" placeholder="Username" name="username"></input> </div>
            <div class="password">
                <svg class="svg-icon" viewBox="0 0 20 20">
                    <path d="M17.308,7.564h-1.993c0-2.929-2.385-5.314-5.314-5.314S4.686,4.635,4.686,7.564H2.693c-0.244,0-0.443,0.2-0.443,0.443v9.3c0,0.243,0.199,0.442,0.443,0.442h14.615c0.243,0,0.442-0.199,0.442-0.442v-9.3C17.75,7.764,17.551,7.564,17.308,7.564 M10,3.136c2.442,0,4.43,1.986,4.43,4.428H5.571C5.571,5.122,7.558,3.136,10,3.136 M16.865,16.864H3.136V8.45h13.729V16.864z M10,10.664c-0.854,0-1.55,0.696-1.55,1.551c0,0.699,0.467,1.292,1.107,1.485v0.95c0,0.243,0.2,0.442,0.443,0.442s0.443-0.199,0.443-0.442V13.7c0.64-0.193,1.106-0.786,1.106-1.485C11.55,11.36,10.854,10.664,10,10.664 M10,12.878c-0.366,0-0.664-0.298-0.664-0.663c0-0.366,0.298-0.665,0.664-0.665c0.365,0,0.664,0.299,0.664,0.665C10.664,12.58,10.365,12.878,10,12.878"></path>
                </svg>
                <input type="password" placeholder="Password" name="Password"></input> </div>
            <div class="position-role">
                <input type="radio" id="Admin" name="position" value="Admin">
                <label for="Admin">Admin</label></input>
                <br>
                <input type="radio" id="Employee" name="position" value="Employee">
                <label for="Emploee">Employee</label></input>
                <br>
                <input type="radio" id="Customer" name="position" value="Customer">
                <label for="Customer">Customer</label></input>
                <br> </div>
            <input type="submit" class="signin-btn">Create Account</input><div class="sign-up "><a href="Login.php ">Are you a member? Login Here!</a></div></div></div></div></form><H2>Advertisement</H2> <iframe width="900 " height="506 " src="https://www.youtube.com/embed/i9PhFzbyvrg
            " title="YouTube video player " frameborder="0 " allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture " allowfullscreen></iframe></body></html>

        //Code by: Given