<?php
 
// src/OC/PlatformBundle/Controller/AdvertController.php
 
namespace Yann\PlatformBundle\Controller;
 
// N'oubliez pas ce use :
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
 
class AdvertController extends Controller
{
  public function indexAction()
  {
    $content = $this->get('templating')->render('YannPlatformBundle:Advert:index.html.twig');
    return new Response($content);
  }
}