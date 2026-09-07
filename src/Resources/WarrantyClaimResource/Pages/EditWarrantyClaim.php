<?php

declare(strict_types=1);

namespace Liberu\EcommerceWarrantyAndClaimsFilament\Resources\WarrantyClaimResource\Pages;

use Filament\Resources\Pages\EditRecord;
use Liberu\EcommerceWarrantyAndClaimsFilament\Resources\WarrantyClaimResource;

final class EditWarrantyClaim extends EditRecord
{
    protected static string $resource = WarrantyClaimResource::class;
}
