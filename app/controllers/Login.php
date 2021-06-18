<?php 

class Login extends Controller
{
    public function index()
    {
        $data['title'] = 'Login';
        $data['background'] = 'background2.jpg';
        $this->view('templates/header', $data);
        $this->view('login/index', $data);
        $this->view('templates/footer');
    }

    public function masuk()
    {

            $email = $_POST['email'];
            $password = $_POST['password'];

            $user = $this->model('Siswa_model')->masuk($email, $password);
            var_dump($user);
            // jika user terdaftar
            if($user != false){
                // verifikasi password
                if($password == $user["password"]){
                    // buat Session
                    session_start();
                    $_SESSION["user"] = $user;
                    // login sukses, alihkan ke halaman timeline
                    header("Location: " . BASEURL);
                }
            }
  
    }
}
?>