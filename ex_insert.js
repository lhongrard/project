$('#lpForm').submit(function () {
    event.preventDefault();
    var clickConf = confirm("คุณแน่ใจหรือไม่ค่ะ");
    if (clickConf == true) {
        $("#lpSendFormBtn").addClass("loading");
        var data = $("#lpForm").serializeArray()
        var dataJson = {}  
        $.each(data, function(key,value){
            dataJson[value.name] = value.value
        });
        dataJson.token = localStorage.getItem('token')
        dataJson.vilage_no = localStorage.getItem("vilage_no")
        dataJson.house_no = localStorage.getItem("house_no")
        dataJson.house_id = localStorage.getItem("house_id")
        dataJson.token = localStorage.getItem('token')
        $.ajax(
            {
                method: "POST",
                url: "https://bayclouds.com/insertlatentpopulation",
                data: dataJson
            }
        ).done(function(msg){
            console.log(msg)
            var checkDistributor = 0;
            if(msg.status == "ok"){
                var fullname = `${dataJson.prename}${dataJson.firstname} ${dataJson.lastname}`
                $('#distributor option').each(function() {
                    if($(this).val() == fullname){
                        checkDistributor = 1;
                    }
                });
                 if(checkDistributor != 1){
                    $('#distributor').append('<option value="'+fullname+'">'+fullname+'</option>');
                }
                alert("บันทึกสำเร็จ");
                $("#myModal #closeModal").click()
                document.lpForm.reset();
                //$('#example').DataTable().ajax.reload();
                refreshPopTable()
            }else{
                alert("Error : ไม่สามารถบันทึกได้");
            }
        })
        $("#lpSendFormBtn").removeClass("loading"); 
    }
});