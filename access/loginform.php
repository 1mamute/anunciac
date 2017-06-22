<?php
$user_login = new USER();

if(isset($_POST['btn-login']))
{
 $email = trim($_POST['txtemail']);
 $upass = trim($_POST['txtupass']);
 
 if($user_login->login($email,$upass))
 {		
	 header('Location: '.$_SERVER['PHP_SELF']);
	 exit();
 }
}
?>

<div class="container">
	<div class="row">

        <div class="modal" id="login-form">
		<div class="modal-dialog">
		<div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">x</button>
            <h1>Entrar no anunciaC</h1>
          </div>
          <div class="modal-body">
            <form method="post" action='' name="login_form">
			<p><input type="email" class="input-block-level" placeholder="Email address" name="txtemail" required /></p>
			<p><input type="password" class="input-block-level" placeholder="Password" name="txtupass" required /></p>
              <p><button class="btn btn-large btn-primary" type="submit" name="btn-login">Entrar</button>
                <a href="access/fpass.php">Esqueceu sua senha?</a>
              </p>
            </form>
          </div>
          <div class="modal-footer">
            Novo ao anunciaC?
            <a href="access/signup.php" class="btn btn-primary">Cadastre-se</a>
          </div>
			</div>
		</div>
		</div>
	</div>
</div>

		<?php 
		if(isset($_GET['inactive']))
		{
			?>
            <div class='alert alert-error'>
				<button class='close' data-dismiss='alert'>&times;</button>
				<strong>Desculpe!</strong> Essa conta não está ativada, cheque seu email para ativá-la. 
			</div>
            <?php
		}
		?>
        <form class="form-signin" method="post">
        <?php
        if(isset($_GET['error']))
		{
			?>
            <div class='alert alert-success'>
				<button class='close' data-dismiss='alert'>&times;</button>
				<strong>Wrong Details!</strong> 
			</div>
            <?php
		}
		?>