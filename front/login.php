<fieldset>
    <legend>會員登入</legend>

    <table class="cent">
        <tr>
            <td>帳號</td>
            <td><input type="text" name="acc" id="acc"></td>
        </tr>
        <tr>
            <td>密碼</td>
            <td><input type="password" name="pw" id="pw"></td>

        </tr>
        <tr>
            <td>
                <input type="button" value="登入" onclick="login()">
                <input type="reset" value="清除">
            </td>
            <td>
                <a href="?do=forget">忘記密碼</a>
                <a href="?do=reg">尚未註冊</a>

            </td>
        </tr>
    </table>

</fieldset>

<script>
    function login() {
        let acc = $("#acc").val();
        let pw = $("#pw").val();
        console.log(acc, pw)

        if (acc == "" || pw == "") {
            alert("照號密碼不可為空白")
        } else {
            $.get("api/acc.php", { acc }, function(res) {
                if (res == 1) {
                    alert("查無帳號")
                } else {
                    $.get("api/pw.php",{acc,pw},function(res){
                        console.log(res)
                        if(res == 1){
                            if(acc = 'admin'){
                                location.href="?do=admin.php"
                            }else{
                                location.href="index.php"
                            }
                        }else{
                            alert("密碼有誤")
                        }
                    })
                }
            })
        }
    }
</script>