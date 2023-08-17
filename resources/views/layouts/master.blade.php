<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from dreamschat.dreamguystech.com/template-html/template2/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Aug 2023 04:44:39 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dreams Chat - Html Template</title>

    @include('layouts.style')
    @yield('page-style')
</head>
<body>

<div class="main-wrapper">

    <div class="content main_content">

        @include('layouts.sidebar')

        <div class="sidebar-group left-sidebar chat_sidebar">

            <div id="chats" class="left-sidebar-wrap sidebar active slimscroll">
                <div class="slimscroll">

                    <div class="left-chat-title d-flex justify-content-between align-items-center">
                        <div class="chat-title">
                            <h4>CHATS</h4>
                        </div>
                        <div class="add-section">
                            <ul>
                                <li><a href="group.html"><span class="material-icons">group</span></a></li>
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#add-user"><i
                                            class="fas fa-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="search_chat has-search">
                        <span class="fas fa-search form-control-feedback"></span>
                        <input class="form-control chat_input" id="search-contacts" type="text"
                               placeholder="Search Contacts">
                    </div>

                    <div class="top-online-contacts">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="top-contacts-box">
                                        <div class="profile-img online">
                                            <img src="assets/img/avatar/avatar-8.jpg" alt>
                                        </div>
                                        <div class="profile-name">
                                            <span>helen</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="top-contacts-box">
                                        <div class="profile-img online">
                                            <img src="assets/img/avatar/avatar-7.jpg" alt>
                                        </div>
                                        <div class="profile-name">
                                            <span>Prince</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="top-contacts-box">
                                        <div class="profile-img online">
                                            <img src="assets/img/avatar/avatar-13.jpg" alt>
                                        </div>
                                        <div class="profile-name">
                                            <span>Nathan</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="top-contacts-box">
                                        <div class="profile-img online">
                                            <img src="assets/img/avatar/avatar-3.jpg" alt>
                                        </div>
                                        <div class="profile-name">
                                            <span>Maria</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="top-contacts-box">
                                        <div class="profile-img online">
                                            <img src="assets/img/avatar/avatar-4.jpg" alt>
                                        </div>
                                        <div class="profile-name">
                                            <span>Prince</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="top-contacts-box">
                                        <div class="profile-img online">
                                            <img src="assets/img/avatar/avatar-2.jpg" alt>
                                        </div>
                                        <div class="profile-name">
                                            <span>Maria</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="sidebar-body" id="chatsidebar">

                        <div class="left-chat-title d-flex justify-content-between align-items-center ps-0 pe-0">
                            <div class="chat-title">
                                <h4>Recent Chats</h4>
                            </div>
                            <div class="add-section">
                                <a href="#"><i class="fas fa-edit"></i></a>
                            </div>
                        </div>

                        <ul class="user-list mt-2">
                            <li class="user-list-item">
                                <div class="avatar avatar-online">
                                    <img src="assets/img/avatar/avatar-8.jpg" class="rounded-circle" alt="image">
                                </div>
                                <div class="users-list-body">
                                    <div>
                                        <h5>Regina Dickerson</h5>
                                        <p>It seems logical that the</p>
                                    </div>
                                    <div class="last-chat-time">
                                        <small class="text-muted">05 min</small>
                                        <div class="new-message-count">11</div>
                                    </div>
                                </div>
                            </li>
                            <li class="user-list-item">
                                <div>
                                    <div class="avatar avatar-away">
                                        <img src="assets/img/avatar/avatar-9.jpg" class="rounded-circle" alt="image">
                                    </div>
                                </div>
                                <div class="users-list-body">
                                    <div>
                                        <h5>Forest Kroch</h5>
                                        <p>It seems logical that the</p>
                                    </div>
                                    <div class="last-chat-time">
                                        <small class="text-muted">05 min</small>
                                        <div class="new-message-count">11</div>
                                    </div>
                                </div>
                            </li>
                            <li class="user-list-item item-typing">
                                <div>
                                    <div class="avatar avatar-online">
                                        <img src="assets/img/avatar/avatar-10.jpg" class="rounded-circle" alt="image">
                                    </div>
                                </div>
                                <div class="users-list-body">
                                    <div>
                                        <h5>Regina Dickerson</h5>
                                        <p><span class="animate-typing-col">
