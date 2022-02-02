<?php

class Appartement extends Habitation
{
    private bool $garage;

    public function __construct(string $ville, string $cp, int $chambres, int $pieces, bool $garage)
    {
        parent::__construct($ville, $cp, $chambres, $pieces);
        $this->garage = $garage;
    }

    /**
     * @return bool
     */
    public function isGarage(): bool
    {
        return $this->garage;
    }

    /**
     * @param bool $garage
     */
    public function setGarage(bool $garage): void
    {
        $this->garage = $garage;
    }


}