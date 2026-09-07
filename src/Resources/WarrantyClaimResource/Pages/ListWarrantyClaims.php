<?php

declare(strict_types=1);

namespace Liberu\EcommerceWarrantyAndClaimsFilament\Resources\WarrantyClaimResource\Pages;

use Filament\Resources\Pages\ListRecords;
use Liberu\EcommerceWarrantyAndClaimsFilament\Resources\WarrantyClaimResource;

final class ListWarrantyClaims extends ListRecords
{
    protected static string $resource = WarrantyClaimResource::class;
}
