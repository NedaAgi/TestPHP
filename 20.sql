CREATE TABLE Category(
    categoryID int,
    categoryName varchar(255),
    details varchar(255),
    PRIMARY KEY(categoryID)
);


CREATE TABLE Product(
    productID int,
    productName varchar(255),
    details varchar(255),
    PRIMARY KEY(productID)

);

CREATE TABLE ProductCategory(
    categoryID int,
    productID int,
    PRIMARY KEY(categoryID, productID),

    CONSTRAINT fk_category
    FOREIGN KEY(categoryID) REFERENCES Category(categoryID),

    CONSTRAINT fk_product 
    FOREIGN KEY(productID) REFERENCES Product(productID)
);


-- First select
SELECT Product.productName AS productName, Category.categoryName AS categoryName, Category.details AS categoryDetails 
FROM TABLE Product
INNER JOIN ProductCategory
ON Product.productID = ProductCategory.productID
INNER JOIN ProductCategory
ON Category.categoryID = ProductCategory.categoryID

-- Second select
SELECT categoryID, categoryName 
FROM Category 
WHERE NOT EXISTS
(SELECT *  
   FROM ProductCategory
   WHERE Category.categoryID = ProductCategory.categoryID);

-- Third select
SELECT Category.categoryID AS categoryID, Category.categoryName AS categoryDetails, COUNT(ProductCategory.productID) AS productCount
FROM Category
JOIN ProductCategory
ON Category.categoryID = ProductCategory.categoryID
GROUP BY categoryID
ORDER BY 
  COUNT(ProductCategory.productID)