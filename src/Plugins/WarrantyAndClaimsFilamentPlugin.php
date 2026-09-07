<?php

declare(strict_types=1);

namespace Liberu\EcommerceWarrantyAndClaimsFilament\Plugins;

use Filament\Contracts\Plugin;
use Filament\Panel;
use Liberu\EcommerceWarrantyAndClaimsFilament\Resources\WarrantyClaimResource;

final class WarrantyAndClaimsFilamentPlugin implements Plugin
{
    public function getId(): string { return 'module-ecommerce-warranty-and-claims-filament'; }

    public function register(Panel $panel): void
    {
        $panel->resources([WarrantyClaimResource::class]);
    }

    public function boot(Panel $panel): void {}
}
