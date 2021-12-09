<?php
    $isLogin = 0;
    $level = 0;
    session_start();
    if(isset($_COOKIE['username'])) {
        $_SESSION['username'] = $_COOKIE['username'];
        $_SESSION['level'] = $_COOKIE['level'];
    }
    if(isset($_SESSION['username'])) {
        $isLogin = 1;
        $level = $_SESSION['level'];
    }
?>
<script>
    setTimeout(() => {
    var loginDiv = document.getElementById("login-register");
    var adminNav = document.getElementById("adminNav");
    var userIcon = document.getElementById("user-icon");
    var isLogin = "<?php echo $isLogin; ?>";
    console.log("login: " + isLogin);
    if (isLogin == 0) {
        loginDiv.style.display = "block";
        userIcon.style.display = "none";
    }
    else {
        loginDiv.style.display = "none";
        userIcon.style.display = "block";
    }
}, 100);
function checkLevel() {
    var level = "<?php echo $level; ?>";
    console.log("Level: " + level)
    if(level == 1) {
        adminNav.style.display = "none";
    }
}
setTimeout(checkLevel, 500 );
</script>