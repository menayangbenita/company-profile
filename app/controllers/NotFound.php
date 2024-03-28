<?

class Notfound extends Controller
{
    public function index()
    {
        $data['judul'] = 'Not Found';

        // $data['user'] = $this->user; @ if already using jwt

        // $this->view('templates/header', $data);
        // $this->view('home/index', $data);
        // $this->view('templates/footer');
    }
}
