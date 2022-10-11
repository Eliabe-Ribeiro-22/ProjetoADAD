@php
$title = 'Cadastrar Aluno';
@endphp

<head>
    <x-adad.head.head :title="$title" />
</head>

<body>
    <div class="exibir-alunos-bg"
        style="width: 100px; background: blue; overflow: scroll; overflow-x: scroll;">
        <table style="width: 100px;">
            <div style="width: 100px; height: 20px; background: red; margin: 0 auto; text-align: center;">
                bg
            </div>

            <tr>
                <th>Nome</th>
                <th>Idade</th>
                <th>Série</th>
                <th>Cidade</th>
                <th>Religião</th>
                <th>Editar</th>
                <th>Excluir</th>
            </tr>
        </table>
    </div>
</body>
