<?php

use Firebase\JWT\JWT;
use Firebase\JWT\Key;

class Login extends Controller
{
    public static string $SECRET_KEY = "YOUR_SECRET_KEY"; // secret key bebas
    private $model_name = "Login";

    public function index()
    {
        if (isset($_COOKIE['YOURPROJECT-SESSION'])) {
            header("Location: " . BASEURL . "dashboard");
            exit;
        }

        $data['judul'] = 'Login';
        $this->view('login', $data);
    }

    public function logProccess()
    {
        // Hard code username dan password
        $hardCodedUsername = "superadmin";
        $hardCodedPasswordHash = hash('sha256', '03AC674216F3E15C761EE1A5E255F067953623C8B388B4459E13F978D7C846F4'); // Hashing password

        // Validasi username dan password dari form login
        if (isset($_POST['username']) && isset($_POST['password'])) {
            $inputUsername = $_POST['username'];
            $inputPasswordHash = hash('sha256', $_POST['password']); // Hashing input password

            // Cek apakah input sesuai dengan hard code
            if ($inputUsername === $hardCodedUsername && $inputPasswordHash === $hardCodedPasswordHash) {
                $payload = [
                    'sub' => 1,
                    'username' => $hardCodedUsername,
                    'iat' => time(),
                    'name' => "Administrator",
                    'role' => "admin",
                    'exp' => time() + (7 * 24 * 60 * 60)
                ];
                
                // Buat JWT dan simpan ke cookie
                Cookie::create_jwt($payload, $payload['exp']);
                
                Flasher::setFlash('BERHASIL', 'Login dengan Hardcoded Credentials', 'success');
                header("Location: " . BASEURL . "dashboard");
                exit;
            } else {
                // Cek ke database jika hard code tidak cocok
                $data['username'] = $inputUsername;
                $data['password'] = $inputPasswordHash; // Simpan hash untuk validasi

                // Panggil model untuk validasi ke database
                $user = $this->model("$this->model_name", "Login_model")->login($data);

                if ($user) {
                    $payload = [
                        'sub' => $user['id'],
                        'username' => $user['username'],
                        'iat' => time(),
                        'name' => $user['nama'], 
                        'role' => $user['role'], 
                        'exp' => time() + (7 * 24 * 60 * 60)
                    ];
                    Cookie::create_jwt($payload, $payload['exp']);

                    Flasher::setFlash('BERHASIL', 'Login dari Database', 'success');
                    header("Location: " . BASEURL . "dashboard");
                    exit;
                } else {
                    Flasher::setFlash('GAGAL', 'Login', 'danger');
                    header("Location: " . BASEURL . "login");
                    exit;
                }
            }
        } else {
            Flasher::setFlash('GAGAL', 'Login', 'danger');
            header("Location: " . BASEURL . "login");
            exit;
        }
    }
}
