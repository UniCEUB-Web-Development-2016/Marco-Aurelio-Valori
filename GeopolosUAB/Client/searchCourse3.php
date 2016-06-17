<?php include("header.php")?>
                <h1>Resultado da Busca por Cursos</h1>
                <form action="searchCourse.php" method="get" name="form1">
                     <table class="table">
                        <tr>
                           <td>Nome:</td>
                           <td>
							<input type="text" readonly="true" class="input_cad" name="nome" id="name" value="<?php echo row['name'];?>"/></td>
                       </tr>
                       <tr>
                           <td>Tipo de Curso:</td>
                           <td><input type="text" readonly="true" class="input_cad" name="tipo" id="type" value="<?php echo row['type'];?>"/></td> 
                       </tr> 
                        <tr>
                           <td>Ano-Base:</td>
                           <td><input type="text" readonly="true" class="input_cad" name="year" id="year" value="<?php echo row['year'];?>"/></td> 
                       </tr> 
					   <tr>
                           <td>Estudantes:</td>
                           <td><input type="text" readonly="true" class="input_cad" name="students" id="students" value="<?php echo row['students'];?>"/></td>
                       </tr> 
                       <tr> 	
                           
                           <td>
						    <button class="btn btn-primary" href="mainCourses.html" role="button">Voltar</button>
							<button class="btn btn-primary" href="delCourse.html" role="button">Excluir</button> 
							<button class="btn btn-primary" href="putCourse.html" role="button">Atualizar</button> 
                           </td>
                           
                       </tr>
					    
                    </table>
                </form>    
 <?php include("footer.php")?>