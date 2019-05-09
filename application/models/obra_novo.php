 <main class="page-content">
            <div class="container-fluid">               
               <br/>  
               <div id="example_wrapper" class="dataTables_wrapper dt-bootstrap4">
                  <div class="row">
                     <div class="col-sm-4">
                        <h3>Novo Autor/Obra</h3>
                      
                        <form action="obra_salvar.php" method="post">
                           <label>Nome</label><br><input type="text" name="nome" class="form-control" required><br>
                           <label>Autor</label><br><input type="text" name="autor" class="form-control" required><br>
                           <label>Ano</label><br><input type="text" name="ano" class="form-control" required><br>
                           <label>Editora</label><br><input type="text" name="editora"class="form-control" required><br>
                           <input class="btn btn-success" type="submit" value="Salvar">
                        </form>
                     </div>
                  </div>
                  <div class="row">         
                  </div>
               </div>
            </div>
         </main>
         <!-- page-content" -->