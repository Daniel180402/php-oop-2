<?php

class Card {
    private string $ownerFullName;
    private string $number;
    private DateTime $expireDate;
    private string $cvc;

    public function __construct(string $ownerFullName, string $number, int $year, int $month, int $day, string $cvc) {
        if (strlen($number) != 16 || !is_numeric($number)) {
            throw new TypeError("card number is invalid");
        }

        if (strlen($cvc) != 3 || !is_numeric($cvc)) {
            throw new TypeError("cvc code is invalid");
        }
        $this->ownerFullName = $ownerFullName;
        $this->number = $number;
        $this->expireDate = DateTime::createFromFormat("Y-m-d", "$year-$month-$day");
        $this->cvc = $cvc;
    }

    /**
     *  get owners full name
     * @return string
     */
    public function getownerFullName(): string {
        return $this->ownerFullName;
    }

    /**
     * get the card number
     * @return string
     */
    public function getNumber(): string {
        return $this->number;
    }

    /**
     *  get the card expire date
     * @return DateTime
     */
    public function getExpireDate(): DateTime {
        return $this->expireDate;
    }

    /**
     * get the card CVC
     * @return string
     */
    public function getCvc(): string {
        return $this->cvc;
    }

    /**
     * checking if the card is expired
     * @return bool
     */
    public function isExpired(): bool {
        return $this->expireDate < new DateTime();
    }
}