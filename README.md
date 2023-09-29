# Laravel Basics Repository

Este repositório contém exercícios e projetos básicos para aprender os fundamentos do framework Laravel. É uma ótima maneira de construir uma base sólida em desenvolvimento web com Laravel.

## Exercícios

<h3>Rotas e Controladores:</h3>

<ol>
  <li>Crie uma rota que retorna uma mensagem simples.</li>
  <li>Defina uma rota que aceita um parâmetro de URL e exiba-o.</li>
  <li>Crie um controlador chamado UserController.</li>
  <li>Defina rotas para listar e exibir usuários usando o controlador.</li>
  <li>Adicione uma rota que redireciona para outra rota.</li>
  <li>Use a diretiva @foreach do Blade para exibir uma lista de itens em uma view.</li>
</ol>

Modelos e Banco de Dados:

Crie um modelo chamado Produto usando o Artisan.
Migre uma tabela de banco de dados para armazenar produtos.
Crie um seeder para popular a tabela de produtos com dados de exemplo.
Escreva uma consulta Eloquent para recuperar todos os produtos.
Adicione validação de dados ao criar um novo produto.
Exiba a lista de produtos em uma view usando Blade.
Autenticação:

Configure a autenticação de usuário usando o Artisan.
Crie um sistema de registro de usuário.
Implemente o login de usuário.
Proteja uma rota para que apenas usuários autenticados possam acessá-la.
Middleware:

Crie um middleware personalizado que adiciona um cabeçalho HTTP a todas as respostas.
Aplique um middleware globalmente para todas as rotas.
Use um middleware para verificar se um usuário tem permissão para acessar uma rota.
Formulários e Validação:

Crie um formulário para criar um novo produto.
Valide os dados do formulário no controlador.
Exiba mensagens de erro na view quando a validação falhar.
Views e Blade:

Crie uma view que estende um layout principal (master layout).
Use diretivas @if e @else do Blade para controle condicional.
Use a diretiva @foreach para exibir uma lista de produtos.
Crie um arquivo de layout personalizado para suas views.
Relacionamentos em Eloquent:

Defina um relacionamento de um-para-muitos entre um modelo Post e Comentário.
Crie um formulário para adicionar comentários a um post.
Exiba os comentários associados a um post em sua view.
Paginação:

Divida uma lista de produtos em várias páginas usando paginação.
Adicione links de paginação à sua view.
Envio de E-mails:

Configure o envio de e-mails usando o serviço de envio de e-mails do Laravel.
Crie um controlador para enviar um e-mail de contato.
Use uma view para criar o conteúdo do e-mail.
Fila (Queue):

Configure a fila para processar o envio de e-mails em segundo plano.
Crie uma tarefa de fila para enviar e-mails.
Dispare a tarefa de fila quando um usuário enviar um formulário de contato.
Agendamento (Scheduling):

Configure uma tarefa agendada que é executada a cada dia.
Use o agendamento para realizar tarefas como limpar registros antigos.
Gerenciamento de Erros:

Personalize a página de erro 404.
Implemente uma página de erro personalizada para erros 500.
Arquivos Estáticos e Mix:

Configure o Laravel Mix para compilar CSS e JavaScript.
Adicione arquivos CSS e JS a uma view e compile-os usando Mix.
Configure Mix para minificar e combinar arquivos.
Testes:

Escreva um teste unitário para um método em um controlador.
Escreva um teste funcional para verificar a autenticação de usuário.
Execute os testes usando PHPUnit.
API RESTful:

Crie um controlador e rotas para uma API RESTful simples.
Use autenticação de token para proteger suas rotas de API.
Escreva documentação básica para sua API usando Markdown.

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
