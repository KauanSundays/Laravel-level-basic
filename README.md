### Laravel Basics Repository

Este repositório contém exercícios e projetos básicos para aprender os fundamentos do framework Laravel. É uma ótima maneira de construir uma base sólida em desenvolvimento web com Laravel.

## Exercícios
teste
<h3>Rotas e Controladores:</h3>

<ol>
  <li>Crie uma rota que retorna uma mensagem simples ✔️</li>
  <li>Defina uma rota que aceita um parâmetro de URL e exiba-o ✔️</li>
  <li>Crie um controlador chamado UserController ✔️</li>
  <li>Defina rotas para listar e exibir usuários usando o controlador. ✔️</li>
  <li>Adicione uma rota que redireciona para outra rota. ✔️</li>
  <li>Use a diretiva @foreach do Blade para exibir uma lista de itens em uma view. ✔️</li>
</ol>

<h3>Modelos e Banco de Dados:</h3>

<ol>
   <li>Crie um modelo chamado Produto usando o Artisan. ✔️</li>
   <li>Migre uma tabela de banco de dados para armazenar produtos. ✔️</li>
   <li>Crie um seeder para popular a tabela de produtos com dados de exemplo. ✔️</li>
   <li>Escreva uma consulta Eloquent para recuperar todos os produtos. ✔️</li>
   <li>Adicione validação de dados ao criar um novo produto. ✔️ </li>
   <li>Exiba a lista de produtos em uma view usando Blade. ✔️ </li>
</ol>

<h3>Autenticação:</h3>

<ol>
<li>Configure a autenticação de usuário usando o Artisan. ✔️ </li>
<li>Crie um sistema de registro de usuário. ✔️ </li>
<li>Implemente o login de usuário. ✔️  </li>
<li>Proteja uma rota para que apenas usuários autenticados possam acessá-la.  ✔️ </li>
</ol>

<h3>Middleware:</h3>

<ol>
<li>Crie um middleware personalizado que adiciona um cabeçalho HTTP a todas as respostas. </li>
<li>Aplique um middleware globalmente para todas as rotas.</li>
<li>Use um middleware para verificar se um usuário tem permissão para acessar uma rota.</li>
</ol>

<h3>Formulários e Validação:</h3>

<ol>
<li>Crie um formulário para criar um novo produto.</li>
<li>Valide os dados do formulário no controlador.</li>
<li>Exiba mensagens de erro na view quando a validação falhar.</li>
</ol>

<h3>Views e Blade:</h3>

<ol>
<li>Crie uma view que estende um layout principal (master layout).</li>
<li>Use diretivas @if e @else do Blade para controle condicional.</li>
<li>Use a diretiva @foreach para exibir uma lista de produtos.</li>
<li>Crie um arquivo de layout personalizado para suas views.</li>
</ol>

<h3>Relacionamentos em Eloquent:</h3>

<ol>
<li>Defina um relacionamento de um-para-muitos entre um modelo Post e Comentário.</li>
<li>Crie um formulário para adicionar comentários a um post.</li>
<li>Exiba os comentários associados a um post em sua view.</li>
</ol>

<h3>Paginação:</h3>

<ol>
<li>Divida uma lista de produtos em várias páginas usando paginação.</li>
<li>Adicione links de paginação à sua view.</li>
</ol>

<h3>Envio de E-mails:</h3>

<ol>
<li>Configure o envio de e-mails usando o serviço de envio de e-mails do Laravel.</li>
<li>Crie um controlador para enviar um e-mail de contato.</li>
<li>Use uma view para criar o conteúdo do e-mail.</li>
</ol>

<h3>Fila (Queue):</h3>

<ol>
<li>Configure a fila para processar o envio de e-mails em segundo plano.</li>
<li>Crie uma tarefa de fila para enviar e-mails.</li>
<li>Dispare a tarefa de fila quando um usuário enviar um formulário de contato.</li>
</ol>

<h3>Agendamento (Scheduling):</h3>

<ol>
<li>Configure uma tarefa agendada que é executada a cada dia.</li>
<li>Use o agendamento para realizar tarefas como limpar registros antigos.</li>
</ol>

<h3>Gerenciamento de Erros:</h3>

<ol>
<li>Personalize a página de erro 404.</li>
<li>Implemente uma página de erro personalizada para erros 500.</li>
</ol>

<h3>Arquivos Estáticos e Mix:</h3>

<ol>
<li>Configure o Laravel Mix para compilar CSS e JavaScript.</li>
<li>Adicione arquivos CSS e JS a uma view e compile-os usando Mix.</li>
<li>Configure Mix para minificar e combinar arquivos.</li>
</ol>

<h3>Testes:</h3>

<ol>
<li>Escreva um teste unitário para um método em um controlador.</li>
<li>Escreva um teste funcional para verificar a autenticação de usuário.</li>
<li>Execute os testes usando PHPUnit.</li>
</ol>

<h3>API RESTful:</h3>

<ol>
<li>Crie um controlador e rotas para uma API RESTful simples.</li>
<li>Use autenticação de token para proteger suas rotas de API.</li>
<li>Escreva documentação básica para sua API usando Markdown.</li>
</ol>

## Projetos

Além dos exercícios, este repositório também inclui projetos simples que permitem aplicar os conceitos aprendidos de forma prática:

1. **Blog Simples**
   - Criação de um blog básico com postagens e comentários.

2. **API de Tarefas**
   - Criação de uma API RESTful para gerenciar tarefas.

3. **Sistema de E-commerce**
   - Construção de um sistema de e-commerce com listagem de produtos.

4. **Agenda de Contatos**
   - Desenvolvimento de uma agenda de contatos.

## Como Usar

Você pode clonar este repositório e seguir as instruções em cada exercício ou projeto. Certifique-se de ter o ambiente de desenvolvimento Laravel configurado.

## Contribuição

Se você gostaria de contribuir com mais exercícios, projetos ou melhorias, fique à vontade para enviar uma solicitação pull. Espero que este repositório ajude você a aprender e aprimorar suas habilidades em Laravel!

## Licença

Este projeto está licenciado sob a Licença MIT - consulte o arquivo [LICENSE](LICENSE) para obter detalhes.
