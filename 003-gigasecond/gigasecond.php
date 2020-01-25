<?php

function from(DateTime $date)
{
    return date_add(clone $date, new DateInterval('PT1000000000S'));
}