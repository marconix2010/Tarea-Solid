<?php

/**
 * Open/closed principle dice que las clases deben estar abiertas para extensión pero cerradas para modificación.
  * Debe cambiar la clase de pedido cada vez que agreguemos un nuevo método de envío a la aplicación.
  *
  * Puedes resolver el problema aplicando el patrón de Estrategia. Comience por extraer los métodos de envío en
  * clases separadas con una interfaz común.
 */
class Order {
    protected $lineItems;
    protected $shipping;


    public function getTotal()
    {
    }   

    public function getTotalWeight()
    {
        return $this->getTotalWeight;
    }

    public function setShippingType($shipping)
    {
        $this->shipping = $shipping;
    }

    public function getShippingCost()
    {
        if($this->shipping == "ground") {
            if ($this->getTotal() > 100) {
                return 0;
            }

            return max(10, $this->getTotalWeight() * 1.5);
        }

        if ($this->shipping == "air") {
            return max(20, $this->getTotalWeight() * 3);
        }
    }

    public function getShippingDate()
    {
        
    }
}