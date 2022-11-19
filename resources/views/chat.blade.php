@extends('layouts.app')

@push('css')
    <style>
        .container {
            max-width: 1170px;
            margin: auto;
        }

        img {
            max-width: 100%;
        }

        .inbox_people {
            background: rgba(243, 243, 243, 1);
            float: left;
            overflow: hidden;
        }

        .inbox_msg {
            clear: both;
            overflow: hidden;
        }

        .top_spac {
            margin: 20px 0 0;
        }


        .recent_heading {
            float: left;
            width: 40%;
        }

        .srch_bar {
            display: block;
        }

        .headind_srch {
            padding: 10px 29px 10px 16px;
            overflow: hidden;
        }

        .recent_heading h4 {
            font-size: 21px;
            margin: auto;
        }

        .srch_bar input {
            border: 1px solid #cdcdcd;
            border-width: 0 0 1px 0;
            width: 100%;
            background: none;
        }

        .srch_bar .input-group-addon button {
            background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
            border: medium none;
            padding: 0;
            color: #707070;
            font-size: 18px;
        }

        .srch_bar .input-group-addon {
            margin: 0 0 0 -27px;
            position: absolute;
            right: 25px;
            bottom: -2px;
        }

        .chat_ib h5 {
            font-size: 20px;
            font-family: 'RockoFLF Bold';
            margin: 0px;
        }

        .chat_ib h5 span {
            font-size: 13px;
            float: right;
        }

        .chat_ib p {
            font-family: 'RockoFLF Regular';
            font-size: 16px;
            color: rgba(36, 36, 36, 1);
            margin: auto
        }

        .chat_img {
            float: left;
            width: 11%;
        }

        .chat_ib {
            float: left;
            padding: 0 0 0 15px;
            width: 88%;
        }

        .chat_date {
            font-family: 'RockoFLF Regular';
            font-style: normal;
            font-weight: 500;
            font-size: 14px;
            line-height: 18px;
        }

        .chat_people {
            overflow: hidden;
            clear: both;
        }

        .chat_list {
            margin: 0;
            padding: 18px 16px 10px;
        }

        .inbox_chat {
            height: 550px;
            overflow-y: scroll;
        }

        .active_chat {
            background: #ebebeb;
        }

        /* .incoming_msg_img {
                        display: inline-block;
                        width: 6%;
                    } */

        .received_msg {
            display: inline-block;
            padding: 0 0 0 10px;
            vertical-align: top;
            width: 92%;
        }

        .received_withd_msg p {
            background: rgba(243, 243, 243, 1);
            border-radius: 3px;
            color: rgba(36, 36, 36, 1);
            font-size: 14px;
            font-family: 'RockoFLF Regular';
            margin: 0;
            padding: 5px 10px 5px 12px;
            width: 100%;
        }

        .time_date {
            color: #747474;
            display: block;
            font-size: 12px;
            margin: 8px 0 0;
        }

        .received_withd_msg {
            width: fit-content;
            max-width: 57%;
            border-radius: 3px 10px 10px 10px;
        }

        .mesgs {
            float: left;
            padding: 15px 15px 0 5px;
            /* width: 60%; */
        }

        .sent_msg p {
            background: #F3F3F3;
            border-radius: 3px;
            font-family: 'RockoFLF Regular';
            font-size: 14px;
            margin: 0;
            color: rgba(36, 36, 36, 1);
            padding: 5px 10px 5px 12px;
            width: 100%;
        }

        .outgoing_msg {
            overflow: hidden;
            margin: 26px 0 26px;
        }

        .sent_msg {
            float: right;
            width: 46%;
        }

        .input_msg_write input {
            background: #F7F7F7;
            border-radius: 30px;
            border: medium none;
            color: #4c4c4c;
            font-size: 15px;
            min-height: 48px;
            width: 100%;
        }

        .type_msg {
            position: relative;
        }

        .msg_send_btn {
            background: #05728f none repeat scroll 0 0;
            border: medium none;
            border-radius: 50%;
            color: #fff;
            cursor: pointer;
            font-size: 17px;
            height: 33px;
            position: absolute;
            right: 0;
            top: 11px;
            width: 33px;
        }

        .messaging {
            padding: 0 0 50px 0;
        }

        .msg_history {
            height: 516px;
            overflow-y: auto;
        }
    </style>
