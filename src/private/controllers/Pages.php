<?php 
namespace App\Controllers;

use App\Libraries\Controller;
use App\Models\Users;

class Pages extends Controller
{
    public function signup()
    {
        $this->view('signup', $data =[]);
    }
    public function signin()
    {
        $this->view('signin', $data =[]);
    }
    public function user()
    {
        $error=[];
        $numlength = strlen((string)abs($_POST['mobile']));
        if (empty($_POST['username'])) {
            array_push($error, 'enter user name');
        } if (empty($_POST['name'])) {
            array_push($error, 'enter full name	');
        } if (empty($_POST['email'])) {
             array_push($error, 'enter email');
        } if (empty($_POST['password'])) {
            array_push($error, 'enter password');
        } if (empty($_POST['mobile'])) {
            array_push($error, 'enter mobile no');
        }  if ($numlength != 10) {
            array_push($error, 'enter 10 digit mobile no');
        } if (empty($_POST['city'])) {
            array_push($error, 'enter city');
        } if (empty($_POST['country'])) {
            array_push($error, 'enter country');
        } if (empty($_POST['pincode'])) {
            array_push($error, 'enter pincode');
        } if (isset($_POST['password']) && isset($_POST['password2'])) {
            if ($_POST['password']!= $_POST['password2']) {
                array_push($error, 'enter same password in both filed');
            }
        }
        if (count($error) == 0) {
            $userNew = $this->model('Users');
            $userNew->full_name = $_POST['name'];
            $userNew->username = $_POST['username'];
            $userNew->email = $_POST['email'];
            $userNew->password = $_POST['password'];
            $userNew->mobile = $_POST['mobile'];
            $userNew->city = $_POST['city'];
            $userNew->country = $_POST['country'];
            $userNew->pincode = $_POST['pincode'];
            $userNew->status = 'Approved';
            $userNew->role = 'Admin';
            $userNew->save();
            $this->view('signin', $arr = [], $arr = []);
        } else {
            $_SESSION['errors'] = $error;
            print_r($error);
            /* $this->view('signup', $data = [], $arr = []); */
        }
    }
    public function check()
    {
        $error=[];
        if (empty($_POST['email'])) {
            array_push($error, 'enter email');
        } if (empty($_POST['password'])) {
             array_push($error, 'enter password');
        }
        if (count($error) == 0) {
            $user = $this->model('Users')::find('email', array('conditions' => array('email = ?', $_POST['email'])));
            /* print_r($user); */
            if ($user->email == $_POST['email']) {
                if ($user->password == $_POST['password']) {
                    $_SESSION['name']=$user->full_name;
                    $_SESSION['email']=$user->email;
                    $_SESSION['user']=$user->username;
                    $_SESSION['role']=$user->role;
                    $_SESSION['user_id']=$user->user_id;
                    $this->view('home', $arr = [], $arr = []);
                } else {
                    array_push($error, 'enter correct password');
                }
            }
        } else {
            $_SESSION['errors'] = $error;
            $this->view('signup', $data = [], $arr = []);
        }
    }
    public function home()
    {
        $usersPosts = $this->model('Posts')::all();
        $this->view('home', $usersPosts, $arr = []);
    }
    public function profile()
    {
        $userPosts = $this->model('Posts')::find('all', array('conditions' => array('user_id = ?', $_SESSION['user_id'])));
        $this->view('profile', $userPosts);
    }
    public function posts()
    {
        if (isset($_POST['submit'])) {
            /* print_r($_FILES["file-upload"]["name"]); */
            $filename = $_FILES["file-upload"]["name"];
            $userPosts = $this->model('Posts');
            print_r($userPosts);
            echo '<br>';
            print_r($_SESSION['user_id']);
            
            $userPosts->user_id = $_SESSION['user_id'];
            $userPosts->username = $_SESSION['user'];
            $userPosts->email = $_SESSION['email'];
            $userPosts->status = 'public';
            $userPosts->img_name = $filename;
            $userPosts->save();
            $target_path = "../private/views/images/";
            $target_path = $target_path . basename($_FILES["file-upload"]["name"]);
            if (move_uploaded_file($_FILES["file-upload"]['tmp_name'], $target_path)) {
                $userPosts = $this->model('Posts')::find('all', array('conditions' => array('user_id = ?', $_SESSION['user_id'])));
                /* $this->view('profile', $userPosts); */
                header('location:profile');
            } else {
                echo "Sorry, file not uploaded, please try again!";
            }
        }
    }
    public function otherprofile()
    {
        $this->view('otherprofile', $data = [], $arr = []);
    }
    public function users()
    {
        $friend = $this->model('Friends')::all();
        $user = $this->model('Users')::find('all', array('conditions' => array('user_id != ?', $_SESSION['user_id'])));
        if (empty($friend)) {
            $this->view('users', $user, $arr = []);
        } else {
            $use = [];
            $fri =[];
            $remain = [];
            foreach ($user as $users) {
                array_push($use, (object)[
                    'user_id' => $users->user_id,
                    'username' => $users->username,
                ]);
            }
            foreach ($friend as $friends) {
                array_push($fri, (object)[
                    'user_id' => $friends->user_id,
                    'user_name' => $friends->user_name,
                    'friends_id' => $friends->friends_id,
                    'friend_name' => $friends->friend_name,
                ]);
            }
            foreach ($use as $key => $user) {
                foreach ($fri as $friends) {
                    echo '<pre>';
                    print_r($use);
                    echo '</pre>';
                    echo '<br>';
                    echo $key;
                    echo '<br>';
                    echo "friend".$friends->friends_id;
                    echo '<br>';
                    echo "user".$user->user_id;
                    echo ".........................";
                    if ($friends->friends_id == $user->user_id) {
                        array_splice($use, $key, 1);
                    }
                }
            }
            /* echo "<pre>";
            print_r($remain);
            echo "</pre>"; */
            $this->view('users', $use, $arr = []);
        }
    }
    public function addfriend()
    {
        $friend = $this->model('Friends');
        $friend->user_id = $_SESSION['user_id'];
        $friend->user_name = $_SESSION['user'];
        $friend->friends_id = $_POST['id'];
        $friend->friend_name = $_POST['name'];
        $friend->status = 'follower';
        $friend->save();
        $friend = $this->model('Friends')::find('all', array('conditions' => array('user_id = ?', $_SESSION['user_id'])));
       /*  header() */
        $this->view('friends', $friend, $arr = []);
    }
    public function friends()
    {
        $friend = $this->model('Friends')::find('all', array('conditions' => array('user_id = ?', $_SESSION['user_id'])));
        $this->view('friends', $friend, $arr = []);
    }
    public function unfriend()
    {
        $unfriend  = $this->model('Friends')::table()->delete(array('friends_id' => $_POST['id']));
        $this->view('friends', $data=[], $arr = []);
    }
    public function uploads()
    {
        $this->view('uploads', $data = [], $arr = []);
    }
    public function logout()
    {
        $this->view('logout', $data = [], $arr = []);
    }
}
