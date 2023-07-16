<?php
    include "koneksi.php";
    class application extends koneksi{
        public function cekLogin($username, $password)
        {
            // echo $username." ini adalah username";
            $query = "SELECT * FROM users WHERE username ='$username' and password = '$password'";
            $data = mysqli_query($this->koneksi,$query);
            $row = mysqli_fetch_assoc($data);
            
            if($row != null){
                echo "anda bisa login";
                $roles = $row['roles'];
                session_start();
                $_SESSION["roles"] = $roles;
                header("location: dasboard.php");
            }else{
                echo "anda tidak bisa login";
            }
        }
        public function tampilData($query)
        {
            $data = mysqli_query($this->koneksi,$query);
            while ($row = mysqli_fetch_assoc($data)) {
                $hasil[] = $row;
            }
            return $hasil;
        }
        public function tampilDataById($query)
        {
            $data = mysqli_query($this->koneksi,$query);
            while ($row = mysqli_fetch_assoc($data)) {
                $hasil[] = $row;
            }
            return $hasil;
        }
        //add pegawai
        public function addPegawai($id_peg,$nm_pegawai,$jns_kelamin,$tmp_lahir,$tgl_lahir,$email,$no_telp,$alamat)
        {
            mysqli_query($this->koneksi,"INSERT INTO pegawai (id_pegawai, nm_pegawai, email, alamat, no_telp, jsn_kelamin, tgl_lahir, tmp_lahir) VALUES ('$id_peg','$nm_pegawai','$email','$alamat','$no_telp','$jns_kelamin','$tgl_lahir','$tmp_lahir')");
        }
        public function updateaddPegawai($id_peg,$nm_pegawai,$jns_kelamin,$tmp_lahir,$tgl_lahir,$email,$no_telp,$alamat,$id)
        {
            mysqli_query($this->koneksi,"UPDATE `pegawai` SET `id_pegawai`='$id_peg',`nm_pegawai`='$nm_pegawai',`email`='$email',`alamat`='$alamat',`no_telp`='$no_telp',`jsn_kelamin`='$jns_kelamin',`tgl_lahir`='$tgl_lahir',`tmp_lahir`='$tmp_lahir' WHERE id_pegawai='$id'");
        }
        public function DeleteaddPegawai($query)
        {
         mysqli_query($this->koneksi,$query);
        }
        //add akun
        public function addAkun($id_peg,$username,$password)
        {
            mysqli_query($this->koneksi,"INSERT INTO users(id_pegawai, username, password, roles) VALUES ('$id_peg','$username','$password','2')");
        }
        public function updateaddAkun($id_peg,$username,$password,$id,$roles)
        {
            mysqli_query($this->koneksi,"UPDATE `users` SET `id_users`='$id',`id_pegawai`='$id_peg',`username`='$username',`password`='$password',`roles`='$roles'");
        }
        public function DeleteaddAkun($query)
        {
         mysqli_query($this->koneksi,$query);
        }
        //customer
        public function addCostumer($id_costumer,$nm_costumer,$email,$no_telp,$alamat)
        {
            mysqli_query($this->koneksi,"INSERT INTO costummer(id_costumer, nm_costumer, alamat, email, no_telp) VALUES ('$id_costumer','$nm_costumer','$alamat','$email','$no_telp')");
        }
        //kat produk
        public function addKatProduk($nm_kat,$ketrangan)
        {
            mysqli_query($this->koneksi,"INSERT INTO kat_produk(nm_kategori, keterangan) VALUES ('$nm_kat','$ketrangan')");
        }
        public function updateKatProduk($id_kategori,$nm_kat,$ketrangan,$id)
        {
            mysqli_query($this->koneksi,"UPDATE `kat_produk` SET `id_kategori`='$id_kategori',`nm_kategori`='$nm_kat',`keterangan`='$ketrangan' WHERE id_kategori='$id'");
        }
        public function DeleteKatProduk($query)
        {
         mysqli_query($this->koneksi,$query);
        }
        //satuan
        public function addSatuan($nm_sat,$ketrangan)
        {
            mysqli_query($this->koneksi,"INSERT INTO satuan(nm_satuan, keterangan) VALUES ('$nm_sat','$ketrangan')");
        }
        public function updateSatuan($id_satuan,$nm_sat,$ketrangan,$id)
        {
            mysqli_query($this->koneksi,"UPDATE `satuan` SET `id_satuan`='$id_satuan', `nm_satuan`='$nm_sat', `keterangan`='$ketrangan' WHERE id_satuan='$id'");
        }
        public function DeleteSatuan($query)
        {
         mysqli_query($this->koneksi,$query);
        }
        // supplier
        public function addSupplier($nm_supplier,$email,$no_telp,$alamat)
        {
            mysqli_query($this->koneksi,"INSERT INTO supplier(nm_supplier, alamat, no_telp, email) VALUES ('$nm_supplier','$alamat','$no_telp','$email')");
        }
        public function updateSupplier($id,$nm_supplier,$email,$no_telp,$alamat)
        {
            mysqli_query($this->koneksi,"UPDATE `supplier` SET `nm_supplier`='$nm_supplier',`alamat`='$alamat',`no_telp`='$no_telp',`email`='$email' WHERE id_supplier='$id'");
        }
        public function DeleteSupplier($query)
        {
         mysqli_query($this->koneksi,$query);
        }
        // produk
        public function addProduk($id_produk,$merek,$id_supplier,$id_satuan,$id_kategori,$deskripsi,$Stok)
        {
            mysqli_query($this->koneksi,"INSERT INTO produk(id_produk, nm_produk, id_supplier, deskripsi,stok, id_satuan, id_kategori) VALUES ('$id_produk','$merek','$id_supplier','$deskripsi','$Stok','$id_satuan','$id_kategori')");
        }
        public function updateProduk($id_produk,$merek,$id_supplier,$id_satuan,$id_kategori,$deskripsi,$stok,$id)
        {
            mysqli_query($this->koneksi,"UPDATE `produk` SET `id_produk`='$id_produk',`nm_produk`='$merek',`id_supplier`='$id_supplier',`deskripsi`='$deskripsi',`stok`='$stok',`id_satuan`='$id_satuan',`id_kategori`='$id_kategori' WHERE id_produk='$id'");
        }
        public function Deleteproduk($query)
        {
         mysqli_query($this->koneksi,$query);

        }

    }
    
?>