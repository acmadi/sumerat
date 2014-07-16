<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<head>
		<title> |:| AP. SUMERAT |:| </title>
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta charset="utf-8">
		<style type="text/css">
			@font-face {
			  font-family: 'Cabin';
			  font-style: normal;
			  font-weight: 400;
			  src: local('Cabin Regular'), local('Cabin-Regular'), url(<?php echo base_url(); ?>aset/font/satu.woff) format('woff');
			}
			@font-face {
			  font-family: 'Cabin';
			  font-style: normal;
			  font-weight: 700;
			  src: local('Cabin Bold'), local('Cabin-Bold'), url(<?php echo base_url(); ?>aset/font/dua.woff) format('woff');
			}
			@font-face {
			  font-family: 'Lobster';
			  font-style: normal;
			  font-weight: 400;
			  src: local('Lobster'), url(<?php echo base_url(); ?>aset/font/tiga.woff) format('woff');
			}
		</style>
	    <link rel="stylesheet" href="<?php echo base_url(); ?>aset/css/bootstrap.css" media="screen">
		<link rel="stylesheet" href="<?php echo base_url(); ?>aset/js/jquery/jquery-ui.css" />
	  
	    <script src="<?php echo base_url(); ?>aset/js/jquery.min.js"></script>
	    <script src="<?php echo base_url(); ?>aset/js/bootstrap.min.js"></script>
	    <script src="<?php echo base_url(); ?>aset/js/bootswatch.js"></script>
		<script src="<?php echo base_url(); ?>aset/js/jquery/jquery-ui.js"></script>
		<script type="text/javascript">
		// <![CDATA[
		$(document).ready(function () {
			$(function () {
				$( "#kode_input" ).autocomplete({
					source: function(request, response) {
						$.ajax({ 
							url: "<?php echo site_url('kodesurat/get_autocomplete'); ?>",
							data: { kode: $("#kode_input").val()},
							dataType: "json",
							type: "POST",
							success: function(data){
								response(data);
							}    
						});
					},
				});
			});
			
			$(function() {
				$( "#tanggal_surat" ).datepicker({
					changeMonth: true,
					changeYear: true,
					dateFormat: 'yy-mm-dd'
				});
			});

			$(function() {
				$( "#tanggal_penyelesaian" ).datepicker({
					changeMonth: true,
					changeYear: true,
					dateFormat: 'yy-mm-dd'
				});
			});

			$(function() {
    			$('form:first *:input[type!=hidden]:first').focus();
    		});
			
		});
		// ]]>
		</script>
	</head>
	
  	<body style="">
	    <div class="navbar navbar-inverse navbar-fixed-top">
	      	<div class="container">
	        	<div class="navbar-header">
	         		<span class="navbar-brand">
	         			<strong style="font-family: calibri;">Ap. SUMERAT</strong>
	         		</span>
	          		<button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
	            		<span class="icon-bar"></span>
	            		<span class="icon-bar"></span>
	            		<span class="icon-bar"></span>
	          		</button>
	        	</div>
	        	<?php if($this->session->userdata('nip') != null) { ?>
	        	<div class="navbar-collapse collapse" id="navbar-main">
	          		<ul class="nav navbar-nav">
	          			<li><a href="<?php echo base_url(); ?>home"><i class="icon-home icon-white"></i> Beranda</a></li>
	            		<li class="dropdown">
	            			<a class="dropdown-toggle" data-toggle="dropdown" href="#" id="themes"><i class="icon-th-list icon-white"> </i> Referensi <span class="caret"></span></a>
	            			<ul class="dropdown-menu" aria-labelledby="themes">
	            				<li><a tabindex="-1" href="<?php echo base_url(); ?>kodesurat">Klasifikasi Kode Surat</a></li>
	            			</ul>
	            		</li>
	            		<li class="dropdown">
	            			<a class="dropdown-toggle" data-toggle="dropdown" href="#" id="themes"><i class="icon-random icon-white"> </i> Transaksi <span class="caret"></span></a>
	            			<ul class="dropdown-menu" aria-labelledby="themes">
	            				<li><a tabindex="-1" href="<?php echo base_url(); ?>suratmasuk">Surat Masuk</a></li>
	                			<li><a tabindex="-1" href="<?php echo base_url(); ?>suratkeluar">Surat Keluar</a></li>
	                		</ul>
	                	</li>
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#" id="themes"><i class="icon-file icon-white"> </i> Buku Agenda <span class="caret"></span></a>
							<ul class="dropdown-menu" aria-labelledby="themes">
								<li><a tabindex="-1" href="<?php echo base_url(); ?>home/agenda_surat_masuk"> Surat Masuk</a></li>
			                	<li><a tabindex="-1" href="<?php echo base_url(); ?>home/agenda_surat_keluar"> Surat Keluar</a></li>
			                </ul>
			            </li>
			            <!-- <li class="dropdown">
			            	<a class="dropdown-toggle" data-toggle="dropdown" href="#" id="themes"><i class="icon-wrench icon-white"> </i> Pengaturan <span class="caret"></span></a>
			            	<ul class="dropdown-menu" aria-labelledby="themes">
			            		<li><a tabindex="-1" href="<?php //echo base_url(); ?>home/pengguna">Instansi Pengguna</a></li>
			            		<li><a tabindex="-1" href="<?php //echo base_url(); ?>home/manage_admin">Manajemen Admin</a></li>
			            	</ul>
	            		</li> -->
	            	</ul>

	            	<ul class="nav navbar-nav navbar-right">
	            		<li class="dropdown">
	            			<a class="dropdown-toggle" data-toggle="dropdown" href="#" id="themes">
	            				<i class="icon-user icon-white"></i><?php echo " ".$this->session->userdata('level') ?><span class="caret"></span>
	            			</a>
	            			<ul class="dropdown-menu" aria-labelledby="themes">
	            				<li><a tabindex="-1" href="<?php echo base_url(); ?>ubahpassword">Rubah Password</a></li>
	            				<li><a tabindex="-1" href="<?php echo base_url(); ?>logout">Logout</a></li>
	            			</ul>
	            		</li>
	            	</ul>
	            </div>
	            <?php } ?>
	        </div>
	    </div>

	    <?php $q_instansi = $this->db->query("SELECT * FROM tr_instansi LIMIT 1")->row(); ?>
	    <div class="container">
	    	<div class="page-header" id="banner">
	    		<div class="row">
	    			<div class="" style="padding: 15px 15px 0 15px;">
	    				<div class="well well-sm" align="center">
	    					<table>
	    						<tr>
	    							<td align="center">
										<img src="<?php echo base_url(); ?>upload/logo1.png" class="thumbnail span3" style="display: inline; float: RIGHT; margin-right: 80px; width: 100px; height: 100px">
	    							</td>
	    							<td align="center">
						                <h2 style="margin: 15px 0 10px 0; color: #000;"><?php echo $q_instansi->nama; ?></h2>
						                <div style="color: #000; font-size: 16px; font-family: Tahoma" class="clearfix">
						                	<b>Alamat : <?php echo $q_instansi->alamat; ?></b>
						                </div>
	    							</td>
	    							<td align="center">
										<img src="<?php echo base_url(); ?>upload/<?php echo $q_instansi->logo; ?>" class="thumbnail span3" style="display: inline; float: right; margin-left: 80px; width: 100px; height: 100px">
	    							</td>
	    						</tr>
	    					</table>
			            </div>
			        </div>
			    </div>
			</div>

			<?php $this->load->view('admin/'.$page); ?>

			<div class="span12 well well-sm">
				<h6>&copy;  2014. Waktu Eksekusi : {elapsed_time}, Penggunaan Memori : {memory_usage}</h6>
			</div>
	 
	    </div>

	</body>
</html>

<?php
/* End of file aaa.php */
/* Location: ./application/views/aaa.php */