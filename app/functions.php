<?php

function obtenerClasePrioridad($prioridad){

    switch ($prioridad) {
        case 'alta':
            return 'priority-alta';
        case 'media':
            return 'priority-media';
        case 'baja':
            return 'priority-baja';
        default:
            return 'Error';
    }
}

function renderizarTarea($tarea)
{
    $taskClasses = '';

    // Agregamos clase si la tarea está completada
    if (!empty($tarea['completado']) && $tarea['completado'] === true) {
        $taskClasses .= ' completado';
    }

    // Concatenamos la clase según la prioridad
    $taskClasses .= obtenerClasePrioridad($tarea['prioridad']);

    // Sanitizamos el título por seguridad
    $tituloSeguro = htmlspecialchars($tarea['titulo'], ENT_QUOTES, 'UTF-8');
    $clasesSeguras = htmlspecialchars(trim($taskClasses), ENT_QUOTES, 'UTF-8');

    // Construimos el <li> final y lo devolvemos
    return '<li class="' . $clasesSeguras . '">' . $tituloSeguro . '</li>';
}

?>