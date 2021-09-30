<?php 

// transfer this to gw_helpers
// change name to gw_set_status($status)

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

        case 'For Approval': 
            $bg = 'bg-danger'; 
            break;

        case 'Done': 
                    $bg = 'bg-success'; 
                    break;

        case 'New': 
            $bg = 'bg-secondary'; 
            break;

        case 'Closed': 
            $bg = 'bg-success'; 
            break;

        case 'Modified': 
                    $bg = 'bg-info'; 
                    break;

        case 'With PO': 
                    $bg = 'bg-success'; 
                    break;

         // ORDER STATUS
         case 'PO Created': 
                    $bg = 'bg-secondary'; 
                    break;

        case 'Waiting for Availability': 
                    $bg = 'bg-warning';
                    break;

        case 'Waiting for Delivery': 
                    $bg = 'bg-success'; 
                    break;

        case 'Sending Docs to Suppier': 
                    $bg = 'bg-danger'; 
                    break;       
        
        case 'Closed': 
            $bg = 'bg-success'; 
            break; 

        default: $bg = 'bg-info';

    }
    
    return "<span class='badge {$bg}'>{$status}</span>";
}


?>