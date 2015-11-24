<?php
	if (isset($_POST['save']))
	{
		$nama_lengkap= $_POST['nama_lengkap'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$email = $_POST['email'];
		include('koneksi.php');
		// Cek Apakah username kosong
		if (trim($username)=='' or trim($password)=='')
		{
			echo "username atau password belum berisi data,registrasi gagal...";
			echo"<p style='text-align:center'><a class='button small' href='registrasi.php'>KEMBALI</a></p>";	
		}
		else
		{
			//cek Apakah kata kunci sudah ada di database?
			$sql = "select * from tbpengguna where username ='$username'";
			$data = mysql_query($sql);
			if (mysql_num_rows($data)>0)
		{
			echo "Username ini sudah dipakai oleh orang lain. coba ulangi dengan username yang lain";
			echo"<p style='text-align:center'><a class='button small' href='registrasi.php'>KEMBALI</a></p>";
		}
		else
			{
				$sql="Insert into tbpengguna set 	nama_lengkap = '$nama_lengkap', 
													username = '$username',
													password = '$password',
													email = '$email'";
				mysql_query($sql);
				echo "Data pengguna berhasil disimpan";
				echo"<p style='text-align:center'><a class='button small' href='registrasi.php'>KEMBALI</a></p>";
			}
		}
	}
	else
		{
		?>
        <form id="contact-form-contact-form" class="contact-form row" method="post" action="registrasi.php" enctype="multipart/form-data">

                        <div class="usermessagea"></div>
                        <fieldset>
                            <ul>
								
                                <li class="text-field span3">
                                    <label for="name-contact-form">
                                    </label>
                                    <div class="input-prepend">
                                        <span class="add-on">
                                            <i class="icon-user"></i>
                                        </span>
                                        <input type="text" name="nama_lengkap" id="name-contact-form" class="required" value="" placeholder="Nama Lengkap"  />

                                    </div>
                                    <div class="msg-error"></div>
                                    <div class="clear"></div>
                                </li>
								
								 <li class="text-field span3">
                                    <label for="name-contact-form">
                                    </label>
                                    <div class="input-prepend">
                                        <span class="add-on">
                                            <i class="icon-user"></i>
                                        </span>
                                        <input type="text" name="username" id="name-contact-form" class="required" value="" placeholder="Username" />

                                    </div>
                                    <div class="msg-error"></div>
                                    <div class="clear"></div>
                                </li><br/>
							
                                <li class="text-field span3">
                                    <label for="phone-contact-form">
                                    </label>
                                    <div class="input-prepend">
                                        <span class="add-on">
                                        </span>
                                        <input type="password" name="password" id="phone-contact-form" class="required" value="" placeholder="Password" />
                                    </div>

                                    <div class="msg-error"></div>
                                    <div class="clear"></div>
                                </li>

                                <li class="text-field span3">
                                    <label for="email-contact-form">
                                    </label>
                                    <div class="input-prepend">
                                        <span class="add-on">
                                            <i class="icon-envelope"></i>
                                        </span>
                                        <input type="text" name="email" id="email-contact-form" class="required email-validate" value="" placeholder="Email"/>
                                    </div>

                                    <div class="msg-error"></div>
                                    <div class="clear"></div>
                                </li>

                                <li class="submit-button span9">
                                    <input type="submit" name="save" value="Save"/>
                                    <div class="clear"></div>
                                </li>
                            </ul>
                        </fieldset>
                    </form>
		<?php
		}
			?>