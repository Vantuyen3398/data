-- Cau 1
SELECT * FROM products 
INNER JOIN categories 
ON products.categoryID = categories.categoryID 
WHERE categories.categoryNameLIKE '%a%'

-- Cau 1