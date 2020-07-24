<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CoursactuelleController extends AbstractController
{
    /**
     * @Route("/cours", name="cours_actuels")
     */
    public function cardano()
    {
        $json = file_get_contents('https://min-api.cryptocompare.com/data/pricemulti?fsyms=BTC,ETH,LINK,BCH,ADA&tsyms=EUR&=b33fc847fb8ce25afe2257eaef4fccea04219ca2d3022f0289bb5708bfe9efca');
        $parsed_json = json_decode($json);
        $btc = $parsed_json->{'BTC'}->{'EUR'};
        $eth = $parsed_json->{'ETH'}->{'EUR'};
        $link = $parsed_json->{'LINK'}->{'EUR'};
        $bch = $parsed_json->{'BCH'}->{'EUR'};
        $ada = $parsed_json->{'ADA'}->{'EUR'};


        return $this->render('coursactuelle/index.html.twig', [
            'cours' => compact('btc','eth', 'link', 'bch', 'ada')
        ]);
    }
}
