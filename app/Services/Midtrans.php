<?php

namespace App\Services;

use GuzzleHttp\Client;

class Midtrans
{
    protected string $serverKey;
    protected bool $isProduction;
    protected bool $isSanitized;
    protected bool $is3ds;
    public static array $curlOptions = array();

    public Client $client;

    public function __construct()
    {
        $this->serverKey = config('midtrans.server_key');
        $this->isProduction = config('midtrans.is_production');
        $this->isSanitized = config('midtrans.is_sanitized');
        $this->is3ds = config('midtrans.is_3ds');
    }

    public function getServerKey(): string
    {
        return $this->serverKey;
    }

    public function getIsProduction(): bool
    {
        return $this->isProduction;
    }

    public function getIsSanitized(): bool
    {
        return $this->isSanitized;
    }

    public function getIs3ds(): bool
    {
        return $this->is3ds;
    }

    /**
     * GET request
     *
     * @param string  $url
     * @param string  $serverKey
     * @param mixed[] $dataHash
     */
    public static function get($url, $serverKey, $dataHash): mixed
    {
        return self::remoteCall($url, $serverKey, $dataHash, post: false);
    }

    /**
     * Send POST request
     *
     * @param string  $url
     * @param string  $serverKey
     * @param mixed[] $dataHash
     */
    public static function post($url, $serverKey, $dataHash): mixed
    {
        return self::remoteCall($url, $serverKey, $dataHash, post: true);
    }

    /**
     * Actually send request to API server
     *
     * @param string  $url
     * @param string  $serverKey
     * @param mixed[] $dataHash
     * @param bool    $post
     */
    public static function remoteCall($url, $serverKey, $dataHash, $post): mixed
    {
        $client = new Client();
        $response = $client->request($post ? 'POST' : 'GET', $url, [
            'headers' => [
                'Content-Type' => 'application/json',
                'Accept' => 'application/json',
                'Authorization' => 'Basic ' . base64_encode($serverKey . ':')
            ],
            'json' => $dataHash
        ]);
        return $response;
    }

    /**
     * @param mixed $payloads
     * @return mixed
     */
    public static function charge($payloads)
    {
        $baseUrl = config('midtrans.is_production') ? config('midtrans.production_base_url') : config('midtrans.sandbox_base_url');

        $result = self::post(
            $baseUrl . '/charge',
            config('midtrans.server_key'),
            $payloads
        );

        return $result;
    }

    /**
     * @param mixed $orderId
     * @return mixed
     */
    public static function check($orderId)
    {
        $baseUrl = config('midtrans.is_production') ? config('midtrans.production_base_url') : config('midtrans.sandbox_base_url');
        $result = self::get(
            $baseUrl . '/' . $orderId . '/status',
            config('midtrans.server_key'),
            $orderId
        );

        return $result;
    }
}
