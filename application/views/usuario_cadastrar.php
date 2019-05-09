<main class="page-content">
            <div class="container-fluid">               
               <br/>  
               <div id="example_wrapper" class="dataTables_wrapper dt-bootstrap4">
                  <div class="row">
                     <div class="col-sm-4">
                        <h3>Novo Usuário</h3>

                         <?php 
                          if(isset($_GET["msg_cadastro"])){
                               if ($_GET["msg_cadastro"] == 1){
                                   echo "Nome de usuário ou e-mail já existe !<br>";
                               }
                               if ($_GET["msg_cadastro"] == 2){
                                   echo "Usuário foi salvo !<br>";
                               }if ($_GET["msg_cadastro"] == 3){
                                   echo "Erro ao cadastrar, contate o desenvolvedor!<br>";
                              }if ($_GET["msg_cadastro"] == 4){
                                   echo "Campos estão em Branco !<br>";
                               }
                           }
                       ?> 
                     <form method="POST" action="verificar_cadastro.php">
                        <label>Nome:</label><br><input type="text" name="nome" class="form-control" required><br>
						<label>Login:</label><br><input type="e-mail" name="email" class="form-control" required><br>
                        <label>Senha:</label><br><input type="password" name="senha" class="form-control" required><br>
                        <label>Usuário é um administrador ?</label><br>
						<input type="radio" name="usuario_admin" value="1"> Sim <input type="radio" name="usuario_admin" value="0"> Não<br><br>
                        <input type="submit" class="btn btn-success" value="Cadastrar" name="Cadastrar">
                     </form>
                     </div>
                  </div>
                  <div class="row">         
                  </div>
               </div>
            </div>
         </main>