<main class="page-content">
                <div class="container-fluid">
                    <h1>Lista de Obra(s)</h1>
                    <br/>  
                    <?php echo $wlad;?>
                    <div id="example_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="example" class="table table-striped table-bordered dataTable" style="width: 100%;" role="grid" aria-describedby="example_info">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending">ID</th>
                                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending">Nome</th>
                                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending">E-mail</th>
                                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending">Senha</th>
                                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending">Admin</th>
                                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending">Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php if(isset($linha2)){?>
                                        <?php while ($linha = mysqli_fetch_assoc($resultado)): ?>
                                            <tr role="row" class="odd">
                                                <td><?= $linha["id"]; ?></td>
                                                <td><?= $linha["nome"]; ?></td>
                                                <td><?= $linha["email"]; ?></td>
                                                <td><?= $linha["senha"]; ?></td>
                                                <td><?= $linha["admin"] == 1 ? "Sim" : "Não"; ?></td>                                 
                                                <td>
                                                    <div class='btn-group' data-toggle='buttons'>                                       
                                                        <?php if (isset($_SESSION["admin"]) && ($_SESSION["admin"] == 1)): ?>
                                                            <a href="usuario_form_alterar.php?id=<?= $linha["id"]; ?>"><button class='btn btn-warning btn-xs'>Alterar</button></a>
                                                            <a href="usuario_excluir.php?id=<?= $linha["id"]; ?>"><button class='btn btn-danger btn-xs'>Excluir</button></a>
                                                        <?php endif; ?>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php endwhile; ?>
                                        <?php } ?>
                                    </tbody>
                                    <tfoot>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <div class="row">         
                        </div>
                    </div>
                </div>
            </main>