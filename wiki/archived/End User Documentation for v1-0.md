This end user documentation may be copied and customised for local installations of FileSender. Systems administators please refer to ** [red bold text contained in square brackets] **, where additional information is available or text may require modification.

Overview

Client Requirements

** [See the Requirements page for a description of browser and plugin requirements and when these plugins are required and utilised.] **

Help and Information

In the top right-hand corner of all FileSender windows, click on the following links for useful information at any time:

"Help" - login issues, entering email addresses, handling multiple files, maximum file sizes, and maximum file and voucher expiry dates
"About" - general information about the installation
Authentication

There are two kinds of users with different levels of access:

Authenticated user - upload and manage files, issue vouchers to allow users without an account to upload a file - remember to logoff when finished!
Guest user - download files shared to them, upload a file using a voucher issued to them by an authenticated user
** [Authentication methods will differ between FileSender installations. Sample login screenshots are provided in Functional design, for reference only. The "Help" section of the FileSender interface provides the suggestion that users with login issues contact their local IT support.] **

Workflows

There are broadly three user workflows in FileSender:

1. Sharing a file - upload file and generate email to recipient(s)

1.a. Authenticated file upload - authenticated user
1.b. File upload using a voucher - guest user without an account, invited by an authenticated user to upload a file
2. Managing shared files - basic file management capabilities

3. Receiving a file - download file from link with built-in password in autogenerated email, or directly from interface by authenticated user

** [FileSender's functionality is also outlined in detail in Specifications.] **

--------------------------------------------------------------------------------------------------

1. Sharing a file

1.a. Authenticated file upload

** [remove Acceptable Usage Policy reference in second bullet point if it does not apply to local installation] **

Upon login, the upload page is displayed (Figure 1).
Enter one or more email addresses, an optional email subject and / or message, set an expiry date until which the file is to be made available, browse for the file to upload, check the box agreeing to the Acceptable Usage Policy and click on the "Send" button. A progress bar will appear and an email automatically sent upon successful completion of the file upload. Click on the "Help" link in the top right-hand corner for assistance with entering email addresses, handling multiple files, and maximum file sizes and expiry dates.
The authenticated user and file recipient(s) should automatically receive an email containing the filename, file size, a link (different for each recipient) with a built-in password to the uploaded file, expiry date and optional message.
The file will also be added to the authenticated user's My Files table (see 2. Managing shared files).
The file will be automatically deleted at expiry, if not manually deleted prior by the authenticated user (see 2. Managing shared files).




Figure 1: Authenticated Upload window

1.b. File upload using a voucher

Issuing the Voucher:

Click on the "Vouchers" button near the top of the window to display the Vouchers window (Figure 2).
Follow the instructions to issue a single-use voucher to allow a user without an account to upload a file once. Click on the "Help" link in the top right-hand corner for assistance with entering email addresses and maximum voucher expiry dates.
The authenticated user and voucher recipient should automatically receive an email containing the authenticated user's email address, a voucher link and the voucher expiry date.
The voucher will also be added to the authenticated user's Current Valid Vouchers table. Vouchers can be manually deleted prior to expiry by clicking on the delete button on the right of the table entry, which will automatically generate an email to the authenticated user and voucher recipient that the voucher has been cancelled. Any vouchers not used before the expiry date will be automatically deleted.




Figure 2: Vouchers window

Using the Voucher:

The voucher recipient can then click on the voucher link to bring up a similar window containing the same entry fields as in Figure 1, but as a Guest (not authenticated user) without access to any other FileSender features. The voucher recipient can click on the "Help" link in the top right-hand corner for assistance with entering email addresses, handling multiple files, and maximum file sizes and expiry dates.
Upon successful completion of the voucher file upload, the voucher recipient and file recipient(s) should automatically receive an email containing the same information pertaining to the upload as for an authenticated file upload, but in this case the email should also be blind carbon copied (bcc) to the authenticated user who issued the Voucher.
The file will also be added to the authenticated user's My Files table (see 2. Managing shared files).
As the voucher is for single-use, it will be automatically deleted after use and removed from the authenticated user's Current Valid Vouchers table.
--------------------------------------------------------------------------------------------------

2. Managing shared files

Click on the "My Files" button near the top of the window to display the My Files window (Figure 3), which contains a table listing all active shared files, either uploaded by the authenticated user or by recipients of vouchers issued by the authenticated user.
Point to each button to display it's functionality. For each file in the table, the authenticated user (only) can:
view key information about the file, including sender and recipient email address(es), filename, file size, email subject and message, date uploaded and expiry date
regenerate the original email to all original recipient(s)
add new recipients to an already uploaded file, with the same or modified email subject and / or message and separate expiry date, which will then appear as a separate entry in the table
download the file directly from the table by clicking on the filename
manually delete the file prior to expiry, which will automatically generate an email to the authenticated user and file recipient(s) that the file is no longer available.




Figure 3: My Files window

--------------------------------------------------------------------------------------------------

3. Receiving a file

Click on the link in the autogenerated email to display a download browser window (Figure 4) containing information about the file, as a Guest (not authenticated user) without access to any other FileSender features. Click on the "Start Download" button to download the file. The file can be downloaded multiple times.
An authenticated user can also download any active file they have uploaded, or has been uploaded using a Voucher they issued, by logging in and clicking on the corresponding filename in the My Files table (see 2. Managing shared files).
Each time a file is downloaded (per browser session), the user who uploaded the file and the recipient downloading the file should receive an automatically generated email, advising that the file has been downloaded. In the case of a file that had been initially uploaded using a Voucher, this email should also be blind carbon copied (bcc) to the authenticated user who issued the Voucher. The email lists the email address of the file recipient whose link is being used to access the file, the filename, file size, link with built-in password used to access the file and expiry date.




Figure 4: Download window