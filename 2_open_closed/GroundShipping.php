<?php

class GroundShipping implements ShippingInterface {

    public function getCost($order) {
        if ($order->getTotal() > 100) {
            return 0;
        }

        return max(10, $order->getTotalWeight() * 1.5);
    }

    public function getDate($order) {
        return "date on ground shipping";
    }
}