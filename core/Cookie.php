<?php

use Firebase\JWT\JWT;
use Firebase\JWT\Key;

class Cookie
{
    private static $SECRET_KEY = "YOUR_SECRET_KEY"; // secret key bebas

    public static function create_jwt($payload, $exp)
    {
        // Encode payload menjadi JWT
        $jwt = JWT::encode($payload, self::$SECRET_KEY, 'HS256');

        // Debug: tampilkan JWT yang dibuat
        echo "JWT Created: " . $jwt . "<br>";

        // Debug: Tampilkan waktu kadaluwarsa dan waktu saat ini
        echo "Cookie Expiry Time: " . date("Y-m-d H:i:s", $exp) . "<br>";
        echo "Current Time: " . date("Y-m-d H:i:s", time()) . "<br>";

        // Set cookie JWT
        $cookieSet = setcookie("YOURPROJECT-SESSION", $jwt, $exp, "/");

        // Debug: cek apakah cookie berhasil diset
        if ($cookieSet) {
            echo "Cookie successfully set.<br>";
        } else {
            echo "Failed to set cookie.<br>";
        }
    }

    public static function delete_jwt()
    {
        setcookie("YOURPROJECT-SESSION", "", time() - 3600, "/");
    }

    public static function get_jwt()
    {
        if (isset($_COOKIE['YOURPROJECT-SESSION'])) {
            $jwt = $_COOKIE['YOURPROJECT-SESSION'];
            try {
                $payload = JWT::decode($jwt, new Key(self::$SECRET_KEY, 'HS256'));
                return $payload;
            } catch (Exception $e) {
                echo "Error decoding JWT: " . $e->getMessage() . "<br>";
                return null;
            }
        } else {
            echo "No JWT found in cookies.<br>";
            return null;
        }
    }
}
