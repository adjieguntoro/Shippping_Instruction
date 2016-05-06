
<page backtop="2mm" backbottom="5mm" backleft="3mm" backright="3mm">
    <!-- <page_header>
   
  	   <?php echo date('d/m/Y'); ?>
  	   
    </page_header> -->
    <style type="text/css">
  	   .data td {
  	   	padding: 3px;
  	   	border: 0.4px;
  	   	border-color: #000;
  	   	font-size: 13px;
  	   }
  	   </style>	
  	   <?php
  	   	include('application/third_party/phpqrcode/qrlib.php');
  	   	$tempdir = "temp/"; //<-- Nama Folder file QR Code kita nantinya akan disimpan
		if (!file_exists($tempdir))#kalau folder belum ada, maka buat.
		    mkdir($tempdir);
  	   	?>
  	   	 <?php foreach ($data_code as $view_data) {
                    ?>

  	   	 <?php
						
						//lanjutan yang tadi
                        $si_number=$view_data->si_number;
						 
						#parameter inputan
  	   	 				$id=$view_data->approved_id;
						$code ="SI Number : ".$si_number;
						$namafile = "barcode_".$id.".png";
						$quality = 'H'; //ada 4 pilihan, L (Low), M(Medium), Q(Good), H(High)
						$ukuran = 5; //batasan 1 paling kecil, 10 paling besar
						$padding = 0;
						 
						QRCode::png($code,$tempdir.$namafile,$quality,$ukuran,$padding);
						 
						 
						 
						?>
                      
 

	            <table style="width: 100%; border: solid 0px grey;">
                <?php foreach ($data_request as $view_data) {
                    ?>
	           
	            <tr>
	            	<td colspan="3" style="text-align: center;    width: 100%"><u><h3 style="margin-bottom:5px;">
                SHIPPING INSTRUCTION</h3></u>No.:<?php echo $view_data->request_id; ?>/PDN.4.3/SI/<?php echo date('m');?>/2016</td>
	            </tr>


            	<tr>
                <td style="text-align: left;    width: 30%"><img src="<?php echo base_url();?>assets/images/logo.gif" 
                alt="Kemendag.go.id" width="120"></td>
                <td  style="text-align: left; padding:5px; border: solid 1px grey;  width: 33%">
                	
                Kepada Yth : <br/>
                <b>PT. PELNI Cabang Pekanbaru</b><br/>
                Jl. Nin Aja Dulu Siapa Tau Jodoh<br/>
                Pekanbaru,<br/>
                Riau

                </td>
                <td style="width: 33%; text-align:center;">
                <?php ;
               
						echo "<img src='temp/barcode_";
                        echo $id;
                        echo ".png' width='110'/>";

                        ?>
                        <br/>
						
                              <?php
                    }
                    ?>
                	

                </td>
                
            </tr>
            </table>

            <!-- <hr size="1" color="grey"> -->
            <br/><br/>
            <p>Dengan Hormat, <br/><br/> Dengan ini kiranya dapat dikapalkan barang-barang kami, seperti tersebut di bawah ini:</p>

            <table class="data" width="100%;" cellspacing="0" border="0" style="border: 1px solid;">

            <tr>
            	<td style="width:8%; text-align:center; ">1</td>
            	<td style="width:28%;"> <b><u>SHIPPER :</u></b><br>Pengirim</td>
            	<td style="width:63%;"><?php echo $view_data->shipper;   ?></td>
            </tr>

            <tr>
            	<td style="width:8%; text-align:center; ">2</td>
            	<td > <b><u>COSIGNEE :</u></b><br>Penerima</td>
            	<td ><?php echo $view_data->cosignee;   ?></td>
            </tr>

            <tr>
            	<td style="width:8%; text-align:center; ">3</td>
            	<td style="width:25%;"> <b><u>NOTIFY PARTY :</u></b><br>Jumlah Koli</td>
            	<td style="width:65%;"><?php echo $view_data->notify_party;   ?> Kontainer</td>
            </tr>

            <tr>
            	<td style="width:8%; text-align:center; ">4</td>
            	<td > <b><u>DESCRIPTION OF CARGO :</u></b><br>Jenis Barang</td>
            	<td style="width:65%;"><?php echo $view_data->description_of_cargo;   ?></td>
            </tr>

               <tr>
            	<td style="width:8%; text-align:center; ">5</td>
            	<td style="width:25%;"> <b><u>GROSS WEIGHT :</u></b><br>Berat Kotor</td>
            	<td style="width:65%;"><?php echo $view_data->gross_weight;   ?> Ton</td>
            </tr>

            <tr>
            	<td style="width:8%; text-align:center; ">6</td>
            	<td > <b><u>PORT OF LOADING :</u></b><br>Pelabuhan Bongkar</td>
            	<td ><?php echo $view_data->port_of_loading;   ?></td>
            </tr>

             <tr>
            	<td style="width:8%; text-align:center; ">7</td>
            	<td > <b><u>PORT OF DISCHARGING :</u></b><br>Pelabuhan Muat</td>
            	<td ><?php echo $view_data->port_of_discharging;  ?></td>
            </tr>

              <tr>
            	<td style="width:8%; text-align:center; ">8</td>
            	<td > <b><u>VESSEL NAME :</u></b><br>Nama Kapal</td>
            	<td ><?php echo $view_data->vessel_name;  ?></td>
            </tr>
             <tr>
            	<td style="width:8%; text-align:center; ">9</td>
            	<td > <b><u>ETD :</u></b><br>Rencana Berangkat</td>
            	<td ><?php echo $view_data->etd;  ?></td>
            </tr>
             <tr>
            	<td style="width:8%; text-align:center; ">10</td>
            	<td > <b><u>TERM :</u></b><br>Layanan</td>
            	<td ><?php echo $view_data->term;  ?></td>
            </tr>
            <tr>
            	<td style="width:8%; text-align:center; ">11</td>
            	<td > <b><u>REMARKS & SPECIAL <br> INSTRUCTION :</u></b></td>
            	<td ><?php echo $view_data->remark_special;  ?></td>
            </tr>
         

        </table>
        <p style="font-size:11.5px;">
        	Sebagai pemilik/pengirim barang, saya menyatakan bahwa :<br/>
        	<ol>
        		<li>Barang yang akan dimuat sesuai dengan Shipping Instruction </li>
        		<li>Barang yang akan dimuat sesuai bukan barang berbahaya/Dangerous Goods </li>
				<li>Barang yang dimuat tidak melebihi batas berat/ukuran/jumlah yang diperkenankan PT. PELNI</li>
				<li>Barang yang akan dimuat bukan barang yang dilarang secara hukun RI</li>
				<li>Menyetujui menggunakan satuan tarif, serta ketentuan pengiriman sesuai prosedur yang berlaku di PT.PELNI</li>
				<li>Tidak menuntut/meminta ganti rugi kepada PT. PELNI atas:
					<ul type="disc">
						<li>Barang tidak termuat/terbongkar</li>
						<li>Barang berubah sifat/bentuk sesuai jenis barang</li>
						<li>Barang terkontaminasi</li>
						<li>Kerusakan dan kehilangan akibat pembungkus yang tidak dapat mengamankan isinya</li>
					</ul>


				</li>

        	
        	</ol>
        </p>

        <table style="width:100%;">
        	<tr>
        		<td style="width:55%; text-align:left; font-size:11px;">

        		Jakarta, 21 Mei 2016 <br/>
        		a.n <ul style="list-style:none">
        			<li>Direkur Logistik dan Sarana Distribusi</li>
        			<li>Kabid Kerjasama Pengembangan Sistem Logistik</li>
        			<li>Dir. Logistik dan Sarana Distribusi, Kementrian Pedagangan</li>
        		</ul>

        		<img src="<?php echo base_url();?>assets/images/ttd.gif" 
                alt="Kemendag.go.id" width="120">
                <hr width="6">
        		</td>
        		<td  style="width:45%;border:0.5px solid grey;font-size:10px;padding:4px;" >
        			Term/Layanan : <br/><br/>
        			CY-CY : <br/>
					Menerima dan menyerahkan Barang/Container di Lapangan Penumpukan Pelabuhan.<br/><br/>

					Port- Port : <br/>
					Menerima dan menyerahkan Barang/Container di sisi Kapal/Dermaga Pelabuhan.<br/><br/>

					Door - Door : <br/>
					Menerima dan menyerahkan Barang/Container di Gudang Pengirim/Penerima.</td>
        	</tr>
        </table>

        <?php
    }
    ?>
    <page_footer>
   <?php echo date('d/m/Y'); ?>
    </page_footer>
        
</page>
