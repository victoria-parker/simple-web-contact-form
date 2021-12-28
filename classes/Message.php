<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    //Load Composer's autoloader
    require 'vendor/autoload.php';


class Message
{
//Attributes
    private $userName;
    private $userEmail;
    private $issue;
    private $message;


//Methods

    public function sendMessage()
    {
        $userName = filter_var($_POST['userName'], FILTER_SANITIZE_STRING);
        $userEmail = filter_var($_POST['userEmail'], FILTER_SANITIZE_EMAIL);
        $issue = filter_var($_POST['issue'], FILTER_SANITIZE_STRING);
        $message = filter_var($_POST['message'],FILTER_SANITIZE_STRING);
        $body='From: '.$userEmail.'<br>'.'Message: '.$message;
        $mail = new PHPMailer(true);

        try {
            //Server settings
                $mail->SMTPDebug = 0;                      //Enable verbose debug output
                $mail->isSMTP();                                            //Send using SMTP
                $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                $mail->AuthType = 'PLAIN';
                $mail->Username   = 'example@email.com';                     //SMTP username
                $mail->Password   = '*********';                               //SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                $mail->Port       = 465;
                $mail->SMTPOptions = array(
                    'ssl' => array(
                        'verify_peer' => false,
                        'verify_peer_name' => false,
                        'allow_self_signed' => true
                    )
                );

            //Recipients
                $mail->setFrom('example@email.com',$userName);
                $mail->addAddress('example@email.com', 'example');

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = $issue;
            $mail->Body    = $body;


            $mail->send();
            return 'success';

        } catch (Exception $e) {
            return 'danger';
        }
    }


//Getters and Setters
    /**
     * @return mixed
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * @param mixed $userName
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;
    }

    /**
     * @return mixed
     */
    public function getUserEmail()
    {
        return $this->userEmail;
    }

    /**
     * @param mixed $userEmail
     */
    public function setUserEmail($userEmail)
    {
        $this->userEmail = $userEmail;
    }

    /**
     * @return mixed
     */
    public function getIssue()
    {
        return $this->issue;
    }

    /**
     * @param mixed $issue
     */
    public function setIssue($issue)
    {
        $this->issue = $issue;
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param mixed $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }




}