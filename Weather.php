<?php

class Weather
{
    private $city;
    private $temperature;
    private $condition;

    public function setTemperature()
    {
        $this->temperature = rand(-15, 30);
        if ($this->temperature > 0) {
            $this->temperature = "+" . $this->temperature;
        }
    }

    public function setCity($lengthCountry)
    {
        $this->city = substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ'), 1, 1) .
            substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'), 1, $lengthCountry);
    }

    public function setCondition()
    {
        $conditions = ["cloudy", "foggy", "rainy", "snowy", "stormy", "sunny", "windy", "cold", "hot", "warm"];
        shuffle($conditions);
        $this->condition = $conditions[0];

    }

    public function getTemperature()
    {
        return $this->temperature;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function getCondition()
    {
        return $this->condition;
    }


}