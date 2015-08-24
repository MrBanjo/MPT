<?php

  namespace AppBundle\Menu;

  use Knp\Menu\FactoryInterface;
  use Symfony\Component\HttpFoundation\Request;

  class MenuBuilder
  {
    private $factory;

    /**
     * @param FactoryInterface $factory
     */
    public function __construct(FactoryInterface $factory)
    {
        $this->factory = $factory;
    }

    public function createBreadcrumbMenu(Request $request)
    {
        $menu = $this->factory->createItem('root');
        // cet item sera toujours affiché
        $menu->addChild('Accueil', array('route' => 'accueil'));

        // crée le menu en fonction de la route
        switch($request->get('_route')){
            case 'cart':
                $menu
                    ->addChild('mon caddie', array('route' => 'cart'))
                    ->setCurrent(true)
                    // setCurrent est utilisé pour ajouter une classe css "current"
                ;
            break;
            case 'cart_identification':
                $menu
                    ->addChild('mon caddie', array('route' => 'cart'));
                    $menu->addChild('identification')
                    ->setCurrent(true)
                ;
            break;
            case 'paniers':
                $menu->addChild('nos paniers', array('route' => 'paniers'));
                $menu->setCurrent(true)   
                ;
                
            break;
            case 'classique':
                $menu->addChild('nos paniers', array('route' => 'paniers'));
                $menu->addChild('classique', array('route' => 'classique'))
                     ->setCurrent(true)
                ;                    
            break;
            case 'menus':
                $menu->addChild('nos menus', array('route' => 'menus'))
                     ->setCurrent(true)
                ;                    
            break;            
        }

        return $menu;
    }
}