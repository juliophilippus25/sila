<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FormController extends Controller
{
    public function index()
    {
        return view('create');

        // $forms = Form::all();
        // return response()->json($forms);
    }

    public function create()
    {
    }


    public function show($id)
    {
        $form = Form::findOrFail($id);
        return response()->json($form);
    }

    public function edit($id)
    {

        $form = Form::findOrFail($id);
        return view('edit', compact('form'));
    }


    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            // 'user_id' => 'required|exists:users,id',
            // 'petugas_id' => 'nullable|exists:users,id',
            'type' => 'nullable|string',
            'status' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $form = Form::create($request->all());

        return response()->json([
            'message' => 'Form created successfully',
            'form' => $form
        ], 201);
    }

    public function update(Request $request, $id)
    {
        $form = Form::findOrFail($id);

        $validator = Validator::make($request->all(), [
            // 'user_id' => 'required|exists:users,id',
            // 'petugas_id' => 'nullable|exists:users,id',
            'type' => 'nullable|string',
            'status' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $form->update($request->all());

        return response()->json([
            'message' => 'Form updated successfully',
            'form' => $form
        ]);
    }

    public function destroy($id)
    {
        $form = Form::findOrFail($id);

        $form->delete();

        return response()->json(['message' => 'Form deleted successfully']);
    }
}

