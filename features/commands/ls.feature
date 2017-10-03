Feature: ls
  In order to see the directory structure
  As a UNIX user
  I need to be able to list the current directory's contents

  Background:
    Given there is a file named "test1"

  Scenario: List 2 files in a  directory
    Given there is a file named "test2"
    When I run "ls"
    Then I should see "test1" in the output
    And I should see "test2" in the output

