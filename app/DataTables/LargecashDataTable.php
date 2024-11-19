<?php

namespace App\DataTables;

use App\Models\Largecash;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class LargecashDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('action', function($query)
            { return '<div class="btn-group btn-group-sm" role="group" aria-label="">

                            <button id="getEditProductData" class="btn btn-xs btn-success  label-sm  open-modal" data-toggle="modal" data-target="#myModal2" value="'.$query->id.'"><i class="fa fa-edit"></i></button>

                            <a class="btn btn-danger" href="/delete-large-cash/'.$query->id.'"><i class="fa fa-trash"></i></a>



                          </div>';})
            ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Largecash $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('largecash-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    //->dom('Bfrtip')
                    ->orderBy(1)
                    ->selectStyleSingle()
                    ->buttons([
                        Button::make('excel'),
                        Button::make('csv'),
                        Button::make('pdf'),
                        Button::make('print'),
                        Button::make('reset'),
                        Button::make('reload')
                    ]);
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
            Column::computed('action')
                  ->exportable(false)
                  ->printable(false)
                  ->width(60)
                  ->addClass('text-center'),
          Column::make('BRANCH_NAME')->nullable(),
          Column::make('AC_BRANCH')->nullable(),
          Column::make('CIF')->nullable(),
          Column::make('BANK_CODE')->nullable(),
          Column::make('TRN_DT')->nullable(),
          Column::make('NAME_OF_PERSANON_TRANSACTING')->nullable(),
          Column::make('AC_NO')->nullable(),
          Column::make('ID_OF_PERSON_TRANSACTING')->nullable(),
          Column::make('NATIONALITY_OF_PERSON_TRANSACTING')->nullable(),
          Column::make('DESCRIPTION_OF_TXN')->nullable(),
          Column::make('NARRATIONS')->nullable(),
          Column::make('AC_CCY')->nullable(),
          Column::make('LCY_AMOUNT')->nullable(),
          Column::make('USD_EQUIV')->nullable(),
          Column::make('TRN_CODE')->nullable(),
          Column::make('TRN_REF_NO')->nullable(),
          Column::make('TRANSACTING_CUSTOMER')->nullable(),
          Column::make('CUSTOMER_NAME')->nullable(),
          Column::make('EXCH_RATE')->nullable(),
          Column::make('PURPOSE_OF_TRANSACTION')->nullable(),
          Column::make('SOURCE_OF_FUNDS')->nullable(),
          Column::make('NATURE_OF_BUSINESS')->nullable(),
          Column::make('PIN_NO_OF_ENTITY')->nullable(),
          Column::make('NAME_OF_SIGNATORIES')->nullable(),
          Column::make('ID_PP_NO_OF_SIGNATORIES')->nullable(),
          Column::make('OCCUPATION_OF_SIGNATORIES')->nullable(),
          Column::make('DOB_OF_SIGNATORIES')->nullable(),
          Column::make('NATIONALITY_OF_SIGNATORIES')->nullable(),
          Column::make('reveiwer')->nullable(),
          Column::make('cc')->nullable(),
          Column::make('status')->nullable(),
          Column::make('TRNCODES')->nullable(),
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'Largecash_' . date('YmdHis');
    }
}
