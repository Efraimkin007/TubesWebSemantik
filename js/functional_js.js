function deleteRSS_JS(id){
  let confirmation = window.confirm("Do you want delete this data?");
  if(confirmation){
    window.location = "index.php?navito=deleteRSS&cmd=del&deleteRSSId="+id;
  }
}

function updateRSS_JS(id){
  window.location= "?navito=update_rss&cmd=upd&updateRSSId="+id;
}
