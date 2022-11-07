CREATE DATABASE fakultas;

CREATE TABLE jurusan (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    kode CHAR (4) NOT NULL, 
    nama VARCHAR (50) NOT NULL
);

CREATE TABLE mahasiswa (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    id_jurusan INTEGER NOT NULL,
    nim CHAR (8) NOT NULL,
    nama VARCHAR (50) NOT NULL,
    jenis_kelamin enum("laki-laki","perempuan") NOT NULL,
    tempat_lahir VARCHAR (50) NOT NULL,
    tanggal_lahir DATE NOT NULL,
    alamat VARCHAR (255) NOT NULL,
    FOREIGN KEY (id_jurusan) REFERENCES jurusan(id)
);

--insert data jurusan
insert into jurusan (kode,nama) values ("SI","Sistem Informasi");
insert into jurusan (kode,nama) values ("IF","Informatika");
insert into jurusan (kode,nama) values ("TI","Teknologi Informasi");

-- insert data mahasiswa
insert into mahasiswa (id_jurusan, nim, nama, jenis_kelamin, tempat_lahir, tanggal_lahir, alamat) values (1, "20241010","Kyungsoo","Laki-laki","Goyang","1993-01-12","Korea Selatan");
insert into mahasiswa (id_jurusan, nim, nama, jenis_kelamin, tempat_lahir, tanggal_lahir, alamat) values (2, "20242020","Mark lee","Laki-laki","Kanada","1999-08-02","Korea Selatan");
insert into mahasiswa (id_jurusan, nim, nama, jenis_kelamin, tempat_lahir, tanggal_lahir, alamat) values (3, "20243030","Jisoo","Perempuan","Situbondo","1995-01-03","Indonesia");

-- upadate data mahasiswa
update mahasiswa set nama = "Doh kyungsoo" where id = 1;

-- delete data mahasiswa
delete from mahasiswa where id = 3;