<span class="dot"></span>
<span class="dot"></span>
<span class="dot"></span>
</span>
                                        </p>
                                    </div>
                                    <div class="last-chat-time">
                                        <small class="text-muted">05 min</small>
                                    </div>
                                </div>
                            </li>
                            <li class="user-list-item">
                                <div>
                                    <div class="avatar avatar-online">
                                        <div class="letter-avatar">
                                            M
                                        </div>
                                    </div>
                                </div>
                                <div class="users-list-body">
                                    <div>
                                        <h5>Townsend Seary</h5>
                                        <p><span class="material-icons">insert_photo</span> Photo</p>
                                    </div>
                                    <div class="last-chat-time">
                                        <small class="text-muted">45 min</small>
                                    </div>
                                </div>
                            </li>
                            <li class="user-list-item">
                                <div>
                                    <div class="avatar avatar-online">
                                        <img src="assets/img/avatar/avatar-11.jpg" class="rounded-circle" alt="image">
                                    </div>
                                </div>
                                <div class="users-list-body">
                                    <div>
                                        <h5>Margaretta Worvell</h5>
                                        <p class="missed-call-col"><span class="material-icons">call_missed</span>
                                            Missed Call</p>
                                    </div>
                                    <div class="last-chat-time">
                                        <small class="text-muted">52 min</small>
                                    </div>
                                </div>
                            </li>
                            <li class="user-list-item">
                                <div>
                                    <div class="avatar avatar-away">
                                        <img src="assets/img/avatar/avatar-2.jpg" class="rounded-circle" alt="image">
                                    </div>
                                </div>
                                <div class="users-list-body">
                                    <div>
                                        <h5>#Tech Support</h5>
                                        <p><strong>Haidar</strong> : Hi!!!</p>
                                    </div>
                                    <div class="last-chat-time">
                                        <small class="text-muted">Yesterday</small>
                                        <div class="new-message-count">11</div>
                                    </div>
                                </div>
                            </li>
                            <li class="user-list-item">
                                <div>
                                    <div class="avatar avatar-online">
                                        <div class="letter-avatar">
                                            A
                                        </div>
                                    </div>
                                </div>
                                <div class="users-list-body">
                                    <div>
                                        <h5>Harald Kowalski</h5>
                                        <p><span class="material-icons">videocam</span> It seems logical that the</p>
                                    </div>
                                    <div class="last-chat-time">
                                        <small class="text-muted">Yesterday</small>
                                    </div>
                                </div>
                            </li>
                            <li class="user-list-item">
                                <div>
                                    <div class="avatar avatar-away">
                                        <img src="assets/img/avatar/avatar-12.jpg" class="rounded-circle" alt="image">
                                    </div>
                                </div>
                                <div class="users-list-body">
                                    <div>
                                        <h5>Alexandr Donnelly</h5>
                                        <p><span class="material-icons">settings_voice</span> 0.25</p>
                                    </div>
                                    <div class="last-chat-time">
                                        <small class="text-muted">Yesterday</small>
                                    </div>
                                </div>
                            </li>
                            <li class="user-list-item">
                                <div>
                                    <div class="avatar avatar-online">
                                        <img src="assets/img/avatar/avatar-4.jpg" class="rounded-circle" alt="image">
                                    </div>
                                </div>
                                <div class="users-list-body">
                                    <div>
                                        <h5>Regina Dickerson</h5>
                                        <p>It seems logical that the</p>
                                    </div>
                                    <div class="last-chat-time">
                                        <small class="text-muted">Yesterday</small>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>


        <div class="chat" id="middle">
            <div class="slimscroll">
                <div class="chat-header">
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
                            <img src="assets/img/avatar/avatar-8.jpg" class="rounded-circle" alt="image">
                        </figure>
                        <div class="mt-1">
                            <h5>Doris Brown</h5>
                            <small class="online">
                                Online
                            </small>
                        </div>
                    </div>
                    <div class="chat-options">
                        <ul class="list-inline">
                            <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                title="Search">
                                <a href="javascript:void(0)" class="btn btn-outline-light chat-search-btn">
                                    <i class="fas fa-search"></i>
                                </a>
                            </li>
                            <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                title="Voice call">
                                <a href="javascript:void(0)" class="btn btn-outline-light" data-bs-toggle="modal"
                                   data-bs-target="#voice_call">
                                    <i class="fas fa-phone-alt voice_chat_phone"></i>
                                </a>
                            </li>
                            <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                title="Video call">
                                <a href="javascript:void(0)" class="btn btn-outline-light" data-bs-toggle="modal"
                                   data-bs-target="#video_call">
                                    <i class="fas fa-video"></i>
                                </a>
                            </li>
                            <li class="list-inline-item dream_profile_menu" data-bs-toggle="tooltip"
                                data-bs-placement="bottom" title="Profile">
                                <a href="javascript:void(0)" class="btn btn-outline-light">
                                    <i class="fas fa-user"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn btn-outline-light no-bg" href="#" data-bs-toggle="dropdown">
                                    <i class="fas fa-ellipsis-h"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item dream_profile_menu">Archive <span><i
                                                class="fas fa-archive"></i></span></a>
                                    <a href="#" class="dropdown-item">Muted <span
                                            class="material-icons">volume_off</span></a>
                                    <a href="#" class="dropdown-item">Delete <span><i
                                                class="far fa-trash-alt"></i></span></a>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="chat-search">
                        <form>
                            <span class="fas fa-search form-control-feedback"></span>
                            <input type="text" name="chat-search" placeholder="Search Chats" class="form-control">
                            <div class="close-btn-chat"><span class="material-icons">close</span></div>
                        </form>
                    </div>

                </div>
                <div class="chat-body">
                    <div class="messages">
                        <div class="chats">
                            <div class="chat-avatar">
                                <img src="assets/img/avatar/avatar-8.jpg" class="rounded-circle dreams_chat"
                                     alt="image">
                            </div>
                            <div class="chat-content">
                                <div class="message-content">
                                    Hi James! What’s Up?
                                    <div class="chat-time">
                                        <div>
                                            <div class="time"><i class="fas fa-clock"></i> 10:00</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="chat-profile-name">
                                    <h6>Doris Brown</h6>
                                </div>
                            </div>
                            <div class="chat-action-btns ms-3">
                                <div class="chat-action-col">
                                    <a class="#" href="#" data-bs-toggle="dropdown">
                                        <i class="fas fa-ellipsis-h"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="#" class="dropdown-item dream_profile_menu">Copy <span><i
                                                    class="far fa-copy"></i></span></a>
                                        <a href="#" class="dropdown-item">Save <span class="material-icons">save</span></a>
                                        <a href="#" class="dropdown-item">Forward <span><i
                                                    class="fas fa-share"></i></span></a>
                                        <a href="#" class="dropdown-item">Delete <span><i class="far fa-trash-alt"></i></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="chats chats-right">
                            <div class="chat-content">
                                <div class="message-content">
                                    Good morning, How are you? What about our next meeting?
                                    <div class="chat-time">
                                        <div>
                                            <div class="time"><i class="fas fa-clock"></i> 10:00</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="chat-profile-name text-end">
                                    <h6>Alexandr</h6>
                                </div>
                            </div>
                            <div class="chat-avatar">
                                <img src="assets/img/avatar/avatar-12.jpg" class="rounded-circle dreams_chat"
                                     alt="image">
                            </div>
                            <div class="chat-action-btns me-2">
                                <div class="chat-action-col">
                                    <a class="#" href="#" data-bs-toggle="dropdown">
                                        <i class="fas fa-ellipsis-h"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="#" class="dropdown-item dream_profile_menu">Copy <span><i
                                                    class="far fa-copy"></i></span></a>
                                        <a href="#" class="dropdown-item">Save <span class="material-icons">save</span></a>
                                        <a href="#" class="dropdown-item">Forward <span><i
                                                    class="fas fa-share"></i></span></a>
                                        <a href="#" class="dropdown-item">Delete <span><i class="far fa-trash-alt"></i></span></a>
                                    </div>
                                </div>
                                <div class="chat-read-col">
                                    <span class="material-icons">done_all</span>
                                </div>
                            </div>
                        </div>
                        <div class="chats">
                            <div class="chat-avatar">
                                <img src="assets/img/avatar/avatar-8.jpg" class="rounded-circle dreams_chat"
                                     alt="image">
                            </div>
                            <div class="chat-content">
                                <div class="message-content">
                                    & Next meeting tomorrow 10.00AM
                                    <div class="chat-time">
                                        <div>
                                            <div class="time"><i class="fas fa-clock"></i> 10:06</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="chat-profile-name">
                                    <h6>Doris Brown</h6>
                                </div>
                            </div>
                            <div class="chat-action-btns ms-3">
                                <div class="chat-action-col">
                                    <a class="#" href="#" data-bs-toggle="dropdown">
                                        <i class="fas fa-ellipsis-h"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="#" class="dropdown-item dream_profile_menu">Copy <span><i
                                                    class="far fa-copy"></i></span></a>
                                        <a href="#" class="dropdown-item">Save <span class="material-icons">save</span></a>
                                        <a href="#" class="dropdown-item">Forward <span><i
                                                    class="fas fa-share"></i></span></a>
                                        <a href="#" class="dropdown-item">Delete <span><i class="far fa-trash-alt"></i></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="chat-line">
                            <span class="chat-date">Today</span>
                        </div>
                        <div class="chats chats-right">
                            <div class="chat-content">
                                <div class="message-content">
                                    Wow Thats Great
                                    <div class="chat-time">
                                        <div>
                                            <div class="time"><i class="fas fa-clock"></i> 10:02</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="chat-profile-name text-end">
                                    <h6>Alexandr</h6>
                                </div>
                            </div>
                            <div class="chat-avatar">
                                <img src="assets/img/avatar/avatar-12.jpg" class="rounded-circle dreams_chat"
                                     alt="image">
                            </div>
                            <div class="chat-action-btns me-2">
                                <div class="chat-action-col">
                                    <a class="#" href="#" data-bs-toggle="dropdown">
                                        <i class="fas fa-ellipsis-h"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="#" class="dropdown-item dream_profile_menu">Copy <span><i
                                                    class="far fa-copy"></i></span></a>
                                        <a href="#" class="dropdown-item">Save <span class="material-icons">save</span></a>
                                        <a href="#" class="dropdown-item">Forward <span><i
                                                    class="fas fa-share"></i></span></a>
                                        <a href="#" class="dropdown-item">Delete <span><i class="far fa-trash-alt"></i></span></a>
                                    </div>
                                </div>
                                <div class="chat-read-col">
                                    <span class="material-icons">done_all</span>
                                </div>
                            </div>
                        </div>
                        <div class="chats">
                            <div class="chat-avatar">
                                <img src="assets/img/avatar/avatar-8.jpg" class="rounded-circle dreams_chat"
                                     alt="image">
                            </div>
                            <div class="chat-content">
                                <div class="message-content">
                                    <div class="download-col">
                                        <ul>
                                            <li>
                                                <div class="image-download-col">
                                                    <a href="assets/img/chat-download.jpg" data-fancybox="gallery"
                                                       class="fancybox">
                                                        <img src="assets/img/chat-download.jpg" alt>
                                                    </a>
                                                    <div class="download-action d-flex align-items-center">
                                                        <div><a href="#"><i class="fas fa-cloud-download-alt"></i></a>
                                                        </div>
                                                        <div><a href="#"><i class="fas fa-ellipsis-h"></i></a></div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="image-download-col image-not-download">
                                                    <a href="assets/img/chat-download.jpg" data-fancybox="gallery"
                                                       class="fancybox">
                                                        <img src="assets/img/chat-download.jpg" alt>
                                                    </a>
                                                    <div class="download-action d-flex align-items-center">
                                                        <div><a href="#"><i class="fas fa-cloud-download-alt"></i></a>
                                                        </div>
                                                        <div><a href="#"><i class="fas fa-ellipsis-h"></i></a></div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="image-download-col image-not-download">
                                                    <a href="assets/img/chat-download.jpg" data-fancybox="gallery"
                                                       class="fancybox">
                                                        <img src="assets/img/chat-download.jpg" alt>
                                                    </a>
                                                    <div class="download-action d-flex align-items-center">
                                                        <div><a href="#"><i class="fas fa-cloud-download-alt"></i></a>
                                                        </div>
                                                        <div><a href="#"><i class="fas fa-ellipsis-h"></i></a></div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="chat-time">
                                        <div>
                                            <div class="time"><i class="fas fa-clock"></i> 10:00</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="chat-profile-name">
                                    <h6>Doris Brown</h6>
                                </div>
                            </div>
                            <div class="chat-action-btns ms-3">
                                <div class="chat-action-col">
                                    <a class="#" href="#" data-bs-toggle="dropdown">
                                        <i class="fas fa-ellipsis-h"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="#" class="dropdown-item dream_profile_menu">Copy <span><i
                                                    class="far fa-copy"></i></span></a>
                                        <a href="#" class="dropdown-item">Save <span class="material-icons">save</span></a>
                                        <a href="#" class="dropdown-item">Forward <span><i
                                                    class="fas fa-share"></i></span></a>
                                        <a href="#" class="dropdown-item">Delete <span><i class="far fa-trash-alt"></i></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="chats chats-right">
                            <div class="chat-content">
                                <div class="message-content">
                                    <div class="file-download d-flex align-items-center">
                                        <div class="file-type d-flex align-items-center justify-content-center me-2">
                                            <i class="far fa-file-archive"></i>
                                        </div>
                                        <div class="file-details">
                                            <span class="file-name">filename.zip</span>
                                            <span class="file-size">10.6MB</span>
                                        </div>
                                        <div class="download-action d-flex align-items-center">
                                            <div><a href="#"><i class="fas fa-cloud-download-alt"></i></a></div>
                                            <div><a href="#"><i class="fas fa-ellipsis-h"></i></a></div>
                                        </div>
                                    </div>
                                    <div class="chat-time">
                                        <div>
                                            <div class="time"><i class="fas fa-clock"></i> 10:02</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="chat-profile-name text-end">
                                    <h6>Alexandr</h6>
                                </div>
                            </div>
                            <div class="chat-avatar">
                                <img src="assets/img/avatar/avatar-12.jpg" class="rounded-circle dreams_chat"
                                     alt="image">
                            </div>
                            <div class="chat-action-btns me-2">
                                <div class="chat-action-col">
                                    <a class="#" href="#" data-bs-toggle="dropdown">
                                        <i class="fas fa-ellipsis-h"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="#" class="dropdown-item dream_profile_menu">Copy <span><i
                                                    class="far fa-copy"></i></span></a>
                                        <a href="#" class="dropdown-item">Save <span class="material-icons">save</span></a>
                                        <a href="#" class="dropdown-item">Forward <span><i
                                                    class="fas fa-share"></i></span></a>
                                        <a href="#" class="dropdown-item">Delete <span><i class="far fa-trash-alt"></i></span></a>
                                    </div>
                                </div>
                                <div class="chat-read-col">
                                    <span class="material-icons">done_all</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="chat-footer">
                <form>
                    <div class="smile-col">
                        <a href="#"><i class="far fa-smile"></i></a>
                    </div>
                    <div class="attach-col">
                        <a href="#"><i class="fas fa-paperclip"></i></a>
                    </div>
                    <input type="text" class="form-control chat_form" placeholder="Enter Message.....">
                    <div class="form-buttons">
                        <button class="btn send-btn" type="submit">
                            <span class="material-icons">send</span>
                        </button>
                    </div>
                    <div class="specker-col">
                        <a href="#"><span class="material-icons">settings_voice</span></a>
                    </div>
                </form>
            </div>
        </div>


        <div class="right-sidebar right_sidebar_profile" id="middle1">
            <div class="right-sidebar-wrap active">
                <div class="slimscroll">
                    <div class="left-chat-title d-flex justify-content-between align-items-center p-3">
                        <div class="chat-title">
                            <h4>PROFILE</h4>
                        </div>
                        <div class="contact-close_call text-end">
                            <a href="#" class="close_profile close_profile4">
                                <span class="material-icons">close</span>
                            </a>
                        </div>
                    </div>
                    <div class="sidebar-body">
                        <div class="mt-0 right_sidebar_logo">
                            <div class="text-center mb-2 right-sidebar-profile">
                                <figure class="avatar avatar-xl mb-3">
                                    <img src="assets/img/avatar/avatar-2.jpg" class="rounded-circle" alt="image">
                                </figure>
                                <h5 class="profile-name">Scott Albright</h5>
                                <div class="online-profile">
                                    <span>online</span>
                                </div>
                            </div>
                            <div>
                                <div class="about-media-tabs">
                                    <nav>
                                        <div class="nav nav-tabs justify-content-center" id="nav-tab">
                                            <a class="nav-item nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                               href="#about">About</a>
                                            <a class="nav-item nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                                               href="#media">Media</a>
                                        </div>
                                    </nav>
                                    <div class="tab-content" id="nav-tabContent">
                                        <div class="tab-pane fade show active" id="about">
                                            <p>If several languages coalesce, the grammar of the resulting language is
                                                more simple and regular than that of the individual.</p>
                                            <div class="member-details">
                                                <ul>
                                                    <li>
                                                        <h6>Phone</h6>
                                                        <span>555-555-21541</span>
                                                    </li>
                                                    <li>
                                                        <h6>Nick Name</h6>
                                                        <span>Alberywo</span>
                                                    </li>
                                                    <li>
                                                        <h6>Email</h6>
                                                        <span><a
                                                                href="https://dreamschat.dreamguystech.com/cdn-cgi/l/email-protection"
                                                                class="__cf_email__"
                                                                data-cfemail="89c8e5ebecfbf0fee6c9eee4e8e0e5a7eae6e4">[email&#160;protected]</a></span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="social-media-col">
                                                <h6>Social media accounts</h6>
                                                <ul>
                                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="settings-col">
                                                <h6>Settings</h6>
                                                <ul>
                                                    <li class="d-flex align-items-center">
                                                        <label class="switch">
                                                            <input type="checkbox" checked>
                                                            <span class="slider round"></span>
                                                        </label>
                                                        <div>
                                                            <span>Block</span>
                                                        </div>
                                                    </li>
                                                    <li class="d-flex align-items-center">
                                                        <label class="switch">
                                                            <input type="checkbox">
                                                            <span class="slider round"></span>
                                                        </label>
                                                        <div>
                                                            <span>Mute</span>
                                                        </div>
                                                    </li>
                                                    <li class="d-flex align-items-center">
                                                        <label class="switch">
                                                            <input type="checkbox">
                                                            <span class="slider round"></span>
                                                        </label>
                                                        <div>
                                                            <span>Get notification</span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="media">
                                            <div class="file-download-col">
                                                <ul>
                                                    <li>
                                                        <div class="image-download-col">
                                                            <a href="assets/img/chat-download.jpg"
                                                               data-fancybox="gallery" class="fancybox">
                                                                <img src="assets/img/chat-download.jpg" alt>
                                                            </a>
                                                            <div class="download-action d-flex align-items-center">
                                                                <div><a href="#"><i
                                                                            class="fas fa-cloud-download-alt"></i></a>
                                                                </div>
                                                                <div><a href="#"><i class="fas fa-ellipsis-h"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="image-download-col">
                                                            <a href="assets/img/chat-download.jpg"
                                                               data-fancybox="gallery" class="fancybox">
                                                                <img src="assets/img/chat-download.jpg" alt>
                                                            </a>
                                                            <div class="download-action d-flex align-items-center">
                                                                <div><a href="#"><i
                                                                            class="fas fa-cloud-download-alt"></i></a>
                                                                </div>
                                                                <div><a href="#"><i class="fas fa-ellipsis-h"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="image-download-col">
                                                            <a href="assets/img/chat-download.jpg"
                                                               data-fancybox="gallery" class="fancybox">
                                                                <img src="assets/img/chat-download.jpg" alt>
                                                            </a>
                                                            <div class="download-action d-flex align-items-center">
                                                                <div><a href="#"><i
                                                                            class="fas fa-cloud-download-alt"></i></a>
                                                                </div>
                                                                <div><a href="#"><i class="fas fa-ellipsis-h"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="image-download-col">
                                                            <a href="assets/img/chat-download.jpg"
                                                               data-fancybox="gallery" class="fancybox">
                                                                <img src="assets/img/chat-download.jpg" alt>
                                                            </a>
                                                            <div class="download-action d-flex align-items-center">
                                                                <div><a href="#"><i
                                                                            class="fas fa-cloud-download-alt"></i></a>
                                                                </div>
                                                                <div><a href="#"><i class="fas fa-ellipsis-h"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="image-download-col">
                                                            <a href="assets/img/chat-download.jpg"
                                                               data-fancybox="gallery" class="fancybox">
                                                                <img src="assets/img/chat-download.jpg" alt>
                                                            </a>
                                                            <div class="download-action d-flex align-items-center">
                                                                <div><a href="#"><i
                                                                            class="fas fa-cloud-download-alt"></i></a>
                                                                </div>
                                                                <div><a href="#"><i class="fas fa-ellipsis-h"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="image-download-col">
                                                            <a href="assets/img/chat-download.jpg"
                                                               data-fancybox="gallery" class="fancybox">
                                                                <img src="assets/img/chat-download.jpg" alt>
                                                            </a>
                                                            <div class="download-action d-flex align-items-center">
                                                                <div><a href="#"><i
                                                                            class="fas fa-cloud-download-alt"></i></a>
                                                                </div>
                                                                <div><a href="#"><i class="fas fa-ellipsis-h"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="full-width text-center">
                                                        <a href="#" class="load-more-btn">More 154 Files <i
                                                                class="fas fa-sort-down"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="report-col">
                        <ul>
                            <li><a href="#"><span class="material-icons">report_problem</span> Report Chat</a></li>
                            <li><a href="#"><span><i class="far fa-trash-alt"></i></span> Delete Chat</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <div class="modal fade" id="add-user">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                        <span class="material-icons">person_add</span>Add Friends
                    </h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span class="material-icons">close</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form action="https://dreamschat.dreamguystech.com/template-html/template2/new-friends">
                        <div class="form-group">
                            <label>User Name</label>
                            <input class="form-control form-control-lg group_formcontrol" name="new-chat-title"
                                   type="text">
                        </div>
                        <div class="form-group">
                            <label>Phone Number</label>
                            <input class="form-control form-control-lg group_formcontrol" name="new-chat-title"
                                   type="text">
                        </div>
                    </form>

                    <div class="form-row profile_form text-end float-end m-0 align-items-center">

                        <div class="cancel-btn me-4">
                            <a href="#" data-bs-dismiss="modal" aria-label="Close">Cancel</a>
                        </div>
                        <div class>
                            <button type="button" class="btn btn-block newgroup_create mb-0" data-bs-dismiss="modal"
                                    aria-label="Close">
                                Add User
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="add-contact">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                        <span class="material-icons">person_add</span>Add Friends
                    </h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span class="material-icons">close</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form action="https://dreamschat.dreamguystech.com/template-html/template2/new-friends">
                        <div class="form-group">
                            <label>Name</label>
                            <input class="form-control form-control-lg group_formcontrol" name="new-chat-title"
                                   type="text">
                        </div>
                        <div class="form-group">
                            <label>Nickname</label>
                            <input class="form-control form-control-lg group_formcontrol" name="new-chat-title"
                                   type="text">
                        </div>
                        <div class="form-group">
                            <label>Phone Number</label>
                            <input class="form-control form-control-lg group_formcontrol" name="new-chat-title"
                                   type="text">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input class="form-control form-control-lg group_formcontrol" name="new-chat-title"
                                   type="email">
                        </div>
                    </form>

                    <div class="form-row profile_form text-end float-end m-0 align-items-center">

                        <div class="cancel-btn me-4">
                            <a href="#" data-bs-dismiss="modal" aria-label="Close">Cancel</a>
                        </div>
                        <div class>
                            <button type="button" class="btn btn-block newgroup_create mb-0" data-bs-dismiss="modal"
                                    aria-label="Close">
                                Add to contacts
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="add-new-group">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                        <span class="material-icons group-add-btn">group_add</span>Create a New Group
                    </h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span class="material-icons">close</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form action="https://dreamschat.dreamguystech.com/template-html/template2/new-friends">
                        <div class="form-group">
                            <label>Group Name</label>
                            <input class="form-control form-control-lg group_formcontrol" name="new-chat-title"
                                   type="text">
                        </div>
                        <div class="form-group">
                            <label>Choose profile picture</label>
                            <div class="custom-input-file form-control form-control-lg group_formcontrol">
                                <input type="file" class>
                                <span class="browse-btn">Browse File</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Topic (optional)</label>
                            <input class="form-control form-control-lg group_formcontrol" name="new-chat-title"
                                   type="text">
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control form-control-lg group_formcontrol"></textarea>
                        </div>
                        <div class="form-group">
                            <div class="d-flex align-items-center">
                                <label class="custom-radio me-3">Private Group
                                    <input type="radio" checked="checked" name="radio">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="custom-radio">Public Group
                                    <input type="radio" name="radio">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                    </form>

                    <div class="form-row profile_form text-end float-end m-0 align-items-center">

                        <div class="cancel-btn me-4">
                            <a href="#" data-bs-dismiss="modal" aria-label="Close">Cancel</a>
                        </div>
                        <div class>
                            <button type="button" class="btn btn-block newgroup_create mb-0" data-bs-toggle="modal"
                                    data-bs-target="#add-group-member" data-bs-dismiss="modal" aria-label="Close">
                                Add Participants
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade custom-border-modal" id="add-group-member">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                        <span class="material-icons group-add-btn">group_add</span>Add Group Members
                    </h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span class="material-icons">close</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="search_chat has-search me-0 ms-0">
                        <span class="fas fa-search form-control-feedback"></span>
                        <input class="form-control chat_input" id="search-contact1" type="text"
                               placeholder="Search Contacts">
                    </div>
                    <div class="sidebar">
                        <span class="contact-name-letter">A</span>
                        <ul class="user-list mt-2">
                            <li class="user-list-item">
                                <div class="avatar avatar-online">
                                    <img src="assets/img/avatar/avatar-1.jpg" class="rounded-circle" alt="image">
                                </div>
                                <div class="users-list-body align-items-center">
                                    <div>
                                        <h5>Albert Rodarte</h5>
                                    </div>
                                    <div class="last-chat-time">
                                        <label class="custom-check">
                                            <input type="checkbox" checked="checked">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </li>
                            <li class="user-list-item">
                                <div class="avatar avatar-online">
                                    <img src="assets/img/avatar/avatar-2.jpg" class="rounded-circle" alt="image">
                                </div>
                                <div class="users-list-body align-items-center">
                                    <div>
                                        <h5>Allison Etter</h5>
                                    </div>
                                    <div class="last-chat-time">
                                        <label class="custom-check">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <span class="contact-name-letter mt-3">C</span>
                        <ul class="user-list mt-2">
                            <li class="user-list-item">
                                <div class="avatar avatar-online">
                                    <img src="assets/img/avatar/avatar-3.jpg" class="rounded-circle" alt="image">
                                </div>
                                <div class="users-list-body align-items-center">
                                    <div>
                                        <h5>Craig Smiley</h5>
                                    </div>
                                    <div class="last-chat-time">
                                        <label class="custom-check">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </li>
                            <li class="user-list-item">
                                <div class="avatar avatar-online">
                                    <img src="assets/img/avatar/avatar-4.jpg" class="rounded-circle" alt="image">
                                </div>
                                <div class="users-list-body align-items-center">
                                    <div>
                                        <h5>Caniel Clay</h5>
                                    </div>
                                    <div class="last-chat-time">
                                        <label class="custom-check">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="form-row profile_form text-end float-end m-0 mt-3 align-items-center">

                        <div class="cancel-btn me-3">
                            <a href="#" data-bs-dismiss="modal" aria-label="Close">Cancel</a>
                        </div>
                        <div class>
                            <button type="button" class="btn newgroup_create previous mb-0 me-3" data-bs-toggle="modal"
                                    data-bs-target="#add-new-group" data-bs-dismiss="modal" aria-label="Close">
                                Previous
                            </button>
                        </div>
                        <div class>
                            <button type="button" class="btn btn-block newgroup_create mb-0" data-bs-dismiss="modal"
                                    aria-label="Close">
                                Create Group
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="video_call" role="document">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content voice_content">
                <div class="modal-body voice_body">
                    <div class="call-box incoming-box">
                        <div class="call-wrapper">
                            <div class="call-inner">
                                <div class="call-user">
                                    <img alt="User Image" src="assets/img/avatar/avatar-8.jpg" class="call-avatar">
                                    <h4>Brietta Blogg <span>video calling</span>
                                    </h4>
                                </div>
                                <div class="call-items">
                                    <a href="#" class="btn call-item call-end" data-bs-dismiss="modal">
                                        <span class="material-icons">close</span>
                                    </a>
                                    <a href="#" class="btn call-item call-start" data-bs-dismiss="modal">
                                        <i class="fas fa-video"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="voice_call" role="document">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content voice_content">
                <div class="modal-body voice_body">
                    <div class="call-box incoming-box">
                        <div class="call-wrapper">
                            <div class="call-inner">
                                <div class="call-user">
                                    <img alt="User Image" src="assets/img/avatar/avatar-8.jpg" class="call-avatar">
                                    <h4>Brietta Blogg <span>voice calling</span>
                                    </h4>
                                </div>
                                <div class="call-items">
                                    <a href="#" class="btn call-item call-end" data-bs-dismiss="modal">
                                        <span class="material-icons">close</span>
                                    </a>
                                    <a href="#" class="btn call-item call-start" data-bs-dismiss="modal">
                                        <i class="fas fa-video"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@include('layouts.script')
@yield('page-script')
</body>

<!-- Mirrored from dreamschat.dreamguystech.com/template-html/template2/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Aug 2023 04:44:55 GMT -->
</html>
