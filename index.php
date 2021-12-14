<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Em PHP</h1>
  <?php

  // A variável Cifra guarda a letra da música cifrada
  $cifra = "E7     Amaj7
Antes de eu falar
            A9
Tu cantavas sobre mim
C#m               B4
    Tu tens sido tão
        A9
Tão bom     pra mim

C#m                   B4
    Antes de eu respirar
              A9
Sopraste Tua vida em mim
C#m               B4
    Tu tens sido tão
        A9
Tão bom    pra mim";
  // Esse é o padrão (regex) que utilizei para reconhecer todos os acordes da letra cifrada da variável acima
  $pattern = "/([ABCDEFG](#|##|b|bb|sus|maj|min|dim|aug|[1-9]|m|M|º|\-|\+|\/|\(|\))+)/";
  // Apliquei abaixo o comando preg_replace que coloca todas ocorrências (acordes) encontradas entre as tags </b>
  $cifra = preg_replace($pattern, "<b>$1</b>", $cifra);
  echo "<pre>". $cifra ."</pre>";
  ?>

  <h1>Em JS</h1>
  <pre class="cifra"></pre>

  <script>
    var cifra = `E7     Amaj7
Antes de eu falar
             A9
Tu cantavas sobre mim
C#m               B4
    Tu tens sido tão
         A9
Tão bom     pra mim

C#m                   B4
    Antes de eu respirar
              A9
Sopraste Tua vida em mim
C#m               B4
    Tu tens sido tão
        A9
Tão bom    pra mim`;

    var pattern = /([ABCDEFG](#|##|b|bb|sus|maj|min|dim|aug|[1-9]|m|M|º|\-|\+|\/|\(|\))+)/g;
    var resultadoCifra = cifra.replace(pattern, '<b>$&</b>');

    console.log(resultadoCifra);

    document.querySelector('.cifra').innerHTML = resultadoCifra;

  </script>
</body>
</html>