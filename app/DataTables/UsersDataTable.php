<?php

namespace App\DataTables;

use App\User;
use Yajra\Datatables\Services\DataTable;

class UsersDataTable extends DataTable
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
            ->addColumn('action', 'admin.user.td')
            ->make(true);
    }

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {

        $users = User::select(['users.id', 'users.name', 'users.email', 'users.created_at', 'roles.name as role'])
                    ->leftJoin('roles', 'roles.id', '=', 'users.role_id');

        return $users;

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
            'id'=>['title'=>'ID','name'=>'users.id'],
            'name'=>['title'=>'名字', 'name'=>'users.name'],
            'email',
            'role'=>[ 'title'=>'角色', 'name'=>'roles.name'],
            // 'role'=>[ 'title'=>'角色', 'searchable'=>false],
            'created_at'=>['title'=>'创建于', 'name'=>'users.created_at']
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'users';
    }
}
