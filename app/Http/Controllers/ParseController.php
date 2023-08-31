<?php

namespace App\Http\Controllers;
use Parsed\Content;
use Parsed\ContentParser;
use Goutte;

use Illuminate\Http\Request;


class ParseController extends Controller
{
     private $marks = [];
     private $options = [];
    public function __invoke(){
        $lastPage = 2;
        for($i=1; $i<=$lastPage; $i++){
        $crawler = Goutte::request('GET', 'https://freshauto.ru/used/cars/?calltouch_tm=yd_c%3A76095471_gb%3A4963321622_ad%3A12391197751_ph%3A39951635074_st%3Asearch_pt%3Aother_p%3A1_s%3Anone_dt%3Adesktop_reg%3A47_ret%3A_apt%3Anone&utm_medium=cpc&utm_source=yandex&utm_campaign=76095471|mgcom_Fresh_Multibrand_All_Y_AS_Msk_AD_Master_CPA&utm_term=%D0%B0%D0%B2%D1%82%D0%BE%20%D1%81%20%D0%BF%D1%80%D0%BE%D0%B1%D0%B5%D0%B3%D0%BE%D0%BC%20%D0%BA%D1%83%D0%BF%D0%B8%D1%82%D1%8C&utm_content=ct_type1|gr_4963321622|b_12391197751|re_|cre_0|ph_39951635074|drf_no|mt_|mk_|st_search|s_none|p_1|pt_other|dt_desktop|reg_47_%D0%9D%D0%B8%D0%B6%D0%BD%D0%B8%D0%B9%20%D0%9D%D0%BE%D0%B2%D0%B3%D0%BE%D1%80%D0%BE%D0%B4|snu_main|sna_&k50id=0100000039951635074_&etext=2202.ORsrASldZdTDZMOoBGmR0rSwbj9BGlEqPfLUvKSuK7H_nMEmukZ5_vY0w7uHcTygIaJyAuPUSuSMrDQECXdRqHpvYXhqcGpjZHVlZWp1dXQ.be8f78d06081c19346adab6e4d0f4ba6fbc3c67d&yclid=4684660444248993373');
        $marks = $crawler->filter('.owl-lazy')->each(function ($node) {
            // $this->marks[] = $node->text();
          echo($node->attr('data-src').'<br/>');
        }); 
        // $item1 = $crawler->filter('.card-car-long__info-item')
        // ->reduce(function($node){
            
        // })
        // ->each(function ($node) {
        //     $node->children()->each(function ($child) {
        //         echo($child->text().'<br/>');
        //         $this->options[] = $child->text();
        //     });
        // }); 
        // $options = $crawler->filter('.car-card__model-title a')->each(function ($node) {
        //     $this->options[] = $node->text();
        //   echo($node->text().'<br/>');
        // }); 
    }

        // dump($this->marks);
        // dump($this->options);
    }
}
