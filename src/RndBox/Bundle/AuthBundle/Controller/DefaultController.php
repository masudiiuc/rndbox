<?php

namespace RndBox\Bundle\AuthBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;


use RndBox\Bundle\AuthBundle\Entity\LoginForm;
use RndBox\Bundle\AuthBundle\Entity\RegistrationForm;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

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
			else {
				{
					echo '2 takar Muri khao'; die;
				}
			}
        }


        return array('name' => 'Emran', 'form' => $form->createView());
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
                $formData = $form->getData();
                echo '<pre/>'; print_r( $formData); die;
            }
        }

        return array( 'title' => "User Registration", 'form' =>$form->createView() );
    }
}
