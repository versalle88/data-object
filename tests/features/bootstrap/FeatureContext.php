<?php

/**
 * @noinspection PhpDocSignatureInspection
 * @noinspection PhpIllegalPsrClassPathInspection
 * @noinspection PhpUnused
 */

use Behat\Behat\Context\Context;
use PHPUnit\Framework\Assert;
use Versalle\Domain\DataObject;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
{
    private $dataObject;

    private $property = '';

    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    }

    /**
     * @Given a blank data object
     */
    public function aBlankDataObject()
    {
        $this->dataObject = new DataObject();
    }

    /**
     * @When I set :name to :value
     */
    public function iSetTo($name, $value)
    {
        $this->dataObject->set($name, $value);
    }

    /**
     * @Then the data object should have a :name property
     */
    public function theDataObjectShouldHaveAProperty($name)
    {
        Assert::assertTrue($this->dataObject->has($name));
    }

    /**
     * @Then the :name property should have a value of :value
     */
    public function thePropertyShouldHaveAValueOf($name, $value)
    {
        Assert::assertSame($value, $this->dataObject->get($name));
    }

    /**
     * @Given a populated data object
     */
    public function aPopulatedDataObject()
    {
        $this->dataObject = new DataObject(['first_name' => 'Andrew']);
    }

    /**
     * @When I get the :name property
     */
    public function iGetTheProperty($name)
    {
        $this->property = $this->dataObject->get($name);
    }

    /**
     * @Then that value should be :value
     */
    public function thatValueShouldBe($value)
    {
        Assert::assertSame($value, $this->property);
    }

    /**
     * @When I check if it has a property named :name
     */
    public function iCheckIfItHasAPropertyNamed($name)
    {
        $this->property = $this->dataObject->has($name);
    }

    /**
     * @Then that value will be false
     */
    public function thatValueWillBeFalse()
    {
        Assert::assertFalse($this->property);
    }

    /**
     * @When I unset the :name property
     */
    public function iUnsetTheProperty($name)
    {
        $this->dataObject->unset($name);
    }

    /**
     * @Then the data object should not have a :name property
     */
    public function theDataObjectShouldNotHaveAProperty($name)
    {
        Assert::assertFalse($this->dataObject->has($name));
    }

    /**
     * @Then the :name property will have a value of null
     */
    public function thePropertyWillHaveAValueOfNull($name)
    {
        Assert::assertNull($this->dataObject->get($name));
    }
}
