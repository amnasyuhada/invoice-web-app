
---

# 🎓 INFO 3305 — Section 02  
### 🌐 Web Application Development  
**👨‍🏫 Instructor:** Mohd Khairul Azmi bin Hassan  
**👥 Group:** C  
**📌 Project Title:** *Invoice Sensei*

---

## 👩‍💻 Group Members

| 🧑‍🤝‍🧑 Name                                           | 🆔 Student ID |
|------------------------------------------------------|---------------|
| Nabilah binti Ahmad Nordin                           | 2225498       |
| Alin Farhain binti Abdul Rajat @ Abdul Razak         | 2224210       |
| Amysha Qistina binti Amerolazuam                     | 2225998       |
| Fadhilah binti Abd Mun'em                            | 2313560       |
| Amna Syuhada binti Mohamad Aminudin                  | 2311986       |

---

## Introduction

For today's fast-paced business environment, freelancers, small businesses, and service providers require efficient instruments for managing billing and payment processes. To this end, we recommend designing a Simple Invoice System, a built-in web-based application that can simplify the creation, sending, and following of invoices.

The system will provide users with fundamental invoicing features through a simplified interface. Users will be able to securely log in or sign up, manage their clients, create and edit invoices, and track the payment status. Compared to more advanced platforms, this app is confined to the basics of invoicing and is ideal for users who need a basic but reliable billing facility.

This project borrows ideas from open-source options like Invoice Ninja but limit the scope to keep things simple, easy to use, and efficient. The proposed system will serve as a working solution for individuals and small organizations that want to improve the accuracy of billing and save their time.

##  Objectives

The main objectives of this web application is to:

- ✅ **User-Friendly Interface**  
  Provide an intuitive platform for managing invoices and payments made by clients.

- ⚙️ **Efficiency through Automation**  
  Increase efficiency by automating billing tasks and minimizing the risk of manual errors.

- 🧾 **Empower Small Organizations**  
  Equip small businesses with tools to effectively create, track, and manage invoices.

- 📚 **Centralized Records**  
  Centralize customer and payment records in one place for easy tracking and reporting.

- 🌱 **Sustainable Invoicing**  
  Promote sustainability by reducing paper usage through digital invoicing solutions.


## Core Features

| **Feature**       | **Description** |
|-------------------|-----------------|
| **Login / Signup** | Secure user authentication and registration. |
| **Dashboard** | Quick view of total invoices, received payments, and outstanding balances. Includes recent activity feed or invoice status indicators (paid, unpaid, overdue). |
| **Clients** | Add, edit, and delete client records. View client-specific invoice/payment history. Store contact information and business details. |
| **Invoices** | Create new invoices with invoice number, date, due date, and itemized services. Edit or delete existing invoices. Includes status indicators: Draft, Sent, Paid, Overdue. Option to download or email PDF invoices. |
| **Payments** | Record full or partial payments against specific invoices. View list of all payments made and pending. Auto-adjust invoice status based on payment received. |
| **Profile / Settings** | Edit user profile information. Manage basic account settings. Logout functionality. |

## Additional Functionality

| **Feature**                | **Description** |
|----------------------------|-----------------|
| **Custom Branding**        | Let users upload their company logo and customize invoice colors and footer messages. |
| **Multiple Currency Support** | Useful for freelancers or businesses working with international clients. |
| **Recurring Invoices**     | Send invoices automatically on a regular schedule. |
| **Display Mode**           | Improve readability for some individuals with visual impairments. |


