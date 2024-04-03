<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de IMC</title>
</head>
<body>
    <h2>Calculadora de IMC (Índice de Massa Corporal)</h2>

    <form method="post">
        <label for="peso">Peso (kg):</label><br>
        <input type="number" id="peso" name="peso" step="0.01" min="0" required><br><br>

        <label for="altura">Altura (m):</label><br>
        <input type="number" id="altura" name="altura" step="0.01" min="0" required><br><br>

        <button type="submit" name="calcular">Calcular IMC</button>
    </form>

    <?php
    // Função para calcular o IMC
    function calcularIMC($peso, $altura) {
        return $peso / ($altura * $altura);
    }

    // Função para interpretar o IMC
    function interpretarIMC($imc) {
        if ($imc < 18.5) {
            return "Abaixo do peso";
        } elseif ($imc >= 18.5 && $imc < 25) {
            return "Peso normal";
        } elseif ($imc >= 25 && $imc < 30) {
            return "Sobrepeso";
        } elseif ($imc >= 30 && $imc < 35) {
            return "Obesidade grau I";
        } elseif ($imc >= 35 && $imc < 40) {
            return "Obesidade grau II";
        } else {
            return "Obesidade grau III";
        }
    }

    // Verifica se o formulário foi enviado
    if (isset($_POST['calcular'])) {
        $peso = $_POST['peso'];
        $altura = $_POST['altura'];

        // Calcula o IMC
        $imc = calcularIMC($peso, $altura);
        // Interpreta o IMC
        $interpretacao = interpretarIMC($imc);

        echo "<h3>Seu IMC é: $imc</h3>";
        echo "<p>Situação: $interpretacao</p>";
    }
    ?>
</body>
</html>
