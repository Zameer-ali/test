SELECT O.`customer_id`,P.`Name`,i.`name` FROM ITEM I INNER JOIN orders O ON O.`item_id`=i.`item_id` INNER JOIN PERSON P ON O.`customer_id`=P.`customer_id`;
SELECT O.`customer_id`,P.`Name`,i.`name` product FROM ITEM I LEFT JOIN orders O ON O.`item_id`=i.`item_id` LEFT JOIN PERSON P ON O.`customer_id`=P.`customer_id`;
SELECT O.`customer_id`,P.`Name`,i.`name` product FROM ITEM I RIGHT JOIN orders O ON O.`item_id`=i.`item_id` RIGHT JOIN PERSON P ON O.`customer_id`=P.`customer_id`;
SELECT * FROM  orders O NATURAL JOIN PERSON P;
SELECT * FROM  orders O CROSS JOIN PERSON P ON O.`customer_id`=P.`customer_id` ;
SELECT * FROM  orders O JOIN PERSON P WHERE O.`customer_id`=P.`customer_id` AND gender='male' ;
SELECT * FROM  orders O JOIN item i USING(item_id) ;
SELECT o.`customer_id`,p.`Name`,p.`Gender`,o.`order_date`,p.`Address`,i.`name` product,i.`price` FROM  orders O JOIN PERSON P ON O.`customer_id`=P.`customer_id` JOIN item i ON O.`item_id`=i.`item_id` ORDER BY o.`customer_id` ;