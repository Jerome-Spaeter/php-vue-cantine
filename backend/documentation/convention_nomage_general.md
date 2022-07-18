## **User** 

userId : bigINT

userUsername : VAR_CHAR	

isAdmin : BOOL

isSuperAdmin : BOOL

userDeleted : BOOL

userFirstname : VAR_CHAR

userSurname : VAR_CHAR

userGender : VAR_CHAR

userPassword : VAR_CHAR

userStreet : VAR_CHAR

userCity : VAR_CHAR

userZipcode : VAR_CHAR

userEmail : VAR_CHAR

userTel : VAR_CHAR

userInscriptionDate : DATE

userValidated : BOOL

## **Message**

msgId : bigINT

msgContent : TEXT

msgDate : DATE

msgRead : BOOL

msgSenderParent : BOOL

## **Child**

childId : bigINT

childFirstname : VAR_CHAR

childSurname : VAR_CHAR

childDob : DATE /C’est date of birth/

childAllergies : VAR_CHAR

childBoard : VAR_CHAR

childInscriptionDate : DATE

childValidated : BOOL

childDeleted : BOOL

## **Invoice**

invoiceId : bigINT

parentId : bigINT

childId : bigINT

invoiceAmount : VAR_CHAR

invoicePeriod : VAR_CHAR

invoiceDate : VAR_CHAR

invoicePaid : BOOL
