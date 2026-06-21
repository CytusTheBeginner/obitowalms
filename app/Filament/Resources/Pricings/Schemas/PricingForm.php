<?php

namespace App\Filament\Resources\Pricings\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PricingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Subscription Name')
                    ->hint('Enter The Subscription Package Name')
                    ->maxLength(255)
                    ->required(),

                TextInput::make('price')
                    ->label('Price')
                    ->hint('Enter The Price')
                    ->numeric()
                    ->prefix('IDR')
                    ->required(),

                TextInput::make('duration')
                    ->label('Duration')
                    ->hint('Enter The Duration')
                    ->numeric()
                    ->prefix('Month')
                    ->required(),
            ]);
    }
}
