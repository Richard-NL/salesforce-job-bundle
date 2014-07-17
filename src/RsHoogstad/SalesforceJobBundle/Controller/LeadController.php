<?php

namespace RsHoogstad\SalesforceJobBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Ddeboer\Salesforce\MapperBundle\Model\Lead;
use RsHoogstad\SalesforceJobBundle\Form\LeadType;
use Symfony\Component\HttpFoundation\Request;

class LeadController extends Controller
{
    /**
     * @Route("/", name="_lead")
     * @Template()
     */
    public function indexAction(Request $request)
    {

        $lead = new Lead();
        $form = $this->createForm(new LeadType(), $lead);
        $form->handleRequest($request);


        if ($form->isValid()) {
            $mapper = $this->container->get('ddeboer_salesforce_mapper');
            $mapper->save($lead);
            return $this->redirect($this->generateUrl('_lead_success'));
        }

        return ['form' => $form->createView()];
    }
    /**
     * @Route("/", name="_lead_success")
     * @Template()
     */
    public function successAction()
    {
        return [];
    }
} 