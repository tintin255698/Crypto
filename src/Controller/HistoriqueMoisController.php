<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HistoriqueMoisController extends AbstractController
{
    /**
     * @Route("/historique/mois/BitCoin", name="historique_mois_Bitcoin")
     */
    public function index()
    {
        $json = file_get_contents('https://min-api.cryptocompare.com/data/v2/histoday?fsym=BTC&tsym=EUR&limit=31&=b33fc847fb8ce25afe2257eaef4fccea04219ca2d3022f0289bb5708bfe9efca');
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
        $high24 = $parsed_json->{'Data'}->{'Data'}[24]->{'high'};
        $high25 = $parsed_json->{'Data'}->{'Data'}[25]->{'high'};
        $high26 = $parsed_json->{'Data'}->{'Data'}[26]->{'high'};
        $high27 = $parsed_json->{'Data'}->{'Data'}[27]->{'high'};
        $high28 = $parsed_json->{'Data'}->{'Data'}[28]->{'high'};
        $high29 = $parsed_json->{'Data'}->{'Data'}[29]->{'high'};
        $high30 = $parsed_json->{'Data'}->{'Data'}[30]->{'high'};
        $high31 = $parsed_json->{'Data'}->{'Data'}[31]->{'high'};

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
        $low24 = $parsed_json->{'Data'}->{'Data'}[24]->{'low'};
        $low25 = $parsed_json->{'Data'}->{'Data'}[25]->{'low'};
        $low26 = $parsed_json->{'Data'}->{'Data'}[26]->{'low'};
        $low27 = $parsed_json->{'Data'}->{'Data'}[27]->{'low'};
        $low28 = $parsed_json->{'Data'}->{'Data'}[28]->{'low'};
        $low29 = $parsed_json->{'Data'}->{'Data'}[29]->{'low'};
        $low30 = $parsed_json->{'Data'}->{'Data'}[30]->{'low'};
        $low31 = $parsed_json->{'Data'}->{'Data'}[31]->{'low'};

        $date = $parsed_json->{'Data'}->{'Data'}[0]->{'time'};
        $time=date('d', $date);
        $date1 = $parsed_json->{'Data'}->{'Data'}[1]->{'time'};
        $time1=date('d', $date1);
        $date2 = $parsed_json->{'Data'}->{'Data'}[2]->{'time'};
        $time2=date('d', $date2);
        $date3 = $parsed_json->{'Data'}->{'Data'}[3]->{'time'};
        $time3=date('d', $date3);
        $date4 = $parsed_json->{'Data'}->{'Data'}[4]->{'time'};
        $time4=date('d', $date4);
        $date5 = $parsed_json->{'Data'}->{'Data'}[5]->{'time'};
        $time5=date('d', $date5);
        $date6 = $parsed_json->{'Data'}->{'Data'}[6]->{'time'};
        $time6=date('d', $date6);
        $date7 = $parsed_json->{'Data'}->{'Data'}[7]->{'time'};
        $time7=date('d', $date7);
        $date8 = $parsed_json->{'Data'}->{'Data'}[8]->{'time'};
        $time8=date('d', $date8);
        $date9 = $parsed_json->{'Data'}->{'Data'}[9]->{'time'};
        $time9=date('d', $date9);
        $date10 = $parsed_json->{'Data'}->{'Data'}[10]->{'time'};
        $time10=date('d', $date10);
        $date11 = $parsed_json->{'Data'}->{'Data'}[11]->{'time'};
        $time11=date('d', $date11);
        $date12 = $parsed_json->{'Data'}->{'Data'}[12]->{'time'};
        $time12=date('d', $date12);
        $date13 = $parsed_json->{'Data'}->{'Data'}[13]->{'time'};
        $time13=date('d', $date13);
        $date14 = $parsed_json->{'Data'}->{'Data'}[14]->{'time'};
        $time14=date('d', $date14);
        $date15 = $parsed_json->{'Data'}->{'Data'}[15]->{'time'};
        $time15=date('d', $date15);
        $date16 = $parsed_json->{'Data'}->{'Data'}[16]->{'time'};
        $time16=date('d', $date16);
        $date17 = $parsed_json->{'Data'}->{'Data'}[17]->{'time'};
        $time17=date('d', $date17);
        $date18 = $parsed_json->{'Data'}->{'Data'}[18]->{'time'};
        $time18=date('d', $date18);
        $date19 = $parsed_json->{'Data'}->{'Data'}[19]->{'time'};
        $time19=date('d', $date19);
        $date20 = $parsed_json->{'Data'}->{'Data'}[20]->{'time'};
        $time20=date('d', $date20);
        $date21 = $parsed_json->{'Data'}->{'Data'}[21]->{'time'};
        $time21=date('d', $date21);
        $date22 = $parsed_json->{'Data'}->{'Data'}[22]->{'time'};
        $time22=date('d', $date22);
        $date23 = $parsed_json->{'Data'}->{'Data'}[23]->{'time'};
        $time23=date('d', $date23);
        $date24 = $parsed_json->{'Data'}->{'Data'}[24]->{'time'};
        $time24=date('d', $date24);
        $date25 = $parsed_json->{'Data'}->{'Data'}[25]->{'time'};
        $time25=date('d', $date25);
        $date26 = $parsed_json->{'Data'}->{'Data'}[26]->{'time'};
        $time26=date('d', $date26);
        $date27 = $parsed_json->{'Data'}->{'Data'}[27]->{'time'};
        $time27=date('d', $date27);
        $date28 = $parsed_json->{'Data'}->{'Data'}[28]->{'time'};
        $time28=date('d', $date28);
        $date29 = $parsed_json->{'Data'}->{'Data'}[29]->{'time'};
        $time29=date('d', $date29);
        $date30 = $parsed_json->{'Data'}->{'Data'}[30]->{'time'};
        $time30=date('d', $date30);
        $date31 = $parsed_json->{'Data'}->{'Data'}[31]->{'time'};
        $time31=date('d', $date31);

        $TimeFrom = $parsed_json->{'Data'}->{'TimeFrom'};
        $DayFrom=date('d m Y', $TimeFrom);

        $TimeTo = $parsed_json->{'Data'}->{'TimeTo'};
        $DayTo=date('d m Y', $TimeTo);

        return $this->render('historique_mois/index.html.twig', [
            'high' => compact('high','high1', 'high2', 'high3', 'high4', 'high5', 'high6', 'high7', 'high8', 'high9', 'high10', 'high11', 'high12', 'high13', 'high14', 'high15'
                , 'high16', 'high17', 'high18', 'high19', 'high20', 'high21', 'high22', 'high23', 'high24', 'high25', 'high26', 'high27', 'high28', 'high29', 'high30', 'high31'),

            'low' => compact('low','low1', 'low2', 'low3', 'low4', 'low5', 'low6', 'low7', 'low8', 'low9', 'low10', 'low11', 'low12', 'low13', 'low14', 'low15'
                , 'low16', 'low17', 'low18', 'low19', 'low20', 'low21', 'low22', 'low23', 'low24', 'low25', 'low26', 'low27', 'low28', 'low29', 'low30', 'low31'),

            'time' => compact('time','time1', 'time2', 'time3', 'time4', 'time5', 'time6', 'time7', 'time8', 'time9', 'time10', 'time11', 'time12', 'time13', 'time14', 'time15'
                , 'time16', 'time17', 'time18', 'time19', 'time20', 'time21', 'time22', 'time23', 'time24', 'time25', 'time26', 'time27', 'time28', 'time29', 'time30', 'time31'),

            'TimeTo' => $DayTo,
            'TimeFrom' => $DayFrom,

        ]);}

    /**
     * @Route("/historique/mois/chainlink", name="historique_mois_chainlink")
     */
    public function chainlink()
    {
        $json = file_get_contents('https://min-api.cryptocompare.com/data/v2/histoday?fsym=LINK&tsym=EUR&limit=31&=b33fc847fb8ce25afe2257eaef4fccea04219ca2d3022f0289bb5708bfe9efca');
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
        $high24 = $parsed_json->{'Data'}->{'Data'}[24]->{'high'};
        $high25 = $parsed_json->{'Data'}->{'Data'}[25]->{'high'};
        $high26 = $parsed_json->{'Data'}->{'Data'}[26]->{'high'};
        $high27 = $parsed_json->{'Data'}->{'Data'}[27]->{'high'};
        $high28 = $parsed_json->{'Data'}->{'Data'}[28]->{'high'};
        $high29 = $parsed_json->{'Data'}->{'Data'}[29]->{'high'};
        $high30 = $parsed_json->{'Data'}->{'Data'}[30]->{'high'};
        $high31 = $parsed_json->{'Data'}->{'Data'}[31]->{'high'};

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
        $low24 = $parsed_json->{'Data'}->{'Data'}[24]->{'low'};
        $low25 = $parsed_json->{'Data'}->{'Data'}[25]->{'low'};
        $low26 = $parsed_json->{'Data'}->{'Data'}[26]->{'low'};
        $low27 = $parsed_json->{'Data'}->{'Data'}[27]->{'low'};
        $low28 = $parsed_json->{'Data'}->{'Data'}[28]->{'low'};
        $low29 = $parsed_json->{'Data'}->{'Data'}[29]->{'low'};
        $low30 = $parsed_json->{'Data'}->{'Data'}[30]->{'low'};
        $low31 = $parsed_json->{'Data'}->{'Data'}[31]->{'low'};

        $date = $parsed_json->{'Data'}->{'Data'}[0]->{'time'};
        $time=date('d', $date);
        $date1 = $parsed_json->{'Data'}->{'Data'}[1]->{'time'};
        $time1=date('d', $date1);
        $date2 = $parsed_json->{'Data'}->{'Data'}[2]->{'time'};
        $time2=date('d', $date2);
        $date3 = $parsed_json->{'Data'}->{'Data'}[3]->{'time'};
        $time3=date('d', $date3);
        $date4 = $parsed_json->{'Data'}->{'Data'}[4]->{'time'};
        $time4=date('d', $date4);
        $date5 = $parsed_json->{'Data'}->{'Data'}[5]->{'time'};
        $time5=date('d', $date5);
        $date6 = $parsed_json->{'Data'}->{'Data'}[6]->{'time'};
        $time6=date('d', $date6);
        $date7 = $parsed_json->{'Data'}->{'Data'}[7]->{'time'};
        $time7=date('d', $date7);
        $date8 = $parsed_json->{'Data'}->{'Data'}[8]->{'time'};
        $time8=date('d', $date8);
        $date9 = $parsed_json->{'Data'}->{'Data'}[9]->{'time'};
        $time9=date('d', $date9);
        $date10 = $parsed_json->{'Data'}->{'Data'}[10]->{'time'};
        $time10=date('d', $date10);
        $date11 = $parsed_json->{'Data'}->{'Data'}[11]->{'time'};
        $time11=date('d', $date11);
        $date12 = $parsed_json->{'Data'}->{'Data'}[12]->{'time'};
        $time12=date('d', $date12);
        $date13 = $parsed_json->{'Data'}->{'Data'}[13]->{'time'};
        $time13=date('d', $date13);
        $date14 = $parsed_json->{'Data'}->{'Data'}[14]->{'time'};
        $time14=date('d', $date14);
        $date15 = $parsed_json->{'Data'}->{'Data'}[15]->{'time'};
        $time15=date('d', $date15);
        $date16 = $parsed_json->{'Data'}->{'Data'}[16]->{'time'};
        $time16=date('d', $date16);
        $date17 = $parsed_json->{'Data'}->{'Data'}[17]->{'time'};
        $time17=date('d', $date17);
        $date18 = $parsed_json->{'Data'}->{'Data'}[18]->{'time'};
        $time18=date('d', $date18);
        $date19 = $parsed_json->{'Data'}->{'Data'}[19]->{'time'};
        $time19=date('d', $date19);
        $date20 = $parsed_json->{'Data'}->{'Data'}[20]->{'time'};
        $time20=date('d', $date20);
        $date21 = $parsed_json->{'Data'}->{'Data'}[21]->{'time'};
        $time21=date('d', $date21);
        $date22 = $parsed_json->{'Data'}->{'Data'}[22]->{'time'};
        $time22=date('d', $date22);
        $date23 = $parsed_json->{'Data'}->{'Data'}[23]->{'time'};
        $time23=date('d', $date23);
        $date24 = $parsed_json->{'Data'}->{'Data'}[24]->{'time'};
        $time24=date('d', $date24);
        $date25 = $parsed_json->{'Data'}->{'Data'}[25]->{'time'};
        $time25=date('d', $date25);
        $date26 = $parsed_json->{'Data'}->{'Data'}[26]->{'time'};
        $time26=date('d', $date26);
        $date27 = $parsed_json->{'Data'}->{'Data'}[27]->{'time'};
        $time27=date('d', $date27);
        $date28 = $parsed_json->{'Data'}->{'Data'}[28]->{'time'};
        $time28=date('d', $date28);
        $date29 = $parsed_json->{'Data'}->{'Data'}[29]->{'time'};
        $time29=date('d', $date29);
        $date30 = $parsed_json->{'Data'}->{'Data'}[30]->{'time'};
        $time30=date('d', $date30);
        $date31 = $parsed_json->{'Data'}->{'Data'}[31]->{'time'};
        $time31=date('d', $date31);

        $TimeFrom = $parsed_json->{'Data'}->{'TimeFrom'};
        $DayFrom=date('d m Y', $TimeFrom);

        $TimeTo = $parsed_json->{'Data'}->{'TimeTo'};
        $DayTo=date('d m Y', $TimeTo);

        return $this->render('historique_mois/chainlink.html.twig', [
            'high' => compact('high','high1', 'high2', 'high3', 'high4', 'high5', 'high6', 'high7', 'high8', 'high9', 'high10', 'high11', 'high12', 'high13', 'high14', 'high15'
                , 'high16', 'high17', 'high18', 'high19', 'high20', 'high21', 'high22', 'high23', 'high24', 'high25', 'high26', 'high27', 'high28', 'high29', 'high30', 'high31'),

            'low' => compact('low','low1', 'low2', 'low3', 'low4', 'low5', 'low6', 'low7', 'low8', 'low9', 'low10', 'low11', 'low12', 'low13', 'low14', 'low15'
                , 'low16', 'low17', 'low18', 'low19', 'low20', 'low21', 'low22', 'low23', 'low24', 'low25', 'low26', 'low27', 'low28', 'low29', 'low30', 'low31'),

            'time' => compact('time','time1', 'time2', 'time3', 'time4', 'time5', 'time6', 'time7', 'time8', 'time9', 'time10', 'time11', 'time12', 'time13', 'time14', 'time15'
                , 'time16', 'time17', 'time18', 'time19', 'time20', 'time21', 'time22', 'time23', 'time24', 'time25', 'time26', 'time27', 'time28', 'time29', 'time30', 'time31'),

            'TimeTo' => $DayTo,
            'TimeFrom' => $DayFrom,

        ]);}

    /**
     * @Route("/historique/mois/ethereum", name="historique_mois_ethereum")
     */
    public function ethereum()
    {
        $json = file_get_contents('https://min-api.cryptocompare.com/data/v2/histoday?fsym=ETH&tsym=EUR&limit=31&=b33fc847fb8ce25afe2257eaef4fccea04219ca2d3022f0289bb5708bfe9efca');
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
        $high24 = $parsed_json->{'Data'}->{'Data'}[24]->{'high'};
        $high25 = $parsed_json->{'Data'}->{'Data'}[25]->{'high'};
        $high26 = $parsed_json->{'Data'}->{'Data'}[26]->{'high'};
        $high27 = $parsed_json->{'Data'}->{'Data'}[27]->{'high'};
        $high28 = $parsed_json->{'Data'}->{'Data'}[28]->{'high'};
        $high29 = $parsed_json->{'Data'}->{'Data'}[29]->{'high'};
        $high30 = $parsed_json->{'Data'}->{'Data'}[30]->{'high'};
        $high31 = $parsed_json->{'Data'}->{'Data'}[31]->{'high'};

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
        $low24 = $parsed_json->{'Data'}->{'Data'}[24]->{'low'};
        $low25 = $parsed_json->{'Data'}->{'Data'}[25]->{'low'};
        $low26 = $parsed_json->{'Data'}->{'Data'}[26]->{'low'};
        $low27 = $parsed_json->{'Data'}->{'Data'}[27]->{'low'};
        $low28 = $parsed_json->{'Data'}->{'Data'}[28]->{'low'};
        $low29 = $parsed_json->{'Data'}->{'Data'}[29]->{'low'};
        $low30 = $parsed_json->{'Data'}->{'Data'}[30]->{'low'};
        $low31 = $parsed_json->{'Data'}->{'Data'}[31]->{'low'};

        $date = $parsed_json->{'Data'}->{'Data'}[0]->{'time'};
        $time=date('d', $date);
        $date1 = $parsed_json->{'Data'}->{'Data'}[1]->{'time'};
        $time1=date('d', $date1);
        $date2 = $parsed_json->{'Data'}->{'Data'}[2]->{'time'};
        $time2=date('d', $date2);
        $date3 = $parsed_json->{'Data'}->{'Data'}[3]->{'time'};
        $time3=date('d', $date3);
        $date4 = $parsed_json->{'Data'}->{'Data'}[4]->{'time'};
        $time4=date('d', $date4);
        $date5 = $parsed_json->{'Data'}->{'Data'}[5]->{'time'};
        $time5=date('d', $date5);
        $date6 = $parsed_json->{'Data'}->{'Data'}[6]->{'time'};
        $time6=date('d', $date6);
        $date7 = $parsed_json->{'Data'}->{'Data'}[7]->{'time'};
        $time7=date('d', $date7);
        $date8 = $parsed_json->{'Data'}->{'Data'}[8]->{'time'};
        $time8=date('d', $date8);
        $date9 = $parsed_json->{'Data'}->{'Data'}[9]->{'time'};
        $time9=date('d', $date9);
        $date10 = $parsed_json->{'Data'}->{'Data'}[10]->{'time'};
        $time10=date('d', $date10);
        $date11 = $parsed_json->{'Data'}->{'Data'}[11]->{'time'};
        $time11=date('d', $date11);
        $date12 = $parsed_json->{'Data'}->{'Data'}[12]->{'time'};
        $time12=date('d', $date12);
        $date13 = $parsed_json->{'Data'}->{'Data'}[13]->{'time'};
        $time13=date('d', $date13);
        $date14 = $parsed_json->{'Data'}->{'Data'}[14]->{'time'};
        $time14=date('d', $date14);
        $date15 = $parsed_json->{'Data'}->{'Data'}[15]->{'time'};
        $time15=date('d', $date15);
        $date16 = $parsed_json->{'Data'}->{'Data'}[16]->{'time'};
        $time16=date('d', $date16);
        $date17 = $parsed_json->{'Data'}->{'Data'}[17]->{'time'};
        $time17=date('d', $date17);
        $date18 = $parsed_json->{'Data'}->{'Data'}[18]->{'time'};
        $time18=date('d', $date18);
        $date19 = $parsed_json->{'Data'}->{'Data'}[19]->{'time'};
        $time19=date('d', $date19);
        $date20 = $parsed_json->{'Data'}->{'Data'}[20]->{'time'};
        $time20=date('d', $date20);
        $date21 = $parsed_json->{'Data'}->{'Data'}[21]->{'time'};
        $time21=date('d', $date21);
        $date22 = $parsed_json->{'Data'}->{'Data'}[22]->{'time'};
        $time22=date('d', $date22);
        $date23 = $parsed_json->{'Data'}->{'Data'}[23]->{'time'};
        $time23=date('d', $date23);
        $date24 = $parsed_json->{'Data'}->{'Data'}[24]->{'time'};
        $time24=date('d', $date24);
        $date25 = $parsed_json->{'Data'}->{'Data'}[25]->{'time'};
        $time25=date('d', $date25);
        $date26 = $parsed_json->{'Data'}->{'Data'}[26]->{'time'};
        $time26=date('d', $date26);
        $date27 = $parsed_json->{'Data'}->{'Data'}[27]->{'time'};
        $time27=date('d', $date27);
        $date28 = $parsed_json->{'Data'}->{'Data'}[28]->{'time'};
        $time28=date('d', $date28);
        $date29 = $parsed_json->{'Data'}->{'Data'}[29]->{'time'};
        $time29=date('d', $date29);
        $date30 = $parsed_json->{'Data'}->{'Data'}[30]->{'time'};
        $time30=date('d', $date30);
        $date31 = $parsed_json->{'Data'}->{'Data'}[31]->{'time'};
        $time31=date('d', $date31);

        $TimeFrom = $parsed_json->{'Data'}->{'TimeFrom'};
        $DayFrom=date('d m Y', $TimeFrom);

        $TimeTo = $parsed_json->{'Data'}->{'TimeTo'};
        $DayTo=date('d m Y', $TimeTo);

        return $this->render('historique_mois/ethereum.html.twig', [
            'high' => compact('high','high1', 'high2', 'high3', 'high4', 'high5', 'high6', 'high7', 'high8', 'high9', 'high10', 'high11', 'high12', 'high13', 'high14', 'high15'
                , 'high16', 'high17', 'high18', 'high19', 'high20', 'high21', 'high22', 'high23', 'high24', 'high25', 'high26', 'high27', 'high28', 'high29', 'high30', 'high31'),

            'low' => compact('low','low1', 'low2', 'low3', 'low4', 'low5', 'low6', 'low7', 'low8', 'low9', 'low10', 'low11', 'low12', 'low13', 'low14', 'low15'
                , 'low16', 'low17', 'low18', 'low19', 'low20', 'low21', 'low22', 'low23', 'low24', 'low25', 'low26', 'low27', 'low28', 'low29', 'low30', 'low31'),

            'time' => compact('time','time1', 'time2', 'time3', 'time4', 'time5', 'time6', 'time7', 'time8', 'time9', 'time10', 'time11', 'time12', 'time13', 'time14', 'time15'
                , 'time16', 'time17', 'time18', 'time19', 'time20', 'time21', 'time22', 'time23', 'time24', 'time25', 'time26', 'time27', 'time28', 'time29', 'time30', 'time31'),

            'TimeTo' => $DayTo,
            'TimeFrom' => $DayFrom,

        ]);}


    /**
     * @Route("/historique/mois/cardano", name="historique_mois_cardano")
     */
    public function cardano()
    {
        $json = file_get_contents('https://min-api.cryptocompare.com/data/v2/histoday?fsym=ADA&tsym=EUR&limit=31&=b33fc847fb8ce25afe2257eaef4fccea04219ca2d3022f0289bb5708bfe9efca');
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
        $high24 = $parsed_json->{'Data'}->{'Data'}[24]->{'high'};
        $high25 = $parsed_json->{'Data'}->{'Data'}[25]->{'high'};
        $high26 = $parsed_json->{'Data'}->{'Data'}[26]->{'high'};
        $high27 = $parsed_json->{'Data'}->{'Data'}[27]->{'high'};
        $high28 = $parsed_json->{'Data'}->{'Data'}[28]->{'high'};
        $high29 = $parsed_json->{'Data'}->{'Data'}[29]->{'high'};
        $high30 = $parsed_json->{'Data'}->{'Data'}[30]->{'high'};
        $high31 = $parsed_json->{'Data'}->{'Data'}[31]->{'high'};

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
        $low24 = $parsed_json->{'Data'}->{'Data'}[24]->{'low'};
        $low25 = $parsed_json->{'Data'}->{'Data'}[25]->{'low'};
        $low26 = $parsed_json->{'Data'}->{'Data'}[26]->{'low'};
        $low27 = $parsed_json->{'Data'}->{'Data'}[27]->{'low'};
        $low28 = $parsed_json->{'Data'}->{'Data'}[28]->{'low'};
        $low29 = $parsed_json->{'Data'}->{'Data'}[29]->{'low'};
        $low30 = $parsed_json->{'Data'}->{'Data'}[30]->{'low'};
        $low31 = $parsed_json->{'Data'}->{'Data'}[31]->{'low'};

        $date = $parsed_json->{'Data'}->{'Data'}[0]->{'time'};
        $time=date('d', $date);
        $date1 = $parsed_json->{'Data'}->{'Data'}[1]->{'time'};
        $time1=date('d', $date1);
        $date2 = $parsed_json->{'Data'}->{'Data'}[2]->{'time'};
        $time2=date('d', $date2);
        $date3 = $parsed_json->{'Data'}->{'Data'}[3]->{'time'};
        $time3=date('d', $date3);
        $date4 = $parsed_json->{'Data'}->{'Data'}[4]->{'time'};
        $time4=date('d', $date4);
        $date5 = $parsed_json->{'Data'}->{'Data'}[5]->{'time'};
        $time5=date('d', $date5);
        $date6 = $parsed_json->{'Data'}->{'Data'}[6]->{'time'};
        $time6=date('d', $date6);
        $date7 = $parsed_json->{'Data'}->{'Data'}[7]->{'time'};
        $time7=date('d', $date7);
        $date8 = $parsed_json->{'Data'}->{'Data'}[8]->{'time'};
        $time8=date('d', $date8);
        $date9 = $parsed_json->{'Data'}->{'Data'}[9]->{'time'};
        $time9=date('d', $date9);
        $date10 = $parsed_json->{'Data'}->{'Data'}[10]->{'time'};
        $time10=date('d', $date10);
        $date11 = $parsed_json->{'Data'}->{'Data'}[11]->{'time'};
        $time11=date('d', $date11);
        $date12 = $parsed_json->{'Data'}->{'Data'}[12]->{'time'};
        $time12=date('d', $date12);
        $date13 = $parsed_json->{'Data'}->{'Data'}[13]->{'time'};
        $time13=date('d', $date13);
        $date14 = $parsed_json->{'Data'}->{'Data'}[14]->{'time'};
        $time14=date('d', $date14);
        $date15 = $parsed_json->{'Data'}->{'Data'}[15]->{'time'};
        $time15=date('d', $date15);
        $date16 = $parsed_json->{'Data'}->{'Data'}[16]->{'time'};
        $time16=date('d', $date16);
        $date17 = $parsed_json->{'Data'}->{'Data'}[17]->{'time'};
        $time17=date('d', $date17);
        $date18 = $parsed_json->{'Data'}->{'Data'}[18]->{'time'};
        $time18=date('d', $date18);
        $date19 = $parsed_json->{'Data'}->{'Data'}[19]->{'time'};
        $time19=date('d', $date19);
        $date20 = $parsed_json->{'Data'}->{'Data'}[20]->{'time'};
        $time20=date('d', $date20);
        $date21 = $parsed_json->{'Data'}->{'Data'}[21]->{'time'};
        $time21=date('d', $date21);
        $date22 = $parsed_json->{'Data'}->{'Data'}[22]->{'time'};
        $time22=date('d', $date22);
        $date23 = $parsed_json->{'Data'}->{'Data'}[23]->{'time'};
        $time23=date('d', $date23);
        $date24 = $parsed_json->{'Data'}->{'Data'}[24]->{'time'};
        $time24=date('d', $date24);
        $date25 = $parsed_json->{'Data'}->{'Data'}[25]->{'time'};
        $time25=date('d', $date25);
        $date26 = $parsed_json->{'Data'}->{'Data'}[26]->{'time'};
        $time26=date('d', $date26);
        $date27 = $parsed_json->{'Data'}->{'Data'}[27]->{'time'};
        $time27=date('d', $date27);
        $date28 = $parsed_json->{'Data'}->{'Data'}[28]->{'time'};
        $time28=date('d', $date28);
        $date29 = $parsed_json->{'Data'}->{'Data'}[29]->{'time'};
        $time29=date('d', $date29);
        $date30 = $parsed_json->{'Data'}->{'Data'}[30]->{'time'};
        $time30=date('d', $date30);
        $date31 = $parsed_json->{'Data'}->{'Data'}[31]->{'time'};
        $time31=date('d', $date31);

        $TimeFrom = $parsed_json->{'Data'}->{'TimeFrom'};
        $DayFrom=date('d m Y', $TimeFrom);

        $TimeTo = $parsed_json->{'Data'}->{'TimeTo'};
        $DayTo=date('d m Y', $TimeTo);

        return $this->render('historique_mois/cardano.html.twig', [
            'high' => compact('high','high1', 'high2', 'high3', 'high4', 'high5', 'high6', 'high7', 'high8', 'high9', 'high10', 'high11', 'high12', 'high13', 'high14', 'high15'
                , 'high16', 'high17', 'high18', 'high19', 'high20', 'high21', 'high22', 'high23', 'high24', 'high25', 'high26', 'high27', 'high28', 'high29', 'high30', 'high31'),

            'low' => compact('low','low1', 'low2', 'low3', 'low4', 'low5', 'low6', 'low7', 'low8', 'low9', 'low10', 'low11', 'low12', 'low13', 'low14', 'low15'
                , 'low16', 'low17', 'low18', 'low19', 'low20', 'low21', 'low22', 'low23', 'low24', 'low25', 'low26', 'low27', 'low28', 'low29', 'low30', 'low31'),

            'time' => compact('time','time1', 'time2', 'time3', 'time4', 'time5', 'time6', 'time7', 'time8', 'time9', 'time10', 'time11', 'time12', 'time13', 'time14', 'time15'
                , 'time16', 'time17', 'time18', 'time19', 'time20', 'time21', 'time22', 'time23', 'time24', 'time25', 'time26', 'time27', 'time28', 'time29', 'time30', 'time31'),

            'TimeTo' => $DayTo,
            'TimeFrom' => $DayFrom,

        ]);}

    /**
     * @Route("/historique/mois/bitcoincash", name="historique_mois_bitcoincash")
     */
    public function BitcoinCash()
    {
        $json = file_get_contents('https://min-api.cryptocompare.com/data/v2/histoday?fsym=BCH&tsym=EUR&limit=31&=b33fc847fb8ce25afe2257eaef4fccea04219ca2d3022f0289bb5708bfe9efca');
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
        $high24 = $parsed_json->{'Data'}->{'Data'}[24]->{'high'};
        $high25 = $parsed_json->{'Data'}->{'Data'}[25]->{'high'};
        $high26 = $parsed_json->{'Data'}->{'Data'}[26]->{'high'};
        $high27 = $parsed_json->{'Data'}->{'Data'}[27]->{'high'};
        $high28 = $parsed_json->{'Data'}->{'Data'}[28]->{'high'};
        $high29 = $parsed_json->{'Data'}->{'Data'}[29]->{'high'};
        $high30 = $parsed_json->{'Data'}->{'Data'}[30]->{'high'};
        $high31 = $parsed_json->{'Data'}->{'Data'}[31]->{'high'};

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
        $low24 = $parsed_json->{'Data'}->{'Data'}[24]->{'low'};
        $low25 = $parsed_json->{'Data'}->{'Data'}[25]->{'low'};
        $low26 = $parsed_json->{'Data'}->{'Data'}[26]->{'low'};
        $low27 = $parsed_json->{'Data'}->{'Data'}[27]->{'low'};
        $low28 = $parsed_json->{'Data'}->{'Data'}[28]->{'low'};
        $low29 = $parsed_json->{'Data'}->{'Data'}[29]->{'low'};
        $low30 = $parsed_json->{'Data'}->{'Data'}[30]->{'low'};
        $low31 = $parsed_json->{'Data'}->{'Data'}[31]->{'low'};

        $date = $parsed_json->{'Data'}->{'Data'}[0]->{'time'};
        $time=date('d', $date);
        $date1 = $parsed_json->{'Data'}->{'Data'}[1]->{'time'};
        $time1=date('d', $date1);
        $date2 = $parsed_json->{'Data'}->{'Data'}[2]->{'time'};
        $time2=date('d', $date2);
        $date3 = $parsed_json->{'Data'}->{'Data'}[3]->{'time'};
        $time3=date('d', $date3);
        $date4 = $parsed_json->{'Data'}->{'Data'}[4]->{'time'};
        $time4=date('d', $date4);
        $date5 = $parsed_json->{'Data'}->{'Data'}[5]->{'time'};
        $time5=date('d', $date5);
        $date6 = $parsed_json->{'Data'}->{'Data'}[6]->{'time'};
        $time6=date('d', $date6);
        $date7 = $parsed_json->{'Data'}->{'Data'}[7]->{'time'};
        $time7=date('d', $date7);
        $date8 = $parsed_json->{'Data'}->{'Data'}[8]->{'time'};
        $time8=date('d', $date8);
        $date9 = $parsed_json->{'Data'}->{'Data'}[9]->{'time'};
        $time9=date('d', $date9);
        $date10 = $parsed_json->{'Data'}->{'Data'}[10]->{'time'};
        $time10=date('d', $date10);
        $date11 = $parsed_json->{'Data'}->{'Data'}[11]->{'time'};
        $time11=date('d', $date11);
        $date12 = $parsed_json->{'Data'}->{'Data'}[12]->{'time'};
        $time12=date('d', $date12);
        $date13 = $parsed_json->{'Data'}->{'Data'}[13]->{'time'};
        $time13=date('d', $date13);
        $date14 = $parsed_json->{'Data'}->{'Data'}[14]->{'time'};
        $time14=date('d', $date14);
        $date15 = $parsed_json->{'Data'}->{'Data'}[15]->{'time'};
        $time15=date('d', $date15);
        $date16 = $parsed_json->{'Data'}->{'Data'}[16]->{'time'};
        $time16=date('d', $date16);
        $date17 = $parsed_json->{'Data'}->{'Data'}[17]->{'time'};
        $time17=date('d', $date17);
        $date18 = $parsed_json->{'Data'}->{'Data'}[18]->{'time'};
        $time18=date('d', $date18);
        $date19 = $parsed_json->{'Data'}->{'Data'}[19]->{'time'};
        $time19=date('d', $date19);
        $date20 = $parsed_json->{'Data'}->{'Data'}[20]->{'time'};
        $time20=date('d', $date20);
        $date21 = $parsed_json->{'Data'}->{'Data'}[21]->{'time'};
        $time21=date('d', $date21);
        $date22 = $parsed_json->{'Data'}->{'Data'}[22]->{'time'};
        $time22=date('d', $date22);
        $date23 = $parsed_json->{'Data'}->{'Data'}[23]->{'time'};
        $time23=date('d', $date23);
        $date24 = $parsed_json->{'Data'}->{'Data'}[24]->{'time'};
        $time24=date('d', $date24);
        $date25 = $parsed_json->{'Data'}->{'Data'}[25]->{'time'};
        $time25=date('d', $date25);
        $date26 = $parsed_json->{'Data'}->{'Data'}[26]->{'time'};
        $time26=date('d', $date26);
        $date27 = $parsed_json->{'Data'}->{'Data'}[27]->{'time'};
        $time27=date('d', $date27);
        $date28 = $parsed_json->{'Data'}->{'Data'}[28]->{'time'};
        $time28=date('d', $date28);
        $date29 = $parsed_json->{'Data'}->{'Data'}[29]->{'time'};
        $time29=date('d', $date29);
        $date30 = $parsed_json->{'Data'}->{'Data'}[30]->{'time'};
        $time30=date('d', $date30);
        $date31 = $parsed_json->{'Data'}->{'Data'}[31]->{'time'};
        $time31=date('d', $date31);

        $TimeFrom = $parsed_json->{'Data'}->{'TimeFrom'};
        $DayFrom=date('d m Y', $TimeFrom);

        $TimeTo = $parsed_json->{'Data'}->{'TimeTo'};
        $DayTo=date('d m Y', $TimeTo);

        return $this->render('historique_mois/bitcoincash.html.twig', [
            'high' => compact('high','high1', 'high2', 'high3', 'high4', 'high5', 'high6', 'high7', 'high8', 'high9', 'high10', 'high11', 'high12', 'high13', 'high14', 'high15'
                , 'high16', 'high17', 'high18', 'high19', 'high20', 'high21', 'high22', 'high23', 'high24', 'high25', 'high26', 'high27', 'high28', 'high29', 'high30', 'high31'),

            'low' => compact('low','low1', 'low2', 'low3', 'low4', 'low5', 'low6', 'low7', 'low8', 'low9', 'low10', 'low11', 'low12', 'low13', 'low14', 'low15'
                , 'low16', 'low17', 'low18', 'low19', 'low20', 'low21', 'low22', 'low23', 'low24', 'low25', 'low26', 'low27', 'low28', 'low29', 'low30', 'low31'),

            'time' => compact('time','time1', 'time2', 'time3', 'time4', 'time5', 'time6', 'time7', 'time8', 'time9', 'time10', 'time11', 'time12', 'time13', 'time14', 'time15'
                , 'time16', 'time17', 'time18', 'time19', 'time20', 'time21', 'time22', 'time23', 'time24', 'time25', 'time26', 'time27', 'time28', 'time29', 'time30', 'time31'),

            'TimeTo' => $DayTo,
            'TimeFrom' => $DayFrom,

        ]);}





}

