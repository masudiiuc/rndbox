<?php
namespace RndBox\Bundle\PostBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use RndBox\Bundle\PostBundle\Entity\IdeaForm;
use RndBox\Bundle\PostBundle\Entity\Ideas;

class DefaultController extends Controller
{
    /**
     * @Template()
     */
    public  function indexAction( Request $request ){
    	
        $signup = new IdeaForm();

        $form = $this->createFormBuilder( $signup )
                     ->add('title', 'text',     array('label' => 'Title'))
                     ->add('slug' , 'text',     array('label' => 'Slug'))
                     ->add('description',      'textarea',     array('label' => 'Description'))
                     ->getForm();
					 
		
		if( $request->getMethod() == 'POST' ){
            $form->bindRequest($request);

            if( $form->isValid() ){
                $formData       = $form->getData();
				$newIdeaId      = $this->processIdeaData($formData);
                $this->redirect($this->generateUrl('RndBoxAuthBundle_success', array()) );
            }
        }

        return array( 'title' => "Idea", 'form' =>$form->createView());
    }

    /**
     * @Template()
     */
    public function successAction(){
        return array( 'success' => 'Idea Posted Successfully' );
    }
	
	

    private function processIdeaData($formData)
    {
        $userObj = new Ideas();
        $userObj->setTitle($formData->getTitle());
        $userObj->setSlug($formData->getSlug());
		$userObj->setDescription($formData->getDescription());
        $docObj = $this->getDoctrine()->getEntityManager();
        $docObj->persist($userObj);
        $docObj->flush();

        return $userObj->getIdeaId();
    }
	
	private function getIdeaData()
    {
    	$data = $this->getDoctrine()
        ->getRepository('RndBoxPostBundle:Ideas')
        ->find(1);
        
        if (!$data) {
            throw $this->createNotFoundException('No product found for id ');
        }
		
        return $data;
    }
 

}
