

<?php

    require_once "Livro.php"; // indica a classe pro arquivo puxar

            
    $livro1 = new Livro();
    $livro1->titulo = "O Hobbit";
    $livro1->autor = "J. R. R. Tolkien";
    $livro1->numeroPaginas = 336 ;
    $livro1->preco = 45.00;
            

    echo "<p> {$livro1->titulo}, de {$livro1->autor} | {$livro1->numeroPaginas} páginas | R$ {$livro1->preco} </p>";

?>