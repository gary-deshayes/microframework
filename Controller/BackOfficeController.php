<?php


/**
 * Class IndexController.
 */
class BackOfficeController extends ControllerAbstract
{
    /**
     * Display the template index.
     */
    public function index()
    {
        $this->render('indexBackOffice.php');
    }

    
}
