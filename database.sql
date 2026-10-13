-- Alumni Management System Database Schema
-- Create database
CREATE DATABASE IF NOT EXISTS alumni_system;
USE alumni_system;

-- Users table for authentication
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    role ENUM('admin', 'staff', 'alumni') DEFAULT 'alumni',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Alumni Database
CREATE TABLE alumni (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    student_id VARCHAR(20) UNIQUE NOT NULL,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    phone VARCHAR(20),
    date_of_birth DATE,
    gender ENUM('male', 'female', 'other'),
    address TEXT,
    city VARCHAR(50),
    state VARCHAR(50),
    country VARCHAR(50) DEFAULT 'USA',
    graduation_year INT NOT NULL,
    degree VARCHAR(100),
    major VARCHAR(100),
    batch VARCHAR(20),
    current_employer VARCHAR(100),
    job_title VARCHAR(100),
    linkedin_url VARCHAR(255),
    profile_picture VARCHAR(255),
    is_active BOOLEAN DEFAULT TRUE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE SET NULL
);

-- Transcript Requests
CREATE TABLE transcript_requests (
    id INT AUTO_INCREMENT PRIMARY KEY,
    alumni_id INT NOT NULL,
    request_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    purpose TEXT NOT NULL,
    delivery_method ENUM('pickup', 'email', 'mail') DEFAULT 'email',
    delivery_address TEXT,
    status ENUM('pending', 'processing', 'completed', 'rejected') DEFAULT 'pending',
    admin_notes TEXT,
    completed_date TIMESTAMP NULL,
    FOREIGN KEY (alumni_id) REFERENCES alumni(id) ON DELETE CASCADE
);

-- Graduate Tracking
CREATE TABLE graduate_tracking (
    id INT AUTO_INCREMENT PRIMARY KEY,
    alumni_id INT NOT NULL,
    tracking_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    current_status ENUM('employed', 'self_employed', 'unemployed', 'further_studies', 'other') NOT NULL,
    company_name VARCHAR(100),
    job_title VARCHAR(100),
    industry VARCHAR(50),
    salary_range VARCHAR(50),
    work_location VARCHAR(100),
    is_relevant_to_degree BOOLEAN DEFAULT TRUE,
    notes TEXT,
    FOREIGN KEY (alumni_id) REFERENCES alumni(id) ON DELETE CASCADE
);

-- Job Placement Logs
CREATE TABLE job_placements (
    id INT AUTO_INCREMENT PRIMARY KEY,
    alumni_id INT NOT NULL,
    company_name VARCHAR(100) NOT NULL,
    job_title VARCHAR(100) NOT NULL,
    placement_date DATE NOT NULL,
    salary DECIMAL(10, 2),
    job_type ENUM('full_time', 'part_time', 'contract', 'internship') DEFAULT 'full_time',
    industry VARCHAR(50),
    location VARCHAR(100),
    description TEXT,
    is_verified BOOLEAN DEFAULT FALSE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (alumni_id) REFERENCES alumni(id) ON DELETE CASCADE
);

-- Alumni Events
CREATE TABLE events (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100) NOT NULL,
    description TEXT,
    event_date DATE NOT NULL,
    event_time TIME,
    location VARCHAR(255),
    venue VARCHAR(100),
    max_attendees INT,
    registration_deadline DATE,
    event_type ENUM('reunion', 'networking', 'seminar', 'workshop', 'other') DEFAULT 'networking',
    image_url VARCHAR(255),
    is_active BOOLEAN DEFAULT TRUE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Event Registrations
CREATE TABLE event_registrations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    event_id INT NOT NULL,
    alumni_id INT NOT NULL,
    registration_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    payment_status ENUM('pending', 'paid', 'free', 'cancelled') DEFAULT 'pending',
    payment_amount DECIMAL(10, 2) DEFAULT 0.00,
    notes TEXT,
    FOREIGN KEY (event_id) REFERENCES events(id) ON DELETE CASCADE,
    FOREIGN KEY (alumni_id) REFERENCES alumni(id) ON DELETE CASCADE,
    UNIQUE KEY unique_registration (event_id, alumni_id)
);

-- Batch Reunions
CREATE TABLE batch_reunions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    batch VARCHAR(20) NOT NULL,
    reunion_title VARCHAR(100) NOT NULL,
    reunion_date DATE NOT NULL,
    location VARCHAR(255),
    description TEXT,
    organizer_id INT,
    budget DECIMAL(10, 2),
    expected_attendees INT,
    status ENUM('planning', 'confirmed', 'completed', 'cancelled') DEFAULT 'planning',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (organizer_id) REFERENCES alumni(id) ON DELETE SET NULL
);

-- Batch Reunion Attendees
CREATE TABLE reunion_attendees (
    id INT AUTO_INCREMENT PRIMARY KEY,
    reunion_id INT NOT NULL,
    alumni_id INT NOT NULL,
    registration_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    attendance_status ENUM('registered', 'confirmed', 'attended', 'declined') DEFAULT 'registered',
    dietary_requirements TEXT,
    FOREIGN KEY (reunion_id) REFERENCES batch_reunions(id) ON DELETE CASCADE,
    FOREIGN KEY (alumni_id) REFERENCES alumni(id) ON DELETE CASCADE,
    UNIQUE KEY unique_attendee (reunion_id, alumni_id)
);

