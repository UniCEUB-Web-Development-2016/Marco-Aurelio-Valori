<?php include("header.php")?>
                <h1>Cadastro do Cursos</h1>
                <form action="insertCourse.php" method="post" name="form1">
                     <table class="table">
                        <tr>
                           <td>Nome:</td>
                           <td><input Placeholder="Nome do Curso " class="form-control" type="text" name="name"></td>
                       </tr>
                       <tr>
                           <td>Tipo de Curso:</td>
                           <td><input Placeholder="Insira tipo (Exatas/Humanas) " class="form-control" type="text"  name="type" ></td> 
                       </tr> 
                        <tr>
                           <td>Ano-Baser:</td>
                           <td><input Placeholder="Insira o Ano-Base " class="form-control" type="text"  name="year" ></td> 
                       </tr> 
                       <tr>
                           <td>Estudantes:</td>
                           <td><input  Placeholder="Insira a quantidade de estudantes cursando " class="form-control" type="text" name="students" ></td>
                       </tr> 
                       <tr>
                           
                           <td>
                               <button class="btn btn-primary" type="submit"/>Cadastrar</button>
                           </td>
                           
                       </tr>
                    </table>
                </form>    
 <?php include("footer.php")?>