<?php

namespace Tws\Rabbitmq\Model;


class MessageConsumer
{
    /**
     * @param Customer $customer
     */
    public function processMessage(string $message)
    {
        echo "Reçu: $message\n";
    }
}
