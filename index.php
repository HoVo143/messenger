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
        <section class="form signup">
            <header>Realtime chat app</header>
            <form action="#" enctype="multipart/form-data">
                <div class="error-txt"></div>
                <div class="name-details">
                    <div class="field input">
                        <label>First Name</label>
                        <input type="text" name="fname" required placeholder="First name">
                    </div>
                    <div class="field input">
                        <label>last Name</label>
                        <input type="text" name="lname" required placeholder="last name">
                    </div>
                </div>
                    <div class="field input">
                        <label>Email</label>
                        <input type="text" name="email" required>
                    </div>
                    <div class="field input">
                        <label>password</label>
                        <input type="password" name="password" required>
                        <i class="fas fa-eye"></i>

                    </div>
                    <div class="field image">
                        <label>select image</label>
                        <input type="file" name="image">
                    </div>
                    <div class="field button">
                        <input type="submit" value="continue to chat">
                    </div>
               
            </form>
            <div class="link">Already signed up? <a href="/login.php">login</a></div>
        </section>
    </div>
    <script src="/js/pass_show_hide.js"></script>
    <script src="/js/signup.js"></script>
</body>
</html>