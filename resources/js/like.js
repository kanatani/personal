$(function() {
    $('#like_button').on('click',function() {
        let userid = $('.userid').val();
        let myid = $('.myid').val();
        $.ajax({
            headers: {
           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            },
            type:'POST',
            url: '/person/user/' + userid,
            data: {
                'userid' : userid,
            },
            dataType: 'json',
        }).done(function(data) {
            console.log('成功');
            console.log(data['id']);
            if(data['id'] == undefined)
            {
                $('#like_button').text('解除');
                $('#like_button').addClass('actives');
            }
            else 
            {
                $('#like_button').text('いいね');
                $('#like_button').removeClass('actives');
            }
        }).fail(function(jqXHR, textStatus, errorThrown) {
            console.log(userid);
            console.log('失敗');
            console.log(myid);
        });
    })
});