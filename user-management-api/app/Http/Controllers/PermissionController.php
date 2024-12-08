<?php

namespace App\Http\Controllers;

use App\Repositories\PermissionRepositoryInterface;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    protected $permissionRepository;

    public function __construct(PermissionRepositoryInterface $permissionRepository)
    {
        $this->permissionRepository = $permissionRepository;
    }

    public function index()
    {
        return response()->json($this->permissionRepository->all());
    }

    public function store(Request $request)
    {
        $permission = $this->permissionRepository->create($request->all());
        return response()->json($permission, 201);
    }

    public function show($id)
    {
        return response()->json($this->permissionRepository->find($id));
    }

    public function update(Request $request, $id)
    {
        $permission = $this->permissionRepository->update($id, $request->all());
        return response()->json($permission);
    }

    public function destroy($id)
    {
        $this->permissionRepository->delete($id);
        return response()->json(null, 204);
    }
}