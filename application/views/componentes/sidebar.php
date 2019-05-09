<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<nav id="sidebar" class="sidebar-wrapper">
                <div class="sidebar-content">
                    <div id="toggle-sidebar">
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                   
                    <div class="sidebar-header">
                        <!--<div class="user-pic">                                          
                           </div>-->
                        <div class="user-info">
                            <span class="user-name">
                                <strong></strong>
                            </span>
                            <span class="user-role"></span>
                            <span class="user-status">
                                <i class="fa fa-circle"></i>
                                <span>Online</span>
                            </span>
                        </div>
                    </div>
                    <!-- sidebar-search  -->
                    <div class="sidebar-menu">
                        <ul>
                            <li class="header-menu">
                                <span>Menu</span>
                            </li>
                            <li>
                                <a href=" 										
                                   ">
                                    <i class=""></i>
                                    <span>Início</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('Admin/listar_autores');?>">
                                    <i class=""></i>
                                    <span>Listar Autores/Livros</span>
                                </a>
                            </li>

                                <li>
                                    <a href="<?php echo base_url('Admin/obra_novos');?>">
                                        <i class=""></i>
                                        <span>Cadastrar Autor/Livro</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="<?php echo base_url('Admin/emprestimo');?>">
                                        <i class=""></i>
                                        <span>Empréstimos</span>
                                    </a>
                                </li>


                                <li>
                                    <a href="<?php echo base_url('Admin/usuario_cadastrar');?>">
                                        <i class=""></i>
                                        <span>Cadastrar Usuários</span>
                                    </a>
                                </li>


                                <li>
                                    <?=anchor('Admin/usuario_listar','Lista de Usário');?>
                                        <i class=""></i>
                                        <span>Listar Usuários</span>
                                    </a>
                                </li>


                                <li>
                                    <a href="usuario_emprestimos.php">
                                        <i class=""></i>
                                        <span>Meus Empréstimos</span>
                                    </a>
                                </li>
   
                            <li class="sair">
                                <a href="logout.php">
                                    <i class=""></i>
                                    <span >Sair</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- sidebar-menu  -->
                </div>
            </nav>