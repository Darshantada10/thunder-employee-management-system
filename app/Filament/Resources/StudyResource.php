<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Study;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\StudyResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\StudyResource\RelationManagers;
use Filament\Forms\Components\Actions\Modal\Actions\Action;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TagsColumn;
use Filament\Tables\Columns\ViewColumn;
use Livewire\TemporaryUploadedFile;

class StudyResource extends Resource
{
    protected static ?string $model = Study::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationGroup = 'Student Management';
    public static function form(Form $form): Form
    {
        // dd("display");
        // $FileREs = 
        // dd($FileREs);
        return $form
            ->schema([
                Select::make('course')
                ->options([
                    'JEE' => 'JEE',
                    'NEET' => 'NEET',
                ]),
                FileUpload::make('pdf') 
                // ->avatar()   
                // ->directory("pdf")
                // ->label('pdf')
                // ->directory(public_path("pdf"))
                
                // ->getUploadedFileNameForStorageUsing(function (TemporaryUploadedFile
                // $file):string{
                //             $filename = $file->hashName();
                //             $name = explode('.', $filename);
                            
                //             return (string) str('/public/pdf/' . $name[0] . '.png');
                //             // return (string) str(storage_path("/app/public/droaBUY1jjsBmv38vIndujoFsvW1SZ-metaVmlld0dlbmVyYXRlZERvY3MgKDQpLnBkZg==-.pdf"));

                // }
                // )



                // ->disk('public')
                // ->directory('public')
                // ->visibility('public')
                // ->acceptedFileTypes(['application/pdf'])
            ]);
        }
        // FileUpload::make('pdf')

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('pdf')->rounded(),
                TextColumn::make('id')->sortable(),
                TextColumn::make('course')->sortable()->searchable(),
                // TextColumn::make('pdf'),
                // GetFilesUploaded::make
                // TagsColumn::make(function (){
                //     return UserResource::getUrl('edit', ['record' => $record]);                    
                // }),
                
                // ->disk('public')
                
                // TextColumn::make('pdf')->sortable()->searchable(),
                // TextColumn::make('created_at')->dateTime()
            ])

            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
    
    public static function getRelations(): array
    {
        return [
            //
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListStudies::route('/'),
            'create' => Pages\CreateStudy::route('/create'),
            'edit' => Pages\EditStudy::route('/{record}/edit'),
        ];
    }    
}
