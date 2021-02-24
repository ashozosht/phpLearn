<?php
class payement extends db
{
    public function __construct()
    {
        $this->table = "payments";
    }
    public function get_all_peymant_by_user_id()
    {
        return "SELECT * FROM {$this->table} WHERE payment_user_id={$user_id}";
    }
}
