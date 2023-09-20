# Guest_Room_App instructions:
    I kept a name for my application as # House Mate Booking

# Step by Step guide to implement the guest room booking application

# How to Run ??

      1.XAMPP or Wamp server should be installed on your system.

      2."TEXT EDITOR" NOTEPAD++ OR Visual Studio Code / ETC.

      3. Open "Guest_Room_Booking_Application"

      4. Copy "Guest_Room_Booking_Application" 

      5. Paste inside root directory/ where you install xammp local disk C: drive D: drive E: paste: (for xampp/htdocs, 

      6. Open PHPMyAdmin (http://localhost/phpmyadmin)

      7. Create a database with name hotel_db

      8. Import hotel_db.sql file(It is inside the database SQL file folder)

      9. Run the script (http://localhost/Guest_Room_Booking_Application/)

      10. To run the admin side directly run this script (http://localhost/Guest_Room_Booking_Application/admin/)


# LOGIN DETAILS

**Create your own User**
Username : you can create by booking room
Password : you can create by booking room

**Admin_Panel**
Username: admin
Password: admin123


# Modules in this Project:

# Admin Side
  1. **Rooms**
      * List
      * New
      * Update
  2. **Accommodations**
      * List
      * New
      * Update
  3. **Reservation**
      * Confirmation
      * Guest details
      * Guest Reserved Rooms
  4. **Reports**
  5.  **Manage User**
      * List
      * New
      * Update
  6. **Login and Logout**
  
# Public Side
1.  **Home**
2. **Check Availability**
3.  **Transaction**
       * Booking of rooms
       * Reservation of rooms
4.  **Room and Rates**
5.  **Accommodations**
6.  **Contact us**
7.  **Profile**
8.  **Login and Logout**

# Database Schema

1. **tblaccomodation** Table:

   - `ACCOMID` (int): Unique identifier for each accommodation type.
   - `ACCOMODATION` (varchar): Name of the accommodation.
   - `ACCOMDESC` (varchar): Description of the accommodation.

2. **tblamenities** Table (Not used in your code):

   - `AMENID` (int): Unique identifier for each amenity.
   - `AMENNAME` (varchar): Name of the amenity.
   - `AMENDECS` (varchar): Description of the amenity.
   - `AMENIMAGE` (varchar): Image or path to the amenity image.

3. **tblguest** Table:

   - `GUESTID` (int): Unique identifier for each guest.
   - `REFNO` (int): Reference number.
   - `G_FNAME` (varchar): Guest's first name.
   - `G_LNAME` (varchar): Guest's last name.
   - `G_CITY` (varchar): City of the guest.
   - `G_ADDRESS` (varchar): Address of the guest.
   - `DBIRTH` (date): Date of birth of the guest.
   - `G_PHONE` (varchar): Phone number of the guest.
   - `G_NATIONALITY` (varchar): Nationality of the guest.
   - `G_COMPANY` (varchar): Company name (if applicable).
   - `G_CADDRESS` (varchar): Company address (if applicable).
   - `G_TERMS` (tinyint): Guest's acceptance of terms (0 or 1).
   - `G_UNAME` (varchar): Guest's username.
   - `G_PASS` (varchar): Guest's password hash.
   - `ZIP` (int): ZIP code.
   - `LOCATION` (varchar): Location or path to the guest's photo.

4. **tblpayment** Table:

   - `SUMMARYID` (int): Unique identifier for each payment summary.
   - `TRANSDATE` (datetime): Date and time of the transaction.
   - `CONFIRMATIONCODE` (varchar): Confirmation code for the payment.
   - `PQTY` (int): Quantity of items.
   - `GUESTID` (int): Reference to the guest making the payment.
   - `SPRICE` (double): Price or amount of the payment.
   - `MSGVIEW` (tinyint): Message view status (0 or 1).
   - `STATUS` (varchar): Payment status.

5. **tblreservation** Table:

   - `RESERVEID` (int): Unique identifier for each reservation.
   - `CONFIRMATIONCODE` (varchar): Confirmation code for the reservation.
   - `TRANSDATE` (date): Date of the transaction.
   - `ROOMID` (int): Reference to the room being reserved.
   - `ARRIVAL` (datetime): Date and time of arrival.
   - `DEPARTURE` (datetime): Date and time of departure.
   - `RPRICE` (double): Reservation price.
   - `GUESTID` (int): Reference to the guest making the reservation.
   - `PRORPOSE` (varchar): Purpose of the reservation.
   - `STATUS` (varchar): Reservation status.
   - `BOOKDATE` (datetime): Date and time of booking.
   - `REMARKS` (text): Remarks or additional information.
   - `USERID` (int): Reference to the user who made the reservation.

6. **tblroom** Table:

   - `ROOMID` (int): Unique identifier for each room.
   - `ROOMNUM` (int): Room number.
   - `ACCOMID` (int): Reference to the accommodation type.
   - `ROOM` (varchar): Room name.
   - `ROOMDESC` (varchar): Room description.
   - `NUMPERSON` (int): Number of persons the room can accommodate.
   - `PRICE` (double): Price of the room.
   - `ROOMIMAGE` (varchar): Image or path to the room's image.

7. **tbluseraccount** Table:

   - `USERID` (int): Unique identifier for each user.
   - `UNAME` (varchar): User's username.
   - `USER_NAME` (varchar): User's name.
   - `UPASS` (varchar): User's password hash.
   - `ROLE` (varchar): User's role (e.g., Administrator).
   - `PHONE` (int): User's phone number.

These are the tables and their respective columns that make up the database schema.
