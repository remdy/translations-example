<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Translation\TranslatorInterface;

class DefaultController extends Controller
{

    public function indexAction(Request $request)
    {
        $locale = $request->getLocale();
//        dump($locale);
        return $this->render('@App/test.html.twig');
    }
}
