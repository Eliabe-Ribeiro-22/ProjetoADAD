<div class="flex items-center justify-end mt-4">
    @if ($alterar)
        {{-- <button type="submit"
            class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition ml-4">
            Alterar Aluno
        </button> --}}
        {{-- Projeto EVA --}}
        <a href="#" onclick="
            this.closest('form').submit();loading('Alterando aluno');return false; ">Alterar aluno</a>
    @else
        {{-- <button type="submit"
            class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition ml-4">
            <a onclick="loading('Cadastrando aluno...')"></a>
            Cadastrar Aluno
        </button> --}}

    {{-- Projeto EVA --}}
    <a href="#" onclick="
            this.closest('form').submit();loading('Cadastrando aluno');return false; ">Cadastrar aluno</a>
    @endif
</div>

@if ($alterar)
    {{-- Cancelar Alterações --}}
    <a class="underline text-sm 
        text-gray-600 mx-auto 
        hover:text-gray-900"
        href="{{ route('aluno_create') }}">
        Cancelar Alterações
    </a>
@endif