<?php

require("../connection.php");
/**
 * Ce handler découpe l'url et les parametres post et redirige vers la bonne fonction
 */
header('Access-Control-Allow-Origin: *');
header('Content-Type: text/html; charset=utf-8');

//require_once('../Controller/DBController.php');

if (!isset($_SESSION)) {
    session_start();
}

/**
 * Class Handler
 */
class Handler
{
    /**
     * Ce controller prend en paramètres le type de données que l'on souhaite récupérer
     * Il va lancer la fonction qui correspond et renvoyer le json au fichier restcontroller
     * @param $type
     * @return string
     */
    function HandlerController($type)
    {
        date_default_timezone_set('Europe/Paris');

        switch ($type) {
            case "connection":
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $result = $this->connection();
                } else {
                    $result = "Erreur:GSx0001";
                }
                break;
            case "mailForget":
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $result = $this->mailForget();
                } else {
                    $result = "Erreur:GSx0002";
                }
                break;
            case "changePassword":
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $result = $this->changePassword();
                } else {
                    $result = "Erreur:GSx0003";
                }
                break;
            case "checkConnection":
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $result = $this->checkConnection();
                } else {
                    $result = "Erreur:GSx0004";
                }
                break;
            case "deconnection":
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $result = $this->deconnection();
                } else {
                    $result = "Erreur:GSx0005";
                }
                break;
            case "faq":
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $result = $this->faq();
                } else {
                    $result = "Erreur:GSx0006";
                }
                break;
            case "user":
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $result = $this->selectUser();
                } else {
                    $result = "Erreur:GSx0007";
                }
                break;
            case "userFilter":
                if ($_SERVER['REQUEST_METHOD'] === 'GET') {
                    $result = $this->selectUserFilter();
                } else {
                    $result = "Erreur:GSx0008";
                }
                break;
            case "promo":
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $result = $this->selectPromo();
                } else {
                    $result = "Erreur:GSx0009";
                }
                break;
            case "submitPromo":
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $result = $this->insertPromo();
                } else {
                    $result = "Erreur:GSx0010";
                }
                break;
            case "modifyPromo":
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $result = $this->modifyPromo();
                } else {
                    $result = "Erreur:GSx0010";
                }
                break;
            default:
                $result = "Erreur: GSx0099";
                break;
        }
        return $result;
    }

    /**
     * @function connexion
     * User Connexion with mail and password
     */
    function connection()
    {
        $response = [];

        if (!empty($_POST['mail']) && !empty($_POST['mdp'])) {
            //connection to check if user exist

            //get value from js
            $mail = $_POST['mail'];
            $mdp = $_POST['mdp'];

            //pdo
            $pdo = connectionPDO();
            $stmt = $pdo->prepare('SELECT * FROM user WHERE user.address = ? ');
            $stmt->bindParam(1, $mail, PDO::PARAM_STR);
            $stmt->execute();
            $user = $stmt->fetch();

            if (!empty($user)) {
                if (password_verify($mdp, $user['password'])) {
                    $response['message'] = "mot de passe valide";

                    $date = date("Y-d-m");
                    $_SESSION['mail'] = sha1($mail);
                    $_SESSION['mdp'] = sha1($mdp);
                    $_SESSION['tokenConnection'] = sha1($mail) . sha1($mdp) . sha1($date);
                } else {
                    $response['message'] = "mot de passe invalide";
                }
            } else {
                $response['message'] = "compte non existant";
            }

            closePDO($stmt);
        } else {
            $response['message'] = "Veuillez remplir tous les champs";
        }

        $response = json_encode($response);
        echo $response;
    }

    /**
     * @function mailForget
     * User Forget mail, check mail and send this
     */
    function mailForget()
    {
        $response = "erreur";

        if (!empty($_POST['mailForget'])) {
            //connection to check if user exist
            $response = [];

            //get value from js
            $mail = $_POST['mailForget'];

            //pdo
            $pdo = connectionPDO();
            $stmt = $pdo->prepare('SELECT * FROM user WHERE user.address = ? ');
            $stmt->bindParam(1, $mail, PDO::PARAM_STR);
            $stmt->execute();
            $user = $stmt->fetch();
            closePDO($pdo);

            if (!empty($user)) {
                //url value
                $mail = $user['address'];

                //create token and date
                $token = random_bytes(5);
                $token = bin2hex($token);
                $date = new DateTime();
                $date = $date->format('Y-m-d H:i:s');

                //insert token and date
                $pdo = connectionPDO();
                $stmt = $pdo->prepare("UPDATE user SET token = ?, date_token = ? WHERE user.address = ?");
                $stmt->bindParam(1, $token, PDO::PARAM_STR);
                $stmt->bindParam(2, $date, PDO::PARAM_STR);
                $stmt->bindParam(3, $mail, PDO::PARAM_STR);
                $stmt->execute();
                closePDO($pdo);

                ////prepare url and send mail
                $url = "http://localhost/intranet_cesi/resetPassword?reset=" . $mail . "&tok=" . $token;

                $to      = 'ayman.agharbi@viacesi.fr';
                $subject = 'Changer de mot de passe';
                $message = 'Pour changer le mot de passe de votre accès à l"intranet CESI, cliquer sur l"url suivant : ' . $url;
                $headers = array(
                    'From' => 'cesi',
                    'Reply-To' => $mail,
                    'X-Mailer' => 'PHP/' . phpversion()
                );

                //$success = mail($to, $subject, $message, $headers);
                /*if (!$success) {
                    $errorMessage = error_get_last()['message'];
                }*/
                $response['message'] = "compte existant";
                $response['url'] = $url;
            }
        }
        $response = json_encode($response);
        echo $response;
    }

    /**
     * @function changePassword
     * User change password, check old password 
     */
    function changePassword()
    {
        $response = "erreur";

        if (!empty($_POST['inputPassword']) && !empty($_POST['mail']) && !empty($_POST['token'])) {
            //connection to check if user exist
            $response = [];

            //get value from js
            $mail = $_POST['mail'];
            $password = $_POST['inputPassword'];
            $token = $_POST['token'];

            //pdo
            $pdo = connectionPDO();
            $stmt = $pdo->prepare('SELECT * FROM user WHERE user.address = ? AND token = ?');
            $stmt->bindParam(1, $mail, PDO::PARAM_STR);
            $stmt->bindParam(2, $token, PDO::PARAM_STR);
            $stmt->execute();
            $user = $stmt->fetch();

            if (!empty($user)) {
                $mail = $user['address'];
                $token = $user['token'];
                $dateEndToken = $user['date_token'];

                $date = new DateTime();
                $date = $date->format('Y-m-d H:i:s');

                //$response['message'] = "compte existant";

                $date1 = new DateTime($dateEndToken);
                $date2 = new DateTime($date);

                $diff = $date2->diff($date1);

                $hours = $diff->h;
                $hours = $hours + ($diff->days * 24);

                if (($hours < 1) && ($token == $user['token'])) {
                    $mdp = password_hash($password, PASSWORD_DEFAULT);

                    $pdo = connectionPDO();
                    $stmt = $pdo->prepare("UPDATE user SET user.password = ? WHERE user.address = ?");
                    $stmt->bindParam(1, $mdp, PDO::PARAM_STR);
                    $stmt->bindParam(2, $mail, PDO::PARAM_STR);
                    $stmt->execute();
                    closePDO($pdo);

                    $response['message'] = 'mot de passe changé';
                } else {
                    $response['message'] = 'le token a expiré';
                }
            } else {
                $response['message'] = "compte non existant";
            }

            closePDO($stmt);
        }

        $response = json_encode($response);
        echo $response;
    }

    /** 
     * @function checkConnection
     * check the connection with session and token
     */
    function checkConnection()
    {
        $result = "";
        if (isset($_SESSION['mail']) && isset($_SESSION['mdp']) && isset($_SESSION['tokenConnection'])) {
            $date = date("Y-d-m");

            $tokenverif = $_SESSION['mail'] . $_SESSION['mdp'] . sha1($date);

            if ($tokenverif == $_SESSION['tokenConnection']) {
                $result = "token valide";
            } else {
                $result = "token invalide";
                //$result = $tokenverif." ".$_SESSION['tokenConnection'];
            }
        } else {
            $result = "token inexistant";
        }

        echo $result;
    }

    /**
     * @function deconnection
     * Session destroy
     */
    function deconnection()
    {
        session_destroy();
    }

    /**
     * @function faq
     * display data from faq table
     */
    function faq()
    {
        //pdo
        $pdo = connectionPDO();
        $stmt = $pdo->prepare("SELECT * FROM faq");

        $faq = executeSelectQueryMSQL($stmt);

        closePDO($pdo);

        if ($faq != "Empty") {
            $faq = $this->utf8_converter($faq);
            $response = json_encode($faq);
        } else {
            $response = "Vide";
        }

        echo $response;
    }

    /**
     * @function selectPromo
     * display data from promo table
     */
    function selectPromo()
    {
        $pdo = connectionPDO();
        $stmt = $pdo->prepare("SELECT distinct * FROM promotion");

        $promos = executeSelectQueryMSQL($stmt);


        closePDO($pdo);


        if ($promos != "Empty") {
            $promos = $this->utf8_converter($promos);
            $response = json_encode($promos);
        } else {
            $response = "Vide";
        }
        echo $response;
    }

    /**
     * @function selectUserFilter
     * display data from user table
     */
    function selectUserFilter()
    {
        //pdo
        $pdo = connectionPDO();

        $filter_promos = $_GET['promo'];

        if (!empty($filter_promos)) {
            $stmt = $pdo->prepare('SELECT * FROM user inner join promotion on user.id_promotion = promotion.id_promotion where promotion.id_promotion = :filter_promos');
            $stmt->bindParam(':filter_promos', $filter_promos, PDO::PARAM_INT);

            $user = executeSelectQueryMSQL($stmt);

            closePDO($pdo);

            if ($user != "Empty") {
                $user = $this->utf8_converter($user);
                $response = json_encode($user);
            } else {
                $response = "Vide";
            }
            echo $response;
        }
    }

    /**
     * @function selectUser
     * display data from user table
     */
    function selectUser()
    {
        //pdo
        $pdo = connectionPDO();

        $stmt = $pdo->prepare('SELECT * FROM user inner join promotion on user.id_promotion = promotion.id_promotion');

        $user = executeSelectQueryMSQL($stmt);

        closePDO($pdo);

        if ($user != "Empty") {
            $user = $this->utf8_converter($user);
            $response = json_encode($user);
        } else {
            $response = "Vide";
        }
        echo $response;
    }

    /**
     * @function insertPromo
     * display data from user table
     */

    function insertPromo()
    {
        //pdo
        $pdo = connectionPDO();

        $name = $_POST['name'];
        $year = $_POST['year'];

        $stmt = $pdo->prepare("INSERT INTO promotion (name, year) VALUES (:name, :year)");
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':year', $year, PDO::PARAM_STR);

        $promo = executeSelectQueryMSQL($stmt);

        closePDO($pdo);

        if ($promo != "Empty") {
            $promo = $this->utf8_converter($promo);
            $response = json_encode($promo);
        } else {
            $response = "Vide";
        }
        echo $response;
    }

    /**
     * @function modifyPromo
     * display data from user table
     */

    function modifyPromo()
    {
        //pdo
        $pdo = connectionPDO();

        $id = $_POST['id'];
        $promo = $_POST['promo'];
        

        $stmt = $pdo->prepare('UPDATE user SET user.id_promotion = :id_promotion WHERE user.id_user = :id');
        $stmt->bindParam(':id_promotion', $promo, PDO::PARAM_INT);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);

        $stmt->execute();

        closePDO($pdo);

        echo 'ok';

    }



    function utf8_converter($array)
    {
        array_walk_recursive($array, function (&$item, $key) {
            if (!mb_detect_encoding($item, 'utf-8', true)) {
                $item = utf8_encode($item);
            }
        });

        return $array;
    }
}
