<?php
namespace RsHoogstad\SalesforceJobBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use RsHoogstad\SalesforceJobBundle\Model\Job;


class JobController extends Controller
{
    /**
     * @Route("/", name="_job")
     * @Template()
     */
    public function indexAction()
    {
        $result = $this->container->get('ddeboer_salesforce_mapper')->findAll(new Job());
        $data = [];
        foreach($result as $record) {
            $data[] = ['id' => $record->getId(), 'name' => $record->getName()];
        }

        return ['result' => $data];
    }
    /**
     * @Route("/{id}", name="_job_detail")
     * @Template()
     */
    public function detailAction($id)
    {
        $result = $this->container->get('ddeboer_salesforce_mapper')->findBy(new Job(), ['id' => $id]);
        foreach($result as $record) {
            $data = ['id' => $record->getId(), 'name' => $record->getName(), 'description' => $record->getDescription()];
        }

        return ['job' => $data];
    }

} 