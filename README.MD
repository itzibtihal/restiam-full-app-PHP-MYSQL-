# RESTIAM PHP Complete web Application

### ****Creating the Database Table****

Create a table named *users* inside your MySQL database using the following code.

1 - Create a table named *Roles* 
```sql
CREATE TABLE Roles (
`id` int(225) NOT NULL AUTO_INCREMENT,
`NameRole` varchar(255) NOT NULL,
 PRIMARY KEY (`id`));
```


```sql
INSERT INTO `roles`(`id`, `NameRole`) VALUES (NULL,'ADMIN');
INSERT INTO `roles`(`id`, `NameRole`) VALUES (NULL,'shipping agent');
INSERT INTO `roles`(`id`, `NameRole`) VALUES (NULL,'Client');
```

2-
```sql
CREATE TABLE `users`(
    `id` int(255) NOT NULL AUTO_INCREMENT,
    `first_name` varchar(255) NOT NULL,
    `last_name` varchar(255) NOT NULL,
    `email` varchar(255) NOT NULL,
    `phone` varchar(255) NOT NULL,
    `gender` varchar(255) ,
    `address` varchar(255) ,
    `profile` varchar(255) ,
    `Creation_Date` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `post` varchar(255) ,
    `salary` varchar(255) ,
    `username` varchar(255) NOT NULL,
    `password` int(255) NOT NULL,
    `Role_Id` int(255) NOT NULL,
    FOREIGN KEY (Role_Id) REFERENCES roles(id),
    PRIMARY KEY (`id`)
)
```


Create Products table named *menu* 

```sql 
CREATE TABLE `menu`(
    `id` int(255) NOT NULL AUTO_INCREMENT,
    `name` varchar(255) NOT NULL,
    `description` varchar(255) NOT NULL,
    `price` int(255) NOT NULL,
    `profile` varchar(255) NOT NULL,
    `reviews` varchar(255) NOT NULL,
    PRIMARY KEY (`id`)
)
```


Create table @ the *index* page table for the ADMINDASH


```sql 
SELECT 
`order`.id,
 users.first_name AS Client_name,
 users.address AS Address_order,
 menu.name AS product_name, 
 menu.price AS total_price, 
 users.first_name AS shipping_Agent, 
 users.phone AS Agent_phone
  FROM `order` 
  INNER JOIN crud ON `order`.Client_Id = crud.id
  INNER JOIN menu ON `order`.Menu_Id = menu.id
  INNER JOIN delivery ON `order`.shippingAgent_Id = delivery.id;
 ```

Create table @ the *index* page table for shippingAgentDASH

 SELECT `order`.id,
         crud.first_name AS Client_name, 
         crud.address AS Address_order, 
         `order`.name AS order_name,
         menu.price AS total_price, 
         crud.phone AS Client_phone
         FROM `order` INNER JOIN crud ON `order`.Client_Id = crud.id 
         INNER JOIN menu ON `order`.Menu_Id = menu.id 
         INNER JOIN delivery ON `order`.shippingAgent_Id = delivery.id
         WHERE delivery.id = 4;