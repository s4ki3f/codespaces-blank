<?php

namespace App\Http\Controllers;

use App\Repositories\RoleRepositoryInterface;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    protected $roleRepository;

    public function __construct(RoleRepositoryInterface $roleRepository)
    {
        $this->roleRepository = $roleRepository;
    }

    public function index()
    {
        return response()->json($this->roleRepository->all());
    }

    public function store(Request $request)
    {
        $role = $this->roleRepository->create($request->all());
        return response()->json($role, 201);
    }

    public function show($id)
    {
        return response()->json($this->roleRepository->find($id));
    }

    public function update(Request $request, $id)
    {
        $role = $this->roleRepository->update($id, $request->all());
        return response()->json($role);
    }

    public function destroy($id)
    {
        $this->roleRepository->delete($id);
        return response()->json(null, 204);
    }
}