## ERD Diagram
![webapp drawio (2)](https://github.com/user-attachments/assets/cca9d2bf-b5ff-429d-99b0-7fc984f9a06f)


This ERD represents the data structure of a Simple Invoice System designed for freelancers and small businesses. The system includes six main entities: User, Client, Invoice, InvoiceItem, Payment, and RecurringInvoice. Each user can manage multiple clients and generate invoices for them. Invoices can have multiple items and receive multiple payments. Recurring invoices allow users to automate billing on a schedule. The relationships are primarily one-to-many, ensuring a clear and efficient data model.


## Sequence Diagram
![Sequence_DiagramV3](https://github.com/user-attachments/assets/206cd3de-7a9e-4a54-8f90-78aea90918e7)

Summary:

Navigation: Active tab is Payment with access to Dashboard, Clients, Invoices.

Actions: Add Payment, Import, filter by status, search.

Table Columns: Status, Number, Client, Amount, Invoice Number, Date, Type, Transaction Ref.

Functions: View, filter, and manage payments with pagination and bulk actions.

## Mockup Prototype

1. Sign up

![2  Sign Up](https://github.com/user-attachments/assets/6f5ca372-b40a-420b-9aff-27d4db348095)


2. Login

![1  Login](https://github.com/user-attachments/assets/6ccf1725-f148-4159-a9e8-119c2bd84018)


3. Profile 

![6 Profile](https://github.com/user-attachments/assets/ecf88bf5-b732-46b6-859b-cbd494a494b7)


4. Dashboard

![4. Dashboard](https://raw.githubusercontent.com/amnasyuhada/invoice-web-app/main/4.Dashboard.png)

5. Client

![5  Clients](https://raw.githubusercontent.com/amnasyuhada/invoice-web-app/main/prototypeClients.png)

## 6.1. Invoice

![8  Invoice](https://github.com/user-attachments/assets/47ccfb8f-6e0f-43da-9729-04867ef88893)


## 6.2. Recurring Invoice

![9  Recurring Invoices](https://github.com/user-attachments/assets/6998a5b0-577c-4e04-9a44-990119c0327c)


## 7. Payment
![7 Payment](https://github.com/user-attachments/assets/e00c1fae-3d37-4e57-ba66-a52725af7b50)


## 6. Link youtube : https://youtube.com/shorts/b37x3u3bXmc?feature=shared

## Captured Screens with Descriptions
1. in .env file change the http/localhost to 127.0.0.1.8000 and run php artisan storage:link
2. Enabling Extension=intl in php.ini
   To allow image manipulation and file handling (like resizing logos), the intl extension in PHP must be enabled.
3. Enabling ZIP Extension in php.ini
   To allow image manipulation and file handling (like resizing logos), the zip extension in PHP must be enabled.
4. Installing Intervention Image (v3) via Composer
   To allow image processing like resizing, I used the Intervention Image package.
   composer require intervention/image

## 1. Login : 
Allows authorized users to securely access the admin panel by entering their credentials. It serves as the entry point for administrators to manage the system, ensuring only authenticated users can access backend features and sensitive data.

![image](https://github.com/user-attachments/assets/d1bfbf6f-f710-4ca6-9cee-b959c7ea53d9)

## 2. Sign Up : 
Sign Up lets new users create an account by filling out a registration form (e.g., name, email, password, etc.), allowing access to your app.

![image](https://github.com/user-attachments/assets/35b4a7bb-1778-486d-aeb3-9bebc1319987)

## 3. User Profile : 
The User Profile Page serves as a centralized interface where authenticated users can view and manage their personal information such as name, email, and profile photo. It enables users to update their details, change their password, and optionally upload a profile picture or adjust personal preferences. This page plays a crucial role in providing self-service account management, making it especially valuable in applications that involve user accounts, team memberships, or administrative roles.

![UserProfile](https://github.com/user-attachments/assets/d5d99cc4-dac8-4cef-b37f-7ed38acb7237)
![Screenshot 2025-06-12 034307](https://github.com/user-attachments/assets/0ba03f91-c410-4f1d-9290-839c33d752d3)

## 4. Dashboard : 
Provides summarized view of invoice management. It includes total revenue, invoices sent, 
pending invoices and overdue invoices. This page also displays the payment trends line graph 
and several tables showing recent invoices, recent payment and recurring invoices.

![1. Dashboard](https://raw.githubusercontent.com/amnasyuhada/invoice-web-app/main/Dashboard(Web).png)


## 5. Customer :
Customer page of the Invoice Sensei system, displaying a searchable and sortable table of customer records. Key details such as customer name, email, balance, amount paid, last login, date created, date created, updated and deleted are listed. The interface includes options to add a new customer or perform additional actions.

![5  Clients](https://raw.githubusercontent.com/amnasyuhada/invoice-web-app/main/Customer.png)


## 6.1 Invoice :
The system provides comprehensive features for managing both items and invoices. In the **Invoice page**, users can create and edit invoices by selecting customers, adding items, and adjusting quantities. The page offers sorting options for invoice details, such as the status, date, invoice number, and timestamps for creation and updates. This allows users to easily track and manage invoice history. In the **Item management page**, users can create new items by adding product details like name, description, price, and weight. It also includes the option to upload product images and attach files. Users can review the item list and sort it by product name or other information, making it easy to navigate and find specific products. These features, combined with sorting and review options, help streamline the management of inventory and invoices.

![image](https://github.com/user-attachments/assets/4731ffc4-cded-4b1b-ac02-6d938da4bdb4)
![image](https://github.com/user-attachments/assets/feb05713-fa32-4569-8f63-58cb128a445b)
![image](https://github.com/user-attachments/assets/c5838376-85f4-42f1-9850-e5862ad12d80)
![image](https://github.com/user-attachments/assets/b67737f2-db87-4bd0-b772-472df7683bc9)
![image](https://github.com/user-attachments/assets/60e47820-2528-4efc-9405-f0ed33e7b8a6)


## 6.2 Recurring Invoice :
The RecurringInvoice feature automates the generation of invoices on a regular schedule (e.g., weekly, monthly). Instead of manually creating the same invoice repeatedly, users can set up a template that auto-generates invoices at set intervals. More importantly highlights the status such as sent, refund, overdue, or pending. Customer also can check their total amount referring to their frequency and limit.

![Screenshot 2025-06-12 100526](https://github.com/user-attachments/assets/736ae518-2ba9-4654-b652-e18c525a8559)
![image](https://github.com/user-attachments/assets/d80db125-a5b0-46ec-96de-c1ae8774333d)
![image](https://github.com/user-attachments/assets/264a7811-10c9-4ba4-86b6-754bea08d0e4)


## 7. Payment:
The payment page allows users to record new customer payments by entering details such as the date, payment number, amount, payment method, and notes. It ensures accurate tracking of transactions for each customer in the system. 

![image](https://github.com/user-attachments/assets/7ba81baa-6f74-40c5-938b-f3297ab47265)
![image](https://github.com/user-attachments/assets/8a80a395-ac6a-4f17-824c-39a378c7a4a6)
![image](https://github.com/user-attachments/assets/9dc185fa-d8ea-4ad1-85b9-e8f1f123f661)
![image](https://github.com/user-attachments/assets/4f1a0225-7ce4-44e5-998d-a5851a98a75f)

---

# Challenge/difficulties to develop the application

### **1. Implementing User Authentication and Role Management**

* Setting up secure login and registration using Filament’s authentication.
* Ensuring access control per user so one user cannot view another user’s invoices, clients, or payments.
* Managing password reset and email verification features securely.
  

### **2. Multi-Tenancy / Team-based Data Separation**

* Implementing team-specific data access (i.e. each user or team sees only their own clients/invoices).
* Making sure `team_id` is linked correctly in all tables (e.g. invoices, payments, clients).
* Filtering database queries so that users don’t accidentally see or edit others’ data.
  

### **3. Complex Database Relationships**

* Designing and maintaining relationships between Users, Clients, Invoices, Invoice Items, Payments, and Recurring Invoices.
* Ensuring data integrity (e.g. a payment must belong to a valid invoice and client).
* Handling cascading actions like deleting a client and ensuring related invoices/payments are handled correctly.
  

### **4. Invoice Logic and Automation**

* Automatically calculating totals and taxes from invoice items.
* Updating invoice status (e.g. from “Sent” to “Paid” or “Overdue”) based on payment status.
* Handling partial payments and adjusting balances dynamically.
  

### **5. Recurring Invoices Functionality**

* Setting up a system to schedule and auto-generate invoices at regular intervals.
* Ensuring proper linking between recurring templates and the actual generated invoices.
* Handling different recurrence intervals (weekly, monthly, etc.).
  

### **6. Currency and Branding Customization**

* Allowing users to select different currencies and ensure amounts are formatted correctly.
* Enabling logo uploads and dynamic invoice color customization.
* Ensuring branding settings apply consistently across invoice PDFs and UI.
  

### **7. Dashboard & Data Visualization**

* Displaying dynamic charts and KPIs (e.g. total revenue, invoice count).
* Aggregating and filtering invoice/payment data efficiently.
* Ensuring dashboard loads fast despite large datasets.
  

### **8. Responsive UI and Accessibility**

* Designing interfaces that work well on both desktop and mobile.
* Implementing a display mode for visual impairments.
* Customizing Filament’s default look to match your branding needs.
  

### **9. Testing and Debugging**

* Testing complex form submissions with Livewire and Filament.
* Debugging unexpected issues like validation failures, form not updating, or relationship errors.
* Testing soft delete and restore functionality for customers and invoices.
  

### **10. PDF Generation and File Downloads**

* Implementing download/export of invoice as PDF with proper layout.
* Handling file formatting issues across browsers.
* Ensuring downloaded files include correct branding and data.
  

### **11. Search, Filter, and Pagination**

* Implementing advanced search and filter features for clients, invoices, and payments.
* Handling filtered queries efficiently without breaking pagination or table actions.
* Making sure search works across all related fields (e.g. client name in invoice table).

