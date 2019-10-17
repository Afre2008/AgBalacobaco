<?php

function listarservicos(){
    global $servicos;
    
        foreach ($servicos as $index => $servico) {
        echo "<div class='col-md-4 p-4'>
        <div class='card'>
            <img class='card-img-top' src='$servico[imagem]' alt='Imagem de capa do card'>
            <div class='card-body'>
              <p class='card-text'><a href='servico.php?id=$index'>$servico[nome]</a></p>
            </div>
          </div>  
        </div>";
    }

}

function getNome($id){
    global $servicos;
    return $servicos[$id]["nome"];
}


$servicos = [
    [
        "nome" => "Desenvolvimento WEB",
        "imagem" => "img/Balacobaco-logo.png",
        "descricao" => "Sites dinamicos, otimizados para motores de busca"
    ],
    [
        "nome" => "Marketing Digital",
        "imagem" => "img/Balacobaco-logo.png",
        "descricao" => "Alcance um publico maior, venda mais rápido!"
    ],
    [
        "nome" => "Consultoria UX",
        "imagem" => "img/Balacobaco-logo.png",
        "descricao" => "Ofereça a melhor experiência para seus usuários"
    ],
    [
        "nome" => "Desenvolvimento JAVA",
        "imagem" => "img/Balacobaco-logo.png",
        "descricao" => "Adicione inteligência ao seu site, otimize o seu site"
    ],
    [
        "nome" => "Redes Sociais",
        "imagem" => "img/Balacobaco-logo.png",
        "descricao" => "Alcance um publico maior, venda mais!"
    ],
    [
        "nome" => "Consultoria",
        "imagem" => "img/Balacobaco-logo.png",
        "descricao" => "Obtenha ajuda de quem sabe o que faz!"
    ]

];

// listarservicos();