-- Donor Campaigns
CREATE TABLE donor_campaigns (
    id INT AUTO_INCREMENT PRIMARY KEY,
    campaign_name VARCHAR(100) NOT NULL,
    description TEXT,
    goal_amount DECIMAL(10, 2) NOT NULL,
    current_amount DECIMAL(10, 2) DEFAULT 0.00,
    start_date DATE NOT NULL,
    end_date DATE NOT NULL,
    campaign_type ENUM('scholarship', 'infrastructure', 'research', 'general', 'other') DEFAULT 'general',
    is_active BOOLEAN DEFAULT TRUE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Donations
CREATE TABLE donations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    campaign_id INT NOT NULL,
    alumni_id INT,
    donor_name VARCHAR(100),
    amount DECIMAL(10, 2) NOT NULL,
    donation_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    payment_method ENUM('credit_card', 'bank_transfer', 'check', 'other') DEFAULT 'credit_card',
    is_anonymous BOOLEAN DEFAULT FALSE,
    notes TEXT,
    FOREIGN KEY (campaign_id) REFERENCES donor_campaigns(id) ON DELETE CASCADE,
    FOREIGN KEY (alumni_id) REFERENCES alumni(id) ON DELETE SET NULL
);

-- Certificate Reprint Requests
CREATE TABLE certificate_requests (
    id INT AUTO_INCREMENT PRIMARY KEY,
    alumni_id INT NOT NULL,
    certificate_type ENUM('degree', 'transcript', 'completion', 'other') DEFAULT 'degree',
    reason TEXT NOT NULL,
    request_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    status ENUM('pending', 'processing', 'completed', 'rejected') DEFAULT 'pending',
    admin_notes TEXT,
    completed_date TIMESTAMP NULL,
    fee DECIMAL(10, 2) DEFAULT 0.00,
    payment_status ENUM('pending', 'paid', 'waived') DEFAULT 'pending',
    FOREIGN KEY (alumni_id) REFERENCES alumni(id) ON DELETE CASCADE
);

-- Newsletters
CREATE TABLE newsletters (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100) NOT NULL,
    subject VARCHAR(150),
    content TEXT NOT NULL,
    sent_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    sent_by INT,
    recipient_count INT DEFAULT 0,
    status ENUM('draft', 'sent', 'scheduled') DEFAULT 'draft',
    FOREIGN KEY (sent_by) REFERENCES users(id) ON DELETE SET NULL
);

-- Newsletter Subscriptions
CREATE TABLE newsletter_subscriptions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    alumni_id INT NOT NULL,
    is_subscribed BOOLEAN DEFAULT TRUE,
    subscription_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    unsubscribe_date TIMESTAMP NULL,
    FOREIGN KEY (alumni_id) REFERENCES alumni(id) ON DELETE CASCADE,
    UNIQUE KEY unique_subscription (alumni_id)
);

-- Surveys
CREATE TABLE surveys (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100) NOT NULL,
    description TEXT,
    start_date DATE NOT NULL,
    end_date DATE NOT NULL,
    is_active BOOLEAN DEFAULT TRUE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Survey Questions
CREATE TABLE survey_questions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    survey_id INT NOT NULL,
    question_text TEXT NOT NULL,
    question_type ENUM('text', 'multiple_choice', 'rating', 'boolean') DEFAULT 'text',
    options TEXT,
    is_required BOOLEAN DEFAULT TRUE,
    question_order INT DEFAULT 0,
    FOREIGN KEY (survey_id) REFERENCES surveys(id) ON DELETE CASCADE
);

-- Survey Responses
CREATE TABLE survey_responses (
    id INT AUTO_INCREMENT PRIMARY KEY,
    survey_id INT NOT NULL,
    alumni_id INT NOT NULL,
    response_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (survey_id) REFERENCES surveys(id) ON DELETE CASCADE,
    FOREIGN KEY (alumni_id) REFERENCES alumni(id) ON DELETE CASCADE,
    UNIQUE KEY unique_response (survey_id, alumni_id)
);

-- Survey Answers
CREATE TABLE survey_answers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    response_id INT NOT NULL,
    question_id INT NOT NULL,
    answer_text TEXT,
    FOREIGN KEY (response_id) REFERENCES survey_responses(id) ON DELETE CASCADE,
    FOREIGN KEY (question_id) REFERENCES survey_questions(id) ON DELETE CASCADE
);

-- Feedback
CREATE TABLE feedback (
    id INT AUTO_INCREMENT PRIMARY KEY,
    alumni_id INT NOT NULL,
    category ENUM('general', 'event', 'website', 'services', 'other') DEFAULT 'general',
    subject VARCHAR(150),
    message TEXT NOT NULL,
    rating INT DEFAULT 0,
    submitted_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    status ENUM('new', 'reviewed', 'resolved') DEFAULT 'new',
    admin_response TEXT,
    FOREIGN KEY (alumni_id) REFERENCES alumni(id) ON DELETE CASCADE
);

-- Activity Log
CREATE TABLE activity_log (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    action VARCHAR(100) NOT NULL,
    table_name VARCHAR(50),
    record_id INT,
    ip_address VARCHAR(45),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE SET NULL
);

-- Insert default admin user (password: admin123)
INSERT INTO users (username, password, email, role) VALUES
('admin', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'leahbatal40@gmail.com', 'admin');
