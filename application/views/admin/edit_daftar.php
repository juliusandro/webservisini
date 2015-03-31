<a href="http://localhost/tutor/administration/tambahDaftarMotor" class="btn btn-primary btn-lg active" role="button">Tambah +</a>

    <table class='table'>
        <tr>
				<th>Nama Servis</th>
				<th>Kontak</th>
				<th>Biaya</th>
                <th>Pengaturan</th>	
					
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
            echo "<td>";
            echo 'edit |<a href="http://localhost/tutor/administration/deleteDaftarMotor" > hapus</a>';
            echo "</td>";
            echo "</tr>";
        } 
    }
        else {echo "tidak terdapat data";}

        ?>
        </table>