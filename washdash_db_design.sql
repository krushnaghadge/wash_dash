-- Create Database
CREATE DATABASE washdash_db;
USE washdash_db;

-- Create users_tbl
CREATE TABLE users_tbl (
    user_id INT PRIMARY KEY AUTO_INCREMENT,
    user_role ENUM('customer', 'driver', 'vendor') NOT NULL,
    user_mobile_number VARCHAR(15) UNIQUE NOT NULL,
    user_password_hash VARCHAR(255),
    user_name VARCHAR(100),
    user_email VARCHAR(100),
    user_created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Create addresses_tbl
CREATE TABLE addresses_tbl (
    address_id INT PRIMARY KEY AUTO_INCREMENT,
    address_user_id INT,
    address_type ENUM('home', 'company', 'other'),
    address_text VARCHAR(255),
    address_latitude DECIMAL(10,8),
    address_longitude DECIMAL(11,8),
    FOREIGN KEY (address_user_id) REFERENCES users_tbl(user_id) ON DELETE CASCADE
);
-- Create vendor_categories_tbl (New Table)
CREATE TABLE vendor_categories_tbl (
    category_id INT PRIMARY KEY AUTO_INCREMENT,
    category_name VARCHAR(100) UNIQUE NOT NULL
);

-- Insert Default Vendor Categories (Optional)
INSERT INTO vendor_categories_tbl (category_name) VALUES
('Washing, Dry Cleaning & Ironing'),
('Only Ironing');

-- Create vendors_tbl
CREATE TABLE vendors_tbl (
    vendor_id INT PRIMARY KEY AUTO_INCREMENT,
    vendor_user_id INT UNIQUE,
    vendor_category_id INT,
    vendor_shop_name VARCHAR(255),
    vendor_location VARCHAR(255),
    vendor_contact_number VARCHAR(15),
    vendor_commission_percentage DECIMAL(5,2),
    vendor_created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (vendor_user_id) REFERENCES users_tbl(user_id) ON DELETE CASCADE
);

-- Create drivers_tbl
CREATE TABLE drivers_tbl (
    driver_id INT PRIMARY KEY AUTO_INCREMENT,
    driver_user_id INT UNIQUE,
    driver_vehicle_type ENUM('sedan', 'hatchback', 'suv'),
    driver_invitation_code VARCHAR(50),
    driver_license_photo VARCHAR(255),
    driver_vehicle_document VARCHAR(255),
    driver_created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (driver_user_id) REFERENCES users_tbl(user_id) ON DELETE CASCADE
);

-- Create laundry_shops_tbl
CREATE TABLE laundry_shops_tbl (
    shop_id INT PRIMARY KEY AUTO_INCREMENT,
    shop_vendor_id INT UNIQUE,
    shop_name VARCHAR(255),
    shop_location VARCHAR(255),
    shop_rating DECIMAL(2,1) DEFAULT 0,
    shop_created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (shop_vendor_id) REFERENCES vendors_tbl(vendor_id) ON DELETE CASCADE
);

-- Create services_tbl
CREATE TABLE services_tbl (
    service_id INT PRIMARY KEY AUTO_INCREMENT,
    service_vendor_id INT,
    service_name ENUM('dry_clean', 'laundry', 'ironing'),
    service_price DECIMAL(10,2),
    FOREIGN KEY (service_vendor_id) REFERENCES vendors_tbl(vendor_id) ON DELETE CASCADE
);

-- Create orders_tbl
CREATE TABLE orders_tbl (
    order_id INT PRIMARY KEY AUTO_INCREMENT,
    order_user_id INT,
    order_vendor_id INT,
    order_driver_id INT DEFAULT NULL,
    order_address_id INT,
    order_total_amount DECIMAL(10,2),
    order_payment_status ENUM('pending', 'paid', 'failed'),
    order_status ENUM('placed', 'processing', 'picked_up', 'delivered', 'completed', 'cancelled'),
    order_created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (order_user_id) REFERENCES users_tbl(user_id) ON DELETE CASCADE,
    FOREIGN KEY (order_vendor_id) REFERENCES vendors_tbl(vendor_id) ON DELETE CASCADE,
    FOREIGN KEY (order_driver_id) REFERENCES drivers_tbl(driver_id) ON DELETE SET NULL,
    FOREIGN KEY (order_address_id) REFERENCES addresses_tbl(address_id) ON DELETE SET NULL
);

-- Create order_details_tbl
CREATE TABLE order_details_tbl (
    order_detail_id INT PRIMARY KEY AUTO_INCREMENT,
    order_detail_order_id INT,
    order_detail_service_id INT,
    order_detail_clothes_type VARCHAR(100),
    order_detail_remarks TEXT,
    order_detail_photo VARCHAR(255) DEFAULT NULL,
    FOREIGN KEY (order_detail_order_id) REFERENCES orders_tbl(order_id) ON DELETE CASCADE,
    FOREIGN KEY (order_detail_service_id) REFERENCES services_tbl(service_id) ON DELETE CASCADE
);

-- Create payments_tbl
CREATE TABLE payments_tbl (
    payment_id INT PRIMARY KEY AUTO_INCREMENT,
    payment_order_id INT,
    payment_user_id INT,
    payment_amount DECIMAL(10,2),
    payment_method ENUM('credit_card', 'debit_card', 'upi', 'wallet'),
    payment_status ENUM('success', 'failed', 'refunded'),
    payment_created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (payment_order_id) REFERENCES orders_tbl(order_id) ON DELETE CASCADE,
    FOREIGN KEY (payment_user_id) REFERENCES users_tbl(user_id) ON DELETE CASCADE
);

-- Create ratings_tbl
CREATE TABLE ratings_tbl (
    rating_id INT PRIMARY KEY AUTO_INCREMENT,
    rating_by_user_id INT,
    rating_to_user_id INT,
    rating_value INT CHECK (rating_value BETWEEN 1 AND 5),
    rating_created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (rating_by_user_id) REFERENCES users_tbl(user_id) ON DELETE CASCADE,
    FOREIGN KEY (rating_to_user_id) REFERENCES users_tbl(user_id) ON DELETE CASCADE
);

-- Create notifications_tbl
CREATE TABLE notifications_tbl (
    notification_id INT PRIMARY KEY AUTO_INCREMENT,
    notification_user_id INT,
    notification_message TEXT,
    notification_is_read BOOLEAN DEFAULT FALSE,
    notification_created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (notification_user_id) REFERENCES users_tbl(user_id) ON DELETE CASCADE
);

-- Create wallet_tbl
CREATE TABLE wallet_tbl (
    wallet_id INT PRIMARY KEY AUTO_INCREMENT,
    wallet_user_id INT,
    wallet_current_balance DECIMAL(10,2) DEFAULT 0,
    FOREIGN KEY (wallet_user_id) REFERENCES users_tbl(user_id) ON DELETE CASCADE
);

-- Create wallet_transactions_tbl
CREATE TABLE wallet_transactions_tbl (
    wallet_transaction_id INT PRIMARY KEY AUTO_INCREMENT,
    wallet_transaction_user_id INT,
    wallet_transaction_amount DECIMAL(10,2),
    wallet_transaction_type ENUM('credit', 'debit'),
    wallet_transaction_description TEXT,
    wallet_transaction_created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (wallet_transaction_user_id) REFERENCES users_tbl(user_id) ON DELETE CASCADE
);

-- Create invoices_tbl
CREATE TABLE invoices_tbl (
    invoice_id INT PRIMARY KEY AUTO_INCREMENT,
    invoice_vendor_id INT,
    invoice_total_amount DECIMAL(10,2),
    invoice_generated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (invoice_vendor_id) REFERENCES vendors_tbl(vendor_id) ON DELETE CASCADE
);

-- Create privacy_policy_tbl
CREATE TABLE privacy_policy_tbl (
    policy_id INT AUTO_INCREMENT PRIMARY KEY,
    policy_for ENUM('customer_app', 'vendor_app', 'driver_app') NOT NULL,  -- Specifies for whom the policy is
    policy_text TEXT NOT NULL,         -- The full privacy policy content
    policy_status ENUM('active', 'deleted') NOT NULL DEFAULT 'active',  -- Indicates if the policy is active or deleted
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);
CREATE TABLE faq_tbl (
    faq_id INT AUTO_INCREMENT PRIMARY KEY,
    faq_category ENUM('customer', 'vendor', 'driver') NOT NULL,
    faq_question TEXT NOT NULL,
    faq_answer TEXT NOT NULL,
    faq_status ENUM('active', 'delete') DEFAULT 'active',
    faq_created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
