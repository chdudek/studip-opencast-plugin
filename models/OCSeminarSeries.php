<?php

namespace Opencast\Models;

class OCSeminarSeries extends \SimpleORMap
{
    protected static function configure($config = array())
    {
        $config['db_table'] = 'oc_seminar_series';
        parent::configure($config);
    }
}