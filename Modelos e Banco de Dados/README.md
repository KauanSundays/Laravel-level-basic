<h1>Topicos</h1>

<h3>1. Crie um modelo chamado Produto usando o Artisan. ✔️</h3>
<p>Criei o Modelo Produto Ultilizando o comando: </p>

```sh
php artisan make:model Produto
```

<img src="https://raw.githubusercontent.com/KauanSundays/Laravel-level-basic/master/Modelos%20e%20Banco%20de%20Dados/public/fotomodelo.PNG">

<h3>2. Migre uma tabela de banco de dados para armazenar produtos. ✔️</h3>
<p>Primeiro Criei uma migração com o comando: </p>

```sh
php artisan make:migration create_produtos_table
```

<p>Personalizei a tabela: </p>

<IMG src="https://raw.githubusercontent.com/KauanSundays/Laravel-level-basic/master/Modelos%20e%20Banco%20de%20Dados/public/fotomigration.PNG">

<p>Logo após rodei as migrações: </p>

```sh
php artisan migrate
```

<h3>3. Crie um seeder para popular a tabela de produtos com dados de exemplo. ✔️</h3>
<p>Comando para criar uma seeder: </p>

```sh
php artisan make:seeder ProdutosAleatoriosSeeder
```

<p>Instale a lib faker, onde nos facilitará a criar diversos produtos de uma vez</p>

```sh
composer require fakerphp/faker
```

<p>Agora, customize sua seeder</p>

<img src="https://raw.githubusercontent.com/KauanSundays/Laravel-level-basic/master/Modelos%20e%20Banco%20de%20Dados/public/fotoseedercustom.PNG">

<p>Rode o Seed</p>

```sh
php artisan db:seed
```

<p>Dados adicionados ao banco de dados: </p>

<img src="https://raw.githubusercontent.com/KauanSundays/Laravel-level-basic/master/Modelos%20e%20Banco%20de%20Dados/public/fotobancodedados.PNG">

<h3>4. Escreva uma consulta Eloquent para recuperar todos os produtos. ✔️ </h3>
<p>Criei uma class no produtoController:</p>

```sh
    public function listarProdutos() {
        $produtos = Produto::all();
       		 return view('welcome', ['produtos' => $produtos]);    
    	//Variavel $produtos contem todos os registros da tabela produtos, passados para a view
    	}


```
<P>Na View, ficará assim:</P>

```sh
        <body>
	    @foreach ($produtos as $produto)
	        <div>
	            <p>{{ $produto->nome }} </p>
	        </div>
	    @endforeach
	</body>
	</html>
```

<p>Não esquecer de declarar na rota o controller usado:</p>

```sh
<Route::get('/', [ProdutoController::class, 'listarProdutos']);
```

<h3>5. Adicione validação de dados ao criar um novo produto. ✔️ </h3>
<p>Adicionamos a validação, por uma class no ProdutoController:</p>

<img src="https://raw.githubusercontent.com/KauanSundays/Laravel-level-basic/master/Modelos%20e%20Banco%20de%20Dados/public/fotovalida%C3%A7%C3%A3o.PNG">

<h3>6. Exiba a lista de produtos em uma view usando Blade. ✔️ </h3>
<p>Com este foreach simples:</p>

<img src="https://raw.githubusercontent.com/KauanSundays/Laravel-level-basic/master/Modelos%20e%20Banco%20de%20Dados/public/fotoforeachcustomizada.PNG">

<p>Conseguimos mostrar o nome do produto e seu preço</p>

<img src="https://raw.githubusercontent.com/KauanSundays/Laravel-level-basic/master/Modelos%20e%20Banco%20de%20Dados/public/fotoresultadoforeach.PNG">

<h1>FIM DE Modelos e Banco de Dados</h1>
<P>PARABENS!! VOCE ESTÁ PROGREDINDO</P>
<img src="https://images.sportsbrief.com/images/1120/b347ab5e7adf9d52.webp?v=1" width="400px">






