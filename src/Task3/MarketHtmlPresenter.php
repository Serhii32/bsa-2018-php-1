<?php declare(strict_types=1);

namespace Cryptocurrency\Task3;

use Cryptocurrency\Task1\CoinMarket;

class MarketHtmlPresenter
{
	
    public function present(CoinMarket $market): string
    {

        $output = '<br>';

        foreach ($market->getCurrencies() as $currency) {

            $output .= '<div><img src="'.$currency->getLogoUrl().'">'.$currency->getName().': '.$currency->getDailyPrice().'</div><br>';
        
        }

        return $output;

    }

}