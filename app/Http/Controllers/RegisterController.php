<?php

namespace App\Http\Controllers;

use App\Models\moradia;
use App\Models\pessoa;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\DB;

class RegisterController extends Controller
{

    protected $erro    = true;

    protected $message = '';

    /**
     * Metodo index, vai listar todos os dados dos usuarios cadastrados
     * 
     * Desenvolvimento: Buscar todos os registros das pessoas e endereço
     * 
     */
    public function index()
    {
        $registros = pessoa::with('moradias')->get();

        return view('welcome', ['registros' => $registros]);
    }

     /**
     * Metodo show, vai listar apenas o usuario buscado
     */
    public function show(string $id)
    {
        $registros = pessoa::with('moradias')->find($id);

        $moradia = '';

        foreach($registros['moradias'] as $value){
            $moradia .= $value;
        }

        return view('paginas.show', ['registro' => $registros, 'moradia' => $moradia]);
    }

    /**
     * Metodo create, realizará o cadastramento dos dados do usuario.
     * 
     * 
     * Desenvolvimento: Iniciei a lógica com try / catch para tratamento de erro na requisição, em seguida, fiz a verificação para saber se todas as informações foram preenchidas para não aceitar dados em branco no armazenamento; cadastrei primeiro os dados da pessoa, pois, se realizou o cadastro pessoal, realize o cadastro do endereço;
     *  
     */
    public function store(Request $request)
    {

        try {
                        
            $validaPessoa = $request->validate([
                'nome'              => 'required',
                'documento'         => 'required',
                'rg'                => 'required',
                'data_nascimento'   => 'required',
                'est_civil'         => 'required',
                'telefone'          => 'required',
            ]);
            
            if ($pessoa = pessoa::create($validaPessoa)) {                

                $validaMoradia = $request->validate([
                    'cep'               => 'required',
                    'rua'               => 'required',
                    'bairro'            => 'required',
                    'estado'            => 'required',
                    'complemento'       => 'required',
                ]);

                $ultimoId = $pessoa->id; 
                $validaMoradia['pessoa_id'] = $ultimoId;

                $moradia = moradia::create($validaMoradia);

            }         

            return redirect('/');

        } catch (\Throwable $th) {
            
            return redirect('/');
        }

    }
   
    /**
     * Metodo Update, atualizará os dados do usuario 
     */
    public function update(Request $request, string $id)
    {

        $validaPessoa = $request->validate([
            'nome'              => 'required',
            'documento'         => 'required',
            'rg'                => 'required',
            'data_nascimento'   => 'required',
            'est_civil'         => 'required',
            'telefone'          => 'required',
        ]);
        
        if ($pessoa = pessoa::where('id', $id)->update($validaPessoa)) {                

            $validaMoradia = $request->validate([
                'cep'               => 'required',
                'rua'               => 'required',
                'bairro'            => 'required',
                'estado'            => 'required',
                'complemento'       => 'required',
            ]);
            
            $moradia = moradia::where('id', $id)->update($validaMoradia);

        }         
        
        return redirect('/')->with('msg', 'Usuário cadastrado com Sucesso');
    }

    /**
     * Metodo destroy, excluir o usuario permanente
     */
    public function destroy(string $id)
    {
        // realiza a exclusão do endereço primeiro, por ser a chave estrangeira e após validar a exclusão, realiza a exclusão dos dados da pessoa
        $moradia = moradia::where('pessoa_id', $id)->delete(); 
        
        if($moradia){
            
            $pessoa = pessoa::where('id', $id)->delete();

            return redirect('/')->with('msg', 'Usuário Excluido com Sucesso');
        }
        
    }
}
