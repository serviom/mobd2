<?php

namespace Lezgro\Mobd2Bundle\Tools;
use Lezgro\Mobd2Bundle\Entity\Users;
class Usertools
{

    /**
     * Add user in base
     * @param array $userInfo 
     * @return void
     */
    static public function addUser($userInfo)
    {

        $users = new Users();  
        var_dump($userInfo);
        if(array_key_exists('name', $userInfo)) {
            $users->setName($userInfo['name']);
        }
        if(array_key_exists('username', $userInfo)) {
            $users->setUsername($userInfo['username']);
        }
        if(array_key_exists('last_name', $userInfo)) {
            $users->setLastName($userInfo['last_name']);
        }
        if(array_key_exists('first_name', $userInfo)) {
            $users->setFirstName($userInfo['first_name']);
        }
        if(array_key_exists('birthday', $userInfo)) {
            $users->setBirthday($userInfo['birthday']);
        }
        if(array_key_exists('id', $userInfo)) {
            $users->setFbid($userInfo['id']);
        }
        if(array_key_exists('email', $userInfo)) {
            $users->setFbid($userInfo['email']);
        }

        return $users;
        
       // $doctrine = $users->getDoctrine()->getEntityManager();
       // $doctrine->persist($users);
       // $doctrine->flush();
        
//        $validator = $this->get('validator');
//        $errors = $validator->validate($users);
        
//        if (count($errors) > 0) {
//            return $this->render('LezgroMobd2Bundle:User:validate.html.twig', array(
//                        'errors' => $errors,
//                    ));
//        } else {
//
//        }
    }
    
    
    /**
     * Add friends in base
     * @param array $friends 
     * @return void
     */
    static public function addFriends($friendsInfo)
    {
  
        var_dump($friendsInfo);
        exit;
        
        $users = new Users(); 
        
        foreach($friendsInfo as $friendInfo) {
            if(array_key_exists('name', $friendsInfo)) {
                $users->setName($friendsInfo['name']);
            }
            if(array_key_exists('username', $friendsInfo)) {
                $users->setUsername($friendsInfo['username']);
            }
            if(array_key_exists('last_name', $friendsInfo)) {
                $users->setLastName($friendsInfo['last_name']);
            }
            if(array_key_exists('first_name', $friendsInfo)) {
                $users->setFirstName($friendsInfo['first_name']);
            }
            if(array_key_exists('birthday', $friendsInfo)) {
                $users->setBirthday($friendsInfo['birthday']);
            }
            if(array_key_exists('id', $friendsInfo)) {
                $users->setFbid($friendsInfo['id']);
            }
        }
         
        $validator = $this->get('validator');
        $errors = $validator->validate($users);
        
        if (count($errors) > 0) {
            return $this->render('LezgroMobd2Bundle:User:validate.html.twig', array(
                        'errors' => $errors,
                    ));
        } else {
            $doctrine = $this->getDoctrine()->getEntityManager();
            $doctrine->persist($users);
            $doctrine->flush();
        }
    }
}



