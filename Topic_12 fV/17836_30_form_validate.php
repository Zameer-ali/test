<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regular Expressions</title>
    <style>
        body{
            background-color: navy;
            color: black;
            font-weight: bold;
        }
        div{
            background-color: whitesmoke;
            width: 50%;
            margin:10px auto;
            box-shadow: 0px 0px 20px 3px gray;
            padding: 10px;
        }
        .center{
            text-align: center;
        }
    </style>
</head>
<body>
    
</body>
<script>
    var string;
    var pattern;
    // no 1 date
    document.write('<div>')
        document.write('<h2 class=center>No:1 Date </h2>')
        string="22-jan-2022"
        pattern=/[0-9]{2}-[a-z]{3}-[0-9]{4}/gim

        document.write("<p class='center'> String:"+string+"</p>")
        document.write("<p class='center'> Pattern:"+pattern+"</p>")
        document.write("<p> Exec: "+pattern.exec(string)+"</p>")
        document.write("<p> Match: "+string.match(pattern)+"</p>")
        document.write("<p> Search: "+string.search(pattern)+"</p>")
        document.write("<p> Replace: "+string.replace(pattern,'@')+"</p>")
    document.write('</div>')
    // no 2 password
    document.write('<div>')
        document.write('<h2 class=center>No:2 Password </h2>')
        string="Khansha@"
        pattern=/[\w]{7,}[\W]{1,}/g
        document.write("<p class='center'> String:"+string+"</p>")
        document.write("<p class='center'> Pattern:"+pattern+"</p>")
        document.write("<p> Exec: "+pattern.exec(string)+"</p>")
        document.write("<p> Match: "+string.match(pattern)+"</p>")
        document.write("<p> Search: "+string.search(pattern)+"</p>")
        document.write("<p> Replace: "+string.replace(pattern,'@')+"</p>")
    document.write('</div>')
    // no 3 Last name
    document.write('<div>')
        document.write('<h2 class=center>No:3 Last Name</h2>')
        string="Tunio"
        pattern=/[a-z]{1,15}/gi
        document.write("<p class='center'> String:"+string+"</p>")
        document.write("<p class='center'> Pattern:"+pattern+"</p>")
        document.write("<p> Exec: "+pattern.exec(string)+"</p>")
        document.write("<p> Match: "+string.match(pattern)+"</p>")
        document.write("<p> Search: "+string.search(pattern)+"</p>")
        document.write("<p> Replace: "+string.replace(pattern,'@')+"</p>")
    document.write('</div>')
    // no 4 Address
    document.write('<div>')
        document.write('<h2 class=center>No:4 Address </h2>')
        string="postofficestreet2jamshoro"
        pattern=/[\w]{1,}/gi
        document.write("<p class='center'> String:"+string+"</p>")
        document.write("<p class='center'> Pattern:"+pattern+"</p>")
        document.write("<p> Exec: "+pattern.exec(string)+"</p>")
        document.write("<p> Match: "+string.match(pattern)+"</p>")
        document.write("<p> Search: "+string.search(pattern)+"</p>")
        document.write("<p> Replace: "+string.replace(pattern,'@')+"</p>")
    document.write('</div>')
    // no 5 Phone No
    document.write('<div>')
        document.write('<h2 class=center>No:5 Phone No </h2>')
        string="0308-7980557"
        pattern=/[0-9]{4}-[0-9]{7}/gi
        document.write("<p class='center'> String:"+string+"</p>")
        document.write("<p class='center'> Pattern:"+pattern+"</p>")
        document.write("<p> Exec: "+pattern.exec(string)+"</p>")
        document.write("<p> Match: "+string.match(pattern)+"</p>")
        document.write("<p> Search: "+string.search(pattern)+"</p>")
        document.write("<p> Replace: "+string.replace(pattern,'@')+"</p>")
    document.write('</div>')
    // no 6 Roll No
    document.write('<div>')
        document.write('<h2 class=center>No:6 Roll No </h2>')
        string="2k19/nfit/03"
        pattern=/[\w]{4}[/][a-z]{4}[/][0-9]{2}/gi
        document.write("<p class='center'> String:"+string+"</p>")
        document.write("<p class='center'> Pattern:"+pattern+"</p>")
        document.write("<p> Exec: "+pattern.exec(string)+"</p>")
        document.write("<p> Match: "+string.match(pattern)+"</p>")
        document.write("<p> Search: "+string.search(pattern)+"</p>")
        document.write("<p> Replace: "+string.replace(pattern,'@')+"</p>")
    document.write('</div>')
    // no 7 Time
    document.write('<div>')
        document.write('<h2 class=center>No:7 Time </h2>')
        string="2:30 pm"
        pattern=/[0-9]:[0-9]{2}[ ]?[(am|pm)]{2}$/gi
        document.write("<p class='center'> String:"+string+"</p>")
        document.write("<p class='center'> Pattern:"+pattern+"</p>")
        document.write("<p> Exec: "+pattern.exec(string)+"</p>")
        document.write("<p> Match: "+string.match(pattern)+"</p>")
        document.write("<p> Search: "+string.search(pattern)+"</p>")
        document.write("<p> Replace: "+string.replace(pattern,'@')+"</p>")
    document.write('</div>')
    // no8 Gender
    document.write('<div>')
        document.write('<h2 class=center>No:8 Gender</h2>')
        string="male"
        pattern=/^[(male|female)]{4,6}$/gi
        document.write("<p class='center'> String:"+string+"</p>")
        document.write("<p class='center'> Pattern:"+pattern+"</p>")
        document.write("<p> Exec: "+pattern.exec(string)+"</p>")
        document.write("<p> Match: "+string.match(pattern)+"</p>")
        document.write("<p> Search: "+string.search(pattern)+"</p>")
        document.write("<p> Replace: "+string.replace(pattern,'@')+"</p>")
    document.write('</div>')
    // no 9 city
    document.write('<div>')
        document.write('<h2 class=center>No: 9 city</h2>')
        string="Jamshoro"
        pattern=/^[a-z]{1,20}$/gi
        document.write("<p class='center'> String:"+string+"</p>")
        document.write("<p class='center'> Pattern:"+pattern+"</p>")
        document.write("<p> Exec: "+pattern.exec(string)+"</p>")
        document.write("<p> Match: "+string.match(pattern)+"</p>")
        document.write("<p> Search: "+string.search(pattern)+"</p>")
        document.write("<p> Replace: "+string.replace(pattern,'@')+"</p>")
    document.write('</div>')
    // no10 Fax
    document.write('<div>')
        document.write('<h2 class=center>No:10  Fax</h2>')
        string="+19-212-9876543"//+(country code)(area code)(fax number)
        pattern=/[+][0-9]{1,3}-[\d]{3}-[\d]{7}$/gi
        document.write("<p class='center'> String:"+string+"</p>")
        document.write("<p class='center'> Pattern:"+pattern+"</p>")
        document.write("<p> Exec: "+pattern.exec(string)+"</p>")
        document.write("<p> Match: "+string.match(pattern)+"</p>")
        document.write("<p> Search: "+string.search(pattern)+"</p>")
        document.write("<p> Replace: "+string.replace(pattern,'@')+"</p>")
    document.write('</div>')
    // no 11 zip code
    document.write('<div>')
        document.write('<h2 class=center>No:11 zip code</h2>')
        string="13203"
        pattern=/^[0-9]{5}$/gi
        document.write("<p class='center'> String:"+string+"</p>")
        document.write("<p class='center'> Pattern:"+pattern+"</p>")
        document.write("<p> Exec: "+pattern.exec(string)+"</p>")
        document.write("<p> Match: "+string.match(pattern)+"</p>")
        document.write("<p> Search: "+string.search(pattern)+"</p>")
        document.write("<p> Replace: "+string.replace(pattern,'@')+"</p>")
    document.write('</div>')
    // no 13 country
    document.write('<div>')
        document.write('<h2 class=center>No:13 country</h2>')
        string="Pakistan"
        pattern=/^[a-z]{1,20}$/gi
        document.write("<p class='center'> String:"+string+"</p>")
        document.write("<p class='center'> Pattern:"+pattern+"</p>")
        document.write("<p> Exec: "+pattern.exec(string)+"</p>")
        document.write("<p> Match: "+string.match(pattern)+"</p>")
        document.write("<p> Search: "+string.search(pattern)+"</p>")
        document.write("<p> Replace: "+string.replace(pattern,'@')+"</p>")
    document.write('</div>')
    // no 14 Passport
    document.write('<div>')
        document.write('<h2 class=center>No:14 Passport</h2>')
        string="PA1234567" // only for example purpose
        pattern=/^[a-z]{2}[0-9]{7}$/gi
        document.write("<p class='center'> String:"+string+"</p>")
        document.write("<p class='center'> Pattern:"+pattern+"</p>")
        document.write("<p> Exec: "+pattern.exec(string)+"</p>")
        document.write("<p> Match: "+string.match(pattern)+"</p>")
        document.write("<p> Search: "+string.search(pattern)+"</p>")
        document.write("<p> Replace: "+string.replace(pattern,'@')+"</p>")
    document.write('</div>')
    // no 15 Social Security Number
    document.write('<div>')
        document.write('<h2 class=center>No:15 Social Security Number</h2>')
        string="222-22-2222"
        pattern=/^[\d]{3}-[\d]{2}-[\d]{4}$/gi
        document.write("<p class='center'> String:"+string+"</p>")
        document.write("<p class='center'> Pattern:"+pattern+"</p>")
        document.write("<p> Exec: "+pattern.exec(string)+"</p>")
        document.write("<p> Match: "+string.match(pattern)+"</p>")
        document.write("<p> Search: "+string.search(pattern)+"</p>")
        document.write("<p> Replace: "+string.replace(pattern,'@')+"</p>")
    document.write('</div>')
    // no 16 Age
    document.write('<div>')
        document.write('<h2 class=center>No:16 Age</h2>')
        string="30"
        pattern=/^[\d]{1,3}$/gi
        document.write("<p class='center'> String:"+string+"</p>")
        document.write("<p class='center'> Pattern:"+pattern+"</p>")
        document.write("<p> Exec: "+pattern.exec(string)+"</p>")
        document.write("<p> Match: "+string.match(pattern)+"</p>")
        document.write("<p> Search: "+string.search(pattern)+"</p>")
        document.write("<p> Replace: "+string.replace(pattern,'@')+"</p>")
    document.write('</div>')
    // no 17 Date of Birth
    document.write('<div>')
        document.write('<h2 class=center>No:17 Date of Birth</h2>')
        string="22-11-2022"
        pattern=/[\d]{2}-[\d]{2}-[\d]{4}$/gi
        document.write("<p class='center'> String:"+string+"</p>")
        document.write("<p class='center'> Pattern:"+pattern+"</p>")
        document.write("<p> Exec: "+pattern.exec(string)+"</p>")
        document.write("<p> Match: "+string.match(pattern)+"</p>")
        document.write("<p> Search: "+string.search(pattern)+"</p>")
        document.write("<p> Replace: "+string.replace(pattern,'@')+"</p>")
    document.write('</div>')
    // no 18 ID
    document.write('<div>')
        document.write('<h2 class=center>No:18 ID</h2>')
        string="ID_34234"
        pattern=/[\w]{8}/gi
        document.write("<p class='center'> String: "+string+"</p>")
        document.write("<p class='center'> Pattern:"+pattern+"</p>")
        document.write("<p> Exec:  "+pattern.exec(string)+"</p>")
        document.write("<p> Match:  "+string.match(pattern)+"</p>")
        document.write("<p> Search:  "+string.search(pattern)+"</p>")
        document.write("<p> Replace:  "+string.replace(pattern,'@')+"</p>")
    document.write('</div>')
    // no 19 Religion
    document.write('<div>')
        document.write('<h2 class=center>No:19 Religion</h2>')
        string="Islam"
        pattern=/[a-z]{1,20}$/gi
        document.write("<p class='center'> String: "+string+"</p>")
        document.write("<p class='center'> Pattern:"+pattern+"</p>")
        document.write("<p> Exec:  "+pattern.exec(string)+"</p>")
        document.write("<p> Match:  "+string.match(pattern)+"</p>")
        document.write("<p> Search:  "+string.search(pattern)+"</p>")
        document.write("<p> Replace:  "+string.replace(pattern,'@')+"</p>")
    document.write('</div>')
    // no 20 Profession
    document.write('<div>')
        document.write('<h2 class=center>No:20 Profession</h2>')
        string="Farmer"
        pattern=/[a-z]{1,20}$/gi
        document.write("<p class='center'> String: "+string+"</p>")
        document.write("<p class='center'> Pattern:"+pattern+"</p>")
        document.write("<p> Exec:  "+pattern.exec(string)+"</p>")
        document.write("<p> Match:  "+string.match(pattern)+"</p>")
        document.write("<p> Search:  "+string.search(pattern)+"</p>")
        document.write("<p> Replace:  "+string.replace(pattern,'@')+"</p>")
    document.write('</div>')
    // no 21 percentage
    document.write('<div>')
        document.write('<h2 class=center>No:21 percentage</h2>')
        string="20%"
        pattern=/[0-9]{1,3}[%]$/gi
        document.write("<p class='center'> String: "+string+"</p>")
        document.write("<p class='center'> Pattern:"+pattern+"</p>")
        document.write("<p> Exec:  "+pattern.exec(string)+"</p>")
        document.write("<p> Match:  "+string.match(pattern)+"</p>")
        document.write("<p> Search:  "+string.search(pattern)+"</p>")
        document.write("<p> Replace:  "+string.replace(pattern,'@')+"</p>")
    document.write('</div>')
    // no 22  father's Name
    document.write('<div>')
        document.write('<h2 class=center>No: 22 father Name</h2>')
        string="Shahmir ali"
        pattern=/[a-z ]{1,20}$/gi
        document.write("<p class='center'> String: "+string+"</p>")
        document.write("<p class='center'> Pattern:"+pattern+"</p>")
        document.write("<p> Exec:  "+pattern.exec(string)+"</p>")
        document.write("<p> Match:  "+string.match(pattern)+"</p>")
        document.write("<p> Search:  "+string.search(pattern)+"</p>")
        document.write("<p> Replace:  "+string.replace(pattern,'@')+"</p>")
    document.write('</div>')
    // no 23 Bank Account
    document.write('<div>')
        document.write('<h2 class=center>No:23 Bank Account</h2>')
        var code="4100"//branch code 
        string=code+"3134564345"//account number
        pattern=/[\d]{4}[\d]{10}$/gi
        document.write("<p class='center'> String: "+string+"</p>")
        document.write("<p class='center'> Pattern:"+pattern+"</p>")
        document.write("<p> Exec:  "+pattern.exec(string)+"</p>")
        document.write("<p> Match:  "+string.match(pattern)+"</p>")
        document.write("<p> Search:  "+string.search(pattern)+"</p>")
        document.write("<p> Replace:  "+string.replace(pattern,'@')+"</p>")
    document.write('</div>')
    // no 24 serial No# 
    document.write('<div>')
        document.write('<h2 class=center>No:24 serial No #</h2>')
        string="01"
        pattern=/[\d]{1,}$/gi
        document.write("<p class='center'> String: "+string+"</p>")
        document.write("<p class='center'> Pattern:"+pattern+"</p>")
        document.write("<p> Exec:  "+pattern.exec(string)+"</p>")
        document.write("<p> Match:  "+string.match(pattern)+"</p>")
        document.write("<p> Search:  "+string.search(pattern)+"</p>")
        document.write("<p> Replace:  "+string.replace(pattern,'@')+"</p>")
    document.write('</div>')
    // no 25 Currency 
    document.write('<div>')
        document.write('<h2 class=center>No:25 Currency</h2>')
        string="ruppee"
        pattern=/[a-z]{1,20}[^ ]$/gi
        document.write("<p class='center'> String: "+string+"</p>")
        document.write("<p class='center'> Pattern:"+pattern+"</p>")
        document.write("<p> Exec:  "+pattern.exec(string)+"</p>")
        document.write("<p> Match:  "+string.match(pattern)+"</p>")
        document.write("<p> Search:  "+string.search(pattern)+"</p>")
        document.write("<p> Replace:  "+string.replace(pattern,'@')+"</p>")
    document.write('</div>')
    // no 26 Atm pin 
    document.write('<div>')
        document.write('<h2 class=center>No:26 Atm pin</h2>')
        string="5674"
        pattern=/^[\d]{4}$/gi
        document.write("<p class='center'> String: "+string+"</p>")
        document.write("<p class='center'> Pattern:"+pattern+"</p>")
        document.write("<p> Exec:  "+pattern.exec(string)+"</p>")
        document.write("<p> Match:  "+string.match(pattern)+"</p>")
        document.write("<p> Search:  "+string.search(pattern)+"</p>")
        document.write("<p> Replace:  "+string.replace(pattern,'@')+"</p>")
    document.write('</div>')
    // no 27 Hidaya Id 
    document.write('<div>')
        document.write('<h2 class=center>No:27 Hidaya Id</h2>')
        string="17836" 
        pattern=/^[\d]{5}$/gi
        document.write("<p class='center'> String: "+string+"</p>")
        document.write("<p class='center'> Pattern:"+pattern+"</p>")
        document.write("<p> Exec:  "+pattern.exec(string)+"</p>")
        document.write("<p> Match:  "+string.match(pattern)+"</p>")
        document.write("<p> Search:  "+string.search(pattern)+"</p>")
        document.write("<p> Replace:  "+string.replace(pattern,'@')+"</p>")
    document.write('</div>')
    // no 27 Hidaya Id 
    document.write('<div>')
        document.write('<h2 class=center>No:27 Hidaya Id</h2>')
        string="17836" 
        pattern=/^[\d]{5}$/gi
        document.write("<p class='center'> String: "+string+"</p>")
        document.write("<p class='center'> Pattern:"+pattern+"</p>")
        document.write("<p> Exec:  "+pattern.exec(string)+"</p>")
        document.write("<p> Match:  "+string.match(pattern)+"</p>")
        document.write("<p> Search:  "+string.search(pattern)+"</p>")
        document.write("<p> Replace:  "+string.replace(pattern,'@')+"</p>")
    document.write('</div>')
    // no 27 Hidaya Id   
    document.write('<div>')
        document.write('<h2 class=center>No:27 Hidaya Id</h2>')
        string="17836" 
        pattern=/^[\d]{5}$/gi
        document.write("<p class='center'> String: "+string+"</p>")
        document.write("<p class='center'> Pattern:"+pattern+"</p>")
        document.write("<p> Exec:  "+pattern.exec(string)+"</p>")
        document.write("<p> Match:  "+string.match(pattern)+"</p>")
        document.write("<p> Search:  "+string.search(pattern)+"</p>")
        document.write("<p> Replace:  "+string.replace(pattern,'@')+"</p>")
    document.write('</div>')
    // no 28 hidaya course   
    document.write('<div>')
        document.write('<h2 class=center>No:28 hidaya course</h2>')
        string="PHP-Basic-2k22" 
        pattern=/^PHP-[a-z]{5,7}-[\w]{4}$/gi
        document.write("<p class='center'> String: "+string+"</p>")
        document.write("<p class='center'> Pattern:"+pattern+"</p>")
        document.write("<p> Exec:  "+pattern.exec(string)+"</p>")
        document.write("<p> Match:  "+string.match(pattern)+"</p>")
        document.write("<p> Search:  "+string.search(pattern)+"</p>")
        document.write("<p> Replace:  "+string.replace(pattern,'@')+"</p>")
    document.write('</div>')
    // no 29   Telephone
    document.write('<div>')
        document.write('<h2 class=center>No:29 Telephone</h2>')
        string="022 2115476" 
        pattern=/^[\d]{3}[ ]?[\d]{7}$/gi
        document.write("<p class='center'> String: "+string+"</p>")
        document.write("<p class='center'> Pattern:"+pattern+"</p>")
        document.write("<p> Exec:  "+pattern.exec(string)+"</p>")
        document.write("<p> Match:  "+string.match(pattern)+"</p>")
        document.write("<p> Search:  "+string.search(pattern)+"</p>")
        document.write("<p> Replace:  "+string.replace(pattern,'@')+"</p>")
    document.write('</div>')
    // no 29   Telephone
    document.write('<div>')
        document.write('<h2 class=center>No:29 Telephone</h2>')
        string="022 2115476" 
        pattern=/^[\d]{3}[ ]?[\d]{7}$/gi
        document.write("<p class='center'> String: "+string+"</p>")
        document.write("<p class='center'> Pattern:"+pattern+"</p>")
        document.write("<p> Exec:  "+pattern.exec(string)+"</p>")
        document.write("<p> Match:  "+string.match(pattern)+"</p>")
        document.write("<p> Search:  "+string.search(pattern)+"</p>")
        document.write("<p> Replace:  "+string.replace(pattern,'@')+"</p>")
    document.write('</div>')
    // no 30 Country Code
    document.write('<div>')
        document.write('<h2 class=center>No:30 Country Code</h2>')
        string="+92" 
        pattern=/^[+][^ ][\d]{1,3}$/gi
        document.write("<p class='center'> String: "+string+"</p>")
        document.write("<p class='center'> Pattern:"+pattern+"</p>")
        document.write("<p> Exec:  "+pattern.exec(string)+"</p>")
        document.write("<p> Match:  "+string.match(pattern)+"</p>")
        document.write("<p> Search:  "+string.search(pattern)+"</p>")
        document.write("<p> Replace:  "+string.replace(pattern,'@')+"</p>")
    document.write('</div>')
    
</script>
</html>