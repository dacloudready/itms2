<?php 

function set_status($status)
{
    switch($status)
    {
         // PRIO STATUS
        case 'Low': 
                    $bg = 'bg-secondary'; 
                    break;

        case 'Normal': 
                    $bg = 'bg-primary';
                     break;

        case 'Critical': 
                    $bg = 'bg-danger'; 
                    break;

        case 'Urgent': 
                    $bg = 'bg-warning'; 
                    break;

        // REQUEST STATUS
        case 'Not yet started': 
                    $bg = 'bg-secondary'; 
                    break;

        case 'In-progress': 
                    $bg = 'bg-warning'; 
                    break;

        case 'Suspend': 
                    $bg = 'bg-secondary'; 
                    break;

        case 'For Confirmation':
                     $bg = 'bg-warning'; 
                     break;

        case 'For Follow-up': 
                    $bg = 'bg-danger'; 
                    break;

        case 'Done': 
                    $bg = 'bg-success'; 
                    break;

        case 'Modified': 
                    $bg = 'bg-danger'; 
                    break;

        case 'With PO': 
                    $bg = 'bg-info'; 
                    break;

        default: $bg = 'bg-info';

    }
    
    return "<span class='badge {$bg}'>{$status}</span>";
}


?>