@endpush
@section('content')
    <div class="">
        {{-- <h3 class=" text-center">Messaging</h3> --}}
        <div class="messaging">
            <div class="inbox_msg">
                <div class="row">
                    <div class="col-md-3 pr-0">
                        <div class="inbox_people">
                            <div class="headind_srch">
                                <div class="recent_heading my-3">
                                    <h4>Messaging</h4>
                                </div>
                                <div class="srch_bar">
                                    <div class="stylish-input-group" style="position: relative;">
                                        <input type="text" class="search-bar" placeholder="Search your message"
                                            style="font-family: RockoFLF Regular; background-color: rgba(233, 233, 233, 1)" />
                                        <span class="input-group-addon">
                                            <button type="button"> <img src="{{ asset('assets/images/search.png') }}" />
                                            </button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="inbox_chat">
                                <div class="chat_list active_chat">
                                    <div class="chat_people">
                                        <div class="chat_img"> <img src="{{ asset('assets/images/notification4.png') }}"
                                                alt="sunil"> </div>
                                        <div class="chat_ib">
                                            <h5>Johnny Den <span class="chat_date">5 min</span></h5>
                                            <p>It’s Okay <span class="chat_date" style="float: right;"><img
                                                        src="{{ asset('assets/images/notification4.png') }}"
                                                        style="max-width: 13px; max-height: 13px;" /></span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="chat_list">
                                    <div class="chat_people">
                                        <div class="chat_img"> <img src="{{ asset('assets/images/notification3.png') }}"
                                                alt="sunil"> </div>
                                        <div class="chat_ib">
                                            <h5>Martin Cooper <span class="chat_date">1 hr</span></h5>
                                            <p>Your Stickman was great James...<span class="chat_date"
                                                    style="float: right;"><img
                                                        src="{{ asset('assets/images/sent.svg') }}" /></span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="chat_list">
                                    <div class="chat_people">
                                        <div class="chat_img"> <img src="{{ asset('assets/images/notification2.png') }}"
                                                alt="sunil"> </div>
                                        <div class="chat_ib">
                                            <h5>James Blunt <span class="chat_date">Yesterday</span></h5>
                                            <p>Lorem ipsum alfjkhsadg<span class="chat_date" style="float: right;"><img
                                                        src="{{ asset('assets/images/msg_delivered.svg') }}" /></span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="chat_list">
                                    <div class="chat_people">
                                        <div class="chat_img"> <img src="{{ asset('assets/images/notification1.png') }}"
                                                alt="sunil"> </div>
                                        <div class="chat_ib">
                                            <h5>Nicky Shed <span class="chat_date">Sep 7</span></h5>
                                            <p>Lorem ipsum alfjkhsadg</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="chat_list">
                                    <div class="chat_people">
                                        <div class="chat_img"> <img src="{{ asset('assets/images/follower1.png') }}"
                                                alt="sunil"> </div>
                                        <div class="chat_ib">
                                            <h5>Johnny Den <span class="chat_date">Sep 7</span></h5>
                                            <p>Lorem ipsum alfjkhsadg</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="chat_list">
                                    <div class="chat_people">
                                        <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png"
                                                alt="sunil"> </div>
                                        <div class="chat_ib">
                                            <h5>James Blunt <span class="chat_date">Sep 7</span></h5>
                                            <p>Lorem ipsum alfjkhsadg</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="chat_list">
                                    <div class="chat_people">
                                        <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png"
                                                alt="sunil"> </div>
                                        <div class="chat_ib">
                                            <h5>Nicky Shed <span class="chat_date">Sep 7</span></h5>
                                            <p>Lorem ipsum alfjkhsadg</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="chat_list">
                                    <div class="chat_people">
                                        <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png"
                                                alt="sunil"> </div>
                                        <div class="chat_ib">
                                            <h5>Nicky Shed <span class="chat_date">Sep 7</span></h5>
                                            <p>Lorem ipsum alfjkhsadg</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="chat_list">
                                    <div class="chat_people">
                                        <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png"
                                                alt="sunil"> </div>
                                        <div class="chat_ib">
                                            <h5>Nicky Shed <span class="chat_date">Sep 7</span></h5>
                                            <p>Lorem ipsum alfjkhsadg</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9 px-0">
                        <div class="card py-3"
                            style="border: none; border-radius: 0px; background-color: rgba(243, 243, 243, 1);">
                            <div class="container">
                                <div class="row no-gutters">
                                    <div class="col-md-4 d-flex align-items-center">
                                        <img src="{{ asset('assets/images/notification4.png') }}" alt="..."
                                            style="max-width: 55px; height: 55px;" />
                                        <div class="card-body mx-3">
                                            <h5 class="card-title mb-1 mt-0" style="font-family: RockoFLF Bold;">Johnny
                                                Den
                                            </h5>
                                            <h6 class="card-text my-0"
                                                style="font-family: RockoFLF Regular; font-size: 14px;">Seen Today and
                                                5:34pm</h6>
                                        </div>
                                    </div>
                                    <div class="col-md-8">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mesgs">
                            <div class="msg_history pr-4">
                                <div class="incoming_msg my-1">
                                    <div class="incoming_msg_img">
                                        {{-- <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> --}}
                                    </div>
                                    <div class="received_msg">
                                        <div class="received_withd_msg">
                                            <p>Test which is a new approach to have all
                                                solutions</p>
                                            {{-- <span class="time_date"> 11:01 AM | June 9</span> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="outgoing_msg">
                                    <div class="sent_msg">
                                        <p>Test which is a new approach to have all
                                            solutions</p>
                                        {{-- <span class="time_date"> 11:01 AM | June 9</span> --}}
                                    </div>
                                </div>

                                <div class="incoming_msg my-1">
                                    <div class="incoming_msg_img">
                                        {{-- <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> --}}
                                    </div>
                                    <div class="received_msg">
                                        <div class="received_withd_msg">
                                            <p>Hey Buddy! How are you?</p>
                                            {{-- <span class="time_date"> 11:01 AM | Yesterday</span> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="outgoing_msg">
                                    <div class="sent_msg">
                                        <p>In publishing and graphic design,Lorem ipsum is a placeholder In publishing and
                                            graphic design,Lorem ipsum is a placeholder</p>
                                        {{-- <span class="time_date"> 11:01 AM | Today</span> --}}
                                    </div>
                                </div>
                                <div class="outgoing_msg">
                                    <div class="sent_msg">
                                        <p>In publishing and graphic design,Lorem ipsum is a placeholder In publishing and
                                            graphic design, Lorem ipsum is a placeholder In publishing and graphic design,
                                            Lorem ipsum is a placeholder In publishing and graphic </p>
                                        {{-- <span class="time_date"> 11:01 AM | Today</span> --}}
                                    </div>
                                </div>
                                <div class="incoming_msg my-1">
                                    <div class="incoming_msg_img">
                                        {{-- <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> --}}
                                    </div>
                                    <div class="received_msg">
                                        <div class="received_withd_msg">
                                            <p>In publishing and graphic design,Lorem ipsum is a placeholder In publishing
                                                and graphic design,Lorem ipsum is a placeholder</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="incoming_msg my-1">
                                    <div class="incoming_msg_img">
                                        {{-- <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> --}}
                                    </div>
                                    <div class="received_msg">
                                        <div class="received_withd_msg">
                                            <p>In publishing and graphic design,Lorem ipsum is a placeholder In publishing
                                                and graphic design,Lorem ipsum is a placeholder</p>
                                            {{-- <span class="time_date"> 11:01 AM | Today</span> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="type_msg">
                                            <div class="input_msg_write">
                                                <input type="text" class="write_msg" placeholder="Type your message" />
                                                <button class="msg_send_btn" type="button"><img src="{{ asset('assets/images/emoji.svg') }}" /></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
