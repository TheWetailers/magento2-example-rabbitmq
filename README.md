Exemple de module utilisant RabbitMQ pour Magento 2

Pour envoyer un message utilisez la commande suivante :
```
$ php bin/magento tws:rabbitmq:publish "Mon message"
```

Pour lire le message utiliser la commande suivante :
```
$ php bin/magento queue:consumers:start TwsSimpleMessage
```
