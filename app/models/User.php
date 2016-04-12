<?php

namespace Bierbrouwerij\Models;

use Bierbrouwerij\Libraries\Model\Model;

class User extends Model
{
    public function getUserById($id)
    {
        $stmt = $this->dbh->prepare("SELECT * FROM User WHERE id = :id");
        $stmt->execute([':id' => $id]);

        $row = $stmt->fetch();

        return $row['name'];
    }
}