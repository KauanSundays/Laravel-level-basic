<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        .boxLogin { 

padding:5em 0; 
background-color:#d9d9d9; 
}

.boxLogin .content { padding:0.5em; }

.login  { 

width:100%; 
overflow: hidden; 
margin:auto; 
display:inherit; 
background-color:#fff; 
border-radius:4px; 
box-shadow: 1px 0px 3px 0px #cbcbcb; 

}

.login h1 { 

text-align:center; 
font-family:'open_sansregular';
font-size:1.5em; 
border-bottom:1px #e9e9e9 solid; 
padding:0.5em;
background-color:#0085d5; 
color:#ffffff; 
}

.login .padding { padding:1.5em; float:left;  }

.login label { 

width:100%; 
float:left; 
margin-bottom:1em; 
}

.login .campos { 

border-top:1px transparent solid; 
border-left:1px transparent solid; 
border-bottom:1px #eaeaea solid; 
border-right:1px transparent solid; 
color:#414141; 
font-family:'open_sansregular';
font-size:0.9em; 
outline:none; 
padding: 0.5em 0em;
transition:0.4s; 
}

.login .campos:focus { 

border-top:1px transparent solid; 
border-left:1px transparent solid; 
border-bottom:1px #0085d5 solid; 
border-right:1px transparent solid; 
color:#0085d5; 
}

.login .btn { 

width:auto; 
float:left; 
padding:0.4em 1.3em; 
font-family:'open_sansregular'; 
font-size:1em; 
background-color:#0085d5; 
color:#fff; 
border:0; 
border-radius:4px;
transition:0.4s; 

}

.login .btn:hover  { 

background-color:#4c4c4c; 

}

.login .linksForm { 

width:100%; 
float:left; 
background-color:#f6f6f6; 
border-top:1px #e9e9e9 solid; 
padding:1em 1.5em; 
display:inline-block;
transition:0.4s; 

}

.login .linksForm a { 

float:left; 
margin-bottom:0.5em; 
text-decoration:none; 
font-size:0.89em; 
font-family:'open_sansregular'; 
color:#868686; 
margin-right:10px;
border-right:1px #d9d9d9 solid;
padding-right:10px;
transition:0.4s ;

}

.login .linksForm a:last-child { 

border-right:0;
padding-right:0px;

}

.login .linksForm a:hover { color:#ffa700; }

/*Responsivo*/
/*480PX BREAKPOINT*/
@media (min-width:30em){

.login  { width:50%; }

}

/*768PX BREAKPOINT*/
@media (min-width:48em){

.login  { width:35%; }
.login .linksForm a { font-size:0.9em; }

} 
    </style>
    <title>Document</title>
</head>
<body>
    <section class="boxLogin container">
        <div class="content">
              
              <form class="login" method="post" name="login">
        
                <h1><i class="icon icon-key-1"></i> Login</h1>
        
                <div class="padding">
        
                  <label>
                    <input type="text" 
                    class="campos" 
                    placeholder="Nome do Produto..." 
                    name="nome">
                  </label>
        
                  <label>
                    <input type="text" 
                    class="campos" 
                    placeholder="Valor do produto"  
                    name="preco">
                  </label>
                  
                  <label>Disponivel?
                    <select name="disponivel" id="disponivel">
                        @foreach(['sim' => 'Sim', 'não' => 'Não'] as $value => $label)
                            <option value="{{ $value }}">{{ $label }}</option>
                        @endforeach
                    </select>
                  </label>
                  
                                
        
                  <input type="submit" class="btn fade_8S" name="login" value="Entrar">
                  
                </div><!--padding-->
        
                <div class="linksForm">
        
                  <a href="#" class="fade_4S" title="Resgatar Senha"><i class="icon icon-forward-1"></i> Resgatar Senha</a> 
                  <a href="#" class="fade_4S" title="Cadastrar-se"><i class="icon icon-user-add"></i> Cadastro</a>
        
                </div>
        
              </form>
        
         </div>
         </section><!--Login-->
</body>
</html>