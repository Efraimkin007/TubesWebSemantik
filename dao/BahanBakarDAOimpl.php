<?php


class BahanBakarDAOimpl
{
    public function fetchBahanBakarData(){
        $link = PDOUtil::createConnection();
        $query = "SELECT * FROM bahanbakar";
        $result=$link->query($query);
        $result->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE,'BahanBakar');
        PDOUtil::closeConnection($link);
        return $result;
    }

   /* public function fetchOneBahanBakar($cid){
        $link = PDOUtil::createConnection();
        $query = "SELECT * FROM bahanbakar WHERE idBahanBakar=?";
        $stmt = $link->prepare($query);
        $stmt->bindParam(1,$cid);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $stmt ->execute();
        $result = $stmt->fetchObject('BahanBakar');
        PDOUtil::closeConnection($link);
        return $result;
    }*/

    public function addBahanBakar(BahanBakar $bahanBakar){
        $link = PDOUtil::createConnection();
        $query = "INSERT into bahanbakar(idBahanBakar,JenisBahanBakar,HargaModal,HargaJual) VALUES(?,?,?,?)";
        $stmt = $link->prepare($query);
        $stmt->bindValue(1,$bahanBakar->getIdBahanBakar());
        $stmt->bindValue(2,$bahanBakar->getJenisBahanBakar());
        $stmt->bindValue(3,$bahanBakar->getHargaModal());
        $stmt->bindValue(4,$bahanBakar->getHargaJual());

        $link->beginTransaction();
        if($stmt->execute()){
            $link->commit();
        } else{
            $link->rollBack();
        }
        PDOUtil::closeConnection($link);
    }


    public function updateBahanBakar(BahanBakar $bahanBakar){
        $link = PDOUtil::createConnection();
        $query = "UPDATE member SET idBahanBakar=? ,JenisBahanBakar=? ,HargaModal=?, HargaJual=? WHERE idBahanBakar=?";
        $stmt = $link->prepare($query);
        $stmt->bindValue(1, $bahanBakar->getIdBahanBakar());
        $stmt->bindValue(2, $bahanBakar->getJenisBahanBakar());
        $stmt->bindValue(3, $bahanBakar->getHargaModal());
        $stmt->bindValue(4, $bahanBakar->getHargaJual());


        $link->beginTransaction();
        if ($stmt->execute()) {
            $link->commit();
        }else {
            $link->rollBack();
        }
        PDOUtil::closeConnection($link);
    }

    public function deleteBahanBakar($delete){
        //$bahanBakar = fetchOneBahanBakar($delete);
        $result = 0;
        $link = PDOUtil::createConnection();
        $query = "DELETE FROM bahanbakar WHERE idBahanBakar=?";
        $stmt = $link->prepare($query);
        $stmt->bindParam(1,$delete);
        $link->beginTransaction();
        if ($stmt->execute()) {
            $link->commit();
            $result = 1;
        } else {
            $link->rollBack();
        }
        PDOUtil::closeConnection($link);
        return $result;
    }


}