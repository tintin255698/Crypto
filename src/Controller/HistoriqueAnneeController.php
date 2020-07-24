<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HistoriqueAnneeController extends AbstractController
{
    /**
     * @Route("/historique/annee/BitCoin", name="historique_annee_bitcoin")
     */
    public function index()
    {
        $json = file_get_contents('https://min-api.cryptocompare.com/data/v2/histoday?fsym=BTC&tsym=EUR&limit=365&=b33fc847fb8ce25afe2257eaef4fccea04219ca2d3022f0289bb5708bfe9efca');
        $parsed_json = json_decode($json);

        $high = $parsed_json->{'Data'}->{'Data'}[30]->{'high'};
        $high1 = $parsed_json->{'Data'}->{'Data'}[59]->{'high'};
        $high2 = $parsed_json->{'Data'}->{'Data'}[90]->{'high'};
        $high3 = $parsed_json->{'Data'}->{'Data'}[120]->{'high'};
        $high4 = $parsed_json->{'Data'}->{'Data'}[151]->{'high'};
        $high5 = $parsed_json->{'Data'}->{'Data'}[181]->{'high'};
        $high6 = $parsed_json->{'Data'}->{'Data'}[212]->{'high'};
        $high7 = $parsed_json->{'Data'}->{'Data'}[243]->{'high'};
        $high8 = $parsed_json->{'Data'}->{'Data'}[273]->{'high'};
        $high9 = $parsed_json->{'Data'}->{'Data'}[304]->{'high'};
        $high10 = $parsed_json->{'Data'}->{'Data'}[334]->{'high'};
        $high11 = $parsed_json->{'Data'}->{'Data'}[365]->{'high'};

        $low = $parsed_json->{'Data'}->{'Data'}[30]->{'low'};
        $low1 = $parsed_json->{'Data'}->{'Data'}[59]->{'low'};
        $low2 = $parsed_json->{'Data'}->{'Data'}[90]->{'low'};
        $low3 = $parsed_json->{'Data'}->{'Data'}[120]->{'low'};
        $low4 = $parsed_json->{'Data'}->{'Data'}[151]->{'low'};
        $low5 = $parsed_json->{'Data'}->{'Data'}[181]->{'low'};
        $low6 = $parsed_json->{'Data'}->{'Data'}[212]->{'low'};
        $low7 = $parsed_json->{'Data'}->{'Data'}[243]->{'low'};
        $low8 = $parsed_json->{'Data'}->{'Data'}[273]->{'low'};
        $low9 = $parsed_json->{'Data'}->{'Data'}[304]->{'low'};
        $low10 = $parsed_json->{'Data'}->{'Data'}[334]->{'low'};
        $low11 = $parsed_json->{'Data'}->{'Data'}[365]->{'low'};

        $date = $parsed_json->{'Data'}->{'Data'}[30]->{'time'};
        $time=date('m', $date);
        $date1 = $parsed_json->{'Data'}->{'Data'}[59]->{'time'};
        $time1=date('m', $date1);
        $date2 = $parsed_json->{'Data'}->{'Data'}[90]->{'time'};
        $time2=date('m', $date2);
        $date3 = $parsed_json->{'Data'}->{'Data'}[120]->{'time'};
        $time3=date('m', $date3);
        $date4 = $parsed_json->{'Data'}->{'Data'}[151]->{'time'};
        $time4=date('m', $date4);
        $date5 = $parsed_json->{'Data'}->{'Data'}[181]->{'time'};
        $time5=date('m', $date5);
        $date6 = $parsed_json->{'Data'}->{'Data'}[212]->{'time'};
        $time6=date('m', $date6);
        $date7 = $parsed_json->{'Data'}->{'Data'}[243]->{'time'};
        $time7=date('m', $date7);
        $date8 = $parsed_json->{'Data'}->{'Data'}[273]->{'time'};
        $time8=date('m', $date8);
        $date9 = $parsed_json->{'Data'}->{'Data'}[304]->{'time'};
        $time9=date('m', $date9);
        $date10 = $parsed_json->{'Data'}->{'Data'}[334]->{'time'};
        $time10=date('m', $date10);
        $date11 = $parsed_json->{'Data'}->{'Data'}[365]->{'time'};
        $time11=date('m', $date11);

        $TimeFrom = $parsed_json->{'Data'}->{'TimeFrom'};
        $DayFrom=date('d m Y', $TimeFrom);

        $TimeTo = $parsed_json->{'Data'}->{'TimeTo'};
        $DayTo=date('d m Y', $TimeTo);

        return $this->render('historique_annee/index.html.twig', [
            'high' => compact('high','high1', 'high2', 'high3', 'high4', 'high5', 'high6', 'high7', 'high8', 'high9', 'high10', 'high11'),

            'low' => compact('low','low1', 'low2', 'low3', 'low4', 'low5', 'low6', 'low7', 'low8', 'low9', 'low10', 'low11'),

            'time' => compact('time','time1', 'time2', 'time3', 'time4', 'time5', 'time6', 'time7', 'time8', 'time9', 'time10', 'time11'),

            'TimeTo' => $DayTo,
            'TimeFrom' => $DayFrom,

        ]);
    }

    /**
     * @Route("/historique/annee/chainlink", name="historique_annee_chainlink")
     */
    public function Chainlink()
    {
        $json = file_get_contents('https://min-api.cryptocompare.com/data/v2/histoday?fsym=LINK&tsym=EUR&limit=365&=b33fc847fb8ce25afe2257eaef4fccea04219ca2d3022f0289bb5708bfe9efca');
        $parsed_json = json_decode($json);

        $high = $parsed_json->{'Data'}->{'Data'}[30]->{'high'};
        $high1 = $parsed_json->{'Data'}->{'Data'}[59]->{'high'};
        $high2 = $parsed_json->{'Data'}->{'Data'}[90]->{'high'};
        $high3 = $parsed_json->{'Data'}->{'Data'}[120]->{'high'};
        $high4 = $parsed_json->{'Data'}->{'Data'}[151]->{'high'};
        $high5 = $parsed_json->{'Data'}->{'Data'}[181]->{'high'};
        $high6 = $parsed_json->{'Data'}->{'Data'}[212]->{'high'};
        $high7 = $parsed_json->{'Data'}->{'Data'}[243]->{'high'};
        $high8 = $parsed_json->{'Data'}->{'Data'}[273]->{'high'};
        $high9 = $parsed_json->{'Data'}->{'Data'}[304]->{'high'};
        $high10 = $parsed_json->{'Data'}->{'Data'}[334]->{'high'};
        $high11 = $parsed_json->{'Data'}->{'Data'}[365]->{'high'};

        $low = $parsed_json->{'Data'}->{'Data'}[30]->{'low'};
        $low1 = $parsed_json->{'Data'}->{'Data'}[59]->{'low'};
        $low2 = $parsed_json->{'Data'}->{'Data'}[90]->{'low'};
        $low3 = $parsed_json->{'Data'}->{'Data'}[120]->{'low'};
        $low4 = $parsed_json->{'Data'}->{'Data'}[151]->{'low'};
        $low5 = $parsed_json->{'Data'}->{'Data'}[181]->{'low'};
        $low6 = $parsed_json->{'Data'}->{'Data'}[212]->{'low'};
        $low7 = $parsed_json->{'Data'}->{'Data'}[243]->{'low'};
        $low8 = $parsed_json->{'Data'}->{'Data'}[273]->{'low'};
        $low9 = $parsed_json->{'Data'}->{'Data'}[304]->{'low'};
        $low10 = $parsed_json->{'Data'}->{'Data'}[334]->{'low'};
        $low11 = $parsed_json->{'Data'}->{'Data'}[365]->{'low'};

        $date = $parsed_json->{'Data'}->{'Data'}[30]->{'time'};
        $time=date('m', $date);
        $date1 = $parsed_json->{'Data'}->{'Data'}[59]->{'time'};
        $time1=date('m', $date1);
        $date2 = $parsed_json->{'Data'}->{'Data'}[90]->{'time'};
        $time2=date('m', $date2);
        $date3 = $parsed_json->{'Data'}->{'Data'}[120]->{'time'};
        $time3=date('m', $date3);
        $date4 = $parsed_json->{'Data'}->{'Data'}[151]->{'time'};
        $time4=date('m', $date4);
        $date5 = $parsed_json->{'Data'}->{'Data'}[181]->{'time'};
        $time5=date('m', $date5);
        $date6 = $parsed_json->{'Data'}->{'Data'}[212]->{'time'};
        $time6=date('m', $date6);
        $date7 = $parsed_json->{'Data'}->{'Data'}[243]->{'time'};
        $time7=date('m', $date7);
        $date8 = $parsed_json->{'Data'}->{'Data'}[273]->{'time'};
        $time8=date('m', $date8);
        $date9 = $parsed_json->{'Data'}->{'Data'}[304]->{'time'};
        $time9=date('m', $date9);
        $date10 = $parsed_json->{'Data'}->{'Data'}[334]->{'time'};
        $time10=date('m', $date10);
        $date11 = $parsed_json->{'Data'}->{'Data'}[365]->{'time'};
        $time11=date('m', $date11);

        $TimeFrom = $parsed_json->{'Data'}->{'TimeFrom'};
        $DayFrom=date('d m Y', $TimeFrom);

        $TimeTo = $parsed_json->{'Data'}->{'TimeTo'};
        $DayTo=date('d m Y', $TimeTo);

        return $this->render('historique_annee/chainlink.html.twig', [
            'high' => compact('high','high1', 'high2', 'high3', 'high4', 'high5', 'high6', 'high7', 'high8', 'high9', 'high10', 'high11'),

            'low' => compact('low','low1', 'low2', 'low3', 'low4', 'low5', 'low6', 'low7', 'low8', 'low9', 'low10', 'low11'),

            'time' => compact('time','time1', 'time2', 'time3', 'time4', 'time5', 'time6', 'time7', 'time8', 'time9', 'time10', 'time11'),

            'TimeTo' => $DayTo,
            'TimeFrom' => $DayFrom,

        ]);}

        /**
         * @Route("/historique/annee/ethereum", name="historique_annee_ethereum")
         */
        public function Ethereum()
    {
        $json = file_get_contents('https://min-api.cryptocompare.com/data/v2/histoday?fsym=ETH&tsym=EUR&limit=365&=b33fc847fb8ce25afe2257eaef4fccea04219ca2d3022f0289bb5708bfe9efca');
        $parsed_json = json_decode($json);

        $high = $parsed_json->{'Data'}->{'Data'}[30]->{'high'};
        $high1 = $parsed_json->{'Data'}->{'Data'}[59]->{'high'};
        $high2 = $parsed_json->{'Data'}->{'Data'}[90]->{'high'};
        $high3 = $parsed_json->{'Data'}->{'Data'}[120]->{'high'};
        $high4 = $parsed_json->{'Data'}->{'Data'}[151]->{'high'};
        $high5 = $parsed_json->{'Data'}->{'Data'}[181]->{'high'};
        $high6 = $parsed_json->{'Data'}->{'Data'}[212]->{'high'};
        $high7 = $parsed_json->{'Data'}->{'Data'}[243]->{'high'};
        $high8 = $parsed_json->{'Data'}->{'Data'}[273]->{'high'};
        $high9 = $parsed_json->{'Data'}->{'Data'}[304]->{'high'};
        $high10 = $parsed_json->{'Data'}->{'Data'}[334]->{'high'};
        $high11 = $parsed_json->{'Data'}->{'Data'}[365]->{'high'};

        $low = $parsed_json->{'Data'}->{'Data'}[30]->{'low'};
        $low1 = $parsed_json->{'Data'}->{'Data'}[59]->{'low'};
        $low2 = $parsed_json->{'Data'}->{'Data'}[90]->{'low'};
        $low3 = $parsed_json->{'Data'}->{'Data'}[120]->{'low'};
        $low4 = $parsed_json->{'Data'}->{'Data'}[151]->{'low'};
        $low5 = $parsed_json->{'Data'}->{'Data'}[181]->{'low'};
        $low6 = $parsed_json->{'Data'}->{'Data'}[212]->{'low'};
        $low7 = $parsed_json->{'Data'}->{'Data'}[243]->{'low'};
        $low8 = $parsed_json->{'Data'}->{'Data'}[273]->{'low'};
        $low9 = $parsed_json->{'Data'}->{'Data'}[304]->{'low'};
        $low10 = $parsed_json->{'Data'}->{'Data'}[334]->{'low'};
        $low11 = $parsed_json->{'Data'}->{'Data'}[365]->{'low'};

        $date = $parsed_json->{'Data'}->{'Data'}[30]->{'time'};
        $time=date('m', $date);
        $date1 = $parsed_json->{'Data'}->{'Data'}[59]->{'time'};
        $time1=date('m', $date1);
        $date2 = $parsed_json->{'Data'}->{'Data'}[90]->{'time'};
        $time2=date('m', $date2);
        $date3 = $parsed_json->{'Data'}->{'Data'}[120]->{'time'};
        $time3=date('m', $date3);
        $date4 = $parsed_json->{'Data'}->{'Data'}[151]->{'time'};
        $time4=date('m', $date4);
        $date5 = $parsed_json->{'Data'}->{'Data'}[181]->{'time'};
        $time5=date('m', $date5);
        $date6 = $parsed_json->{'Data'}->{'Data'}[212]->{'time'};
        $time6=date('m', $date6);
        $date7 = $parsed_json->{'Data'}->{'Data'}[243]->{'time'};
        $time7=date('m', $date7);
        $date8 = $parsed_json->{'Data'}->{'Data'}[273]->{'time'};
        $time8=date('m', $date8);
        $date9 = $parsed_json->{'Data'}->{'Data'}[304]->{'time'};
        $time9=date('m', $date9);
        $date10 = $parsed_json->{'Data'}->{'Data'}[334]->{'time'};
        $time10=date('m', $date10);
        $date11 = $parsed_json->{'Data'}->{'Data'}[365]->{'time'};
        $time11=date('m', $date11);

        $TimeFrom = $parsed_json->{'Data'}->{'TimeFrom'};
        $DayFrom=date('d m Y', $TimeFrom);

        $TimeTo = $parsed_json->{'Data'}->{'TimeTo'};
        $DayTo=date('d m Y', $TimeTo);

        return $this->render('historique_annee/ethereum.html.twig', [
            'high' => compact('high','high1', 'high2', 'high3', 'high4', 'high5', 'high6', 'high7', 'high8', 'high9', 'high10', 'high11'),

            'low' => compact('low','low1', 'low2', 'low3', 'low4', 'low5', 'low6', 'low7', 'low8', 'low9', 'low10', 'low11'),

            'time' => compact('time','time1', 'time2', 'time3', 'time4', 'time5', 'time6', 'time7', 'time8', 'time9', 'time10', 'time11'),

            'TimeTo' => $DayTo,
            'TimeFrom' => $DayFrom,

        ]);}

    /**
     * @Route("/historique/annee/cardano", name="historique_annee_cardano")
     */
    public function Cardano()
    {
        $json = file_get_contents('https://min-api.cryptocompare.com/data/v2/histoday?fsym=ADA&tsym=EUR&limit=365&=b33fc847fb8ce25afe2257eaef4fccea04219ca2d3022f0289bb5708bfe9efca');
        $parsed_json = json_decode($json);

        $high = $parsed_json->{'Data'}->{'Data'}[30]->{'high'};
        $high1 = $parsed_json->{'Data'}->{'Data'}[59]->{'high'};
        $high2 = $parsed_json->{'Data'}->{'Data'}[90]->{'high'};
        $high3 = $parsed_json->{'Data'}->{'Data'}[120]->{'high'};
        $high4 = $parsed_json->{'Data'}->{'Data'}[151]->{'high'};
        $high5 = $parsed_json->{'Data'}->{'Data'}[181]->{'high'};
        $high6 = $parsed_json->{'Data'}->{'Data'}[212]->{'high'};
        $high7 = $parsed_json->{'Data'}->{'Data'}[243]->{'high'};
        $high8 = $parsed_json->{'Data'}->{'Data'}[273]->{'high'};
        $high9 = $parsed_json->{'Data'}->{'Data'}[304]->{'high'};
        $high10 = $parsed_json->{'Data'}->{'Data'}[334]->{'high'};
        $high11 = $parsed_json->{'Data'}->{'Data'}[365]->{'high'};

        $low = $parsed_json->{'Data'}->{'Data'}[30]->{'low'};
        $low1 = $parsed_json->{'Data'}->{'Data'}[59]->{'low'};
        $low2 = $parsed_json->{'Data'}->{'Data'}[90]->{'low'};
        $low3 = $parsed_json->{'Data'}->{'Data'}[120]->{'low'};
        $low4 = $parsed_json->{'Data'}->{'Data'}[151]->{'low'};
        $low5 = $parsed_json->{'Data'}->{'Data'}[181]->{'low'};
        $low6 = $parsed_json->{'Data'}->{'Data'}[212]->{'low'};
        $low7 = $parsed_json->{'Data'}->{'Data'}[243]->{'low'};
        $low8 = $parsed_json->{'Data'}->{'Data'}[273]->{'low'};
        $low9 = $parsed_json->{'Data'}->{'Data'}[304]->{'low'};
        $low10 = $parsed_json->{'Data'}->{'Data'}[334]->{'low'};
        $low11 = $parsed_json->{'Data'}->{'Data'}[365]->{'low'};

        $date = $parsed_json->{'Data'}->{'Data'}[30]->{'time'};
        $time=date('m', $date);
        $date1 = $parsed_json->{'Data'}->{'Data'}[59]->{'time'};
        $time1=date('m', $date1);
        $date2 = $parsed_json->{'Data'}->{'Data'}[90]->{'time'};
        $time2=date('m', $date2);
        $date3 = $parsed_json->{'Data'}->{'Data'}[120]->{'time'};
        $time3=date('m', $date3);
        $date4 = $parsed_json->{'Data'}->{'Data'}[151]->{'time'};
        $time4=date('m', $date4);
        $date5 = $parsed_json->{'Data'}->{'Data'}[181]->{'time'};
        $time5=date('m', $date5);
        $date6 = $parsed_json->{'Data'}->{'Data'}[212]->{'time'};
        $time6=date('m', $date6);
        $date7 = $parsed_json->{'Data'}->{'Data'}[243]->{'time'};
        $time7=date('m', $date7);
        $date8 = $parsed_json->{'Data'}->{'Data'}[273]->{'time'};
        $time8=date('m', $date8);
        $date9 = $parsed_json->{'Data'}->{'Data'}[304]->{'time'};
        $time9=date('m', $date9);
        $date10 = $parsed_json->{'Data'}->{'Data'}[334]->{'time'};
        $time10=date('m', $date10);
        $date11 = $parsed_json->{'Data'}->{'Data'}[365]->{'time'};
        $time11=date('m', $date11);

        $TimeFrom = $parsed_json->{'Data'}->{'TimeFrom'};
        $DayFrom=date('d m Y', $TimeFrom);

        $TimeTo = $parsed_json->{'Data'}->{'TimeTo'};
        $DayTo=date('d m Y', $TimeTo);

        return $this->render('historique_annee/cardano.html.twig', [
            'high' => compact('high','high1', 'high2', 'high3', 'high4', 'high5', 'high6', 'high7', 'high8', 'high9', 'high10', 'high11'),

            'low' => compact('low','low1', 'low2', 'low3', 'low4', 'low5', 'low6', 'low7', 'low8', 'low9', 'low10', 'low11'),

            'time' => compact('time','time1', 'time2', 'time3', 'time4', 'time5', 'time6', 'time7', 'time8', 'time9', 'time10', 'time11'),

            'TimeTo' => $DayTo,
            'TimeFrom' => $DayFrom,

        ]);}

    /**
     * @Route("/historique/annee/bitcoincash", name="historique_annee_bitcoincash")
     */
    public function BitcoinCash()
    {
        $json = file_get_contents('https://min-api.cryptocompare.com/data/v2/histoday?fsym=BCH&tsym=EUR&limit=365&=b33fc847fb8ce25afe2257eaef4fccea04219ca2d3022f0289bb5708bfe9efca');
        $parsed_json = json_decode($json);

        $high = $parsed_json->{'Data'}->{'Data'}[30]->{'high'};
        $high1 = $parsed_json->{'Data'}->{'Data'}[59]->{'high'};
        $high2 = $parsed_json->{'Data'}->{'Data'}[90]->{'high'};
        $high3 = $parsed_json->{'Data'}->{'Data'}[120]->{'high'};
        $high4 = $parsed_json->{'Data'}->{'Data'}[151]->{'high'};
        $high5 = $parsed_json->{'Data'}->{'Data'}[181]->{'high'};
        $high6 = $parsed_json->{'Data'}->{'Data'}[212]->{'high'};
        $high7 = $parsed_json->{'Data'}->{'Data'}[243]->{'high'};
        $high8 = $parsed_json->{'Data'}->{'Data'}[273]->{'high'};
        $high9 = $parsed_json->{'Data'}->{'Data'}[304]->{'high'};
        $high10 = $parsed_json->{'Data'}->{'Data'}[334]->{'high'};
        $high11 = $parsed_json->{'Data'}->{'Data'}[365]->{'high'};

        $low = $parsed_json->{'Data'}->{'Data'}[30]->{'low'};
        $low1 = $parsed_json->{'Data'}->{'Data'}[59]->{'low'};
        $low2 = $parsed_json->{'Data'}->{'Data'}[90]->{'low'};
        $low3 = $parsed_json->{'Data'}->{'Data'}[120]->{'low'};
        $low4 = $parsed_json->{'Data'}->{'Data'}[151]->{'low'};
        $low5 = $parsed_json->{'Data'}->{'Data'}[181]->{'low'};
        $low6 = $parsed_json->{'Data'}->{'Data'}[212]->{'low'};
        $low7 = $parsed_json->{'Data'}->{'Data'}[243]->{'low'};
        $low8 = $parsed_json->{'Data'}->{'Data'}[273]->{'low'};
        $low9 = $parsed_json->{'Data'}->{'Data'}[304]->{'low'};
        $low10 = $parsed_json->{'Data'}->{'Data'}[334]->{'low'};
        $low11 = $parsed_json->{'Data'}->{'Data'}[365]->{'low'};

        $date = $parsed_json->{'Data'}->{'Data'}[30]->{'time'};
        $time=date('m', $date);
        $date1 = $parsed_json->{'Data'}->{'Data'}[59]->{'time'};
        $time1=date('m', $date1);
        $date2 = $parsed_json->{'Data'}->{'Data'}[90]->{'time'};
        $time2=date('m', $date2);
        $date3 = $parsed_json->{'Data'}->{'Data'}[120]->{'time'};
        $time3=date('m', $date3);
        $date4 = $parsed_json->{'Data'}->{'Data'}[151]->{'time'};
        $time4=date('m', $date4);
        $date5 = $parsed_json->{'Data'}->{'Data'}[181]->{'time'};
        $time5=date('m', $date5);
        $date6 = $parsed_json->{'Data'}->{'Data'}[212]->{'time'};
        $time6=date('m', $date6);
        $date7 = $parsed_json->{'Data'}->{'Data'}[243]->{'time'};
        $time7=date('m', $date7);
        $date8 = $parsed_json->{'Data'}->{'Data'}[273]->{'time'};
        $time8=date('m', $date8);
        $date9 = $parsed_json->{'Data'}->{'Data'}[304]->{'time'};
        $time9=date('m', $date9);
        $date10 = $parsed_json->{'Data'}->{'Data'}[334]->{'time'};
        $time10=date('m', $date10);
        $date11 = $parsed_json->{'Data'}->{'Data'}[365]->{'time'};
        $time11=date('m', $date11);

        $TimeFrom = $parsed_json->{'Data'}->{'TimeFrom'};
        $DayFrom=date('d m Y', $TimeFrom);

        $TimeTo = $parsed_json->{'Data'}->{'TimeTo'};
        $DayTo=date('d m Y', $TimeTo);

        return $this->render('historique_annee/bitcoincash.html.twig', [
            'high' => compact('high','high1', 'high2', 'high3', 'high4', 'high5', 'high6', 'high7', 'high8', 'high9', 'high10', 'high11'),

            'low' => compact('low','low1', 'low2', 'low3', 'low4', 'low5', 'low6', 'low7', 'low8', 'low9', 'low10', 'low11'),

            'time' => compact('time','time1', 'time2', 'time3', 'time4', 'time5', 'time6', 'time7', 'time8', 'time9', 'time10', 'time11'),

            'TimeTo' => $DayTo,
            'TimeFrom' => $DayFrom,

        ]);}






































}

