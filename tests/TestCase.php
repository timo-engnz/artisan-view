<?php

namespace Sven\ArtisanView\Tests;

use GrahamCampbell\TestBench\AbstractPackageTestCase;
use GrahamCampbell\TestBenchCore\ServiceProviderTrait;
use Sven\ArtisanView\ServiceProvider;

abstract class TestCase extends AbstractPackageTestCase
{
    use ViewAssertions;
    use ServiceProviderTrait;

    protected function getServiceProviderClass($app): string
    {
        return ServiceProvider::class;
    }
}
