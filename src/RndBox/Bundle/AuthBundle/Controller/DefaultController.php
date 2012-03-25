<?php

namespace RndBox\Bundle\AuthBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;


use RndBox\Bundle\AuthBundle\Entity\LoginForm;
use RndBox\Bundle\AuthBundle\Entity\RegistrationForm;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use RndBox\Bundle\AuthBundle\Entity\Users;
use RndBox\Bundle\AuthBundle\Entity\UserProfiles;

class DefaultController extends Controller
{
    /**
     * @Template()
     */
    public function indexAction(Request $request)
    {
        $login = new LoginForm();

        $form = $this->createFormBuilder( $login )
                     ->add('email',     'text',     array('label'=> "Email Address"))
                     ->add('password',  'password', array('label'=> "Password"))
                     ->getForm();

        if( $request->getMethod() == 'POST' ){
            $form->bindRequest($request);

            if( $form->isValid() ){
                $formData = $form->getData();
                echo '<pre/>'; print_r( $formData); die;
            }
        }


        return array('form' => $form->createView());
    }

    /**
     * @Template()
     */
    public  function registrationAction( Request $request ){
        $signup = new RegistrationForm();

        $form = $this->createFormBuilder( $signup )
                     ->add('first_name', 'text',     array('label' => 'First Name'))
                     ->add('last_name' , 'text',     array('label' => 'Last Name'))
                     ->add('email',      'text',     array('label' => 'Email Address'))
                     ->add('password',   'repeated', array(   'type'            => 'password',
                                                                    'invalid_message' => "Both Password need to match",
                                                                    'options'         => array('label'=> "Password")
                                                                ))
                    ->getForm();

        if( $request->getMethod() == 'POST' ){
            $form->bindRequest($request);

            if( $form->isValid() ){
                $formData       = $form->getData();
                $newUserId      = $this->processUserInformation($formData);
                $newProfileId   = $this->processUserProfileInformation($newUserId, $formData);
                if( $newProfileId ){
                    echo 'ekhane to ashchi';
                    $this->redirect($this->generateUrl('RndBoxAuthBundle_success', array()) );
                }
                die('ami more gechi');
            }
        }

        return array( 'title' => "User Registration", 'form' =>$form->createView() );
    }

    /**
     * @Template()
     */
    public function successAction(){
        return array( 'success' => 'Registration Success' );
    }

    private function processUserProfileInformation($newUserId, $formData)
    {
        $profileObj = new UserProfiles();

        $profileObj->setUserId($newUserId);
        $profileObj->setFirstName($formData->getFirstName());
        $profileObj->setLastName($formData->getFirstName());

        $docObj = $this->getDoctrine()->getEntityManager();
        $docObj->persist($profileObj);
        $docObj->flush();
        return $profileObj->getUserId();
    }

    private function processUserInformation($formData)
    {
        $userObj = new Users();
        $userObj->setEmailAddress($formData->getEmail());
        $userObj->setPassword(md5($formData->getPassword()));
        $userObj->setUserType('Developer');

        $docObj = $this->getDoctrine()->getEntityManager();
        $docObj->persist($userObj);
        $docObj->flush();

        return $userObj->getUserId();
    }
}
