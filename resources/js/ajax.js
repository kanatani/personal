$(function() {
    $('#search_submit').on('click', function() {
        $('.searchtext').empty();
        let userid = $('.searchtext').val();
        if(!userid) {
            return false;
        }
        $.ajax({
            headers: {
                   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
              },
            type:'GET',
            url: '/person/search/' + userid,
            data: {
                'userid' : userid,
            },
            dataType: 'json',
        }).done(function (data) {
            console.log('seikou');
            console.log(data.image);
            let name=data.name;
            let image = data.image;
            let id = data.userid;

            let username = $(`<p class="username">${name}</p>`);
           let userimage = $(`<a href="/person/user/${userid}" class="userimage" ><img src="${image}" alt=""></a>`);
            if(data.name === undefined) {
                $('.userlist').append('<p>user情報が見つからなかったです。</p>');
                $('.userlist').append('<p>useridをもう一度ご確認してください。</p>');
            }
            else {
                $('.userlist').empty();
                $('.userlist').append(userimage);
                $('.userlist').append(username);
            }
        }).fail(function(jqXHR, textStatus, errorThrown) {
            console.log('なくね');
        });
    });
});
