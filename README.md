# Projeto de site para o cliente Igreja Evangélica Assembleia de Deus em Campo Belo do Sul

<details open>
    <summary name="index">Sumário do Projeto</summary>
    <ol>
        <li><a href="#objetivo-do-projeto">Objetivo do projeto</a></li>
        <li><a href="#backlog-do-produto">Backlog do projeto</a></li>
        <li><a href="#log">Log de eventos</a></li>
        <li><a href="#projeto-online">Projeto online</a></li>
        <li><a href="#developers">Developers</a>
    </ol>

</details>
 <!-- li --><!-- a href="#estrutura">Estrutura do projeto</a --><!--/li -->
 <!-- li><a href="#tecnologias">Dependências e Tecnologias usadas</a></li -->

-----

## Projeto Online

<a name="projetoWeb"></a>

[Projeto Web](https://adcbsul.herokuapp.com/)

<p align="right">(<a href="#index">Voltar ao índice</a>)</p>

## Objetivo do Projeto

<br />

<a name="objetivo"></a>

O cliente quer um site para Igreja Evangélica Assembleia de Deus em Campo Belo do Sul.  

Ele deve conter uma página descrever a entidade não-governamental, uma página inicial e um formulário para contato.

Ele também deve conter o endereço da igreja, que é "Rua Gerônimo Xavier de Oliveira, nº 230, Centro, Campo Belo do Sul, SC, Brasil".
 Telefone:  

- 3249-1036
- What's: +55 (049) 9 88477611
- e-mail: <adcbsul@gmail.com>
- Campos para o formulário:
- Nome
- telefone
- Mensagem que o visitante irá enviar
  
Também deve conter os dias de reuniões, que são:

- Quinta-feira às 19:30 hs
- Domingo às 19:00

Também deve conter uma local para exibir os projetos sociais promovidos pela entidade, que são:

- Roupas;
- Calçados;
- Alimentos;

Deve conter uma parte reservada à divulgação dos eventos do ADAD, bem como uma breve explicação acerca dele, e seus objetivos. O ADAD é a sigla para Adolescentes que Amam a Deus. É um grupo formado por pré-adolescentes e adolescentes de 6 a 21 anos, criado no dia 13 de março de 2001, com sede na cidade de São José - Santa Catarina.

O grupo ADAD prática atividades extra classes, no âmbito físico, social, cultural e espiritual, promovendo atividades criativas onde os adolescentes colocam os princípios éticos cristãos em prática no cotidiano e nas vivências diárias

Algumas atividades que realizamos:

- Prática de acampamento.

- Participação de desfile cívico.

- Instrução de campo como rapel, tirolesa, cama de gato, rastejamento, pista noturna, bivaque, ponte de três cordas, nós e amarras, ou qualquer atividade recreativa.

- Implementação de programas e ações integradas para garantir e defender a promoção dos direitos da criança e do adolescente.

Deve conter uma local para descrever os objetivos do ADAD, sendo eles:

- Contribuir para que as crianças, adolescentes e jovens assumam seu próprio desenvolvimento do caráter, potencialidades físicas, intelectuais, sociais, afetivas, espirituais como cidadãos responsáveis, participantes e úteis em suas comunidades.
- Incentivar o compromisso do adolescente quanto à frequência escolar, bem como ajudá-lo a entender sua vocação, mostrando caminhos para a escolha da carreira profissional.
- Prestar serviços de caráter social, cultural, educacional e esportivo, providenciando para isso cursos, palestras e afins, de sua escolha, obedecendo o regime de atendimento conforme o artigo 9º do Estatuto da Criança e Adolescentes (ECA).
- Promoção da ética, da paz, da cidadania, dos direitos humanos, da democracia e de outros valores universais.

Queremos também uma área restrita, usando um login, onde acessaremos uma área para realizar o cadastro dos alunos ADAD. Os dados que queremos armazenar são como a foto em anexo.

<p align="right">(<a href="#index">Voltar ao índice</a>)</p>

-----

## Backlog do Produto

[Ver SCRUM](https://trello.com/b/Otut9SlE/projeto-adad-scrum)<br/>
<a href="https://trello.com/b/rwOTsaWS/projeto-adad-kanban">Ver KANBAN - Alessandro</a><br/>
<a href="https://trello.com/b/txmJC7si/projeto-adad-kanban-eliabe">Ver KANBAN - Eliabe</a>

<p align="right">(<a href="#index">Voltar ao índice</a>)</p>

<h2 name="log">Log de eventos</h2>

<h4>08/08 - Segunda-feira - Eliabe</h4>
Criado repositório ProjetoADAD no meu Perfil da GitHub.<br/>
Clonagem do repositório para minha máquina local.<br/>
Realizada a instalação do Laravel em nossa aplicação<br/>
Criação da branch Heroku, branch em que o projeto será deployado.<br/>
Alteração no welcome.blade.php para testar se as atualizações do código-fonte estão sendo deployadas corretamente na WEB, através da Heroku.<br/>
Realizado com sucesso o deploy do ProjetoADAD na plataforma Heroku, através da URL: https://adcbsul.herokuapp.com/

<h4>29/08 - Segunda-feira - Eliabe</h4>
Criada main do Igreja Campo Belo do Sul, destinada a exibir os conteúdos da página principal da Igreja.

<h4>29/08 - Segunda-feira - Eliabe</h4>
Criado Header e Footer da página AD Campo Belo do Sul.<br/>
Realizada componentização do Head, Header e Footer da Igreja Evangélica de Campo Belo do Sul.

<h4> 01/09 - Quinta-feira - Vinícius </h4>
Criada rota para a página "objetivos" do programa ADAD. <br />
Criada rota para a página "contato" do programa ADAD. <br />
Criada rota para a página "nossos encontros" do programa ADAD. <br />
Criada rota restrita de login para o programa ADAD. (ainda não funcional)

<h4>05/09 - Segunda-feira - Eliabe </h4>
Criado um formulário para o visitante possa entrar em contato com a IEAD Campo Belo do Sul.<br>
Ele foi criado na view <em>formIgreja</em>

<h4>07/09 - Quarta-feira - Alessandro </h4>
Criado função para envio do formulário de contato via email. <br>
Criado template de email.

<h4>09/09 - Quarta-feira - Eliabe</h4>
Criada branch auth.<br>
Criado Formulário de Login do ADAD.

<h4> 10/09 - Sábado - Eliabe </h4>
Criação do Controller IgrejaController, contendo as funções solicitadas nas Rotas da Igreja.
Realizada componentização das páginas recém-criadas: Institucional, Nossas Reuniões e Projetos.

<h4>10/09 - Sábado - Eliabe </h4>
Realizada componentização do Formulário de Contato.
Criado arquivo de estilização da Igreja, com as devidas componentizações.
Estilização do header e footer do site IEAD Campo Belo.

<h4>11/09 - Domingo - Eliabe </h4>
Criado conteúdos da página inicial do site

<h4>11/09 - Domingo - Alessandro </h4>
Criada página Institucional.<br>
Criada página Nossas Reuniões.

<h4>15/09 - Quinta-feira - Vinícius</h4>
Sessão ADAD: <br/>
Criada a página de login na branch "auth". (CSS ainda será aprimorado) <br/>
Criada a página de cadastro na branch "auth". (CSS ainda será aprimorado) <br/>
Adicionadas validações tanto para login quanto para cadastro. (em teste)

<h4> 01/10 - Sábado - Eliabe </h4>
Responsividade Mobile First para a página Institucional
Iniciado responsividade Mobile First para navbar

<p align="right">(<a href="#index">Voltar ao índice</a>)</p>

-----

## The Developers

<a name="developers"></a>

-----

Alessandro Geras <br>
[Curriculum Vitae](https://alessandrogeras.github.io/Curriculum) <br>
[Linkedin](https://www.linkedin.com/in/alessandrogeras) <br>
[Github](https://github.com/AlessandroGeras) <br>
[Gmail](mailto:alessandrogeras@gmail.com) <br>

-----

Eliabe Ribeiro Mota<br/>
[Curriculum Vitae](https://github.com/Eliabe-Ribeiro-22/Eliabe-Ribeiro-22/blob/main/README.md) <br/>
[Linkedin](https://www.linkedin.com/in/eliabe-ribeiro-mota-b9a1b7233/) <br/>
[Github](https://github.com/Eliabe-Ribeiro-22) <br/>
[Outlook](mailto:eliaberibeiro06@hotmail.com) <br/>
[Gmail](mailto:developer.eliabe06@gmail.com) <br/>

-----

Vinícius Jung <br/>
[Linkedin](https://www.linkedin.com/in/vinicius-jung) <br>
[Github](https://github.com/Vinnie-Jung) <br>
[Outlook](mailto:viniciusjung@outlook.com) <br><br>

<p align="right">(<a href="#index">Voltar ao índice</a>)</p>
