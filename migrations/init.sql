CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    username VARCHAR(100) NOT NULL,
    password VARCHAR(100) NOT NULL,
    verification_at datetime NULL,
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE roles (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL
);

CREATE TABLE role_routes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    role_id INT NOT NULL,
    route_path VARCHAR(100) NOT NULL,
    CONSTRAINT fk_role_routes_role_id FOREIGN KEY (role_id) REFERENCES roles(id) ON DELETE CASCADE
);

CREATE TABLE user_roles (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    role_id INT NOT NULL,
    CONSTRAINT fk_user_roles_user_id FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE,
    CONSTRAINT fk_user_roles_role_id FOREIGN KEY (role_id) REFERENCES roles(id) ON DELETE CASCADE
);

CREATE TABLE application (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    address TEXT NOT NULL,
    phone VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL
);

CREATE TABLE migrations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    filename VARCHAR(100) NOT NULL,
    execute_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE daerah (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL
);

CREATE TABLE cabang (
    id INT AUTO_INCREMENT PRIMARY KEY,
    daerah_id INT NOT NULL,
    nama VARCHAR(100) NOT NULL
);

CREATE TABLE ranting (
    id INT AUTO_INCREMENT PRIMARY KEY,
    daerah_id INT NOT NULL,
    cabang_id INT NOT NULL,
    nama VARCHAR(100) NOT NULL
);

CREATE TABLE sekolah (
    id INT AUTO_INCREMENT PRIMARY KEY,
    daerah_id INT NOT NULL,
    cabang_id INT NOT NULL,
    ranting_id INT NOT NULL,
    nama VARCHAR(100) NOT NULL,
    gugus_depan VARCHAR(100) NOT NULL
);

CREATE TABLE sertifikat (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    nama VARCHAR(100) NOT NULL,
    tahun VARCHAR(100) NOT NULL,
    berkas VARCHAR(100) NOT NULL,
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE pramuka (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    daerah_id INT NOT NULL,
    cabang_id INT NOT NULL,
    ranting_id INT NOT NULL,
    sekolah_id INT NOT NULL,
    no_anggota VARCHAR(100) NOT NULL,
    golongan VARCHAR(100) NOT NULL,
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE biodata (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    nama VARCHAR(100) DEFAULT NULL,
    jenis_kelamin VARCHAR(100) DEFAULT NULL,
    agama VARCHAR(100) DEFAULT NULL,
    kewarganegaraan VARCHAR(100) DEFAULT NULL,
    tempat_lahir VARCHAR(100) DEFAULT NULL,
    tanggal_lahir VARCHAR(100) DEFAULT NULL,
    golongan_darah VARCHAR(100) DEFAULT NULL,
    NIK VARCHAR(100) DEFAULT NULL,
    alamat_rumah TEXT DEFAULT NULL,
    provinsi VARCHAR(100) DEFAULT NULL,
    kabupaten VARCHAR(100) DEFAULT NULL,
    kode_pos VARCHAR(100) DEFAULT NULL,
    no_hp VARCHAR(100) DEFAULT NULL,
    email VARCHAR(100) DEFAULT NULL,
    asal_sekolah VARCHAR(100) DEFAULT NULL,
    provinsi_sekolah VARCHAR(100) DEFAULT NULL,
    kabupaten_sekolah VARCHAR(100) DEFAULT NULL,
    jurusan VARCHAR(100) DEFAULT NULL,
    tahun_masuk VARCHAR(100) DEFAULT NULL,
    alamat_sekolah TEXT DEFAULT NULL,
    NISN VARCHAR(100) DEFAULT NULL,
    nama_ayah VARCHAR(100) DEFAULT NULL,
    tanggal_lahir_ayah VARCHAR(100) DEFAULT NULL,
    pekerjaan_ayah VARCHAR(100) DEFAULT NULL,
    penghasilan_ayah VARCHAR(100) DEFAULT NULL,
    no_hp_ayah VARCHAR(100) DEFAULT NULL,
    nama_ibu VARCHAR(100) DEFAULT NULL,
    tanggal_lahir_ibu VARCHAR(100) DEFAULT NULL,
    pekerjaan_ibu VARCHAR(100) DEFAULT NULL,
    penghasilan_ibu VARCHAR(100) DEFAULT NULL,
    no_hp_ibu VARCHAR(100) DEFAULT NULL,
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
);