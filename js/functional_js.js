


function deleteDataPeserta(id){
  let confirmation = window.confirm("Anda Yakin ingin menghapus data ini?");
  if(confirmation){
    window.location = "index.php?navito=ReadDataPeserta&cmd=del&dataPesertaId="+id;
  }
}

function updateDataPeserta(id){
  window.location= "?navito=UpdateDataPeserta&cmd=upd&dataPesertaId="+id;
}

function deleteKelompokKecil(id){
  let confirmation = window.confirm("Anda Yakin ingin menghapus data ini?");
  if(confirmation){
    window.location = "index.php?navito=RKK&cmd=del&kelompokKecilId="+id;
  }
}

function updateKelompokKecil(id){
  window.location= "?navito=KKUp&cmd=upd&kelompokKecilId="+id;
}

function deleteAnggotaKelompokKecil(id){
  let confirmation = window.confirm("Anda Yakin ingin menghapus data ini?");
  if(confirmation){
    window.location = "?navito=RAKK&cmd=del&anggotaKelompokKecilId="+id;
  }
}

function updateAnggotaKelompokKecil(id){
  window.location= "?navito=AKKUp&cmd=upd&anggotaKelompokKecilId="+id;
}

function updateAbsensi(id){
  window.location= "?navito=UpdateAbsensi&cmd=upd&AbsensiId="+id;
}

function deletePresensi(id){
  let confirmation = window.confirm("Anda Yakin ingin menghapus data ini?");
  if(confirmation){
    window.location = "?navito=ReadPresensi&cmd=del&presensiId="+id;
  }
}

function updateKegiatan(id){
  window.location= "?navito=UpdateKegiatan&cmd=upd&kegiatanId="+id;
}

function deleteKegiatan(id){
  let confirmation = window.confirm("Anda Yakin ingin menghapus data ini?");
  if(confirmation){
    window.location = "?navito=ReadKegiatan&cmd=del&kegiatanId="+id;
  }
}
