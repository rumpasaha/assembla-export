
      
      
      
      
      <p> <span style="color: rgb(17, 17, 17); font-family: inherit; font-size: 16px; font-weight: bold; line-height: 18px;">Exact details per table</span></p><p><span style="color: rgb(17, 17, 17); font-family: inherit; font-size: 16px; font-weight: bold; line-height: 18px;"><br></span></p><h3 style="font-family: Arial, Helvetica, 'Liberation Sans', FreeSans, sans-serif;">Tables directly needed for file transfer</h3><div><table style="width: 1084px;"><tbody><tr><td colspan="3"><h4>table: transfers</h4></td></tr><tr><td>Field name</td><td>Data type</td><td>Description</td></tr><tr><td>id<br></td><td>integer</td><td>Primary key. Not null and auto-incrementing</td></tr><tr><td>trackingid</td><td>character varying(10)<span>    </span></td><td>Tracking code for the transfer (sent to sender)<br>Maybe not that useful</td></tr><tr><td>uid</td><td>character varying(500)</td><td>The sender's user ID, as generated by the IdP</td></tr><tr><td>sendername</td><td>character varying(250)</td><td>The sender's name</td></tr><tr><td>subject</td><td>character varying(80)</td><td>Optional: specifies subject in the e-mail notification sent to receivers</td></tr><tr><td>message</td><td>character varying(250)</td><td>Optional: message from sender to receivers</td></tr><tr><td>transfer_date</td><td>timestamp without time zone</td><td>The date and time of the transaction</td></tr><tr><td>expiry_date</td><td>timestamp without time zone</td><td>The expiration date and time (to insure that download is available on the last day)</td></tr><tr><td>status</td><td>character varying(20)</td><td>Indicates status of the file transfer: uploading, available for download, expired</td></tr><tr><td>options</td><td>character varying(250)</td><td>text string, JSON-encoded, that contains data about what options were checked</td></tr></tbody></table></div><div><div><br></div><div><br class="Apple-interchange-newline"><table style="width: 991px;"><tbody><tr><td colspan="3"><h4>table: files</h4></td></tr><tr><td>Field name</td><td>Data type</td><td>Description</td></tr><tr><td>id</td><td>integer</td><td>Primary key. Not null and auto-incremented.</td></tr><tr><td>transferid</td><td>integer</td><td>Foreign key. Not null. The ID handle of the transaction record the file is associated with.</td></tr><tr><td>name</td><td>character varying(500)</td><td>Name of the file, as originally specified by sender.</td></tr><tr><td>size</td><td>bigint (long integer)</td><td>File size in bytes.</td></tr><tr><td>sha1</td><td>character varying(500)</td><td>Hash code (for file integrity verification). Should be done per chunk. But leaving it as it is for now.</td></tr></tbody></table></div></div><div><br></div><div><br></div><div><br class="Apple-interchange-newline"><table style="width: 991px;"><tbody><tr><td colspan="3"><h4>table: recipients</h4></td></tr><tr><td>Field name</td><td>Data type</td><td>Description</td></tr><tr><td>id</td><td>integer</td><td>Primary key. Not null and auto-incrementing</td></tr><tr><td>transferid</td><td>integer</td><td>Foreign key. Not null. ID handle for the transfer the recipient is in.</td></tr><tr><td>email_address<br></td><td>varchar(80) <br></td><td>The recipient's e-mail.<br></td></tr><tr><td>token<br></td><td>varchar(60)</td><td>Download or voucher token for each recipient. Only the latest token for a recipient is shown here.<br></td></tr><tr><td>options</td><td>varchar(250)</td><td>Shows whether recipient has asked to get "download complete" e-mail<br></td></tr><tr><td>created_date</td><td>time stamp w/o time zone</td><td>The date when the recipient record was created</td></tr><tr><td>last_activity</td><td>time stamp w/o time zone</td><td>Date of last activity. Used to determine if recipient is inactive and data should be removed</td></tr></tbody></table></div><div><br></div><div><br></div><div><br class="Apple-interchange-newline"><table style="width: 991px;"><tbody><tr><td colspan="3"><h4>table: auditlogs</h4></td></tr><tr><td>Field name</td><td>Data type</td><td>Description</td></tr><tr><td>id</td><td>integer</td><td>Primary key. Not null and auto-incrementing</td></tr><tr><td>event</td><td>varchar(20)</td><td>The type of event that is logged:<br>UPLOAD, FAILED, DOWNLOAD, UPLOADED;<br>USER_ACTIVATED, USER_INACTIVE, USER_PURGED;<br>FL_UPDATE, FL_EXPIRED, FL_MOVED, FL_DELETED;<br>VC_SENT, VC_EXPIRED, VC_CANCEL, VC_CLOSED;</td></tr><tr><td>transferid</td><td><br></td><td>The transaction that is related to a file or voucher event</td></tr><tr><td>uid</td><td></td><td>The user that did the transfer</td></tr><tr><td>recipientid</td><td></td><td>The recipient that (for instance) downloaded a file</td></tr><tr><td>date</td><td></td><td>The point in time when the event occurred.</td></tr><tr><td>voucherid</td><td></td><td>The voucher token that was used (if it's a FILE event, otherwise it's the voucher that expired, etc.)<br></td></tr><tr><td>filename</td><td></td><td>The file the event revolved around</td></tr><tr><td>ipv4</td><td></td><td>IPv4 address of the user or guest (by voucher)<br></td></tr><tr><td>ipv6</td><td></td><td>IPv6 address of the user or guest (by voucher)</td></tr></tbody></table></div><div><br></div><h3 style="font-family: Arial, Helvetica, 'Liberation Sans', FreeSans, sans-serif;">Supporting tables</h3><div><br class="Apple-interchange-newline"><table style="width: 991px;"><tbody><tr><td colspan="3"><h4>table: guestvouchers</h4></td></tr><tr><td>Field name</td><td>Data type</td><td>Description</td></tr><tr><td>id</td><td>uint</td><td>Primary key. Not null and auto-incrementing</td></tr><tr><td>uid</td><td>varchar(500)</td><td>The user who has issued the voucher/under whose name the transfer will be done.</td></tr><tr><td>token</td><td>varchar(60)</td><td>The voucher token</td></tr><tr><td>transfers</td><td>uint</td><td>Nr of transfers the voucher is good for.</td></tr><tr><td>created_date</td><td>timestamp without time zone</td><td>Date the voucher token was created and sent</td></tr><tr><td>expiry_date</td><td>timestamp without time zone</td><td>Specifies the expiration date and time of the voucher</td></tr><tr><td>subject</td><td>character varying(80)</td><td>The subject of the "invitation by voucher" e-mail message</td></tr><tr><td>message</td><td>character varying(250)</td><td>The message body of an "invitation by voucher"</td></tr><tr><td>options</td><td>character varying(250)</td><td>The options that are accessible to voucher users when sending files (Initially ignored)</td></tr></tbody></table></div><div><br></div><div><br></div><div><br class="Apple-interchange-newline"><table style="width: 991px;"><tbody><tr><td colspan="3"><h4>table: userpreferences</h4></td></tr><tr><td><b>Field name</b></td><td><b>Data type</b></td><td><b>Description</b></td></tr><tr><td>uid</td><td>varchar(500)</td><td>From IdP authorization step, the user's ID</td></tr><tr><td>organization</td><td>varchar(80)</td><td>Organization the user is associated with. From IdP authorization step</td></tr><tr><td>aup_ticked</td><td>boolean</td><td>Whether the user's already accepted the AuP conditions by ticking the box</td></tr><tr><td>aup_last_ticked_date</td><td>time stamp w/o time zone</td><td>date the AuP was last ticked by the user.  Allows us to figure out if this user needs to tick the AuP again due to an AuP update. Such an update should reset all users' "aup_ticked" property.</td></tr><tr><td>file_preferences</td><td>varchar(250)</td><td>text string, JSON-encoded, that contains data about what options user had previously set</td></tr><tr><td>voucher_preferences</td><td><br></td><td>Not used currently, since there are no options to select.</td></tr></tbody></table></div><div><br></div><div><br></div><div><br class="Apple-interchange-newline"><table style="width: 991px;"><tbody><tr><td colspan="3"><h4>table: statslogs  - anonymized version of auditlogs. E.g. fields such as file name replaced by, for instance, file ID (integer).</h4></td></tr><tr><td>Field name</td><td>Data type</td><td>Description</td></tr><tr><td><br></td><td><br></td><td><br></td></tr><tr><td><br></td><td><br></td><td><br></td></tr></tbody></table></div><div><br></div>
    
    
    
    
    