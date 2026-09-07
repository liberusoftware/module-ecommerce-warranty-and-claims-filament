<?php

declare(strict_types=1);

namespace Liberu\EcommerceWarrantyAndClaimsFilament\Resources\WarrantyClaimResource\Pages;

use Filament\Resources\Pages\EditRecord;
use Illuminate\Database\Eloquent\Model;
use Liberu\EcommerceWarrantyAndClaims\Actions\TransitionWarrantyClaim;
use Liberu\EcommerceWarrantyAndClaims\Enums\ClaimDecision;
use Liberu\EcommerceWarrantyAndClaims\Enums\ClaimStatus;
use Liberu\EcommerceWarrantyAndClaimsFilament\Resources\WarrantyClaimResource;

final class EditWarrantyClaim extends EditRecord
{
    protected static string $resource = WarrantyClaimResource::class;

    protected function handleRecordUpdate(Model $record, array $data): Model
    {
        $status = ClaimStatus::from((string) $data['status']);
        $decision = isset($data['decision']) && $data['decision'] !== '' ? ClaimDecision::from((string) $data['decision']) : null;
        return app(TransitionWarrantyClaim::class)->execute($record, $status, $decision, (string) auth()->user()->getAuthIdentifier());
    }
}
