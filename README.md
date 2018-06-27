# Modulo ejemplo para cambio de tema por rol de usuario

Lo primero es implementar la interfaz “ThemeNegotiatorInterface” de Drupal 8, al realizar la implementación es necesario definir los metodos applies y determineActiveTheme, el primero consiste en determinar si participa en la negociación del cambio del tema y el segundo en retornar el tema que corresponde, la clase donde esto se implementa es en :

./src/Theme/ThemeNegotiator.php

Con esta clase ya implementada, solo queda exponer el servicio, esto se puede observar en:

./mi_modulo.services.yml

Ya con solo estos dos archivos y la definición del modulo podemos implementar el cambio de tema por el rol de los usuarios.
