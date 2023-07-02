CREATE TABLE reg (
    reg_id int(11) AUTO_INCREMENT PRIMARY KEY not null,
    reg_name TINYTEXT not null,
    reg_username TINYTEXT not null, 
    reg_email TINYTEXT not null,
    reg_password LONGTEXT not null
);

CREATE TABLE patient (
    patient_id int(11) AUTO_INCREMENT PRIMARY KEY not null,
    full_name VARCHAR(255) not null,
    age VARCHAR(255) not null,
    gender VARCHAR(10) not null,
    phone_number VARCHAR(20) not null,
    email_address VARCHAR(255) not null,
    home_address VARCHAR(255) not null,
    city VARCHAR(255) not null,
    zip VARCHAR(10) not null,
    med_history VARCHAR(255) not null,
    allergies VARCHAR(255) not null,
    medications VARCHAR(255) not null,
    cmc VARCHAR(255) not null,
    procedures_undergone VARCHAR(255) not null,
    lab_results VARCHAR(255) not null,
    fmh VARCHAR(255) not null,
    social_history VARCHAR(255) not null,
    med_provider VARCHAR(255) not null
);

INSERT INTO patient (full_name, age, gender, phone_number, email_address, home_address, city, zip, med_history, allergies, medications, cmc, procedures_undergone, lab_results, fmh, social_history, med_provider) VALUES
('Sarah Johnson', '35', 'Female', '555-123-4567', 'sarah.johnson@example.com', '123 Main St', 'New York', '10001', 'Asthma, Diabetes', 'Pollen, Peanuts', 'Albuterol, Insulin', 'Hypertension', 'Tonsillectomy, Appendectomy', 'Normal blood work', 'Heart disease in family', 'Non-smoker, social drinker', 'Dr. Jane Smith'),
('Michael Lee', '50', 'Male', '555-987-6543', 'michael.lee@example.com', '456 Elm St', 'Los Angeles', '90001', 'High cholesterol, Heart disease', 'Shellfish', 'Lipitor, Plavix', 'Type 2 Diabetes', 'Cardiac catheterization', 'Elevated cholesterol levels', 'Heart disease in family', 'Non-smoker, non-drinker', 'Dr. David Kim'),
('Emily Garcia', '27', 'Female', '555-555-1212', 'emily.garcia@example.com', '789 Oak St', 'Chicago', '60601', 'Depression', 'None', 'Prozac', 'Hypertension', 'None', 'Normal blood work', 'Depression in family', 'Non-smoker, non-drinker', 'Dr. Sarah Patel'),
('William Chen', '42', 'Male', '555-555-5555', 'william.chen@example.com', '321 Pine St', 'San Francisco', '94101', 'Asthma', 'Dust', 'Advair', 'None', 'Appendectomy', 'Normal lung function tests', 'None', 'Non-smoker, social drinker', 'Dr. Jane Smith'),
('Isabella Rodriguez', '19', 'Female', '555-222-3333', 'isabella.rodriguez@example.com', '567 Maple St', 'Miami', '33101', 'None', 'None', 'None', 'None', 'None', 'Normal blood work', 'None', 'Non-smoker, non-drinker', 'Dr. David Kim'),
('Adebayo Adeboye', '29', 'Male', '555-555-4444', 'adebayo.adeboye@example.com', '456 Acacia St', 'Lagos', '101001', 'Asthma', 'Dust', 'Albuterol', 'None', 'None', 'Normal lung function tests', 'None', 'Non-smoker, non-drinker', 'Dr. Chiamaka Okoro'),
('Fatima Mohamed', '45', 'Female', '555-888-7777', 'fatima.mohamed@example.com', '789 Palm St', 'Cairo', '20201', 'Hypertension', 'None', 'Lisinopril', 'Type 2 Diabetes', 'None', 'Elevated blood pressure', 'Hypertension in family', 'Non-smoker, non-drinker', 'Dr. Ahmed Mansour'),
('Chinelo Okafor', '37', 'Female', '555-222-4444', 'chinelo.okafor@example.com', '123 Bamboo St', 'Lagos', '101001', 'Malaria', 'None', 'Coartem', 'None', 'None', 'Malaria parasite negative', 'None', 'Non-smoker, non-drinker', 'Dr. Chiamaka Okoro'),
('Emeka Obi', '51', 'Male', '555-444-3333', 'emeka.obi@example.com', '567 Ebony St', 'Abuja', '900001', 'High blood pressure', 'None', 'Hydrochlorothiazide', 'Type 2 Diabetes', 'None', 'Elevated blood pressure', 'Hypertension in family', 'Non-smoker, non-drinker', 'Dr. Aisha Ibrahim'),
('Naledi Modise', '23', 'Female', '555-777-6666', 'naledi.modise@example.com', '321 Mahogany St', 'Johannesburg', '2001', 'None', 'None', 'None', 'None', 'None', 'Normal blood work', 'None', 'Non-smoker, non-drinker', 'Dr. Thabo Malebo'), 
('Maria Hernandez', '28', 'Female', '555-555-1234', 'maria.hernandez@example.com', '456 Olive St', 'Mexico City', '05001', 'None', 'Pollen', 'Claritin', 'None', 'None', 'Normal blood work', 'None', 'Non-smoker, non-drinker', 'Dr. Juan Perez'),
('Hiroshi Tanaka', '39', 'Male', '555-777-8888', 'hiroshi.tanaka@example.com', '789 Cherry St', 'Tokyo', '100-0001', 'None', 'None', 'None', 'None', 'None', 'Normal blood work', 'None', 'Non-smoker, non-drinker', 'Dr. Kenji Nakamura'),
('Mohammed Ali', '48', 'Male', '555-123-4567', 'mohammed.ali@example.com', '123 Palm St', 'Cairo', '11411', 'Type 2 Diabetes', 'None', 'Metformin', 'Hypertension', 'Coronary angioplasty', 'Normal blood work', 'None', 'Non-smoker, non-drinker', 'Dr. Ahmed Hassan'),
('Ji-won Kim', '33', 'Female', '555-555-5555', 'jiwon.kim@example.com', '321 Birch St', 'Seoul', '04510', 'Depression, Anxiety', 'None', 'Zoloft', 'Hypertension', 'None', 'Normal blood work', 'None', 'Non-smoker, social drinker', 'Dr. Min-ji Lee'),
('Sofia Oliveira', '25', 'Female', '555-333-4444', 'sofia.oliveira@example.com', '567 Oak St', 'São Paulo', '01000', 'Asthma', 'Dust', 'Albuterol', 'None', 'None', 'Normal lung function tests', 'None', 'Non-smoker, non-drinker', 'Dr. Pedro Santos'),
('Musa Sow', '42', 'Male', '555-123-7890', 'musa.sow@example.com', '456 Acacia St', 'Dakar', 'BP 3380', 'Hypertension', 'None', 'Lisinopril', 'Type 2 Diabetes', 'None', 'Elevated blood pressure', 'None', 'Non-smoker, non-drinker', 'Dr. Fatoumata Diallo'),
('Teresa Ng', '31', 'Female', '555-666-7777', 'teresa.ng@example.com', '123 Bamboo St', 'Hong Kong', '999077', 'Migraines', 'None', 'Ibuprofen', 'None', 'None', 'Normal brain scan', 'None', 'Non-smoker, social drinker', 'Dr. Kwok Wong'),
('Oluwaseun Adekunle', '28', 'Male', '555-555-7777', 'oluwaseun.adekunle@example.com', '123 Acacia Ave', 'Lagos', '100001', 'Hypertension', 'None', 'Lisinopril', 'None', 'None', 'Elevated blood pressure', 'Hypertension in family', 'Non-smoker, non-drinker', 'Dr. Fatima Abdullah'),
('Lerato Mabena', '35', 'Female', '555-777-8888', 'lerato.mabena@example.com', '456 Jacaranda St', 'Johannesburg', '200001', 'Depression', 'None', 'Prozac', 'None', 'None', 'Normal blood work', 'Depression in family', 'Non-smoker, non-drinker', 'Dr. Sipho Mbeki'),
('Ahmed Hassan', '45', 'Male', '555-888-9999', 'ahmed.hassan@example.com', '789 Palm St', 'Cairo', '1001', 'Diabetes', 'None', 'Metformin, Insulin', 'Hypertension', 'Cataract surgery', 'Normal blood work', 'None', 'Non-smoker, non-drinker', 'Dr. Ali Mahmoud'),
('Fatou Sow', '30', 'Female', '555-222-3333', 'fatou.sow@example.com', '1010 Baobab Blvd', 'Dakar', '10001', 'Asthma', 'Dust', 'Albuterol, Fluticasone', 'Hypertension', 'None', 'Normal lung function tests', 'Asthma in family', 'Non-smoker, non-drinker', 'Dr. Amadou Diallo'),
('Chinonso Okonkwo', '25', 'Male', '555-444-5555', 'chinonso.okonkwo@example.com', '123 Aba Rd', 'Lagos', '100001', 'None', 'None', 'None', 'None', 'None', 'Normal blood work', 'None', 'Non-smoker, non-drinker', 'Dr. Chukwuma Okafor');