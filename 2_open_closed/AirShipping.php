<?php

class AirShipping implements ShippingInterface {

    public function getCost($order) {
        return max(20, $order->getTotalWeight() * 3);
    }

    public function getDate($order) {
        return "date on air shipping";
    }
}