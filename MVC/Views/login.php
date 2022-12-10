<?php 
if(isset($_POST['email']) )
{

  $conn = new PDO("mysql:dbname=".$GLOBALS['DB_NAME'].";host=".$GLOBALS['DB_HOST']
  , $GLOBALS['DB_USER']
  , $GLOBALS['DB_PASS']);

  $cmd = $conn->prepare("select * from usuario where email=:e and password=:p");
  $cmd->bindValue(':e',$_POST['email']);
  $cmd->bindValue(':p',$_POST['pass']);

  $cmd->execute();
  $res = $cmd->fetchall(PDO::FETCH_ASSOC);


  if (count($res)==0){
    echo 'senha errada';
  } else {
    $_SESSION["USUARIO"]=$res[0];
    flush();
    echo "<script>  location.href = 'https://msansone.net' </script>";
    die();
  }

}
?>
<form action="/" method="POST">
  <div class="hero is-fullheight">
    <div class="hero-body is-justify-content-center is-align-items-center">
      <div class="columns is-flex is-flex-direction-column box">
        <div class="column">
          <label for="email">Email</label>
          <input class="input is-primary" type="text" placeholder="Email address" name="email" id="email">
        </div>
        <div class="column">
          <label for="Name">Password</label>
          <input class="input is-primary" type="password" placeholder="Password" name="pass" id="pass">
          <a href="forget.html" class="is-size-7 has-text-primary">forget password?</a>
        </div>
        <div class="column">
          <button class="button is-primary is-fullwidth" type="submit">Login</button>
        </div>
        <div class="has-text-centered">
          <p class="is-size-7"> Don't have an account? <a href="#" class="has-text-primary">Sign up</a>
          </p>
        </div>
      </div>
    </div>
  </div>
</form>
