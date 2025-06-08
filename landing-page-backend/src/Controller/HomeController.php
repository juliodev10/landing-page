<?php 

namespace App\Controller;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Slim\Views\PhpRenderer;
use App\Model\ContatoModel;

final class HomeController
{
    public function home(
        ServerRequestInterface $request, 
        ResponseInterface $response,
        $args
    ) {
        $data['informacoes'] = array(
            'title' => 'Landing Page Projeto 01 - All In',
            'description' => 'Essa é a descrição da landing page',
            'author' => 'JC Dev',
            'url' => URL_BASE.'',
            'site_name' => 'All In',
            'image' => URL_BASE.'resources/imagens/galeria-eventos.png>',
            'image_alt' => 'Eventos'
    );
        $renderer = new PhpRenderer(DIRETORIO_TEMPLATES);
        return $renderer->render($response, "home.php", $data);
    }

    public function receber_formulario(
        ServerRequestInterface $request, 
        ResponseInterface $response,
        $args
    ) {
        $nome = $request->getParsedBody()['nome'];
        $telefone = $request->getParsedBody()['telefone'];
        $mensagem = $request->getParsedBody()['mensagem'];

        $campos = array(
            'nome' => $nome,
            'telefone' => $telefone,
            'mensagem' => $mensagem
        );
        $contato = new ContatoModel();

        $contato->insertContatoModel($campos);

        header('Location: '.URL_BASE.'contato-recebido');
        exit();

       // echo "<pre>";
       // var_dump($nome, $telefone, $mensagem);
       // exit();

    //     $data['informacoes'] = "";
    //     $renderer = new PhpRenderer(DIRETORIO_TEMPLATES);
    //     return $renderer->render($response, "home.php", $data);
    // }
    }
    public function contato_recebido(
        ServerRequestInterface $request, 
        ResponseInterface $response,
        $args
    ) {
        $data['informacoes'] = array(
            'title' => 'Mensagem Recebida-Landing Page Projeto 01 - All In',
            'description' => 'Essa é a descrição da landing page',
            'author' => 'JC Dev',
            'url' => URL_BASE.'contato-recebido',
            'site_name' => 'All In',
            'image' => URL_BASE.'resources/imagens/galeria-eventos.png>',
            'image_alt' => 'Eventos'
        );
        $renderer = new PhpRenderer(DIRETORIO_TEMPLATES);
        return $renderer->render($response, "contato_recebido.php", $data);
    }
    public function page(
        ServerRequestInterface $request, 
        ResponseInterface $response,
        $args
    ) {
        $data['informacoes'] = array(
            'title' => 'Landing Page Projeto 01 - All In',
            'description' => 'Essa é a descrição da landong page',
            'author' => 'JC Dev',
            'url' => URL_BASE.'',
            'site_name' => 'All In',
            'image' => URL_BASE.'resources/imagens/galeria-eventos.png>',
            'image_alt' => 'Eventos'
            );
                
        $renderer = new PhpRenderer(DIRETORIO_TEMPLATES);
        return $renderer->render($response, "home.php", $data);
    }
}