
CREATE TABLE roles (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50) NOT NULL
);

CREATE TABLE utilisateurs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100),
    prenom VARCHAR(100),
    email VARCHAR(100) UNIQUE,
    mot_de_passe VARCHAR(255),
    telephone VARCHAR(20),
    adresse VARCHAR(255),
    groupe_tp VARCHAR(50),
    groupe_td VARCHAR(50),
    promotion VARCHAR(50),
    role_id INT,
    FOREIGN KEY (role_id) REFERENCES roles(id)
);

CREATE TABLE salles (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL,
    disponible TINYINT(1) DEFAULT 1
);

CREATE TABLE materiels (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL,
    quantite INT DEFAULT 1,
    disponible TINYINT(1) DEFAULT 1
);

CREATE TABLE reservations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    utilisateur_id INT,
    date_reservation DATE,
    creneau VARCHAR(50),
    motif TEXT,
    liste_etudiants TEXT,
    commentaire TEXT,
    valide TINYINT(1) DEFAULT 0,
    date_validation DATETIME,
    FOREIGN KEY (utilisateur_id) REFERENCES utilisateurs(id)
);
