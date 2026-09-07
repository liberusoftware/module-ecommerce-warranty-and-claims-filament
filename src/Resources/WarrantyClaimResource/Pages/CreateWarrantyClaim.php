<?php

declare(strict_types=1);

namespace Liberu\EcommerceWarrantyAndClaimsFilament\Resources\WarrantyClaimResource\Pages;

use Filament\Resources\Pages\CreateRecord;
use Liberu\EcommerceWarrantyAndClaimsFilament\Resources\WarrantyClaimResource;

final class CreateWarrantyClaim extends CreateRecord
{
    protected static string $resource = WarrantyClaimResource::class;
}
