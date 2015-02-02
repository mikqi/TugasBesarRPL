<?php

class RestoBroSeeder extends Seeder {

	public function run()
	{
		DB::table('bahan_baku')->delete();
		DB::table('detail_kuesioner')->delete();
		DB::table('detail_transaksi')->delete();
		DB::table('hasil_kuesioner')->delete();
		DB::table('kategori')->delete();
		DB::table('kuesioner')->delete();
		DB::table('meja')->delete();
		DB::table('menu')->delete();
		DB::table('pegawai')->delete();
		DB::table('pertanyaan')->delete();
		DB::table('pesanan')->delete();
		DB::table('resep')->delete();

		$pegawaiBudi = Pegawai::create(array(
			'nama'			=>	'Budi',
			'alamat'		=>	'Bandung',
			'tempat_lahir'	=>	'Jakarta',
			'tgl_lahir'		=>	'1990-08-27',
			'jk'			=>	'Laki-laki',
			'no_telp'		=>	'089637872434',
			'email'			=>	'budi.coolz@gmail.com',
			'role'			=>	'Admin',
			'password'		=>	Hash::make('admin')
		));

		$pegawaiCecep = Pegawai::create(array(
			'nama'			=>	'Cecep',
			'alamat'		=>	'Bandung',
			'tempat_lahir'	=>	'Bandung',
			'tgl_lahir'		=>	'1989-04-23',
			'jk'			=>	'Laki-laki',
			'no_telp'		=>	'081289765678',
			'email'			=>	'cecep.bengeut@gmail.com',
			'role'			=>	'Koki',
			'password'		=>	Hash::make('edan')
		));

		$pegawaiBoby = Pegawai::create(array(
			'nama'			=>	'Boby',
			'alamat'		=>	'Bandung',
			'tempat_lahir'	=>	'Padang',
			'tgl_lahir'		=>	'1992-09-11',
			'jk'			=>	'Laki-laki',
			'no_telp'		=>	'085276589875',
			'email'			=>	'boby.live@outlook.com',
			'role'			=>	'Pantry',
			'password'		=>	Hash::make('bobycal')
		));

		$pegawaiLira = Pegawai::create(array(
			'nama'			=>	'Lira',
			'alamat'		=>	'Bandung',
			'tempat_lahir'	=>	'Bandung',
			'tgl_lahir'		=>	'1993-08-05',
			'jk'			=>	'Perempuan',
			'no_telp'		=>	'085298737532',
			'email'			=>	'lira93@gmail.com',
			'role'			=>	'Kasir',
			'password'		=>	Hash::make('liralira')
		));

		$pegawaiAgus = Pegawai::create(array(
			'nama'			=>	'Agus',
			'alamat'		=>	'Bandung',
			'tempat_lahir'	=>	'Depok',
			'tgl_lahir'		=>	'1991-06-08',
			'jk'			=>	'Laki-laki',
			'no_telp'		=>	'081256749832',
			'email'			=>	'agus_broh@yahoo.com',
			'role'			=>	'Pelayan',
			'password'		=>	Hash::make('agggus')
		));

		$pegawaiDewi = Pegawai::create(array(
			'nama'			=>	'Dewi',
			'alamat'		=>	'Bandung',
			'tempat_lahir'	=>	'Semarang',
			'tgl_lahir'		=>	'1992-04-04',
			'jk'			=>	'Perempuan',
			'no_telp'		=>	'085767546775',
			'email'			=>	'dewi008@yahoo.com',
			'role'			=>	'CS',
			'password'		=>	Hash::make('edan')
		));

		$this->command->info('Data Pegawai sudah masuk!');

		$mejaSatu = Meja::create(array(
			'status'		=>	'Kosong'
		));

		$mejaDua = Meja::create(array(
			'status'		=>	'Kosong'
		));

		$mejaTiga = Meja::create(array(
			'status'		=>	'Kosong'
		));

		$mejaEmpat = Meja::create(array(
			'status'		=>	'Kosong'
		));

		$mejaLima = Meja::create(array(
			'status'		=>	'Kosong'
		));

		$mejaEnam = Meja::create(array(
			'status'		=>	'Kosong'
		));

		$mejaTujuh = Meja::create(array(
			'status'		=>	'Kosong'
		));

		$mejaDelapan = Meja::create(array(
			'status'		=>	'Kosong'
		));

		$mejaSembilan = Meja::create(array(
			'status'		=>	'Kosong'
		));

		$mejaSepuluh = Meja::create(array(
			'status'		=>	'Kosong'
		));

		$mejaSebelas = Meja::create(array(
			'status'		=>	'Kosong'
		));

		$mejaDuabelas = Meja::create(array(
			'status'		=>	'Kosong'
		));

		$mejaTigabelas = Meja::create(array(
			'status'		=>	'Kosong'
		));

		$mejaEmpatbelas = Meja::create(array(
			'status'		=>	'Kosong'
		));

		$mejaLimabelas = Meja::create(array(
			'status'		=>	'Kosong'
		));

		$mejaEnambelas = Meja::create(array(
			'status'		=>	'Kosong'
		));

		$mejaTujuhbelas = Meja::create(array(
			'status'		=>	'Kosong'
		));

		$mejaDelapanbelas = Meja::create(array(
			'status'		=>	'Kosong'
		));

		$mejaSembilanbelas = Meja::create(array(
			'status'		=>	'Kosong'
		));

		$mejaDuapuluh = Meja::create(array(
			'status'		=>	'Kosong'
		));

		$this->command->info('Data Meja sudah masuk!');

		$kategoriAppetizer = Kategori::create(array(
			'nama_kategori'	=>	'Appetizer'
		));

		$kategoriDrink = Kategori::create(array(
			'nama_kategori'	=>	'Drink'
		));

		$kategoriDessert = Kategori::create(array(
			'nama_kategori'	=>	'Dessert'
		));

		$kategoriSnack = Kategori::create(array(
			'nama_kategori'	=>	'Snack'
		));

		$kategoriMainCourse = Kategori::create(array(
			'nama_kategori'	=>	'Main Course'
		));

		$this->command->info('Data Kategori sudah masuk!');

		$pertanyaanSatu = Pertanyaan::create(array(
			'pertanyaan'	=>	'Apakah pelayanan restoran kami memuaskan ?'
		));

		$pertanyaanDua = Pertanyaan::create(array(
			'pertanyaan'	=>	'Apakah makanan di restoran kami rasanya lezat ?'
		));

		$pertanyaanTiga = Pertanyaan::create(array(
			'pertanyaan'	=>	'Apakah anda merasa kesulitan memesan di restoran kami ?'
		));

		$pertanyaanEmpat = Pertanyaan::create(array(
			'pertanyaan'	=>	'Apakah anda merasa terganggu dengan adanya kuesioner ini ?'
		));

		$pertanyaanLima = Pertanyaan::create(array(
			'pertanyaan'	=>	'Apakah anda merasa nyaman di restoran kami ?'
		));

		$this->command->info('Data Pertanyaan sudah masuk!');

		$bahanBakuSapi = BahanBaku::create(array(
			'nama_bahan'		=>	'Daging Sapi',
			'stok'				=>	100,
			'tgl_masuk'			=>	'2015-01-31',
			'tgl_kadaluarsa'	=>	'2015-02-02',
			'id_pegawai'		=>	$pegawaiBoby->id_pegawai
		));

		$bahanBakuBuntut = BahanBaku::create(array(
			'nama_bahan'		=>	'Buntut Sapi',
			'stok'				=>	100,
			'tgl_masuk'			=>	'2015-01-31',
			'tgl_kadaluarsa'	=>	'2015-02-02',
			'id_pegawai'		=>	$pegawaiBoby->id_pegawai
		));

		$bahanBakuSirloin = BahanBaku::create(array(
			'nama_bahan'		=>	'Daging Sapi Sirloin',
			'stok'				=>	100,
			'tgl_masuk'			=>	'2015-01-31',
			'tgl_kadaluarsa'	=>	'2015-02-02',
			'id_pegawai'		=>	$pegawaiBoby->id_pegawai
		));

		$bahanBakuTenderloin = BahanBaku::create(array(
			'nama_bahan'		=>	'Daging Sapi Tenderloin',
			'stok'				=>	100,
			'tgl_masuk'			=>	'2015-01-31',
			'tgl_kadaluarsa'	=>	'2015-02-02',
			'id_pegawai'		=>	$pegawaiBoby->id_pegawai
		));

		$bahanBakuIga = BahanBaku::create(array(
			'nama_bahan'		=>	'Daging Sapi Iga',
			'stok'				=>	100,
			'tgl_masuk'			=>	'2015-01-31',
			'tgl_kadaluarsa'	=>	'2015-02-02',
			'id_pegawai'		=>	$pegawaiBoby->id_pegawai
		));

		$bahanBakuAyam = BahanBaku::create(array(
			'nama_bahan'		=>	'Daging Ayam',
			'stok'				=>	100,
			'tgl_masuk'			=>	'2015-01-31',
			'tgl_kadaluarsa'	=>	'2015-02-02',
			'id_pegawai'		=>	$pegawaiBoby->id_pegawai
		));

		$bahanBakuBeras = BahanBaku::create(array(
			'nama_bahan'		=>	'Beras',
			'stok'				=>	100,
			'tgl_masuk'			=>	'2015-01-31',
			'tgl_kadaluarsa'	=>	'2015-02-02',
			'id_pegawai'		=>	$pegawaiBoby->id_pegawai
		));

		$bahanBakuKentang = BahanBaku::create(array(
			'nama_bahan'		=>	'Kentang',
			'stok'				=>	100,
			'tgl_masuk'			=>	'2015-01-31',
			'tgl_kadaluarsa'	=>	'2015-02-02',
			'id_pegawai'		=>	$pegawaiBoby->id_pegawai
		));

		$bahanBakuWortel = BahanBaku::create(array(
			'nama_bahan'		=>	'Wortel',
			'stok'				=>	100,
			'tgl_masuk'			=>	'2015-01-31',
			'tgl_kadaluarsa'	=>	'2015-02-02',
			'id_pegawai'		=>	$pegawaiBoby->id_pegawai
		));

		$bahanBakuBuncis = BahanBaku::create(array(
			'nama_bahan'		=>	'Buncis',
			'stok'				=>	100,
			'tgl_masuk'			=>	'2015-01-31',
			'tgl_kadaluarsa'	=>	'2015-02-02',
			'id_pegawai'		=>	$pegawaiBoby->id_pegawai
		));

		$bahanBakuTomat = BahanBaku::create(array(
			'nama_bahan'		=>	'Tomat',
			'stok'				=>	100,
			'tgl_masuk'			=>	'2015-01-31',
			'tgl_kadaluarsa'	=>	'2015-02-02',
			'id_pegawai'		=>	$pegawaiBoby->id_pegawai
		));

		$bahanBakuSausTomat = BahanBaku::create(array(
			'nama_bahan'		=>	'Saus Tomat',
			'stok'				=>	100,
			'tgl_masuk'			=>	'2015-01-31',
			'tgl_kadaluarsa'	=>	'2015-02-02',
			'id_pegawai'		=>	$pegawaiBoby->id_pegawai
		));

		$bahanBakuSausSambal = BahanBaku::create(array(
			'nama_bahan'		=>	'Saus sambal',
			'stok'				=>	100,
			'tgl_masuk'			=>	'2015-01-31',
			'tgl_kadaluarsa'	=>	'2015-02-02',
			'id_pegawai'		=>	$pegawaiBoby->id_pegawai
		));

		$bahanBakuTelur = BahanBaku::create(array(
			'nama_bahan'		=>	'Telur',
			'stok'				=>	100,
			'tgl_masuk'			=>	'2015-01-31',
			'tgl_kadaluarsa'	=>	'2015-02-02',
			'id_pegawai'		=>	$pegawaiBoby->id_pegawai
		));

		$bahanBakuLadaHitam = BahanBaku::create(array(
			'nama_bahan'		=>	'Lada Hitam',
			'stok'				=>	100,
			'tgl_masuk'			=>	'2015-01-31',
			'tgl_kadaluarsa'	=>	'2015-02-02',
			'id_pegawai'		=>	$pegawaiBoby->id_pegawai
		));

		$bahanBakuKeju = BahanBaku::create(array(
			'nama_bahan'		=>	'Keju',
			'stok'				=>	100,
			'tgl_masuk'			=>	'2015-01-31',
			'tgl_kadaluarsa'	=>	'2015-02-02',
			'id_pegawai'		=>	$pegawaiBoby->id_pegawai
		));

		$bahanBakuTepung = BahanBaku::create(array(
			'nama_bahan'		=>	'Tepung',
			'stok'				=>	100,
			'tgl_masuk'			=>	'2015-01-31',
			'tgl_kadaluarsa'	=>	'2015-02-02',
			'id_pegawai'		=>	$pegawaiBoby->id_pegawai
		));

		$bahanBakuMentega = BahanBaku::create(array(
			'nama_bahan'		=>	'Mentega',
			'stok'				=>	100,
			'tgl_masuk'			=>	'2015-01-31',
			'tgl_kadaluarsa'	=>	'2015-02-02',
			'id_pegawai'		=>	$pegawaiBoby->id_pegawai
		));

		$bahanBakuCokelat = BahanBaku::create(array(
			'nama_bahan'		=>	'Cokelat',
			'stok'				=>	100,
			'tgl_masuk'			=>	'2015-01-31',
			'tgl_kadaluarsa'	=>	'2015-02-02',
			'id_pegawai'		=>	$pegawaiBoby->id_pegawai
		));

		$bahanBakuSusu = BahanBaku::create(array(
			'nama_bahan'		=>	'Susu',
			'stok'				=>	100,
			'tgl_masuk'			=>	'2015-01-31',
			'tgl_kadaluarsa'	=>	'2015-02-02',
			'id_pegawai'		=>	$pegawaiBoby->id_pegawai
		));

		$bahanBakuVanilla = BahanBaku::create(array(
			'nama_bahan'		=>	'Vanilla',
			'stok'				=>	100,
			'tgl_masuk'			=>	'2015-01-31',
			'tgl_kadaluarsa'	=>	'2015-02-02',
			'id_pegawai'		=>	$pegawaiBoby->id_pegawai
		));

		$bahanBakuSosis = BahanBaku::create(array(
			'nama_bahan'		=>	'Sosis',
			'stok'				=>	100,
			'tgl_masuk'			=>	'2015-01-31',
			'tgl_kadaluarsa'	=>	'2015-02-02',
			'id_pegawai'		=>	$pegawaiBoby->id_pegawai
		));

		$bahanBakuBaso = BahanBaku::create(array(
			'nama_bahan'		=>	'Baso',
			'stok'				=>	100,
			'tgl_masuk'			=>	'2015-01-31',
			'tgl_kadaluarsa'	=>	'2015-02-02',
			'id_pegawai'		=>	$pegawaiBoby->id_pegawai
		));

		$bahanBakuBombay = BahanBaku::create(array(
			'nama_bahan'		=>	'Bawang Bombay',
			'stok'				=>	100,
			'tgl_masuk'			=>	'2015-01-31',
			'tgl_kadaluarsa'	=>	'2015-02-02',
			'id_pegawai'		=>	$pegawaiBoby->id_pegawai
		));

		$bahanBakuMerah = BahanBaku::create(array(
			'nama_bahan'		=>	'Bawang Merah',
			'stok'				=>	100,
			'tgl_masuk'			=>	'2015-01-31',
			'tgl_kadaluarsa'	=>	'2015-02-02',
			'id_pegawai'		=>	$pegawaiBoby->id_pegawai
		));

		$bahanBakuPutih = BahanBaku::create(array(
			'nama_bahan'		=>	'Bawang Putih',
			'stok'				=>	100,
			'tgl_masuk'			=>	'2015-01-31',
			'tgl_kadaluarsa'	=>	'2015-02-02',
			'id_pegawai'		=>	$pegawaiBoby->id_pegawai
		));

		$bahanBakuDaunBawang = BahanBaku::create(array(
			'nama_bahan'		=>	'Daun Bawang',
			'stok'				=>	100,
			'tgl_masuk'			=>	'2015-01-31',
			'tgl_kadaluarsa'	=>	'2015-02-02',
			'id_pegawai'		=>	$pegawaiBoby->id_pegawai
		));

		$bahanBakuSausTiram = BahanBaku::create(array(
			'nama_bahan'		=>	'Saus Tiram',
			'stok'				=>	100,
			'tgl_masuk'			=>	'2015-01-31',
			'tgl_kadaluarsa'	=>	'2015-02-02',
			'id_pegawai'		=>	$pegawaiBoby->id_pegawai
		));

		$bahanBakuGula = BahanBaku::create(array(
			'nama_bahan'		=>	'Gula',
			'stok'				=>	100,
			'tgl_masuk'			=>	'2015-01-31',
			'tgl_kadaluarsa'	=>	'2015-02-02',
			'id_pegawai'		=>	$pegawaiBoby->id_pegawai
		));

		$bahanBakuGaram = BahanBaku::create(array(
			'nama_bahan'		=>	'Garam',
			'stok'				=>	100,
			'tgl_masuk'			=>	'2015-01-31',
			'tgl_kadaluarsa'	=>	'2015-02-02',
			'id_pegawai'		=>	$pegawaiBoby->id_pegawai
		));

		$bahanBakuKecap = BahanBaku::create(array(
			'nama_bahan'		=>	'Kecap',
			'stok'				=>	100,
			'tgl_masuk'			=>	'2015-01-31',
			'tgl_kadaluarsa'	=>	'2015-02-02',
			'id_pegawai'		=>	$pegawaiBoby->id_pegawai
		));

		$bahanBakuSelada = BahanBaku::create(array(
			'nama_bahan'		=>	'Selada',
			'stok'				=>	100,
			'tgl_masuk'			=>	'2015-01-31',
			'tgl_kadaluarsa'	=>	'2015-02-02',
			'id_pegawai'		=>	$pegawaiBoby->id_pegawai
		));

		$bahanBakuStrawberry = BahanBaku::create(array(
			'nama_bahan'		=>	'Strawberry',
			'stok'				=>	100,
			'tgl_masuk'			=>	'2015-01-31',
			'tgl_kadaluarsa'	=>	'2015-02-02',
			'id_pegawai'		=>	$pegawaiBoby->id_pegawai
		));

		$bahanBakuMelon = BahanBaku::create(array(
			'nama_bahan'		=>	'Melon',
			'stok'				=>	100,
			'tgl_masuk'			=>	'2015-01-31',
			'tgl_kadaluarsa'	=>	'2015-02-02',
			'id_pegawai'		=>	$pegawaiBoby->id_pegawai
		));

		$bahanBakuAvocado = BahanBaku::create(array(
			'nama_bahan'		=>	'Avocado',
			'stok'				=>	100,
			'tgl_masuk'			=>	'2015-01-31',
			'tgl_kadaluarsa'	=>	'2015-02-02',
			'id_pegawai'		=>	$pegawaiBoby->id_pegawai
		));

		$bahanBakuOrange = BahanBaku::create(array(
			'nama_bahan'		=>	'Orange',
			'stok'				=>	100,
			'tgl_masuk'			=>	'2015-01-31',
			'tgl_kadaluarsa'	=>	'2015-02-02',
			'id_pegawai'		=>	$pegawaiBoby->id_pegawai
		));

		$bahanBakuLemon = BahanBaku::create(array(
			'nama_bahan'		=>	'Lemon',
			'stok'				=>	100,
			'tgl_masuk'			=>	'2015-01-31',
			'tgl_kadaluarsa'	=>	'2015-02-02',
			'id_pegawai'		=>	$pegawaiBoby->id_pegawai
		));

		$bahanBakuSoda = BahanBaku::create(array(
			'nama_bahan'		=>	'Soda',
			'stok'				=>	100,
			'tgl_masuk'			=>	'2015-01-31',
			'tgl_kadaluarsa'	=>	'2015-02-02',
			'id_pegawai'		=>	$pegawaiBoby->id_pegawai
		));

		$bahanBakuMango = BahanBaku::create(array(
			'nama_bahan'		=>	'Mango',
			'stok'				=>	100,
			'tgl_masuk'			=>	'2015-01-31',
			'tgl_kadaluarsa'	=>	'2015-02-02',
			'id_pegawai'		=>	$pegawaiBoby->id_pegawai
		));

		$bahanBakuIceCream = BahanBaku::create(array(
			'nama_bahan'		=>	'Ice Cream',
			'stok'				=>	100,
			'tgl_masuk'			=>	'2015-01-31',
			'tgl_kadaluarsa'	=>	'2015-02-02',
			'id_pegawai'		=>	$pegawaiBoby->id_pegawai
		));

		$this->command->info('Data Bahan Baku sudah masuk!');

		$menuSteakTender = Menu::create(array(
			'nama_menu'			=>	'Tenderloin Steak',
			'harga'				=>	'35000',
			'id_kategori'		=>	$kategoriMainCourse->id_kategori,
			'id_pegawai'		=>	$pegawaiCecep->id_pegawai
		));

		$menuSteakSirloin = Menu::create(array(
			'nama_menu'			=>	'Sirloin Steak',
			'harga'				=>	'35000',
			'id_kategori'		=>	$kategoriMainCourse->id_kategori,
			'id_pegawai'		=>	$pegawaiCecep->id_pegawai
		));

		$menuIga = Menu::create(array(
			'nama_menu'			=>	'Iga Bakar',
			'harga'				=>	'35000',
			'id_kategori'		=>	$kategoriMainCourse->id_kategori,
			'id_pegawai'		=>	$pegawaiCecep->id_pegawai
		));

		$menuBuntut = Menu::create(array(
			'nama_menu'			=>	'Sop Buntut',
			'harga'				=>	'30000',
			'id_kategori'		=>	$kategoriMainCourse->id_kategori,
			'id_pegawai'		=>	$pegawaiCecep->id_pegawai
		));

		$menuAyamGoreng = Menu::create(array(
			'nama_menu'			=>	'Ayam Goreng',
			'harga'				=>	'25000',
			'id_kategori'		=>	$kategoriMainCourse->id_kategori,
			'id_pegawai'		=>	$pegawaiCecep->id_pegawai
		));

		$menuAyamBakar = Menu::create(array(
			'nama_menu'			=>	'Ayam Bakar',
			'harga'				=>	'25000',
			'id_kategori'		=>	$kategoriMainCourse->id_kategori,
			'id_pegawai'		=>	$pegawaiCecep->id_pegawai
		));

		$menuCakeCoklat = Menu::create(array(
			'nama_menu'			=>	'Cake Cokelat',
			'harga'				=>	'15000',
			'id_kategori'		=>	$kategoriDessert->id_kategori,
			'id_pegawai'		=>	$pegawaiCecep->id_pegawai
		));

		$menuCakeKeju = Menu::create(array(
			'nama_menu'			=>	'Cake Keju',
			'harga'				=>	'15000',
			'id_kategori'		=>	$kategoriDessert->id_kategori,
			'id_pegawai'		=>	$pegawaiCecep->id_pegawai
		));

		$menuStrawJuice = Menu::create(array(
			'nama_menu'			=>	'Strawberry Juice',
			'harga'				=>	'15000',
			'id_kategori'		=>	$kategoriDrink->id_kategori,
			'id_pegawai'		=>	$pegawaiCecep->id_pegawai
		));

		$menuMelonJuice = Menu::create(array(
			'nama_menu'			=>	'Melon Juice',
			'harga'				=>	'15000',
			'id_kategori'		=>	$kategoriDrink->id_kategori,
			'id_pegawai'		=>	$pegawaiCecep->id_pegawai
		));

		$menuAvocadoJuice = Menu::create(array(
			'nama_menu'			=>	'Avocado Juice',
			'harga'				=>	'15000',
			'id_kategori'		=>	$kategoriDrink->id_kategori,
			'id_pegawai'		=>	$pegawaiCecep->id_pegawai
		));

		$menuMangoJuice = Menu::create(array(
			'nama_menu'			=>	'Mango Juice',
			'harga'				=>	'15000',
			'id_kategori'		=>	$kategoriDrink->id_kategori,
			'id_pegawai'		=>	$pegawaiCecep->id_pegawai
		));

		$menuOrangeJuice = Menu::create(array(
			'nama_menu'			=>	'Orange Juice',
			'harga'				=>	'15000',
			'id_kategori'		=>	$kategoriDrink->id_kategori,
			'id_pegawai'		=>	$pegawaiCecep->id_pegawai
		));

		$menuOrangeSquash = Menu::create(array(
			'nama_menu'			=>	'Orange Squash',
			'harga'				=>	'15000',
			'id_kategori'		=>	$kategoriDrink->id_kategori,
			'id_pegawai'		=>	$pegawaiCecep->id_pegawai
		));

		$this->command->info('Data Menu sudah masuk!');

		$menuSteakTender->bahan()->attach($bahanBakuTenderloin->id_bahan);
		$menuSteakTender->bahan()->attach($bahanBakuPutih->id_bahan);
		$menuSteakTender->bahan()->attach($bahanBakuGaram->id_bahan);
		$menuSteakTender->bahan()->attach($bahanBakuSausTiram->id_bahan);
		$menuSteakTender->bahan()->attach($bahanBakuSausTomat->id_bahan);
		$menuSteakTender->bahan()->attach($bahanBakuKentang->id_bahan);
		$menuSteakTender->bahan()->attach($bahanBakuWortel->id_bahan);
		$menuSteakTender->bahan()->attach($bahanBakuBuncis->id_bahan);

		$menuSteakSirloin->bahan()->attach($bahanBakuSirloin->id_bahan);
		$menuSteakSirloin->bahan()->attach($bahanBakuPutih->id_bahan);
		$menuSteakSirloin->bahan()->attach($bahanBakuGaram->id_bahan);
		$menuSteakSirloin->bahan()->attach($bahanBakuSausTiram->id_bahan);
		$menuSteakSirloin->bahan()->attach($bahanBakuSausTomat->id_bahan);
		$menuSteakSirloin->bahan()->attach($bahanBakuKentang->id_bahan);
		$menuSteakSirloin->bahan()->attach($bahanBakuWortel->id_bahan);
		$menuSteakSirloin->bahan()->attach($bahanBakuBuncis->id_bahan);
		
		$menuIga->bahan()->attach($bahanBakuIga->id_bahan);
		$menuIga->bahan()->attach($bahanBakuPutih->id_bahan);
		$menuIga->bahan()->attach($bahanBakuGaram->id_bahan);
		$menuIga->bahan()->attach($bahanBakuSausTiram->id_bahan);
		$menuIga->bahan()->attach($bahanBakuKecap->id_bahan);
		$menuIga->bahan()->attach($bahanBakuBeras->id_bahan);
		
		$menuBuntut->bahan()->attach($bahanBakuBuntut->id_bahan);
		$menuBuntut->bahan()->attach($bahanBakuPutih->id_bahan);
		$menuBuntut->bahan()->attach($bahanBakuGaram->id_bahan);
		$menuBuntut->bahan()->attach($bahanBakuBeras->id_bahan);
		
		$menuAyamGoreng->bahan()->attach($bahanBakuAyam->id_bahan);
		$menuAyamGoreng->bahan()->attach($bahanBakuPutih->id_bahan);
		$menuAyamGoreng->bahan()->attach($bahanBakuGaram->id_bahan);
		$menuAyamGoreng->bahan()->attach($bahanBakuBeras->id_bahan);
		
		$menuAyamBakar->bahan()->attach($bahanBakuAyam->id_bahan);
		$menuAyamBakar->bahan()->attach($bahanBakuPutih->id_bahan);
		$menuAyamBakar->bahan()->attach($bahanBakuGaram->id_bahan);
		$menuAyamBakar->bahan()->attach($bahanBakuKecap->id_bahan);
		$menuAyamBakar->bahan()->attach($bahanBakuBeras->id_bahan);
		
		$menuCakeCoklat->bahan()->attach($bahanBakuTepung->id_bahan);
		$menuCakeCoklat->bahan()->attach($bahanBakuTelur->id_bahan);
		$menuCakeCoklat->bahan()->attach($bahanBakuGula->id_bahan);
		$menuCakeCoklat->bahan()->attach($bahanBakuMentega->id_bahan);
		$menuCakeCoklat->bahan()->attach($bahanBakuCokelat->id_bahan);

		$menuCakeKeju->bahan()->attach($bahanBakuTepung->id_bahan);
		$menuCakeKeju->bahan()->attach($bahanBakuTelur->id_bahan);
		$menuCakeKeju->bahan()->attach($bahanBakuGula->id_bahan);
		$menuCakeKeju->bahan()->attach($bahanBakuMentega->id_bahan);
		$menuCakeKeju->bahan()->attach($bahanBakuKeju->id_bahan);

		$menuStrawJuice->bahan()->attach($bahanBakuStrawberry->id_bahan);
		$menuStrawJuice->bahan()->attach($bahanBakuSusu->id_bahan);

		$menuMelonJuice->bahan()->attach($bahanBakuMelon->id_bahan);
		$menuMelonJuice->bahan()->attach($bahanBakuSusu->id_bahan);

		$menuMangoJuice->bahan()->attach($bahanBakuMango->id_bahan);
		$menuMangoJuice->bahan()->attach($bahanBakuSusu->id_bahan);

		$menuOrangeJuice->bahan()->attach($bahanBakuOrange->id_bahan);
		$menuOrangeJuice->bahan()->attach($bahanBakuGula->id_bahan);

		$menuAvocadoJuice->bahan()->attach($bahanBakuAvocado->id_bahan);
		$menuAvocadoJuice->bahan()->attach($bahanBakuGula->id_bahan);

		$menuOrangeSquash->bahan()->attach($bahanBakuOrange->id_bahan);
		$menuOrangeSquash->bahan()->attach($bahanBakuGula->id_bahan);
		$menuOrangeJuice->bahan()->attach($bahanBakuSoda->id_bahan);

		$this->command->info('Data Resep sudah masuk!');

		$kuesionerSatu = Kuesioner::create(array(
			'tgl_kuesioner'			=>	'2015-02-02',
			'id_pegawai'			=>	$pegawaiDewi->id_pegawai
		));

		$this->command->info('Data Kuesioner sudah masuk!');

		$kuesionerSatu->pertanyaan()->attach($pertanyaanSatu->id_pertanyaan);
		$kuesionerSatu->pertanyaan()->attach($pertanyaanDua->id_pertanyaan);
		$kuesionerSatu->pertanyaan()->attach($pertanyaanTiga->id_pertanyaan);
		$kuesionerSatu->pertanyaan()->attach($pertanyaanEmpat->id_pertanyaan);
		$kuesionerSatu->pertanyaan()->attach($pertanyaanLima->id_pertanyaan);

		$this->command->info('Data Detail Kuesioner sudah masuk!');
	}
}