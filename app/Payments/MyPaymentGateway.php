<?
namespace App\Payments;

class MyPaymentGateway
{
    public $card_name;

    public function __construct()
    {
        $this->card_name = "Master Card";
    }

    public function getCardName()
    {
        return $this->card_name;
    }
}