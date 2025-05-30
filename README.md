# Web Application Development Project Proposal

---

### Section: 2

Instructed By:  
**Dr. Mohd Khairul Azmi Bin Hassan**

---

### Group: C

---

### Project: **Invoice Web App**

|No |Name               | Matric Number       |
|---|-------------------| --------------------|
|1. |  Nabilah Binti Ahmad Nordin  |  2225498  |
|2. |  Alin Farhain Binti Abdul Rajat @ Abdul Razak  |  2224210  |
|3. |  Amysha Qistina Binti Amerolazuam  |  2225998  |
|4. |  Amna Syuhada Binti Mohamad Aminudin  |  2311986  |
|5. |  Fadhilah Binti Abd Mun'em  |  2313560  |

## Introduction
For today's fast-paced business environment, freelancers, small businesses, and service providers require efficient instruments for managing billing and payment processes. To this end, we recommend designing a Simple Invoice System, a built-in web-based application that can simplify the creation, sending, and following of invoices.

The system will provide users with fundamental invoicing features through a simplified interface. Users will be able to securely log in or sign up, manage their clients, create and edit invoices, and track the payment status. Compared to more advanced platforms, this app is confined to the basics of invoicing and is ideal for users who need a basic but reliable billing facility.

This project borrows ideas from open-source options like Invoice Ninja but limit the scope to keep things simple, easy to use, and efficient. The proposed system will serve as a working solution for individuals and small organizations that want to improve the accuracy of billing and save their time.

## Objectives
The main objectives of this web application is to:  
* Provide a user friendly platform to manage invoices and payments made by the client.  
* Increase efficiency by automating billing tasks and reduce the risks of error.  
* Provide small organizations with tools to effectively create, track, and manage invoices.  
* Centralize the customer and payment record in one place for better tracking.  
* Promote sustainability by implementing digital invoicing.  

## Features and functionalities

<ins>**Core Features**</ins>

|Features      | Description                 |
|--------------| ----------------------------|
|1. Login / Signup |  Secure user authentication and registration.|
|2. Dashboard|  Quick view of total invoices, received payments, and outstanding balances. <br>  Recent activity feed or invoice status indicators (paid, unpaid, overdue). |
|3. Clients |  Add, edit, and delete client records. <br>  View client-specific invoice/payment history. <br>  Store contact information and business details. |
|4. Invoices |  Create new invoices with invoice number, date, due date, and itemized services. <br>  Edit or delete existing invoices. <br>  Status indicators: Draft, Sent, Paid, Overdue. <br>  Option to download or email PDF invoices. |
|5. Payments  |  Record full or partial payments against specific invoices. <br>  View list of all payments made and pending. <br>  Auto-adjust invoice status based on payment received. |
|6. Profile / Settings |  Edit user profile information. <br>  Basic account settings. <br>  Logout functionality. |



<ins>**Additional Functionality**</ins>

|Features      | Description                 |
|--------------| ----------------------------|
|1. Custom Branding   |  Let users upload their company logo and customize invoice colors and footer messages.  |
|2. Multiple Currency Support  | Useful for freelancers or businesses working with international clients.  |
|3. Recurring Invoices   | Send invoices automatically on a regular schedule.  |
|4. Display Mode   | Improve readability for some individuals with visual impairments.  |

## Entity Relationship Diagram (ERD)
![webapp drawio (2)](https://github.com/user-attachments/assets/609264e3-44c9-47fa-9ff1-745642a020a7)

Summary:

* User: Can have many Clients and Invoices.

* Client: Can receive many Invoices and have many RecurringInvoices.

* Invoice: Can have many InvoiceItems and Payments.

## Sequence Diagram

![Alt text](Sequence_DiagramV3.png)

Summary:

* User Authentication (Login/Signup): Authenticates the user’s login or signup request and grants or denies access based on credentials.

* Dashboard: Displays a summary of invoices and payments after retrieving data from the database.

* Client Management: Allows the user to manage client records by adding, editing, or deleting entries in the database.

* Invoice Creation: Enables users to create or update invoices and save the details to the database.

* Payment Recording: Records full or partial payments against invoices and updates their status accordingly.

* Invoice Export (optional): User downloads or emails the invoice as a PDF.

* Additional Features (optional): Provides additional tools such as applying custom branding, handling multiple currencies, and sending recurring invoices.


# Prototype

<ins>**1.1 Sign Up page**</ins>

![image](https://github.com/user-attachments/assets/9a1ad101-41d8-4d6b-a2ba-aff13cd02352)

<ins>**1.2 Login page**</ins>

![image](https://github.com/user-attachments/assets/065ed0bb-c28e-487f-9649-c5c230f6fae5)

<ins>**2. Dashboard**</ins>  

![Alt text](4.Dashboard.png)  

<ins>**3. Clients Page**</ins>

![Alt text](prototypeClients.png)

<ins>**4.1 Invoices Page**</ins>

![8  Invoice](https://github.com/user-attachments/assets/1c11341d-e2fb-4c78-8713-97276eaede64)

<ins>**4.2 Recurring Invoices Page**</ins>
![9  Recurring Invoices](https://github.com/user-attachments/assets/9b3ef616-8507-4e3f-acbd-2daaad991ff6)

<ins>**5. Payment Page**</ins>

![Alt text](7.Payment.png)

<ins>**6. User Profile Page**</ins>
![image](https://github.com/user-attachments/assets/8bc0dce4-1651-4ffb-9477-33b7c12fc93a)

<ins>**Video Link**</ins>
: https://youtube.com/shorts/b37x3u3bXmc?feature=shared
