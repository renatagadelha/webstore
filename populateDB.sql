-- -----------------------------------------------------

-- Procedure Create Clients

-- -----------------------------------------------------

DELIMITER $$
 CREATE PROCEDURE prCreateClient(
        param_name varchar(45), 
        param_lastname varchar(45), 
        param_email varchar(45),
        param_phone varchar(20),
        param_street varchar(45),
        param_complement varchar(20),
        param_state varchar(45),
        param_country varchar(45),
        param_zip varchar(20),
        param_password varchar(45)
    )
  BEGIN
   START TRANSACTION;
	INSERT INTO client (
        client_name, client_lastname, client_email, client_phone, client_street, client_complement, client_state,
        client_country, client_zip, client_password
    ) VALUES (
        param_name, param_lastname, param_email, param_phone, param_street, param_complement, param_state,
        param_country, param_zip, param_password
    );
   COMMIT;
  END$$
DELIMITER ;


-- -----------------------------------------------------

-- Procedure Create Product

-- -----------------------------------------------------

DELIMITER $$
 CREATE PROCEDURE prCreateProduct(
        param_code varchar(10), 
        param_title varchar(45), 
        param_about varchar(255),
        param_image varchar(100),
        param_price double,
        param_quantity smallint
    )
  BEGIN
   START TRANSACTION;
	INSERT INTO product (
        product_code, product_title, product_about, product_image, product_price, product_quantity
    ) VALUES (
        param_code, param_title, param_about, param_image, param_price, param_quantity
    );
   COMMIT;
  END$$
DELIMITER ;

-- -----------------------------------------------------

-- Create Products

-- -----------------------------------------------------

CALL prCreateProduct('PRS0001','Large Margaux Green Leather Satchel','An optional, adjustable strap and top handles make it a cinch to carry this structured bag, shaped from pebbled leather and accented with gleaming hardware.','beautiful-elegance-luxury-fashion-green-handbag_74190-4885.jpg','298.00','10');
CALL prCreateProduct('PRS0002','Large Margaux Pink Leather Work Tote','Richly grained leather defines a spacious and impeccably designed tote furnished with multiple carrying options and organizational pockets.','beautiful-elegance-luxury-fashion-pink-women-handbag_1203-7653.jpg','378.50','25');
CALL prCreateProduct('PRS0003','Mini Stella Pink Leather Satchel','This citrus-hued leather satchel in a scaled-down silhouette is polished enough for the office but with casual-cool style perfect for everyday wear.','pink-handbags_1203-7829.jpg','136.81','31');