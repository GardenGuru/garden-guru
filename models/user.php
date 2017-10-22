<?php
  class User {
    // we define 3 attributes
    // they are public so that we can access them using $post->author directly
    public $id;
    public $first_name;
    public $last_name;
    public $email;

    public function __construct($id, $first_name, $last_name, $email) {
      $this->id = $id;
      $this->first_name = $first_name;
      $this->last_name = $last_name;
      $this->email = $email;
    }

    public static function store($userData) {
      try {
        $db = Db::getInstance();
        $sql = 'INSERT INTO users (first_name, last_name, email, password) 
              VALUES (:first_name, :last_name, :email, :password)';
        $req = $db->prepare($sql);
        $req->execute(array(
          ':first_name' => $userData['first_name'], 
          ':last_name' => $userData['last_name'],
          ':email' => $userData['email'],
          ':password' => $userData['password']
        ));
      } catch(PDOException $e) {
        return var_dump($e);
      }
    }

    public static function all() {
      $list = [];
      $db = Db::getInstance();
      $req = $db->query('SELECT * FROM users');

      // we create a list of Post objects from the database results
      foreach($req->fetchAll() as $user) {
        $list[] = new Post($user['id'], $user['first_name'], $user['last_name'], $user['email']);
      }

      return $list;
    }

    public static function find($id) {
      $db = Db::getInstance();
      // we make sure $id is an integer
      $id = intval($id);
      $req = $db->prepare('SELECT * FROM users WHERE id = :id');
      // the query was prepared, now we replace :id with our actual $id value
      $req->execute(array('id' => $id));
      $post = $req->fetch();

      return new Post($post['id'], $post['first_name'], $post['last_name'], $user['email']);
    }
  }
?>