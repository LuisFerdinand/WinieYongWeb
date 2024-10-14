<?php

use App\Models\Machine;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class MachineController extends Controller
{
    public function index()
    {
        $machines = Machine::all();
        return view('machines.index', compact('machines'));
    }


    public function create()
    {
        return view('machines.create');
    }

    public function store(Request $request)
    {
        Machine::create($request->all());
        return redirect()->route('machines.index');
    }

    public function edit(Machine $machine)
    {
        return view('machines.edit', compact('machine'));
    }

    public function update(Request $request, Machine $machine)
    {
        $machine->update($request->all());
        return redirect()->route('machines.index');
    }

    public function destroy(Machine $machine)
    {
        $machine->delete();
        return redirect()->route('machines.index');
    }
}
