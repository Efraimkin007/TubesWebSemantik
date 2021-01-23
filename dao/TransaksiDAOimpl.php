<?php


class TransaksiDAOimpl
{
    public function fetchTransaksiData(){
        $link = PDOUtil::createConnection();
        $query = "SELECT * FROM transaksi";
        $result=$link->query($query);
        $result->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE,'Transaksi');
        PDOUtil::closeConnection($link);
        return $result;
    }

    /*public function fetchOneTransaksi($cid){
        $link = PDOUtil::createConnection();
        $query = "SELECT * FROM transaksi WHERE idTransaksi=?";
        $stmt = $link->prepare($query);
        $stmt->bindParam(1,$cid);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $stmt ->execute();
        $result = $stmt->fetchObject('Transaksi');
        PDOUtil::closeConnection($link);
        return $result;
    }*/

    public function addTransaksi(Transaksi $transaksi){
        $link = PDOUtil::createConnection();
        $query = "INSERT into transaksi(idTransaksi,TglTransaksi,JumlahLiter,NilaiPelayanan,Pelangggan_idPelanggan,BahanBakar_idBahanBakar,Pegawai_idPegawai) VALUES(?,?,?,?,?,?,?)";
        $stmt = $link->prepare($query);
        $stmt->bindValue(1,$transaksi->getIdTransaksi());
        $stmt->bindValue(2,$transaksi->getTglTransaksi());
        $stmt->bindValue(3,$transaksi->getJumlahLiter());
        $stmt->bindValue(4,$transaksi->getNilaiPelayanan());
        $stmt->bindValue(5,$transaksi->getPelangganIdPelanggan());
        $stmt->bindValue(6,$transaksi->getBahanBakarIdBahanBakar());
        $stmt->bindValue(7,$transaksi->getPegawaiIdPegawai());

        $link->beginTransaction();
        if($stmt->execute()){
            $link->commit();
        } else{
            $link->rollBack();
        }
        PDOUtil::closeConnection($link);
    }

    public function deleteTransaksi($delete){
        //$member = fetchOneTransaksi($delete);
        $link = PDOUtil::createConnection();
        $query = "DELETE FROM transaksi WHERE idTransaksi=?";
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
    public function updateTransaksi(Transaksi $transaksi){
        $link = PDOUtil::createConnection();
        $query = "UPDATE member SET idTransaksi=? ,TglTransaksi=? ,JumlahLiter=? ,NilaiPelayanan=? ,Pelangggan_idPelanggan=? ,BahanBakar_idBahanBakar=?,Pegawai_idPegawai=? WHERE idTransaksi=?";
        $stmt = $link->prepare($query);
        $stmt->bindValue(1, $transaksi->getIdTransaksi());
        $stmt->bindValue(2, $transaksi->getTglTransaksi());
        $stmt->bindValue(3, $transaksi->getJumlahLiter());
        $stmt->bindValue(4, $transaksi->getNilaiPelayanan());
        $stmt->bindValue(5, $transaksi->getPelangganIdPelanggan());
        $stmt->bindValue(6, $transaksi->getBahanBakarIdBahanBakar());
        $stmt->bindValue(7, $transaksi->getPegawaiIdPegawai());

        $link->beginTransaction();
        if ($stmt->execute()) {
            $link->commit();
        }else {
            $link->rollBack();
        }
        PDOUtil::closeConnection($link);
    }

}