<?php
include_once "header.php";
include_once "nav.php";
?>
<div class="row">
    <div class="col-12">
        <h1 class="text-center">Adicionar funcionario</h1>
    </div>
    <div class="col-12">
        <form action="SalvarFuncionario.php" method="POST">
            <div class="form-group">
                <label for="name">Nome</label>
                <input name="name" placeholder="Nome" type="text" id="name" class="form-control" required>
            </div>
            <div class="form-group">
                <button class="btn btn-success">
                    Guardar <i class="fa fa-check"></i>
                </button>
            </div>
        </form>
    </div>
</div>
<?php
include_once "footer.php";
