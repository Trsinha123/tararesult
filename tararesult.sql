
CREATE TABLE results (
  id INT AUTO_INCREMENT PRIMARY KEY,
  roll_no VARCHAR(20) NOT NULL,
  name VARCHAR(100) NOT NULL,
  subject VARCHAR(100) NOT NULL,
  theory INT NOT NULL,
  practical INT NOT NULL
);

INSERT INTO results (roll_no, name, subject, theory, practical) VALUES
('101', 'Ravi Kumar', 'Computer Basics', 70, 18),
('102', 'Sita Verma', 'Computer Basics', 65, 17);
