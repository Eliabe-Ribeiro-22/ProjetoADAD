## Info que preciso
Favor informar:
    Nome completo, email, telefone, endereco completo(rua, nº, bairro, cidade, SC)

Mas será que preciso pedir a todos os líderes OU somente ao SECREário, responsável por cadastrar os alunos do SITE?
## To do: 
- pedir informações dos líderes do adad, para criar login dos líderes adad --> = DEVO FAZER
- colocar um text aqui nas página reunião--> = COM PAI
- adicionar mensageria com toastr: --> = SOZINHO
  - após isso, desativa a opção de cadastrar novo líder -->

## Versão 2.0 
<!-- A api não está funcionando, pois eu desativei ela e remendei com um array do versículo: salmo 91.1 -->
<!-- A recuperação de senha não está funcionando -->

## Novas Features

### Desenvolver chamada dos alunos presentes na aula

#### Tables
    - alunos
    - professores = saber qual é o professor que está fazendo a chamada
    - tabela chamada, que armazena:
        - nome de todos aluno, professor, dia, o aluno tal está presente ou Não(campo boleano)
Teremos que fazer relacionamentos entre ALUNO -> PROFESSOR(1 aluno pode ter 1 OU muitos professores, 1 professor pode ter 1 OU muitos alunos)

### Desenvolver relatório de qual aluno foi honra ao mérito, adad destaque e patrulha vencedora
    - Salvar notas de cada aluno
    - exibir um PDF em forma de relatório, exibindo em ordem decrescente de nota(um ranking do melhor para o pior)

