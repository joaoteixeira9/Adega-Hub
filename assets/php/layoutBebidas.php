<section class="content">
        <?php
        $sql = "select * from bebidas";
        $res = mysqli_query($conexao, $sql);
        echo "<ol class='bebidas'>";
            while ($l = mysqli_fetch_assoc($res)) {
                echo "<li class='" . $l['rotulo'] . "'>";
                    echo $l['nome'];
                    echo "<img src='./img/" . $l['nome'] .".png' alt='imagens-bebidas'>";
                echo "</li>";
            }
        echo "</ol>";
        mysqli_close($conexao);
        ?>
    </section>
    <img src="../../assets/img/ballantines.png" alt="">