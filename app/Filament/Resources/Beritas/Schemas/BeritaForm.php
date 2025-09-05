<?php

namespace App\Filament\Resources\Beritas\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class BeritaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('judul')
                    ->required()
                    ->maxLength(255)
                    ->live(onBlur: true), // generate slug otomatis setelah keluar dari field

                FileUpload::make('foto')
                    ->image()
                    ->directory('berita') // simpan di storage/app/public/berita
                    ->visibility('public'),

                RichEditor::make('isi')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}
