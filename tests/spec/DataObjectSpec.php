<?php

/**
 * @noinspection PhpIllegalPsrClassPathInspection
 * @noinspection PhpUnused
 */

namespace spec\Versalle\Domain;

use PhpSpec\ObjectBehavior;
use Versalle\Domain\DataObject;

class DataObjectSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(DataObject::class);
    }

    function it_sets_specific_data()
    {
        $this->set('first_name', 'Andrew');
    }

    function it_gets_specific_data()
    {
        $this->get('first_name')
            ->shouldReturn(null);
    }

    function it_checks_for_specific_data()
    {
        $this->has('first_name')
            ->shouldReturn(false);
    }

    function it_unsets_specific_data()
    {
        $this->unset('first_name');
    }
}
