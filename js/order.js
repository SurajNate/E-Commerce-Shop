
/* cart */

function dropdown1() {
    document.getElementById("card").style.display = "block";
    document.getElementById("upi").style.display = "none";
    document.getElementById("paymentrow").style.border = "1px solid blue";
    document.getElementById("paymentrow3").style.border = "1px solid rgb(150, 150, 150)";
    document.getElementById("paymentrow4").style.border = "1px solid rgb(150, 150, 150)";
    document.getElementById("paymentrow").style.boxShadow = "0 0 4px blue";
    document.getElementById("paymentrow3").style.boxShadow = "none";
    document.getElementById("paymentrow4").style.boxShadow = "none";
}

function dropdown2() {
    document.getElementById("upi").style.display = "block";
    document.getElementById("card").style.display = "none";
    document.getElementById("paymentrow3").style.border = "1px solid blue";
    document.getElementById("paymentrow").style.border = "1px solid rgb(150, 150, 150)";
    document.getElementById("paymentrow4").style.border = "1px solid rgb(150, 150, 150)";
    document.getElementById("paymentrow3").style.boxShadow = "0 0 4px blue";
    document.getElementById("paymentrow").style.boxShadow = "none";
    document.getElementById("paymentrow4").style.boxShadow = "none";
}
function dropdown3() {
    document.getElementById("upi").style.display = "none";
    document.getElementById("card").style.display = "none";
    document.getElementById("paymentrow4").style.border = "1px solid blue";
    document.getElementById("paymentrow").style.border = "1px solid rgb(150, 150, 150)";
    document.getElementById("paymentrow3").style.border = "1px solid rgb(150, 150, 150)";
    document.getElementById("paymentrow4").style.boxShadow = "0 0 4px blue";
    document.getElementById("paymentrow").style.boxShadow = "none";
    document.getElementById("paymentrow3").style.boxShadow = "none";
}
function termsview() {
    var checkBox = document.getElementById("check");
    if (checkBox.checked == true) {
        document.getElementById("terms").innerHTML = "<u>Terms and Conditions</u>"
    } else {
        document.getElementById("terms").innerHTML = "<span>Terms and Conditions</span>"
    }
}

function validateform() {
    var fname = document.getElementById("fname").value;
    var lname = document.getElementById("lname").value;
    var mobno = document.getElementById("mobno").value;
    var email = document.getElementById("email").value;
    var pincode = document.getElementById("pincode").value;
    var upiid = document.getElementById("upiId").value;
    var checkBox = document.getElementById("check");
    var cardno = document.getElementById("cardno").value;
    var cvv = document.getElementById("cvvno").value;

    if (fname == null || fname == "" || lname == null || lname == "") {
        alert("Enter Your Full name Correctly");
        return false;
    }
    if (mobno == null || mobno == "") {
        alert("Phone no can't be blank");
        return false;
    } else if (mobno.length < 10 || mobno.length > 10) {
        alert("Enter Phone no correctly");
        return false;
    }
    if (email == null || email == "") {
        alert('Enter Your Email');
        return false;
    }
    if (pincode == null || pincode == "") {
        alert('Pincode Cant be blank');
        return false;
    } else if (pincode.length < 6 || pincode.length > 6) {
        alert('Enter PinCode Correctly');
        return false;
    }
    if (document.getElementById("btn-1").checked == true) {

        if (cardno == null || cardno == "") {
            alert('Card No Cant be blank');
            return false;
        }
        else if (cardno.length < 12 || cardno.length > 12) {
            alert('Enter Card no Correctly');
            return false;
        }
        if (cvv == null || cvv == "") {
            alert('CVV no Cant be blank');
            return false;
        }
        else if (cvv.length < 3 || cvv.length > 3) {
            alert('Enter CVV no Corectly');
            return false;
        }
    }

    if (document.getElementById("btn-2").checked == true) {
        if (upiid == null || upiid == "") {
            alert('Enter UPI ID');
            return false;
        }
    }

    if (checkBox.checked == true) {
        alert('Successfully Submited');
        return false;
    } else {
        alert('accept terms and conditions first..')
        return false;
    }
}

function downloadFile() {
    var name = "";
    var mob = "";
    var mail = "";
    var add = "";
    var loc = "";
    var details = "";
    var card = "";
    var cardx = "";
    var cvv = "";
    var upi = "";
    var fname = document.getElementById("fname").value;
    var lname = document.getElementById("lname").value;
    var infoname = name.concat("********** 𝐈𝐍𝐅𝐎𝐑𝐌𝐀𝐓𝐈𝐎𝐍 𝐎𝐅 𝐂𝐔𝐒𝐓𝐎𝐌𝐄𝐑 **********\n\n", "Name of Customer :", " ", fname, " ", lname);

    var mobno = document.getElementById("mobno").value;
    var infomobno = mob.concat("\nPhone no. of Customer : ", mobno);

    var email = document.getElementById("email").value;
    var infoemail = mail.concat("\nEmail of Customer : ", email, "\n");

    var infostate = document.querySelector('#two').value;
    var infopincode = document.getElementById("pincode").value;
    var location = loc.concat("State : ", infostate, "\nPinCode : ", infopincode);

    var address = document.getElementById("address").value;
    var infoaddress = add.concat("\nAdress of Customer : ", address);
 
    var transactiondetails = details.concat("\n\n********** 𝐓𝐑𝐀𝐍𝐒𝐀𝐂𝐓𝐈𝐎𝐍 𝐃𝐄𝐓𝐀𝐈𝐋𝐒 **********\n\n", "Transaction Mode : ");

    var transactionmode = document.querySelector('input[name="payment"]:checked').value;
    var cardno = document.getElementById("cardno").value;
    var infocardno = card.concat("\n\nCard no. : ", cardno, "\n");
    var month = document.querySelector('#expirymonth').value;
    var year = document.querySelector('#expiryyear').value;
    var cardexpiry = cardx.concat("Card Expiry Date : ", month, " ", year, "\n");
    var cvvNo = document.getElementById("cvvno").value;
    var cvvno = cvv.concat("CVV no. : ", cvvNo);
    var upiId = document.getElementById("upiId").value;
    var upiid = upi.concat("\nUPI Id : ", upiId, " ")

    var file = new File([infoname, infomobno, infoemail, location, infoaddress, transactiondetails, transactionmode, infocardno, cardexpiry, cvvno, upiid], "Order.txt", { type: "text/plain : charset=utf-8" });

    var url = window.URL.createObjectURL(file);
    var elem = document.createElement("a");
    elem.style.display = "none";
    elem.href = url;
    elem.download = file.name;
    elem.click();
    window.URL.revokeObjectURL(url);
}

 