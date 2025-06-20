<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\Item;
use Filament\Tables;
use App\Models\Invoice;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Facades\Filament;
use Filament\Resources\Resource;
use Awcodes\TableRepeater\Header;
use Illuminate\Support\HtmlString;
use Filament\Support\Enums\Alignment;
use Illuminate\Support\Facades\Blade;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\InvoiceResource\Pages;
use Awcodes\TableRepeater\Components\TableRepeater;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\InvoiceResource\RelationManagers;

class InvoiceResource extends Resource
{
    protected static ?string $model = Invoice::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?int $navigationSort = 6;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                \Filament\Forms\Components\Section::make('')
                    ->id('invoice')
                    ->schema([

                        Forms\Components\Select::make('customer_id')
                            ->relationship(
                                name: 'customer',
                                titleAttribute: 'name'
                            )
                            ->required()
                            ->searchable()
                            ->preload(),
                        Forms\Components\DatePicker::make('date')
                            ->default(date('Y-m-d'))
                            ->required(),
                        Forms\Components\DatePicker::make('due_date')
                            ->default(date('Y-m-d'))
                            ->required(),
                        Forms\Components\Select::make('status')
                            ->options([
                                'sent' => 'sent',
                                'pending' => 'pending',
                                'overdue' => 'overdue',
                                'paid' => 'paid',
                                'cancel' => 'cancel',
                                'refund' => 'refund',

                            ]),

                        Forms\Components\TextInput::make('invoice_number')
                            ->readonly()
                            ->visible(fn($operation) => $operation == 'edit'),
                        Forms\Components\Textarea::make('notes')
                            ->columnSpanFull(),


                        TableRepeater::make('item_invoice')
                            ->live()
                            ->headers([
                                Header::make('name')->width('150px'),
                                Header::make('quantity')->width('150px'),
                                Header::make('price')->width('150px'),
                                Header::make('amount')->width('150px'),
                            ])
                            ->schema([
                                \Filament\Forms\Components\Select::make('id')
                                    ->options(Item::pluck('name', 'id'))
                                    ->searchable()
                                    ->required()
                                    ->afterStateUpdated(function ($set, $get, $state) {
                                        self::calculate_total($set, $get);
                                    }),
                                \Filament\Forms\Components\TextInput::make('pivot.quantity')
                                    ->integer()  // The input should be an integer.
                                    ->required()
                                    ->afterStateUpdated(function ($set, $get, $state) {
                                        self::calculate_total($set, $get);
                                    }),
                                \Filament\Forms\Components\TextInput::make('price')
                                    ->readonly()
                                    ->dehydrated(false)
                                    ->required(),
                                \Filament\Forms\Components\TextInput::make('amount')
                                    ->readonly()
                                    ->dehydrated(false)
                                    ->required(),

                            ])
                            ->addActionAlignment(Alignment::Start)
                            ->columnSpan('full'),
                        \Filament\Forms\Components\Placeholder::make('footer')
                            ->hiddenLabel()
                            ->content(function ($record, $get) {
                                $html = '';
                                $sub_total = 0;
                                foreach ($get('item_invoice') as $key => $value) {
                                    $sub_total += (float)$value['pivot']['quantity'] * $value['price'];
                                }
                                $html .= Blade::render('
                                <div class="flex flex-col justify-center items-end bg-gray-100 rounded">
                                        <div class="w-1/3  flex justify-between p-2">
                                                <span class="font-bold dark:text-black">Sub Total</span>
                                                <span class="font-bold dark:text-black">' . number_format($sub_total, '2', '.', '') . '</span>
                                        </div>
                                        <div class="w-1/3  flex justify-between p-2">
                                                <span class="font-bold dark:text-black text-lg">Total</span>
                                                <span class="font-bold dark:text-black text-lg">' . number_format($sub_total, '2', '.', '')  . '</span>
                                        </div>

                                </div>

                            ');
                                return new HtmlString($html);
                            })
                            ->columnSpan('full'),
                        // ->content(fn($record, $get) => new HtmlString(Blade::render('<div>Hello, {{ auth()->user()->name }}!</div>')))
                    ])
                    ->columns(2)
            ]);
    }

    static function  calculate_total($set, $get)
    {
        $price = Item::find($get('id'))?->price ?? 0;
        $amount = (float)$price * (float)$get('pivot.quantity');
        $set('price', $price);
        $set('amount', number_format($amount, '2', '.', ''));
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('customer.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('date')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('due_date')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('invoice_number')
                    ->searchable(),
                Tables\Columns\TextColumn::make('status')
                    ->badge(),
                Tables\Columns\TextColumn::make('total')
                    ->state(function ($record) {
                        $data = $record->items;
                        $total = 0;
                        foreach ($data as $k => $v) {
                            $total = $total + ($v->pivot->quantity * $v->price);
                        }

                        return $total;
                    })
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('deleted_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\ForceDeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(),
                ]),
            ])
            ->recordUrl(null)
            ->recordAction(null)
            ->defaultSort('updated_at', 'desc');
    }

    // public static function getRelations(): array
    // {
    //     return [
    //         //
    //         RelationManagers\ItemsRelationManager::class,
    //     ];
    // }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListInvoices::route('/'),
            'create' => Pages\CreateInvoice::route('/create'),
            'edit' => Pages\EditInvoice::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
