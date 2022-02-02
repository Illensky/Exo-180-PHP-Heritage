<?php

class Habitation
{
    private string $ville;
    private string $cp;
    private int $chambres;
    private int $pieces;

    public function __construct(string $ville, string $cp, int $chambres, int $pieces)
    {
        $this->ville = $ville;
        $this->cp = $cp;
        $this->chambres = $chambres;
        $this->pieces = $pieces;
    }

    /**
     * @return string
     */
    public function getVille(): string
    {
        return $this->ville;
    }

    /**
     * @param string $ville
     */
    public function setVille(string $ville): void
    {
        $this->ville = $ville;
    }

    /**
     * @return string
     */
    public function getCp(): string
    {
        return $this->cp;
    }

    /**
     * @param string $cp
     */
    public function setCp(string $cp): void
    {
        $this->cp = $cp;
    }

    /**
     * @return int
     */
    public function getChambres(): int
    {
        return $this->chambres;
    }

    /**
     * @param int $chambres
     */
    public function setChambres(int $chambres): void
    {
        $this->chambres = $chambres;
    }

    /**
     * @return int
     */
    public function getPieces(): int
    {
        return $this->pieces;
    }

    /**
     * @param int $pieces
     */
    public function setPieces(int $pieces): void
    {
        $this->pieces = $pieces;
    }



}