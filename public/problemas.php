<?php

$tasks = [
    [
        'title' => 'Comprar víveres',
        'completed' => false,
        'priority' => 'alta',
    ],
    [
        'title' => 'Enviar reporte semanal',
        'completed' => true,
        'priority' => 'media',
    ],
    [
        'title' => 'Actualizar dependencias',
        'completed' => false,
        'priority' => 'media',
    ],
    [
        'title' => 'Preparar presentación',
        'completed' => false,
        'priority' => 'alta',
    ],
    [
        'title' => 'Limpiar bandeja de entrada',
        'completed' => true,
        'priority' => 'baja',
    ],
];

?>

<?php

require_once __DIR__ . '/header.php';
?>

<main id="main-content">
   
    <h1>Bienvenido a TaskFlow</h1>
    <p>Aquí va el contenido principal de la página.</p>
  
</main>

<?php

require_once __DIR__ . '/footer.php';
?>
