Feature: Authentication
  In order to test the login
  As an admin user
  I need to log in as an admin

  Scenario: Logging in
    Given I am on "/"
    When I follow "Log in"
    And I fill in "Username" with "admin"
    And I fill in "Password" with "admin"
    And I press "Log in"
    Then I should see "Log out"
