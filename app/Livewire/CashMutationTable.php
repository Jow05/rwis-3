<?php

namespace App\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\CashMutationModel;
use Illuminate\Database\Eloquent\Builder;

class CashMutationTable extends DataTableComponent
{
    protected $model = CashMutationModel::class;

    public function builder(): Builder
    {

        return CashMutationModel::query()
            ->where('cash_mutation.is_archived', false);
    }

    public function configure(): void
    {
        $this->setPrimaryKey('id');
        $this->setDefaultSort('cash_mutation_id', 'asc');
        $this->setSearchFieldAttributes([

            'class' => 'rounded-lg border border-gray-300 p-2',

        ]);
    }

    public function columns(): array
    {
        return [
            Column::make("Cash Mutation ID", "cash_mutation_id")
                ->searchable()
                ->sortable()
                ->hideIf(true),
            Column::make("Cash Mutation Code", "cash_mutation_code")
                ->searchable()
                ->sortable(),
            Column::make("Account Sender", "accountSender.name_account")
                ->searchable()
                ->sortable(),
            Column::make("Amount", "amount")
                ->format(function ($value) {
                    return "Rp. " . number_format($value, 0, ',', '.');
                })
                ->searchable()
                ->sortable(),
            Column::make("Account Receiver", "accountReceiver.name_account")
                ->searchable()
                ->sortable(),
            Column::make("Description", "description")
                ->searchable()
                ->sortable(),
            Column::make("Date", "created_at")
                ->searchable()
                ->sortable(),
            Column::make('Actions')
                ->label(
                    function ($row, Column $column) {
                        $show = '<button class="show-btn text-white font-bold p-2 mx-2 m-1 rounded" wire:click="show(' . $row->cash_mutation_id . ')">Show</button>';
                        $archive = '<button class="archive-btn text-white font-bold p-2 mx-2 m-1 rounded" onclick="document.getElementById(\'my_modal_' . $row->cash_mutation_id . '\').showModal()">Archive</button>
                        <dialog id="my_modal_' . $row->cash_mutation_id . '" class="modal">
                          <div class="modal-box rounded-md shadow-xl">
                            <h3 class="font-bold text-lg mt-2 ml-2">Alert!</h3>
                            <p class="py-4 mt-2 ml-2">Are you sure to archive this data?</p>
                            <div class="modal-action">
                              <form method="dialog">
                                <!-- if there is a button in form, it will close the modal -->
                                <button class="archive-btn text-white font-bold p-2 m-1 rounded" wire:click="archive(' . $row->cash_mutation_id . ')">Archive</button>
                                <button class="add-btn text-white font-bold p-2 mx-2 mb-2 m-1 rounded">Close</button>
                              </form>
                            </div>
                          </div>
                        </dialog>';
                        return $show . $archive;
                    }
                )->html(),
        ];
    }

    public function show($assetId)
    {
        return redirect()->route('bookkeeping.cashmutation.show', $assetId);
    }

    public function archive($id)
    {
        $asset = CashMutationModel::find($id);
        $asset->is_archived = true;
        $asset->save();
    }
}
