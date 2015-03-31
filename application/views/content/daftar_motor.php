<div class="container">
    <div class="jumbotron push">
        <h1>Daftar Bengkel</h1>
        <p>Servisini.com merupakan portal website yang menyediakan informasi Service Motor Di Surabaya .</p>
        <p>Portal ini akan membantu anda dalam mencari tempat service motor sesuai keinganan anda</p>
    <table class='table'>
        <tr>
				<th>Nama Servis</th>
				<th>Kontak</th>
				<th>Biaya</th>						
					
		</tr>
<?php 
    if($result->num_rows()>0){
foreach ($result->result() as $row){
            echo "<tr>";
            echo "<td>";
            echo $row->nama_servis_motor;
            echo "</td>";
            echo "<td>";
            echo $row->kontak_telepon;
            echo "</td>";
            echo "<td>";
            echo $row->biaya_service;
            echo "</td>";
            echo "</tr>";
        } }
        else {echo "tidak terdapat data";}

        ?>
        </table>
    </div>
</div>