<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav><li><ul><a href="/">HOME</a></ul></li></nav>

    <?php
        $nome = "Thiago"; //Variável.
        const NACIONALIDADE = "Brasileiro";// Constante não é interpolável e se escreve em maiúsculo.
        const _TxZ = "Novo";

        echo "Oi, $nome! Vocé é ".NACIONALIDADE." e "._TxZ;


        //REGRAS PARA NOMES IDENTIFICADORES
        // 01 - Variáveis sempre começam com o símbolo $
        // 02 - O segundo caractere pode ser letra ou o símbolo_
        // 03 - Aceita caracteres [a-z],[A-Z],[0-9] e [_]
        // 04 - Aceita caracteres da tabela ASCII a partir de 128
        // 05 - Aceita caracteres acentuados como á, õ, ç
        // 06 - A linguagem é case sensitive em relação aos nomes
        // 07 - Nomes especiais como $this não podem ser usados

        //RECOMENDAÇÕES PARA DAR NOMES
        // 01 - Tente dar nomes claros e de fácil identificação
        // 02 - Evite nomes muito curtos ou muito longos
        // 03 - Defina um padrão e siga em todo o projeto
        // 04 - Para variáveis, dê preferência a letras minúsculas
        // 05 - Para constantes, dê preferência a letras maiúsculas
        // 06 - Use camelCase para métodos e atributos
        // 07 - Use o SNAKE_CASE para nomear constantes

    ?>
</body>
</html>