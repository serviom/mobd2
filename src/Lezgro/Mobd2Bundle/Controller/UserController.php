<?php

namespace Lezgro\Mobd2Bundle\Controller;
use Lezgro\Mobd2Bundle\Entity\Users;
use Lezgro\Mobd2Bundle\Tools\Parser;
use Lezgro\Mobd2Bundle\Tools\Usertools;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;


class UserController extends Controller
{
    /**
     * @Route("/mobd/user")
     * @Template()
     */
    public function indexAction()
    {
        return $this->render('LezgroMobd2Bundle:User:index.html.twig');
    }
    
    public function authAction()
    {
        
        return $this->render('LezgroMobd2Bundle:User:auth.html.twig');
      
    }
    
    public function userAction($fbid,$token)
    {
        /* Смотрим есть ли у нас юзер в базе */

        //$client = new \Zend_Http_Client();
        
//    $author = new Author();
//    // ... выполняются какие-либо действия с объектом $author
//
//    $validator = $this->get('validator');
//    $errors = $validator->validate($author);
//
//if (count($errors) > 0) {
//    return $this->render('LezgroMobd2Bundle:User:validate.html.twig', array(
//        'errors' => $errors,
//    ));
//} else {
//    // ...
//}
        
//    $author = new Author();
//    // ... выполняются какие-либо действия с объектом $author
//
//    $validator = $this->get('validator');
//    $errors = $validator->validate($author);
        
        
        $user = $this->get('doctrine')
                  ->getEntityManager()
                  ->getRepository('LezgroMobd2Bundle:Users')
                  ->find((int)$fbid);
        
       if (!$user) {
            $parser = new Parser(array('fbid' => $fbid,'token' => $token));
            $users = Usertools::addUser($parser->getUserInfo());
            $doctrine = $this->getDoctrine()->getEntityManager();
            $doctrine->persist($users);
            $doctrine->flush();
            
            //Usertools::addFriends($parser->getUserFriends());
       }    
       
        return $this->render('LezgroMobd2Bundle:User:user.html.twig');      
        
        $product->setName('A Foo Bar');
        $product->setPrice('19.99');
        $product->setDescription('Lorem ipsum dolor');

        $em = $this->getDoctrine()->getEntityManager();
        $em->persist($product);
        $em->flush();

        return array('name' => $name);
    }
    

}