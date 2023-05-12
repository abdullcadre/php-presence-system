<?php
include_once "header.php";
include_once "nav.php";
include_once "functions.php";
$Funcionarios = getEmployees();
?>
<div class="row">
    <div class="col-12">
        <h1 class="text-center">Funcionarios</h1>
    </div>
    <div class="col-12">
        <a href="adicionarFuncionario.php" class="btn btn-info mb-2">Adicionar funcionario <i class="fa fa-plus"></i></a>
    </div>
    <div class="col-12">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Editar</th>
                        <th>Remover</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($Funcionarios as $employee) { ?>
                        <tr>
                            
                            <td>
                                <?php echo $employee->name ?>
                            </td>
                            <td>
                                <a class="btn btn-warning" href="editarFuncionario.php?id=<?php echo $employee->id ?>">
                                Editar <i class="fa fa-edit"></i>
                            </a>
                            </td>
                            <td>
                                <a class="btn btn-danger" href="removerFuncionario.php?id=<?php echo $employee->id ?>">
                                Remover <i class="fa fa-trash"></i>
                            </a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php
include_once "footer.php";
