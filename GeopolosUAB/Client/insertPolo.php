<?php include("header.php")?>
                <h1>Cadastro do Polos</h1>
                <form action="insertPolo2.php" method="post" name="form1">
                     <table class="table">
                        <tr>
                           <td>Nome:</td>
                           <td><input Placeholder="Insira o nome " class="form-control" type="text" name="name"></td>
                       </tr>
                       <tr>
                           <td>Status:</td>
                           <td><input Placeholder="Insira o status (Ativo, Desligado, Inativo ou Provisório) " class="form-control" name="status" ></td> 
                       </tr> 
                        <tr>
                           <td>Situação:</td>
                           <td><input Placeholder="Insira a Situação (AA, FR, AP, NA) " class="form-control" name="situation" ></td> 
                       </tr> 
                       <tr>
                           <td>Longitude:</td>
                           <td><input  Placeholder="Insira a Longitude " class="form-control" type="lon" name="lon" ></td>
                       </tr> 
                       <tr>
                           <td>Latitude:</td>
                           <td><input Placeholder="Insira a Latitude " class="form-control" type="text" name="lat"></td>
                       </tr> 
                       <tr>
                           <td>UF:</td>
                           <td><input Placeholder="Insira o Estado " class="form-control" type="text" name="uf"></td>
                       </tr>  
                       <tr>
                           <td>Ano-Base:</td>
                           <td><input Placeholder="Insira o Ano-Base " class="form-control" type="text" name="year"></td>
                       </tr>              
                       <tr>
                           <td>
                               <button class="btn btn-primary" type="submit"/>Cadastrar</button>
                           </td>
                           
                       </tr>
                    </table>
                </form>    
 <?php include("footer.php")?>