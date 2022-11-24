<?php

namespace Retnasuhada\Reporting;
use Illuminate\Support\Facades\Http;

class Reporting {
    public function justDoIt() {
        $response = Http::get('https://inspiration.goprogram.ai/');

        return $response['quote'] . ' -' . $response['author'];
    }
}

