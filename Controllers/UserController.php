<?php
// /user/info
class UserController
{

    private const TEST = 123;

    public function index()
    {
        $smarty = View::getInstance();

        $users = UserModel::all();

        $now = date("H:i:s", time());

        $smarty->assign('users', $users);
        $smarty->assign('time', $now);
        $smarty->display('index.tpl');
    }

    public function info()
    {
        global $parameter;

        $smarty = View::getInstance();

        $user = UserModel::find((int) $parameter);

        if (!$user) {
            die("User not found [404 error]");
        }

        $smarty->assign('user', $user);
        $smarty->display('user.tpl');
    }

    public function delete()
    {
        global $parameter;

        $user = UserModel::find($parameter);

        if (!$user) {
            die("User not found [404 error]");
        }

        $user->delete();
        header("Location: /user");
    }

    public function create()
    {
        $email = $_POST['email'];
        $pass = $_POST['password'];

        $user = new UserModel();
        $user->setEmail($email)
            ->setPassword($pass)
            ->save();

        header("Location: /user");
    }

    public function test(int $id)
    {

    }
}