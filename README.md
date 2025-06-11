
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
![webapp drawio (2)](https://github.com/user-attachments/assets/62aefa57-2a80-402a-9ce4-4a661f50d579)


This ERD represents the data structure of a Simple Invoice System designed for freelancers and small businesses. The system includes six main entities: User, Client, Invoice, InvoiceItem, Payment, and RecurringInvoice. Each user can manage multiple clients and generate invoices for them. Invoices can have multiple items and receive multiple payments. Recurring invoices allow users to automate billing on a schedule. The relationships are primarily one-to-many, ensuring a clear and efficient data model.

## Sequence Diagram
![Sequence_DiagramV3](https://github.com/user-attachments/assets/b7f271d4-b620-4d85-9918-e9be8b32bd58)

Summary:

Navigation: Active tab is Payment with access to Dashboard, Clients, Invoices.

Actions: Add Payment, Import, filter by status, search.

Table Columns: Status, Number, Client, Amount, Invoice Number, Date, Type, Transaction Ref.

Functions: View, filter, and manage payments with pagination and bulk actions.

## Mockup Prototype

1. Sign up

![2  Sign Up](https://github.com/user-attachments/assets/3124cbc2-4d9f-499f-a65a-feda76c920d8)

2. Login

![1  Login](https://github.com/user-attachments/assets/ee5a864f-ac99-42b1-b643-558a0e51a4b2)

3. Profile 

![6 Profile](https://github.com/user-attachments/assets/80bbf3cc-df28-4d43-8ae9-34543ee3586a)

4. Dashboard

![4. Dashboard](https://raw.githubusercontent.com/amnasyuhada/invoice-web-app/main/4.Dashboard.png)

5. Client

![5  Clients](https://raw.githubusercontent.com/amnasyuhada/invoice-web-app/main/prototypeClients.png)

6.1. Invoice

![8  Invoice](https://github.com/user-attachments/assets/e6c50b0d-7c9a-4ca7-8313-41ef0cd81826)

6.2. Recurring Invoice

![9  Recurring Invoices](https://github.com/user-attachments/assets/fb4cfea6-c14e-4a20-914b-ca80772f8292)

7. Payment
8. 
![7 Payment](https://github.com/user-attachments/assets/b373d073-edae-4018-a220-7195ce4df1b9)


## 6. Link youtube : https://youtube.com/shorts/b37x3u3bXmc?feature=shared

## Captured Screens with Descriptions

1. Dashboard : 
Provides summarized view of invoice management. It includes total revenue, invoices sent, 
pending invoices and overdue invoices. This page also displays the payment trends line graph 
and several tables showing recent invoices, recent payment and recurring invoices.

![1. Dashboard](https://raw.githubusercontent.com/amnasyuhada/invoice-web-app/main/Dashboard(Web).png)
