use hospitalmanagement;


CREATE TABLE stock (
Stock_id int(30) NOT NULL AUTO_INCREMENT PRIMARY KEY,
name varchar(50),
Quantity int(30) NOT NULL,
price int NOT NULL,
invested_price,
expiry_date DATE
);

CREATE TABLE Buyers (
Buyer_id int(30) NOT NULL AUTO_INCREMENT PRIMARY KEY,
Stock_id int(30) NOT NULL,
Name varchar(100),
Address varchar(100),
FOREIGN KEY (Stock_id) REFERENCES stock(Stock_id)
);


CREATE TABLE Customer (
Customer_id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
name varchar(100),
Address varchar(100),
telephone varchar(11)
);

CREATE TABLE orders(
Order_id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
Customer_id int(11) NOT NULL,
Orderdate DATE,
Delivery_Date DATE,
Amount INT,
AmountPaid varchar(1) DEFAULT 'N',
FOREIGN KEY (Customer_id) REFERENCES Customer(Customer_id)
);

CREATE TABLE buyers_orders(
Order_id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
Buyer_id int(11) NOT NULL,
Orderdate DATE,
Delivery_Date DATE,
Amount INT,
AmountPaid varchar(1) DEFAULT 'N',
FOREIGN KEY (Buyer_id) REFERENCES Buyers(Buyer_id)
);

//Query for Monthly Profit Calculation

WITH totalIncome(month, incomecost) as
    (SELECT Month(Orderdate), sum(amount)
    FROM orders where AmountPaid = 'Y'
    GROUP BY Month(Orderdate)),
    totalExpense(sumExpense) as 
    (SELECT sum(Invested_price*Quantity)
    FROM stock)
    SELECT totalIncome.month as Month,totalIncome.incomecost As Total_Income,totalExpense.sumExpense as Total_Expense,totalIncome.incomecost-totalExpense.sumExpense as Profit
    FROM totalIncome, totalExpense;