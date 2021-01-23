<?php


class PelangganDAOimpl
{
    public function fetchPelangganData(){
        $link = PDOUtil::createConnection();
        $query = "SELECT * FROM pelangggan";
        $result=$link->query($query);
        $result->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE,'Pelanggan');
        PDOUtil::closeConnection($link);
        return $result;
    }

    /*public function fetchOnePelanggan($cid){
        $link = PDOUtil::createConnection();
        $query = "SELECT * FROM pelangggan WHERE idPelanggan=?";
        $stmt = $link->prepare($query);
        $stmt->bindParam(1,$cid);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $stmt ->execute();
        $result = $stmt->fetchObject('Pelanggan');
        PDOUtil::closeConnection($link);
        return $result;
    }*/

    public function addPelanggan(Pelanggan $pelanggan){
        $link = PDOUtil::createConnection();
        $query = "INSERT into pelangggan(idPelanggan,NamaPelanggan,StatusMember) VALUES(?,?,?)";
        $stmt = $link->prepare($query);
        $stmt->bindValue(1,$pelanggan->getIdPelanggan());
        $stmt->bindValue(2,$pelanggan->getNamaPelanggan());
        $stmt->bindValue(3,$pelanggan->getStatusMember());


        $link->beginTransaction();
        if($stmt->execute()){
            $link->commit();
        } else{
            $link->rollBack();
        }
        PDOUtil::closeConnection($link);
    }

    public function deletePelanggan($delete){
        //$pelanggan = fetchOnePelanggan($delete);
        $link = PDOUtil::createConnection();
        $query = "DELETE FROM pelangggan WHERE idPelangggan=?";
        $stmt = $link->prepare($query);
        $stmt->bindParam(1,$delete);
        $link->beginTransaction();
        if ($stmt->execute()) {
            $link->commit();
        } else {
            $link->rollBack();
        }
        PDOUtil::closeConnection($link);
    }
    public function updatePelanggan(Pelanggan $pelanggan){
        $link = PDOUtil::createConnection();
        $query = "UPDATE pelangggan SET idPelanggan=? ,NamaPelanggan=? ,StatusMember=?  WHERE idPelanggan=?";
        $stmt = $link->prepare($query);
        $stmt->bindValue(1, $pelanggan->getIdPelanggan());
        $stmt->bindValue(2, $pelanggan->getNamaPelanggan());
        $stmt->bindValue(3, $pelanggan->getStatusMember());

        $link->beginTransaction();
        if ($stmt->execute()) {
            $link->commit();
        }else {
            $link->rollBack();
        }
        PDOUtil::closeConnection($link);
    }



}