<?php include("config.php"); ?>  
 <!DOCTYPE html>  
 <html>  
 <head>  
   <title>SMA TADIKA MESRA</title>  
 </head>  
 <body>  
   <header>  
     <h3 class="jumbotron text-center">List Siswa</h3>  
   </header>  
   <nav class="text-center">  
     <a href="form-daftar.php" class="btn btn-success">[+] Tambah Baru</a>  
   </nav>  
   <br>  
   <div id='datasiswa'></div>  
   </body>  
 </html>  
 <script type="text/javascript">  
   function hapus(id)   
   {  
     if(window.XMLHttpRequest)  
     { xmlhttp = new XMLHttpRequest(); }  
     else  
     { xmlhttp = new ActiveXObject("Microsoft.XMLHTTP"); }  
     xmlhttp.onreadystatechange=function(){  
     if(this.readyState==4 && this.status==200)  
     {  
       alert(this.responseText);   
       listData();   
     }  
   }  
     xmlhttp.open("GET","proses-hapus.php?id=" + id, true);  
     xmlhttp.send();  
   }  
   function listData()  
   {  
     if(window.XMLHttpRequest)  
     { xmlhttp = new XMLHttpRequest(); }  
     else  
     { xmlhttp = new ActiveXObject("Microsoft.XMLHTTP"); }  
     xmlhttp.onreadystatechange=function()  
     {  
       if(this.readyState==4 && this.status==200)  
       {  
         document.getElementById('datasiswa').innerHTML = this.responseText;   
       }  
     }  
     xmlhttp.open("GET","data-list-guru.php", true);  
     xmlhttp.send();  
   }  
  listData();  
 </script>  