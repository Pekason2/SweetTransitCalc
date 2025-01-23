<?php /** @noinspection PhpIllegalPsrClassPathInspection */

namespace STC\Controller;

class BaseController
{
    public function __construct()
    {
        session_start();
    }

    public function renderView($filename): void
    {
        require_once $filename;
    }
}