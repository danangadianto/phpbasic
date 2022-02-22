<!-- For Danang:  -->
<!-- Separate components and functional logic -->
<!-- Separate components into parts that it can be reused -->
<?php include 'components/head.php'; ?>

<body>
    <div class="container">
        <h1>LOGIN TO ACCESS THE WEB FOR FREE</h1>

        <!-- Kasih nama class yg bener, ini nama class ato function? -->
        <div class="login">
            <form action="controller/login-controller.php" method="POST">
                <!-- Jangan kasih nama class sama keq nama tag -->
                <!-- Jangan kasih nama variable sama keq nama function bawaan -->
                <div class="label">
                    <label for="name">Nama</label>
                    <input type="text" name="name" id="name">
                </div>
                <!-- Jangan kasih nama class sama keq nama tag -->
                <!-- Jangan kasih nama variable sama keq nama function bawaan -->
                <div class="label">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password">
                </div>
                <!-- Jangan kasih nama class sama keq nama tag -->
                <!-- Jangan kasih nama variable sama keq nama function bawaan -->
                <div class="button">
                    <button type="submit">Login</button>
                    <a href="">
                        <p style="color: blue;">Forgot Your Password?</p>
                    </a>
                </div>
            </form>
        </div>
    </div>
<?php include 'components/footer.php'; ?>
