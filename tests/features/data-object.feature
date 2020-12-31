Feature: Data Object
  In order to utilize dynamic properties within my objects
  As a user
  I need a data object

  Scenario: Setting a dynamic property to a data object
    Given a blank data object
    When I set "first_name" to "Andrew"
    Then the data object should have a "first_name" property
    And the "first_name" property should have a value of "Andrew"

  Scenario: Getting a dynamic property from a data object
    Given a populated data object
    When I get the "first_name" property
    Then that value should be "Andrew"

  Scenario: Checking if data object has a dynamic property
    Given a blank data object
    When I check if it has a property named "first_name"
    Then that value will be false

  Scenario: Unsetting a dynamic property from a data object
    Given a populated data object
    When I unset the "first_name" property
    Then the data object should not have a "first_name" property
    And the "first_name" property will have a value of null
