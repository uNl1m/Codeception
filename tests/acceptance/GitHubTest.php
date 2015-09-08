<?php
class GitHubTest extends PHPUnit_Framework_TestCase {

    protected $url = '/';
    /**
     * @var \RemoteWebDriver
     */
    protected $webDriver;

    public function setUp()
    {
        $capabilities = array(\WebDriverCapabilityType::BROWSER_NAME => 'firefox');
        $this->webDriver = RemoteWebDriver::create('http://localhost:4444/wd/hub', $capabilities);
    }

    public function tearDown()
    {
        $this->webDriver->close();
    }

    public function testSearch()
    {
        $this->webDriver->get($this->url);

        // find search field by its id
        $search = $this->webDriver->findElement(WebDriverBy::xpath('html/body/div[1]/div[1]/div/div[2]/form/label'));
        $search->click();

        // typing into field
        $this->webDriver->getKeyboard()->sendKeys('php-webdriver');

        // pressing "Enter"
        $this->webDriver->getKeyboard()->pressKey(WebDriverKeys::ENTER);

        $firstResult = $this->webDriver->findElement(
        // some CSS selectors can be very long:
            WebDriverBy::cssSelector('li.repo-list-item:nth-child(1) > h3:nth-child(2) > a:nth-child(1)')
        );

        $firstResult->click();

        // we expect that facebook/php-webdriver was the first result
        $this->assertContains("php-webdriver",$this->webDriver->getTitle());

        $this->assertEquals('https://github.com/facebook/php-webdriver', $this->webDriver->getCurrentURL());

        $this->assertElementNotFound(WebDriverBy::className('avatar'));

    }

    protected function waitForUserInput()
    {
        if(trim(fgets(fopen("php://stdin","r"))) != chr(13)) return;
    }

    protected function assertElementNotFound($by)
    {
        $els = $this->webDriver->findElements($by);
        if (count($els)) {
            $this->fail("Unexpectedly element was found");
        }
        // increment assertion counter
        $this->assertTrue(true);

    }
}
?>