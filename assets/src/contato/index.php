<?php include "../../includes/header.php" ?>

<section class="contato">
    <div class="localizacao w-100">
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d467690.1435219436!2d-46.92490997026564!3d-23.682063653464876!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce448183a461d1%3A0x9ba94b08ff335bae!2zU8OjbyBQYXVsbywgU1A!5e0!3m2!1spt-BR!2sbr!4v1739885744899!5m2!1spt-BR!2sbr" 
            width="100%" 
            height="700" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>
    <div class="d-flex justify-content-center align-items-center m-4">
        <div class="enviarEmail w-25 d-flex justify-content-center align-items-center border border-1 rounded shadow">
            <form action="mailto:adm.adegahub@gmail.com" method="post" enctype="text/plain">
                <h4 class="m-3">Envie-nos um e-mail</h4>
                <div class="mb-3">
                    <label for="nome" class="form-label">Seu Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Seu E-mail</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="mensagem">Mensagem</label>
                    <textarea class="form-control" id="mensagem" name="mensagem" required></textarea>
                </div>
                <button type="submit" class="btn btn-outline-dark mb-3">Enviar</button>
            </form>
        </div>
    </div>
</section>

<?php include "../../includes/footer.php" ?>