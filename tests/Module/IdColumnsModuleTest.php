<?php
namespace Gwa\Wordpress\Zero\Module\Tests;

use Gwa\Wordpress\Zero\Module\IdColumnsModule;
use Gwa\Wordpress\WpBridge\MockeryWpBridge;
use Gwa\Wordpress\Zero\Theme\HookManager;

class IdColumnsModuleTest extends \PHPUnit_Framework_TestCase
{
    private $bridge;
    private $hookmanager;
    private $instance;

    public function setUp()
    {
        $this->bridge      = new MockeryWpBridge;
        $this->hookmanager = new HookManager;
        $this->hookmanager->setWpBridge($this->bridge);

        $this->instance = new IdColumnsModule;
    }

    public function testConstruct()
    {
        $this->assertInstanceOf('Gwa\Wordpress\Zero\Module\AbstractThemeModule', $this->instance);
    }

    public function testInit()
    {
        $this->instance->init($this->bridge, $this->hookmanager);
    }
}
