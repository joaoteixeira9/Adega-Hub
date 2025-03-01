<?php
    session_start();
    include "../../includes/header.php";
?>
<div class="enderecoEntrega mt-5">
    <h1 class="text-center mb-4">Confirme seu endereço</h1>
    <div class="text-center">
        <form class="w-75 bg-light p-4 mx-auto">
            <div class="mb-3">
                <div class="form-group">
                    <label for="cep" class="form-label">Informe seu CEP</label>
                    <div class="input-group">
                        <span class="input-group-text bg-white"><i class="bi bi-geo-alt"></i></span>
                        <input type="text" class="form-control" id="cep" name="cep" placeholder="Digite seu CEP" required>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Buscar Endereço</button>
        </form>
    </div>
</div>
<?php
    include "../../includes/footer.php";
?>