<?php

include('httpful.phar');
include("header.php"); 

$response = \Httpful\Request::post('http://localhost/GeopolosUAB/user/?name=')->send();
$request_response = json_decode($response->body);
foreach($request_response as $value)
{
	echo $value->name . '<br>';
	
}?>
                <h1>Formulario de login do usuário</h1>
                <form action="loginUser.php" method="get" name="formogin" id="formlogin">-->
                     <table class="table">
                        <tr>
                           <td>Nome:</td>
                           <td><input Placeholder="Insira o nome:"  type="text" name="name" id="name"></td>
                       </tr>
                       <tr>
                           <td>senha:</td>
                           <td><input Placeholder="Insira a senha:" type="text" name="password" id="password"></td>
                       </tr>                
                       <tr>
                           <td>
                               <button class="btn btn-primary" type="submit" value="submit" name="submit"/>Entrar</button>
                           </td>
                       </tr>
                    </table>
</form> 