<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <title>IntroPhp8 Grupo X</title>
    <link rel="stylesheet" href="css/estilos.css"/>
    <link rel="stylesheet" href="css/menu.css"/>
    <link rel="stylesheet" href="css/problemas.css"/>
    <link href="https://fonts.googleapis.com/css?family=Rambla" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
</head>
<body>
    <section class="wrapper">
        <header>
            <h1 class="logo"><a href="index.html">StemPhp</a></h1>
            <nav>
                <ul>
                    <li><a href="index.php" class="current">Inicio</a></li>
                </ul>
            </nav>
        </header>
        <section id="contenedor">
            <section class="problema">
                <h2>Problema: Cálculo de Energía Generada</h2>
                <p>Determinar la cantidad de energía eléctrica generada por una placa fotovoltaica con los siguientes datos:</p>
            </section>

            <section class="datos">
                <h2>Datos:</h2>
                <ul>
                    <li>Área de la placa: 80 x 40 cm = 3200 cm²</li>
                    <li>Rendimiento: 20%</li>
                    <li>Tiempo: 12 horas = 720 minutos</li>
                    <li>Coeficiente de radiación: 0.9 cal/min·cm²</li>
                </ul>
            </section>

            <section class="formulas">
                <h2>Fórmulas</h2>
                <p><strong>Energía generada (Q):</strong> Q = K × t × S × r</p>
                <p><strong>Conversión a KWh:</strong> Q (KWh) = Q (Kcal) × 1.162222e-3</p>
            </section>

            <section class="calculos">
                <h2>Solución:</h2>
                <p>
                    <?php
                    $k = 0.9; 
                    $t = 720; 
                    $s = 80 * 40; 
                    $r = 0.2; 

                    
                    $q_kcal = $k * $t * $s * $r;

                    
                    $q_kwh = $q_kcal * 1.162222e-3;

                   
                    echo "Energía generada en Kcal: " . number_format($q_kcal, 2) . " Kcal<br>";
                    echo "Energía generada en KWh: " . number_format($q_kwh, 4) . " KWh<br>";
                    ?>
                </p>
            </section>

            
            <section class="resultado">
                <h2>Resultado:</h2>
                <div id="resultadoA">
                    <?php
                    echo "<strong>Energía total generada: " . number_format($q_kwh, 4) . " KWh</strong>";
                    ?>
                </div>
            </section>
        </section>

        <!-- Footer -->
        <footer class="pie">
            Creative Commons versión 4.0 SciSoft 2024
        </footer>
    </section>
</body>
</html>