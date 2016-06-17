<?php include("header.php")?>
<?phpinclude('httpful.phar')?>

                <h1>Resultado da Busca</h1>
                <form action="searchPolo2.php" method="get" name="form1">
                     <table class="table">
                        <tr>
                           <td>Nome:</td>
                           <td><input class="form-control" type="text" name="polos.name"></td>
                       </tr>
                       <tr>
                           <td>Status:</td>
                           <td><input class="form-control" type="text"  name="status" ></td> 
                       </tr> 
					   <tr>
                           <td>Situação:</td>
                           <td><input class="form-control" type="text" name="situation"></td>
                       </tr>
                        <tr>
                           <td>Ano-Base:</td>
                           <td><input class="form-control" type="text"  name="year" ></td> 
                       </tr> 
                       <tr>
                           <td>UF:</td>
                           <td><input class="form-control" type="text" name="uf"></td>
                       </tr> 

                       <tr>
                           <td><button class="btn btn-primary" type="submit"/>Buscar</button></td>
                           
                       </tr>
                    </table>
                </form>    
 <?php include("footer.php")?>