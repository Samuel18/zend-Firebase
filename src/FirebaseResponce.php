<?php
declare(strict_types = 1);
namespace ZendFirebase;


/**
 *
 * @author Davide Biasin
 *
 */
class FirebaseResponce
{

    /**
     * Data from Firebase
     * @var array $firebaseData
     */
    private $firebaseData;

    /**
     * Type of operation
     *
     * @var string $operation
     */
    protected $operation;

    /**
     * Http server code
     *
     * @var integer $status
     */
    protected $status;

    /**
     * Format to array the responce
     *
     * @return array
     */
    public function getFirebaseData(): array
    {
        return $this->firebaseData;
    }

    /**
     * Type of Operation
     *
     * @return  $operation
     */
    public function getOperation(): string
    {
        return $this->operation;
    }

    /**
     * Status from http server
     *
     * @return integer $status
     */
    public function getStatus(): int
    {
        return $this->status;
    }

    /**
     *
     * @param  $firebaseData
     */
    protected function setFirebaseData($firebaseData)
    {
        $this->firebaseData = $firebaseData;
    }

    /**
     *
     * @param string $operation
     */
    protected function setOperation($operation)
    {
        $this->operation = $operation;
    }

    /**
     *
     * @param integer $status
     */
    protected function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * Method for validate data arrives in _costruct.
     * If all data was correct skip function without returns.
     *
     * @throws \Exception
     */
    protected function validateResponce()
    {


        // check validity of Operation
        if (! is_string($this->getOperation()) || empty($this->getOperation())) {
            throw new \Exception("Operation parameter must be STRING and NOT EMPTY.
                Received : " . gettype($this->getOperation()) . " ({$this->getOperation()}).");
        }

        // check validity of Status
        if (! is_numeric($this->getStatus())) {
            throw new \Exception("Status parameter must be NUMERIC.
                Received : " . gettype($this->getStatus()) . " ({$this->getStatus()}).");
        }
    }

    /**
     * Remove this current Object from memory
     */
    public function __destruct()
    {
        unset($this);
    }
}
