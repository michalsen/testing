Feature: Check Contact Form
  In order to verify contact form
  As a web user
  I need input the fields and check the response

  Background:
    Given I am on "/contact"


  Scenario Outline:
    When I fill in the search box with "<term>"
    And I press the search button
    Then I should see "<result>"
    Examples:
      | term  | result                                   |
      | illum | Tincidunt                                |
      | tamen | Abigo abluo dignissim elit mos pala quia |



#    When I fill in "name" with "Behat name"
#    And  I fill in "email" with "Behat@straightnorth.com"
#    And  I fill in "subject[0][value]" with "Behat subject"
#    And  I fill in "message[0][value]" with "Behat message"
#    And I press "Send"
#    Then I should see "Thanks for contacting us"