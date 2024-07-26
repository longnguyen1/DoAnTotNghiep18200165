-- Active: 1719131742506@@127.0.0.1@3306@project_1
DROP DATABASE IF EXISTS project_1;
CREATE DATABASE project_1;
USE project_1;

CREATE TABLE categories (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL UNIQUE,
    status TINYINT(1) DEFAULT 1
);

CREATE TABLE experts (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    status TINYINT(1) DEFAULT 1,
    email VARCHAR(100) NOT NULL UNIQUE,
    image VARCHAR(100) NOT NULL,
    descriptions TEXT NULL,
    category_id INT NOT NULL,
    FOREIGN KEY (category_id) REFERENCES categories(id)
);

CREATE TABLE admins (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(100) NOT NULL,
    avatar VARCHAR(100) NOT NULL,
    last_login TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO admins (name, email, password, avatar)
VALUES
('Nguyễn Thành Trung', 'nguyenthanhtrung601@gmail.com', '1234567', 'default_avatar.jpg'),
('Nguyễn Thành Long', 'nguyenthanhlong601@gmail.com', '123456', 'default_avatar.jpg');

INSERT INTO categories (name) VALUES
('GRAPHIC DESIGN'),
('SEO & MARKETING'),
('BUSINESS & FINANCE'),
('VIDEO & PHOTOGRAPHY'),
('COMPUTER SCIENCE'),
('HEALTH & FITNESS');

-- Note: Removed incorrect INSERT INTO experts statements

INSERT INTO experts (name, email, descriptions, category_id)
VALUES
('Tiến sĩ Lê Xuân Nghĩa', '123@gmail.com',
'Một nhà kinh tế Việt Nam, được biết đến với chuyên môn trong lĩnh vực tài chính, tiền tệ và ngân hàng. Ông đã hoạt động trong lĩnh vực kinh tế nhà nước và làm cố vấn kinh tế cho các đời Thủ tướng Việt Nam và Lào', 1),
('Nguyễn Thanh Sang', '1234@gmail.com',
'là một chuyên gia công nghệ thông tin back-end có gần 4 năm kinh nghiệm làm việc tại nhiều công ty start-up lớn. Điểm mạnh của anh là nắm rõ toàn bộ quy trình để phát triển web như xây dựng ý tưởng, thiết kế, phát triển và thực thi. Anh có thế mạnh với ngôn ngữ lập trình Node.js, thành thạo cơ sở dữ liệu và hệ thống như MySQL, PostgreSQL và MongoDB.', 5);
