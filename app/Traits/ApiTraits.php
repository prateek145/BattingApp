<?php

namespace App\Traits;

use Illuminate\Http\Request;

trait ApiTraits
{
    /**
     * @param Request $request
     * @return $this|false|string
     */
    public function typeofevent(Request $request)
    {
        $curl = curl_init();
        $url = 'http://142.93.36.1/api/v1/fetch_data?Action=listEventTypes';

        // dd($url1);

        curl_setopt_array($curl, [
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_COOKIEFILE => 'file.txt',
            CURLOPT_COOKIEJAR => 'file.txt',
            CURLOPT_CUSTOMREQUEST => 'GET',
        ]);
        $response = curl_exec($curl);
        // dd($response);
        $res = json_decode($response, true);
        $httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        $res['status'] = $httpcode;
        // dd($res);
        if ($httpcode != '200') {
            # code...
            // dd('prateek');
            throw new \Exception($res['message']);
        }
        if (curl_errno($curl)) {
            throw new \Exception('Error:' . curl_error($curl));
        }
        return $res;
        curl_close($curl);
    }


}
