<?php
namespace RndBox\Bundle\PostBundle\Controller;


use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use FOS\UserBundle\Model\UserInterface;

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

        $user = $this->container->get('security.context')->getToken()->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }
    	
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
				$newIdeaId      = $this->processIdeaData($formData, $user->getUserId());

                return new RedirectResponse($this->container->get('router')->generate('RndBoxPostBundle_success'));
            }
        }

        return array( 'title' => "Idea", 'form' => $form->createView());
    }

    /**
     * @Template()
     */
    public function successAction(){
        return array( 'success' => 'Idea Posted Successfully' );
    }
	
	

    private function processIdeaData($formData, $currentUserId)
    {
        $userObj = new Ideas();
        $userObj->setTitle($formData->getTitle());
        $userObj->setSlug($formData->getSlug());
		$userObj->setDescription($formData->getDescription());
        $userObj->setUserId($currentUserId);
        $userObj->setStatus('available');

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
 
    /**
     * @Template()
     */
    public function idealistAction(){

        $user = $this->container->get('security.context')->getToken()->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }

        $data = $this->getDoctrine()->getRepository('RndBoxPostBundle:ideas')
                                    ->findBy(array('userId' => $user->getUserId()));


        return array('data'=> $data);
    }
}
