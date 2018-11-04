<?php


/**
 * Class IndexController.
 */
class IndexController extends ControllerAbstract
{
    /**
     * Display the template index.
     */
    public function index()
    {
        $this->vars = ['name' => 'Gary'];
        $this->render('index.php');
    }

    public function helloWorld()
    {
        $stmt = $this->db->pdo->prepare('SELECT texte FROM MESSAGE WHERE id=1');
        $stmt->execute();
        $message = $stmt->fetch();
        $message = $message['texte'];
        $this->vars = ['helloworld' => $message];
        $this->render('helloworld.php');
    }

    /**
     * Display the template 404 not found.
     */
    public function notfound()
    {
        $this->render('404.php');
    }

}
