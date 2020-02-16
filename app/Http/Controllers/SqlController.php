<?php

namespace App\Http\Controllers;

use App\Mariadb;
use App\Mongodb;
use App\Mssql;
use App\Mysql;
use App\Postgresql;
use Illuminate\Http\Request;

class SqlController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $connection = $request->query('connection', 'postgresql');
        $users = $this->getModel($connection)::paginate(5);
        return $users;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|min:8',
            'connection' => 'nullable|in:mysql,mssql,mongodb,mariadb,postgresql'
        ]);
        $user = $this->getModel($validated['connection'] ?? 'postgresql')::create($validated);
        return response()->json($user, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $connection = $request->query('connection', 'postgresql');
        $user = $this->getModel($connection)::find($id);
        if ($user) {
            return $user;
        }
        return response()->json(['error' => true, 'message' => 'User not found'], 400);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|min:8',
            'connection' => 'nullable|in:mysql,mssql,mongodb,mariadb,postgresql'
        ]);
        $user = $this->getModel($validated['connection'])::find($id);
        if ($user) {
            $user->update($validated);
            return $user;
        }
        return response()->json(['error' => true, 'message' => 'User not found to update'], 400);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $connection = $request->query('connection', 'postgresql');
        $user = $this->getModel($connection)::find($id);
        if ($user) {
            $user->delete();
            return response()->json([], 204);
        }
        return response()->json(['error' => true, 'message' => 'User not found to delete'], 400);
    }

    private function getModel($connection)
    {
        if ($connection == 'mysql') {
            return Mysql::class;
        } else if ($connection == 'mongodb') {
            return Mongodb::class;
        } else if ($connection == 'mariadb') {
            return Mariadb::class;
        } else if ($connection == 'mssql') {
            return Mssql::class;
        } else {
            return Postgresql::class;
        }
    }
}
