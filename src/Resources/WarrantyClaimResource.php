<?php

declare(strict_types=1);

namespace Liberu\EcommerceWarrantyAndClaimsFilament\Resources;

use Liberu\EcommerceWarrantyAndClaims\Models\WarrantyClaim;
use Filament\Actions\EditAction;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Liberu\EcommerceWarrantyAndClaimsFilament\Resources\WarrantyClaimResource\Pages\CreateWarrantyClaim;
use Liberu\EcommerceWarrantyAndClaimsFilament\Resources\WarrantyClaimResource\Pages\EditWarrantyClaim;
use Liberu\EcommerceWarrantyAndClaimsFilament\Resources\WarrantyClaimResource\Pages\ListWarrantyClaims;

final class WarrantyClaimResource extends Resource
{
    protected static ?string $model = WarrantyClaim::class;

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-shield-check';

    protected static ?string $navigationLabel = 'Warranty claims';

    public static function form(Schema $schema): Schema
    {
        return $schema->components([
            Textarea::make('issue')->required()->maxLength(10000),
            Textarea::make('troubleshooting')->maxLength(10000),
            Select::make('status')->options(collect(\Liberu\EcommerceWarrantyAndClaims\Enums\ClaimStatus::cases())->mapWithKeys(fn ($status) => [$status->value => str($status->value)->headline()])->all())->required(),
            Select::make('decision')->options(collect(\Liberu\EcommerceWarrantyAndClaims\Enums\ClaimDecision::cases())->mapWithKeys(fn ($decision) => [$decision->value => str($decision->value)->headline()])->all()),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            TextColumn::make('claim_number')->searchable(),
            TextColumn::make('customer_id')->label('Customer')->searchable(),
            TextColumn::make('status')->badge(),
            TextColumn::make('decision')->badge(),
            TextColumn::make('created_at')->dateTime()->sortable(),
        ])->recordActions([EditAction::make()]);
    }

    public static function getPages(): array
    {
        return [
            'index' => ListWarrantyClaims::route('/'),
            'create' => CreateWarrantyClaim::route('/create'),
            'edit' => EditWarrantyClaim::route('/{record}/edit'),
        ];
    }
}
