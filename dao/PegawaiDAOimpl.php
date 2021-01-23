<?php


class PegawaiDAOimpl
{
    public function fetchPegawaiData(){
        $link = PDOUtil::createConnection();
        $query = "SELECT * FROM pegawai";
        $result=$link->query($query);
        $result->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE,'Pegawai');
        PDOUtil::closeConnection($link);
        return $result;
    }

    /*public function fetchOnePegawai($cid){
        $link = PDOUtil::createConnection();
        $query = "SELECT * FROM pegawai WHERE idPegawai=?";
        $stmt = $link->prepare($query);
        $stmt->bindParam(1,$cid);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $stmt ->execute();
        $result = $stmt->fetchObject('Pegawai');
        PDOUtil::closeConnection($link);
        return $result;
    }*/

    public function addPegawai(Pegawai $pegawai){
        $link = PDOUtil::createConnection();
        $query = "INSERT into pegawai(idPegawai,NamaPegawai,AkumulasiNilai) VALUES(?,?,?)";
        $stmt = $link->prepare($query);
        $stmt->bindValue(1,$pegawai->getIdPegawai());
        $stmt->bindValue(2,$pegawai->getNamaPegawai());
        $stmt->bindValue(3,$pegawai->getAkumulasiNilai());


        $link->beginTransaction();
        if($stmt->execute()){
            $link->commit();
        } else{
            $link->rollBack();
        }
        PDOUtil::closeConnection($link);
    }

    public function deletePegawai($delete){
        //$pelanggan = fetchOnePegawai($delete);
        $link = PDOUtil::createConnection();
        $query = "DELETE FROM pegawai WHERE idPegawai=?";
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
    public function updatePegawai(Pegawai $pegawai){
        $link = PDOUtil::createConnection();
        $query = "UPDATE pegawai SET idPegawai=? ,NamaPegawai=? ,AkumulasiNilai=?  WHERE idPelanggan=?";
        $stmt = $link->prepare($query);
        $stmt->bindValue(1, $pegawai->getIdPegawai());
        $stmt->bindValue(2, $pegawai->getNamaPegawai());
        $stmt->bindValue(3, $pegawai->getAkumulasiNilai());

        $link->beginTransaction();
        if ($stmt->execute()) {
            $link->commit();
        }else {
            $link->rollBack();
        }
        PDOUtil::closeConnection($link);
    }

}