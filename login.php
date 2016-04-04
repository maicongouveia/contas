<?php
// Inicia a sessão
session_start();
?>
<!DOCTYPE html>
<html lang="pt" class="no-js">
<head>
  <title>Login - Gomes GB</title>

    <!-- Importando BootStrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- Mobile First -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Importando CSS Particular 
    <link rel="stylesheet" type="text/css" href="css/estiloPrincipal.css">
    -->
    <!-- Importanto CSS para apenas a tela de login - Jean -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" type="text/css" href="assets/css/demo.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />


    <!-- Caracteres Especiais -->
    <meta charset="UTF-8">
    
    <!-- Importando BootStrap -->    
    <link href="css/bootstrap.css" rel="stylesheet">
   
</head>

<body>
  <div class="container">
            <section>       
                <div id="container_demo" >
                    <!-- VERSAO DESKTOP -->
                    <span class="visible-lg visible-md visible-sm">
                        <div id="wrapper">
                            <div id="login" class="animate form">
                                <form action='index.php' method="POST"> 
                                    <h1>Login - Gomes GB</h1> 
                                    <p> 
                                        <label for="username" class="uname" data-icon="u" > Email </label>
                                        <input type="email" id="email" name='email' required="required" placeholder="Email@mail.com"/>
                                    </p>
                                    <p> 
                                        <label for="password" class="youpasswd" data-icon="p"> Senha </label>
                                        <input type="password" id="senha" name='senha' required="required" placeholder="****" /> 
                                    </p>    
                                    <p class="login button"> 
                                        <input type="submit" value="Entrar" /> 
                                    </p>
                                    <p> 
                                        <?php if( ! empty($_SESSION['loginErro'])): ?>
                                            <div>
                                              <center><?php echo $_SESSION['loginErro']; ?></center>
                                            </div>
                                        <?php endif; ?>
                                    </p>  
                                </form>
                            </div>  
                        </div>
                    </span>
                    <!-- Versao Mobile -->
                    <span class="visible-xs">
                        <div id="wrapper-mobile">
                            <div id="login" class="animate form">
                                <form action='index.php' method="POST"> 
                                    <h1>Login - Gomes GB</h1> 
                                    <p> 
                                        <label for="username" class="uname" data-icon="u" > Email </label>
                                        <input type="email" id="email" name='email' required="required" placeholder="Email@mail.com"/>
                                    </p>
                                    <p> 
                                        <label for="password" class="youpasswd" data-icon="p"> Senha </label>
                                        <input type="password" id="senha" name='senha' required="required" placeholder="****" /> 
                                    </p>    
                                    <p class="login button"> 
                                        <input type="submit" value="Entrar" /> 
                                    </p>
                                    <p> 
                                        <?php if( ! empty($_SESSION['loginErro'])): ?>
                                            <div>
                                              <center><?php echo $_SESSION['loginErro']; ?></center>
                                            </div>
                                        <?php endif; ?>
                                    </p>  
                                </form>
                            </div>  
                        </div>
                    </span>  
                </div>  
            </section>
 </div>
</body>
  
</html>