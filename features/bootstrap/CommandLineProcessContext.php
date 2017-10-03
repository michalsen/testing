<?php

use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Behat\MinkExtension\Context\RawMinkContext;

/**
 * Defines application features from the specific context.
 */
class CommandLineProcessContext extends RawMinkContext implements Context
{
    private $output;

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
     * @BeforeScenario
     */
    public function moveIntoTestDir()
    {
        if (!is_dir('test')) {
            mkdir('test');
        }
        chdir('test');
    }

    /**
     * @AfterScenario
     */
    public function moveOutOfTestDir()
    {
        chdir('..');
        if (is_dir('test')) {
             system('rm -r ' . realpath('test'));
        }
    }

    /**
     * @Given there is a file named :file
     */
    public function thereIsAFileNamed($file)
    {
        touch($file);
    }

    /**
     * @When I run :command
     */
    public function iRun($command)
    {
        $this->output = shell_exec($command);
    }

    /**
     * @Then I should see :string in the output
     */
    public function iShouldSeeInTheOutput($string)
    {
        if (!preg_match('/' . $string . '/i', $this->output)) {
            throw new \Exception(sprintf('Did not see %s', $string));
        }
    }

    /**
     * @Given there is a dir named :dir
     */
    public function thereIsADirNamed($dir)
    {
        mkdir($dir);
    }
}
