$(document).ready(function () {


    var slimscrollElement = $('.main-slimscroll')[0];
    const token = $('meta[name="csrf-token"]').attr('content');
    const actionLoadMessage = $('.get-message').attr('data-action');
    let idAction;
    let boxMessage = $('.messages');
    let headerChat = $('.chat-header');
    let user = $('.user-details');
    headerChat.slideUp();
    boxMessage.html('');

    function scrollToBottom() {
        slimscrollElement.scrollTop = slimscrollElement.scrollHeight;
    }


    $('.btn.send-btn').on('click', function (e) {
        e.preventDefault();
        var messages = $('input[name="message-value"]'); // Tạo dữ liệu form
        console.log(token);
        console.log(messages)
        $.ajax({
            url: 'chat/send',
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': token // Thêm token CSRF cho bảo mật
            },
            data: {
                message: messages.val(),
                user_id: infoUser.id,
                recipient_id: idAction
            },
            success: function (data) {
                messages.val('');
                console.log(data); // Log phản hồi từ máy chủ
                boxMessage.append(`
                <div class="chats chats-right">
                                <div class="chat-avatar">
                                    <img src="${infoUser.avatar}" class="rounded-circle dreams_chat" alt="image">
                                </div>
                                <div class="chat-content">
                                    <div class="message-content">
                                        ${data.message}
                                    </div>
                                </div>
                                <div class="chat-action-btns ms-3">
                                    <div class="chat-action-col">
                                        <a class="#" href="#" data-bs-toggle="dropdown">
                                            <i class="fas fa-ellipsis-h"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="#" class="dropdown-item dream_profile_menu">Copy <span><i class="far fa-copy"></i></span></a>
                                            <a href="#" class="dropdown-item">Save <span class="material-icons">save</span></a>
                                            <a href="#" class="dropdown-item">Forward <span><i class="fas fa-share"></i></span></a>
                                            <a href="#" class="dropdown-item">Delete <span><i class="far fa-trash-alt"></i></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                `);
                scrollToBottom();
            },
            error: function (jqXHR) {
                console.log(jqXHR);
            }
        })
    });

    $(document).on('click', '.user-list-item', function (e) {
        let clickedItem = e.currentTarget;
        $('.user-list-item').removeClass('active');
        idAction = clickedItem.getAttribute('data-id');
        headerChat.slideDown();
        loadMessage(actionLoadMessage, idAction);
        e.currentTarget.classList.add('active');
    })

    function loadMessage(action, id) {
        $.ajax({
            url: action,
            method: "POST",
            data: {
                recipient_id: id,
            },
            headers: {
                'X-CSRF-TOKEN': token // Thêm token CSRF cho bảo mật
            },
            success: function (data) {
                console.log(data)
                boxMessage.html('');
                user.html('');
                user.append(`
                <div class="user-details">
                    <div class="d-lg-none ms-2">
                        <ul class="list-inline mt-2 me-2">
                            <li class="list-inline-item">
                                <a class="text-muted px-0 left_side" href="#" data-chat="open">
                                    <i class="fas fa-arrow-left"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <figure class="avatar ms-1">
                        <img src="${data.user.avatar}" class="rounded-circle" alt="image">
                    </figure>
                    <div class="mt-1">
                        <h5>${data.user.name}</h5>
                        <small class="online">
                            Online
                        </small>
                    </div>
                </div>
                `);
                $.each(data.message, function (index, item) {
                    var status = (item.user_id === infoUser.id) ? "chats-right" : "";
                    var avatar = (item.user_id === infoUser.id) ? infoUser.avatar : data.user.avatar;

                    boxMessage.append(`
                                <div class="chats ${status}">
                                    <div class="chat-avatar">
                                        <img src="${avatar}" class="rounded-circle dreams_chat" alt="image">
                                    </div>
                                    <div class="chat-content">
                                        <div class="message-content">
                                            ${item.message}
                                        </div>
                                    </div>
                                    <div class="chat-action-btns ms-3">
                                        <div class="chat-action-col">
                                            <a class="#" href="#" data-bs-toggle="dropdown">
                                                <i class="fas fa-ellipsis-h"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a href="#" class="dropdown-item dream_profile_menu">Copy <span><i class="far fa-copy"></i></span></a>
                                                <a href="#" class="dropdown-item">Save <span class="material-icons">save</span></a>
                                                <a href="#" class="dropdown-item">Forward <span><i class="fas fa-share"></i></span></a>
                                                <a href="#" class="dropdown-item">Delete <span><i class="far fa-trash-alt"></i></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                `);
                });
                scrollToBottom();
            },
            error: function (jqXHR) {
                console.log(jqXHR);
            }
        })
    }

    Echo.private('private-chat.' + infoUser.id)
        .listen('NewMessageEvent', function (data) {
            console.log(data);
            boxMessage.append(`
                                <div class="chats">
                                    <div class="chat-avatar">
                                        <img src="${data.avatar}" class="rounded-circle dreams_chat" alt="image">
                                    </div>
                                    <div class="chat-content">
                                        <div class="message-content">
                                            ${data.message}
                                        </div>
                                    </div>
                                    <div class="chat-action-btns ms-3">
                                        <div class="chat-action-col">
                                            <a class="#" href="#" data-bs-toggle="dropdown">
                                                <i class="fas fa-ellipsis-h"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a href="#" class="dropdown-item dream_profile_menu">Copy <span><i class="far fa-copy"></i></span></a>
                                                <a href="#" class="dropdown-item">Save <span class="material-icons">save</span></a>
                                                <a href="#" class="dropdown-item">Forward <span><i class="fas fa-share"></i></span></a>
                                                <a href="#" class="dropdown-item">Delete <span><i class="far fa-trash-alt"></i></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                `);
            scrollToBottom();
        });
});
