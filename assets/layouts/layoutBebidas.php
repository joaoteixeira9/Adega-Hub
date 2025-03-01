<section class="content">
        <?php
        $sql = "SELECT * FROM bebidas ORDER BY RAND()";
        $res = mysqli_query($conexao, $sql);
        echo "<ol class='bebidas'>"; 
            while ($l = mysqli_fetch_assoc($res)) {
                echo "<li class='" . $l['rotulo'] . "'>";
                    echo $l['nome'];
                    echo "<img src='./img/" . $l['nome'] .".png' alt=''>";
                echo "</li>";
            }
        echo "</ol>";
        mysqli_close($conexao);
        ?>
</section>