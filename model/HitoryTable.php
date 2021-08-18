<?php
/**
 * Created by PhpStorm.
 * User: tuan
 * Date: 26/09/2018
 * Time: 08:46
 */

namespace mondel;


class hitoryTable
{
    public $id;
    public $targetId;
    public $sourceId;
    public $amount;
    public $content;
    public $datetime;
    public $success;

    public function __construct($id, $targetId, $sourceId, $amount, $content, $datetime, $success)
    {
        $this->id = $id;
        $this->targetId = $targetId;
        $this->sourceId = $sourceId;
        $this->amount = $amount;
        $this->content = $content;
        $this->datetime = $datetime;
        $this->success = $success;
    }

}