<?php
class PageController extends Controller
{
    public function home()
    {
        //require_once __DIR__ . '/../Views/home.view.php';
        $this->render('home', [], 'site');
    }
    public function deportes()
    {
        $this->render('deportes', [], 'site');
    }
    public function negocios()
    {
        $this->render('negocios', [], 'site');
    }
    public function noticias()
    {
        $this->render('noticias', [], 'site');
    }
    public function contacto()
    {
        $this->render('contacto', [], 'site');
    }
    public function avisos()
    {
        $this->render('avisos', [], 'site');
    }
    public function registro()
    {
        $this->render('registro', [], 'site');
    }
}
