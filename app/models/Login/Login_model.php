<?php

class Login_model
{
    private $table = 'user';
    private $db;

    public function __construct()
    {
        $this->db = new Database(DB_NAME);
    }

    public function getAllData()
    {
        $this->db->query("SELECT * FROM {$this->table}");
        return $this->db->fetchAll();
    }

    public function register($data)
    {
        $this->db->query(
            "INSERT INTO {$this->table}
				VALUES
			(null, :username, :password, :nama, :role, CURRENT_TIMESTAMP, 0)"
        );

        $this->db->bind('username', $data['username']);
        $this->db->bind('password', hash('sha256', $data['password']));
        $this->db->bind("nama", $data['nama']);
        $this->db->bind("role", 1);

        $this->db->execute();
    }

    // Method untuk login //

    public function login($data)
    {
        $this->db->query(
            "SELECT * FROM {$this->table} 
                WHERE 
            `username` = :username AND
            `password` = :password_field
        "
        );

        $this->db->bind("username", $data['username']);
        $this->db->bind("password_field", hash('sha256', $_POST['password']));

        return $this->db->fetch();
    }

    public function log($id) // untuk membuat status login user menjadi online
    {
        $this->db->query(
            "UPDATE {$this->table}
                SET 
                last_login_at = CURRENT_TIMESTAMP,
                status_login = 1
            WHERE id = :id"
        );

        $this->db->bind("id", $id);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function logout($id)
    {
        $this->db->query(
            "UPDATE {$this->table}
                SET 
                status_login = 0
            WHERE id = :id"
        );

        $this->db->bind("id", $id);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapusData($id)
    {
        $query = "DELETE FROM {$this->table} 
        WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }
    public function getUserById($id)
	{
		$this->db->query(
			"SELECT * FROM {$this->table} WHERE id = :id"
		);

		$this->db->bind('id', $id);
		return $this->db->fetch();
	}

    public function changePassword($id, $data)
	{
		if (hash('sha256', $data['old_password']) != $this->getUserById($id)['password'])
			return 0;

		$this->db->query(
      		"UPDATE {$this->table}
				SET `password` = :password
			WHERE id = :id"
		);

		$this->db->bind('password', hash('sha256', $data['new_password']));
		$this->db->bind('id', $id);

		$this->db->execute();
		return $this->db->rowCount();
	}

    // Method untuk otentikasi jwt //

    public function getUserData($jwt)
    {
        $this->db->query(
            "SELECT `id`, `username`, `password`, `nama`, `role`, `last_login_at`, `status_login` FROM {$this->table}
        WHERE `id` = :id"
        );

        $this->db->bind('id', $jwt->sub);

        $result = $this->db->fetch(PDO::FETCH_ASSOC);

        return $result;
    }

}
