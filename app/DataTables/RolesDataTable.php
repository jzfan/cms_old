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
        $roles = Role::with('users', 'permissions');
        // $roles = Role::select([
        //     'roles.id',
        //     'roles.name',
        //     \DB::raw('count(users.role_id) as count'),
        //     \DB::raw('count(permission_role.permission_id) as count2'),
        //     'roles.created_at',
        // ])->leftJoin('users','users.role_id','=','roles.id')
        //   ->leftJoin('permission_role','permission_role.role_id','=','roles.id')
        // ->groupBy('users.role_id');

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
            'id'=>['title'=>'ID', 'name'=>'roles.id'],
            'name'=>['title'=>'名字', 'name'=>'roles.name'],
            'users'=>['title'=>'人数', 'data'=>'users.length', 'searchable'=>false, 'orderable'=>false],
            'permissions'=>['title'=>'权限数', 'data'=>'permissions.length', 'searchable'=>false, 'orderable'=>false],
            'created_at'=>['title'=>'创建于', 'name'=>'roles.created_at']
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