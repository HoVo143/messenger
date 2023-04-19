<?php
    session_start();
    if(isset($_SESSION['unique_id'])){
        header("location: users.php");
    }  
?>
<?php
    include_once "doctype.php";
?>
<body>
    <div class="wrapper">
        <section class="form login">
            <header>Realtime chat app</header>
            <form action="#">
                <div class="error-txt">This is an error message!</div>
                    <div class="field input">
                        <label>Email</label>
                        <input type="text" name="email">
                    </div>
                    <div class="field input">
                        <label>password</label>
                        <input type="password" name="password">
                        <i class="fas fa-eye"></i>
                    </div>
                    <div class="field button">
                        <input type="submit" value="continue to chat">
                    </div>
            </form>
            <div class="link">not yet signed up? <a href="index.php">signup now</a></div>
        </section>
    </div>
    <script src="/js/pass_show_hide.js"></script>
    <script src="/js/login.js"></script>

</body>
</html>