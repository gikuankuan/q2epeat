<fieldset>
    <legend>忘記密碼</legend>
    <table>
        <tr>
            <td>請輸入信箱以查詢密碼</td>
        </tr>
        <tr>
            <td><input type="text" id="mail" name="mail"></td>
        </tr>
        <tr>
            <td>
                <input type="button" value="尋找" onclick="find()">
            </td>
        </tr>
        <tr>
            <td id="get" name="get">

            </td>
        </tr>
    </table>
</fieldset>
<script>
    function find() {
        let mail = $("#mail").val();

        $.get("api/forget.php", {mail}, function(res) {
            $("#get").html(res)
        })

    }
</script>