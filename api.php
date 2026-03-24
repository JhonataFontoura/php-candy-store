<?php

require "require/data.php";

header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET");

$method = $_SERVER['REQUEST_METHOD'];
$endpoint = $_GET['endpoint'] ?? null;

function response($data, $status = 200) {
    http_response_code($status);
    echo json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    exit;
}

if ($method !== 'GET') {
    response([
        'status' => 'error',
        'message' => 'Method not allowed'
    ], 405);
}

if (!$endpoint) {
    response([
        'status' => 'error',
        'message' => 'Endpoint is required'
    ], 400);
}

switch ($endpoint) {

    case 'all':
        response([
            'status' => 'success',
            'data' => [
                'name' => $name,
                'item' => $item,
                'price' => $price,
                'nutrition' => $nutrition,
                'pricing' => $pricing,
                'best_sellers' => $best_sellers,
                'offers' => $offers,
                'offers_of_the_day' => [
                    'day' => $day,
                    'offer' => $do_it
                ]
            ]
        ]);
        break;

    case 'pricing':
        response(['status' => 'success', 'data' => $pricing]);
        break;

    case 'best_sellers':
        response(['status' => 'success', 'data' => $best_sellers]);
        break;

    case 'offers':
        if (isset($_GET['available'])) {
            $available = $_GET['available'] === 'true';

            $filtered = array_filter($offers, function($offer) use ($available) {
                return $offer['is_available'] === $available;
            });

            response([
                'status' => 'success',
                'data' => array_values($filtered)
            ]);
        }

        response(['status' => 'success', 'data' => $offers]);
        break;

    case 'nutrition':
        response(['status' => 'success', 'data' => $nutrition]);
        break;

    case 'offers_of_the_day':
        response([
            'status' => 'success',
            'data' => [
                'day' => $day,
                'offer' => $do_it
            ]
        ]);
        break;

    default:
        response([
            'status' => 'error',
            'message' => 'Invalid endpoint'
        ], 400);
}