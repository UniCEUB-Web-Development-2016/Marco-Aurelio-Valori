<?php include("header.php")?>
                <h1>Registro de Cursos</h1>
                <form action="insertCourse.php" method="post" name="form1">
                     <table class="table"> 
                        <tr>
                           <td>Nome:</td>
                           <td><input Placeholder="Nome do Curso" class="form-control" type="text" name="name"></td>
                       </tr>
                       <tr>
                           <td>Tipo:</td>
                           <td><input Placeholder="Tipo de Curso (Humanas/Exatas)" class="form-control" name="type" ></td> 
                       </tr> 
                       <tr>
                           <td>Ano-Base:</td>
                           <td><input  Placeholder="Ano das informações" class="form-control"  name="year" maxlength="8"></td>
                       </tr> 
                       <tr>
                           <td>Estudantes:</td>
                           <td><input Placeholder="Quantidade de estudantes cursando" class="form-control" type="text" name="students"></td>
                       </tr> 
                                      
                       <tr>
                           <td>
                               <button class="btn btn-primary" type="submit"/>Registrar</button>
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