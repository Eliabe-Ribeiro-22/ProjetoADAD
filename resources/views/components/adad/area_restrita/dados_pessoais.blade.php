{{-- Variáveis settadas com valor, que por padrão são para exibir o form de cadastro de alunos --}}
@php
    $NOME = '';
    $IDADE = '';
    $nascimento = '';
    $SERIE = '';
    $CPF = '';
    $MAE = '';
    $PAI = '';
    $RUA = '';
    $NUMERO = '';
    $BAIRRO = '';
    $COMPLEMENTO = '';
    $CIDADE = '';
    $RELIGIAO = '';
@endphp

{{-- Se o form for exibido para realizar alteração de aluno --}}
@if ($alterar)
    @method('PUT')
    <h1 id='title-form-alunos'>Editando: {{ $aluno->NOME }}</h1>
    @php
        // As variáveis recebem os valores vindos do aluno cadastrado no Banco de Dados
        $NOME = $aluno->NOME;
        $IDADE = $aluno->IDADE;
        $nascimento = $aluno->nascimento->format('Y-m-d');
        $SERIE = $aluno->SERIE;
        $CPF = $aluno->CPF;
        $MAE = $aluno->MAE;
        $PAI = $aluno->PAI;
        $RUA = $aluno->RUA;
        $NUMERO = $aluno->NUMERO;
        $BAIRRO = $aluno->BAIRRO;
        $COMPLEMENTO = $aluno->COMPLEMENTO;
        $CIDADE = $aluno->CIDADE;
        $RELIGIAO = $aluno->RELIGIAO;
    @endphp
@else
    {{-- Senão, é porque o form será exibido para realizar cadastro --}}
    {{-- de alunos as vars mantêm setadas com null. --}}
    <h1 class='CentralizaText title-alunos' id='title-form-alunos'>Cadastro de Alunos ADAD</h1>
@endif

<h3 class="CentralizaText"> Dados Pessoais</h3>
{{-- Input Nome --}}
<div>
    <label class="block font-medium text-sm text-gray-700" for="name">
        Nome Completo *
    </label>
    <input
        class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-full"
        id="name" type="text" name="NOME" value="{{ $NOME }}" required="required" autofocus="autofocus"
        autocomplete="name">
</div>

{{-- Input Idade --}}
<div class="mt-4">
    <label class="block font-medium text-sm text-gray-700" for="email">
        Idade *
    </label>
    <input
        class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-full"
        id="email" type="number" name="IDADE" value="{{ $IDADE }}" required="required">
</div>

{{-- Input Data de Nascimento --}}
<div class="mt-4">
    <label class="block font-medium text-sm text-gray-700">
        Data de Nascimento *
    </label>
    <input
        class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-full"
        type="date" name="nascimento" value="{{ $nascimento }}" required="required" autofocus="autofocus">
</div>

{{-- Input Série Escolar --}}
<div class="mt-4">
    <label class="block font-medium text-sm text-gray-700">
        Série Escolar *
    </label>
    <input
        class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-full"
        type="text" name="serie" value="{{ $SERIE }}" required="required" autofocus="autofocus">
</div>

{{-- Input CPF --}}
<div class="mt-4">
    <label class="block font-medium text-sm text-gray-700">
        CPF *
    </label>
    <input
        class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-full"
        type="text" name="cpf" value="{{ $CPF }}" required="required" autofocus="autofocus">
</div>

{{-- Input Mãe --}}
<div class="mt-4">
    <label class="block font-medium text-sm text-gray-700">
        Mãe do aluno *
    </label>
    <input
        class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-full"
        type="text" name="mae" value="{{ $MAE }}" required="required" autofocus="autofocus">
</div>

{{-- Input Pai --}}
<div class="mt-4">
    <label class="block font-medium text-sm text-gray-700">
        Pai do aluno
    </label>
    <input
        class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-full"
        type="text" name="pai" value="{{ $PAI }}" autofocus="autofocus">
</div><br>

<h3 class="CentralizaText">Endereço</h3>

{{-- Input Rua --}}
<div>
    <label class="block font-medium text-sm text-gray-700">
        Rua *
    </label>
    <input
        class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-full"
        type="text" name="rua" value="{{ $RUA }}" autofocus="autofocus">
</div>

{{-- Input Número da Casa/Apartamento  --}}
<div class="mt-4">
    <label class="block font-medium text-sm text-gray-700">
        Número *
    </label>
    <input
        class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-full"
        type="number" name="numero" value="{{ $NUMERO }}" required="required" autofocus="autofocus">
</div>

{{-- Input Bairro --}}
<div class="mt-4">
    <label class="block font-medium text-sm text-gray-700">
        Bairro *
    </label>
    <input
        class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-full"
        type="text" name="bairro" value="{{ $BAIRRO }}" required="required" autofocus="autofocus">
</div>

{{-- Input Complemento --}}
<div class="mt-4">
    <label class="block font-medium text-sm text-gray-700">
        Complemento
    </label>
    <input
        class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-full"
        type="text" name="complemento" value="{{ $COMPLEMENTO }}" autofocus="autofocus">
</div>

{{-- Input Cidade --}}
<div class="mt-4">
    <label class="block font-medium text-sm text-gray-700">
        Cidade *
    </label>
    <input
        class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-full"
        type="text" name="cidade" value="{{ $CIDADE }}" required="required" autofocus="autofocus">
</div><br>

<h3 class="CentralizaText"> Dados Eclesiásticos</h3>

{{-- Religião/Crença --}}
<div class="mt-4" style="display: table-cell; vertical-align: middle;width:15%;">
    <label class="block font-medium text-sm text-gray-700">
        Religião/Crença *
    </label>
    <input
        class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200
                                focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-full"
        type="text" name="religiao" value="{{ $RELIGIAO }}" required="required" autofocus="autofocus">
</div>

<!-- Alterar name dos inputs: nome => NOME -->