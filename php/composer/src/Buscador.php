<?php
namespace manoelneto91\BuscadorDeCursos;

use GuzzleHttp\ClientInterface;
use Symfony\Component\DomCrawler\Crawler;

class Buscador
{
    /**
     * @var ClientInterface
     */
    private $httpClient;
    /**
     * @var Crawler
     */
    private $crawler;

    public function __construct(ClientInterface $httpClient, Crawler $crawler)
    {

        $this->httpClient = $httpClient;
        $this->crawler = $crawler;
    }

    public function buscar(string $url) : array
    {
        $reposta = $this->httpClient->request('GET', $url);

        $html = $reposta->getBody();
        $this->crawler->addHtmlContent($html);

        $elementosCursos = $this->crawler->filter('span.card-curso__nome'); // encontrado no site da Alura
        $cursos = [];

        foreach ($elementosCursos as $elemento){
            $cursos[]=$elemento->textContent;
        }

        return $cursos;
    }
}