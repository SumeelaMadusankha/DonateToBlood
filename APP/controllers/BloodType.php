<?php
class BloodType{
    protected $available_quantity;
    protected $maximum_quantity;
    function __construct()
    {
    }

    /**
     * @return mixed
     */
    public function getAvailableQuantity()
    {
        return $this->available_quantity;
    }

    /**
     * @param mixed $available_quantity
     */
    public function setAvailableQuantity($available_quantity)
    {
        $this->available_quantity = $available_quantity;
    }

    /**
     * @return mixed
     */
    public function getMaximumQuantity()
    {
        return $this->maximum_quantity;
    }

    /**
     * @param mixed $maximum_quantity
     */
    public function setMaximumQuantity($maximum_quantity)
    {
        $this->maximum_quantity = $maximum_quantity;
    }

}