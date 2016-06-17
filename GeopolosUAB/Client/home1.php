<!DOCTYPE html>
<html>
    <head>
     
        <title>Cadastro de usuario</title>
        <meta charset="utf-8">
        <script language="JavaScript" type="text/javascript" src="MascaraValidacao.js"></script>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/cadastro.css" rel="stylesheet">
    </head>
    <body>
        <div class="navbar navbar-inverse navbar-fixed-top">           
            <div class="container">
                <div>
                    <ul class="nav navbar-nav">
                        <li><img src="logo-capes-65.png" height="150" width="150"></li>
                        <li><a href="homeGeo.php">Tela inicial </a></li>
                        <li><a href="insertUser.php">Adicionar Usuario </a></li>
                        <li><a href="insertCourse.php">Adiciona Curso </a></li>
                        <li><a href="insertPolo.php">Adiciona Polo </a></li>
                        <form action="buscarProduto.php" method="get">
                        <input class="posicaobusca" type="text" id="txtBusca" name="name" placeholder="Buscar..."/>
                        <button class="btn btn-link:focus" type="submit"/>Buscar</button>
                        </form>
                    </ul>    
                </div>
            </div>    
        </div>    
        <div class="container">    
            <div class="principal">	                    <center>
                        <table>
                            <form action="loginUser.php" method="post" name="form1">
                            <tr>
                               <td>	
                               <h1> Registrado com sucesso! </h1>
                               <br>
                               </td>    
                           </tr>
                           </form>
                       </table>
                       </center>

			</div>    
        </div>
    </body>
</html>