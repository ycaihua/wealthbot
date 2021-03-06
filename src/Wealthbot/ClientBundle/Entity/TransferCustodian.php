<?php

namespace Wealthbot\ClientBundle\Entity;

/**
 * TransferCustodian.
 */
class TransferCustodian
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name.
     *
     * @param string $name
     *
     * @return TransferCustodian
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * @var \Wealthbot\ClientBundle\Entity\TransferCustodianQuestion
     */
    private $transferCustodianQuestion;

    /**
     * Set transferCustodianQuestion.
     *
     * @param \Wealthbot\ClientBundle\Entity\TransferCustodianQuestion $transferCustodianQuestion
     *
     * @return TransferCustodian
     */
    public function setTransferCustodianQuestion(\Wealthbot\ClientBundle\Entity\TransferCustodianQuestion $transferCustodianQuestion = null)
    {
        $this->transferCustodianQuestion = $transferCustodianQuestion;

        return $this;
    }

    /**
     * Get transferCustodianQuestion.
     *
     * @return \Wealthbot\ClientBundle\Entity\TransferCustodianQuestion
     */
    public function getTransferCustodianQuestion()
    {
        return $this->transferCustodianQuestion;
    }
}
