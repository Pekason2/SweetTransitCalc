<?php

namespace STC\Controller;

use STC\Models\SweetTransitRepository;

class CalculatorController extends BaseController
{
    //<editor-fold desc="Attributes" defaultstate="collapsed">

    //</editor-fold>

    public function __construct()
    {
        parent::__construct();
    }

    public function loadAction(): void
    {
        $this->renderView("../private/Views/CalculatorInterface.html");
    }

    public function fetchVariablesAction()
    {
        $variables = [];



        return json_encode($variables);
    }
}