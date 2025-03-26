<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <title>Testando</title>
</head>
<body>
    
    <div id="resultado"></div>

    <script>
        const url = "http://localhost/curso_php_25/ContaBancaria.php?id=1&idDestino=3&valor=500";

        $.get(url).then((contas) => {
            
            let htmlUl = "<ul>";

            $.each(contas, function (idx, conta) {
                    htmlUl += `<li>id: ${conta.id}</li>`;
                    htmlUl += `<li>Nome: ${conta.nome_titular}</li>`;
                    htmlUl += `<li>Saldo: ${conta.saldo}</li>`;
                    htmlUl += `_____________________`;
            });

            htmlUl += "</ul>";
            
            $("#resultado").html(htmlUl);
        });
    </script>
</body>
</html>
