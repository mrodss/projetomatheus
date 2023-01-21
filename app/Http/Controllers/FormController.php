<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $quantidadeDeItensAExibir = 5;
        $listaVagas = Form::latest()->paginate(5);
        return view('vaga/index', compact('listaVagas'))->with('i', (request()->input('page', 1) - 1) * $quantidadeDeItensAExibir);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('vaga/formulario');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|max:255',
            'sobrenome' => 'required|max:255',
            'address' => 'required|max:255',
            'address2' => 'required|max:255',
            'city' => 'required|max:255',
            'state' => 'required|max:255',
            'postal' => 'required|max:9',
            'selecione1' => 'required|max:255',
            'email' => 'required|max:255',
            'areacode' => 'required|max:3',
            'phone' => 'required|max:10',
            'selecione2' => 'required|max:255',
            'number1' => 'required|max:255',
            'number2' => 'required|max:255',
            'data' => 'required|max:255',
            'arquivo' => 'required',
        ]);

        $input = $request->all();
        if ($arquivo = $request->file('arquivo')) {
            $destinationPath = 'arquivo/';
            $nameImage = date('YmdHis') . "." . $arquivo->getClientOriginalExtension();
            $arquivo->move($destinationPath, $nameImage);
            $input['arquivo'] = $nameImage;
        }
        Form::create($input);

        // $vaga = Form::create($storeData);
        return redirect('./')->with('Sucesso', 'Formulário salvo com sucesso');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Form $vaga)
    {
        return view('vaga/show', compact('vaga'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Form $vaga)
    {
        return view('vaga.edit', compact('vaga'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Form $vaga)
    {
        $request->validate(
            [
                'nome' => 'required|max:255',
                'sobrenome' => 'required|max:255',
                'address' => 'required|max:255',
                'address2' => 'required|max:255',
                'city' => 'required|max:255',
                'state' => 'required|max:255',
                'postal' => 'required|max:9',
                'selecione1' => 'required|max:255',
                'email' => 'required|max:255',
                'areacode' => 'required|max:3',
                'phone' => 'required|max:10',
                'selecione2' => 'required|max:255',
                'number1' => 'required|max:255',
                'number2' => 'required|max:255',
                'data' => 'required|max:255',
            ]
        );

        $input = $request->all();
        // print_r($input);
        // die();

        if ($arquivo = $request->file('arquivo')) {
            $destinationPath = 'arquivo/';
            $nameImage = date('YmdHis') . "." . $arquivo->getClientOriginalExtension();
            $arquivo->move($destinationPath, $nameImage);
            $input['arquivo'] = $nameImage;
        } else {
            unset($input['arquivo']);
        }

        $vaga->update($input);
        return redirect('/vaga')->with('sucess', 'Vaga editada com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Form $vaga)
    {
        $vaga->delete();
        return redirect('/vaga')->with('sucess', 'Vaga apagada com sucesso');
    }
}
