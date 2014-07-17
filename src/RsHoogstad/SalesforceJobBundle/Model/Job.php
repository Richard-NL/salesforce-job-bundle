<?php

namespace RsHoogstad\SalesforceJobBundle\Model;
use Ddeboer\Salesforce\MapperBundle\Annotation as Salesforce;
use Ddeboer\Salesforce\MapperBundle\Response\MappedRecordIterator;
use Ddeboer\Salesforce\MapperBundle\Model\AbstractModel;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * @Salesforce\Object(name="Job__c")
 */
class Job extends AbstractModel
{
    /**
     * @var @Salesforce\Field(name="Id")
     */
    protected $id;

    /**
     * @var @Salesforce\Field(name="Name")
     */
    protected $name;

    /**
     * @var string
     * @Salesforce\Field(name="Description__c")
     */
    protected $description;

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }
} 