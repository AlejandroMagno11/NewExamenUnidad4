<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <title>CiTIM Grupo XB</title>
    <link rel="stylesheet" href="css/problemaStem.css"/>
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <script src="js/calcularStem.js"></script>
</head>
<body>
    <section class="wrapper">
        <header>
            <h1 class="logo">Uso de la Ciencia, Tecnología, Ingeniería y Matemáticas para resolver problemas</h1>
        </header>
        <section id="contenedor">
            <section class="problema">
                <h2>Problema: Central hidroelectrica</h2>
                <p>Calcula la potencia real de una central hidroelectrica <strong>(en CV y en KW)</strong> si el salto de agua es de <strong>15m</strong>, la turbina que emplea es Kaplan de rendimiento <strong>94%</strong> y el caudal es de <strong>19m<sup>3</sup>/s</strong>. </p>
            </section>
            <section class="esquemaProblema">
                <h2>Imagen referencia:</h2>
                <center>
                    <img class="imgProblema" src="images/problema.jpg" alt="Esquema del problema">
                </center>
            </section>
            <section class="formulas">
                <h2>Fórmulas</h2>
                <ul>
                    <li><strong>1-.<em> Q = K * t * S * r en Kcal</strong></em></li>
                    <li><strong>2-.<em> Convertir a Kwh (base 1h) </em></strong></li>
                </ul>
            </section>
            <section class="datos">
                <h2>Datos:</h2>
                <ul>
                    <li><strong>Q = </strong>Energia generada</li>
                    <li><strong>t = </strong>Tiempo, en minutos</li>
                    <li><strong>S = </strong>Area, en cm<sup>2</sup></li>
                    <li><strong>r = </strong>Rendimiento</li>
                    <li><strong>K = </strong>Coeficiente de radiacion</li>
                </ul>
            </section>
            <section class="calculos">
                <h2>Solución</h2>
                <p>Primero se consigue la Pt utilizando los valores en Q, g y h. Luego con el valor de Pt sacaremos el valor de Pr multiplicando Pt por el rendimiento (0.94%). Finalmente se convierte el resultado de W a CV</p>
            </section>
            <section class="resultado">
            <h2>Resultado:</h2>
            <div id="resultadoA">
                <?php
                    $Valor_Inicial = 1000;
                    $Q = 19;
                    $g = 9.8;
                    $h = 15;
                    $Rendimiento = 0.94;
                    $Convertir = 0.001358639760495;


                    $Pt = $Valor_Inicial * $Q * $g *$h;

                    $Pr = $Pt * $Rendimiento;

                    $Resultado = $Pr * $Convertir;

                    echo "<p><strong>La potencia real que genera la centra hidroelectrica es de; </strong> " . round($Resultado, 2) . " CV</p>";
                ?>
            </div>
        </section>
        </section>
        <footer class="pie">
            Alumno: Jesus Alejandro Osorio Morales
            - Num. Control: 22090712
            - Programacion Web XB
            - Examen Unidad 4
        </footer>
    </section>
</body>
</html>