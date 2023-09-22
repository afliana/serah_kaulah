
<?php
    session_start();
	include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Halaman Admin</title>
    <link rel="stylesheet" href="login.css" />
  </head>
  <body>
    <div class="container">
      <div class="login">
        
        <form action="" method="POST">
          <h1>Login</h1>
          <hr />
          <p>MTS Raudlatul Ulum 3</p>

           <?php
               if(isset($_GET['msg'])){
                 echo "<div class='alert1 alert1-error'>".$_GET['msg']."</div>";
                }
            ?>  

          <div>
            <label>Username</label>
            <input type="text" name="user" placeholder="Username" />
          </div>

           <div>
            <label >Password</label>
            <input type="password"  name="pass" placeholder="Password" />
          </div>

           <input type="submit" name="submit" value="Login" class="btn">      
        </form>

        <?php

			    if(isset($_POST['submit'])){

                $user = mysqli_real_escape_string($conn, $_POST['user']);
                $pass = mysqli_real_escape_string($conn, $_POST['pass']);

               $cek = mysqli_query($conn, "SELECT * FROM pengguna WHERE username = '".$user."' ");
                if(mysqli_num_rows($cek) > 0){

                    $d = mysqli_fetch_object($cek);
                    if(md5($pass) == $d->password){

                        $_SESSION['status_login'] = true;
                        $_SESSION['uid']          = $d->id;
                        $_SESSION['uname']        = $d->nama;
                        $_SESSION['ulevel']       = $d->level;

                        echo "<script>window.location = 'admin/index.php'</script>";

                    }else{

                        echo '<div class="alert alert-error">Password salah</div>'; 
                    }

                }else{

                    echo '<div class="alert alert-error">Username tidak ditemukan</div>';
                }
            }
        ?>

      </div>

      <div class="right">
        <img src="image/login.png" alt="" />
      </div>

    </div>
  </body>
</html>
