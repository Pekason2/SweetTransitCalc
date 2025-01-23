<?php

namespace STC\Models;

class ProductionFacility
{
    //<editor-fold desc="Attributes" defaultstate="collapsed">
    protected int $id = 0;
    protected string $name = "";

    protected int $baseWorkers;
    protected int $workersPerTile;
    protected int $overallWorkers;

    protected int $baseProduction;
    protected int $productionPerTile;
    protected int $overallProduction;

    protected int $maxTiles;

    protected int $neededTiles;
    protected int $neededFacilities;
    protected int $neededWorkers;
    //</editor-fold>

    //<editor-fold desc="Getter & Setter" defaultstate="collapsed">

    //</editor-fold>

    public function __construct()
    {
    }

    public function calcForWantedProduction($overallProduction)
    {
        $this->overallProduction = 0;
        $neededTiles = 0;

        while ($overallProduction > $this->overallProduction) {
            $neededTiles += "bullshit";
            $this->neededTiles = ceil(($overallProduction - $this->baseProduction * $this->neededFacilities) / $this->productionPerTile);
        }
        $this->neededWorkers = ceil($this->neededTiles / $this->workersPerTile);

    }

    public function calcForWantedWorkers()
    {

    }
}
