<?php

namespace App\Http\Controllers\Admin\Team;

use App\Http\Controllers\Controller;
use App\Models\Admin\Admin;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(Request $request): View
    {
        $search = $request->input('table_search');
        $per_page = (int)$request->input('per_page', 5);

        $admins = Admin::query()
            ->when($search, function (Builder $query, $search) {
                $query->where(function (Builder $query) use ($search) {
                    $query->whereRaw('LOWER(name) LIKE ?', ["%{$search}%"])
                        ->orWhereRaw('LOWER(last_name) LIKE ?', ["%{$search}%"])
                        ->orWhereRaw('LOWER(email) LIKE ?', ["%{$search}%"]);
                });
            })
            ->paginate($per_page);

        return view('admin.team.index', compact('admins'));
    }
}
