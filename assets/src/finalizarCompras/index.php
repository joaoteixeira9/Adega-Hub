<?php
    session_start();
    include "../../includes/header.php";
?>
<div class="enderecoEntrega mt-5">
    <h1 class="text-center mb-4">Confirme seu endereço</h1>
    <div class="text-center">
        <div class="info-cep w-75 bg-light p-4 mx-auto">
            <div class="mb-3">
                <div class="form-group">
                    <label for="cep" class="form-label">Informe seu CEP</label>
                    <div class="input-group">
                        <span class="input-group-text bg-white"><i class="bi bi-geo-alt"></i></span>
                        <input type="text" class="form-control" id="cep" name="cep" placeholder="Digite seu CEP" required>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary" id="botaoCep">Buscar endereço</button>
        </div>
        
        <div class="endereco text-start">
            <div class="d-flex justify-content-center">
                <div class="mt-3 mb-5 d-grid w-50 border p-3 rounded shadow">
                    <label for="rua" class="form-label">Rua</label>
                    <input type="text" class="form-control" name="rua" id="rua">
                    <label for="numero" class="form-label">N°</label>
                    <input type="text" class="form-control" name="numero" id="numero">
                    <label for="bairro" class="form-label">Bairro</label>
                    <input type="text" class="form-control" name="bairro" id="bairro">
                    <label for="cidade" class="form-label">Cidade</label>
                    <input type="text" class="form-control" name="cidade" id="cidade">
                    <label for="estado" class="form-label">Estado</label>
                    <input type="text" class="form-control" name="estado" id="estado">
                    <button type="submit" class="mt-2 btn btn-primary" id="mostrarBotaoCep">Outro endereço</button>
                    <button type="submit" class="mt-2 btn btn-success" id="botaoConfirmarCep">Confirmar endereço</button>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="/Adega-Hub/assets/js/buscarCep.js"></script>
<?php
    include "../../includes/footer.php";
?>