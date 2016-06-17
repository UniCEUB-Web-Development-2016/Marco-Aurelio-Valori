<?php include("header.php")?>
                <h1>Busca por Cursos</h1>
                <form action="searchCourse.php" method="get" name="form1">
                     <table class="table">
                        <tr>
                           <td>Nome:</td>
                           <td><input class="form-control" type="text" name="name"></td>
                       </tr>
                       <tr>
                           <td>Tipo de Curso:</td>
                           <td><input Placeholder="(Exatas/Humanas) " class="form-control" type="text"  name="type" ></td> 
                       </tr> 
                        <tr>
                           <td>Ano-Base:</td>
                           <td><input class="form-control" type="text"  name="year" ></td> 
                       </tr> 
                       <tr>
                           
                           <td>Estudantes:</td>
                           <td><input class="form-control" type="text" name="students"></td>
                       </tr> 
                       <tr>
                           <td><button class="btn btn-primary" type="submit"/>Buscar</button></td>
                           
                       </tr>
                    </table>
                </form>    
 <?php include("footer.php")?>