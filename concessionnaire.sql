-- Création de la base de données
CREATE DATABASE IF NOT EXISTS autofictif CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE autofictif;

-- Table véhicules
CREATE TABLE vehicules (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL,
    type VARCHAR(50) NOT NULL,
    energie VARCHAR(30) NOT NULL,
    prix INT NOT NULL,
    description TEXT,
    image VARCHAR(255),
    puissance VARCHAR(50),
    boite VARCHAR(50),
    places INT,
    couleur VARCHAR(50),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Exemple d'insertion de véhicules
INSERT INTO vehicules (nom, type, energie, prix, description, image, puissance, boite, places, couleur)
VALUES
('Audi e-tron GT quattro', 'Sport', 'Electrique', 32000, 'Puissance, élégance et technologie de pointe.', 'https://media.audi.com/is/image/audi/country/fr/assets/fr/homepage/2025/mai/13_05/1920x1080_etron_gt_quattro.jpg?width=744', '220 ch', 'Automatique', 4, 'Rouge'),
('Audi S e-tron GT', 'Citadine', 'Electrique', 21000, 'Puissance, élégance et technologie de pointe.', 'https://media.audi.com/is/image/audi/country/fr/assets/fr/campagnes/gamme-e-tron-gt/1920x1080_header_gamme_e-tron_GT_07052025.jpg?width=1920', '110 ch', 'Manuelle', 5, 'Bleu'),
('Audi A5 Avant e-hybrid', 'SUV', 'Hybride', 28000, 'Confort et sécurité pour toute la famille.', 'https://media.audi.com/is/image/audi/oadd/fr/assets/homepage/1920x1080_A5avantehybrid_060525.jpg?width=744', '150 ch', 'Automatique', 7, 'Gris'),
('EcoMove', 'Citadine', 'Électrique', 25000, '100% électrique, zéro émission.', 'https://images.unsplash.com/photo-1517336714731-489689fd1ca8?auto=format&fit=crop&w=800&q=80', '90 ch', 'Automatique', 5, 'Vert'),
('Adventure 4x4', 'SUV', 'Essence', 35000, 'Pour les amateurs de sensations fortes.', 'https://images.unsplash.com/photo-1503736334956-4c8f8e92946d?auto=format&fit=crop&w=800&q=80', '200 ch', 'Manuelle', 5, 'Noir');

-- (Optionnel) Table utilisateurs
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

ALTER TABLE users ADD COLUMN role VARCHAR(20) NOT NULL DEFAULT 'visiteur';

-- Exemple d'admin
INSERT INTO users (name, email, password, role) VALUES
('Admin', 'admin@concession.fr', '$2y$10$NysiClWv2ewszWK7l//0.uHWazZAWkPXhh/1j3R8/0kfdDHwAt58O', 'admin');

CREATE TABLE actualites (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titre VARCHAR(255) NOT NULL,
    contenu TEXT NOT NULL,
    image VARCHAR(255),
    categorie VARCHAR(50),
    date_publication DATE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);