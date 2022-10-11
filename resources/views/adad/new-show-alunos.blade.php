{{-- Frase que irá no title da página: [`Cadastrar`] ou [`Alterar`] aluno --}}
@php
// Por padrão é Cadastro de Alunos
$title = 'Cadastrar Aluno';
// Se o usuário estiver alterando
if ($alterar) {
// o title será de Alteração
$title = 'Alterar aluno';
}
@endphp

<head>
    <x-adad.head.head :title="$title" />
</head>

<body>
<div class="exibir-alunos-bg" style="100px">		
	<table >
		<div style="width: 100%; height: 20px; background: red; margin: 0 auto; text-align: center;">
			<h3>ADAD - Alunos Cadastrados</h3>
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