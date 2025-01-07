<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EnrollmentResource\Pages;
use App\Models\Enrollment;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;

class EnrollmentResource extends Resource
{
    protected static ?string $model = Enrollment::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';
    protected static ?string $navigationLabel = 'Enrollments';
    protected static ?string $pluralLabel = 'Enrollments';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('name')->required(),
            Forms\Components\TextInput::make('email')->email()->required(),
            Forms\Components\TextInput::make('contact')->required(),
            Forms\Components\TextInput::make('paket')->required(),
            Forms\Components\FileUpload::make('payment_proof')->disk('public')->directory('payment_proofs'),
        ]);
    }

    public static function table(Tables\Table $table): Tables\Table
{
    return $table
        ->columns([
            TextColumn::make('id')->sortable(),
            TextColumn::make('name')->searchable()->sortable(),
            TextColumn::make('email')->searchable()->sortable(),
            TextColumn::make('contact'),
            TextColumn::make('paket'),
            ImageColumn::make('payment_proof')->disk('public')->label('Bukti Pembayaran'),
            TextColumn::make('created_at')->label('Tanggal Pendaftaran')->dateTime(),
        ])
        ->actions([
            Tables\Actions\Action::make('generate_certificate')
                ->label('Buat Sertifikat')
                ->icon('heroicon-o-document-text')
                ->url(fn (Enrollment $record) => route('enrollments.generateCertificate', $record->id))
                ->openUrlInNewTab(),
        ])
        ->bulkActions([
            Tables\Actions\DeleteBulkAction::make(),
        ]);
}



    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageEnrollments::route('/'),
        ];
    }
}
