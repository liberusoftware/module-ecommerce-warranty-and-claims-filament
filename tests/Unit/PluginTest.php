<?php

declare(strict_types=1);

namespace Liberu\EcommerceWarrantyAndClaimsFilament\Tests\Unit;

use Liberu\EcommerceWarrantyAndClaimsFilament\Plugins\WarrantyAndClaimsFilamentPlugin;
use PHPUnit\Framework\TestCase;

final class PluginTest extends TestCase
{
    public function test_plugin_has_stable_identity(): void
    {
        self::assertSame('module-ecommerce-warranty-and-claims-filament', (new WarrantyAndClaimsFilamentPlugin())->getId());
    }
}
