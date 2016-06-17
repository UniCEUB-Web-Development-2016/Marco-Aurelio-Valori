<?php include("header.php")?>
                <h1>Registro de Usuário</h1>
                <form action="insertUser.php" method="post" name="form1">
                     <table class="table"> 
                        <tr>
                           <td>Nome:</td>
                           <td><input Placeholder="Nome:" class="form-control" type="text" name="name"></td>
                       </tr>
                       <tr>
                           <td>Sobrenome</td>
                           <td><input Placeholder="Sobrenome:" class="form-control" name="last_name" ></td> 
                       </tr> 
                       <tr>
                           <td>Email:</td>
                           <td><input  Placeholder="e-mail:" class="form-control"  name="email" maxlength="8"></td>
                       </tr> 
                       <tr>
                           <td>Senha:</td>
                           <td><input Placeholder="Senha:" class="form-control" type="text" name="password"></td>
                       </tr> 
					   <tr>
                        <select name="tipo_usuario">
						<option value="">Selecione</option>
						<option value="1">Usuario Comum</option>
						<option value="2">Administrador</option>
						</select><br /> 
					   </tr>
                       <tr>
                           <td>
                               <button class="btn btn-primary" href=index.php type="submit"/>Registrar</button>
                           </td>
                       </tr>
                       <tr>
                            <td>
                                <img src="logo-capes-65.png" alt="Smiley face" height="300" width="400">
                            </td>
                       </tr>                       
                    </table>
                </form>    
 <?php include("footer.php")?>