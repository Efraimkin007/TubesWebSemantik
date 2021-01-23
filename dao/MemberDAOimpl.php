<?php


class MemberDAOimpl
{
    public function fetchMemberData(){
        $link = PDOUtil::createConnection();
        $query = "SELECT * FROM member";
        $result=$link->query($query);
        $result->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE,'Member');
        PDOUtil::closeConnection($link);
        return $result;
    }

    /*public function fetchOneMember($cid){
        $link = PDOUtil::createConnection();
        $query = "SELECT * FROM member WHERE idMember=?";
        $stmt = $link->prepare($query);
        $stmt->bindParam(1,$cid);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $stmt ->execute();
        $result = $stmt->fetchObject('Member');
        PDOUtil::closeConnection($link);
        return $result;
    }*/

    public function addMember(Member $member){
        $link = PDOUtil::createConnection();
        $query = "INSERT into member(idMember,tglLahir,PlatMobil,PlatMotor,Poin,Pelanggan_idPelanggan) VALUES(?,?,?,?,?,?)";
        $stmt = $link->prepare($query);
        $stmt->bindValue(1,$member->getIdMember());
        $stmt->bindValue(2,$member->getTglLahir());
        $stmt->bindValue(3,$member->getPlatMobil());
        $stmt->bindValue(4,$member->getPlatMotor());
        $stmt->bindValue(5,$member->getPoin());
        $stmt->bindValue(6,$member->getPelangganIdPelanggan());

        $link->beginTransaction();
        if($stmt->execute()){
            $link->commit();
        } else{
            $link->rollBack();
        }
        PDOUtil::closeConnection($link);
    }

    public function deleteMember($delete){
        //$member = fetchOneMember($delete);
        $link = PDOUtil::createConnection();
        $query = "DELETE FROM member WHERE idMember=?";
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
    public function updateMember(Member $member){
        $link = PDOUtil::createConnection();
        $query = "UPDATE member SET idMember=? ,tglLahir=? ,PlatMobil=? ,PlatMotor=? ,Poin=? ,Pelanggan_idPelanggan=? WHERE idalbums=?";
        $stmt = $link->prepare($query);
        $stmt->bindValue(1, $member->getIdMember());
        $stmt->bindValue(2, $member->getTglLahir());
        $stmt->bindValue(3, $member->getPlatMobil());
        $stmt->bindValue(4, $member->getPlatMotor());
        $stmt->bindValue(5, $member->getPoin());
        $stmt->bindValue(6, $member->getPelangganIdPelanggan());

        $link->beginTransaction();
        if ($stmt->execute()) {
            $link->commit();
        }else {
            $link->rollBack();
        }
        PDOUtil::closeConnection($link);
    }

}