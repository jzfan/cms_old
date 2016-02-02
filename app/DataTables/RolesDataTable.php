<?php

namespace App\DataTables;

use App\Role;
use Yajra\Datatables\Services\DataTable;

class RolesDataTable extends DataTable
{
    // protected $printPreview  = 'path.to.print.preview.view';

    /**
     * Display ajax response.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->addColumn('action', 'admin.role.td')
            ->make(true);
    }

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {

        $roles = Role::select([
            'roles.id',
            'roles.name',
            \DB::raw('count(users.role_id) as count'),
            'roles.created_at',
            'roles.updated_at'
        ])->join('users','users.role_id','=','roles.id')
        ->groupBy('users.role_id');

        return $this->applyScopes($roles);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\Datatables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->columns($this->getColumns())
            ->addAction(['width' => '120px', 'title'=>'操作'])
            ->parameters($this->getBuilderParameters());
    }

    /**
     * Get columns.
     *
     * @return array
     */
    private function getColumns()
    {
        return [
            'id'=>['title'=>'ID'],
            'name'=>['title'=>'名字'],
            'count'=>['title'=>'人数'],
            'created_at'=>['title'=>'创建于'],
            'updated_at'=>['title'=>'更新于']
        ];
    }


    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'roles';
    }
}
