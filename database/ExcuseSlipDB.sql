drop database excuseslipdb;
CREATE DATABASE ExcuseSlipDB;
USE ExcuseSlipDB;

-- App Users Table
CREATE TABLE app_users (
    user_id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(100) NOT NULL,
    user_type ENUM('student', 'counselor', 'dean', 'teacher') NOT NULL
);

-- Students Table
CREATE TABLE students (
    student_id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT NOT NULL,
    name VARCHAR(100) NOT NULL,
    degree_program VARCHAR(100) NOT NULL,
    year_level INT NOT NULL,
    FOREIGN KEY (user_id) REFERENCES app_users (user_id)
);

-- Teachers Table
CREATE TABLE teachers (
    teacher_id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT NOT NULL,
    name VARCHAR(100) NOT NULL,
    subject_area VARCHAR(100) NOT NULL,
    FOREIGN KEY (user_id) REFERENCES app_users (user_id)
);

-- Counselors Table
CREATE TABLE counselors (
    counselor_id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT NOT NULL,
    name VARCHAR(100) NOT NULL,
    FOREIGN KEY (user_id) REFERENCES app_users (user_id)
);

-- Deans Table
CREATE TABLE deans (
    dean_id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT NOT NULL,
    name VARCHAR(100) NOT NULL,
    FOREIGN KEY (user_id) REFERENCES app_users (user_id)
);

-- ExcuseSlips Table
CREATE TABLE excuse_slips (
    excuse_slip_id INT PRIMARY KEY AUTO_INCREMENT,
    student_id INT NOT NULL,
    course_absent VARCHAR(100) NOT NULL,
    reason_for_absence TEXT NOT NULL,
    start_date DATE NOT NULL,
    end_date DATE NOT NULL,
    supporting_document VARCHAR(255),
    FOREIGN KEY (student_id) REFERENCES students (student_id)
);

-- Feedback Table
CREATE TABLE feedback (
    feedback_id INT PRIMARY KEY AUTO_INCREMENT,
    excuse_slip_id INT NOT NULL,
    feedback_text TEXT NOT NULL,
    feedback_type ENUM('approval', 'rejection', 'remarks') NOT NULL,
    FOREIGN KEY (excuse_slip_id) REFERENCES excuse_slips (excuse_slip_id)
);
