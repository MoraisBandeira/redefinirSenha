<?php 
namespace App\Controllers;
use App\Models\FormModel;
use CodeIgniter\Controller;

class SendMailController extends Controller
{
    public $code = '146a7492719b3564094efe7abbd40a7416fd900179d02773';

    function sendMail() { 
        $to = $this->request->getVar('mailTo');
        $message ='<button class="btn btn-primary"><a href="http://localhost:8080/newPassword">Redirect</a></button>';
        
        $email = \Config\Services::email();

        $email->setTo($to);
        $email->setFrom('Suporte@site.com', 'Suporte@site');
        $email->setSubject('codigo');
        $email->setMessage($message);

        if ($email->send()) 
		{
            return redirect()->to('/inputCode');
        } 
		else 
		{
            $data = $email->printDebugger(['headers']);
            print_r($data);
        }
    }

}