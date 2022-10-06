<?php

/**
* La clase CloudProviderInterface rompe el principio de segregación de interfaces,
  * porque obliga a la clase de Dropbox a implementar métodos no compatibles con su servicio.
  * Para solucionar este problema, dividiremos la clase CloudProviderInterface en varias partes.
 * 
 */
class Dropbox implements CloudProviderInterface {
    
    public function storeFile($name) {
        echo "store a file on Dropbox";
    }

    public function getFile($name) {
        echo "get a file from Dropbox";
    }

    public function createServer($region) {
        // OJO Not supported by Dropbox
    }

    public function listServers($region) {
        // OJO Not supported by Dropbox   
    }

    public function getCDNAddress() {
        // OJO Not supported by Dropbox
    } 
}