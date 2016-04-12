<?php

namespace Bierbrouwerij\Models;


use Bierbrouwerij\Libraries\Model\Model;

class Artikel extends Model
{
    /**
     * How to retrieve a custom model in 4 steps:
     *
     * 1. Write out the query within a variable.
     * 2. Create a new variable and add $this->dbh->prepare($sql);
     * 3. Execute the above with optional parameters $stmt->execute([':id' => $id]);
     * 4. Return the returned value from the database.
     */

    /**
     * Get an article by ID.
     *
     * @param $id
     * @return mixed
     */
    public function getArtikelById($id)
    {
        $sql = "SELECT * FROM Artikel WHERE Artikel_id = :id";
        $stmt = $this->dbh->prepare($sql);
        $stmt->execute([':id' => $id]);

        return $stmt->fetch();
    }
}