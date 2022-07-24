<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Box assignment</title>
</head>
<body>
    <center>
        <h2>Check Box Assignment</h2>
        <div>
            Select All: <input type="checkbox" name="select_all" id="select_all" onclick="SelectAll(this)">
            <hr>
            check Box 1: <input type="checkbox" name="" id="" class="check" onclick="Check()"><br/>
            check Box 2: <input type="checkbox" name="" id="" class="check" onclick="Check()"><br/>
            check Box 3: <input type="checkbox" name="" id="" class="check" onclick="Check()"><br/>
            check Box 4: <input type="checkbox" name="" id="" class="check" onclick="Check()"><br/>
            check Box 5: <input type="checkbox" name="" id="" class="check" onclick="Check()"><br/>
        </div>
    </center>
</body>
<script>
    function SelectAll(object){
        check=document.querySelectorAll('.check')
        for (let i = 0; i < check.length; i++) {
            check[i].checked=object.checked
        }
    }
    function Check(){
        check=document.querySelectorAll('.check')
        var flag=true;
        for (let i = 0; i < check.length; i++) {
            if (!(check[i].checked)) {
                flag=false
                break;
            }
        }
        if (flag) {
            document.getElementById('select_all').checked=true
        }else{
            document.getElementById('select_all').checked=false
        }
    }

</script>
</html>