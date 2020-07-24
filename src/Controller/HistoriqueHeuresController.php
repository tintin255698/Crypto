<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class HistoriqueHeuresController extends AbstractController
{
    /**
     * @Route("/historique/heures/BitCoin", name="historique_heures_Bitcoin")
     */
    public function index()
    {
        $json = file_get_contents('https://min-api.cryptocompare.com/data/v2/histohour?fsym=BTC&tsym=EUR&limit=24&=b33fc847fb8ce25afe2257eaef4fccea04219ca2d3022f0289bb5708bfe9efca');
        $parsed_json = json_decode($json);
        $high = $parsed_json->{'Data'}->{'Data'}[0]->{'high'};
        $high1 = $parsed_json->{'Data'}->{'Data'}[1]->{'high'};
        $high2 = $parsed_json->{'Data'}->{'Data'}[2]->{'high'};
        $high3 = $parsed_json->{'Data'}->{'Data'}[3]->{'high'};
        $high4 = $parsed_json->{'Data'}->{'Data'}[4]->{'high'};
        $high5 = $parsed_json->{'Data'}->{'Data'}[5]->{'high'};
        $high6 = $parsed_json->{'Data'}->{'Data'}[6]->{'high'};
        $high7 = $parsed_json->{'Data'}->{'Data'}[7]->{'high'};
        $high8 = $parsed_json->{'Data'}->{'Data'}[8]->{'high'};
        $high9 = $parsed_json->{'Data'}->{'Data'}[9]->{'high'};
        $high10 = $parsed_json->{'Data'}->{'Data'}[10]->{'high'};
        $high11 = $parsed_json->{'Data'}->{'Data'}[11]->{'high'};
        $high12 = $parsed_json->{'Data'}->{'Data'}[12]->{'high'};
        $high13 = $parsed_json->{'Data'}->{'Data'}[13]->{'high'};
        $high14 = $parsed_json->{'Data'}->{'Data'}[14]->{'high'};
        $high15 = $parsed_json->{'Data'}->{'Data'}[15]->{'high'};
        $high16 = $parsed_json->{'Data'}->{'Data'}[16]->{'high'};
        $high17 = $parsed_json->{'Data'}->{'Data'}[17]->{'high'};
        $high18 = $parsed_json->{'Data'}->{'Data'}[18]->{'high'};
        $high19 = $parsed_json->{'Data'}->{'Data'}[19]->{'high'};
        $high20 = $parsed_json->{'Data'}->{'Data'}[20]->{'high'};
        $high21 = $parsed_json->{'Data'}->{'Data'}[21]->{'high'};
        $high22 = $parsed_json->{'Data'}->{'Data'}[22]->{'high'};
        $high23 = $parsed_json->{'Data'}->{'Data'}[23]->{'high'};

        $low = $parsed_json->{'Data'}->{'Data'}[0]->{'low'};
        $low1 = $parsed_json->{'Data'}->{'Data'}[1]->{'low'};
        $low2 = $parsed_json->{'Data'}->{'Data'}[2]->{'low'};
        $low3 = $parsed_json->{'Data'}->{'Data'}[3]->{'low'};
        $low4 = $parsed_json->{'Data'}->{'Data'}[4]->{'low'};
        $low5 = $parsed_json->{'Data'}->{'Data'}[5]->{'low'};
        $low6 = $parsed_json->{'Data'}->{'Data'}[6]->{'low'};
        $low7 = $parsed_json->{'Data'}->{'Data'}[7]->{'low'};
        $low8 = $parsed_json->{'Data'}->{'Data'}[8]->{'low'};
        $low9 = $parsed_json->{'Data'}->{'Data'}[9]->{'low'};
        $low10 = $parsed_json->{'Data'}->{'Data'}[10]->{'low'};
        $low11 = $parsed_json->{'Data'}->{'Data'}[11]->{'low'};
        $low12 = $parsed_json->{'Data'}->{'Data'}[12]->{'low'};
        $low13 = $parsed_json->{'Data'}->{'Data'}[13]->{'low'};
        $low14 = $parsed_json->{'Data'}->{'Data'}[14]->{'low'};
        $low15 = $parsed_json->{'Data'}->{'Data'}[15]->{'low'};
        $low16 = $parsed_json->{'Data'}->{'Data'}[16]->{'low'};
        $low17 = $parsed_json->{'Data'}->{'Data'}[17]->{'low'};
        $low18 = $parsed_json->{'Data'}->{'Data'}[18]->{'low'};
        $low19 = $parsed_json->{'Data'}->{'Data'}[19]->{'low'};
        $low20 = $parsed_json->{'Data'}->{'Data'}[20]->{'low'};
        $low21 = $parsed_json->{'Data'}->{'Data'}[21]->{'low'};
        $low22 = $parsed_json->{'Data'}->{'Data'}[22]->{'low'};
        $low23 = $parsed_json->{'Data'}->{'Data'}[23]->{'low'};

        $date = $parsed_json->{'Data'}->{'Data'}[0]->{'time'};
        $time=date('H', $date);
        $date1 = $parsed_json->{'Data'}->{'Data'}[1]->{'time'};
        $time1=date('H', $date1);
        $date2 = $parsed_json->{'Data'}->{'Data'}[2]->{'time'};
        $time2=date('H', $date2);
        $date3 = $parsed_json->{'Data'}->{'Data'}[3]->{'time'};
        $time3=date('H', $date3);
        $date4 = $parsed_json->{'Data'}->{'Data'}[4]->{'time'};
        $time4=date('H', $date4);
        $date5 = $parsed_json->{'Data'}->{'Data'}[5]->{'time'};
        $time5=date('H', $date5);
        $date6 = $parsed_json->{'Data'}->{'Data'}[6]->{'time'};
        $time6=date('H', $date6);
        $date7 = $parsed_json->{'Data'}->{'Data'}[7]->{'time'};
        $time7=date('H', $date7);
        $date8 = $parsed_json->{'Data'}->{'Data'}[8]->{'time'};
        $time8=date('H', $date8);
        $date9 = $parsed_json->{'Data'}->{'Data'}[9]->{'time'};
        $time9=date('H', $date9);
        $date10 = $parsed_json->{'Data'}->{'Data'}[10]->{'time'};
        $time10=date('H', $date10);
        $date11 = $parsed_json->{'Data'}->{'Data'}[11]->{'time'};
        $time11=date('H', $date11);
        $date12 = $parsed_json->{'Data'}->{'Data'}[12]->{'time'};
        $time12=date('H', $date12);
        $date13 = $parsed_json->{'Data'}->{'Data'}[13]->{'time'};
        $time13=date('H', $date13);
        $date14 = $parsed_json->{'Data'}->{'Data'}[14]->{'time'};
        $time14=date('H', $date14);
        $date15 = $parsed_json->{'Data'}->{'Data'}[15]->{'time'};
        $time15=date('H', $date15);
        $date16 = $parsed_json->{'Data'}->{'Data'}[16]->{'time'};
        $time16=date('H', $date16);
        $date17 = $parsed_json->{'Data'}->{'Data'}[17]->{'time'};
        $time17=date('H', $date17);
        $date18 = $parsed_json->{'Data'}->{'Data'}[18]->{'time'};
        $time18=date('H', $date18);
        $date19 = $parsed_json->{'Data'}->{'Data'}[19]->{'time'};
        $time19=date('H', $date19);
        $date20 = $parsed_json->{'Data'}->{'Data'}[20]->{'time'};
        $time20=date('H', $date20);
        $date21 = $parsed_json->{'Data'}->{'Data'}[21]->{'time'};
        $time21=date('H', $date21);
        $date22 = $parsed_json->{'Data'}->{'Data'}[22]->{'time'};
        $time22=date('H', $date22);
        $date23 = $parsed_json->{'Data'}->{'Data'}[23]->{'time'};
        $time23=date('H', $date23);

        $TimeFrom = $parsed_json->{'Data'}->{'TimeFrom'};
        $DayFrom=date('d m Y', $TimeFrom);

        $TimeTo = $parsed_json->{'Data'}->{'TimeTo'};
        $DayTo=date('d m Y', $TimeTo);

        return $this->render('historique_heures/index.html.twig', [
            'high' => compact('high','high1', 'high2', 'high3', 'high4', 'high5', 'high6', 'high7', 'high8', 'high9', 'high10', 'high11', 'high12', 'high13', 'high14', 'high15'
                , 'high16', 'high17', 'high18', 'high19', 'high20', 'high21', 'high22', 'high23'),

            'low' => compact('low','low1', 'low2', 'low3', 'low4', 'low5', 'low6', 'low7', 'low8', 'low9', 'low10', 'low11', 'low12', 'low13', 'low14', 'low15'
                , 'low16', 'low17', 'low18', 'low19', 'low20', 'low21', 'low22', 'low23'),

            'time' => compact('time','time1', 'time2', 'time3', 'time4', 'time5', 'time6', 'time7', 'time8', 'time9', 'time10', 'time11', 'time12', 'time13', 'time14', 'time15'
                , 'time16', 'time17', 'time18', 'time19', 'time20', 'time21', 'time22', 'time23'),

            'TimeTo' => $DayTo,
            'TimeFrom' => $DayFrom,

        ]);}

    /**
     * @Route("/historique/heures/ethereum", name="historique_heures_ethereum")
     */
    public function ethereum()
    {
        $json = file_get_contents('https://min-api.cryptocompare.com/data/v2/histohour?fsym=ETH&tsym=EUR&limit=24&=b33fc847fb8ce25afe2257eaef4fccea04219ca2d3022f0289bb5708bfe9efca');
        $parsed_json = json_decode($json);
        $high = $parsed_json->{'Data'}->{'Data'}[0]->{'high'};
        $high1 = $parsed_json->{'Data'}->{'Data'}[1]->{'high'};
        $high2 = $parsed_json->{'Data'}->{'Data'}[2]->{'high'};
        $high3 = $parsed_json->{'Data'}->{'Data'}[3]->{'high'};
        $high4 = $parsed_json->{'Data'}->{'Data'}[4]->{'high'};
        $high5 = $parsed_json->{'Data'}->{'Data'}[5]->{'high'};
        $high6 = $parsed_json->{'Data'}->{'Data'}[6]->{'high'};
        $high7 = $parsed_json->{'Data'}->{'Data'}[7]->{'high'};
        $high8 = $parsed_json->{'Data'}->{'Data'}[8]->{'high'};
        $high9 = $parsed_json->{'Data'}->{'Data'}[9]->{'high'};
        $high10 = $parsed_json->{'Data'}->{'Data'}[10]->{'high'};
        $high11 = $parsed_json->{'Data'}->{'Data'}[11]->{'high'};
        $high12 = $parsed_json->{'Data'}->{'Data'}[12]->{'high'};
        $high13 = $parsed_json->{'Data'}->{'Data'}[13]->{'high'};
        $high14 = $parsed_json->{'Data'}->{'Data'}[14]->{'high'};
        $high15 = $parsed_json->{'Data'}->{'Data'}[15]->{'high'};
        $high16 = $parsed_json->{'Data'}->{'Data'}[16]->{'high'};
        $high17 = $parsed_json->{'Data'}->{'Data'}[17]->{'high'};
        $high18 = $parsed_json->{'Data'}->{'Data'}[18]->{'high'};
        $high19 = $parsed_json->{'Data'}->{'Data'}[19]->{'high'};
        $high20 = $parsed_json->{'Data'}->{'Data'}[20]->{'high'};
        $high21 = $parsed_json->{'Data'}->{'Data'}[21]->{'high'};
        $high22 = $parsed_json->{'Data'}->{'Data'}[22]->{'high'};
        $high23 = $parsed_json->{'Data'}->{'Data'}[23]->{'high'};

        $low = $parsed_json->{'Data'}->{'Data'}[0]->{'low'};
        $low1 = $parsed_json->{'Data'}->{'Data'}[1]->{'low'};
        $low2 = $parsed_json->{'Data'}->{'Data'}[2]->{'low'};
        $low3 = $parsed_json->{'Data'}->{'Data'}[3]->{'low'};
        $low4 = $parsed_json->{'Data'}->{'Data'}[4]->{'low'};
        $low5 = $parsed_json->{'Data'}->{'Data'}[5]->{'low'};
        $low6 = $parsed_json->{'Data'}->{'Data'}[6]->{'low'};
        $low7 = $parsed_json->{'Data'}->{'Data'}[7]->{'low'};
        $low8 = $parsed_json->{'Data'}->{'Data'}[8]->{'low'};
        $low9 = $parsed_json->{'Data'}->{'Data'}[9]->{'low'};
        $low10 = $parsed_json->{'Data'}->{'Data'}[10]->{'low'};
        $low11 = $parsed_json->{'Data'}->{'Data'}[11]->{'low'};
        $low12 = $parsed_json->{'Data'}->{'Data'}[12]->{'low'};
        $low13 = $parsed_json->{'Data'}->{'Data'}[13]->{'low'};
        $low14 = $parsed_json->{'Data'}->{'Data'}[14]->{'low'};
        $low15 = $parsed_json->{'Data'}->{'Data'}[15]->{'low'};
        $low16 = $parsed_json->{'Data'}->{'Data'}[16]->{'low'};
        $low17 = $parsed_json->{'Data'}->{'Data'}[17]->{'low'};
        $low18 = $parsed_json->{'Data'}->{'Data'}[18]->{'low'};
        $low19 = $parsed_json->{'Data'}->{'Data'}[19]->{'low'};
        $low20 = $parsed_json->{'Data'}->{'Data'}[20]->{'low'};
        $low21 = $parsed_json->{'Data'}->{'Data'}[21]->{'low'};
        $low22 = $parsed_json->{'Data'}->{'Data'}[22]->{'low'};
        $low23 = $parsed_json->{'Data'}->{'Data'}[23]->{'low'};

        $date = $parsed_json->{'Data'}->{'Data'}[0]->{'time'};
        $time=date('H', $date);
        $date1 = $parsed_json->{'Data'}->{'Data'}[1]->{'time'};
        $time1=date('H', $date1);
        $date2 = $parsed_json->{'Data'}->{'Data'}[2]->{'time'};
        $time2=date('H', $date2);
        $date3 = $parsed_json->{'Data'}->{'Data'}[3]->{'time'};
        $time3=date('H', $date3);
        $date4 = $parsed_json->{'Data'}->{'Data'}[4]->{'time'};
        $time4=date('H', $date4);
        $date5 = $parsed_json->{'Data'}->{'Data'}[5]->{'time'};
        $time5=date('H', $date5);
        $date6 = $parsed_json->{'Data'}->{'Data'}[6]->{'time'};
        $time6=date('H', $date6);
        $date7 = $parsed_json->{'Data'}->{'Data'}[7]->{'time'};
        $time7=date('H', $date7);
        $date8 = $parsed_json->{'Data'}->{'Data'}[8]->{'time'};
        $time8=date('H', $date8);
        $date9 = $parsed_json->{'Data'}->{'Data'}[9]->{'time'};
        $time9=date('H', $date9);
        $date10 = $parsed_json->{'Data'}->{'Data'}[10]->{'time'};
        $time10=date('H', $date10);
        $date11 = $parsed_json->{'Data'}->{'Data'}[11]->{'time'};
        $time11=date('H', $date11);
        $date12 = $parsed_json->{'Data'}->{'Data'}[12]->{'time'};
        $time12=date('H', $date12);
        $date13 = $parsed_json->{'Data'}->{'Data'}[13]->{'time'};
        $time13=date('H', $date13);
        $date14 = $parsed_json->{'Data'}->{'Data'}[14]->{'time'};
        $time14=date('H', $date14);
        $date15 = $parsed_json->{'Data'}->{'Data'}[15]->{'time'};
        $time15=date('H', $date15);
        $date16 = $parsed_json->{'Data'}->{'Data'}[16]->{'time'};
        $time16=date('H', $date16);
        $date17 = $parsed_json->{'Data'}->{'Data'}[17]->{'time'};
        $time17=date('H', $date17);
        $date18 = $parsed_json->{'Data'}->{'Data'}[18]->{'time'};
        $time18=date('H', $date18);
        $date19 = $parsed_json->{'Data'}->{'Data'}[19]->{'time'};
        $time19=date('H', $date19);
        $date20 = $parsed_json->{'Data'}->{'Data'}[20]->{'time'};
        $time20=date('H', $date20);
        $date21 = $parsed_json->{'Data'}->{'Data'}[21]->{'time'};
        $time21=date('H', $date21);
        $date22 = $parsed_json->{'Data'}->{'Data'}[22]->{'time'};
        $time22=date('H', $date22);
        $date23 = $parsed_json->{'Data'}->{'Data'}[23]->{'time'};
        $time23=date('H', $date23);

        $TimeFrom = $parsed_json->{'Data'}->{'TimeFrom'};
        $DayFrom=date('d m Y', $TimeFrom);

        $TimeTo = $parsed_json->{'Data'}->{'TimeTo'};
        $DayTo=date('d m Y', $TimeTo);

        return $this->render('historique_heures/ethereum.html.twig', [
            'high' => compact('high','high1', 'high2', 'high3', 'high4', 'high5', 'high6', 'high7', 'high8', 'high9', 'high10', 'high11', 'high12', 'high13', 'high14', 'high15'
                , 'high16', 'high17', 'high18', 'high19', 'high20', 'high21', 'high22', 'high23'),

            'low' => compact('low','low1', 'low2', 'low3', 'low4', 'low5', 'low6', 'low7', 'low8', 'low9', 'low10', 'low11', 'low12', 'low13', 'low14', 'low15'
                , 'low16', 'low17', 'low18', 'low19', 'low20', 'low21', 'low22', 'low23'),

            'time' => compact('time','time1', 'time2', 'time3', 'time4', 'time5', 'time6', 'time7', 'time8', 'time9', 'time10', 'time11', 'time12', 'time13', 'time14', 'time15'
                , 'time16', 'time17', 'time18', 'time19', 'time20', 'time21', 'time22', 'time23'),

            'TimeTo' => $DayTo,
            'TimeFrom' => $DayFrom,

        ]);}



    /**
     * @Route("/historique/heures/chainlink", name="historique_heures_chainlink")
     */
    public function chainlink()
    {
        $json = file_get_contents('https://min-api.cryptocompare.com/data/v2/histohour?fsym=LINK&tsym=EUR&limit=24&=b33fc847fb8ce25afe2257eaef4fccea04219ca2d3022f0289bb5708bfe9efca');
        $parsed_json = json_decode($json);
        $high = $parsed_json->{'Data'}->{'Data'}[0]->{'high'};
        $high1 = $parsed_json->{'Data'}->{'Data'}[1]->{'high'};
        $high2 = $parsed_json->{'Data'}->{'Data'}[2]->{'high'};
        $high3 = $parsed_json->{'Data'}->{'Data'}[3]->{'high'};
        $high4 = $parsed_json->{'Data'}->{'Data'}[4]->{'high'};
        $high5 = $parsed_json->{'Data'}->{'Data'}[5]->{'high'};
        $high6 = $parsed_json->{'Data'}->{'Data'}[6]->{'high'};
        $high7 = $parsed_json->{'Data'}->{'Data'}[7]->{'high'};
        $high8 = $parsed_json->{'Data'}->{'Data'}[8]->{'high'};
        $high9 = $parsed_json->{'Data'}->{'Data'}[9]->{'high'};
        $high10 = $parsed_json->{'Data'}->{'Data'}[10]->{'high'};
        $high11 = $parsed_json->{'Data'}->{'Data'}[11]->{'high'};
        $high12 = $parsed_json->{'Data'}->{'Data'}[12]->{'high'};
        $high13 = $parsed_json->{'Data'}->{'Data'}[13]->{'high'};
        $high14 = $parsed_json->{'Data'}->{'Data'}[14]->{'high'};
        $high15 = $parsed_json->{'Data'}->{'Data'}[15]->{'high'};
        $high16 = $parsed_json->{'Data'}->{'Data'}[16]->{'high'};
        $high17 = $parsed_json->{'Data'}->{'Data'}[17]->{'high'};
        $high18 = $parsed_json->{'Data'}->{'Data'}[18]->{'high'};
        $high19 = $parsed_json->{'Data'}->{'Data'}[19]->{'high'};
        $high20 = $parsed_json->{'Data'}->{'Data'}[20]->{'high'};
        $high21 = $parsed_json->{'Data'}->{'Data'}[21]->{'high'};
        $high22 = $parsed_json->{'Data'}->{'Data'}[22]->{'high'};
        $high23 = $parsed_json->{'Data'}->{'Data'}[23]->{'high'};

        $low = $parsed_json->{'Data'}->{'Data'}[0]->{'low'};
        $low1 = $parsed_json->{'Data'}->{'Data'}[1]->{'low'};
        $low2 = $parsed_json->{'Data'}->{'Data'}[2]->{'low'};
        $low3 = $parsed_json->{'Data'}->{'Data'}[3]->{'low'};
        $low4 = $parsed_json->{'Data'}->{'Data'}[4]->{'low'};
        $low5 = $parsed_json->{'Data'}->{'Data'}[5]->{'low'};
        $low6 = $parsed_json->{'Data'}->{'Data'}[6]->{'low'};
        $low7 = $parsed_json->{'Data'}->{'Data'}[7]->{'low'};
        $low8 = $parsed_json->{'Data'}->{'Data'}[8]->{'low'};
        $low9 = $parsed_json->{'Data'}->{'Data'}[9]->{'low'};
        $low10 = $parsed_json->{'Data'}->{'Data'}[10]->{'low'};
        $low11 = $parsed_json->{'Data'}->{'Data'}[11]->{'low'};
        $low12 = $parsed_json->{'Data'}->{'Data'}[12]->{'low'};
        $low13 = $parsed_json->{'Data'}->{'Data'}[13]->{'low'};
        $low14 = $parsed_json->{'Data'}->{'Data'}[14]->{'low'};
        $low15 = $parsed_json->{'Data'}->{'Data'}[15]->{'low'};
        $low16 = $parsed_json->{'Data'}->{'Data'}[16]->{'low'};
        $low17 = $parsed_json->{'Data'}->{'Data'}[17]->{'low'};
        $low18 = $parsed_json->{'Data'}->{'Data'}[18]->{'low'};
        $low19 = $parsed_json->{'Data'}->{'Data'}[19]->{'low'};
        $low20 = $parsed_json->{'Data'}->{'Data'}[20]->{'low'};
        $low21 = $parsed_json->{'Data'}->{'Data'}[21]->{'low'};
        $low22 = $parsed_json->{'Data'}->{'Data'}[22]->{'low'};
        $low23 = $parsed_json->{'Data'}->{'Data'}[23]->{'low'};

        $date = $parsed_json->{'Data'}->{'Data'}[0]->{'time'};
        $time=date('H', $date);
        $date1 = $parsed_json->{'Data'}->{'Data'}[1]->{'time'};
        $time1=date('H', $date1);
        $date2 = $parsed_json->{'Data'}->{'Data'}[2]->{'time'};
        $time2=date('H', $date2);
        $date3 = $parsed_json->{'Data'}->{'Data'}[3]->{'time'};
        $time3=date('H', $date3);
        $date4 = $parsed_json->{'Data'}->{'Data'}[4]->{'time'};
        $time4=date('H', $date4);
        $date5 = $parsed_json->{'Data'}->{'Data'}[5]->{'time'};
        $time5=date('H', $date5);
        $date6 = $parsed_json->{'Data'}->{'Data'}[6]->{'time'};
        $time6=date('H', $date6);
        $date7 = $parsed_json->{'Data'}->{'Data'}[7]->{'time'};
        $time7=date('H', $date7);
        $date8 = $parsed_json->{'Data'}->{'Data'}[8]->{'time'};
        $time8=date('H', $date8);
        $date9 = $parsed_json->{'Data'}->{'Data'}[9]->{'time'};
        $time9=date('H', $date9);
        $date10 = $parsed_json->{'Data'}->{'Data'}[10]->{'time'};
        $time10=date('H', $date10);
        $date11 = $parsed_json->{'Data'}->{'Data'}[11]->{'time'};
        $time11=date('H', $date11);
        $date12 = $parsed_json->{'Data'}->{'Data'}[12]->{'time'};
        $time12=date('H', $date12);
        $date13 = $parsed_json->{'Data'}->{'Data'}[13]->{'time'};
        $time13=date('H', $date13);
        $date14 = $parsed_json->{'Data'}->{'Data'}[14]->{'time'};
        $time14=date('H', $date14);
        $date15 = $parsed_json->{'Data'}->{'Data'}[15]->{'time'};
        $time15=date('H', $date15);
        $date16 = $parsed_json->{'Data'}->{'Data'}[16]->{'time'};
        $time16=date('H', $date16);
        $date17 = $parsed_json->{'Data'}->{'Data'}[17]->{'time'};
        $time17=date('H', $date17);
        $date18 = $parsed_json->{'Data'}->{'Data'}[18]->{'time'};
        $time18=date('H', $date18);
        $date19 = $parsed_json->{'Data'}->{'Data'}[19]->{'time'};
        $time19=date('H', $date19);
        $date20 = $parsed_json->{'Data'}->{'Data'}[20]->{'time'};
        $time20=date('H', $date20);
        $date21 = $parsed_json->{'Data'}->{'Data'}[21]->{'time'};
        $time21=date('H', $date21);
        $date22 = $parsed_json->{'Data'}->{'Data'}[22]->{'time'};
        $time22=date('H', $date22);
        $date23 = $parsed_json->{'Data'}->{'Data'}[23]->{'time'};
        $time23=date('H', $date23);

        $TimeFrom = $parsed_json->{'Data'}->{'TimeFrom'};
        $DayFrom=date('d m Y', $TimeFrom);

        $TimeTo = $parsed_json->{'Data'}->{'TimeTo'};
        $DayTo=date('d m Y', $TimeTo);

        return $this->render('historique_heures/chainlink.html.twig', [
            'high' => compact('high','high1', 'high2', 'high3', 'high4', 'high5', 'high6', 'high7', 'high8', 'high9', 'high10', 'high11', 'high12', 'high13', 'high14', 'high15'
                , 'high16', 'high17', 'high18', 'high19', 'high20', 'high21', 'high22', 'high23'),

            'low' => compact('low','low1', 'low2', 'low3', 'low4', 'low5', 'low6', 'low7', 'low8', 'low9', 'low10', 'low11', 'low12', 'low13', 'low14', 'low15'
                , 'low16', 'low17', 'low18', 'low19', 'low20', 'low21', 'low22', 'low23'),

            'time' => compact('time','time1', 'time2', 'time3', 'time4', 'time5', 'time6', 'time7', 'time8', 'time9', 'time10', 'time11', 'time12', 'time13', 'time14', 'time15'
                , 'time16', 'time17', 'time18', 'time19', 'time20', 'time21', 'time22', 'time23'),

            'TimeTo' => $DayTo,
            'TimeFrom' => $DayFrom,

        ]);}

    /**
     * @Route("/historique/heures/cardano", name="historique_heures_cardano")
     */
    public function cardano()
    {
        $json = file_get_contents('https://min-api.cryptocompare.com/data/v2/histohour?fsym=ADA&tsym=EUR&limit=24&=b33fc847fb8ce25afe2257eaef4fccea04219ca2d3022f0289bb5708bfe9efca');
        $parsed_json = json_decode($json);
        $high = $parsed_json->{'Data'}->{'Data'}[0]->{'high'};
        $high1 = $parsed_json->{'Data'}->{'Data'}[1]->{'high'};
        $high2 = $parsed_json->{'Data'}->{'Data'}[2]->{'high'};
        $high3 = $parsed_json->{'Data'}->{'Data'}[3]->{'high'};
        $high4 = $parsed_json->{'Data'}->{'Data'}[4]->{'high'};
        $high5 = $parsed_json->{'Data'}->{'Data'}[5]->{'high'};
        $high6 = $parsed_json->{'Data'}->{'Data'}[6]->{'high'};
        $high7 = $parsed_json->{'Data'}->{'Data'}[7]->{'high'};
        $high8 = $parsed_json->{'Data'}->{'Data'}[8]->{'high'};
        $high9 = $parsed_json->{'Data'}->{'Data'}[9]->{'high'};
        $high10 = $parsed_json->{'Data'}->{'Data'}[10]->{'high'};
        $high11 = $parsed_json->{'Data'}->{'Data'}[11]->{'high'};
        $high12 = $parsed_json->{'Data'}->{'Data'}[12]->{'high'};
        $high13 = $parsed_json->{'Data'}->{'Data'}[13]->{'high'};
        $high14 = $parsed_json->{'Data'}->{'Data'}[14]->{'high'};
        $high15 = $parsed_json->{'Data'}->{'Data'}[15]->{'high'};
        $high16 = $parsed_json->{'Data'}->{'Data'}[16]->{'high'};
        $high17 = $parsed_json->{'Data'}->{'Data'}[17]->{'high'};
        $high18 = $parsed_json->{'Data'}->{'Data'}[18]->{'high'};
        $high19 = $parsed_json->{'Data'}->{'Data'}[19]->{'high'};
        $high20 = $parsed_json->{'Data'}->{'Data'}[20]->{'high'};
        $high21 = $parsed_json->{'Data'}->{'Data'}[21]->{'high'};
        $high22 = $parsed_json->{'Data'}->{'Data'}[22]->{'high'};
        $high23 = $parsed_json->{'Data'}->{'Data'}[23]->{'high'};

        $low = $parsed_json->{'Data'}->{'Data'}[0]->{'low'};
        $low1 = $parsed_json->{'Data'}->{'Data'}[1]->{'low'};
        $low2 = $parsed_json->{'Data'}->{'Data'}[2]->{'low'};
        $low3 = $parsed_json->{'Data'}->{'Data'}[3]->{'low'};
        $low4 = $parsed_json->{'Data'}->{'Data'}[4]->{'low'};
        $low5 = $parsed_json->{'Data'}->{'Data'}[5]->{'low'};
        $low6 = $parsed_json->{'Data'}->{'Data'}[6]->{'low'};
        $low7 = $parsed_json->{'Data'}->{'Data'}[7]->{'low'};
        $low8 = $parsed_json->{'Data'}->{'Data'}[8]->{'low'};
        $low9 = $parsed_json->{'Data'}->{'Data'}[9]->{'low'};
        $low10 = $parsed_json->{'Data'}->{'Data'}[10]->{'low'};
        $low11 = $parsed_json->{'Data'}->{'Data'}[11]->{'low'};
        $low12 = $parsed_json->{'Data'}->{'Data'}[12]->{'low'};
        $low13 = $parsed_json->{'Data'}->{'Data'}[13]->{'low'};
        $low14 = $parsed_json->{'Data'}->{'Data'}[14]->{'low'};
        $low15 = $parsed_json->{'Data'}->{'Data'}[15]->{'low'};
        $low16 = $parsed_json->{'Data'}->{'Data'}[16]->{'low'};
        $low17 = $parsed_json->{'Data'}->{'Data'}[17]->{'low'};
        $low18 = $parsed_json->{'Data'}->{'Data'}[18]->{'low'};
        $low19 = $parsed_json->{'Data'}->{'Data'}[19]->{'low'};
        $low20 = $parsed_json->{'Data'}->{'Data'}[20]->{'low'};
        $low21 = $parsed_json->{'Data'}->{'Data'}[21]->{'low'};
        $low22 = $parsed_json->{'Data'}->{'Data'}[22]->{'low'};
        $low23 = $parsed_json->{'Data'}->{'Data'}[23]->{'low'};

        $date = $parsed_json->{'Data'}->{'Data'}[0]->{'time'};
        $time=date('H', $date);
        $date1 = $parsed_json->{'Data'}->{'Data'}[1]->{'time'};
        $time1=date('H', $date1);
        $date2 = $parsed_json->{'Data'}->{'Data'}[2]->{'time'};
        $time2=date('H', $date2);
        $date3 = $parsed_json->{'Data'}->{'Data'}[3]->{'time'};
        $time3=date('H', $date3);
        $date4 = $parsed_json->{'Data'}->{'Data'}[4]->{'time'};
        $time4=date('H', $date4);
        $date5 = $parsed_json->{'Data'}->{'Data'}[5]->{'time'};
        $time5=date('H', $date5);
        $date6 = $parsed_json->{'Data'}->{'Data'}[6]->{'time'};
        $time6=date('H', $date6);
        $date7 = $parsed_json->{'Data'}->{'Data'}[7]->{'time'};
        $time7=date('H', $date7);
        $date8 = $parsed_json->{'Data'}->{'Data'}[8]->{'time'};
        $time8=date('H', $date8);
        $date9 = $parsed_json->{'Data'}->{'Data'}[9]->{'time'};
        $time9=date('H', $date9);
        $date10 = $parsed_json->{'Data'}->{'Data'}[10]->{'time'};
        $time10=date('H', $date10);
        $date11 = $parsed_json->{'Data'}->{'Data'}[11]->{'time'};
        $time11=date('H', $date11);
        $date12 = $parsed_json->{'Data'}->{'Data'}[12]->{'time'};
        $time12=date('H', $date12);
        $date13 = $parsed_json->{'Data'}->{'Data'}[13]->{'time'};
        $time13=date('H', $date13);
        $date14 = $parsed_json->{'Data'}->{'Data'}[14]->{'time'};
        $time14=date('H', $date14);
        $date15 = $parsed_json->{'Data'}->{'Data'}[15]->{'time'};
        $time15=date('H', $date15);
        $date16 = $parsed_json->{'Data'}->{'Data'}[16]->{'time'};
        $time16=date('H', $date16);
        $date17 = $parsed_json->{'Data'}->{'Data'}[17]->{'time'};
        $time17=date('H', $date17);
        $date18 = $parsed_json->{'Data'}->{'Data'}[18]->{'time'};
        $time18=date('H', $date18);
        $date19 = $parsed_json->{'Data'}->{'Data'}[19]->{'time'};
        $time19=date('H', $date19);
        $date20 = $parsed_json->{'Data'}->{'Data'}[20]->{'time'};
        $time20=date('H', $date20);
        $date21 = $parsed_json->{'Data'}->{'Data'}[21]->{'time'};
        $time21=date('H', $date21);
        $date22 = $parsed_json->{'Data'}->{'Data'}[22]->{'time'};
        $time22=date('H', $date22);
        $date23 = $parsed_json->{'Data'}->{'Data'}[23]->{'time'};
        $time23=date('H', $date23);

        $TimeFrom = $parsed_json->{'Data'}->{'TimeFrom'};
        $DayFrom=date('d m Y', $TimeFrom);

        $TimeTo = $parsed_json->{'Data'}->{'TimeTo'};
        $DayTo=date('d m Y', $TimeTo);

        return $this->render('historique_heures/cardano.html.twig', [
            'high' => compact('high','high1', 'high2', 'high3', 'high4', 'high5', 'high6', 'high7', 'high8', 'high9', 'high10', 'high11', 'high12', 'high13', 'high14', 'high15'
                , 'high16', 'high17', 'high18', 'high19', 'high20', 'high21', 'high22', 'high23'),

            'low' => compact('low','low1', 'low2', 'low3', 'low4', 'low5', 'low6', 'low7', 'low8', 'low9', 'low10', 'low11', 'low12', 'low13', 'low14', 'low15'
                , 'low16', 'low17', 'low18', 'low19', 'low20', 'low21', 'low22', 'low23'),

            'time' => compact('time','time1', 'time2', 'time3', 'time4', 'time5', 'time6', 'time7', 'time8', 'time9', 'time10', 'time11', 'time12', 'time13', 'time14', 'time15'
                , 'time16', 'time17', 'time18', 'time19', 'time20', 'time21', 'time22', 'time23'),

            'TimeTo' => $DayTo,
            'TimeFrom' => $DayFrom,

        ]);}



    /**
     * @Route("/historique/heures/bitcoincash", name="historique_heures_bitcoincash")
     */
    public function bitcoincash()
    {
        $json = file_get_contents('https://min-api.cryptocompare.com/data/v2/histohour?fsym=BCH&tsym=EUR&limit=24&=b33fc847fb8ce25afe2257eaef4fccea04219ca2d3022f0289bb5708bfe9efca');
        $parsed_json = json_decode($json);
        $high = $parsed_json->{'Data'}->{'Data'}[0]->{'high'};
        $high1 = $parsed_json->{'Data'}->{'Data'}[1]->{'high'};
        $high2 = $parsed_json->{'Data'}->{'Data'}[2]->{'high'};
        $high3 = $parsed_json->{'Data'}->{'Data'}[3]->{'high'};
        $high4 = $parsed_json->{'Data'}->{'Data'}[4]->{'high'};
        $high5 = $parsed_json->{'Data'}->{'Data'}[5]->{'high'};
        $high6 = $parsed_json->{'Data'}->{'Data'}[6]->{'high'};
        $high7 = $parsed_json->{'Data'}->{'Data'}[7]->{'high'};
        $high8 = $parsed_json->{'Data'}->{'Data'}[8]->{'high'};
        $high9 = $parsed_json->{'Data'}->{'Data'}[9]->{'high'};
        $high10 = $parsed_json->{'Data'}->{'Data'}[10]->{'high'};
        $high11 = $parsed_json->{'Data'}->{'Data'}[11]->{'high'};
        $high12 = $parsed_json->{'Data'}->{'Data'}[12]->{'high'};
        $high13 = $parsed_json->{'Data'}->{'Data'}[13]->{'high'};
        $high14 = $parsed_json->{'Data'}->{'Data'}[14]->{'high'};
        $high15 = $parsed_json->{'Data'}->{'Data'}[15]->{'high'};
        $high16 = $parsed_json->{'Data'}->{'Data'}[16]->{'high'};
        $high17 = $parsed_json->{'Data'}->{'Data'}[17]->{'high'};
        $high18 = $parsed_json->{'Data'}->{'Data'}[18]->{'high'};
        $high19 = $parsed_json->{'Data'}->{'Data'}[19]->{'high'};
        $high20 = $parsed_json->{'Data'}->{'Data'}[20]->{'high'};
        $high21 = $parsed_json->{'Data'}->{'Data'}[21]->{'high'};
        $high22 = $parsed_json->{'Data'}->{'Data'}[22]->{'high'};
        $high23 = $parsed_json->{'Data'}->{'Data'}[23]->{'high'};

        $low = $parsed_json->{'Data'}->{'Data'}[0]->{'low'};
        $low1 = $parsed_json->{'Data'}->{'Data'}[1]->{'low'};
        $low2 = $parsed_json->{'Data'}->{'Data'}[2]->{'low'};
        $low3 = $parsed_json->{'Data'}->{'Data'}[3]->{'low'};
        $low4 = $parsed_json->{'Data'}->{'Data'}[4]->{'low'};
        $low5 = $parsed_json->{'Data'}->{'Data'}[5]->{'low'};
        $low6 = $parsed_json->{'Data'}->{'Data'}[6]->{'low'};
        $low7 = $parsed_json->{'Data'}->{'Data'}[7]->{'low'};
        $low8 = $parsed_json->{'Data'}->{'Data'}[8]->{'low'};
        $low9 = $parsed_json->{'Data'}->{'Data'}[9]->{'low'};
        $low10 = $parsed_json->{'Data'}->{'Data'}[10]->{'low'};
        $low11 = $parsed_json->{'Data'}->{'Data'}[11]->{'low'};
        $low12 = $parsed_json->{'Data'}->{'Data'}[12]->{'low'};
        $low13 = $parsed_json->{'Data'}->{'Data'}[13]->{'low'};
        $low14 = $parsed_json->{'Data'}->{'Data'}[14]->{'low'};
        $low15 = $parsed_json->{'Data'}->{'Data'}[15]->{'low'};
        $low16 = $parsed_json->{'Data'}->{'Data'}[16]->{'low'};
        $low17 = $parsed_json->{'Data'}->{'Data'}[17]->{'low'};
        $low18 = $parsed_json->{'Data'}->{'Data'}[18]->{'low'};
        $low19 = $parsed_json->{'Data'}->{'Data'}[19]->{'low'};
        $low20 = $parsed_json->{'Data'}->{'Data'}[20]->{'low'};
        $low21 = $parsed_json->{'Data'}->{'Data'}[21]->{'low'};
        $low22 = $parsed_json->{'Data'}->{'Data'}[22]->{'low'};
        $low23 = $parsed_json->{'Data'}->{'Data'}[23]->{'low'};

        $date = $parsed_json->{'Data'}->{'Data'}[0]->{'time'};
        $time=date('H', $date);
        $date1 = $parsed_json->{'Data'}->{'Data'}[1]->{'time'};
        $time1=date('H', $date1);
        $date2 = $parsed_json->{'Data'}->{'Data'}[2]->{'time'};
        $time2=date('H', $date2);
        $date3 = $parsed_json->{'Data'}->{'Data'}[3]->{'time'};
        $time3=date('H', $date3);
        $date4 = $parsed_json->{'Data'}->{'Data'}[4]->{'time'};
        $time4=date('H', $date4);
        $date5 = $parsed_json->{'Data'}->{'Data'}[5]->{'time'};
        $time5=date('H', $date5);
        $date6 = $parsed_json->{'Data'}->{'Data'}[6]->{'time'};
        $time6=date('H', $date6);
        $date7 = $parsed_json->{'Data'}->{'Data'}[7]->{'time'};
        $time7=date('H', $date7);
        $date8 = $parsed_json->{'Data'}->{'Data'}[8]->{'time'};
        $time8=date('H', $date8);
        $date9 = $parsed_json->{'Data'}->{'Data'}[9]->{'time'};
        $time9=date('H', $date9);
        $date10 = $parsed_json->{'Data'}->{'Data'}[10]->{'time'};
        $time10=date('H', $date10);
        $date11 = $parsed_json->{'Data'}->{'Data'}[11]->{'time'};
        $time11=date('H', $date11);
        $date12 = $parsed_json->{'Data'}->{'Data'}[12]->{'time'};
        $time12=date('H', $date12);
        $date13 = $parsed_json->{'Data'}->{'Data'}[13]->{'time'};
        $time13=date('H', $date13);
        $date14 = $parsed_json->{'Data'}->{'Data'}[14]->{'time'};
        $time14=date('H', $date14);
        $date15 = $parsed_json->{'Data'}->{'Data'}[15]->{'time'};
        $time15=date('H', $date15);
        $date16 = $parsed_json->{'Data'}->{'Data'}[16]->{'time'};
        $time16=date('H', $date16);
        $date17 = $parsed_json->{'Data'}->{'Data'}[17]->{'time'};
        $time17=date('H', $date17);
        $date18 = $parsed_json->{'Data'}->{'Data'}[18]->{'time'};
        $time18=date('H', $date18);
        $date19 = $parsed_json->{'Data'}->{'Data'}[19]->{'time'};
        $time19=date('H', $date19);
        $date20 = $parsed_json->{'Data'}->{'Data'}[20]->{'time'};
        $time20=date('H', $date20);
        $date21 = $parsed_json->{'Data'}->{'Data'}[21]->{'time'};
        $time21=date('H', $date21);
        $date22 = $parsed_json->{'Data'}->{'Data'}[22]->{'time'};
        $time22=date('H', $date22);
        $date23 = $parsed_json->{'Data'}->{'Data'}[23]->{'time'};
        $time23=date('H', $date23);

        $TimeFrom = $parsed_json->{'Data'}->{'TimeFrom'};
        $DayFrom=date('d m Y', $TimeFrom);

        $TimeTo = $parsed_json->{'Data'}->{'TimeTo'};
        $DayTo=date('d m Y', $TimeTo);

        return $this->render('historique_heures/bitcoincash.html.twig', [
            'high' => compact('high','high1', 'high2', 'high3', 'high4', 'high5', 'high6', 'high7', 'high8', 'high9', 'high10', 'high11', 'high12', 'high13', 'high14', 'high15'
                , 'high16', 'high17', 'high18', 'high19', 'high20', 'high21', 'high22', 'high23'),

            'low' => compact('low','low1', 'low2', 'low3', 'low4', 'low5', 'low6', 'low7', 'low8', 'low9', 'low10', 'low11', 'low12', 'low13', 'low14', 'low15'
                , 'low16', 'low17', 'low18', 'low19', 'low20', 'low21', 'low22', 'low23'),

            'time' => compact('time','time1', 'time2', 'time3', 'time4', 'time5', 'time6', 'time7', 'time8', 'time9', 'time10', 'time11', 'time12', 'time13', 'time14', 'time15'
                , 'time16', 'time17', 'time18', 'time19', 'time20', 'time21', 'time22', 'time23'),

            'TimeTo' => $DayTo,
            'TimeFrom' => $DayFrom,

        ]);}





}
