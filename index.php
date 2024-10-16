<?php

declare(strict_types=1);

use OopExercises\Enum\Order\OrderStatus;

require 'vendor/autoload.php';

function order(OrderStatus $status): string
{
    return match($status) {
        OrderStatus::Pending => 'Pedido pendente...',
        OrderStatus::Processing => 'Pedido em processamento...',
        OrderStatus::Completed => 'Pedido concluído...',
        OrderStatus::Cancelled => 'Pedido cancelado...',
        OrderStatus::Refunded => 'Pedido reembolsado...',
        OrderStatus::Failed => 'Pedido falhou...',
        OrderStatus::Trash => 'Pedido excluído...',
    };
}

echo order(OrderStatus::Processing) . PHP_EOL;