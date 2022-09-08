<?php
interface Payments 
{
  public function adauga();
  public function scade();
}

class OnlinePayments implements Payments 
{
    public function adauga() {
      echo "adauga";
    }

    public function scade() {
        echo "scade";
    }
  }
?>