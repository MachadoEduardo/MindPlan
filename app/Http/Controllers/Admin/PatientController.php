<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePatientRequest;
use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index(){
        $patients = Patient::paginate(15);
        return view('admin.patients.index', compact('patients')); // Ajuste no caminho da view
    }

    public function create(){
        return view('admin.patients.create');
    }

    public function store(StorePatientRequest $request){
        Patient::create($request->validated());
        return redirect()
            ->route('patients.index')
            ->with('success', 'Paciente criado com sucesso!!'); // Mensagem corrigida
    }
    
    /*
    public function edit(string $id){
        if(!$patient = Patient::find($id)) { // Variável corrigida
            return redirect()->route('admin.patients.index')->with('message', 'Paciente não encontrado');
        }
        return view('admin.patients.edit', compact('patient'));
    }

    public function update(UpdatePatientRequest $request, string $id){
        if(!$patient = Patient::find($id)) { 
            return back()->with('message', 'Paciente não encontrado');
        }
        $data = $request->only('first_name', 'last_name', 'gender', 'nacionality', 'email'); 
        if($request->password){
            $data['password'] = bcrypt($request->password);
        }
        $patient->update($data);
        return redirect()
            ->route('admin.patients.index')
            ->with('success', 'Paciente editado com sucesso!!');
    }

    public function show(string $id){
        if(!$patient = Patient::find($id)) { 
            return redirect()->route('admin.patients.index')->with('message', 'Paciente não encontrado');
        }
        return view('admin.patients.show', compact('patient'));
    }

    public function destroy(string $id){
        if(!$patient = Patient::find($id)) { 
            return back()->with('message', 'Paciente não encontrado');
        }
        if(auth()->user()->id === $patient->id) { 
            return back()->with('message', 'Você não pode deletar seu próprio cadastro');
        }
        $patient->delete();
        return redirect()
            ->route('admin.patients.index')
            ->with('success', 'Paciente deletado com sucesso!!');
    } */
}
